<?php 
    class Animales{
        public function agregarAnimales($nombre){
            $Conexion = new Conexion();
            $conectar = $Conexion->conectar();
            $sql= "INSERT INTO t_animales(id_animales, nombre)
            VALUES ('$id_animales','$nombre')";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }
    }



?>