<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" ><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link active" onclick="CargarContenido('Vistas/dashboard.php', 'content-wrapper')">
                Tablero
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link " onclick="CargarContenido('Vistas/productos.php', 'content-wrapper')">
                Inventario
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link " onclick="CargarContenido('Vistas/carga_masiva.php', 'content-wrapper')">
                Carga Masiva
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link " onclick="CargarContenido('Vistas/categorias.php', 'content-wrapper')">
                Categorias
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link " onclick="CargarContenido('Vistas/ventas.php', 'content-wrapper')">
                Ventas
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor:pointer;" class="nav-link " onclick="CargarContenido('Vistas/administrar_ventas.php', 'content-wrapper')">
              Administrar Ventas
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
        <a style="cursor:pointer;" class="nav-link s" onclick="CargarContenido('Vistas/configuracion.php', 'content-wrapper')">
                Configuracion
            </a>
        </li>
    </ul>


</nav>
<!-- /.navbar -->