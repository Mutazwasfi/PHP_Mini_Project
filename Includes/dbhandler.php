<?php

$serverName = 'localhost';
$userName = 'root';
$passward = '';
$dbname = "myFirstDB";



try {
    $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName , $passward );
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("connection failed: ". $e->getMessage());
}

