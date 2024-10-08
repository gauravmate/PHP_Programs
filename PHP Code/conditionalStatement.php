<?php
//Conditional Statements 
//1.if statement
//2.if-else statement
//3.if-else if-else statement
//4.switch statement

$age = 18;
if ($age > 18) {
    echo "You are Eligible for voting";
} else {
    echo "You are not Eligible for voting";
}

echo "<hr>";

$age = 7;
if ($age > 5 && $age < 10) {
    echo "You are child";
} else if ($age > 11 && $age < 20) {
    echo "You are a Matual Person";
} else if ($age > 21 && $age < 45) {
    echo "you are a responsibal man";
} else if ($age > 46 && $age < 70) {
    echo "You are old man";
}

echo "<hr>";

//Switch Statement
$weekDay = 3;
switch ($age) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Thrusday";
        break;
    case 3:
        echo "whensday";
        break;
    case 4:
        echo "Thrusday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saterday";
        break;
    case 7:
        echo "Sunday";
        break;
}
?>