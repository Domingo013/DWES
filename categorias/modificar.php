<?php
    require_once "conexion.php";
    require_once "procesos.php";

    $id = $_GET['id'];
    $nombre2 = $_POST['nombre'];
    $consulta = new Procesos();

    echo 'id: "'.$id.'" con nombre: "'.$nombre2.'", ';

    if($consulta->modificar($id, $nombre2)){
        echo 'Se ha modificado correctamente. <a href="listar.php">Inicio</a>';
        // header('Location: listar.php'); // En el caso de poner el header location, nos llevaría directamente a la vista listar sin avisarnos
    }
    else{
        echo 'No se ha podido añadir por culpa de un error. <a href="formulario.php">Volver</a>';
    }
?>