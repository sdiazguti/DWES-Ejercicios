<?php

abstract class ElementoVolador implements Volador{

    private $nombre;
    private $numAlas;
    private $numMotores;
    private $altitud;
    private $velocidad;

    public function __construct($nombre, $numAlas, $numMotores){

        $this->nombre=$nombre;
        $this->numAlas=$numAlas;
        $this->numMotores=$numMotores;
        $this->altitud=0;
        $this->velocidad=0;

    }

    public function getNombre(){
       return $this->nombre;
    }

    public function getNumAlas(){
        return $this->numAlas;
    }

    public function getNumMotores(){
        return $this->numMotores;
    }

    public function getAltitud(){
        return $this->altitud;
    }

    public function getVelocidad(){
        return $this->velocidad;
     }

    public function setNombre($valor){
        return $this->nombre=$valor;
    }

    public function setnumAlas($valor){
        return $this->numAlas=$valor;
    }
    
    public function setnumMotores($valor){
        return $this->numMotores=$valor;
    }

    public function setAltitud($valor){
        return $this->altitud=$valor;
    }

    public function setVelocidad($valor){
        return $this->velocidad=$valor;
    }
    
    public function volando(){
        return $this->altitud>0;
    }

    public function acelerar($valor){
        $this->velocidad+=$valor;
    }

    abstract function volar($velocidad);

    abstract function mostrarInformacion();

}

?>