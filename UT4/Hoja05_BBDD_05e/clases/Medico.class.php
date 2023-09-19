<?php
require_once('Turno.class.php');
//crear clase turno

 abstract class Medico{

    protected $codigo,$nombre,$edad,$turno;


    protected function __construct($codigo,$nombre,$edad,$turno){

        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->turno= new Turno($turno);

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
                <p><strong>Turno</strong>: <u>".$this->turno."</u></p></div>";

    }

    

}

?>