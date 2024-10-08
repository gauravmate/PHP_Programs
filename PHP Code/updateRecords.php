<?php

include("mysqlConn.php");

$updateEmployee = $conn->query("update employee set emp_name='Diapli' where emp_id=101");

if ($updateEmployee) {
    echo "Employee updated successfully";
} else {
    echo "Error updating employee";
}
