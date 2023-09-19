<?php
    define("HOST", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "mysql");
    define("DATABASE", "dwes_01_nba");

    function getConexion(){
        $opcion = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        try{

            $dwes = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD, $opcion);
            $dwes->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dwes;

        }catch(Exception $ex){
            echo "<p>{$ex->getMessage()}</p>";
            return null;
        }
    }
?>