<?php

    function SwapByValue($a, $b){

        $temp = $a;
        $a = $b;
        $b = $temp;

    }

    function SwapByReference(&$a, &$b){
        $temp = $a;
        $a = $b;
        $b = $temp;

    }

    $num1 = readline("Enter the first number:");
    $num2 = readline("Enter the second number:");

    echo "\nBefore swapping:\n";
    echo "Num1:$num1, Num2:$num2\n\n";

    SwapByValue($num1,$num2);
    echo "After Swap by value:\n";
    echo "Num1:$num1, Num2:$num2\n\n";

    SwapByReference($num1,$num2);
    echo "After Swap by reference:\n";
    echo "Num1:$num1, Num2:$num2\n\n";

?>