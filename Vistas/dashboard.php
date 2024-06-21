<!-- /.content-wrapper -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                 
            <h1 class="m-0">Tablero Principal hola</h1>
                
                    
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
    <div class="conteiner-fluid">
        <!-- creamos una fila  -->

        <!-- Tarjetas informativas  -->
        <Div class="row">

            <!-- TARJETA PRODUCTOS REGISTRADOS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h4 id="totalProductos"></h4>

                        <p>Productos Regristrados</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-clipboard"></i>
                    </div>


                </div>
            </div>
            <!-- TARJETA TOTAL COMPRAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h4 id="totalCompras"></h4>

                        <p>Total de Compras</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>


                </div>
            </div>
            <!-- TARJETA TOTAL VENTAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalVentas"></h4>

                        <p>Total Ventas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-cash"></i>
                    </div>


                </div>
            </div>
            <!-- TARJETA TOTAL GANANCIAS-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4 id="totalGanancias"></h4>

                        <p>Total Ganancias</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-pie"></i>
                    </div>


                </div>
            </div>
            <!-- TARJETA MinStoc-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h4 id="totalProductosMinStock"></h4>

                        <p>Productos con poco stock</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-remove-circle"></i>
                    </div>


                </div>
            </div>
            <!-- TARJETA TOTAL VENTAS DIA ACTUAL-->
            <div class="col-lg-2">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h4 id="totalVentasHoy"></h4>

                        <p>Ventas del Dia</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-calendar"></i>
                    </div>


                </div>
            </div>


            <div class="row">
                <div class="col-12"></div>
            </div>
        </Div>
        <!-- grafico de barras -->
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title" id="TituloCodBarras"></h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>

                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>

                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart"
                                style="min-height: 250px; height: 300px; max-height: 305px; width: 100% ">


                            </canvas>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- grafico de barras2 -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> 10 productos mas vendidos</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_mas_vendidos">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Ventas</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> Listado de productos con poco Stock</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="tbl_productos_poco_stock">
                                <thead>
                                    <tr>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Stock Actual</th>
                                        <th>Min. Stock</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>




            <script>
            $(document).ready(function() {

                /*script ajax para llamar store procedure de las tarjetas informativas*/

                /*$.ajax({
                    url: "ajax/dashboard.ajax.php",
                    method: 'POST',
                    dataType: 'json',
                    success: function(respuesta) {
                        //console.log("respuesta", respuesta);
                        $("#totalProductos").html(respuesta[0]['totalProductos']);
                        $("#totalCompras").html('Q ' + strval($respuesta[0]['totalCompras']).replace(
                            /\d(?=(\d{3})+\.)/g,
                            "$&,"))
                        $("#totalVentas").html('Q ' + strval($respuesta[0]['totalVentas']).replace(
                            /\d(?=(\d{3})+\.)/g,
                            "$&,"))
                        $("#totalGanancias").html('Q ' + strval($respuesta[0]['ganancias']).replace(
                            /\d(?=(\d{3})+\.)/g,
                            "$&,"))
                        $("#totalProductosMinStock").html(respuesta[0][
                            'productosPocoStock'
                        ])
                        $("#totalVentasHoy").html('Q ' + strval($respuesta[0]['ventasHoy']).replace(
                            /\d(?=(\d{3})+\.)/g,
                            "$&,"))

                    }
                });*/




                setInterval(() => {
                    $.ajax({
                        url: "ajax/dashboard.ajax.php",
                        method: 'POST',
                        dataType: 'json',
                        success: function(respuesta) {
                            //console.log("respuesta", respuesta);
                            $("#totalProductos").html(respuesta[0][
                                'totalProductos'
                            ]);
                            $("#totalCompras").html('Q ' + respuesta[0][
                                'totalCompras'
                            ].replace(
                                /\d(?=(\d{3})+\.)/g,
                                "$&,"))
                            $("#totalVentas").html('Q ' + respuesta[0][
                                'totalVentas'
                            ].replace(
                                /\d(?=(\d{3})+\.)/g,
                                "$&,"))
                            $("#totalGanancias").html('Q ' + respuesta[0][
                                'ganancias'
                            ].replace(
                                /\d(?=(\d{3})+\.)/g,
                                "$&,"))
                            $("#totalProductosMinStock").html(respuesta[0][
                                'productosPocoStock'
                            ])
                            $("#totalVentasHoy").html('Q ' + respuesta[0][
                                'ventasHoy'
                            ].replace(
                                /\d(?=(\d{3})+\.)/g,
                                "$&,"))

                        }



                    });
                }, 20000);

                /* =======================================================
    SOLICITUD AJAX GRAFICO DE BARRAS DE VENTAS DEL MES
    =======================================================*/
                $.ajax({
                    url: "ajax/dashboard.ajax.php",
                    method: 'POST',
                    data: {
                        'accion': 1 //parametro para obtener las ventas del mes
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        // console.log("respuesta", respuesta);

                        var fecha_venta = [];
                        var total_venta = [];
                        var total_venta_ant = [];

                        var total_ventas_mes = 0;

                        for (let i = 0; i < respuesta.length; i++) {

                            fecha_venta.push(respuesta[i]['fecha_venta']);
                            total_venta.push(respuesta[i]['total_venta']);
                            total_venta_ant.push(respuesta[i]['total_venta_ant']);
                            total_ventas_mes = parseFloat(total_ventas_mes) + parseFloat(respuesta[
                                i][
                                'total_venta'
                            ]);

                        }

                        total_venta.push(0);
                        // total_venta.push(600);

                        // console.log(total_ventas_mes);

                        $("#TituloCodBarras").html('Ventas del Mes: Q./ ' + total_ventas_mes
                            .toString().replace(
                                /\d(?=(\d{3})+\.)/g, "$&,"));

                        var barChartCanvas = $("#barChart").get(0).getContext('2d');

                        var areaChartData = {
                            labels: fecha_venta,
                            datasets: [{
                                label: 'Ventas del Mes - Enero 2022',
                                backgroundColor: 'rgba(60,141,188,0.9)',
                                data: total_venta
                            }]
                        }

                        var barChartData = $.extend(true, {}, areaChartData);

                        var temp0 = areaChartData.datasets[0];

                        barChartData.datasets[0] = temp0;

                        var barChartOptions = {
                            maintainAspectRatio: false,
                            responsive: true,
                            events: false,
                            legend: {
                                display: true
                            },
                            scales: {
                                xAxes: [{
                                    stacked: true,
                                }],
                                yAxes: [{
                                    stacked: true
                                }]
                            },
                            animation: {
                                duration: 500,
                                easing: "easeOutQuart",
                                onComplete: function() {
                                    var ctx = this.chart.ctx;
                                    ctx.font = Chart.helpers.fontString(Chart.defaults
                                        .global
                                        .defaultFontFamily, 'normal',
                                        Chart.defaults.global.defaultFontFamily);
                                    ctx.textAlign = 'center';
                                    ctx.textBaseline = 'bottom';

                                    this.data.datasets.forEach(function(dataset) {
                                        for (var i = 0; i < dataset.data
                                            .length; i++) {
                                            var model = dataset._meta[Object.keys(
                                                    dataset
                                                    ._meta)[0]].data[i]._model,
                                                scale_max = dataset._meta[Object
                                                    .keys(dataset
                                                        ._meta)[0]].data[i]._yScale
                                                .maxHeight;
                                            ctx.fillStyle = '#444';
                                            var y_pos = model.y - 5;
                                            // Make sure data value does not get overflown and hidden
                                            // when the bar's value is too close to max value of scale
                                            // Note: The y value is reverse, it counts from top down
                                            if ((scale_max - model.y) / scale_max >=
                                                0.93)
                                                y_pos = model.y + 20;
                                            ctx.fillText(dataset.data[i], model.x,
                                                y_pos);
                                        }
                                    });
                                }
                            }
                        }

                        new Chart(barChartCanvas, {
                            type: 'bar',
                            data: barChartData,
                            options: barChartOptions
                        })


                    }
                });


                $.ajax({
                    url: "ajax/dashboard.ajax.php",
                    type: "POST",
                    data: {
                        'accion': 2 // listar los 10 productos mas vendidos
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        // console.log("respuesta",respuesta);

                        for (let i = 0; i < respuesta.length; i++) {
                            filas = '<tr>' +
                                '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                                '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                                '<td>' + respuesta[i]["cantidad"] + '</td>' +
                                '<td> Q./ ' + respuesta[i]["total_venta"] + '</td>' +
                                '</tr>'
                            $("#tbl_productos_mas_vendidos tbody").append(filas);
                        }

                    }
                });

                $.ajax({
                    url: "ajax/dashboard.ajax.php",
                    type: "POST",
                    data: {
                        'accion': 3 // listar los  productos con poco stock
                    },
                    dataType: 'json',
                    success: function(respuesta) {
                        // console.log("respuesta",respuesta);

                        for (let i = 0; i < respuesta.length; i++) {
                            filas = '<tr>' +
                                '<td>' + respuesta[i]["codigo_producto"] + '</td>' +
                                '<td>' + respuesta[i]["descripcion_producto"] + '</td>' +
                                '<td>' + respuesta[i]["stock_producto"] + '</td>' +
                                '<td> Q./ ' + respuesta[i]["minimo_stock_producto"] + '</td>' +
                                '</tr>'
                            $("#tbl_productos_poco_stock tbody").append(filas);
                        }

                    }
                });

            })
            </script>