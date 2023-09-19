<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejercicio 7 DAW204</title>
 </head>
 <body>
<h1>Ejercicio 7</h1>
 <?php
$pri=6;
$seg=5;
echo "Variable \$pri es $pri y la variable \$seg es $seg <br />";

$ter=$pri;
$pri=$seg;
$seg=$ter;
echo "(Post intercambio de valor) Variable \$pri es $pri y la variable \$seg es $seg";

 ?>

 </body>
</html>