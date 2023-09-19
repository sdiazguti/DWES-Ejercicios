<?php
require_once('Encendible.interface.php');
class Bombilla implements Encendible{

    private $horasDeVida;

    public function __construct($horas){

        $this->horasDeVida=$horas;

    }

    public function encender(){

        if($this->horasDeVida > 1){

            $this->horasDeVida-2;

        }else{

            return"La bombilla no dispone de horas de vida";

        }

    }

    public function apagar(){

        return"La bombilla se apago";

    }

}

?>