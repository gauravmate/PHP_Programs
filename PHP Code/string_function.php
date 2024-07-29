ss<?php
$name = "harry is a good boy";
echo $name;
echo "<br>";

echo "The leanth of "  .  "my string is "  .  strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo  strpos($name, "harry");
echo "<br>";
echo str_replace("harry","ruchita", $name);
echo "<br>";
echo str_repeat($name,4);
echo "<br>";
echo "<pre>";
echo rtrim("     this is good boy       ");
echo "<br>";
echo  ltrim("      this is good boy     ");
echo "</pre>";

?>