<?php
$servername = "localhost:3308";
$username = "root";
$password = "0000";
$database = "library";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
else
    {
        echo "<b>Connection successfully</b><br>";
    }

?>