<?php

class Coche{
    public $color = 'Verde';
    protected $marca = 'Ferrari';
    private $modelo = 'Aventador';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

        //Creamor el metodo constructor 

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }



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
       return $this->velocidad;
    }

    public function getModelo(){
        return $this->modelo;
     }

    public function mostrarInformacion( Coche $miObjeto){ 

        if(is_object($miObjeto)){
            $informacion  = "<h1>Informacion del coche</h1>";
            $informacion .= "<br/>Color: ".$miObjeto->color;
            $informacion .= "<br/>Modelo: ".$miObjeto->modelo;
            $informacion .= "<br/>Velocidad: ".$miObjeto->velocidad;
        }else{
            $informacion = "Este es el valor de tu dato $miObjeto";
        }
        

        return $informacion;

    }
}