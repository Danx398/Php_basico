<?php
    class Persona{
        public function eliminarPersona($idPersona){
            $Conexion = new Conexion();
            $conectar = $Conexion->conectar();
                //metodo de eliminacion 
            $sql = "DELETE FROM t_personas WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }
        public function agregarPersona($paterno, $materno, $nombre){
            $Conexion = new Conexion();
            $conectar = $Conexion->conectar();
            $sql= "INSERT INTO t_personas (paterno, materno, nombre)
                    VALUES ('$paterno', '$materno', '$nombre')";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }
        public function obtenerDatosPersona($idPersona){
            $Conexion = new Conexion();
            $conectar = $Conexion->conectar();

            $sql = "SELECT id_persona, paterno, materno, nombre FROM t_personas WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            //el contenido de la variable la va a volver arreglo
            $datosObtenidos = mysqli_fetch_array($respuesta);
            //arreglo
            $datosRespuesta = array(
                "id_persona" =>$datosObtenidos['id_persona'],
                "paterno" =>$datosObtenidos['paterno'],
                "materno" =>$datosObtenidos['materno'],
                "nombre" =>$datosObtenidos['nombre']);

            return $datosRespuesta;
        }
        public function actualizarPersona($idPersona, $paterno, $materno, $nombre){
            $Conexion = new Conexion();
            $conectar = $Conexion->conectar();

            $sql = "UPDATE t_personas SET paterno = '$paterno',materno = '$materno',nombre = '$nombre' 
					WHERE id_persona = '$idPersona'";
            $respuesta = mysqli_query($conectar, $sql);
            return $respuesta;
        }

    }
?>