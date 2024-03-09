<?php

// Allowing the user to enter three numbers
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$num3 = readline("Enter third number: ");

// Finding the greatest number using nested if statements
if ($num1 >= $num2) {
    if ($num1 >= $num3) {
        echo "The greatest number is: " . $num1 . "\n";
    } else {
        echo "The greatest number is: " . $num3 . "\n";
    }
} else {
    if ($num2 >= $num3) {
        echo "The greatest number is: " . $num2 . "\n";
    } else {
        echo "The greatest number is: " . $num3 . "\n";
    }
}

?>
