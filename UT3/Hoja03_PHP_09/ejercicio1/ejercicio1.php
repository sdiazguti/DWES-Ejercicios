<?php
$coches = array(
    'seat' =>array ('Ibiza', 'León', 'Alhambra', 'Arona', 'Ateca', 'Tarraco'),
    'ford' =>array ('Kuga', 'Ka', 'Fiesta', 'Focus', 'Ranger', 'Bronco'),
    'bmw' =>array('m3', 'x6', 'm2', 'x1', 'x2', 'i8')
);
?>
<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<h1>Busca tu coche</h1>
<?php

if (isset($_POST['actualizar'])) {
    $cochesActualizados=$_POST['cocheActualizado'];
    $marca = $_POSt['marca'];
    $i=0;
    foreach ($concesionario[$marca] as $cocheOriginal) {
        if ($cocheOriginal!=$cochesActualizados[$i]) {
            echo ">div class='aviso'>Se ha actualizado $cocheOriginal por $cochesActualizados</div>";
            $i++;
        }
    }
}

?>
<form calss="formulario" action="" method="post">
<label for="marca">Marca:*</label>
<select name="marca">
    <?php

    foreach ($coches as $marca => $modelo) {
        echo"<option value='$marca'";
        if (isset($_POST['marca']) && $_POST['marca'] == $marca) {
            echo "select>$marca</option>";
        }else{
            echo"$marca</option>";
        }
    }
    
    ?>
</select>
<input type="submit" name="mostrar" id="mostrar">
</form>
<?php

 if (isset($_POST['mostrar'])) { 

    echo "<table><tr><th>COCHE</th></tr>";
    echo"<form action='' metod='post'>";
foreach ($coches as $nombreMarca => $modelos) {
    
    for ($i=0; $i < sizeof($modelos) ; $i++) { 
        
        if (strtolower($nombreMarca) === strtolower($_POST['marca'])) {

            echo"<tr><th><input type='text' value='$modelos[$i]' id='modelo$i' name='modelo$i'></th></tr>";
            
        }
        
    }
    
}
echo"</table>";
echo "<input type='submit' name='actualizar' value='Actualizar'></form>";

}

 ?>

<?php
// usar type="hiden" para mantener daot sactualizaods

if (isset($_POST['actualizar'])) {
    $marca=$_POST['marca'];
    echo "<table><tr><th>COCHE</th></tr>";
    echo"<form action='' metod='post'>";
    foreach ($coches as $nombreMarca => $modelos) {
    
        for ($i=0; $i < sizeof($modelos) ; $i++) { 
            
            if (strtolower($nombreMarca) === strtolower($marca)) {
    
                if ($_POST["modelo$i"] !== $modelos[$i]) {
                   $modelos[$i]=$_POST["modelo$i"];
                 
                }
        
            }else{
                
            }
        }
        
    }
}




?>
</body>
</html>