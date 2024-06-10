<?php 

require_once "../Controladores/dashboard.controlador.php";
require_once "../Modelos/dashboard.modelo.php";

class AjaxDashboard{
    public function getDatosDashboard(){
        $datos = DashboardControlador::ctrGetDatosDashboard();

        echo json_encode($datos);
    }
    public function getVentasMesActual(){
        $ventasMesActual = DashboardControlador::ctrGetVentasMesActual();
        echo json_encode($ventasMesActual);
    }

    public function getproductosMasVendidos(){
        $productosMasVendidos = DashboardControlador::ctrProductosMasVendidos();
        echo json_encode($productosMasVendidos);
    }

    public function getProductosPocoStock(){
        $productosPocoStock = DashboardControlador::ctrProductosPocoStock();
        echo json_encode($productosPocoStock);
    }
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //funcion para obtener las ventas del mes(Grafico de barras)
    $ventasMesActual = new AjaxDashboard();
    $ventasMesActual -> getVentasMesActual();
}elseif(isset($_POST['accion']) && $_POST['accion'] == 2){ // ejecutar funcion de productos mas vendidos
    $productosMasVendidos = new AjaxDashboard();
    $productosMasVendidos -> getproductosMasVendidos();

} elseif(isset($_POST['accion']) && $_POST['accion'] == 3){ // ejecutar funcion de productos poco stock
    $productosPocoStock = new AjaxDashboard();
    $productosPocoStock -> getProductosPocoStock();

} else{
    $datos = new AjaxDashboard();
    $datos -> getDatosDashboard();
}