<?php

class Conexion{
    static public function conectar(){
        try{
            //$conn = new PDO("mysql:host=localhost;dbname=la_cosecha","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

             
            $conn = new PDO("mysql:host=rds-instance.c78kai0qwest.us-east-2.rds.amazonaws.com;dbname=la_cosecha","admin","Calcetin1994!",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            return $conn;          
  

        }
        catch(PDOException $e){ 
            echo 'fallo la conexion: ' . $e->getMessage();
        }




    }
}
