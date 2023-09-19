<html>
    <head>
    </head>
    <body>
        <?php
        require_once('Monedero.php');
        $monedero1 = new Monedero(20000);
        echo"La cantidad  de dinero que contie \$monedero1 es :".$monedero1->__get("dinero")."€.<br />";
        $monedero1->sacar(1500);
        echo"La cantidad  de dinero que contie \$monedero1 es :".$monedero1->__get("dinero")."€.<br />";
        $monedero1->sacar(21000);
        echo"La cantidad  de dinero que contie \$monedero1 es :".$monedero1->__get("dinero")."€.(no retira porque la cantidad total seria menor que 0)<br />";
        $monedero1->meter(5000);
        echo"La cantidad  de dinero que contie \$monedero1 es :".$monedero1->__get("dinero")."€.<br />";
        echo"El numero de monederos actual es :".$monedero1->getMonederos().".<br />";
        $monedero2 = new Monedero(25);
        $monedero3 = new Monedero(500000);
        $monedero4 = new Monedero(1600);
        echo"La cantidad  de dinero que contie \$monedero2 es :".$monedero2->__get("dinero")."€.<br />";
        echo"La cantidad  de dinero que contie \$monedero3 es :".$monedero3->__get("dinero")."€.<br />";
        echo"La cantidad  de dinero que contie \$monedero4 es :".$monedero4->__get("dinero")."€.<br />";
        echo"El numero de monederos actual es :".$monedero1->getMonederos().".<br />";
        $monedero2->__destruct();
        echo"El numero de monederos actual es :".$monedero1->getMonederos().".<br />";
        ?>
    </body>
</html>