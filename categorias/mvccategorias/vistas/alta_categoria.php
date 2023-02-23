<?php
    require_once "../controladores/controladorcategoria.php";

    $nombre = $_POST['nombre'];
    
    echo 'Nombre: "'.$nombre.'", ';
    if(empty ($_POST['nombre'])){
        echo 'No se puede introducir una categoría en blanco. <a href="./formulario.php">Volver<a>';
    }else{
        $controlador = new ControladorCategorias();
        $consulta = $controlador->alta($nombre);
        if($consulta > 0)
            echo 'La categoría se ha añadido correctamente. <a href="./listar.php">Volver</a>';
    }
?>