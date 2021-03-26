<?php
    class Conexion{
        public function conectar(){
            $servidor = "localhost:3307";
            $usuario = "root";
            $password = "";
            $baseDeDatos = "phpv1";
            $conexion = mysqli_connect($servidor, $usuario, $password, $baseDeDatos);
            return $conexion;
        }
    }
    $Conexion = new Conexion();
    $conectar = $Conexion->conectar();
?>