<?php
$result = $myPDO->query("SELECT * FROM Applications WHERE Id = '8';");
    foreach($result as $row)
    {
     
$init = $row['StatTotalFullRuntime'];
$hours = floor($init / 36000000000);
$minutes = floor(($init / 600000000) % 60);
$seconds = $init % 60;

echo "$hours H $minutes M $seconds S";
    }
?>