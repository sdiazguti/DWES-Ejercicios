<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

require_once('Productos.class.php');
require_once('Alimentacion.class.php');
require_once('Electronica.class.php');

$alimentacion1 = new Alimentacion("a41",1,"Patatas","enero",2023);
$alimentacion2 = new Alimentacion("a77",5,"Piña","noviembre",2022);
$electronica1 = new Electronica("e56",100,"horno",6);
$electronica2 = new Electronica("e22",67,"tablet",2);
$carrito =  array($alimentacion1,$electronica1,$alimentacion2,$electronica2);

$gastoA=0;
$gastoB=0;

foreach ($carrito as $producto) {

  echo $producto->__toString()."<br>";

     

    if (get_class($producto)==="Alimentacion") {//$producto instanceof Alimentacio en lo mismo
        
        intval($gastoA+=$producto->__get("precio"));

    }else{

        intval($gastoB+=$producto->__get("precio"));

    }

    

}

echo "Total: ",intval($gastoA+$gastoB),"€<br>",
      "Se gasto más en productos de tipo: ",intval($gastoA)>intval($gastoB)?'Alimentacio':'Electronica',
      " con un total de: ",intval($gastoA)>intval($gastoB)? $gastoA: $gastoB,"€";

/* echo"Gasto total: ".intval($gastoA+$gastoB)."€.
     Se gasto más en productos de tipo: ".$gastoA>$gastoB?'Alimentacio':'Electronica'.".
     Con un total de : ".$gastoA>$gastoB?$gastoA:$gastoB.".<br>";
*/
?>
</body>
</html>