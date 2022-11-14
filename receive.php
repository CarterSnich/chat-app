<?php

require_once "connection.php";

$query = "SELECT * FROM messages";

$stmt = $conn->prepare($query);

if (!$stmt->execute()) {
    echo 'Failed to fetch messages';
    exit();
}

$messages = $stmt->fetchAll();


echo json_encode($messages);
