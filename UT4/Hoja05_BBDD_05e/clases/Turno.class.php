<?php

 class Turno{

    protected $tipo;


    protected function __construct($turno){

        $this->turno=$turno;

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

        return "<div class='medicoInfo'><p><strong>Tipo</strong>: <u>".$this->tipo."</u></p></div>";

    }

    

}

?>