<?php
    class Procesos{
        // Realizamos la conexión con el servidor y devolvemos el objeto de la conexión
        function __construct() {
            function conexion(){
                $conexion = new mysqli($this->servidor, $this->usuario, $this->contrasenia, $this->bbdd) or die('No hay conexión');
                $conexion->set_charset('utf8');
                
                return $conexion;
            }
        }

        // 
        public function listar($sql){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();
           
            $resultado = $conexion->query($sql);
            
            return $resultado;
        }
        
        // Obtiene el valor del "nombre" introducido y lo guarda en la tabla categorías.
        public function alta($nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();
            try{
                $sql = "INSERT INTO categorias (nombre) VALUES('".$nombre."');";
                $resultado = $conexion->query($sql);
                return $resultado;
            }catch(Exception $e){
                //echo $e->getMessage();
                //echo $e->getCode();
                if($e->getCode()=='1062'){
                    echo 'No puedes añadir una categoría que ya existe <a href="formulario.php" class="boton">
                                                                            <span>Volver</span>
                                                                        </a>';
                }
            }die();
        }

        // Obtiene el valor del "id" del campo seleccionado y lo elimina de la tabla categorías.
        public function baja($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();

            $sql = "DELETE FROM categorias WHERE id=".$id.";";
            $resultado = $conexion->query($sql);

            return $resultado;
        }

        // Obtiene el valor del "id" del campo seleccionado, se realiza un select para seleccionar el campo nombre de esa fila y lo devuelve.
        public function nombre2($id){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();
            
            $sql = "SELECT nombre from categorias WHERE id=$id;";
            $resultado = $conexion->query($sql);
            
            return $resultado;
        }

        // Obtiene el valor del "id" y del "nombre" introducido y actualiza el dato de la fila seleccionada anteriormente de la tabla categorías. 
        public function modificar($id, $nombre){
            $conexion = new Conexion();
            $conexion = $conexion->conexion();
            try{
                $sql = 'UPDATE categorias SET nombre = "'.$nombre.'" WHERE id = '.$id.';';
                $resultado = $conexion->query($sql);

                return $resultado;
            }catch(Exception $e){
                //echo $e->getMessage();    // Para visualizar el mensaje de error
                //echo $e->getCode();       // Para visualizar el código de error
                if($e->getCode()=='1062'){
                    echo 'No puedes modificar una categoría por otra que ya existe <a href="formulario_modificar.php?id='.$id.'" class="boton">
                                                                                        <span>Volver</span>
                                                                                    </a>';
                }
            }
        }
    }
?>