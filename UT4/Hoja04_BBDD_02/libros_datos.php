<?php
require_once('funcionesBD.php');
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
<h1>DATOS LIBROS</h1>
<table>
<tr>
    <th>NÚMERO DE EJEMPLAR</th>
    <th>TÍTULO</th>
    <th>AÑO DE EDICIÓN</th>
    <th>PRECIO</th>
    <th>FECHA DE ADQUISICIÓN</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
    </tr>
    <?php
    $libros = getLibros();
    foreach ($libros as $libro) {
        echo"<td>".$libro['numero_ejemplar']."</td>"."<td>".$libro['titulo']."</td>"."<td>".$libro['anyo_edicion']."</td>"."<td>".$libro['precio']."</td>"."<td>".$libro['fecha_adquisicion']."</td>";
    }
    ?>
    </tr>
</table>
</body>
</html>