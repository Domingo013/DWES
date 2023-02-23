<?php 

require_once '../config/configdb.php';

class ModeloRetos {

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

    public function alta($retoDatos){

        $descripcion = $retoDatos['descripcion'];
        if(empty($descripcion)){
            $descripcion = 'NULL';
        }
        else{
            $descripcion = "'$descripcion'";
        }

        $sql= "INSERT INTO retos (nombre, dirigido, descripcion, fechaInicioInscripcion, fechaFinInscripcion, fechaInicioReto, fechaFinReto, fechaPublicacion, publicado, idprofesor, idcategoria) 
        VALUES ('".$retoDatos['nombre']."', '".$retoDatos['dirigido']."', ".$descripcion.", '".$retoDatos['fechaInIns']."', '".$retoDatos['fechaFinIns']."', '".$retoDatos['fechaInReto']."', '".$retoDatos['fechaFinReto']."', '".$retoDatos['fechaPub']."', '".$retoDatos['publicado']."', '1', '".$retoDatos['cat']."');";
        
        echo $sql;
        echo $retoDatos['cat'];

        try{
            $resultado = $this->conexion->query($sql);
            return $resultado;
        }catch(Exception $e){
            //echo $e->getMessage();
            //echo $e->getCode();
            echo 'No se ha creado el reto devido a un fallo';
            if($e->getCode()=='1062'){
                echo 'No puedes añadir una categoría que ya existe <a href="formulario_reto.php" class="boton">
                                                                        <span>Volver</span>
                                                                    </a>';
            }
        }die();
    }
}
?>