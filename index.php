<?php

require_once "connection.php";

if ($_SESSION['MESSAGE_REPORT']) {
    echo $_SESSION['MESSAGE_REPORT'];
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat app</title>

    <link rel="stylesheet" href="style.css">

    <script src="script.js" defer></script>

</head>

<body>
    <div id="messages">

        <?php foreach ($messages as $key => $message) : ?>
            <div class="message-control">
                <?= $message['message'] ?>
            </div>
        <?php endforeach ?>
    </div>

    <form id="composer" action="send.php" method="POST">
        <input id="message-input" type="text" name="gg" id="">
        <button type="submit">Send</button>
    </form>


</body>

</html>