<?php 
// Date OO.
$dt = new DateTime();
echo $dt->format("d/m/Y H:i:s");
echo "<br>";
//Somando data +15 dias.
$periodo = new DateInterval("P5D");
$dt->add($periodo);
echo $dt->format("d/m/Y H:i:s");
echo "<br>";

