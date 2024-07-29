<?php
//connectin to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbgaurav";

//create a connection
$conn = mysqli_connect($servername, $username, $password, $database );
//die if connection was not successfull
if(!$conn){
    die("sorry we faild to connect" . mysqli_connect_error());

}else{
   echo "connection was successfull"; 
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);
//fine the number of records returned
echo "<br>";
$num = mysqli_num_rows($result);
echo $num;
echo " record found in the database <br>";
//display rows returned by the sql query
if($num> 0){
    
    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo $row['sno'] . ".hello " . $row['name'] . "Wellcome to" . $row['dest'];       
         echo "<br>";
    }
}

?>
