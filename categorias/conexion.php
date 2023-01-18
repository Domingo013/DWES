<?php
    class Conexion{
		private $servidor="2daw.esvirgua.com";
		private $usuario="user2daw_08";
		private $contrasenia="HSIDt+WKU}E%";
		private $bbdd="user2daw_BD1-08";

		public function conexion(){
			$conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasenia, $this->bbdd);
			
            return $conexion;
		}
    }
?>