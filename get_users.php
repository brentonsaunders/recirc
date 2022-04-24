<?php
require_once 'functions.php';

$pdo = getPdo();

$users = getUsers($pdo);

header('Content-Type: application/json; charset=utf-8');

echo json_encode($users);