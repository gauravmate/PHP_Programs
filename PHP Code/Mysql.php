<?php
// connecating to the database
$servername = "localhost";
$username = "root";
$password = "";

// create a  connection
$conn = mysqli_connect($servername, $username, $password);

//create a  db
$sql = "CREATE DATABASE dbHarry";
mysqli_query($conn, $sql);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect: ". mysqli_connect_error());

}
else{
    echo"connection was successful<br>";
}
?>