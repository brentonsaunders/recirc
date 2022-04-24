<?php
require_once 'functions.php';

if(empty($_GET['id'])) {
    http_response_code(403); exit;
}

$pdo = getPdo();

$id = $_GET['id'];

echo $id;

if(($user = getUser($pdo, $id)) === null) {
    http_response_code(403); exit;
}

deleteUser($pdo, $id);