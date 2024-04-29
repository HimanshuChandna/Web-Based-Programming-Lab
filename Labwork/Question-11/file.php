<?php
function createFile() {
    $filename = "sample.txt";
    $file = fopen($filename, "w");
    fclose($file);
    echo "File created successfully.\n";
}

function copyFile() {
    $sourceFile = "sample.txt";
    $destinationFile = "copied_sample.txt";
    $content = file_get_contents($sourceFile);
    file_put_contents($destinationFile, $content);
    echo "File copied successfully.\n";
}

function displayFileContent() {
    $filename = "sample.txt";
    if(file_exists($filename)) {
        $content = file_get_contents($filename);
        echo "File content:\n$content\n";
    } else {
        echo "File does not exist.\n";
    }
}

function modifyFileContent() {
    $filename = "sample.txt";
    if(file_exists($filename)) {
        $content = file_get_contents($filename);
        echo "Enter new content:\n";
        $newContent = readline();
        file_put_contents($filename, $newContent);
        echo "File content modified successfully.\n";
    } else {
        echo "File does not exist.\n";
    }
}

while (true) {
    echo "\nMenu:\n";
    echo "a) Create a file\n";
    echo "b) Copy file\n";
    echo "c) Display file content\n";
    echo "d) Modify file content\n";
    echo "e) Exit\n";

    echo "Enter your choice: ";
    $choice = trim(readline());

    switch ($choice) {
        case 'a':
            createFile();
            break;
        case 'b':
            copyFile();
            break;
        case 'c':
            displayFileContent();
            break;
        case 'd':
            modifyFileContent();
            break;
        case 'e':
            echo "Exiting program.\n";
            exit();
        default:
            echo "Invalid choice. Please try again.\n";
    }
}
?>
