<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 8</title>
</head>
<body>
<?php
 if (isset($_POST['enviar'])) {
 $primer = intval($_POST['numeroPrimero']);
 $segundo = intval($_POST['numeroSegundo']);
 $operacion=strval($_POST['operacion']);

 switch (true) {
     case strcmp($operacion,'-')==0:
         echo "El resultado de realizar la resta de los numeros $primer y $segundo es ",$primer-$segundo,"<br>";
         break;
     
     case strcmp($operacion,'+')==0:
         echo "El resultado de realizar la suma de los numeros $primer y $segundo es ",$primer+$segundo,"<br>";
     break;

     case strcmp($operacion,'*')==0:
         echo "El resultado de realizar el producto de los numeros $primer y $segundo es ",$primer*$segundo,"<br>";
     break;
     
     case strcmp($operacion,'/')==0:
         echo "El resultado de realizar el cociente de los numeros $primer y $segundo es ",$primer/$segundo,"<br>";
     break;

     default:
         echo"ERROR no se pudo realizar la operación","<br>";
         break;
 }
 echo"<a href='formulario.php'>Volver a introducir nuemros</a>";
 }
 else {
 ?>

<h1>EJERCICIO 8</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 <label for="numeroPrimero">Elije el primer numero:</label>
 <input type="text" id="numeroPrimero" name="numeroPrimero" pattern="[0-9]" required><br>
 <label for="numeroSegundo">Elije el segundo numero:</label>
 <input type="text" id="numenumeroSegundoroMayor" name="numeroSegundo" pattern="[0-9]" required><br>
 <label for="suma">Suma:</label>
<input type="radio" id="suma" name="operacion"value="+" required><br/>
<label for="resta">Resta:</label>
<input type="radio" id="resta" name="operacion"value="-" required><br/>
<label for="producto">Producto:</label>
<input type="radio" id="producto" name="operacion"value="*" required><br/>
<label for="cociente">Cociente:</label>
<input type="radio" id="cociente" name="operacion"value="/" required><br/>
 <br/>
<input type="submit" value="Enviar" name="enviar">
</form>
<?php } ?>
</body>
</html>
