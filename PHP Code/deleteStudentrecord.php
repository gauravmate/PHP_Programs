<?php

include("PDOconn.php");

$deleteStudent = $conn->prepare("select * from student1");
$deleteStudent->execute();
$students = $deleteStudent->fetchAll(PDO::FETCH_ASSOC);
// print_r($students);
echo "<table border='1'>";
echo "<tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Student Course</th>
      <th>Student Batch</th>
      <th>Student City</th>
      <th>Student Year</th>
      <tr>";

foreach ($students as $student) {
    echo "<tr>
    <td>" . $student['id'] . "</td>
    <td>" . $student['name'] . "</td>
    <td>" . $student['course'] . "</td>
    <td>" . $student['batch'] . "</td>
    <td>" . $student['year'] . "</td>
    <td>" . $student['city'] . "</td>
    <td>
    <form method='post'>
    <button name='delete' value='" . $student['id'] . "'>Delete</button>
    </form></td>
    </tr>";
}
echo "</table>";
if (isset($_POST['delete'])) {
    $id=$_POST['delete'];

    $students = $conn->prepare("delete from student1 where id='$id'");

    if ($students -> execute()) {
        echo "Student deleted";
    } else {
        echo "Student not deleted";
    }
}
