<?php
require_once 'functions.php';

$pdo = getPdo();

$running = isRunning($pdo);

header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'running' => $running
]);