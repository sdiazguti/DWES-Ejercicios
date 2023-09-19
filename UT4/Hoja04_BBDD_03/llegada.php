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
<h1>Llegada</h1>
<form metod='post' action='' name='formulario'>
    <input type='submit' name='llegada' id='llegada' value='Llegada'><br>
    <?php
    if (isset($_POST['llegada'])) {
        llegada();
    }
    ?>
    <a href='index.html'>Página de inicio</a>
</form>
</body>
</html>