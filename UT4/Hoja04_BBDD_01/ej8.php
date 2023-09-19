<?php
require_once('funcionesBD.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 1 Equipos NBA</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
</style>
</head>

<body>
<h1>Jugadores de la NBA</h1>
<form calss="formulario" action="" method="post">
<label for="equipo">Equipo:</label>
<select name="equipo" id="equipo">
    <?php
    $equipos = getEquipos();
    foreach ($equipos as $nombreEquipo) {
      echo"<option value='$nombreEquipo'";
      if (isset($_POST['equipo']) && $nombreEquipo == $_POST['equipo']) {
        echo" selected ";
      }
      echo">$nombreEquipo</option>";
    }
    ?>
</select><br>
<input type="submit" id="mostrar" name="mostrar" value="Mostrar">
</form>
<?php
if (isset($_POST['mostrar'])) {
    echo"<form calss='formulario' action='' method='post'>";
    echo"<table>";
    echo"<tr><th>NOMBRE</th><th>PESO</th></tr>";
    $jugadores = getJugadores($_POST['equipo']);

    foreach ($jugadores as $jugador) {
        echo"<input type='hidden' name='equipo' value='{$_POST['equipo']}'>";
        echo"<input type='hidden' name='jugadores[]' value='{$jugador['codigo']}'>";
        echo"<tr><td>".$jugador['nombre']."</td><td><input type='text' name='peso[]' value='".$jugador['peso']."'>kg</td></tr>";

    }
    echo"</table>";
    echo"<input type='submit' value='Actualizar' name='actualizar'>";
    echo"</form>";
    
    if(isset($_POST['actualizar'])){

        $jugadores = getJugadores($_POST['equipo']);
        $jugadorPeso = $_POST[peso[]];
        foreach ($jugadores as $jugador) {
            
            if (isset($_POST[$jugador['codigo']])) {
                updatePesos($jugador['codigo'],$_POST[$jugador['codigo']]);
            }
    
        }
       
    }

}

?>
</form>
</body>
</html>