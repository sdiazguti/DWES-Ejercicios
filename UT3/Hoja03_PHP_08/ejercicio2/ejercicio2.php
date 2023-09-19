<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<?php
 if (isset($_POST['buscar'])) {

    $buscar=$_POST['buscador'];
    $peliculas = array('Forever Rich','Athena','Bullet Train','La Ciudad Perdida','El teléfono del señor Harrigan','Trece Vidas','The Black Phone','Codigo empereador','El hombre del norte','Dont Look Up');
    $posicion=true;
    
    for ($i=0; $i < count($peliculas); $i++) {
        $posicion =  strpos($peliculas[$i],$buscar);
        if ($posicion === false) {

        }else{
            echo"Esta pelicula coincide con tu busqueda: ",$peliculas[$i]," <br>";
        }
    }


 }
 else {
 ?>
<h1>Buscardor de películas</h1>
<form calss="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="buscador">Buscador:</label>
<input type="text" id="buscador" name="buscador" required><br>
<input type="submit" value="Buscar" name="buscar">
</form>
<?php } ?>
</body>
</html>