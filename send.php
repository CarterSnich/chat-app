
<?php

require_once "connection.php";

$message = $_POST['message'];
$username = $_SESSION['user']['username'];
$ip_address = $_SESSION['user']['ip_address'];

$query = "INSERT INTO messages (
            message, username, ip_address
        ) VALUES (
            :message, :username, :ip_address
        )";
$stmt = $conn->prepare($query);
$stmt->bindValue(":message", $message);
$stmt->bindValue(":username", $username);
$stmt->bindValue(":ip_address", $ip_address);

try {
    if ($stmt->execute()) {
    } else {
    }
} catch (\Throwable $th) {
    echo json_encode(false);
}
