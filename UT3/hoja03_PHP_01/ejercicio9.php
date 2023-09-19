<?php
$km=801;
$estancia=10;
$precio=0;
if ($km>800&&$estancia>7) {
    $precio=($km*2.5)*2;
    $precio=$precio*0.3;
    print "El precio con un descuento del 30% por superar 800km y 7 dias de estancia es: ".$precio."€<br/>";
}else {
    $precio=($km*2.5)*2;
    print "El precio es: ".$precio."€<br/>";
}