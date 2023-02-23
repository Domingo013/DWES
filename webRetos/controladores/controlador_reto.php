<?php

    require_once '../modelos/modelo_reto.php';

    class ControladorRetos{

        private $modelo;

        public function __construct() {
            $this->modelo = new ModeloRetos();
        }

        /** Añadir retos */
        public function alta($retoDatos){
            $filas = $this->modelo->alta($retoDatos);
        }

        /** Listar todos los retos */

        /** Eliminar */

        /** Modificar */


    }

?>