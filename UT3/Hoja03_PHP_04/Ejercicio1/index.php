<html>
    <head>
    </head>
    <body>
        <?php

        require_once('Circulo.php');
        $circulo1 = new Circulo(5);
        echo"El radio de \$circulo1 es :".$circulo1->__get("radio")."<br />";
        $circulo1->__set("radio",8);
        echo"El radio de \$circulo1 es :".$circulo1->__get("radio")."<br />";
        ?>
    </body>
</html>