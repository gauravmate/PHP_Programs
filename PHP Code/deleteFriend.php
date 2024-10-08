<?php

include("mysqlConn.php");

$deleteFriend=$conn->query("delete from friend where name='Roshan'");

if($deleteFriend){
    echo "Friend deleted";
}else {
    echo "Error deleting friend";
}

?>