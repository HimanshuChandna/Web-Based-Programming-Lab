<?php

require "db_connect.php";

$sql = "CREATE DATABASE Library";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: ". $conn->error;
}

$conn->close();
?>