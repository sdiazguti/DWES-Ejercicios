<?php
class DB{
    static public function getConexion(){ //DB::getConexion()
        try {
            $dns = "mysql:host=localhost;dbname=dwes_05_hospital;charset=utf8mb4";
            $usuario = "root";
            $password = "mysql";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $bd = new PDO($dsn,$usuario,$password,$opt);
            
            return $bd;
        
        } catch (PDOException $error) {
            echo "<h2>ERROR al conectar a la base de datos: <br></h2>".$error->getMessage();
            exit;
        }
    }


    public function getMedicos($db){
        $sql = "select * from medicos";
        $query = $db->prepare($sql);
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_OBJ);
        return $medicos;
    }

    public function getTurnos($db){
        $sql = "select * from turnos";
        $query = $db->prepare($sql);
        $query->execute();
        $turnos = $query->fetchAll(PDO::FETCH_OBJ);
        return $turnos;
    }

    public function buscarMedico($db,$turno){
        $sql = "select * from medicos where turno like :turno";
        $query = $db->prepare($sql);
        $query->bindValue(':turno',"%".$turno."%");
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_OBJ);
        return $medicos;
    }

}