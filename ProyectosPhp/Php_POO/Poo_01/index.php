<?php
//las clases comienzan con mayuscula
    class MiClase extends Miclase2{
        //retornando un String 
        public function miMetodo(){
            return "La clase solo es para lo que necesita";
            //return this -> usuario;
        }
        //retornar un entero
        public function miMetodoint(){
            return 1;
        }
        //retornado de valor flotante
        public function miMetodofloat(){
            return 4.5;
        }
        //retornado de arreglo
        public function miMetodoBool(){
            return true;
        }
        public function metodoArreglo(){
            $arreglo = array (1,2,3,4);
            return $arreglo;
        }
        //crear un metodo directo
        public $usuario = "Administrador";
        public function llenaMetodo(){
            return self :: miMetodo();
            //self se usa para llamar un metodo dentro de otro de manera estatica 

        }
        public function llenadoDos(){
            $miMetodoClase1 = self::miMetodo();
            $miMetodoClase2 = parent :: miMetodo();

            return $miMetodoClase1 ."    " . $miMetodoClase2;
        }

        
    }

    class Miclase2{
        public function miMetodo(){
            return "Vengo de la clase 2";

        }

    }
    
        //objetos en php
        $MiClase = new MiClase();
        //llamar al metodo
        print_r($MiClase -> llenadoDos());
        //funciones anonimas y promesas en relaciones a php
//dessarrollar un metodo que haga operaciones basicas, debe agregar la opció de suma, resta
//multiplicación división, debe retornar el valor, pidiendo numeros 
//

    
?>