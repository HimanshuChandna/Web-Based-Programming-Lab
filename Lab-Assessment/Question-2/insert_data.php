<?php
require "db_connect.php";

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO Book (Book_name, Price) VALUES (?,?)");
$stmt->bind_param("ss", $book_name, $price);

// Set parameters and execute
$book_name = $_POST['book_name'];
$price = $_POST['price'];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>