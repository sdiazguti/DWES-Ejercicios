<!DOCTYPE html>
<html>
<head>
<title>Ejercicio 3 Hoja03_PHP_05</title>
<style>
.medicoInfo{border-style: dotted;}
</style>
</head>

<body>
<?php

require_once('Medico.class.php');
require_once('Familia.class.php');
require_once('Urgencias.class.php');


//$familia = new Familia("Meico1",35,Turno::Mannana,5);

//$urgencias = new Urgencias("Medico2",56,Turno::Tarde,"Unidad 2");

$medicos[] = new Familia("Meico1",35,Turno::Mannana,5);
$medicos[] =new Urgencias("Medico2",56,Turno::Tarde,"Unidad 2");

function getTodos($medicos){
echo "<h2>TODOS LOS MEDICOS</h2><ul>";
foreach ($medicos as $medico) {
    echo "<li>$medico</li>";
}
echo "</ul>";
}

function getTardeUrgenciaMayores($medicos){
    echo "<h2>MEDICOS MAYORES</h2><ul>";
    foreach ($medicos as $medico) {
        if ($medico instanceof Urgencias && $medico->turno == "Tarde" && $medico->edad>60) {
            echo"<li>$medico</li>";
        }
    }
    echo "</ul>";
}

function getFamilia($medicos,$numPaciente){
    echo "<h2>MEDICOS DE FAMILIA</h2><ul>";
    foreach ($medicos as $medico) {
        if ($medico instanceof Familia && $medico->num_pacientes>=$numPaciente) {
            echo"<li>$medico</li>";
        }
    }
    echo "</ul>";
}

?>
</body>

</html>
