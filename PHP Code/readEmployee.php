<?php

include("mysqlConn.php");

$getEmployee = $conn->query("SELECT * FROM employee");

if ($getEmployee) {
    $students = $getEmployee->fetch_all(MYSQLI_ASSOC);

    if (empty($students)) {
        echo "No records found.";
    } else {
        echo "<table border='1'>";
        echo "<tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Salary</th>
        </tr>";
        foreach ($students as $student) {
            echo "<tr>
            <td> $student[emp_id]</td>
            <td>$student[emp_name]</td>
            <td>$student[salary]</td>
            
            <td>";
        }
    }
} else {
    echo "Error fetching data: " . $conn->error;
}
