<?php

define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "mysql");
define("DATABASE", "dwes_03_funicular");

function getConexion(){

    $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    try{

        $dwes = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD, $opciones);
        $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dwes;

    }
    catch(Exception $ex){

        echo"<p>{$ex->getMessage()}</p>";
        return null;

    }

}

?>