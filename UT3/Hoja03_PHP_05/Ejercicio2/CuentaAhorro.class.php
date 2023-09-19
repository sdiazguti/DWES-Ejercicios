<?php

class CuentaAhorro extends Cuenta{

    private $comision_apertura,$intereses;

    public function __construct($numero,$titular,$saldo,$comision_apertura,$intereses){

        parent::__construct($numero,$titular,$saldo-$comision_apertura);
        $this->comision_apertura=$comision_apertura;
        $this->intereses=$intereses;

    }

    public function aplicarInteres(){

        $this->saldo*=$this->intereses;

    }

    public function mostrar(){

        return "<div class='cuentaInfo'><p><strong>Numero de la cuenta</strong>: <u>".$this->numero."</u></p>
                <p><strong>Titular de la cuenta</strong>: <u>".$this->titular."</u></p>
                <p><strong>Saldo de la cuenta</strong>: <u>".$this->saldo."</u></p>
                <p><strong>Comision de apertura de la cuenta</strong>: <u>".$this->comision_apertura."</u></p>
                <p><strong>Intereses de la cuenta</strong>: <u>".$this->intereses."</u></p></div>";

    }

}

?>