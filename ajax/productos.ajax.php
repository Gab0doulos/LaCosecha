<?php
use \PhpOffice\PhpSpreadsheet\IOFactory;


require_once "../Controladores/productos.controlador.php";
require_once "../Modelos/productos.modelo.php";

require_once "../vendor/autoload.php";

class ajaxProductos{

    public $fileProductos;

    public $codigo_producto;
    public $id_categoria_producto;
    public $descripcion_producto;
    public $precio_compra_producto;
    public $precio_venta_producto;
    public $utilidad;
    public $stock_producto;
    public $minimo_stock_producto;
    public $ventas_producto;

    public $cantidad_a_comprar;
    
    

   public function ajaxCargaMasivaProductos(){

        $respuesta = ProductosControlador::ctrCargaMasivaProductos($this->fileProductos);

        echo json_encode($respuesta);
    }

    public function ajaxListarProductos(){
        $productos = ProductosControlador::ctrListarProductos();

        echo json_encode($productos);
    }

    public function ajaxRegistrarProducto(){
        
        $producto = ProductosControlador::ctrRegistrarProducto($this->codigo_producto, $this->id_categoria_producto,$this->descripcion_producto,$this->precio_compra_producto,        
                    $this->precio_venta_producto,$this->utilidad,$this->stock_producto,$this->minimo_stock_producto,$this->ventas_producto);

        echo json_encode($producto);
   }

   public function ajaxActualizarStock($data){

    $table = "productos";
    $id = $_POST["codigo_producto"];
    $nameId = "codigo_producto";

    $respuesta = ProductosControlador::ctrActualizarStock($table, $data, $id, $nameId);

    echo json_encode($respuesta);
   }

   public function ajaxActualizarProducto($data){

        $table = "productos";
        $id = $_POST["codigo_producto"];
        $nameId = "codigo_producto";

        $respuesta = ProductosControlador::ctrActualizarProducto($table, $data, $id, $nameId);

        echo json_encode($respuesta);
   }

   public function ajaxEliminarProducto(){

    $table = "productos";
    $id = $_POST["codigo_producto"];
    $nameId = "codigo_producto";

    $respuesta = ProductosControlador::ctrEliminarProducto($table, $id, $nameId);

    echo json_encode($respuesta);
        
   }

   /*listar nombre de productos para inputo de auto completado*/ 

   public function ajaxListarNombreProductos(){

    $nombreProductos = ProductosControlador::ctrListarNombreProductos();

    echo json_encode($nombreProductos);

   }

   /*===================================================================
    BUSCAR PRODUCTO POR SU CODIGO DE BARRAS
    ====================================================================*/
    public function ajaxGetDatosProducto(){
        
        $producto = ProductosControlador::ctrGetDatosProducto($this->codigo_producto);

        echo json_encode($producto);
    }

    public function ajaxVerificaStockProducto(){

        $respuesta = ProductosControlador::ctrVerificaStockProducto($this->codigo_producto,$this->cantidad_a_comprar);
   
       echo json_encode($respuesta);
   }

    
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ // parametro para listar productos

    $productos = new ajaxProductos();
    $productos -> ajaxListarProductos();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 2){ // parametro para registrar productos

    $registrarProducto = new AjaxProductos();
    $registrarProducto -> codigo_producto = $_POST["codigo_producto"];
    $registrarProducto -> id_categoria_producto = $_POST["id_categoria_producto"];
    $registrarProducto -> descripcion_producto = $_POST["descripcion_producto"];
    $registrarProducto -> precio_compra_producto = $_POST["precio_compra_producto"];
    $registrarProducto -> precio_venta_producto = $_POST["precio_venta_producto"];
    $registrarProducto -> utilidad = $_POST["utilidad"];
    $registrarProducto -> stock_producto = $_POST["stock_producto"];
    $registrarProducto -> minimo_stock_producto = $_POST["minimo_stock_producto"];
    $registrarProducto -> ventas_producto = $_POST["ventas_producto"];
    $registrarProducto -> ajaxRegistrarProducto();
    
}else if(isset($_POST['accion']) && $_POST['accion'] == 3){

    $actualizarStock = new ajaxProductos();

    $data = array(
        "stock_producto" => $_POST["nuevoStock"]
    );

    $actualizarStock -> ajaxActualizarStock($data);


}else if(isset($_POST['accion']) && $_POST['accion'] == 4){ //accion para actualizar stock

    $actualizarProducto = new ajaxProductos();

    

    $data = array(
        "id_categoria_producto" => $_POST["id_categoria_producto"],
        "descripcion_producto" => $_POST["descripcion_producto"],
        "precio_compra_producto" => $_POST["precio_compra_producto"],
        "precio_venta_producto" => $_POST["precio_venta_producto"],
        "utilidad" => $_POST["utilidad"],
        "stock_producto" => $_POST["stock_producto"],
        "minimo_stock_producto" => $_POST["minimo_stock_producto"],
    );

    $actualizarProducto -> ajaxActualizarProducto($data);


}else if(isset($_POST['accion']) && $_POST['accion'] == 5){  //accion para eliminar un producto

    $eliminarProducto = new ajaxProductos();
    $eliminarProducto -> ajaxEliminarProducto();

}else if(isset($_POST['accion']) && $_POST['accion'] == 6){  //accion listado de productos para autocomplete

    $nombreProductos = new ajaxProductos();
    $nombreProductos -> ajaxListarNombreProductos();
   
}else if(isset($_POST['accion']) && $_POST['accion'] == 7){  //accion para obtener datos de un producto

    $listaProducto = new ajaxProductos();
    $listaProducto->codigo_producto = $_POST["codigo_producto"];

    $listaProducto -> ajaxGetDatosProducto();

}else if(isset($_POST["accion"]) && $_POST["accion"] == 8){ // VERIFICAR STOCK DEL PRODUCTO

    $verificaStock = new AjaxProductos();

    $verificaStock -> codigo_producto = $_POST["codigo_producto"];
    $verificaStock -> cantidad_a_comprar = $_POST["cantidad_a_comprar"];
    
    $verificaStock -> ajaxVerificaStockProducto();

}
else if(isset($_FILES)){
    $archivo_productos = new ajaxProductos();
    $archivo_productos-> fileProductos = $_FILES['fileProductos'];
    $archivo_productos -> ajaxCargaMasivaProductos();
}