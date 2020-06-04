<?php

abstract class Ordenador{
    public $encendido;

    abstract public function encender();
    
    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function iniciarsoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->iniciarsoftware();
$ordenador->encender();
var_dump($ordenador);