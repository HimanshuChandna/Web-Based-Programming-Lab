<?php

require "db_connect.php";

$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: ". $conn->error;
}

$conn->close();
?>