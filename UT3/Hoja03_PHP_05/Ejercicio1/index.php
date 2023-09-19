<html>
    <head>
    </head>
    <body>
        <?php

        require_once('Empleado.class.php');
        require_once('Encargado.class.php');

        $empleado1  = new Empleado(1000);
        $encargado1  = new Encargado(1000);
        echo"Empleado1 ".$empleado1->getSueldo()."€<br/>";
        echo"Encargado1 ".$encargado1->getSueldo()."€<br/>";

        ?>
    </body>
</html>