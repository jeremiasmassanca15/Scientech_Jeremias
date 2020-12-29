<?php
$mysqli = new mysqli("localhost", "root", "password", "naomayadb");
if($mysqli->connect_error) {
 exit('Could not connect');
}

$sql = "SELECT pro_id, pro_name
FROM products WHERE pro_id = ?";

$stmt = $mysqli->prepare(sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($pro_id, $pro_name);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>CustomerID</th>";
echo "<td>" . $pro_id . "</td>";
echo "<th>CompanyName</th>";
echo "<td>" . $pro_name . "</td>";
echo "</tr>";
echo "</table>";
?>
