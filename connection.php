<?php
session_start();

$servername = "remotemysql.com";
$dbname = "kjQ1QLBFTp";
$username = "kjQ1QLBFTp";
$password = "A4Podp4JmM";
$port = 3306;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=$port", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
