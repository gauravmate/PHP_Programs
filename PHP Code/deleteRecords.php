<?php

include("mysqlConn.php");

$deleteEmployee = $conn->query("delete from employee where emp_id=106");

if($deleteEmployee){
    echo "Employee deleted successfully";
}else{
    echo "Failed to delete employee";
}

?>