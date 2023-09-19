<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 2 Hoja03_PHP_05</title>
<style>
.cuentaInfo{border-style: dotted;}
</style>
</head>

<body>
<?php

require_once('Cuenta.class.php');
require_once('CuentaCorriente.class.php');
require_once('CuentaAhorro.class.php');

$corriente = new CuentaCorriente(5,"Pepito",1000,15);
$corriente->reintegro(150);
echo $corriente->mostrar();

$ahorro = new CuentaAhorro(12,"Pedro",2100,18,1.12);
$ahorro->aplicarInteres();
echo $ahorro->mostrar();
echo $corriente->esPreferencial(4);



?>
</body>

</html>
