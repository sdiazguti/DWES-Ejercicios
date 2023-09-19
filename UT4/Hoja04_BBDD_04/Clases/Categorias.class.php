<?php

class Categorias{

    protected $id,$nombre;

    protected function __construct($id,$nombre){

        $this->id = $id;
        $this->nombre = $nombre;

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

        return "<div><p><strong>Id</strong>: <u>".$this->id."</u>, <u>".$this->nombre."</u></p></div>";

    }

}