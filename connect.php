<?php

$host = '127.0.0.1';
$db   = 'todo';
$user = 'bit_academy';
$pass = 'bit_academy';

$dsn = "mysql:host=localhost;dbname=todo;";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connection Successful";
} catch (PDOException $e) {
    echo "Connection Failed";
}
