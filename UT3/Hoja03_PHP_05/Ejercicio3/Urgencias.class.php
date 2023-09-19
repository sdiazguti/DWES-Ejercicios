<?php

class Urgencias extends Medico{

    protected $unidad;


    public function __construct($nombre,$edad,Turno $turno,$unidad){

        parent::__construct($nombre,$edad,$turno);
        $this->unidad=$unidad;

    }

    public function mostrar(){

        return "<div class='medicoInfo'><p><strong>Nombre</strong>: <u>".$this->nombre."</u></p>
                <p><strong>Edad</strong>: <u>".$this->edad."</u></p>
                
                <p><strong>Unidad</strong>: <u>".$this->unidad."</u></p></div>";

    }

}

?>