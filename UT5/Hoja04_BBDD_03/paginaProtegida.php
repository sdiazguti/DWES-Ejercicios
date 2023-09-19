<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SESIONES</title>
  </head>
  <body>
<?php
require_once('funcionesBBDD.php');

if (!isset($_SERVER['PHP_AUTH_USER']) && !isset($_SERVER['PHP_AUTH_PW'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit();
    }elseif (comprobarUsuario($_SERVER['PHP_AUTH_USER'],md5($_SERVER['PHP_AUTH_PW']))) {
    echo "<h1>Hola  ".$_SERVER['PHP_AUTH_USER']."</h1>";
   ?>
        <form method="post" action="">
            <fieldset>
                <legend>Usuario conectado</legend> 
            <label for="cerrar">Cerrar sesión con <?php echo $_SERVER['PHP_AUTH_USER'] ?></label>
            <button  type='submit' name='cerrar'>Cerrar sesión</button>
            </fieldset>
        </form>
   <?php
    }else{

    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit();

    }

?>
</body>
</html>