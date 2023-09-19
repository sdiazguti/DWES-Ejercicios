<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejercicio 8 DAW204</title>
 </head>
 <body>
<h1>Ejercicio 8</h1>
 <?php
$de10;
$de5;
$de1;
$tot=67;
echo $tot;
$de10=intdiv($tot,10);
$tot=$tot%10;

$de5=intdiv($tot,5);
$tot=$tot%5;

$de1=intdiv($tot,1);
$tot=$tot%1;

echo"€ son $de10 billetes de 10€, $de5 billetes de 5€ y $de1 monedas de 1€";
 ?>

 </body>
</html>