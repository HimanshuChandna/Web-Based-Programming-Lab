<?php

do {
    echo "Calculator Menu:\n";
    echo "1. Addition\n";
    echo "2. Subtraction\n";
    echo "3. Multiplication\n";
    echo "4. Division\n";
    echo "5. Exit\n";

    // Getting user choice
    $choice = readline("Enter your choice: ");

    // Perform calculation based on user choice
    switch ($choice) {
        case 1:
            $num1 = readline("Enter first number: ");
            $num2 = readline("Enter second number: ");
            echo "Result: " . ($num1 + $num2) . "\n";
            break;
        case 2:
            $num1 = readline("Enter first number: ");
            $num2 = readline("Enter second number: ");
            echo "Result: " . ($num1 - $num2) . "\n";
            break;
        case 3:
            $num1 = readline("Enter first number: ");
            $num2 = readline("Enter second number: ");
            echo "Result: " . ($num1 * $num2) . "\n";
            break;
        case 4:
            $num1 = readline("Enter first number: ");
            $num2 = readline("Enter second number: ");
            if ($num2 == 0) {
                echo "Error: Division by zero\n";
            } else {
                echo "Result: " . ($num1 / $num2) . "\n";
            }
            break;
        case 5:
            echo "Exiting calculator...\n";
            break;
        default:
            echo "Invalid choice! Please enter a number between 1 and 5.\n";
            break;
    }
} while ($choice != 5);

?>
