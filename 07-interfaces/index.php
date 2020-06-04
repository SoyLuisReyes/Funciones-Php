<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function fragmentar();
}

class imac implements Ordenador{
    private $modelo;

    public function getModelo(){
      return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function encender()
    {
     return "dvdvdf"   ;
    }
    public function apagar()
    {
        return "dvdvdf"   ;
    }
    
    public function reiniciar()
    {
        return "dvdvdf"  ;
    }

    public function fragmentar()
    {
        return "dvdvdf"   ;
    }
}

$maquintos = new imac();
$maquintos->setModelo("Mac Book pro 2019");
echo $maquintos->getModelo();
