<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        #header_p{
            border-left:2px solid black;
            padding:20px;
            margin-left:20px;

        }

        #footer_p{
            border-left:2px solid black;
            padding:20px;
            margin-left:20px;

        }

        #body_p{
            border-left:2px solid black;
            padding:20px;
            margin-left:20px;

        }
    
    </style>
</head>
<body>

<?php

    echo"Using require<br>";
    require("header.php");
    // echo "<br>";

    echo"Using include<br>";
    include("header.php");  
    // echo "<br>";

    echo"<p id='body_p'>This is body section</p><br>";
    // echo "<br>";

    echo"Using require<br>";
    require("footer.php");
    // echo "<br>";

    echo"Using include<br>";
    include("footer.php");

    die("Website died <br>");
    echo "ended";

    exit("Website exit");
    echo "ended";

?>

</body>
</html>