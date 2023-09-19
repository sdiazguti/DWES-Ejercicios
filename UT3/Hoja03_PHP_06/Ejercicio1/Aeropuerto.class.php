<?php

class Aeropuerto{

    private $elementosVoladores=array();

    public function __construct(){

        $this->elementosVoladores;

    }

    public function insertar($elementoVolador){
        array_push($this->elementosVoladores, $elementoVolador);
    }

    public function buscar($nombre){
        $resul=array_search($nombre,$this->elementosVoladores);
        if (!empty(array_search($nombre,$this->elementosVoladores))) {
            return"Encntrado";
        }else{
            return"No encontrado";
        }
        
    }

}

?>