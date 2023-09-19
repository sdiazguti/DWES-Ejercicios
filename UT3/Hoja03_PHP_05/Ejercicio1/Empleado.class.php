<?php

class Empleado{

    protected $sueldo;

    public function __construct($sueldo){

        $this->sueldo=$sueldo;

    }

    public function getSueldo(){

        return $this->sueldo;

    }

}

?>