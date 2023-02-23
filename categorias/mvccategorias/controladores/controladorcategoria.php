<?php

    require_once '../modelos/modelocategoria.php';

    class ControladorCategorias{

        private $modelo;

        public function __construct() {
            $this->modelo = new ModeloCategorias();
        }

        /** Añadir categorías */
        public function alta($nombre){
            $filas = $this->modelo->alta($nombre);

            return $filas;
        }

        /** Listar todos los retos */
        public function listar(){
            $filas = $this->modelo->listar();

            return $filas;
        }

        /** Eliminar */
        public function eliminar($datos){
            $resultado = $this->modelo->eliminarCategoria($datos);

        }

        /** Cargar formulario modificar */
        

        /** Modificar */


    }

?>