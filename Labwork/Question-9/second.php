<?php
// Check if cookie is set
if (!isset($_COOKIE['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <h1 id="second_heading">How to create PHP Login Script using Cookies</h1>
  <div class="btn">
    <button id="second_btn"><a href="logout.php">Logout</a></button>
  </div>
  <?php
    echo "<p id='second_welcome_message'>Welcome, ". $_COOKIE['username']. "!</p>";
  ?>
</body>
</html>