<?php
$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days untill 4th of July.";
?>