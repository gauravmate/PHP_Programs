<?php
echo "welcome to php on function tutorial<br>";

function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as  $value){
        $sum += $value;

    }
     return $sum;
}

 function processMarks($marksArr){
    $sum =0;
    $i =1;
    foreach($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
 }
  $rohandas =[34,45,67,89,90,85];
  $summarks = processMarks($rohandas);

  $harry =[88,99,59,88.97,100];
  $summarks =  processMarks($harry);




  echo "total marks scored by rohan out of 600 is $summarks <br>";
  echo "total marks scored by harry out of 600 is $summarksharry";

?>

    
