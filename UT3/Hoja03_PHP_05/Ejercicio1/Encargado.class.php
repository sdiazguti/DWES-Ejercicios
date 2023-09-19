<?php

class Encargado extends Empleado{

    public function __construct($sueldo){

        parent::__construct($sueldo);

    }

    public function getSueldo(){

        return parent::getSueldo()*1.15;

    }

}

?>