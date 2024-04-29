<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve username and password from the form and sanitize inputs
    // $username = filter_var(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $password = filter_var(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    
    // Validate username and password (you can add more validation)
    if (!empty($username) && !empty($password)) {

        if (filter_var($username, FILTER_VALIDATE_EMAIL)){
        
        
        // Perform additional validation if needed
        // For example, check against a database
        
        // Simulate database check (replace this with actual database query)
        $valid_username = 'admin@gmail.com';
        $valid_password = 'password';
        
        if ($username === $valid_username && $password === $valid_password) {
            // Redirect to dashboard or any other page on successful login
            echo "Welcome ".$username."!";
            exit;
        } else {
            // Invalid username or password
            echo "Invalid username or password!";
        }
        }
    } else {
        // Username or password field is empty
        echo "Please enter both username and password!";
    }
} else {
    // If the form is not submitted, redirect back to the login form
    header("Location: login_form.html");
    exit;
}
?>
