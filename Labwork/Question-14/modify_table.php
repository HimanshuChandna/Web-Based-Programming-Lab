<?php
require "db_connect.php";

// Add a column
$sql = "ALTER TABLE MyGuests ADD mobile INT(3)";

if ($conn->query($sql) === TRUE) {
    echo "Column added successfully<br>";
} else {
    echo "Error adding column: ". $conn->error;
}

// Modify a column
$sql = "ALTER TABLE MyGuests CHANGE mobile new_mobile INT(3)";

if ($conn->query($sql) === TRUE) {
    echo "Column modified successfully<br>";
} else {
    echo "Error modifying column: ". $conn->error;
}

// Delete a column
$sql ="ALTER TABLE MyGuests DROP new_mobile";

if ($conn->query($sql) === TRUE) {
    echo "Column deleted successfully<br>";
} else {
    echo "Error deleting column: ". $conn->error;
}

$conn->close();
?>