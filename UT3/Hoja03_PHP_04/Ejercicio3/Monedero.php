<?php

class Monedero{

    private $atributos=array(
        "dinero"=>array()
    );
    private static $num_monederos=0;

    public function __construct($dinero){

        $this->atributos["dinero"]=$dinero;
        self::$num_monederos++;
    }

    public function __destruct(){

        self::$num_monederos--;
        if(self::$num_monederos>=0){}
        else{self::$num_monederos=0;}
    }

    public function __set($atributo,$valor){

        $this->atributos[$atributo]=$valor;

    }

    public function __get($atributo){

      return  $this->atributos[$atributo];

    }

    public function getMonederos(){
        return self::$num_monederos;
    }

    public function sacar($valor){

        $dineroInicial=$this->atributos["dinero"];
        $this->atributos["dinero"]-=$valor;

        if ($this->atributos["dinero"]>0){} 
        else{$this->atributos["dinero"]=$dineroInicial;}

    }

    public function meter($valor){
        
        $this->atributos["dinero"]+=$valor;

    }


}

?>