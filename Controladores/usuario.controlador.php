<?php

class UsuarioControlador{

    /* Login de usuarios    */
    public function login(){

        if(isset($_POST["loginUsuario"])){

            /*realizamos la consulta con los datos del usuario*/

            $usuario = $_POST["loginUsuario"];
            $password = crypt($_POST["loginPassword"],'$2a$07$azybxcags23425sdg23sdfhsd$');

            $respuesta = UsuarioModelo::mdlIniciarSesion($usuario, $password);

            if(count($respuesta) > 0){

                $_SESSION["usuario"] = $respuesta[0];

                echo '
                    <script>
                        window.location = "http://3.133.127.13/LaCosecha/";
                    </script>
                
                ';
            }else{

                echo '
                    <script>
                        fncSweetAlert("error","Usuario y/o password inválido","http://3.133.127.13/LaCosecha/");
                    </script>
                
                ';
            }

        }
    }

    static public function ctrObtenerMenuUsuario($id_usuario){

        $menuUsuario = UsuarioModelo::mdlObtenerMenuUsuario($id_usuario);

        return $menuUsuario;
    }

    static public function ctrObtenerSubMenuUsuario($idMenu){

        $subMenuUsuario = UsuarioModelo::mdlObtenerSubMenuUsuario($idMenu);
        
        return $subMenuUsuario ;
    
    }

    

}