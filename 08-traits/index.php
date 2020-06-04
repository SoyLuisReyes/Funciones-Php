<?php

trait Utilidades{
    public function mostrarNombres(){
        echo "<h1>El nombre es :".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca; 

    use Utilidades;
}
class Persona{
    public $nombre;
    public $apellidos; 

    use Utilidades;
}
class videojuego{
    public $nombre;
    public $anio; 

    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Toyotaa";
$coche->mostrarNombres();

$persona = new Persona();
$persona->nombre = "Luis";
$persona->mostrarNombres();

$videojuegos = new videojuego();
$videojuegos->nombre = "Fornite";
$videojuegos->mostrarNombres();

