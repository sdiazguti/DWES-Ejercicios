<?php

class CuentaCorriente extends Cuenta{

    private $cuota_mantenimiento;

    public function __construct($numero,$titular,$saldo,$cuota_mantenimiento){

        $this->cuota_mantenimiento=$cuota_mantenimiento;
        parent::__construct($numero,$titular,$saldo-$cuota_mantenimiento);
        
    }

    public function reintegro($cantidad){

        if ($this->saldo-$cantidad >= 20) {
            parent::reintegro($cantidad);
        }else{
            return "Error saldo menor a 20, no se permiten reintegros.";
        }

    }

    public function mostrar(){

        return "<div class='cuentaInfo'><p><strong>Numero de la cuenta</strong>: <u>".$this->numero."</u></p>
                <p><strong>Titular de la cuenta</strong>: <u>".$this->titular."</u></p>
                <p><strong>Saldo de la cuenta</strong>: <u>".$this->saldo."</u></p>
                <p><strong>Cuota de mantenimiento de la cuenta</strong>: <u>".$this->cuota_mantenimiento."</u></p></div>";

    }

}

?>