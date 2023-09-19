<?php

$articulo = array(
    "codigo"    => array(11,21,22),
    "descripcion"=>array("libro","lapiz","cuaderno"),
    "existencias"=>array(45,67,12),
);

function mayor($articulo){

$existencia_mas_alta=$articulo["existencias"][0];
$j=1;
while ($j < count($articulo["existencias"])) {
    if ($existencia_mas_alta < $articulo["existencias"][$j]) {
        $existencia_mas_alta = $articulo["existencias"][$j];
    }
    $j++;
}
echo "El producto con mas existencias es " . $articulo["descripcion"][$j-1];
}

function sumar($articulo){

$suma = 0;
foreach($articulo["existencias"] as $valor){
    $suma+=$valor;
}
return $suma;
}

function mostrar($articulo){

for ($i=0; $i < count($articulo["codigo"]); $i++) { 
    $articulo["codigo"][$i];
    $articulo["descripcion"][$i];
    $articulo["existencias"][$i];
}

}

?>