<?php

include("mysqlConn.php");
$getStudent = $conn->query("select * from student1");
$students = $getStudent->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($students);

echo "<table border='1'>";
echo "<tr>
<th>Student Name</th>
<th>Student Batch</th>
<th>Student course</th>
<th>Student City</th>
<th>Student Year</th>
</tr>";

foreach($students as $student){
    echo "<tr>";
    echo "<td>" .$student['name']."</td>"; 
    echo "<td>" .$student['batch']."</td>"; 
    echo "<td>" .$student['course']."</td>"; 
    echo "<td>" .$student['city']."</td>"; 
    echo "<td>" .$student['year']."</td>"; 
    echo "</tr>";
    
}

echo "</table>";