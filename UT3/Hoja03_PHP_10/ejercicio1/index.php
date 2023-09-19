<?php

require_once('Encendible.interface.php');
require_once('Bombilla.class.php');
require_once('Coche.class.php');

function enciendeAlgo(Encendible $algo){

    $algo->encender();

}

$coche1 = new Coche();
$coche2 = new Coche();
$bombilla1 = new Bombilla(4);
$bombilla2 = new Bombilla(22);

$coche1->repostar(10);


echo"Bombilla1 encender: ".enciendeAlgo($bombilla1)."<br>";
echo"Bombilla2 encender: ".enciendeAlgo($bombilla2)."<br>";
echo"Coche1 encender: ".enciendeAlgo($coche1)."<br>";
echo"Coche2 encender: ".enciendeAlgo($coche2)."<br>";


?>