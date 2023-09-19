<?php

if (isset($_POST['nombre']) && isset($_POST['grado'])) {
   echo $_POST['nombre'],"<br>";
   echo $_POST['grado'],"<br>";
}else{
    echo $_GET['nombre'],"<br>";
    echo $_GET['grado'],"<br>";
}



?>