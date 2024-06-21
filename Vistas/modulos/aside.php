<?php

    $menuUsuario = UsuarioControlador::ctrObtenerMenuUsuario($_SESSION["usuario"]->id_usuario);

    


?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="Vistas/Assets/dist/img/LaCosechaLogo.jpg" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">La Cosecha Gt</span>
    </a>

    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="Vistas/Assets/dist/img/yo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <h6 class="text-warning">
                <?php echo $_SESSION["usuario"]->nombre_usuario. ' ' . $_SESSION["usuario"]->apellido_usuario ?></h6>
        </div>
    </div>

    <!-- Botón para contraer el menú -->
    <div><a href="#" class="brand-link toggle-btn">
                    <i class="fas fa-bars"></i>
                </a></div>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                data-accordion="false">

                <?php foreach ($menuUsuario as $menu) : ?>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" <?php if(!empty($menu->vista)) : ?>
                        onclick="CargarContenido('Vistas/<?php echo $menu->vista; ?>','content-wrapper')"
                        <?php endif; ?>>
                        <i class="nav-icon <?php echo $menu->icon_menu; ?> "></i>
                        <p>
                            <?php echo $menu->modulo ?>
                            <?php if(empty($menu->vista)) : ?>
                            <i class="right fas fa-angle-left"></i>
                            <?php endif; ?>
                        </p>
                    </a>

                    <?php if(empty($menu->vista)) : ?>
                    <?php
                            $subMenuUsuario = UsuarioControlador::ctrObtenerSubMenuUsuario($menu->id);
                    ?>

                    <ul class="nav nav-treeview">
                        <?php foreach($subMenuUsuario as $subMenu) : ?>

                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/<?php echo $subMenu->vista; ?>','content-wrapper')">
                                <i class="<?php echo $subMenu->icon_menu; ?> nav-icon"></i>
                                <p><?php echo $subMenu->modulo; ?> </p>
                            </a>
                        </li>

                        <?php endforeach; ?>
                    </ul>

                    <?php endif; ?>


                </li>
                <?php endforeach; ?>

                <!-- 
                
                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('Vistas/dashboard.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Tablero Principal
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Productos
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/productos.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Inventario</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/carga_masiva_productos.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Carga Masiva</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/categorias.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Categorías</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-store-alt"></i>
                         <p>Ventas<i class="right fas fa-angle-left"></i></p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('Vistas/ventas.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Punto de Venta</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link" style="cursor:pointer;" onclick="CargarContenido('Vistas/administrar_ventas.php','content-wrapper')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Administrar ventas</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/reportes.php','content-wrapper')">
                         <i class="nav-icon fas fa-chart-line text-ligth"></i>
                         <p>
                             Reportes
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('Vistas/configuracion.php','content-wrapper')">
                         <i class="nav-icon fas fa-cogs text-ligth"></i>
                         <p>
                             Configuración
                         </p>
                     </a>
                 </li> -->
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" href="http://3.133.127.13/LaCosecha///?cerrar_sesion=1">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Cerrar Sesion
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<script>
$(document).ready(function() {

$(".nav-link").on('click', function() {
    $(".nav-link").removeClass('active');
    $(this).addClass('active');
})

// Al hacer clic en el botón de toggle
$('.toggle-btn').on('click', function(e) {
    e.preventDefault();
    $('body').toggleClass('sidebar-collapse');
});

// Si deseas cerrar el menú al cargar la página, puedes agregar esto:
$('body').addClass('sidebar-collapse');
});
</script>