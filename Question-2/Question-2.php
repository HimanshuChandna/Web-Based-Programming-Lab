<?php

// Allowing the user to enter their age
$age = readline("Enter your age: ");

// Allowing the user to specify if they are a student
$isStudentInput = readline("Are you a student? (yes/no): ");

// Converting the user input to lowercase for easier comparison
$isStudent = strtolower($isStudentInput) === 'yes';

// Checking the age and student status using nested if statements
if ($age >= 18) {
    echo "You are an adult.\n";
    if ($isStudent) {
        echo "You are a student.\n";
    } else {
        echo "You are not a student.\n";
    }
} else {
    echo "You are not an adult.\n";
}

?>
