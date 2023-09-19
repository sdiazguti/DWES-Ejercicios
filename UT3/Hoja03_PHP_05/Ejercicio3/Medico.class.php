<?php

//enum Turno{case Mannana; case Tarde;};

 abstract class Medico{

    protected $nombre,$edad,$turno;


    protected function __construct($nombre,$edad,$turno){

        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->turno=$turno;

    }

    public function __set($var,$valor){

        if (property_exist($var)) {
            $this->var=$valor;
        }else{
            return("ERROR no existe ");
        }

    }

    public function __toString(){

        return "<div class='medicoInfo'><p><strong>Nombre</strong>: <u>".$this->nombre."</u></p>
                <p><strong>Edad</strong>: <u>".$this->edad."</u></p>
                <p><strong>Turno</strong>: <u>".$this->turno."</u></p></div>";

    }

    

}

?>