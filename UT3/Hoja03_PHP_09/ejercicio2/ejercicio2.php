<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2</title>
<link rel="stylesheet" href="../css/estilo.css">
<style>
table, th {
  border:1px solid black;
}
</style>
</head>
<body>
<?php
    $clubs = array(
        'madrid' =>array ('entrenador' =>array('zidane'=>'../jugadores/zidane.jpg'),
                          'jugadores'=>array('courtois'=>'../jugadores/courtois.jpg', 'hazard' =>'../jugadores/hazard.jpg', 'ramos'=> '../jugadores/ramos.jpg')
    ),
    'barcelona' =>array ('entrenador' =>array('koeman'=>'../jugadores/koeman.jpg'),
                      'jugadores'=>array('ter stegen'=>'../jugadores/ter.jpg', 'griezmann' =>'../jugadores/griezmann.jpg', 'pique'=> '../jugadores/pique.jpg')
)
    );
 ?>
<h1>Elige un equipo</h1>
<form calss="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label for="equipo">Equipo:</label>
<select name="equipo" id="equipo">
  <option value="todos"selected>--Todos--</option>
  <option value="madrid">Real Madrid Club de Futbol</option>
  <option value="barcelona">Futbot Club Barcelona</option>
</select><br>
<label for="puesto">Puesto:</label>
<input  type="radio" name="puesto" value="entrenador" checked>Entrenador
<input  type="radio" name="puesto" value="jugadores">Jugadores<br>
<input type="submit" value="Buscar" name="buscar">
</form>
<?php

if (isset($_POST['buscar'])) {

        echo"<table>";
        
        if ($_POST['equipo']=='madrid' || $_POST['equipo']=='barcelona') {
          echo"<tr><th>",$_POST['equipo'],"</th></tr>";
        }else if($_POST['equipo']=='todos'){
          echo"<tr><th>Madird</th><th>Barcelona</th></tr>";
        }

        foreach ($clubs as $nombre => $arrayEnJu) {

         foreach ($arrayEnJu  as $cargo => $nombreC) {
          
           foreach ($nombreC as $nombres => $img) {
            
            if ($nombre==$_POST['equipo'] && $cargo==$_POST['puesto'] ) {

              
              echo"<tr><td>$nombres</td></tr>";
              echo"<tr><td><img src='$img'></tr></td>";

            } else if($_POST['equipo']=='todos' && $cargo==$_POST['puesto']){
              
              echo"<tr><td>$nombres</td><td><img src='$img'></td></tr>";
              echo"<tr></tr>";

            }
            

           }
         }
        }
         echo"</table>";


}

?>
</body>
</html>