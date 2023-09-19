<?php

$monedas = array(500,200,100,50,20,10,5,2,1,0.5,0.2,0.5,0.1);
$cantidad = 1828.37;

for ($i=0; $i < sizeof($monedas); $i++) { 
    $numMonedas = floor($cantidad/$monedas[$i]);
    $aRestar = ($numMonedas * $monedas[$i]);
    $cantidad = round($cantidad - $aRestar, 2);
    if ($numMonedas > 0) {
        echo"El numero de monedas ".$monedas[$i]." es ".$cantidad;
    }
}

?>