<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT']."/LaCosecha/Controladores/plantilla.controlador.php";

require_once $_SERVER['DOCUMENT_ROOT']."/LaCosecha/Controladores/usuario.controlador.php";
require_once $_SERVER['DOCUMENT_ROOT']."/LaCosecha/Modelos/usuario.modelo.php";



$plantilla = new PlantillaControlador();
$plantilla -> CargarPlantilla();
?>