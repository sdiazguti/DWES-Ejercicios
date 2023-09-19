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
<h1>Reserva de asiento</h1>
<form metod='post' action='' name='formulario'>
    <label for='nombre'>Nombre:</label>
    <input type='text' name='nombre' id='nombre' required><br>
    <label for='dni'>DNI:</label>
    <input type='text' name='dni' id='dni' required><br>
    <label for='asiento'>Asiento:</label>
    <select name="asiento" id="asiento">
    <?php
    $plazas = getPlazasVacias();
    foreach ($plazas as $plaza) {
        echo"<option value='".$plaza['numero']."'>".$plaza['numero']."(".$plaza['precio'].")</option>";
    }
    ?>
    </select><br>
    <input type='submit' name='reservar' id='reservar' value='Reservar'><br>
    <?php
    echo"Antes";
    if (isset($_POST['reservar'])) {
        echo"Despues";
        reserva($_POST['nombre'],$_POST['dni'],$_POST['asiento']);
    }
    ?>
    <a href='index.html'>Página de inicio</a>
</form>
</body>
</html>