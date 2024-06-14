<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'controladores/plantilla.controlador.php';

class PlantillaControlador{

    public function CargarPlantilla(){
        include "Vistas/plantilla.php";
    }
}