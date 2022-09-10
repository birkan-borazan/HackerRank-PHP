<?php

function solveMeFirst($a,$b){ 
  $c = $a + $b;
  return $c;
  
}

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>