<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1</title>
<link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<h1>Busca tu coche</h1>
<form calss="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="marca">Marca:*</label>
<select name="marca">
  <option value="seat"selected>Seat</option>
  <option value="ford">Ford</option>
  <option value="bmw">BMW</option>
</select>
<input type="submit" name="mostrar" id="mostrar">
</form>
<?php
$coches = array(
    'seat' =>array ('Ibiza', 'León', 'Alhambra', 'Arona', 'Ateca', 'Tarraco'),
    'ford' =>array ('Kuga', 'Ka', 'Fiesta', 'Focus', 'Ranger', 'Bronco'),
    'bmw' =>array('m3', 'x6', 'm2', 'x1', 'x2', 'i8')
);
 if (isset($_POST['mostrar'])) {
    $marca=$_POST['marca'];
    

    echo "<table><tr><th>COCHE</th></tr>";
    echo"<form action='ejercicio1.php' metod='post'>";
foreach ($coches as $nombreMarca => $modelos) {
    
    for ($i=0; $i < sizeof($modelos) ; $i++) { 
        
        if (strtolower($nombreMarca) === strtolower($marca)) {

            echo"<tr><th><input type='text' value='$modelos[$i]' id='modelo$i' name='modelo$i'></th></tr>";
    
        }else{
           
        }
    }
    
}

echo"</table>";
echo "<input type='submit' name='actualizar' value='Actualizar'></form>";

if (isset($_POST['actualizar'])) {
    $marca=$_POST['marca'];
    echo "<table><tr><th>COCHE</th></tr>";
    echo"<form action='ejercicio1.php' metod='post'>";
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

echo"</table>";
echo "<input type='submit' name='actualizar' value='Actualizar'></form>";

}
 else {
 ?>
<?php } ?>
</body>
</html>