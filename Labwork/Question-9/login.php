<?php
// Hardcoded username and password
$username = 'admin';
$password = '1234';

// Login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $username && $input_password == $password) {
        // Set cookie and redirect to dashboard
        setcookie("username", $username, time() + (86400 * 30), "/"); // 30 days
        header('Location: second.php');
        exit;
    } else {
        echo "Invalid username or password";
    }
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
<form class="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<div class="form_data">
    <p id="form_heading">Login</p>
    <label class="label" for="username">Username:</label><br>
    <input class="input" type="text" id="username" name="username"><br><br>
    <label class="label" for="password">Password:</label><br>
    <input class="input" type="password" id="password" name="password"><br><br>
    <input class="btn" type="submit" value="Login">
    </div>
</form>
</body>
</html>
