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

function llegada(){

    $comp=false;
    $conexion = getConexion();
    $consulta = "UPDATE plazas SET reservada = 0 WHERE reservada = 1 ; ";
    $consulta.= "DELETE FROM pasajeros; ";
    $sentencia = $conexion->prepare($consulta);

    if ($sentencia->execute()) {
        while ($fila = $sentencia->fetchObject()) {

          $comp=true;
           
        }

    }
    unset($consulta);
    unset($sentencia);

    return $comp;


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

function reserva($nombre,$dni,$asiento){
    
    $correcto=false;
    $conexion = getConexion();
    $consulta = "INSERT INTO pasajeros (dni,nombre,sexo,numero_plaza) VALUES (?,?,'-',?); ";
    $consulta.="UPDATE plazas SET reservada = 1 WHERE numero = ? ; ";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindValue(1,$dni);
    $sentencia->bindValue(2,$nombre);
    $sentencia->bindValue(3,$asiento);
    $sentencia->bindValue(4,$asiento);
    if ($sentencia->execute()) {
        $correcto=true;
    }
    
    unset($consulta);
    unset($sentencia);
    return $correcto;

}

function registro($usuario,$passwd){
    $correcto=false;
    $conexion = getConexion();
    $consulta = "INSERT INTO usuario (usuario,password) VALUES (?,?)";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindValue(1,$usuario);
    $sentencia->bindValue(2,$passwd);
    if ($sentencia->execute()) {
        $correcto=true;
    }
    
    unset($consulta);
    unset($sentencia);
    return $correcto;
}

function gestionPlazas(){

    $plazas;
    $conexion = getConexion();
    $consulta = "SELECT numero, precio FROM plazas";
    $sentencia = $conexion->prepare($consulta);
    if($sentencia->execute()){

        while ($fila = $sentencia->fetchObject()) {

            $plazas []= array("numero"=>$fila->numero,"precio"=>$fila->precio);
           
        }

    }

    return $plazas;

}

function compararNombreUsuarios($usuario){

    $comp=false;
    $user="";
    $conexion = getConexion();
    $consulta = "SELECT usuario from usuario where usuario = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindValue(1,$usuario);

    if ($sentencia->execute()) {
        while ($fila = $sentencia->fetch(PDO::FETCH_OBJ)) {

            $user = $fila->usuario;

        }

    }
    unset($consulta);
    unset($sentencia);
    
    if ($usuario == $user) {
        $comp=false;
    }else{
        $comp=true;
    }

    return $comp;

}

function compararPasswdUsuarios($passwd){

    $comp=false;
    $user="";
    $conexion = getConexion();
    $consulta = "SELECT password from usuario where password = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindValue(1,$passwd);

    if ($sentencia->execute()) {
        while ($fila = $sentencia->fetchObject()) {

            $user = $fila->password;

        }

    }
    unset($consulta);
    unset($sentencia);
    
    if ($passwd == $user) {
        $comp=false;
    }else{
        $comp=true;
    }

    return $comp;

}

function comprobarUsuario($usuario,$passwd){

    $comp=false;
    $user;
    $conexion = getConexion();
    $consulta = "SELECT usuario, password from usuario where usuario = ?";
    $sentencia = $conexion->prepare($consulta);
    $sentencia->bindValue(1,$usuario);

    if ($sentencia->execute()) {
        while ($fila = $sentencia->fetchObject()) {

            $user []= array("nombre"=>$fila->usuario,"password"=>$fila->password);
           
        }

    }
    unset($consulta);
    unset($sentencia);
    
    foreach ($user as $data) {
        if ($usuario == $data['nombre'] && $passwd == $data['password']) {
            $comp=true;
        }else{
            $comp=false;
        }
    }  

    return $comp;

}


?>