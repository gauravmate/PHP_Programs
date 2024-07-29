<?php

$employee = array(
    "Name" =>"Dipali",
     "Email" =>"magardipali733@gmail.com",
     "age" =>"20",
     "Gender" =>"famale",
     "address" =>"sabhajinagar",
);

foreach($employee as  $key=>$element){
     echo $key. ":" .$element;
     echo "</br>";


}

?>