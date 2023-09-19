<?php
//Llamar a las clases requeridas para realizar las funciones
require_once('Categorias.class.php');
require_once('Productos.class.php');
require_once('Electronica.class.php');
require_once('Alimentacion.class.php');

class DB{
//Definir constantes para conectar a la base de datos
    const  HOST = "localhost";
    const  DATABASE = "dwes_04_supermercado";
    const  USERNAME = "root";
    const PASSWORD = "mysql";
//Atributo estatico instancia para acceder sin llamar a la clase (Guarda una instacia de la clase)
    private static $instancia = null;
//Constructor privado por defecto 
    private function __construct(){}
//Funcion publica y estatica para cargar y devolver el atributo instancia
    public static function getInstancia(){

        if (self::$instancia==null) {
            self::$instancia = new DB();
        }
        return self::$instancia;
    }
//Funcion publica para obtener conexion con la base de datos
    public function getConexion(){

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");

        try {
            
            $dwes = new PDO('mysql:host='.self::HOST.';dbname='.self::DATABASE, self::USERNAME, self::PASSWORD, $opciones);
            $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dwes;

        } catch (Exception $ex) {
            
            echo"<p>{$ex->getMessage()}</p>";
            return null;

        }

    }
    //Funcion combina los dos arrays de alimentacion y electronica (si no se le pasa categoria su valor es null) 
    public function getProductos($categoria = NULL){

        return array_merge($this->getProductosAlimentacio($categoria),$this->getProductosElectronica($categoria));
               
    }
//Funcion que guarda los pruductos de alimentacion en un array (si no se le pasa categoria(id) su valor es null)
    public function getProductosAlimentacio($categoria = NULL){

        $pAlimentacion = [];

        $conexion = $this->getConexion();

        $consulta = "SELECT productos.codigo, productos.precio, productos.nombre, productos.categoria, alimentaciones.mesCaducidad, alimentaciones.anyoCaducidad FROM productos inner join alimentaciones ON productos.codigo = alimentaciones.codigo ";
        //si se le pasa una categoria añade el where si no no añade nada
        $consulta.= $categoria !=NULL ? "WHERE productos.categoria = ? ":" ";

        $sentencia = $conexion->prepare($consulta);

        if ($categoria != NULL) {
            $sentencia->bindValue(1,$categoria,PDO::PARAM_INT);
        }

        if ($sentencia->execute()) {
            while ($fila = $sentencia->fetchObject()) {
                //Si se le pasa categoria se le pasa la categoria(id) a la funcion getCategorias, si no, la obtiene del producto
                $c = $categoria != NULL ? $this->getCategorias($categoria):$this->getCategorias($fila->categoria);
                //Carga un array de objetos Alimentacion
                $pAlimentacion [] = new Alimentacion($fila->codigo,$fila->precio,$fila->nombre,$c,$fila->mesCaducidad,$fila->anyoCaducidad);
            }

            unset($sentencia);
            return $pAlimentacion;

        }

    }
    //Funcion que guarda los pruductos de electronica en un array (si no se le pasa categoria(id) su valor es null)
    public function getProductosElectronica($categoria = NULL){

        $pElectronica = [];

        $conexion = $this->getConexion();

        $consulta = "SELECT productos.codigo, productos.precio, productos.nombre, productos.categoria, electronicas.plazoGarantia FROM productos inner join electronicas ON productos.codigo = electronicas.codigo ";
        //si se le pasa una categoria añade el where si no no añade nada
        $consulta.= $categoria !=NULL ? "WHERE productos.categoria = ?":"";

        $sentencia = $conexion->prepare($consulta);

        if ($categoria != NULL) {
            $sentencia->bindValue(1,$categoria);
        }

        if ($sentencia->execute()) {
            while ($fila = $sentencia->fetchObject()) {
            //Si se le pasa categoria se le pasa la categoria(id) a la funcion getCategorias, si no, la obtiene del producto
                $c = $categoria != NULL ? $this->getCategorias($categoria):$this->getCategorias($fila->categoria);
            //Carga un array de objetos Electronica
                $pElectronica [] = new Electronica($fila->codigo,$fila->precio,$fila->nombre,new Categorias(1,"television"),$fila->plazoGarantia);
            }

            unset($sentencia);
            return $pElectronica;

        }

    }
//Funcion que devuelve un array de categorias si no se le pasa el id o un objeto categoria si se le pasa el id
    public function getCategorias($id = NULL){

        $categoria = [];

        $conexion = $this->getConexion();

        $consulta = "SELECT id, nombre FROM categorias ";
//si se le pasa el id se añade la linea, si no, no añade nada
        $consulta.= $id != NULL ? "WHERE id = ?":"";

        $sentencia = $conexion->prepare($consulta);

        if($id != NULL){
//si se la pasa el id le asigna el valor            
            $sentencia->bindValue(1,$id);

        }

        if ($sentencia->execute()) {

            
                while($fila = $sentencia->fetchObject()){

                    if ($id != NULL) {
                        //si se le pasa id carga en $categoria un objeto Categoria
                        $categoria = new Categorias($fila->id, $fila->nombre);
                        
                    }else{
                        //si no se le pasa el id carga un ARRAY de objetos Categoria
                    $categoria [] = new Categorias($fila->id, $fila->nombre);

                    }
                }

            unset($sentencia);
            return $categoria;

        }

    }

    public function eliminarProducto($codigo){

        $conexion = $this->getConexion();

        $consulta = "DELETE from ";

    } 

}