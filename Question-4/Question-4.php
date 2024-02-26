<?php

// Function to perform bubble sort
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

// Function to perform selection sort
function selectionSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

// Function to perform insertion sort
function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Function to perform quick sort
function quickSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }
    
    $pivot = $arr[0];
    $left = $right = array();
    
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $left[] = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    
    return array_merge(quickSort($left), array($pivot), quickSort($right));
}

// Sample array to sort
$arr = array(64, 34, 25, 12, 22, 11, 90);

// Bubble Sort
echo "Bubble Sort: ";
print_r(bubbleSort($arr));

// Selection Sort
echo "Selection Sort: ";
print_r(selectionSort($arr));

// Insertion Sort
echo "Insertion Sort: ";
print_r(insertionSort($arr));

// Quick Sort
echo "Quick Sort: ";
print_r(quickSort($arr));

?>
