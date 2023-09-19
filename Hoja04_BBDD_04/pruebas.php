<?php
require_once('Clases/DB.class.php');

$categorias = DB::getInstancia()->getCategorias(1); 
$categoriasNull = DB::getInstancia()->getCategorias();
$prodAlimentacion = DB::getInstancia()->getProductosAlimentacio();
$prodAlimentacionPARAM = DB::getInstancia()->getProductosAlimentacio(13);
$prodElectronica = DB::getInstancia()->getProductosElectronica();
$prodElectronicaPARAM = DB::getInstancia()->getProductosElectronica(1);
$todosProducots = DB::getInstancia()->getProductos();
$todosProdID = DB::getInstancia()->getProductos(1);

echo"<b>Pasando id</b><br/>";
//Para leer los datos de $categorias no es necesario crear un foreach ya que no es un array, es un objeto
        echo $categorias->getId() . "<br/>";
        echo $categorias->getNombre() . "<br/>";
    

    echo"<br/><b>No pasando nada</b><br/>";

foreach ($categoriasNull as $object) {
        echo $object->getId() . "<br/>";
        echo $object->getNombre() . "<br/>";
    }

    echo"<br/><b>Alimentacion</b><br/>";

    foreach ($prodAlimentacion as $object) {
            echo $object->getCodigo() . " - ";
            echo $object->getNombre() . " - ";
            echo $object->getPrecio() . " - ";
            echo $object->getCategoria() . " - ";
            echo $object->getMesCaducidad() . " - ";
            echo $object->getAnnoCaducidad()."<br/>";
            echo"---------------------<br/>";
        }
        
        echo"<br/><b>Alimentacion con PARAMETRO</b><br/>";

        foreach ($prodAlimentacionPARAM as $object) {
                echo $object->getCodigo() . " - ";
                echo $object->getNombre() . " - ";
                echo $object->getPrecio() . " - ";
                echo $object->getCategoria() . " - ";
                echo $object->getMesCaducidad() . " - ";
                echo $object->getAnnoCaducidad()."<br/>";
                echo"---------------------<br/>";
            }
        
        echo"<br/><b>Electronica</b><br/>";

        foreach ($prodElectronica as $obj) {
                echo $obj->getCodigo() . " - ";
                echo $obj->getNombre() . " - ";
                echo $obj->getPrecio() . " - ";
                echo $obj->getCategoria() . " - ";
                echo $obj->getPlazoGarantia()."<br/>";
                echo"---------------------<br/>";
            } 

            echo"<br/><b>Electronica con PARAMETROS</b><br/>";

            foreach ($prodElectronica as $obj) {
                    echo $obj->getCodigo() . " - ";
                    echo $obj->getNombre() . " - ";
                    echo $obj->getPrecio() . " - ";
                    echo $obj->getCategoria() . " - ";
                    echo $obj->getPlazoGarantia()."<br/>";
                    echo"---------------------<br/>";
                }

            echo"<br/><b>TODOS</b><br/>";

            foreach ($todosProducots as $obj) {
                echo $obj->getCodigo() . " - ";
                echo $obj->getNombre() . " - ";
                echo $obj->getPrecio() . " - ";
                echo $obj->getCategoria()."<br/>";
                echo"---------------------<br/>";
            }     

            echo"<br/><b>TODOS por ID</b><br/>";

            foreach ($todosProdID as $obj) {
                echo $obj->getCodigo() . " - ";
                echo $obj->getNombre() . " - ";
                echo $obj->getPrecio() . " - ";
                echo $obj->getCategoria()."<br/>";
                echo"---------------------<br/>";
            }