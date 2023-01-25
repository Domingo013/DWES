<?php
    class Procesos{
        public function listar($sql){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $resultado = $conexion->query($sql);

            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        }

        public function alta($nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "INSERT INTO ac_categorias (nombre) VALUES('".$nombre."');";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function baja($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM ac_categorias WHERE id=".$id.";";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function nombre2($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "SELECT nombre from ac_categorias WHERE id=$id;";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function modificar($id, $nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = 'UPDATE ac_categorias SET nombre = "'.$nombre.'" WHERE id = '.$id.';';
            $resultado = $conexion->query($sql);

            return $resultado;
        }
    }
?>