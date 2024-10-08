<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "gaurav_mate";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed:" . $conn->connect_error);
}

// echo "connection successfully<hr>";
