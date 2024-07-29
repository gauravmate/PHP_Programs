<?php
$even= "";
$odd= "";
$i=1;
while($i<=20)
{
if($i%2==0)
{
$even = $even."".$i;    
}
else
{
$odd = $odd."".$i;
}

$i++;
}
echo "the even no=".$even."<br>";
echo "the odd no=".$odd;
?>
