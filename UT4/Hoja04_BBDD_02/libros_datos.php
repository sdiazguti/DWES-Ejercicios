<?php
require_once('funcionesBD.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2 Libros</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
  table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
<h1>DATOS LIBROS</h1>
<table>
<tr>
    <th>NÚMERO DE EJEMPLAR</th>
    <th>TÍTULO</th>
    <th>AÑO DE EDICIÓN</th>
    <th>PRECIO</th>
    <th>FECHA DE ADQUISICIÓN</th>
  </tr>
    
    <?php
    $libros = getLibros();
    foreach ($libros as $libro) {
      
        echo"<tr><td>".$libro['numeroEjemplar']."</td>"."<td>".$libro['titulo']."</td>"."<td>".$libro['anyoEdicion']."</td>"."<td>".$libro['precio']."</td>"."<td>".$libro['fechaAdquisicion']."</td></tr>";
    }
    ?>
    
</table>
</body>
</html>