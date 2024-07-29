<?php
echo "welcome to the world of foreach loops <br>";
$arr = array("banana","banana","mango","bread","butter");


//for($i=0; $i <  count($arr); $i++){
    //echo $arr[$i];
   // echo "<br>";
   //}

// better  way to do this -foreach loops
foreach ($arr as $value){
    echo "$value <br>";
}

?>
