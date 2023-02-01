<?php
    //require_once "conexion.php";
    require_once "procesos.php";

    $nombre = $_POST['nombre'];
    $consulta = new Procesos();

    echo 'Nombre: "'.$nombre.'", ';

    if($nombre == ''){
        echo 'No se puede introducir una categoría en blanco. <a href="formulario.php">Volver<a>';
    }elseif($consulta->alta($nombre)){
        echo 'Se ha añadido correctamente. <a href="listar.php">Inicio</a>';
        // header('Location: listar.php'); // En el caso de poner el header location, nos llevaría directamente a la vista listar sin avisarnos
    }else{
        echo 'No se ha podido añadir por culpa de un error. <a href="formulario.php">Volver</a>';
    }
?>