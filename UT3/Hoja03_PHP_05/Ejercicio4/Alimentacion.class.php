<?php

class Alimentacion extends Productos{

    private $mesCaducidad,$annoCaducidad;

    public function __construct($codigo,$precio,$nombre,$mesCaducidad,$annoCaducidad){

        parent::__construct($codigo,$precio,$nombre);
        $this->mesCaducidad=$mesCaducidad;
        $this->annoCaducidad=$annoCaducidad;
        
    }

    public function __get($variable){

       return $this->$variable;

    }

    public function __set($variable,$valor){

        $this->$variable=$valor;

    }

    public function __toString(){

        return "Nombre: ".$this->nombre.". Precio: ".$this->precio.". Codigo: ".$this->codigo.".
        Mes caducidad: ".$this->mesCaducidad.". Año caducidad: ".$this->annoCaducidad;

    }

}

?>