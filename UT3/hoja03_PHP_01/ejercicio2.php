<?php
$a = 10;
$resultado=$a;
do {
    $a++;
    $resultado=$a+$resultado;
}
while ($a<=100); 
echo"El resultado de la suma es: ".$resultado;
