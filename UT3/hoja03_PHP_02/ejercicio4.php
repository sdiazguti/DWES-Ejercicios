<?php

function interesSimple($capital,$redito,$tiempo,$interesS){

    return $interesS=$capital*$redito*$tiempo;

}

function interesSimple($capital,$redito,$tiempo,$interesC){

    return $interesC=$capital*((1+$redito),6);

}

function mejorInteres($interesC,$interesS){

    if($interesC>$interesS)
    return "Interes compuesto";
    elseif($interesC<$interesS)
    return "Interes simple";
    else
    return "Los dos generan las mismas ganancias";

}

?>