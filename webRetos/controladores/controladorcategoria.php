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

        /** Listar todos las categorías */
        public function listar(){
            $filas = $this->modelo->listar();

            return $filas;
        }

        /** Eliminar */
        public function eliminar($id){
            $resultado = $this->modelo->eliminarCategoria($id);

            header('../vistas/listar_categoria.php');

        }

        /** Modificar */


    }

?>