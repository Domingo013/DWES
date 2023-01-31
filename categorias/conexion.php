<?php
    class Conexion{

		// Hosting
		private $servidor="2daw.esvirgua.com";
		private $usuario="user2daw_08";
		private $contrasenia="HSIDt+WKU}E%";
		private $bbdd="user2daw_BD2-08";

		// Servidor local
		/*private $servidor="localhost";
		private $usuario="root";
		private $contrasenia="";
		private $bbdd="retos";*/

		public function conexion(){
			$conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->bbdd) or die('No hay conexión');
			$conexion->set_charset('utf8');
			
            return $conexion;
		}
    }
?>