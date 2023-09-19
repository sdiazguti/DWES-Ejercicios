<?php

class Electronica extends Productos{

    private $plazoGarantia;

    public function __construct($codigo,$precio,$nombre,$plazoGarantia){

        parent::__construct($codigo,$precio,$nombre);
        $this->plazoGarantia=$plazoGarantia;
        
    }

    public function __get($variable){

       return $this->$variable;

    }

    public function __set($variable,$valor){

        $this->$variable=$valor;

    }

    public function __toString(){

        return "Nombre: ".$this->nombre.". Precio: ".$this->precio.". Codigo: ".$this->codigo.".
        Plazo garantia: ".$this->plazoGarantia.".";

    }

}

?>