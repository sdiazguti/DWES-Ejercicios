<?php
require_once('Persona.class.php');
class Alumno extends Persona{

    private $curso;

    public function __construct($curso,$nombre){

        $this->curso=$curso;
        parent::__construct($nombre);
    }

    public function mostrar(){
    return $this->curso;
    return parent::$nombre;

    }

}

?>