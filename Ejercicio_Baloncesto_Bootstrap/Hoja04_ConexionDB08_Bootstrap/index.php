<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 8</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            require_once 'funcionesDB.php';
            if(isset($_POST['actualizar'])){
                $jugadoresAct=$_POST['jugadores'];
                $pesosAct=$_POST['pesos'];
                actualizarPesos($pesosAct,$jugadoresAct);
                echo "<div class='aviso'>Pesos de jugadores actualizados</div>";
            }
        ?>
        <form class="row g-3 needs-validation was-validated" novalidate action="" method="post" name="formulario">
            <div class="col-md-12">
                <h1>Jugadores de la NBA</h1>
            </div>
            <span class="badge badge-secondary">Campo Obligatorio*</span> 
            <div class="col-md-4">
                <select class="form-select" name='equipo' id='equipo'>
                <?php
                    require_once 'funcionesDB.php';

                    $equipos = getEquipos();
                    foreach($equipos as $nombre){
                        echo "<option value='$nombre'";
                        if(isset($_POST['equipo']) && $nombre == $_POST['equipo']){
                            echo " selected='true'";
                        }
                            
                        echo ">$nombre</option>";
                    }
                ?>
                </select>
            </div>
            <div class="col-md-12">
                <button class="btn btn-success" type="submit" name="enviar">Mostrar</button>
            </div>
        </form>
        <form class="col-12" action="" method="post" name="formulario">
        <?php
            if(isset($_POST['enviar'])){

                    $html="<div class='col-8 table-responsive'><table class='table align-middle'><thead><tr><th scope='col'>NOMBRE</th><th scope='col'>PESO</th></tr></thead><tbody>";
                    $e = $_POST['equipo'];
                    $jugadores = getJugadoresPesoCodigo($e);

                    foreach ($jugadores as $jugador){
                        $html.="<tr><input type='hidden' name='jugadores[]' value='".$jugador['codigo']."'/><td>".$jugador['nombre']."</td><td><input type='number' name='pesos[]' step='0.01' value='".$jugador['peso']."'> kg</input></td></tr>";
                    }

                    $html.="</tbody></table></div>";
                    $html.="<div class='col-md-12'><button class='btn btn-success' type='submit' name='actualizar'>Actualizar</button></div>";
                    echo $html;
                }
        ?>
        </form>
    </body>
</html>