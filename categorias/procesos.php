<?php

    class Procesos{
        
        public function listar($sql){
            try{
                $conexion = new Conexion();
                $conexion = $conexion->conexion();

                $resultado = $conexion->query($sql);

                return $resultado;
            }catch(Throwable $e){
                
            }
        }
        
        public function alta($nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "INSERT INTO categorias (nombre) VALUES('".$nombre."');";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function baja($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function nombre2($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        public function modificar($id, $nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = 'UPDATE categorias SET nombre = "'.$nombre.'" WHERE id = '.$id.';';
            $resultado = $conexion->query($sql);

            return $resultado;
        }
    }
?>