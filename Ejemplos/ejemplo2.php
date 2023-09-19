<!DOCTYPE html>
<html>
 <head>
 <meta charset="UTF-8">
 <title>Ejemplo 2</title>
 </head>
 <body>
 <p>Visualizar valor</p>

 <?php
 $mi_booleano=false;
 $mi_entero=0x2A;
 $mi_real=7.3e-1;
 $mi_cadena="texto";
 $mi_variable=null;

 echo"La variable mi_booleano es de tipo: ",gettype($mi_booleano),"<br />".
 "La variable mi_entero es de tipo: ".gettype($mi_entero)."<br />".
 "La variable mi_real es de tipo: ".gettype($mi_real)."<br />".
 "La variable mi_cadena es de tipo: ".gettype($mi_cadena)."<br />".
 "La variable mi_variable es de tipo: ".gettype($mi_variable);
 ?>

 </body>
</html>