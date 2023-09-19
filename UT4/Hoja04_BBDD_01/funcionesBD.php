<?php

require_once('conexionesBD.php');


function getEquipos(){

    $pdo = getConexion();
    $consulta = "select nombre from equipos";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($equipo = $resultado->fetch(PDO::FETCH_OBJ)) {
            $equipos[] = $equipo->nombre;
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $equipos;
}

function getJugadores($equipo){

    $pdo = getConexion();
    $consulta = "select nombre, peso, codigo from jugadores where nombre_equipo ='$equipo'";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($jugador = $resultado->fetch(PDO::FETCH_OBJ)) {
            $jugadores[]= array("nombre"=>$jugador->nombre , "peso"=>$jugador->peso, "codigo"=>$jugador->codigo ); 
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $jugadores;
}

function getUltimoCodigoJugador($equipo){

    $pdo = getConexion();//
    $consulta = "select max(codigo) as codigo from jugadores";


}

function borrarInsertarJugador($codigoJugadorBorrar,$nombre,$procedencia,$altura,$peso,$posicion,$nombreEquipo){
    $codigoNuevo  = getUltimoCodigoJugador()+1;
    $pdo = getConexion();
    $pdo->beginTransaction();
    
    $sqlBorrarEstadisticas = "delete from estadisticas where jugador = ?";
    $sqlBorrarJugador = "delete from jugadores where codigo = ?";
    $sqlInsertarJugador = "insert into jugadores values (?,?,?,?,?,?)";

    $senteciaBorrarEstadistica = $pdo->prepare($sqlBorrarEstadisticas);
    $senteciaBorrarEstadistica->bindParam(1,$codigoJugadorBorrar);
    $elemtenosBorrados1=$senteciaBorrarEstadistica->execute();
    unset($senteciaBorrarEstadistica);

    $senteciaBorrarJugador = $pdo->prepare($sqlBorrarJugador);
    $senteciaBorrarEstadistica->bindParam(1,$codigoJugadorBorrar);
    $elementosBorrados2 = $senteciaBorrarJugador->execute();
    unset($senteciaBorrarEstadistica);

    $sentenciaInsertar=$pdo->prepare($sqlInsertarJugador);
    $sentenciaInsertar->bindParam(1, $codigoNuevo);
    $sentenciaInsertar->bindParam(2, $nombre);
    $sentenciaInsertar->bindParam(3, $procedencia);
    $sentenciaInsertar->bindParam(4, $altura);
    $sentenciaInsertar->bindParam(5, $peso);
    $sentenciaInsertar->bindParam(6, $posicion);
    $sentenciaInsertar->bindParam(7, $nombreEquipo);
    $elementosInsertados = $sentenciaInsertar->execute();

    if ($elementosBorrados1 && $elementosBorrados2 && $elementosInsertados) {
        $pdo->commit();
    } else {
        $pdo->rollback();
    }
    unset($sentenciaInsertar);
    unset($senteciaBorrarJugador);
    unset($senteciaBorrarEstadistica);
    unset($pdo);
    
}

function updatePesos($codigo,$peso){

    $pdo = getConexion();
    $pdo->beginTransaction();

    $sqlUpdatePeso= "update jugadores set peso=? where codigo=?";
    $setenciasUpdate->bindParam(1, $peso);
    $setenciasUpdate->bindParam(2, $codigo);
   if ($sentenciasUpdate->exec() !== 0) {
       $pdo->commit();
   } else {
       $pdo->rollback();
   }
   
}

?>