<?php

require_once 'autoload.php';

// $usuario = new Usuario();
// echo $usuario->nombre;
// echo $usuario->email;

// $categoria = new Categoria();
// echo '<br/>'.$categoria->nombre;

// Espacios de nombres y paquetes 
use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin; // se usa alias porque ya existe una clase con el nombre usuario 

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function getEntrada(){
        return $this->entrada;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function setEntrada($entrada){
        $this->entrada = $entrada;
    }


}

// $usuario = new UsuarioAdmin(); // Se manda a llamar el Alias 
// var_dump($usuario);


$principal = new Principal();
// var_dump($principal->usuario);
$metodos = get_class_methods($principal);

$busqueda = array_search('setEntrada', $metodos);
var_dump($busqueda);
