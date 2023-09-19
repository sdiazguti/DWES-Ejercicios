<?php
require_once('funcionesBBDD.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LLEGADA</title>
  </head>
  <body>
      <h1>Llegada</h1>
  <form method="post" action="">
            <fieldset>
            <button  type='submit' name='llegada'>Llegada</button>
            </fieldset>
        </form>
        <?php
            if(isset($_POST['llegada'])){
                if(llegada()){
                    echo"Ha llegado correctamente";
                    echo"<div><a href='index.html'>Volver</a></div>";
                }else{
                    echo"ERROR no se pudo realizar la llegada";
                    echo"<div><a href='index.html'>Volver</a></div>";
                }
            }
        ?>
</body>
</html>