<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate username and password (you can add more validation)
    if (!empty($username) && !empty($password)) {
        // Perform additional validation if needed
        // For example, check against a database
        
        // Simulate database check (replace this with actual database query)
        $valid_username = 'admin';
        $valid_password = 'password';
        
        if ($username === $valid_username && $password === $valid_password) {
            // Redirect to dashboard or any other page on successful login
            echo "Welcome ".$username."!";
            exit;
        } else {
            // Invalid username or password
            echo "Invalid username or password!";
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
