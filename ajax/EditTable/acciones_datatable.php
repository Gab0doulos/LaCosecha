<?php

require_once "../../Modelos/conexion.php";

if ($_POST['action'] == 'edit') {

    $data = array(
        'codigo_producto' => $_POST['codigo_producto'],
        'cantidad' => $_POST['cantidad'],
        'id' => $_POST['id']
    );

    try {
    $statement = Conexion::conectar()->prepare("call prc_ActualizarDetalleVenta(:p_codigo_producto, :p_cantidad, :p_id)");
    $statement -> bindParam(":p_codigo_producto",$data["codigo_producto"],PDO::PARAM_STR);
    $statement -> bindParam(":p_cantidad",$data["cantidad"],PDO::PARAM_STR);
    $statement -> bindParam(":p_id",$data["id"],PDO::PARAM_STR);

    $statement->execute();

    echo json_encode($_POST);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

}