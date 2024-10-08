<?php

include("mysqlConn.php");

$friends = $conn->query("select * from friend");
$friends = $friends->fetch_all(MYSQLI_ASSOC);

echo "<table border='1'>";

echo 
"<tr>
<th>Name</th>
<th>Age</th>
<th>City</th>
<th>Gender</th>
</tr>";

foreach ($friends as $friend) {
    echo 
    "<tr>
    <td>" . $friend['name'] . "</td>
    <td>" . $friend['age'] . "</td>
    <td>" . $friend['city'] . "</td>
    <td>" . $friend['gender'] . "</td>
    </tr>";
}
echo "</table>";
