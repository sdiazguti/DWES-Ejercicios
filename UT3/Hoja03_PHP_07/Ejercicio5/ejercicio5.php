<?php

if (isset($_POST['numero'])) {
   $num=intval($_POST['numero']);
   if ($num%2==0) {
      echo"El numero $num es par<br>";
   }else{
       echo "El numero $num es impar<br>";
   }
}else{
    echo "ERROR no se encontraron los datos.";

}

echo"<a href='formulario.html'>Comprobar otro numero</a>";


?>