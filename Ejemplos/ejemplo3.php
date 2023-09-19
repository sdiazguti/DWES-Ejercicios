<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejemplo 3</title>
 </head>
 <body>
 <p>Visualizar valor de una suma</p>

 <?php
 $mi_entero=3;
 $mi_real=2.3;
 $resultado=$mi_entero+$mi_real;

 echo"La suma de ",$mi_entero," más ",$mi_real," es = ",$resultado,
 " que es de tipo ",gettype($resultado);
 ?>

 </body>
</html>