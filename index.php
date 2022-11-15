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
    <title>Speedrun Chat App</title>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" defer></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>

    <!-- app  -->
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>

</head>

<body class="vw-100 vh-100 d-flex flex-column justify-content-center align-content-center">
    <div id="messages-wrapper" class="w-50">
        <!-- <div class="bubble">MESSAGE</div> -->
    </div>

    <form id="composer" action="send.php" method="POST">
        <textarea name="message-content" id="message-input" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>


</body>

</html>