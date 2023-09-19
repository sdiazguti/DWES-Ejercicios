<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 4</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<h1>Suma de cantidades</h1>
<form calss="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<?php
for ($i=0; $i <= 10; $i++) { 
    echo "<label for='num$i'>Numero $i:</label>
    <input type='number' id='num$i' name='num$i' readonly value='$i'><br>";
}
?>
<input class="submit" type="submit" value="Sumar" name="sumar">
</form>
<?php
 if (isset($_POST['sumar'])) {

$suma=0;

for ($i=0; $i <= 10; $i++) { 
    $suma+=$_POST["num$i"];
}
echo "<div class='aviso'>La suma de los numeros da $suma</div>";
}


 
 else {
 ?>
<?php } ?>
</body>
</html>