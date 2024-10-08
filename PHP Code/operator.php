<?php
//Operaroe in PHP
//1. Airthmatical Operator
// + - * / % **
$a = 90;
$b = 80;

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a * $b . "<br>";
echo "<hr>";

//2.Assignment Operator
// = += -= *= /= %= 
$a = 90;
$b = 80;

echo $a += $b;
echo $a -= $b;
echo $a /= $b;
echo $a *= $b;
echo $a %= $b;
echo "<hr>";

//3.Comperison Operator
// == != === !== > < >= <= only return true or false

$num1 = 90;
$num2 = 80;
$num3 = "10";
echo var_dump($num1 != $num2);
var_dump($num1 === $num3);
var_dump($num1 > $num2);
var_dump($num1 >= $num2);
var_dump($num1 <= $num2);
var_dump($num1 < $num2);
echo "<hr>";

//4.Increment and Decrement Operator
// ++ --
//1.pre-Increment  2.post-Increment  3. Pre-Decrement  4.post-Decrement

$num = 10;
echo ++$num . "<br>";
echo --$num . "<br>";
echo $num++ . "<br>";
echo ++$num . "<br>";
echo "<hr>";

//5.String Operator
$str = "Gaurav";
$age = 21;
echo "Hello My name is $str i am $age year old <br>";
echo "Hello my name is " . $str . "And i am " . $age . "Year old<br>";

$str1 = "Gaurav";
$str2 = "Mate";
echo $str1 . $str2 . "<br>";
$str1 .= $str2;
echo $str1;
echo "<br>";
$str1 = $str2;
echo $str1;
echo "<hr>";
?>