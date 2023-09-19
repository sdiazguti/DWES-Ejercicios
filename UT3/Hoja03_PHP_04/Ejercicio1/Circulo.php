<?php

class Circulo{

   // private $radio;

    private $atributos = array(
        "radio"=> array()
    );

    public function __construct($radio){

        $this->atributos["radio"]=$radio;
      //  $this->radio=$radio;

    }

/*  public function setRadio($radio){
        
        $this->radio=$radio;

    }

    public function getRadio(){

        return $this->radio;

    }

    Getter Setter magicos sin atributos en array

    public function __set($var,$valor){

        if(property_exists(__CLASS__,$var){
            $this->var=$valor;
        }else{
            echo "No existe la variable $var";
        }

    }

    public function __get($var){

        if(property_exists(__CLASS__,$var)){
            return $this->var;
        }else{
            return NULL;
        }

    }

*/

    public function __set($atributo,$valor){

        $this->atributos[$atributo]=$valor;

    }

    public function __get($atributo){

      return  $this->atributos[$atributo];

    }

}

?>