<?php

    $na = [50, 122, 10, 23, 15];
    $aa = [
        "India" => "Delhi",
        "Japan" => "Tokyo",
        "UK" => "London",
        "Nepal" => "Kathmandu",
        "Bangladesh" => "Dhaka"
    ];

    do{
        echo "Select an operation for Numeriac Array: \n";
        echo "1. sort()\n";
        echo "2. rsort()\n";
        echo "Select an operation for Associative Array: \n";
        echo "3. asort()\n";
        echo "4. arsort()\n";
        echo "5. ksort()\n";
        echo "6. krsort()\n";
        echo "7. Exit \n";

        $c = readline("Enter your choice (1-7):");

        switch($c){
            case 1:
                sort($na);
                print_r($na);
                break;
            
            case 2:
                rsort($na);
                print_r($na);
                break;

            case 3:
                asort($aa);
                print_r($aa);
                break;

            case 4:
                arsort($aa);
                print_r($aa);
                break;

            case 5:
                ksort($aa);
                print_r($aa);
                break;

            case 6: 
                krsort($aa);
                print_r($aa);
                break;

            case 7:
                echo "Exiting the program. \n";
                break;

            default:
                echo "Invalid choice. Please enter a number between 1 to 7: \n";
        
        }

    } while($c != 7);

?>