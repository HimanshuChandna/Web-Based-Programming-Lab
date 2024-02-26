<?php

// Variable with string value
$numberAsString = "100";

// Type casting to integer
$numberAsInteger = (int) $numberAsString;

// Type casting to float
$numberAsFloat = (float) $numberAsString;

// Type casting to boolean
$numberAsBoolean = (bool) $numberAsString;

// Displaying original and type casted values
echo "Original String: " . $numberAsString . "\n";
echo "Type Casted to Integer: " . $numberAsInteger . "\n";
echo "Type Casted to Float: " . $numberAsFloat . "\n";
echo "Type Casted to Boolean: " . ($numberAsBoolean ? 'true' : 'false') . "\n";

?>
