<?php
session_start();

if (!isset($_SESSION['user'])) {
    include "usernames.php";
    $_SESSION['user'] = [
        'username' => USERNAMES[array_rand(USERNAMES, 1)],
        'ip_address' => $_SERVER['REMOTE_ADDR']
    ];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="username" content="<?= $_SESSION['user']['username'] ?>">
    <title>Speedrun Chat App</title>

    <!-- jquery -->
    <script src="assets/jquery-3.6.1.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <script src="assets/bootstrap/bootstrap.bundle.min.js" defer></script>

    <!-- app  -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/responsive.css">
    <script src="assets/script.js" defer></script>

</head>

<body class="bg-dark text-light">
    <main>
        <code><?= $_SESSION['user']['username'] . '@' . $_SESSION['user']['ip_address'] ?></code>
        <div id="messages">
            <div id="spinner-wrapper">
                <div id="spinner" class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <div id="messages-wrapper">
            </div>
        </div>

        <form id="composer" class="p-1 gap-1" action="send.php" method="POST">
            <textarea name="message-content" class="form-control" id="message-input"></textarea>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </main>
</body>

</html>