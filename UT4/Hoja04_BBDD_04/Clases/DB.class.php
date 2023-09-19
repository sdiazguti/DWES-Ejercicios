<?php


class DB{

    const  HOST = "localhost";
    const  DATABASE = "dwes_04_supermercado";
    const  USERNAME = "root";
    const PASSWORD = "mysql";

    private static $instancia = null;

    private function __construct(){}

    public function getInstancia(){

        if (self::$instancia==null) {
            self::$instancia = new DB();
        }
        return self::$instancia;
    }

    private function getConexion(){

        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES uft8");

        try {
            
            $dwes = new PDO('mysql:host='.self::HOST.';dbname='.self::DATABASE, self::USERNAME, self::PASSWORD, $opciones);
            $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dwes;

        } catch (Exception $ex) {
            
            echo"<p>{$ex->getMessage()}</p>";
            return null;

        }

    }
    
    public function getProductos($categoria = NULL){

        return array_merge($this->getProductosAlimentacio($categoria),$this->getProductosElectronica($categoria));
               

    }

    public function getProductosAlimentacio($categoria = NULL){

        $pAlimentacion = [];

        $conexion = $this->getConexion();

        $consulta = "SELECT productos.codigo, productos.precio, productos.nombre, productos.categoria, pAlimentacion.mesCaducidad, pAlimentacion.annoCaducidad FROM productos inner join pAlimentacion ON productos.codigo = pAlimentacion.codigo";

        $consulta+= $categoria !=NULL ? "WHERE producto.categoria = ?":"";

        $sentencia = $conexion->prepare($consulta);

        if ($categoria != NULL) {
            $sentencia->bindValue(1,$categoria);
        }

        if ($sentencia->execute()) {
            while ($fila = $sentencia->fetchObject()) {
                //crear ternario para comprobar categoria;
                //$c = $categoria != NULL ? $categoria
                $pAlimentacion = new Alimentacion($fila->codigo,$fila->precio,$fila->nombre,new Categorias(1,""),$fila->mesCaducidad,$fila->annoCaducidad);
            }

            unset($sentencia);
            return $pAlimentacion;

        }

    }

    public function getProductosElectronica($categoria = NULL){

        $pElectronica = [];

        $conexion = $this->getConexion();

        $consulta = "SELECT productos.codigo, productos.precio, productos.nombre, productos.categoria, pElectronica.plazoGarantia FROM productos inner join pElectronica ON productos.codigo = pElectronica.codigo";

        $consulta+= $categoria !=NULL ? "WHERE producto.categoria = ?":"";

        $sentencia = $conexion->prepare($consulta);

        if ($categoria != NULL) {
            $sentencia->bindValue(1,$categoria);
        }

        if ($sentencia->execute()) {
            while ($fila = $sentencia->fetchObject()) {
                $pElectronica = new Electronica($fila->codigo,$fila->precio,$fila->nombre,$fila->categoria,$fila->plazoGarantia);
            }

            unset($sentencia);
            return $pElectronica;

        }

    }

}