<?php
$a = 45;
$b =8;

// 1. arithematic operators
echo "for a + b, the result is".($a +$b). "<br>";
echo "for a - b, the result is".($a -$b). "<br>";
echo "for a * b, the result is".($a * $b). "<br>";
echo "for a / b, the result is".($a / $b). "<br>";
echo "for a % b, the result is".($a % $b). "<br>";
echo "for a ** b, the result is".($a ** $b). "<br>";

//2. assignment operators

$x = $a;
echo "for x, the value is".$x."<br>";

$a  += 6;
echo "for a, the value is".$a."<br>";

$a  -= 6;
echo "for a, the value is".$a."<br>";

$a *= 6;
echo "for a, the value is".$a."<br>";

$a /= 5;
echo "for a, the value is".$a."<br>";

$a %= 5;
echo "for a, the value is".$a."<br>";


//3.comperison operator
$x = 78;
$y = 78;

echo "for x > y, the result is ";
echo var_dump($x > $y);

echo "for x > y, the result is ";
echo var_dump($x >= $y);

echo "for x < y, the result is ";
echo var_dump($x < $y);

echo "for x < y, the result is ";
echo var_dump($x <= $y);

echo "for x <> y, the result is";
echo var_dump($x <> $y);
echo "<br>";

// 4. logical  operator

$m = true;
$n = true;

echo "for m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

echo "for m && n, the result is ";
echo var_dump($m && $n);
echo "<br>";

echo "for m or n, the result is ";
echo var_dump($m or $n);
echo "<br>";

echo "for m || n, the result is ";
echo var_dump($m || $n);
echo "<br>";

echo "for !m , the result is ";
echo var_dump(!$m);
echo "<br>";


?>









