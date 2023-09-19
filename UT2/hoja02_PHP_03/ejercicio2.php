<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejercicio 1 DAW204</title>
 </head>
 <body>
<h1>Ejercicio 1</h1>
 <?php
    $hoy = date("d-m-y");
    $diasRes=5;
    echo date("d-m-Y",strtotime($hoy."- $diasRes days")); 
 ?>

 </body>
</html>