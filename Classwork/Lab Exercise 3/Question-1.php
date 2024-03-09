
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question-1</title>
    <style>
        table{
            border:2px solid black;
            padding:5px;
        }
        th, td{
            border:1px solid black;
            padding:2.5px;
        }
    </style>
</head>
<body>
<?php 

// To present data in a tabular format using 2D Associative Array (Multi Dimensional Array)

$countries = array("India" => array("capital" => "Delhi", "prime minister" => "Narendra Modi"),
                    "Japan" => array("capital" => "Tokyo", "prime minister" => "Fumio Kishida"),
                    "UK" => array("capital" => "London", "prime minister" => "Rishi Sunak"),
                    "Nepal" => array("capital" => "Kathmandu", "prime minister" => "Pushpa Kamal"),
                    "Bangladesh" => array("capital" => "Dhaka", "prime minister" => "Sheikh Hasina"));


echo "<table>";
echo "<tr>";
echo "<th>Country</th>";
echo "<th>Captial</th>";
echo "<th>Prime Minister</th>";
echo "</tr>";

foreach ($countries as $country => $info){
    echo "<tr>";
    echo "<td>".$country."</td>";
    echo "<td>".$info['capital']."</td>";
    echo "<td>".$info['prime minister']."</td>";
    echo "</tr>";
}

echo "</table>";

?>
</body>
</html>

