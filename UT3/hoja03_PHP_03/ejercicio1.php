<?php

function cargar(&$array,$num){

    for ($i=0; $i < $num; $i++) { 
        $array[$i]=rand(1,1000);
    }
    return $array;

}

function ordenar(&$array){

$n = sizeof($array);

for ($i=1; $i < $n; $i++) { 

    for ($j=0; $i < ($n - $i); $j++) { 
        
        if ($array[$j] > $array[$j + 1]) {
            $aux=$array[$j];
            $array[$j]=$array[$j + 1];
            $array[$j + 1] = $aux;
        }

    }

}

return $array;

}

function mezclar($array,$arraySeg){

foreach ($arraySeg as $key ) {
    $array[]= $key;
}

}

$array1= [];
$array2=[];
cargar($array1,20);
cargar($array2,20);






?>
