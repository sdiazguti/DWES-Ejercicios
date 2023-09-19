<html>
    <head>
    </head>
    <body>
        <?php
        require_once('Coche.php');
        $coche1 = new Coche("1234aaa",100);
        echo"La matricula de \$coche1 es :".$coche1->__get("matricula")."<br />";
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        $coche1->__set("matricula","5678bbb");
        $coche1->__set("velocidad",80);
        echo"La matricula de \$coche1 es :".$coche1->__get("matricula")."<br />";
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        $coche1->frenar(30);
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        $coche1->acelerar(50);
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        $coche1->acelerar(50);//no acelera ya que la velocidad total sube de 120
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        $coche1->frenar(200);//no frena ya que la velocidad total baja de 0
        echo"La velocidad de \$coche1 es :".$coche1->__get("velocidad")."<br />";
        ?>
    </body>
</html>