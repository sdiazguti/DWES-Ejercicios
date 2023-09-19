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

        if ($altitud < (100* $this->nRotor)) {
            while ($this->$getAltitud() <= $altitud) {
                $this->$setAltitud($this->$getAltitud()+20);
                return"Altitud incrementada en 20".$this->$getAltitud();
            }
        }else{
            return"Error la altitud no puede superar 100";
        }

    }

    public function mostrarInformacion(){

        return"Nombre: ".$this->getNombre()."<br>
        Numero de alas: ".$this->getNumAlas()."<br>
        Numero de motores: ".$this->getNumMotores()."<br>
        Altitud: ".$this->getAltitud()."<br>
        Velocidad: ".$this->getVelocidad()."<br>
        Nombre propietario: ".$this->getPropietario."<br>
        Fecha de alta: ".$this->getNRotor."<br>";

    }

}

?>