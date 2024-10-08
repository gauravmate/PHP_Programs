<?php
echo "<hr>";
//Break and continue statement
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
    if ($i == 5) {
        break;
    }
}
echo "<hr>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}
?>