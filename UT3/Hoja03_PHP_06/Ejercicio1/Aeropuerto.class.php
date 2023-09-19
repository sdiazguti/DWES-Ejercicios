<?php

class Aeropuerto{

    private $elementosVoladores;

    public function __construct(){

        $this->elementosVoladores=array();

    }

    public function insertar(ElementoVolador $elementoVolador){
        array_push($this->elementosVoladores, $elementoVolador);
        //$this->elementosVoladores[]=$elementoVolador;
    }

    public function buscar($nombre){

        $encontrado=false;
foreach($this->elementosVoladores as $objeto){
    if($objeto->getNombre()==$nombre){
        return $objeto->mostrar();
        $encontrado=true;
    }
}
if(!$encontrado){
    printf("%s no encontrado en la flota\n",$nombre);
}      
    }

    public function listarCompania($compania){
        $encontrado=false;
        foreach ($this->elementosVoladores as $objeto) {
            if ($objeto instanceof Avion) {
                if ($objeto->getCompania()==$compania) {
                    $encontrado=true;
                }
            }
        }
        if(!$encontrado){
            printf("%s no encontrado en la flota\n",$nombre);
        }
}

public function rotores($rotor){
    $encontrado=false;
    foreach ($this->elementosVoladores as $objeto) {
        if ($objeto instanceof Helicoptero) {
            if ($objeto->getNRotor()==$rotor) {
                $encontrado=true;
            }
        }
    }
    if(!$encontrado){
        printf("%s no encontrado en la flota\n",$nombre);
    }


}

public function despegar($nombre, $altitud, $velocidad){
foreach ($this->elementosVoladores as $object) {
    if ($objeto->getNombre()==$nombre) {
        $objeto->acelerar($velocidad);
        $objeto->volar($altitud);
        return;
    }
}
}

?>