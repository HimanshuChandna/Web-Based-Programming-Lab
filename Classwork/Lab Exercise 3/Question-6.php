<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            border:2px solid black;
            padding:10px;
            text-align:center;
        }

        form > input[type = submit]{

            margin:5px 0px 0px 0px;

        }
    </style>
    <title>Marks Calculator</title>
</head>
<body>
    
    <form method="post" action="">
        <label>Enter Marks 1:</label>
        <input type="text" for="marks1" name="marks1"><br>
        <label>Enter Marks 2:</label>
        <input type="text" for="marks2" name="marks2"><br>
        <input type="submit" value="Addition" name="submit">
    </form>
    <?php
    if (isset($_POST['marks1']) && isset($_POST['marks2'])){
        $marks1 = $_POST['marks1'];
        $marks2 = $_POST['marks2'];
        $sum = $marks1 + $marks2;
        echo "The sum of ".$marks1." and ".$marks2." is ".$sum;  
    }
    ?>
</body>
</html> 
30 januray
6 february
13 february
27 february
5 march