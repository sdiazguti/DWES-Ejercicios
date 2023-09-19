<?php

class Helicoptero extends ElementoVolador{

    private $propietario;
    private $nRotor;

    public function __construct($nombre, $numAlas, $numMotores, $propietario, $nRotor){

        parent::__construct($nombre, $numAlas, $numMotores);
        $this->propietario=$propietario;
        $this->nRotor=$nRotor;

    }

    public function setPropietario($valor){

        $this->propietario=$valor;

    }

    public function setNRotor($valor){

        $this->nRotor=$valor;

    }

    public function getPropietario(){

        return $this->propietario;

    }

    public function getNRotor(){

        return $this->nRotor;

    }

    public function volar($altitud){

        if (($altitud*$this->getNRotor)>(100*$this->getNRotor)) {
            while (parent::$getAltitud <= $altitud) {
                parent::$setAltitud(parent::$getAltitud+20);
                return"Altitud incrementada en 20".parent::$getAltitud;
            }
        }else{
            return"Error la altitud no puede superar 100";
        }

    }

    public function mostrarInformacion(){

        return"Nombre: ".parent::getNombre()."<br>
        Numero de alas: ".parent::getNumAlas()."<br>
        Numero de motores: ".parent::getNumMotores()."<br>
        Altitud: ".parent::getAltitud()."<br>
        Velocidad: ".parent::getVelocidad()."<br>
        Nombre propietario: ".$this->getPropietario."<br>
        Fecha de alta: ".$this->getNRotor."<br>";

    }

}

?>