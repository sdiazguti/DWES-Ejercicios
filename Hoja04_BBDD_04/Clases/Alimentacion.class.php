<?php

require_once('Clases/Productos.class.php');

class Alimentacion extends Productos{

    private $mesCaducidad,$annoCaducidad;

    public function __construct($codigo,$precio,$nombre,Categorias $categoria,$mesCaducidad,$annoCaducidad){

        parent::__construct($codigo,$precio,$nombre,$categoria);
        $this->mesCaducidad=$mesCaducidad;
        $this->annoCaducidad=$annoCaducidad;
        
    }

    public function getMesCaducidad(){

        return $this->mesCaducidad;

    }

    public function getAnnoCaducidad(){

        return $this->annoCaducidad;

    }

    public function setMesCaducidad($mesCaducidad){

        $this->mesCaducidad = $mesCaducidad;

    }

    public function setAnnoCaducidad($annoCaducidad){

        $this->annoCaducidad = $annoCaducidad;

    }

    public function __toString(){

        return parent::__toString()." Mes caducidad: ".$this->mesCaducidad.". Año caducidad: ".$this->annoCaducidad.".";

    }

}

?>