<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<?php
 if (isset($_POST['buscar'])) {

    $buscar=$_POST['buscador'];
    $peliculas = array(
        'amelie' =>"../pelis/amelie.jpg",
        'el caballero oscuro' =>"../pelis/el_caballero_oscuro.jpg",
        'el lobo de wallstreet' =>"../pelis/el_lobo.jpg",
        'el pianista' =>"../pelis/el_pianista.jpg",
        'esclavitud' =>"../pelis/esclavitud.jpg",
        'malditos bastardos' =>"../pelis/malditos_bastados.jpg",
        'memento' =>"../pelis/memento.jpg",
        'no es pais para viejos' =>"../pelis/no_es_pais_para_viejos.jpg",
        'origen' =>"../pelis/origen.jpg",
        'spotlights' =>"../pelis/spotlight.jpg"
    );
    
    $posicion=true;

foreach ($peliculas as $nombre => $imagen) {
    
    $posicion =  strpos($nombre,$buscar);
    if ($posicion === false) {

    }else{
        echo"<img src='",$imagen,"'width='200' height='300'> Esta pelicula coincide con tu busqueda: ",$nombre," <br><br>";

    }
}
echo"</body></head></html>";

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