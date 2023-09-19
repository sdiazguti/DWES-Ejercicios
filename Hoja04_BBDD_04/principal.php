<?php
require_once('Clases/DB.class.php');
$productos = DB::getInstancia()->getProductos();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>SUPERMERCADO</title>
  </head>
  <body>
<table class="table table-primary table-hover">
  <tr>
    <th>Codigo</th>
    <th>Precio €</th>
    <th>Nombre</th>
    <th>Categoria</th>
  </tr>
  <?php
  foreach ($productos as $objeto) {
    echo"<tr>";
    echo"<td>".$objeto->getCodigo()."</td>";
    echo"<td>".$objeto->getPrecio()."</td>";
    echo"<td>".$objeto->getNombre()."</td>";
    echo"<td>".$objeto->getCategoria()."</td>";
    echo"</tr>";
  ?>
  <?php    
    }
    ?>
</table>
</body>
</html>
