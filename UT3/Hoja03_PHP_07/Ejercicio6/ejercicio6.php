<?php

if (isset($_POST['numero'])) {

    for ($i=0; $i <= 10; $i++) { 
        echo "$i x",$_POST['numero']," = ",$i*$_POST['numero'],"<br>";
    }

}else{
    echo "ERROR no se encontraron los datos.";

}

echo"<a href='formulario.html'>Volver a la página principal</a>";


?>