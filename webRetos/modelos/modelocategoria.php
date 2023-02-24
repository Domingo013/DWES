<?php 

require_once '../config/configdb.php';

class ModeloCategorias {

	public function __construct(){
        $this->conexion = $this->conectar();
    }  

    /** Realizamos la conexión con el servidor */
    public function conectar(){
        //echo "Ejecuta conexion";
        $conexion = new mysqli(servidor, usuario, contrasenia, bbdd);
        if($conexion->connect_errno){
            die("No se ha podido conectar con la base de datos".$conexion->connect_errno);
        }
        $conexion->set_charset('utf8');

        return $conexion;
    }

    /** Listar las categorias */
    public function listar(){
        try{
            $sql = "SELECT id, nombre FROM categorias;";
            $resultado = $this->conexion->query($sql);

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

    /** INSERTAR CATEGORÍA:  Obtiene el valor del "nombre" introducido y lo guarda en la tabla retos. */
    public function alta($nombre){
        try{
            $sql = "INSERT INTO categorias (nombre) VALUES('".$nombre."');";
            $resultado = $this->conexion->query($sql);
            
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

    /** ELIMINAR CATEGORIA: Obtiene el valor del "id" del campo seleccionado y lo elimina de la tabla categorías. */
    public function eliminarCategoria($id){
        $sql = "DELETE FROM categorias WHERE id = '".$id."';";
		$resultado = $this->conexion->query($sql);
        
        return $resultado;
    }

    /** MODIFICAR RETO: Obtiene el valor del "id" y del "nombre" introducido y actualiza el dato de la fila seleccionada anteriormente de la tabla categorías. */
    

}

?>