<!-- /.content-wrapper -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario / Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Tablero Principal</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!--row para criterio de busqueda -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Criterios de Busqueda </h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-lg-flex">

                                <div style="width :20%" class="form-floating mx-1">
                                    <input type="text" id="iptCodigoBarras" class="form-control"
                                        placeholder="Codigo de Barras" data-index="2">
                                    <label for="iptCodigoBarras">Codigo de Barras</label>

                                </div>
                                <div style="width :20%" class="form-floating mx-1">
                                    <input type="text" id="iptCategoria" class="form-control"
                                        placeholder="Codigo de Barras" data-index="4">
                                    <label for="iptCodigoBarras">Categoria</label>

                                </div>
                                <div style="width :20%" class="form-floating mx-1">
                                    <input type="text" id="iptProducto" class="form-control"
                                        placeholder="Codigo de Barras" data-index="5">
                                    <label for="iptProducto">Producto</label>

                                </div>
                                <div style="width :20%" class="form-floating mx-1">
                                    <input type="text" id="iptPrecioVentaDesde" class="form-control"
                                        placeholder="Codigo de Barras">
                                    <label for="iptPrecioVentaDesde">P. Venta Desde</label>

                                </div>
                                <div style="width :20%" class="form-floating mx-1">
                                    <input type="text" id="iptPrecioVentaHasta" class="form-control"
                                        placeholder="Codigo de Barras">
                                    <label for="iptPrecioVentaHasta">P. Venta Hasta</label>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-lg-12">
        <table id="tbl_productos" class="table table-striped w-100 shadow">
            <thead class="bg-info">
                <tr>
                    <th></th>
                    <th>id</th>
                    <th>codigo</th>
                    <th>id categoria</th>
                    <th>categoria</th>
                    <th>Producto</th>
                    <th>P. Compra</th>
                    <th>P. Venta</th>
                    <th>Utilidad</th>
                    <th>Stock</th>
                    <th>Min. Stock</th>
                    <th>Ventas</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Actualizacion</th>
                    <th class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody class="text-small">

            </tbody>
        </table>
    </div>
</div>
</div>


<!-- /.ventana modal para ingresar o modificar un producto -->
<div class="modal fade" id="mdlGestionarProducto" role="dialog">


    <div class="modal-dialog modal-lg">
        <!-- /.contenido del modal -->
        <div class="modal-content ">
            <!-- /.cabecera del modal -->
            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal"
                    id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>



            <!-- /.cuerpo del modal -->

            <div class="modal-body">



                <form class="needs-validation" novalidate>
                    <!-- /.abrimos una fila -->
                    <div class="row">

                        <!-- /.columa para registro de codigo de barras -->

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptCodigoReg"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Codigo de Barras</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCodigoReg"
                                    name="iptCodigoReg" placeholder="Codigo de Barras" required>
                                <div class="invalid-feedback">Ingrese el codigo de Barras</div>
                            </div>
                        </div>

                        <!-- /.columa para registro de la categoria del producto -->
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selCategoriaReg"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Categoria</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selCategoriaReg" required>
                                </select>
                                <div class="invalid-feedback">Seleccione una Categoria</div>

                            </div>
                        </div>

                        <!-- /.columa para registro de la descripcion del producto -->
                        <div class="col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptDescripcionReg"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Descripcion</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptDescripcionReg"
                                    placeholder="Descripcion" required>
                                <div class="invalid-feedback">Ingrese la descripcion del producto</div>
                            </div>
                        </div>

                        <!-- /.columa para registro de la del precio de compra -->
                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioCompraReg"><i class="fas fa-dollar-sign fs-6"></i>
                                    <span class="small">Precio Compra</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-sm"
                                    id="iptPrecioCompraReg" placeholder="Precio de Compra" required>
                                <div class="invalid-feedback">Ingrese el Precio de Compra</div>
                            </div>
                        </div>

                        <!-- /.columa para registro de la del precio de venta -->
                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioVentaReg"><i class="fas fa-dollar-sign fs-6"></i>
                                    <span class="small">Precio Venta</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptPrecioVentaReg"
                                    placeholder="Precio de Venta" required>
                                <div class="invalid-feedback">Ingrese el precio de venta</div>
                            </div>
                        </div>

                        <!-- /.columa para registro de la utilidad -->
                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioVentaReg"><i class="fas fa-dollar-sign fs-6"></i>
                                    <span class="small">Utilidad</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptUtilidadReg"
                                    placeholder="Utilidad">
                            </div>
                        </div>

                        <!-- /.columa para registro del stock del producto -->
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptStockReg"><i class="fas fa-plus-circle fs-6"></i>
                                    <span class="small">Stock</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptStockReg"
                                    placeholder="stock" required>
                                <div class="invalid-feedback">Ingrese el stock del producto</div>
                            </div>
                        </div>

                        <!-- /.columa para registro del minimo del stock del producto -->
                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptMinimoStockReg"> <i class="fas fa-minus-circle"></i>
                                    <span class="small">Minimo Stock</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="0" class="form-control form-control-sm" id="iptMinimoStockReg"
                                    placeholder="Minimo Stock" required>
                                <div class="invalid-feedback">Ingrese el minimo de stock</div>
                            </div>
                        </div>
                        <!-- /.columa para registro del stock del producto -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-bs-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>

                        <button type="button" style="width:170px" class="btn btn-primary mt-3 mx-2"
                            id="btnGuardarProducto">Guardar Producto</button>



                    </div>
                </form>

            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="mdlGestionarStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-gray py-2">
                <h6 class="modal-title" id="titulo_modal_stock">Adicionar Stock</h6>
                <button type="button" class="btn-close text-white fs-6" data-bs-dismiss="modal" aria-label="close"
                    id="btnCerrarModalStock"></button>
            </div>

            <div class="modal-body">
                <div class="row">

                    <div class="col-12 mb-3">
                        <label for="" class="form-label text-primary d-block">Codigo: <span id="stock_codigoProducto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Producto: <span id="stock_Producto"
                                class="text-secondary"></span></label>
                        <label for="" class="form-label text-primary d-block">Stock: <span id="stock_Stock"
                                class="text-secondary"></span></label>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-2">
                            <label class="" for="iptStockSumar">
                                <i class="fas fa-plus-circle fs-6"></i><span class="small"
                                    id="titulo_modal_label">Agregar al Stock</span>
                            </label>
                            <input type="number" min="0" class="form-control from-control-sm" id="iptStockSumar"
                                placeholder="Ingrese cantidad a agregar al stock">
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label text-danger">Nuevo Stock: <span id="stock_NuevoStock"
                                class="text-secondary"></span></label><br>
                    </div>

                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"
                    id="btnCancelarRegistroStock">Cancelar</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnGuardarNuevoStock">Guardar</button>
            </div>

        </div>
    </div>
</div>


<!-- /.scripts de ajax -->

<script>
var accion;
var table;
var operacion_stock = 0; // permitir definir si vamos a sumar o restar el stock (1: sumar , 2: restar)

var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});



$(document).ready(function() {



    $.ajax({
        url: "ajax/productos.ajax.php",
        type: "POST",
        data: {
            'accion': 1
        },
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta)
        }
    });


    //SOLICITUD AJAX PARA CARGAR SELECT DE CATEGORIAS
    $.ajax({
        url: "ajax/categorias.ajax.php",
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(respuesta) {

            var options = '<option selected value="0">Seleccione una categoría</option>';

            for (let index = 0; index < respuesta.length; index++) {
                options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][
                    1
                ] + '</option>';
            }

            $("#selCategoriaReg").html(options);
        }
    });


    //Carga del listado con el plugin datatable js

    table = $("#tbl_productos").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: 'Agregar Producto',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    // Evento para levantar la ventana modal
                    $("#mdlGestionarProducto").modal('show');
                    accion = 2; //registrar

                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [5, 10, 15, 30, 50, 100],
        pageLength: 10,
        ajax: {
            url: "ajax/productos.ajax.php",
            dataSrc: '',
            type: "POST",
            data: {
                'accion': 1
            },

        },
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ //boton mas expandir
            {
                targets: 0,
                orderable: false,
                className: 'control'
            },
            {
                targets: 1,
                visible: false
            },
            {
                targets: 3,
                visible: false
            },
            {
                targets: 9,
                createdCell: function(td, cellData, rowData, row, col) {
                    if (parseFloat(rowData[9]) <= parseFloat(rowData[10])) {
                        $(td).parent().css('background', '#FF5733')
                    }
                }
            },

            {
                targets: 11,
                visible: false
            },
            {
                targets: 12,
                visible: false
            },
            {
                targets: 13,
                visible: false
            },
            {
                targets: 14,
                orderable: false,
                render: function(datqa, type, full, meta) {
                    return "<center>" +
                        "<span class='btnEditarProducto text-primary px-1' style= 'cursor:pointer;'>" +
                        "<i class = 'fas fa-pencil-alt fs-5'></i>" +
                        "</span>" +
                        "<span class='btnAumentarStock text-success px-1' style= 'cursor:pointer;'>" +
                        "<i class = 'fas fa-plus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnDisminuirStock text-warning px-1' style= 'cursor:pointer;'>" +
                        "<i class = 'fas fa-minus-circle fs-5'></i>" +
                        "</span>" +
                        "<span class='btnEliminarProducto text-danger px-1' style= 'cursor:pointer;'>" +
                        "<i class = 'fas fa-trash fs-5'></i>" +

                        "</center>"
                }
            }
        ],
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }

    });

    //eventos para criterios de busqueda (codigo, categoria y productos)

    $("#iptCodigoBarras").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptCategoria").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

    $("#iptProducto").keyup(function() {
        table.column($(this).data('index')).search(this.value).draw();
    })

     /*===================================================================*/
    // EVENTOS PARA CRITERIOS DE BUSQUEDA POR RANGO (PREVIO VENTA)
    /*===================================================================*/

    $("#iptPrecioVentaDesde, #iptPrecioVentaHasta").keyup(function() {
        table.draw();
    })

    $.fn.dataTable.ext.search.push(
        function(settings, data, dataIndex) {
            var precioDesde = parseFloat($("#iptPrecioVentaDesde").val());
            var precioHasta = parseFloat($("#iptPrecioVentaHasta").val());


            var col_venta = parseFloat(data[7]);

            if (
                (isNaN(precioDesde) && isNaN(precioHasta)) ||
                (isNaN(precioDesde) && col_venta <= precioHasta) ||
                (precioDesde <= col_venta && isNaN(precioHasta)) ||
                (precioDesde <= col_venta && col_venta <= precioHasta)) {
                return true;
            }
            return false;

        }
    )

    // Limpiar inputs de criterios de busqueda

    $("#btnLimpiarBusqueda").on('click', function() {

        $("#iptCodigoBarras").val('')
        $("#iptCategoria").val('')
        $("#iptProducto").val('')
        $("#iptPrecioVentaDesde").val('')
        $("#iptPrecioVentaHasta").val('')

        table.search('').columns().search('').draw();
    })

    $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

        $("#validate_codigo").css("display", "none");
        $("#validate_categoria").css("display", "none");
        $("#validate_descripcion").css("display", "none");
        $("#validate_precio_compra").css("display", "none");
        $("#validate_precio_venta").css("display", "none");
        $("#validate_stock").css("display", "none");
        $("#validate_min_stock").css("display", "none");


        $("#iptCodigoReg").val("");
        $("#iptCategoriaReg").val(0);
        $("#iptDescripcionReg").val("");
        $("#iptPrecioCompraReg").val("");
        $("#iptPrecioVentaReg").val("");
        $("#iptUtilidadReg").val("");
        $("#iptStockReg").val("");
        $("#iptMinimoStockReg").val("");

        $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function() {
            calcularUtilidad();
        });

        $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function() {
            calcularUtilidad();
        });

    })

    //evento para calcular la utilidad al digitar sobre los inputs

    $("#iptPrecioCompraReg, #iptPrecioVentaReg").keyup(function() {
        calcularUtilidad();
    });

    // evento para calcular la utilidad al cambiar el contenido(perder focus)

    $("#iptPrecioCompraReg, #iptPrecioVentaReg").change(function() {
        calcularUtilidad();
    });

    // evento al dar click en el boton aumentar stock

    $('#tbl_productos tbody').on('click', '.btnAumentarStock', function() {

        operacion_stock = 1; //sumar stock
        $("#mdlGestionarStock").modal("show"); //mostara ventana modal
        $("#titulo_modal_stock").html("Aumentar Stock"); //cambiar el titulo de la ventana modal
        $("#titulo_modal_label").html(
            "Agregar al Stock"); //cambiar el texto del label del input para cingreso del stock
        $("#iptStockSumar").attr("placeholder",
            "Ingrese cantidad a agregar al stock"); //cambiar el placeholder

        var data = table.row($(this).parents('tr'))
            .data(); // obtener el array con los datos de cada columna del datatable

        $("#stock_codigoProducto").html(data[2]); // codigo del producto del datatable
        $("#stock_Producto").html(data[5]); // nombre del producto del datatable
        $("#stock_Stock").html(data[9]); //stock actual del producto del datatable

        $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })

    //evento al dar click en el boton disminuir stock

    $('#tbl_productos tbody').on('click', '.btnDisminuirStock', function() {

        operacion_stock = 2; //sumar stock

        $("#mdlGestionarStock").modal("show"); //mostara ventana modal
        $("#titulo_modal_stock").html("Disminuir Stock"); //cambiar el titulo de la ventana modal
        $("#titulo_modal_label").html(
            "Disminuir al Stock"); //cambiar el texto del label del input para cingreso del stock
        $("#iptStockSumar").attr("placeholder",
            "Ingrese cantidad a disminuir al stock"); //cambiar el placeholder

        var data = table.row($(this).parents('tr'))
            .data(); // obtener el array con los datos de cada columna del datatable

        $("#stock_codigoProducto").html(data[2]); // codigo del producto del datatable
        $("#stock_Producto").html(data[4]); // nombre del producto del datatable
        $("#stock_Stock").html(data[9]); //stock actual del producto del datatable

        $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

    })


    // evento que limpia el imput de ingreso de stock al cerrar la ventana modal

    $("#btnCancelarRegistroStock, #btnCerrarModalStock").on('click', function() {
        $("#iptStockSumar").val("")

    })

    //evento al digitar la cantidad a aumentar o disminuir del stock

    $("#iptStockSumar").keyup(function() {

        if (operacion_stock == 1) {

            if ($("iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {
                var stockActual = parseFloat($("#stock_Stock").html());
                var cantidadAgregar = parseFloat($("#iptStockSumar").val());

                $("#stock_NuevoStock").html(stockActual + cantidadAgregar);
            } else {
                Toast.fire({
                    icon: 'warning',
                    title: 'Ingrese un valor mayor a 0'
                });
                $("#iptStockSumar").val("")
                $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));
            }
        } else {
            if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

                var stockActual = parseFloat($("#stock_Stock").html());
                var cantidadAgregar = parseFloat($("#iptStockSumar").val());


                $("#stock_NuevoStock").html(stockActual - cantidadAgregar);

                if (parseInt($("#stock_NuevoStock").html()) < 0) {
                    Toast.fire({
                        icon: 'warning',
                        title: 'La cantidad a disminuir no puede ser mayor al stock actual (Nuevo Stock < 0)'
                    });

                    $("#iptStockSumar").val("");
                    $("#iptStockSumar").focus();
                    $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

                }
            } else {
                Toast.fire({
                    icon: 'warning',
                    title: 'La cantidad a disminuir no puede ser mayor al stock actual (nuevo stock < 0)'
                });

                $("#iptStockSumar").val("")
                $("#stock_NuevoStock").html(parseFloat($("#stock_Stock").html()));

            }
        }

    })

    // evento que registra en bd el aumento o disminucion de stock

    $("#btnGuardarNuevoStock").on('click', function() {

        if ($("#iptStockSumar").val() != "" && $("#iptStockSumar").val() > 0) {

            var nuevoStock = parseFloat($("#stock_NuevoStock").html()),
                codigo_producto = $("#stock_codigoProducto").html();

            var datos = new FormData();

            datos.append('accion', 3);
            datos.append('nuevoStock', nuevoStock);
            datos.append('codigo_producto', codigo_producto);

            $.ajax({
                url: "ajax/productos.ajax.php",
                method: "POST",
                data: datos,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(respuesta) {
                    $("#stock_NuevoStock").html("");
                    $("#iptStockSumar").val("");

                    $("#mdlGestionarStock").modal('hide');

                    table.ajax.reload(); // actualizar la tabla automaticamente

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: respuesta,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        }
    })

    //evento al dar click en el boton editar producto

    $('#tbl_productos tbody').on('click', '.btnEditarProducto', function() {

        accion = 4; //seteamos la accion 4 para editar

        $("#mdlGestionarProducto").modal('show');

        var data = table.row($(this).parents('tr')).data();

        $("#iptCodigoReg").val(data[2]);
        $("#selCategoriaReg").val(data[3]);
        $("#iptDescripcionReg").val(data[5]);
        $("#iptPrecioCompraReg").val(data[6]);
        $("#iptPrecioVentaReg").val(data[7]);
        $("#iptUtilidadReg").val(data[8]);
        $("#iptStockReg").val(data[9].replace('Und(s)', '').replace('Kg(s)', ''));
        $("#iptMinimoStockReg").val(data[10].replace('Und(s)', '').replace('Kg(s)', ''));

    })

    //evento al dar click en el boton eliminar producto

    $('#tbl_productos tbody').on('click', '.btnEliminarProducto', function() {

        accion = 5;

        var data = table.row($(this).parents('tr')).data();

        var codigo_producto = data["codigo_producto"];

        Swal.fire({
            title: 'Está seguro de Eliminar el producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, deseo Eliminarlo!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {

            if (result.isConfirmed) {

                var datos = new FormData();

                datos.append("accion", accion);
                datos.append("codigo_producto", codigo_producto); //codigo_producto
                

                $.ajax({
                    url: "ajax/productos.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(respuesta) {
                        console.log(respuesta)

                        if (respuesta == "ok") {

                            Toast.fire({
                                icon: 'success',
                                title: 'El producto se elimino correctamente'
                            });

                            table.ajax.reload(); //se recarga la tabla

                            

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'El producto no se pudo eliminar'
                            });
                        }

                    }
                });

            }
        })
    })



})

// CALCULA LA UTILIDAD
function calcularUtilidad() {

    var iptPrecioCompraReg = $("#iptPrecioCompraReg").val();
    var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
    var Utilidad = iptPrecioVentaReg - iptPrecioCompraReg;
    $("#iptUtilidadReg").val(Utilidad.toFixed(2));

}

document.getElementById("btnGuardarProducto").addEventListener("click", function() {


    //obtener las forms que queremos validar

    var forms = document.getElementsByClassName('needs-validation');

    //loop para prevenir submission

    var validation = Array.prototype.filter.call(forms, function(form) {

        if (form.checkValidity() === true) {

            console.log("Listo para registrar el producto")

            //validar ingreso de campos o inputs

            Swal.fire({
                title: 'Está seguro de registrar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, deseo registrarlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", accion);
                    datos.append("codigo_producto", $("#iptCodigoReg").val()); //codigo_producto
                    datos.append("id_categoria_producto", $("#selCategoriaReg")
                        .val()); //id_categoria_producto
                    datos.append("descripcion_producto", $("#iptDescripcionReg")
                        .val()); //descripcion_producto
                    datos.append("precio_compra_producto", $("#iptPrecioCompraReg")
                        .val()); //precio_compra_producto
                    datos.append("precio_venta_producto", $("#iptPrecioVentaReg")
                        .val()); //precio_venta_producto
                    datos.append("utilidad", $("#iptUtilidadReg").val()); //utilidad
                    datos.append("stock_producto", $("#iptStockReg").val()); //stock_producto
                    datos.append("minimo_stock_producto", $("#iptMinimoStockReg")
                        .val()); //minimo_stock_producto  
                    datos.append("ventas_producto", 0); //ventas_producto



                    if (accion == 2) {
                        var titulo_msj = "El producto se registro correctamente!"
                    }

                    if (accion == 4) {
                        var titulo_msj = "El producto se actualizo correctamente!"
                    }




                    $.ajax({
                        url: "ajax/productos.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {
                            console.log(respuesta)

                            if (respuesta == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: titulo_msj
                                });

                                table.ajax.reload(); //se recarga la tabla

                                $("#mdlGestionarProducto").modal(
                                    'hide'); //llamamos a la ventana modal

                                $("#iptCodigoReg").val(
                                    ""
                                ); //se limpian los datos para un nuevo registro
                                $("#selCategoriaReg").val(0);
                                $("#iptDescripcionReg").val("");
                                $("#iptPrecioCompraReg").val("");
                                $("#iptPrecioVentaReg").val("");
                                $("#iptUtilidadReg").val("");
                                $("#iptStockReg").val("");
                                $("#iptMinimoStockReg").val("");

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'El producto no se pudo registrar'
                                });
                            }

                        }
                    });

                }
            })
        } else {
            console.log("No paso la validacion")
        }
        form.classList.add('was-validated');


    });

});

document.getElementById("btnCancelarRegistro").addEventListener("click", function() {
    $(".needs-validation").removeClass("was-validated");
})
</script>