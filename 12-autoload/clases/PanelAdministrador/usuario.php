<?php 
namespace PanelAdministrador;

class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Anielka Maria";
        $this->email = "Anielka@Maria";
    }
}