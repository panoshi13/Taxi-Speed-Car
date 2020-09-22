<?php 

    class Database {
        public static function conexion(){
            $conexion = new PDO("mysql:host=127.0.0.1;dbname=".dbname,user,pass);
            return $conexion;
        }

    }

?>