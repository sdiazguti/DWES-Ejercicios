<?php

require_once('conexionBD.php');

function getLibros(){

    $pdo = getConexion();
    $consulta = "select * from libros";

    if ($resultado = $pdo->query($consulta)) {
        
        while ($libros = $resultado->fetch(PDO::FETCH_OBJ)) {
            $libros[]= array("numeroEjemplar"=>$libro->numero_ejemplar , "titulo"=>$libro->titulo, "anyoEdicion"=>$libros->anyo_edicion, "precio"=>$libro->precio, "fechaAdquisicion"=>$libro->fecha_adquisicion); 
        }
        unset($resultado);
    }
    unset($consulta);
    unset($pdo);
    return $libros;
}

function setLibros($titulo,$anyoEdicion,$precio,$anyoAdquisicion){

    $pdo = getConexion();
    $pdo->beginTransaction();

    $sqlInsertarLibros = "insert into libros (titulo, anyo_edicion, precio, fecha_adquisicion) VALUES (?,?,?,?)";

    if (true) {//comprobar que la fecha es correcta
        
        $sentenciaInsertar=$pdo->prepare($sqlInsertarLibros);
        $sentenciaInsertar->bindParam(1, $anyoEdicion);
        $sentenciaInsertar->bindParam(2, $precio);
        $sentenciaInsertar->bindParam(3, $anyoAdquisicion);
        
        if ($sentenciaInsertar->exec() !== 0) {
            $pdo->commit();
           return echo"<div name='alerta'>Datos guardados correctamente</div>";
        } else {
            $pdo->rollback();
           return echo"<div name='alerta'><strong>ERROR</strong> datos no guardados</div>";
        }

    }

    unset($sqlInsertarLibros);
    unset($pdo);
    
}

?>