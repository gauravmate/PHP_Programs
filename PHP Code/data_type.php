<?php
$name ="harry";
$income = 200;
/* php data type
1.stream
2.integer
3.float
4.boolean
5.object
6.array
7.null
*/

//string - sequeance of character
$name = "harry";
$friend = 'Ruchita';
echo "$name ka friend is  $friend";

// integer-non decimal number
$income = 455;
$debts = -655;
echo "<br>";
echo $income;
 echo  "<br>";
echo $debts;
echo "<br>";

// float- decimal point number
$income = 344.5;
$debts = -45.5;
echo $income;
echo  "<br>";
echo $debts;
echo "<br>";

//boolean-can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo  "<br>";
echo var_dump($is_friend);
echo "<br>";

// object - Instancve of classes
// employee is a class -----> harry can be one object

//array - used to store multiple values in a single variable
$friends = array("rohan","shubham","skillf","larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<br>";
echo $friends[3];
echo "<br>";
// echo $friends[4]; // will throw an error as the size of array is 4

// NULL
$name = NULL;
echo var_dump($name);

?>




