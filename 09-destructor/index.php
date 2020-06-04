<?php

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Luis Reyes";
        $this->email = "Luis@reyes";

        echo "Creando el objeto <br>";
    }

    public function __toString()
    {
        return "Tu nombre es, {$this->nombre}, tu correo es {$this->email}";
    }

    public function __destruct()
    {
        echo "<br/>Destruyendo el objeto";
    }
}

$usuario = new Usuario();

echo $usuario;

