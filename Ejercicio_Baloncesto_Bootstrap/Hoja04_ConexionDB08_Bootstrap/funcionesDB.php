<?php

    require_once 'conexionDB.php';

    function getEquipos(){
        $db = getConexion();
        $consulta = "SELECT nombre FROM equipos";
        if($resultado = $db->query($consulta)){
            while($registro = $resultado->fetch(PDO::FETCH_OBJ)){
                $arr[] = $registro->nombre;
            }
            unset($resultado);
        }
        unset($db);
        return $arr;
    }
    
    
    function getJugadoresPesoCodigo($nombre){
        $db = getConexion();
        $consulta = "SELECT codigo,nombre,peso FROM jugadores WHERE nombre_equipo = '$nombre'";
        if($resultado = $db->query($consulta)){
            while($registro = $resultado->fetch()){
                $jug[] = array("codigo" => $registro["codigo"], "nombre" => $registro["nombre"], "peso" => $registro["peso"]);  
            }
            unset($resultado);
        }
        unset($db);
        return $jug;
    }

    function actualizarPesos($pesos,$codigos){
        $db = getConexion();
        $consulta = "UPDATE jugadores SET peso = ? WHERE codigo = ?";
        $resultado = $db->prepare($consulta);

        for($i=0;$i<count($codigos);$i++){
            
            $resultado-> bindParam(1,$pesos[$i]);
            $resultado-> bindParam(2,$codigos[$i]);
            $resultado->execute();
            
        }
        
        unset($resultado);
        unset($db);
    }
?>