<?php

class Familia extends Medico{

    protected $num_pacientes;


    public function __construct($nombre,$edad, $turno,$num_pacientes){

        parent::__construct($nombre,$edad,$turno);
        $this->num_pacientes=$num_pacientes;

    }

    public function mostrar(){

        return "<div class='medicoInfo'><p><strong>Nombre</strong>: <u>".$this->nombre."</u></p>
                <p><strong>Edad</strong>: <u>".$this->edad."</u></p>
                
                <p><strong>Numero de pacientes</strong>: <u>".$this->num_pacientes."</u></p></div>";

    }

}

?>