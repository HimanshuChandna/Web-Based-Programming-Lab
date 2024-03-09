<?php

    function factorialIterative($n){
        $result = 1;
        for ($i = 2; $i<=$n; $i++){
            $result *= $i;
        }
        return $result;
    }

    function factorialRecursive($n){
        if($n == 0 || $n == 1){
            return 1;
        }
        else{
            return $n*factorialRecursive($n-1);
        }
        
    }

    $num = readline("Enter a number greater than 1:");

    if($num<2){
        echo "Invalid input. Please enter a non-negative integer:\n";
    }
    else{

        $iterativeResult = factorialIterative($num);
        $recursiveResult = factorialRecursive($num);

        echo "Factorial using Iterative method: $iterativeResult\n";
        echo "Factorial using Recursive method: $recursiveResult\n";

    }

?>