<?php
require_once 'functions.php';

$pdo = getPdo();

$user = [];

if(!empty($_GET['id'])) {
    $id = $_GET['id'];

    $user = getUser($pdo, $id);

    if(!$user) {
        http_response_code(403); exit;
    }
}

if(!empty($_GET['name'])) {
    $user['name'] = $_GET['name'];
}

if(!empty($_GET['shift'])) {
    $user['shift'] = $_GET['shift'];
}

if(!empty($_GET['phone'])) {
    $user['phone'] = $_GET['phone'];
}

if(!empty($_GET['carrier_id'])) {
    $user['carrier_id'] = $_GET['carrier_id'];
}

if(!empty($_GET['notifications_on'])) {
    $user['notifications_on'] = ($_GET['notifications_on'] === 'true') ? 1 : 0;
}

if(isset($id)) {
    updateUser(
        $pdo,
        $id,
        $user['name'],
        $user['shift'],
        $user['phone'],
        $user['carrier_id'],
        $user['notifications_on']
    );
} else {
    insertUser(
        $pdo,
        $user['name'],
        $user['shift'],
        $user['phone'],
        $user['carrier_id'],
        $user['notifications_on']
    );
}