<?php
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . '<br/>';

$d = strtotime("next saturday");
echo date("Y-m-d h:i:sa", $d) . '<br/>';

$d = strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . '<br/>';
?>
