<html>
    <head>
    </head>
    <body>
        <?php
            require_once('Producto.php');
     /*       $prod1 = new Producto();
            $prod1->__set("codigo",12);
            $prod1->__set("nombre","Cuaderno");
            $prod1->__set("descripcion","Es un cuaderno");
            $prod1->__set("existencias",245);
            $prod1->__set("precio",3);
            echo $prod1->mostrar();
     */
            $prod2 = new Producto("A1234","Es un telefono",1234,799,"Iphone");
            echo "\$prod2: ".$prod2->mostrar()."<br />";
            $prod2->__set("codigo",45);
            $prod2->__set("precio",1700);
            echo "\$prod2: ".$prod2->mostrar()."<br />";
            echo"Numero de productos ".$prod2->getProductos()."<br />";
            $prod3 = new Producto("p1234","Es una camiseta",600,25.99,"Camiseta");
            echo"Numero de productos ".$prod2->getProductos()."<br />";
            echo "\$prod3: ".$prod3->mostrar()."<br />";
            unset($prod2);
            echo"Numero de productos ".$prod3->getProductos()."<br />";
        ?>
    </body>
</html>