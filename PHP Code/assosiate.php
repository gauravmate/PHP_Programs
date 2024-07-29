<?php
echo "welcome to assosiate array  in php";
$arr = array('this', 'that', 'what',"<br>");
echo "<br>";
echo $arr[0];
echo "<br>";
echo $arr[1];
echo "<br>";
echo $arr[2];


//assosiate array

$favcol = array(
    'dipali' => 'blue',
    'srushti' =>'red',
    'gaurav' =>'white',
    'vaibhav' => 'pink',
);
echo "<br>";
echo $favcol['dipali'];
echo "<br>";
echo $favcol['vaibhav'];
echo "<br>";
echo $favcol['gaurav'];
echo "<br>";
echo $favcol['srushti'];



foreach($favcol as $key =>$value){
    echo"<br>favorite color of $key is $value";
    
    
    }

?>
