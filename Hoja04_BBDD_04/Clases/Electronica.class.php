<?php
require_once('Productos.class.php');
class Electronica extends Productos{

    private $plazoGarantia;

    public function __construct($codigo,$precio,$nombre,Categorias $categoria,$plazoGarantia){

        parent::__construct($codigo,$precio,$nombre,$categoria);
        $this->plazoGarantia=$plazoGarantia;
        
    }

    public function getPlazoGarantia(){

        return $this->plazoGarantia;

    }

    public function setPlazoGarantia($plazoGarantia){

        $this->plazoGarantia=$plazoGarantia;

    }

    public function __toString(){

       return parent::__toString()." Plazo garantia: ".$this->plazoGarantia.".";

    }

}

?>