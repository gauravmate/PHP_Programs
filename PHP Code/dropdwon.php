<?php

include("mysqlConn.php");

$getStudent = $conn->query("SELECT id,name FROM student1");

if ($getStudent) {
    $students = $getStudent->fetch_all(MYSQLI_ASSOC);

    // if (empty($students)) {
    //     echo "No records found.";
    // } else {
    //     print_r($students);
        // foreach ($students as $student) {
        //     echo "ID: " . $student['id'] . "<br>";
        //     echo "Name: " . $student['name'] . "<br>";
        //     echo "Course: " . $student['course'] . "<br>";
        //     echo "Batch: " . $student['batch'] . "<br>";
        //     echo "City: " . $student['city'] . "<br>";
        //     echo "Year: " . $student['year'] . "<br><br>";
        }
   // }
echo "<select>";
echo "<option>.Select Name:</option>";
 foreach ($students as $student){
    echo "<option value= ".$student['id'].">".$student['name']."</option>";
 }

echo "</select>";

?>