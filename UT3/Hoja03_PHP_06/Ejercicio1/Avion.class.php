<?php

class Avion extends ElementoVolador{

    private $companiaAerea;
    private $fechaAlta;
    private $altitudMaxima;

    public function __construct($nombre, $numAlas, $numMotores, $companiaAerea, $fechaAlta, $altitudMaxima){

        parent::__construct($nombre, $numAlas, $numMotores);
        $this->companiaAerea=$companiaAerea;
        $this->fechaAlta=$fechaAlta;
        $this->altitudMaxima=$altitudMaxima;

    }

    public function getCompaniaAerea(){
        return $this->companiaAerea;
    }

    public function getFechaAlta(){
        return $this->fechaAlta;
    }

    public function getAltitudMaxima(){
        return $this->altitudMaxima;
    }

    public function setAltitudMaxima($valor){
        return $this->altitudMaxima=$valor;
    }

    public function setCompaniaAerea($valor){
        return $this->companiaAerea=$valor;
    }

    public function setFechaAlta($valor){
        return $this->fechaAlta=$valor;
    }

    public function volar($altitud){



        if ($altitud>=0 && $altitud<$this->getAltitudMaxima()) {
            if ($this->getVelocidad()>=150) {
                for (parent::getAltitud(); parent::getAltitud() <= $altitud; parent::setAltitud(parent::$getAltitud()+100)) { 
                    return "Altitud incrementada en 100 ".parent::getAltitud(); 
                }
            }else{
                return "Error la velocidad es menor a 150";
            }
        }else{
            return "Error la altitud es 0 o menor o supera la maxima permitida";
        }
    }

    public function mostrarInformacion(){

        return"Nombre: ".$this->getNombre()."<br>
        Numero de alas: ".$this->getNumAlas()."<br>
        Numero de motores: ".$this->getNumMotores()."<br>
        Altitud: ".$this->getAltitud()."<br>
        Velocidad: ".$this->getVelocidad()."<br>
        Nombre compañia: ".$this->getCompaniaAerea."<br>
        Fecha de alta: ".$this->getFechaAlta."<br>
        Altitud maxima: ".$this->getAltitudMaxima."<br>";

    }

}

?>