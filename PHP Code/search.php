<form action="" method="post">
    <input type="text" name="search" placeholder="Enter Name For Search"><br><br>
    <button>Search</button>
</form>

<?php
include("PDOconn.php");
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $student = $conn->prepare("select * from student1 where name like '%$search%'");
    $student->execute();
    $result = $student->fetchAll();
    echo "<table border='1'>
    <tr>
    <th>Student Name</th>
    <th>Student course</th>
    <th>Student Batch</th>
    <th>Student City</th>
    <th>Student Year</th>";
    foreach ($result as $student) {
        echo "<tr>
        <td>$student[name]</td>
        <td>$student[course]</td>
        <td>$student[batch]</td>
        <td>$student[city]</td> 
        <td>$student[year]</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>