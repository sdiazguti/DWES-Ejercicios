<?php

class Familia extends Medico{

    protected $num_pacientes;


    public function __construct($codigo,$nombre,$edad, $turno,$num_pacientes){

        parent::__construct($codigo,$nombre,$edad,$turno);
        $this->num_pacientes=$num_pacientes;

    }

    public function __set($var,$valor){

        if (property_exist($var)) {
            $this->var=$valor;
        }else{
            return("ERROR no existe ");
        }

    }

    public function __get($var){

        if (property_exist($var)) {
           return $this->$var;
        }else{
            return("ERROR no existe ");
        }

    }

    public function __toString(){

        return "<div class='medicoInfo'><p><strong>Nombre</strong>: <u>".$this->nombre."</u></p>
                <p><strong>Edad</strong>: <u>".$this->edad."</u></p>
                <p><strong>Codigo</strong>: <u>".$this->codigo."</u></p>
                <p><strong>Turno</strong>: <u>".$this->turno."</u></p>
                <p><strong>Numero de pacientes</strong>: <u>".$this->num_pacientes."</u></p></div>";

    }

}

?>