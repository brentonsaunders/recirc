<?php
header('Access-Control-Allow-Origin: *');

require_once 'functions.php';

if(empty($_GET)) {
    http_response_code(403); exit;
}

$pdo = getPdo();

run($pdo);

updateLanes($pdo, $_GET);