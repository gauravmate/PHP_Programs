<form action="" method="post">
        Enter ID:<input type="number" name="id" placeholder="Enter ID" title="Please enter a valid id address"><br><br>
        Enter Name:<input type="text" name="name" placeholder="Enter Name"><br><br>
        Enter Course:<input type="text" name="course" placeholder="Enter Course"><br><br>
        Enter Batch:<input type="text" name="batch" placeholder="Enter Batch"><br><br>
        Enter City:<input type="text" name="city" placeholder="Enter City"><br><br>
        Enter Year:<input type="text" name="year" placeholder="Enter Year"><br><br>
        <button title="Click The Button">Add Records</button>
    </form>
<?php

if(isset($_POST['id'])){
    $id1 = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];
    $year = $_POST['year'];



include("mysqlConn.php");

$insertStudent=$conn->query("Insert into student1 (id,name,course,batch,city,year) values ($id1,'$name','$course','$batch','$city','$year')");

if($insertStudent){
    echo "Record insert successfuly";
}else {
    echo "Feild ";
}
}
?>