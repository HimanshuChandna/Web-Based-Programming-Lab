<?php

// Sample string to search
$string = "The quick brown fox jumps over the lazy dog.";

// Regular expression pattern to match words starting with "fox"
$pattern = "/\bfox\w*\b/";

// Performing the regular expression match using preg_match_all()
if (preg_match_all($pattern, $string, $matches)) {
    echo "Matches found:\n";
    foreach ($matches[0] as $match) {
        echo $match . "\n";
    }
} else {
    echo "No matches found.\n";
}

?>
