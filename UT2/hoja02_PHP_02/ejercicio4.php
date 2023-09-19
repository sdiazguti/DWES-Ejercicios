<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejercicio 4 DAW204</title>
 </head>
 <body>
<h1>Ejercicio 4</h1>
 <?php
 $nombre="Sergio";
 echo"Informacion de la variable 'nombre' :";
 echo var_dump($nombre);
 echo"<br />Contenido de la varible: $nombre";
 $nombre=null;
 echo"<br />Despues de asignarle un valor nulo:";
 echo var_dump($nombre);
 ?>

 </body>
</html>