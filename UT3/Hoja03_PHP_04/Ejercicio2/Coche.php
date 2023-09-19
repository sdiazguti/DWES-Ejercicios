<?php

class Coche{

    private $atributos=array(
        "matricula"=>array(),
        "velocidad"=>array()
    );

    public function __construct($matricula,$velocidad){

        $this->atributos["matricula"]=$matricula;
        $this->atributos["velocidad"]=$velocidad;

    }

    public function __set($atributo,$valor){

        $this->atributos[$atributo]=$valor;

    }

    public function __get($atributo){

      return  $this->atributos[$atributo];

    }

    public function frenar($valor){

        $velocidadInicial=$this->atributos["velocidad"];
        $this->atributos["velocidad"]-=$valor;

        if ($this->atributos["velocidad"]>0 && $this->atributos["velocidad"]<=120){} 
        else{$this->atributos["velocidad"]=$velocidadInicial;}

    }

    public function acelerar($valor){
        $velocidadInicial=$this->atributos["velocidad"];
        $this->atributos["velocidad"]+=$valor;

        if ($this->atributos["velocidad"]>0 && $this->atributos["velocidad"]<=120){} 
        else{$this->atributos["velocidad"]=$velocidadInicial;}
        

    }


}

?>