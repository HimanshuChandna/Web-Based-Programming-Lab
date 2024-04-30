<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (!empty($username) && !empty($password)) {
        
        $valid_username = 'admin';
        $valid_password = 'password';
        
        if ($username === $valid_username && $password === $valid_password) {

            echo "Welcome ".$username."!";

        } else {
            // Invalid username or password
            echo "Invalid username or password!";
        }
    } else {
        // Username or password field is empty
        echo "Please enter both username and password!";
    }
} else {
    // If the form is not submitted
    echo "Form is not submitted !";
}
?>
    <button><a href="logout.php" target="_blank">Logout</a></button>

</body>
</html>
