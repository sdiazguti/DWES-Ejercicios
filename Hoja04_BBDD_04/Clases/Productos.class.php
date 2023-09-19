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

    public function getCodigo(){

        return $this->codigo;

    }

    public function getPrecio(){

        return $this->precio;

    }

    public function getNombre(){

        return $this->nombre;

    }

    public function getCategoria(){

        return $this->categoria->getNombre();

    }

    public function setCodigo($codigo){

        $this->codigo = $codigo;

    }

    public function setPrecio($precio){

        $this->precio = $precio;

    }

    public function setNombre($nombre){

        $this->nombre = $nombre;

    }

    public function setCategoria($categoria){

        $this->categoria = $categoria;

    }

    public function __toString(){

        return "Nombre: ".$this->nombre.". Precio: ".$this->precio.". Codigo: ".$this->codigo.". Categoria: ".$this->categoria.".";

    }

}

?>