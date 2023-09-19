<?php
require_once('Encendible.interface.php');

class Coche implements Encendible{

    private $gasolina, $bateia, $estado;

    public function __construct(){

        $this->gasolina=0;
        $this->bateria=10;
        $this->estado='apagado';

    }

    public function encender(){

        if ($this->gasolina > 0 && $this->bateria > 0 && $this->estado == 'apagado') {
            $this->gasolina--;
            $this->bateria--;
            $this->estado='ecendido';
        }else{

            return"El coche no puede encenderse, revise la gasolina , la bateria y que no este ya encendido.";

        }

    }

    public function apagar(){

        if ($this->estado == 'encendido') {
            $this->estado='apagado';
        }else{
            return"El coche ya esta apagado.";
        }

    }

    public function repostar($litros){

        $this->gasolina+=$litros;

    }

}

?>