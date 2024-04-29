<?php

// Sample string to search
$string1 = "One 2 three 4 Five, 6";

// Regular expression pattern to match words starting with "fox"
$pattern1 = "/\b[0-9a-zA-Z]+\b/i";

// Performing the regular expression match using preg_match_all()
if (preg_match_all($pattern1, $string1, $matches)) {
    echo "\nMatches found (Regular expressions - modifiers):\n";
    foreach ($matches[0] as $match) {
        echo $match . "\n";
    }
} else {
    echo "No matches found.\n";
}

//  Sample string to search
$string2 = "
line 1 starts $ here +
line 2 starts here *
            ";

$pattern2 = "/^line\s.*+$/m";

// Performing the regular expression match using preg_match_all()
if (preg_match_all($pattern2, $string2, $matches)) {
    echo "\nMatches found (Regular expressions - operators):\n";
    foreach ($matches[0] as $match){
        echo $match . "\n";
    }
}
else{
    echo "No matches found.\n";
}

// Sample string to search
$string3 = "Helllooo, 123 world, 7890";

$pattern3 = "/\w+,? ?[0-9]*[0-9]?[0-9]/";

// Performing the regular expression match using preg_match_all()
if (preg_match_all($pattern3, $string3, $matches)){
    echo "\nMatches found (regular expressions - metacharacters):\n";
    foreach ($matches[0] as $match){
        echo $match . "\n";
    }
}
else{
    echo "No matches found.\n";
}
?>
