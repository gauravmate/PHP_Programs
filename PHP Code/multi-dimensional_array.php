<?php
echo "welcome to multi dimensional arrays in php <br>";

//creating a 2 dimensional array
$multiDim = array(array(2,5,7,8), 
                 array(1,2,3,1), 
                 array(4,5,2,1));

  
 // echo var_dump($multiDim);
 // echo $multiDim[1][2];
 
 // printing the contents of a 2 dimensional array

 // for ($i=0; $i < count($multidim); $i++){
 //  echo var_dump($multiDim[$i]);
 //  echo "<br>";
 //}
 
 
 for ($i=0; $i < count($multiDim); $i++){
    for ($j=0; $j < count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j];
        echo "";
    }
    echo "<br>";
    
 }
 
    
 

?>
