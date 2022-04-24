<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

date_default_timezone_set('US/Eastern');

// session_save_path('/home/users/web/b2153/ipg.ijellyrollcom/cgi-bin/tmp');

function getPdo() {
    static $pdo = null;

    if($pdo) {
        return $pdo;
    }

    /*
    $host = 'ijellyrollcom.ipagemysql.com';
    $dbname = 'recirc';
    $username = 'recirc';
    $password = '3e3Kn(QM';
    */

    $host = 'localhost';
    $dbname = 'recirc';
    $username = 'root';
    $password = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $pdo;
    } catch(PDOException $e) {
        die('Error connecting to database: ' . $e->getMessage());
    }

    return null;
}

function updateLanes($pdo, $lanes) {
    if(!isRunning($pdo)) {
        return false;
    }

    try {
        $changedLanes = compareRecirc($pdo, $lanes);

        updateRecirc($pdo, $lanes);
        
        notifyUsers($pdo, $changedLanes);
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function compareRecirc($pdo, $lanes) {
    $stmt = $pdo->prepare(
        'SELECT * ' . 
        'FROM lanes ' . 
        'WHERE lane = :lane'
    );

    $changedLanes = [];

    foreach($lanes as $lane => $recirc) {
        $stmt->execute([
            'lane' => $lane
        ]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row === false) {
            continue;
        }

        $oldRecirc = $row['recirc'];

        $diff = $recirc - $oldRecirc;

        if($diff > 0) {
            $changedLanes[$lane] = $diff;
        }
    }

    return $changedLanes;
}

function updateRecirc($pdo, $lanes) {
    $stmt = $pdo->prepare(
        'INSERT INTO lanes (lane, recirc, time) ' . 
        'VALUES (:lane, :recirc, NOW()) ' . 
        'ON DUPLICATE KEY UPDATE ' . 
        '    recirc = :recirc, ' . 
        '    time = NOW()'
    );

    foreach($lanes as $lane => $recirc) {
        $stmt->execute([
            ':lane' => $lane,
            ':recirc' => $recirc
        ]);
    }
}

function notifyUsers($pdo, $changedLanes) {
    if(count($changedLanes) === 0) {
        return false;
    }

    $users = getUsers($pdo);

    $users = array_filter($users, function($user) {
        return $user['notifications_on'] && $user['shift'] === getCurrentShift();
    });

    $recipients = array_map(function($user) {
        return $user['sms_gateway'];
    }, $users);

    $arr = [];

    foreach($changedLanes as $lane => $recirc) {
        $arr[] = "$lane ($recirc)";
    }

    $time = date('H:i');

    $message = "($time) Recirc at: " . implode(',', $arr);

    sendTextMessage($recipients, $message);

    return true;
}

function sendTextMessage($recipients, $message) {
    $mail = new PHPMailer();

    $mail->IsSMTP();                
    $mail->SMTPDebug  = false;
    $mail->SMTPAuth = true;         
    $mail->SMTPSecure = 'ssl';      
    $mail->Host = 'smtp.ipage.com';
    $mail->Port = 465;
    $mail->Encoding = '7bit';       

    $mail->Username = 'recirc@brentonsaunders.me'; 
    $mail->Password = 'pTe%,$"f4}'; 

    $mail->Subject = '';     
    $mail->Body = $message; 
    
    $mail->From = 'recirc@brentonsaunders.me';


    foreach($recipients as $recipient) {
        $mail->AddAddress($recipient);
    }

    $mail->send();
}

// 1 - Day, 2 - Night, 0 - Neither
function getCurrentShift() {
    $hour = intval(date('G'));
    $minute = intval(date('i'));

    if($hour >= 7 && ($hour <= 17 && $minute <= 30)) {
        return 1;
    }

    if($hour >= 19 || ($hour <= 5 && $minute <= 30)) {
        return 2;
    }

    return 0;
}

function isRunning($pdo) {
    try {
        $stmt = $pdo->prepare(
            'SELECT * ' . 
            'FROM running ' . 
            'WHERE time > NOW() - INTERVAL 10 MINUTE ' . 
            'AND running <> 0'
        );

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {
            return true;
        }
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }

    return false;
}

function run($pdo) {
    try {
        $stmt = $pdo->prepare(
            'INSERT INTO running (id, running, time) ' . 
            'VALUES (0, 1, NOW()) ' . 
            'ON DUPLICATE KEY UPDATE ' . 
            '    running = 1, ' .
            '    time = NOW()'
        );

        $stmt->execute();
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function stop($pdo) {
    try {
        $stmt = $pdo->prepare(
            'UPDATE running ' . 
            'SET running = 0'
        );

        $stmt->execute();
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function insertUser(
    $pdo,
    $name,
    $shift,
    $phone,
    $carrierId,
    $notificationsOn
) {
    try {
        $stmt = $pdo->prepare(
            'INSERT INTO users (name, shift, phone, carrier_id, notifications_on) ' . 
            'VALUES (:name, :shift, :phone, :carrier_id, :notifications_on) ' . 
            'ON DUPLICATE KEY UPDATE ' . 
            '    phone = :phone'
        );

        $stmt->execute([
            ':name' => $name,
            ':shift' => $shift,
            ':phone' => $phone,
            ':carrier_id' => $carrierId,
            ':notifications_on' => $notificationsOn
        ]);
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function deleteUser($pdo, $id) {
    try {
        $stmt = $pdo->prepare(
            'DELETE FROM users ' . 
            'WHERE id = :id'
        );

        $stmt->execute([
            ':id' => $id
        ]);
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function getUser($pdo, $id) {
    try {
        $stmt = $pdo->prepare(
            'SELECT * ' . 
            'FROM users ' .
            'WHERE id = :id'
        );

        $stmt->execute([
            ':id' => $id
        ]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row) {
            return $row;
        }
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }

    return null;
}

function getUsers($pdo) {
    try {
        $stmt = $pdo->prepare(
            'SELECT u.*, CONCAT(u.phone, CONCAT(\'@\', c.sms_gateway)) AS sms_gateway ' . 
            'FROM users u ' . 
            'JOIN carriers c ' . 
            'ON c.id = carrier_id ' . 
            'ORDER BY name ASC'
        );

        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }

    return [];
}

function updateUser(
    $pdo,
    $id,
    $name,
    $shift,
    $phone,
    $carrierId,
    $notificationsOn
) {
    try {
        $stmt = $pdo->prepare(
            'UPDATE users ' . 
            'SET name = :name, ' . 
            'shift = :shift, ' . 
            'phone = :phone, ' . 
            'carrier_id = :carrier_id, ' . 
            'notifications_on = :notifications_on ' . 
            'WHERE id = :id'
        );

        $stmt->execute([
            ':id' => $id,
            ':name' => $name,
            ':shift' => $shift,
            ':phone' => $phone,
            ':carrier_id' => $carrierId,
            ':notifications_on' => $notificationsOn
        ]);
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }
}

function getCarriers($pdo) {
    try {
        $stmt = $pdo->prepare(
            'SELECT * ' . 
            'FROM carriers'
        );

        $stmt->execute();

        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    } catch(PDOException $e) {
        die('Error querying database: ' . $e->getMessage());
    }

    return [];
}