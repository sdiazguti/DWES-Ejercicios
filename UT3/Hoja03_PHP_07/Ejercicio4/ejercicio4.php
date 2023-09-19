<?php

if (isset($_REQUEST['nombre']) && isset($_REQUEST['grado'])) {
   echo $_REQUEST['nombre'],"<br>";
   echo $_REQUEST['grado'],"<br>";
}else{
    echo "ERROR no se encontraron los datos.";

}



?>