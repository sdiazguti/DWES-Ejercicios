<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<?php
 if (isset($_POST['convertir'])) {

    $cantidad= doubleval($_POST['cantidad']);
    $origen= $_POST['origen'];
    $destino= $_POST['destino'];
    $total=0;
    $conversion = array(
        'euros' =>array ('dolares'=>0.98, 'libras'=>0.86, 'euros'=>1.00),
        'dolares' =>array ('euros'=>1.02, 'libras'=>0.87, 'dolares'=>1.00),
        'libras' =>array('euros'=>1.16,'dolares'=>1.14, 'libras'=>1.00)
    );

    $total=$conversion[$origen][$destino]*$cantidad;

    echo "La conversión de ",$cantidad," ",$origen," a ",$destino," es ",$total,"<br>";
    echo"<a href='ejercicio1.php'>Volver a introducir cantidad</a>";
 }
 else {
 ?>
<h1>Conversor de monedas</h1>
<form calss="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="cantidad">Cantidad:</label>
<input type="number" id="cantidad" name="cantidad" required><br>
<label for="origen">Origen:</label>
<select name="origen" id="origen">
  <option value="euros">euros</option>
  <option value="dolares">dolares</option>
  <option value="libras">libras</option>
</select><br>
<label for="destino">Destino:</label>
<select name="destino" id="destino">
  <option value="euros">euros</option>
  <option value="dolares">dolares</option>
  <option value="libras">libras</option>
</select><br>
<input type="submit" value="Convertir" name="convertir">
</form>
<?php } ?>
</body>
</html>