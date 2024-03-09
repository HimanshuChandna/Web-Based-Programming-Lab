<?php

    $arr = [1,2,3,4,5];

    do{
        echo "Selecct an operation:\n";
        echo "1. Array_pad\n";
        echo "2. Array_slice\n";
        echo "3. Array_splice\n";
        echo "4. Array_chunk\n";
        echo "5. List\n";
        echo "6. Implode\n";
        echo "7. Explode\n";
        echo "8. Exit\n";

        $choice = readline("Enter your choice (1-8):");

        switch($choice){
            case 1:
                $pad = array_pad($arr,6,6);
                echo "array_pad\n";
                print_r($pad);
                break;
            
            case 2:
                $slice = array_slice($arr,2);
                echo "array_slice \n";
                print_r($slice);
                break;

            case 3:
                $splice = array_splice($arr,0,2,[8,9]);
                echo "array_splice \n";
                print_r($splice);
                break;
            
            case 4:
                $chunk = array_chunk($arr,2);
                echo "array_chunk \n";
                print_r($chunk);
                break;

            case 5:
                list($first, $second, $third) = $arr;
                echo "list() \n";
                echo "$first, $second, $third \n";
                break;

            case 6:
                $implode = implode(" ", $arr);
                echo "implode() \n";
                echo $implode."\n";
                break;
            
            case 7:
                $explode = explode(" ", $implode);
                echo "explode() \n";
                print_r($explode);
                break;

            case 8:
                echo "Exiting the program. Goodbye!!!";
                break;

            default:
                echo "Invalid Choice. Please enter a number between 1 to 8:";
        }
    } while ($choice != 8);

?>