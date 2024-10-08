<?php

include("PDOconn.php");
$getStudents=$conn->prepare("select * from student1");
$getStudents->execute();
$students=$getStudents->fetchAll();
// echo "<pre>";
// print_r($students);
//table format
echo "<table border='1'>
<tr>
<th>Student Name</th>
<th>Student course</th>
<th>Student Batch</th>
<th>Student City</th>
<th>Student Year</th>";
foreach($students as $student)
{
    echo "<tr>
    <td>$student[name]</td>
    <td>$student[course]</td>
    <td>$student[batch]</td>
    <td>$student[city]</td> 
    <td>$student[year]</td>";
    echo "</tr>";
}
echo "</table>";

?>