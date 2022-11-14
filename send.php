
<?php

require_once "connection.php";


$gg = $_POST['gg'];


$query = "INSERT INTO messages (message) VALUES (:message)";
$stmt = $conn->prepare($query);
$stmt->bindValue(":message", $gg);

try {
    $stmt->execute();
    header('Location: ./index.php');
} catch (\Throwable $th) {
    //throw $th;
    var_dump($th);
}
