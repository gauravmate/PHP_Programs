<?php
//Loop in PHP
echo "<hr>";
//1. for loop  2.foreach  3.while loop  4.do-while loop
//Print the table of any number 
//1. for loop
$table = 18;
for ($i = 1; $i <= 10; $i++) {
    echo "<br>" . $i * $table;
}

//2. foreach Loop
echo "<br>";
$arr = [101, "Garav", 21];
foreach ($arr as $value) {
    echo "<br>" . $value;
}

//3. while loop
?>