<?php
require_once('Categorias.class.php');
abstract class Productos{

    protected $codigo,$precio,$nombre;
    protected Categorias $categoria;
    protected function __construct($codigo,$precio,$nombre,Categorias $categoria){

        $this->codigo=$codigo;
        $this->precio=$precio;
        $this->nombre=$nombre;
        $this->categoria=$categoria;
        
    }

    public function __get($variable){

       return $this->$variable;

    }

    public function __set($variable,$valor){

        $this->$variable=$valor;

    }

    public function __toString(){

        return "Nombre: ".$this->nombre.". Precio: ".$this->precio.". Codigo: ".$this->codigo.". Categoria: ".$this->categoria.".";

    }

}

?>