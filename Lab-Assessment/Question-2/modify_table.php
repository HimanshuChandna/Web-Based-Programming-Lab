<?php
require "db_connect.php";

// Prepare and bind
$stmt = $conn->prepare("UPDATE Book SET Price=? WHERE Book_name=?");
$stmt->bind_param("ss", $book_name, $price);

// Set parameters and execute
$book_name = $_POST['book_name'];
$price = $_POST['price'];
$stmt->execute();

echo "Record updated successfully";

$stmt->close();
$conn->close();
?>


