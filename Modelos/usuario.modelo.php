<?php

require_once $_SERVER['DOCUMENT_ROOT']."conexion.php";

class UsuarioModelo{

    static public function mdlIniciarSesion($usuario, $password){

        $logFile = fopen("log.txt", 'a') or die("Error creando archivo");
        fwrite($logFile, date("d/m/Y H:i:s"). '  ' . $usuario.'-'.$password."\n") or die("Error escribiendo en el archivo");
        fclose($logFile);

        $stmt = Conexion::conectar()->prepare("select *
                                                from usuarios u 
                                                inner join perfiles p
                                                on u.id_perfil_usuario = p.id_perfil
                                                inner join perfil_modulo pm
                                                on pm.id_perfil = u.id_perfil_usuario
                                                inner join modulos m
                                                on m.id = pm.id_modulo
                                                where u.usuario = :usuario
                                                and u.clave = :password
                                                and vista_inicio = 1");

        $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);

        $stmt->execute();

        return $stmt-> fetchAll(PDO::FETCH_CLASS);

    }

    static public function mdlObtenerMenuUsuario($id_usuario){

        $stmt = Conexion::conectar()->prepare("SELECT m.id,m.modulo,m.icon_menu,m.vista,pm.vista_inicio
                                                from usuarios u inner join perfiles p on u.id_perfil_usuario = p.id_perfil
                                                inner join perfil_modulo pm on pm.id_perfil = p.id_perfil
                                                inner join modulos m on m.id = pm.id_modulo
                                                where u.id_usuario = :id_usuario
                                                and m.padre_id is null
                                                order by m.id;");

        $stmt->bindParam(":id_usuario", $id_usuario, PDO::PARAM_STR);

        $stmt->execute();

	    return $stmt-> fetchAll(PDO::FETCH_CLASS);

    }

    static public function mdlObtenerSubMenuUsuario($idMenu){

        $stmt = Conexion::conectar()->prepare("SELECT m.id,m.modulo,m.icon_menu,m.vista
                                                from modulos m
                                                where m.padre_id = :idMenu
                                                order by m.id");
    
        $stmt->bindParam(":idMenu", $idMenu, PDO::PARAM_STR);
        
    
        $stmt->execute();
    
        return $stmt-> fetchAll(PDO::FETCH_CLASS);
        
    }

    

}