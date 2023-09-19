<?php //Si presiono el boton  borrar borro la cookie
if (isset($_POST['borrar'])) {
    unset($_COOKIE['sesionUser']);

}

if (!isset($_COOKIE['sesionUser'])) {
//Si no existe la cookie muestro un mensaje de bienvenida y creo la cookie 
    echo"<h1>Bienvenido a cookie.php</h1>";
    setcookie('sesionUser',date("Y-m-d H:i:s"));


} else {
//Si ya existe actualizo su valor muestro un mensaje y su valor actualizado
    $_COOKIE['sesionUser']=date("Y-m-d H:i:s");
    echo"<h1>Hola de nuevo</h1>";
    echo"<div>Hola este es tu visita numero ".$_COOKIE['numeroVisita'].". Tu ultima sesión fue ".$_COOKIE['sesionUser']."</div>";
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>COOKIES</title>
  </head>
  <body>
      <form method="post" action="">
        <input type="submit" name="actualizar" id="actualizar" value="Actualizar">

        <?php
        //Si existe la cookie muestra el boton borrar que permite borrarla
            if (isset($_COOKIE['sesionUser'])) {
        ?>
        <input type="submit" name="borrar" id="borrar" value="Borrar Cookie">
        <?php
            }
        ?>

    </form>
  </body>
  </html>