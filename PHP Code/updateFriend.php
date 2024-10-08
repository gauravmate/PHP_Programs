<?php

include("mysqlConn.php");

$updateFriend = $conn->query("update friend set name='Bhagavat' where city='pune'");
if ($updateFriend) {
    echo "update success";
} else {
    echo "update Faild";
}
