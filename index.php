<?php

require_once $_SERVER['DOCUMENT_ROOT']."controladores/plantilla.controlador.php";

require_once $_SERVER['DOCUMENT_ROOT']."controladores/usuario.controlador.php";
require_once $_SERVER['DOCUMENT_ROOT']."modelos/usuario.modelo.php";



$plantilla = new PlantillaControlador();
$plantilla -> CargarPlantilla();