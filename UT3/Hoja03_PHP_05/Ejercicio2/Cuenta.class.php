<?php
//abstract para que NO pueden definirse clases Cuenta pero si tener clases
abstract class Cuenta{

    protected $numero,$titular,$saldo;

    protected function __construct($numero,$titular,$saldo){

        $this->numero=$numero;
        $this->titular=$titular;
        $this->saldo=$saldo;

    }

    public function ingreso($cantidad){

        $this->saldo+=$cantidad;

    }

    public function reintegro($cantidad){

        $this->saldo-=$cantidad;

    }

    public function esPreferencial($cantidad){

        return $this->saldo > $cantidad ? true : false;

    }

    public function mostrar(){

        return "<div class='cuentaInfo'><p><strong>Numero de la cuenta</strong>: <u>"+$this->numero+"</u></p>
                <p><strong>Titular de la cuenta</strong>: <u>"+$this->titular+"</u></p>
                <p><strong>Saldo de la cuenta</strong>: <u>"+$this->saldo+"</u></p></div>";

    }

}

?>