<?php

// Original array
$originalArray = [1, 2, 3, 4, 5];

// array_pad() - Pad array to the specified length with a value
$paddedArray = array_pad($originalArray, 7, 0);
echo "Array after padding:\n";
foreach ($paddedArray as $value) {
    echo $value . " ";
}
echo "\n\n";

// array_slice() - Extract a slice of the array
$sliceArray = array_slice($originalArray, 2, 2);
echo "Array after slicing:\n";
foreach ($sliceArray as $value) {
    echo $value . " ";
}
echo "\n\n";

// array_splice() - Remove a portion of the array and replace it with something else
$splicedArray = $originalArray;
array_splice($splicedArray, 2, 2, [10, 20]);
echo "Array after splicing:\n";
foreach ($splicedArray as $value) {
    echo $value . " ";
}
echo "\n\n";

// list() - Assign variables as if they were an array
list($a, $b, $c) = $originalArray;
echo "Using list() function:\n";
echo "a = $a, b = $b, c = $c\n";

?>
