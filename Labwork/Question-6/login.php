<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username (pattern: [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,})
    if (preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/", $username)) {

        // Sanitize username and password
        // $username = filter_var($username, FILTER_SANITIZE_EMAIL);
        // $password = filter_var($password, FILTER_SANITIZE_STRING);

        // Validate password (min 8 characters, at least one of A-Z, a-z, and 0-9, no spaces)
        if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {

            // Perform additional validation if needed

            // Simulate database check (replace this with actual database query)
            $valid_username = 'admin@gmail.com';
            $valid_password = 'Password1234';

            if ($username === $valid_username && $password === $valid_password) {
                // Redirect to dashboard or any other page on successful login
                $user = $username;
                preg_match("/\b(admin)\b/",$user,$matches);
                $display_name = $matches[0];
                echo "Welcome " . $display_name . "!";
                exit;
            } else {
                // Invalid username or password
                echo "Invalid username or password!";
            }
        } else {
            // Invalid password
            echo "Please enter a valid password (min 8 characters, at least one of A-Z, a-z, and 0-9, no spaces)!";
        }

    } else {
        // Invalid username
        echo "Please enter a valid email address!";
    }

} else {

    // If the form is not submitted, redirect back to the login form
    header("Location: login_form.html");
    exit;

}

?>s