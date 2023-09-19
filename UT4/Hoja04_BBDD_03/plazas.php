<?php
require_once('funcionesBBDD.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3 Funicular</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
</style>
</head>
<body>
<h1>Gestion plazas</h1>
<form metod='post' action='' name='formulario'>
    <?php
    $plazas = getPlazas();
    foreach ($plazas as $plaza) {
        echo"<label for='".$plaza['numero']."'>Plaza ".$plaza['numero']."</label><input type='number' value='".$plaza['precio']."'>€<br>";
    }
    ?>
    </select><br>
    <input type='submit' name='actualizar' id='actualizar' value='Actualizar'><br>
    <?php
    if (isset($_POST['actualizar'])) {
        echo"Actualizado";
    }
    ?>
    <a href='index.html'>Página de inicio</a>
</form>
</body>
</html>