<?php 
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Luis Rodolfo Reyes";
        $this->email = "Luis@Reyes";
    }
}