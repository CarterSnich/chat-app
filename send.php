
<?php

require_once "connection.php";


$message = $_POST['message'];


$query = "INSERT INTO messages (message) VALUES (:message)";
$stmt = $conn->prepare($query);
$stmt->bindValue(":message", $message);

try {
    if ($stmt->execute()) {
        
    } else {

    }
} catch (\Throwable $th) {
    echo json_encode(false);
}
