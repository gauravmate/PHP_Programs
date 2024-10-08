<form action="" method="post">
    Enter ID: <br> <input type="number" name="id" placeholder="emp_id"><br><br>
    Enter Name: <br> <input type="text" name="name" placeholder="emp_name"><br><br>
    Enter Salary: <br> <input type="number" name="salary" placeholder="salary"><br><br>
    <button>Add Records</button>
</form>

<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    include("mysqlConn.php");

    $insertEmployee = $conn->query("INSERT INTO employee (emp_id, emp_name, salary) VALUES ($id, '$name', $salary)");

    if ($insertEmployee) {
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}


?>