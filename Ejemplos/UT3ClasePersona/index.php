<html>
    <head>
    </head>
    <body>
        <?php

        require_once('Alumno.class.php');
        $alumno1 = new Alumno("DAW","Sergio");
        echo $alumno1->mostrar();
        ?>
    </body>
</html>