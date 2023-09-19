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
<h1>Traspasos de jugadores</h1>
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
    echo"<h2>Baja y alta de jugadores:</h2>";
    echo"<label for='bajajugador'>Baja de jugador:</label>";
    $jugadores = getJugadores($_POST['equipo']);

    foreach ($jugadores as $nombreJugador) {
        echo"<option value='".$nombreJugador['nombre']."'>".$nombreJugador['nombre']."</option>";

    }
    echo"</table>";
}
?>
</body>
</html>