<?php
require "db_connect.php";

// Prepare and bind
$stmt = $conn->prepare("SELECT id, firstname, lastname, email FROM MyGuests");
$stmt->execute();
$result = $stmt->get_result();

echo "<table>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
<td>". $row["id"]. "</td>
<td>". $row["firstname"]. "</td>
<td>". $row["lastname"]. "</td>
<td>". $row["email"]. "</td>
</tr>";
}

echo "</table>";

$stmt->close();
$conn->close();
?>