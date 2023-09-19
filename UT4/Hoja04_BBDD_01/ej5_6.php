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
    echo"<table>";
    echo"<tr><th>NOMBRE</th><th>PESO</th></tr>";
    $jugadores = getJugadores($_POST['equipo']);

    foreach ($jugadores as $jugador) {

        echo"<tr><td>".$jugador['nombre']."</td><td>".$jugador['peso']."</td></tr>";

    }
    echo"</table>";
}
?>
<h1>Traspasos de jugadores</h1>
<form calss="formulario" action="" method="post">
<label for="equipo">Equipo:</label>
<select name="equipo2" id="equipo2">
    <?php
    $equipos = getEquipos();
    foreach ($equipos as $nombreEquipo) {
      echo"<option value='$nombreEquipo'";
      if (isset($_POST['equipo2']) && $nombreEquipo == $_POST['equipo2']) {
        echo" selected </option>";
      }
      echo">$nombreEquipo</option>";
    }
    ?>
</select><br>
<input type="submit" id="mostrar2" name="mostrar2" value="Mostrar">
</form>
<h2>Baja y Alta de jugadores:</h2>
<form calss="formulario" action="" method="post">
<label for="equipo">Baja de juagdor:</label>
<select name="juagdores2" id="juhadores2">
    <?php
    $equipos = getJugadores();
    foreach ($juagdores as $jugador) {
      echo"<option value='".$jugador['nombre']."'>".$jugador['nombre'].">";
    }
    ?>
</select><br>
<h2>Datos del nuevo jugador</h2><br>

<input type="submit" id="mostrar3" name="mostrar3" value="Mostrar">
</form>
</body>
</html>