<?php
    class Conexion{
        public function conectar(){
            $servidor="localhost";
            $usuario="root";
            $password="1234";
            $bd="bd_agenda";

            $conexion = mysqli_connect($servidor,$usuario,$password,$bd);

            return $conexion;
        }
    }
?>