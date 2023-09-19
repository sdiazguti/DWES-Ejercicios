<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic Realm="Contenido restringido"');
    header('HTTP/1.0 401 Unauthorized');
    echo "Usuario no reconocido!";
    exit();
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SESIONES</title>
  </head>
  <body>
<?php
echo "Nombre de usuario: ".$_SERVER['PHP_AUTH_USER']."<br>";
echo "Contraseña: ".$_SERVER['PHP_AUTH_PW']."<br>";
?>
</body>
</html>
