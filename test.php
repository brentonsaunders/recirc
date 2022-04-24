<?php
require_once 'functions.php';

$pdo = getPdo();

updateLanes($pdo, [
    'FL330' => 84
]);

/*

updateUser($pdo, 4, 'Brenton Saunders', 2, '8482408827', 17, true);

insertUser(
    $pdo,
    'Tamara Bragg',
    2,
    '0000000000',
    1,
    true
);*/