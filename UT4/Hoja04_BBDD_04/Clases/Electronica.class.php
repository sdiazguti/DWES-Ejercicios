<?php
require_once('Productos.class.php');
class Electronica extends Productos{

    private $plazoGarantia;

    public function __construct($codigo,$precio,$nombre,Categorias $categoria,$plazoGarantia){

        parent::__construct($codigo,$precio,$nombre,$categoria);
        $this->plazoGarantia=$plazoGarantia;
        
    }

    public function __get($variable){

       return $this->$variable;

    }

    public function __set($variable,$valor){

        $this->$variable=$valor;

    }

    public function __toString(){

       return parent::__toString()." Plazo garantia: ".$this->plazoGarantia.".";

    }

}

?>