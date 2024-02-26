<?php

echo "Calculator\n";
echo "----------------\n";

// Getting user input
$num1 = readline("Enter first number: ");
$num2 = readline("Enter second number: ");
$operator = readline("Enter operator (+, -, *, /): ");

// Performing calculation based on operator using switch-case
switch ($operator) {
    case '+':
        echo "Result: " . ($num1 + $num2) . "\n";
        break;
    case '-':
        echo "Result: " . ($num1 - $num2) . "\n";
        break;
    case '*':
        echo "Result: " . ($num1 * $num2) . "\n";
        break;
    case '/':
        if ($num2 == 0) {
            echo "Cannot divide by zero\n";
        } else {
            echo "Result: " . ($num1 / $num2) . "\n";
        }
        break;
    default:
        echo "Invalid operator\n";
        break;
}

?>
