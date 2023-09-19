<?php

class Producto
{
//Atributos
    private static $numProductos=0;
    private $atributos = array(
        "codigo"    => array(),
        "descripcion"=>array(),
        "existencias"=>array(),
        "precio"=>array(),
        "nombre"=>array(),
    );
//Constructor
    public function __construct($codigo,$descripcion,$existencias,$precio,$nombre){

        $this->atributos["codigo"] = $codigo;
        $this->atributos["descripcion"] = $descripcion;
        $this->atributos["existencias"] = $existencias;
        $this->atributos["precio"] = $precio;
        $this->atributos["nombre"] = $nombre;
        self::$numProductos++;
    }
//funcion para ver atributos
    public function mostrar(){

            return "El codigo del producto es ".$this->__get("codigo").".
            El nombre del producto es ".$this->__get("nombre").".
            La descripción del producto es ".$this->__get("descripcion").".
            Las existencias del producto es ".$this->__get("existencias").".
            El precio del producto es ".$this->__get("precio")."€.";
        

    }
//metodo para dar valor a los atributos
    public function __set($atributo,$valor){
        $this->atributos[$atributo]=$valor;
    }
//metodo para ver el valor de los atributos
    public function __get($atributo){
        return $this->atributos[$atributo];
    }
//metodo para ver el valor del atributo estatico
    public function getProductos(){
        return self::$numProductos;
    }
//funcion para destruir atributo estatico
    public function __destruct(){
        Producto::$numProductos--;
    }


}


?>