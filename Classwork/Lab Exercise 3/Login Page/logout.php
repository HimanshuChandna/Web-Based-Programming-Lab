<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>

    <?php

        session_start();
        session_destroy();

    ?>

    <h1>Session Ended</h1>
    <p>Go to the <span><a href="login_page.php">login.php</a></span></p>

</body>
</html>

