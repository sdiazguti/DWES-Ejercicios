<?php

require_once('Medico.class.php');
require_once('Familia.class.php');
require_once('Urgencias.class.php');
require_once('Turno.class.php');

class DB{

    const Host="root";
    private static $instacia = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$intancia == null) {
            self::$intancia = new DB();
        }
        return self::$instancia;
    }

    private function getConexion(){
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    try{

        $dwes = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD, $opciones);
        $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dwes;

    }
    catch(Exception $ex){

        echo"<p>{$ex->getMessage()}</p>";
        return null;

    }
    }

    static public function getConexion(){ //DB::getInstance()->getMedicos() paginas principales
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

        $turnos = [];
        $conexion = $this->getConexion();
        $consulta = "SELECT id,nombre FROM turnos";
        $sentencia = $conexion->prepare($consulta);
        if ($sentencia->execute()) {
            while($fila = $sentencia->fetchObject()){
               $turnos = new Turno($fila->id,$fila->nombre);
            }
            unset($sentencia);
            return $turno;
        }
    }

    public function buscarMedico($db,$turno){
        $sql = "select * from medicos where turno like :turno";
        $query = $db->prepare($sql);
        $query->bindValue(':turno',"%".$turno."%");
        $query->execute();
        $medicos = $query->fetchAll(PDO::FETCH_OBJ);
        return $medicos;
    }

    public function getMedicos($turno = NULL){

        return array_merge($this->getMedicosFamilia($turno),$this->getMedicosUrgencias($turno));

    }

    public function getMedicosFamilia($turno = NULL){
//para mostrar info de los datos cargados en el array usar los getter
        $medicos = [];
        $conexion = $this->getConexion();
        //inner join
        $consulta = "SELECT medicos.codigo, medicos.nombre FROM medicos inner join mFamilias ON medicos.codigo = mFamilias.codigo";
        $consulta+= $turno !=NULL ? "WHERE medicos.turno = ?":"";
        $sentencia = $conexion->prepare($consulta);

        if ($turno != NULL) {
            $sentencia->bindValue(1,$turno);
        }
        if ($sentencia->execute()) {
            while($fila = $sentencia->fetchObject()){
               //para inserta turno se necesita obtener codigo turno
               $medicos = new Familia($fila->codigo,$fila->nombre,$fila->edad,$fila->turno,$fila->num_pacientes);
            }
            unset($sentencia);
            return $medicos;
        }
    }

}