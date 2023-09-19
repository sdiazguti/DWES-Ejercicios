<?php
require_once('funcionesDB.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2 Libros</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
</style>
</head>
<body>
<h1>Resultado de guardar libro</h1>
<?php
setLibros($_POST['titulo']);
?>
<a href='libros.php'>Introducir más libros</a><br>
<a href='libros_datos.php'>Ver libros</a><br>
</body>
</html>