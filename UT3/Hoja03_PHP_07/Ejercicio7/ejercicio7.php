<?php

if (isset($_POST['numeroMenor']) && isset($_POST['numeroMayor'])) {
    echo"Lista de pares de números:<br>";
$menor=intval($_POST['numeroMenor']);
$mayor=intval($_POST['numeroMayor']);
    while ($menor<=$_POST['numeroMayor'] && $mayor>=$_POST['numeroMenor']) {
        echo"($menor,$mayor)";
        $menor++;
        $mayor--;
    }
    echo"<br>";
}else{
    echo "ERROR no se encontraron los datos.";

}

echo"<a href='formulario.html'>Volver a la página principal</a>";


?>