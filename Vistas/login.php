<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Cosecha Gt</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Vistas/Assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="Vistas/Assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="Vistas/Assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

    <div class="login-box">

        <div class="card card-outline card-primary">

            <div class="card-header text-center">

                <h1 class="h1"><b>La Cosecha Gt</b></h1>

            </div><!-- /.card-header -->

            <div class="card-body">

            <!-- Formulario de inicio de sesion-->
                <form method="post" class="needs-validation-login" novalidate>

                    <!-- USUARIO DEL SISTEMA -->
                    <div class="input-group mb-3">
                        
                        <input type="text" class="form-control" placeholder="Usuario" name="loginUsuario" required>

                        <div class="input-group-append">
                            
                            <div class="input-group-text">

                                <span class="fas fa-user"></span>

                            </div>

                        </div>

                        <div class="invalid-feedback">Debe ingresar su usuario!</div>

                    </div><!-- /.input-group USUARIO -->

                    <!-- PASSWORD DEL USUARIO DEL SISTEMA -->
                    <div class="input-group mb-3">
                        
                        <input type="password" class="form-control" placeholder="Contraseña" name="loginPassword" required>

                        <div class="input-group-append">
                            
                            <div class="input-group-text">

                                <span class="fas fa-lock"></span>

                            </div>

                        </div>

                        <div class="invalid-feedback">Debe ingresar su contraseña!</div>

                    </div><!-- /.input-group PASSWORD -->

                    <div class="row">

                        <?php

                            $login = new UsuarioControlador();
                            $login->login();

                        ?>

                        <div class="col-md-12 text-center">

                            <button type="submit" class="btn btn-info" id="btnIniciarSesion">Iniciar Sesión</button>

                        </div>

                    </div>

                </form>

            </div><!-- /.card-body -->

        </div>

    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="Vistas/Assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="Vistas/Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="Vistas/Assets/dist/js/adminlte.min.js"></script>
    
</body>

</html>