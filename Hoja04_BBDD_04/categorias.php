<?php
require_once('Clases/DB.class.php');
$categorias = DB::getInstancia()->getCategorias();
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
<form action="" method="post">
  <label for="categorias">Categorias:</label>
  <select name="categorias" id="categorias" class="form-select">
    <?php
     foreach ($categorias as $objeto) {
    ?>
    <option value='<?php echo $objeto->getId(); ?>' <?php if (isset($_POST['categorias']) && $objeto->getId() == $_POST['categorias']){echo "selected";} ?> ><?php echo $objeto->getNombre(); ?></option>
    <?php    
    }
    ?>
  </select>
  <br><br>
  <input type="submit" value="Buscar" name="buscar" id="buscar">
</form>

<?php
if (isset($_POST['buscar'])) {
    $productosCate = DB::getInstancia()->getProductos($_POST['categorias']);
?>    
    <table class="table table-primary table-striped table-hover">
  <tr>
    <th>Codigo</th>
    <th>Precio €</th>
    <th>Nombre</th>
    <th>Categoria</th>
    <?php
if (get_class($productosCate[0]) == 'Electronica') {    
   echo "<th>Plazo garantia</th>";
}else{
    echo"<th>Mes caducidad</th>";
    echo"<th>Año caducidad</th>";
}
    ?>
  </tr>
  <?php
  foreach ($productosCate as $objeto) {
    echo"<tr>";
    echo"<td>".$objeto->getCodigo()."</td>";
    echo"<td>".$objeto->getPrecio()."</td>";
    echo"<td>".$objeto->getNombre()."</td>";
    echo"<td>".$objeto->getCategoria()."</td>";
    if (get_class($objeto) == 'Electronica') {    
        echo "<td>".$objeto->getPlazoGarantia()."</td>";
     }else{
         echo"<td>".$objeto->getMesCaducidad()."</td>";
         echo"<td>".$objeto->getAnnoCaducidad()."</td>";
     }
     echo"</tr>";
  ?>
  <?php    
    }
    ?>
</table>
<?php
}
?>
</body>
</html>
