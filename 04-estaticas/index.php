<?php 

require_once 'configuracion.php';

configuracion::setColor("Amarillo");
configuracion::setEntorno('Local');
configuracion::setNewsletter(true);

echo configuracion::$color . '<br/>';
echo configuracion::$entorno . '<br/>';
echo configuracion::$newsletter . '<br/>';

$configuracion = new configuracion();
$configuracion::$color = 'Morado'. '<br/>';
echo $configuracion::$color;


$configuracion1 = new configuracion();
$configuracion1::$color = 'ROSADITO'. '<br/>';
echo $configuracion::$color;