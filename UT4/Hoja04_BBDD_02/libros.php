

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2 Libros</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
</style>
</head>
<body>
<h1>Inserte los datos del libro</h1>
<form action='libros_guardar.php' metod='post'>
    <label for='titulo'>Titulo:*</label>
    <input name='titulo' id='titulo' type='text' required><br>
    <label for='anyoEdicion'>Año de edición:*</label>
    <input name='anyoEdicion' id='anyoEdicion' type='number' min='0' max='2023' required><br>
    <label for='precio'>Precio:*</label>
    <input name='precio' id='precio' type='number' min='1' required><br>
    <label for='fechaAdquisicion'>Fecha de adquisición:*</label>
    <input name='fechaAdquisicion' id='fechaAdquisicion' type='date' max='12/12/22' required><br>
    <input type='submit' name='guardar' id='guardar' value='Guardar datos del libro'><br>
    <a href='libros_datos.php'>Mostrar los libros guardados</a>
</form>
</body>
</html>