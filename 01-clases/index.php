<?php

class Coche{
    public $color = 'Verde';
    public $marca = 'Ferrari';
    public $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    //metodos 
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
       return $this->$velocidad;
    }

} // fin definicion de la clase 


// crear un objeto o instanciar la clase 
$coche = new Coche();
$coche2 = new Coche();

$coche2->setColor('Rosado chicha');
$coche2->setModelo('Montera');
$coche2->setMarca('Hilux 2019');

$coche->setColor("Plateado");
echo "El color del coche es: ".$coche->getColor().'<br>';

var_dump($coche);
var_dump($coche2);