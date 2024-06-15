<?php

require_once "../../Modelos/conexion.php";

$query = "SELECT v.id,
                v.nro_boleta,
                v.codigo_producto,
                c.nombre_categoria,
                p.descripcion_producto,
                v.cantidad as cantidad,
                round(v.total_venta,2) as total_venta
        FROM venta_detalle v inner join productos p on v.codigo_producto = p.codigo_producto
                             inner join categorias c on c.id_categoria = p.id_categoria_producto
        WHERE nro_boleta = " .$_POST['nro_boleta'] ." ORDER BY v.id";

$statement = Conexion::conectar()->prepare($query);
$statement->execute();

$numero_filas_filtradas = $statement->rowCount();

$result = $statement->fetchAll();

$output = array(
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $numero_filas_filtradas,
    'recordsFiltered' => $numero_filas_filtradas,
    'data' => $result
);

echo json_encode($output);