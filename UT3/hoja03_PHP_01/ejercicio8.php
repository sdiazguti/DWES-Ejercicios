<?php
function factorial($a){
$b = 1;
    for ($i = 1; $i <= $a; $i++){
   $b = $b * $i;
  }return $b;
}
$a = 7;
$b = factorial($a);
print"El fatorial de ".$a." es ".$b;
