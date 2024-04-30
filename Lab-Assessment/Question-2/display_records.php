<?php
require "db_connect.php";

// Prepare and bind
$stmt = $conn->prepare("SELECT Book_id, Book_name, Price FROM Book");
$stmt->execute();
$result = $stmt->get_result();

echo "<table>
<tr>
<th>Book ID</th>
<th>Book Name</th>
<th>Price</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
<td>". $row["Book_id"]. "</td>
<td>". $row["Book_name"]. "</td>
<td>". $row["Price"]. "</td>
</tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
?>