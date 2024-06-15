<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-6">
                <h4 class="m-0">Reportes</h4>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item">Ventas</li>
                    <li class="breadcrumb-item active">Administrar Ventas</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content pb-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Criterios de Busqueda</h3>
                        <div class="card-tools"><button class="btn btn-tool" type="button"
                                data-card-widget="collapse"><i class="fas fa-minus"></i></button></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Ventas desde:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" id="ventas_desde">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Ventas hasta:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="far fa-calendar-alt"></i></span></div>
                                        <input type="text" class="form-control" data-inputmask-alias="datetime"
                                            data-inputmask-inputformat="dd/mm/yyyy" id="ventas_hasta">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex flex-row align-items-center justify-content-end">
                                <div class="form-group m-0"><a class="btn btn-primary" style="width:120px;"
                                        id="btnFiltrar">Buscar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <h4>Total venta: Q./ <span id="totalVenta">0.00</span></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="display nowrap table-striped w-100 shadow" id="lstVentas">
                    <thead class="bg-info">
                        <tr>
                            <th>Nro Boleta</th>
                            <th>Codigo Barras</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Total Venta</th>
                            <th>Fecha Venta</th>
                        </tr>
                    </thead>
                    <tbody class="small"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEditarVenta" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title fw-bold">Editar Venta</h5>
                <button type="button" class="close" aria-label="Close" data-dismiss="modal" id="btnCerrarModal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <table id="tblDetalleVenta" class="table table-bordered table-striped w-100" style="width:400px;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Boleta</th>
                            <th>Cod. producto</th>
                            <th>Categoria</th>
                            <th>Producto</th>
                            <th>Cant.</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <div class="card-footer pb-0">
                    <h4 class="float-right">Total Venta Q./ <span id="spnTotalVenta">0.00</span> </h4>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnCloseModal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="//datatables.net/download/build/nightly/jquery.dataTables.js"></script>
<script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

<script>
var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000

});


$(document).ready(function() {

    var table, ventas_desde, ventas_hasta;
    var groupColumn = 0;

    $('#ventas_desde, #ventas_hasta').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })

    $("#ventas_desde").val(moment().startOf('month').format('DD/MM/YYYY'));
    $("#ventas_hasta").val(moment().format('DD/MM/YYYY'));

    ventas_desde = $("#ventas_desde").val();
    ventas_hasta = $("#ventas_hasta").val();

    ventas_desde = ventas_desde.substr(6, 4) + '-' + ventas_desde.substr(3, 2) + '-' + ventas_desde.substr(0,
        2);
    console.log("🚀 ~ file: administrar_ventas.php ~ line 97 ~ $ ~ ventas_desde", ventas_desde)
    ventas_hasta = ventas_hasta.substr(6, 4) + '-' + ventas_hasta.substr(3, 2) + '-' + ventas_hasta.substr(0,
        2);
    console.log("🚀 ~ file: administrar_ventas.php ~ line 99 ~ $ ~ ventas_hasta", ventas_hasta)

    

    table = $('#lstVentas').DataTable({
        "columnDefs": [{
                visible: false,
                targets: groupColumn
            },
            {
                targets: [1, 2, 3, 4, 5],
                orderable: false
            }
        ],
        "order": [
            [6, 'desc']
        ],
        dom: 'Bfrtip',
        buttons: [
            'excel', 'print', 'pageLength',

        ],
        lengthMenu: [0, 5, 10, 15, 20, 50],
        "pageLength": 15,
        ajax: {
            url: 'ajax/ventas.ajax.php',
            type: 'POST',
            dataType: 'json',
            "dataSrc": function(respuesta) {

                var TotalVenta = 0.00;

                for (let i = 0; i < respuesta.length; i++) {
                    
                    TotalVenta =  parseFloat(respuesta[i][5].replace('Q./ ', '')) + parseFloat(TotalVenta);

                }
                $("#totalVenta").html(TotalVenta.toFixed(2))

                return respuesta;
            },
            data: {
                'accion': 2,
                'fechaDesde': ventas_desde,
                'fechaHasta': ventas_hasta
            }
        },
        drawCallback: function(settings) {

            var api = this.api();
            var rows = api.rows({
                page: 'current'
            }).nodes();
            var last = null;

            api.column(groupColumn, {
                page: 'current'
            }).data().each(function(group, i) {

                if (last !== group) {

                    const data = group.split("-");
                    var nroBoleta = data[0];
                    nroBoleta = nroBoleta.split(":")[1].trim();

                    $(rows).eq(i).before(
                        '<tr class="group">' +
                        '<td colspan="6" class="fs-6 fw-bold fst-italic bg-success text-white"> ' +
                        '<i nroBoleta = ' + nroBoleta +
                        ' class="fas fa-trash fs-6 text-danger mx-2 btnEliminarVenta" style="cursor:pointer;"></i><i nroBoleta = ' +
                        nroBoleta +
                        ' class="far fa-edit fs-6 text-warning mx-2 btnEditarVenta fw-bold" style="cursor:pointer;"></i> ' +
                        group +
                        '</td>' +
                        '</tr>'
                    );

                    last = group;
                }
            });
        },
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });

    /* ======================================================================================
		Evento para eliminar una venta
		======================================================================================*/

    $('#lstVentas tbody').on('click', '.btnEliminarVenta', function() {
        var nroBoleta = $(this).attr("nroBoleta");
        console.log("Nro Boleta es: " + $(this).attr("nroBoleta"));

        $.ajax({
            url: "ajax/ventas.ajax.php",
            type: "POST",
            data: {
                accion: '3',
                Boleta: String(nroBoleta)
            },
            dataType: 'json',
            success: function(respuesta) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: respuesta[0],
                    showConfirmButton: false,
                    timer: 1500
                })

                table.ajax.reload();
            }
        });
    });

    /* ======================================================================================
		Evento para filtrar las ventas segun rango de fechas
		======================================================================================*/

    $("#btnFiltrar").on('click', function() {

        table.destroy();

        if ($("#ventas_desde").val() == '') {
            ventas_desde = '01/10/2021';
        } else {
            ventas_desde = $("#ventas_desde").val();

        }

        if ($("#ventas_hasta").val() == '') {
            ventas_hasta = '01/12/3000';
        } else {
            ventas_hasta = $("#ventas_hasta").val();

        }


        ventas_desde = ventas_desde.substr(6, 4) + '-' + ventas_desde.substr(3, 2) + '-' + ventas_desde
            .substr(0, 2);

        ventas_hasta = ventas_hasta.substr(6, 4) + '-' + ventas_hasta.substr(3, 2) + '-' + ventas_hasta
            .substr(0, 2);

        var groupColumn = 0;

        table = $('#lstVentas').DataTable({
            "columnDefs": [{
                    visible: false,
                    targets: groupColumn
                },
                {
                    targets: [1, 2, 3, 4, 5],
                    orderable: false
                }
            ],
            "order": [
                [6, 'desc']
            ],
            dom: 'Bfrtip',
            buttons: [
                'excel', 'print', 'pageLength',

            ],
            "ordering": true,
            orderCellsTop: true,
            fixedHeader: true,
            "scrollX": false,
            ajax: {
                url: 'ajax/ventas.ajax.php',
                type: 'POST',
                dataType: 'json',
                success: function(respuesta) {
            console.log("respuesta", respuesta)
        }
                "dataSrc": function(respuesta) {

                    var TotalVenta = 0.00;

                    for (let i = 0; i < respuesta.length; i++) {
                        TotalVenta = parseFloat(respuesta[i][5].replace('Q./ ', '')) + parseFloat(TotalVenta);

                    }
                    $("#totalVenta").html(TotalVenta.toFixed(2))

                    return respuesta;
                },
                data: {
                    'accion': 2,
                    'fechaDesde': ventas_desde,
                    'fechaHasta': ventas_hasta
                },
                type: 'POST'
            },
            lengthMenu: [0, 5, 10, 15, 20, 50],
            "pageLength": 15,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/2.0.7/i18n/es-MX.json"
            },

            drawCallback: function(settings) {

                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;

                api.column(groupColumn, {
                    page: 'current'
                }).data().each(function(group, i) {

                    if (last !== group) {

                        const data = group.split("-");
                        var nroBoleta = data[0];
                        nroBoleta = nroBoleta.split(":")[1].trim();

                        $(rows).eq(i).before(
                            '<tr class="group">' +
                            '<td colspan="6" class="fs-6 fw-bold fst-italic bg-success text-white"> ' +
                            '<i nroBoleta = ' + nroBoleta +
                            ' class="fas fa-trash fs-6 text-danger mx-2 btnEliminarVenta" style="cursor:pointer;"></i> ' +
                            group +
                            '</td>' +
                            '</tr>'
                        );

                        last = group;
                    }
                });
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/2.0.7/i18n/es-MX.json"
            },
        });


    });

    /* ======================================================================================
		Eventos para editar una venta
		======================================================================================*/

    $('#lstVentas tbody').on('click', '.btnEditarVenta', function() {

        nroBoleta = $(this).attr("nroBoleta");

        if ($.fn.DataTable.isDataTable('#tblDetalleVenta')) {
            $('#tblDetalleVenta').DataTable().destroy();
        }

        $('#tblDetalleVenta tbody').empty();

        $('#tblDetalleVenta').DataTable({
            columns: [{
                    data: 'id'
                },
                {
                    data: 'nro_boleta'
                },
                {
                    data: 'codigo_producto'
                },
                {
                    data: 'nombre_categoria'
                },
                {
                    data: 'descripcion_producto'
                },
                {
                    data: 'cantidad'
                },
                {
                    data: 'total_venta'
                },
            ],
            processing: true,
            serverSide: true,
            paging: false,
            ajax: {
                url: "ajax/EditTable/obtener_detalle_venta.php",
                type: "POST",
                dataType: 'json',
                data: {
                    "nro_boleta": nroBoleta
                },
                "dataSrc": function(output) {
                    console.log(output['data'])

                    var TotalVenta = 0.00;

                    for (let i = 0; i < output["data"].length; i++) {
                        TotalVenta = (parseFloat(output["data"][i][6]) + parseFloat(
                            TotalVenta)).toFixed(2);

                    }
                    $("#spnTotalVenta").html(TotalVenta);

                    return output["data"];

                }
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/2.0.7/i18n/es-MX.json"
            }
        });
        $("#modalEditarVenta").modal('show')
    })

    /*Evento para cerrar la ventana modal */

    $('#tblDetalleVenta').on('draw.dt', function() {

        $('#tblDetalleVenta').Tabledit({

            url: 'ajax/EditTable/acciones_datatable.php',
            dataType: 'json',
            columns: {
                identifier: [0, 'id'],
                editable: [
                    [2, 'codigo_producto'],
                    [5, 'cantidad']
                ]
            },
            buttons: {
                edit: {
                    class: 'btn btn-sm btn-default',
                    html: '<span class="glyphicon glyphicon-pencil"></span>',
                    html: '<i class="fas fa-edit text-primary fs-6"></i>',
                    action: 'edit'
                },
                delete: {
                    class: 'btn btn-sm btn-default',
                    html: '<span class="glyphicon glyphicon-trash"></span>',
                    html: '<i class="far fa-trash-alt text-danger fs-6"></i>',
                    action: 'delete'
                }
            },

            onSuccess: function(data, textStatus, jqXHR) {
                if (data.action == 'delete') {
                    $('#' + data.nro_boleta).remove();
                    $('#tblDetalleVenta').DataTable().ajax.reload();
                    table.ajax.reload();
                    Toast.fire({
                        icon: 'success',
                        title: 'se elimino correctamente'
                    });
                }

                if (data.action == 'edit') {
                    Toast.fire({
                        icon: 'success',
                        title: 'Se actualizo correctamente'
                    });

                    $('#tblDetalleVenta').DataTable().ajax.reload();
                    table.ajax.reload();
                }
            }
        });





    });

    /*Evento para cerrar la ventana modal de edicion*/

    $("#btnCerrarModal, #btnCloseModal").on("click",function(){
        $("#modalEditarVenta").modal("hide");
    })

})
</script>