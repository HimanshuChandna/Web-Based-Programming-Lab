<?php
 
require "db_connect.php";

// Create table
$sql = "CREATE TABLE Book (
Book_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Book_name VARCHAR(20) NOT NULL,
Price numeric(5,2) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Book created successfully";
} else {
    echo "Error creating table: ". $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert_data.php" method="post">
        Book Name: <input type="text" name="book_name"><br>
        Price: <input type="text" name="price"><br>
        <input type="submit" value="Submit">
    </form>    
</body>
</html>
