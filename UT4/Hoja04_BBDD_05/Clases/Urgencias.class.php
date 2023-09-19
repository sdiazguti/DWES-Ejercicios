<?php
require_once('Medico.class.php');
class Urgencias extends Medico{
//para insertar en bd solo pasar unidad el resto de datos de guarda en la table medicos y se relaccionan mediante su codigo con la relaccion ISA
    protected $unidad;


    public function __construct($codigo,$nombre,$edad,Turno $turno,$unidad){

        parent::__construct($codigo,$nombre,$edad,$turno);
        $this->unidad=$unidad;

    }

    public function mostrar(){
     //return parent::__toString()."Numero de pacientes: $this->num_pacientes pacientes";
        return "<div class='medicoInfo'><p><strong>Nombre</strong>: <u>".$this->nombre."</u></p>
                <p><strong>Edad</strong>: <u>".$this->edad."</u></p>
                <p><strong>Codigo</strong>: <u>".$this->codigo."</u></p>
                <p><strong>Turno</strong>: <u>".$this->turno."</u></p>
                <p><strong>Unidad</strong>: <u>".$this->unidad."</u></p></div>";

    }

}

?>