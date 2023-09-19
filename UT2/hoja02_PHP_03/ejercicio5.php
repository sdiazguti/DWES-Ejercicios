<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejercicio 5 DAW204</title>
 </head>
 <body>
<h1>Ejercicio 5</h1>
 <?php
    $hoy = date("d-m-y h:i:s");
    $horasSumar=5;
    echo date("d-m-Y h:i:s",strtotime($hoy."+ $horasSumar hours")); 
 ?>

 </body>
</html>