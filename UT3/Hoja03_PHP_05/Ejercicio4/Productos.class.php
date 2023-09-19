<?php

abstract class Productos{

    protected $codigo,$precio,$nombre;

    protected function __construct($codigo,$precio,$nombre){

        $this->codigo=$codigo;
        $this->precio=$precio;
        $this->nombre=$nombre;
        
    }

    public function __get($variable){

       return $this->$variable;

    }

    public function __set($variable,$valor){

        $this->$variable=$valor;

    }

    public function __toString(){

        return "Nombre: ".$this->nombre.". Precio: ".$this->precio.". Codigo: ".$this->codigo.".";

    }

}

?>