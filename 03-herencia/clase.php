<?php 

class Persona{
    public $nombre;
    public $apellido;
    public $altura;
    public $edad;

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getEdad(){
        return $this->edad;
    }

    // SETTER

    public function setNombre($nombre){
         $this->nombre = $nombre;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
   }

   public function setAltura($altura){
    $this->altura = $altura;
   }

    public function setEdad($edad){
        $this->edad = $edad;
   }

   public function hablar(){
    return "SSJNJENVJRNVRNVRNVRNV";
   }

}

class Informatico extends Persona{

    public $lenguajes;
    public $experienciaprogramador;

    public function __construct()
    {
        $this->lenguajes = 'Html, css y js';
        $this->experienciaprogramador = 10;
    }


    public function sabelenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function TecnicoRedes(){
        return "Puedo crear redes lan";
    }

    public function ReparaOrdenadores(){
        return "Puedo joder lapttocs :V";
    }

    public function programar(){
        return "Soy el puto amo del yabaskrip";
    }
}

class TecnicoDeRedes extends Informatico{

    public $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent:: __construct();
        $this->auditarRedes = "Experto";
        $this->experienciaRedes = 5;
    }

    public function Auditor(){
        return "Estoy auditando una red";
    }
}