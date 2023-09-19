<?php
require_once('funcionesBBDD.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SESIONES</title>
  </head>
  <body>
  <?php

            if(isset($_POST['registrar'])){

                if (isset($_POST['registrar'])) {
        
                    if (isset($_POST['usuario']) && isset($_POST['passwd']) && isset($_POST['rPasswd'])) {
                        
                        if ($_POST['passwd'] == $_POST['rPasswd']) {

                            if (compararNombreUsuarios($_POST['usuario'])) {
                                registro($_POST['usuario'],md5($_POST['passwd']));
                            }else{
                                echo"EL USUARIO YA EXISTE";
                            }
                            
                        }else{
                            echo"NO COINCIDEN LAS CONTRASEÑAS";
                        }
            
                    }
                }
            }
        ?>
    <form method="post" action="">
        <fieldset>
            <legend>Registro de usuario</legend> 
        <label for="usuario">Nombre usuario: </label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="passwd">Contraseña: </label>
        <input type="password" id="passwd" name="passwd" required><br>
        <label for="rPasswd">Repetir contraseña: </label>
        <input type="password" id="rPasswd" name="rPasswd" required><br>
        <button  type='submit' name='registrar'>Registrarse</button>
        </fieldset>
    </form>
</body>
</html>