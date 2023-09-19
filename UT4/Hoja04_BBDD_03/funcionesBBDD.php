<?php

require_once('conexionesBD.php');

function getPasajeros(){

    $pdo = getConexion();
    $consulta = "select * from pasajeros";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($pasajero = $resultado->fetch(PDO::FETCH_OBJ)) {
            $pasajeros[]= array("dni"=>$pasajero->dni , "nombre"=>$pasajero->nombre, "sexo"=>$pasajero->sexo, "numeroAsiento"=>$pasajero->numero_plaza); 
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $pasajeros;

}

function getPlazasVacias(){

    $pdo = getConexion();
    $consulta = "select * from plazas where reservada ='0'";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($plaza = $resultado->fetch(PDO::FETCH_OBJ)) {
            $plazas[]= array("numero"=>$plaza->numero , "reservada"=>$plaza->reservada, "precio"=>$plaza->precio); 
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $plazas;
}

function getPlazas(){

    $pdo = getConexion();
    $consulta = "select * from plazas ";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($plaza = $resultado->fetch(PDO::FETCH_OBJ)) {
            $plazas[]= array("numero"=>$plaza->numero , "reservada"=>$plaza->reservada, "precio"=>$plaza->precio); 
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $plazas;
}

function reserva($nombre,$dni,$asiento){

    $pdo = getConexion();
    $pdo->beginTransaction();

    $sqlUpatePlaza = "update plazas SET reservada='1' WHERE numero=?";
    $sqlInsertPasajero = "insert into pasajeros (dni,nombre,sexo,numero_plaza) values (?,?,'-',?)";

    $comprobarDni = getPasajeros();
    $esIgualDni=false;
    foreach ($comprobarDni as $pasajeroDni) {
        if (strcmp($pasajeroDni['dni'],$dni)) {
            return"Es igual";
           $esIgualDni=true;
        }else{
            return"Es diferente";
            $esIgualDni=false;
        }
    }

    if (!$esIgualDni) {
        
    $sentenciaUnpdatePlaza=$pdo->prepare($sqlUpatePlaza);
    $sentenciaUnpdatePlaza->bindParam(1, $asiento);
    $ejecucionUpdatePlaza=$sentenciaUnpdatePlaza->execute();

    $sentenciaInsertPasajero=$pdo->prepare($sqlInsertPasajero);
    $sentenciaInsertPasajero->bindParam(1, $dni);
    $sentenciaInsertPasajero->bindParam(2, $nombre);
    $sentenciaInsertPasajero->bindParam(3, $asiento);
    $ejecucionInsertPasajero=$sentenciaInsertPasajero->execute();

    if ($ejecucionInsertPasajero  && $ejecucionUpdatePlaza ) {
        $pdo->commit();
        return "<div name='alerta'> Se ha reservado el asiento $asiento</div>";
    } else {
        $pdo->rollback();
        return"<div name='alerta'>Error no se realizo la reserva.</div>";
    }

    } else {
        return "<div name='alerta'>Error en la resreva. Ya existe el DNI.</div>";
    }
    

    
    
}

function llegada(){

    $pdo = getConexion();
    $pdo->beginTransaction();

    $sqlUpdatePlaza = "update plazas SET reservada='1' WHERE reservada='0'";

    $senteciaUpdatePlaza=$pdo->prepare($sqlUpatePlaza);
    $ejecucionUpdatePlaza=$sentenciaUnpdatePlaza->execute();

    if ($ejecucionUpdatePlaza !== 0) {
        $pdo->commit();
        echo"Cambios realizados";
    } else {
        $pdo->rollback();
        echo"No se han podido realizar los cambios";
    }
    

}

?>