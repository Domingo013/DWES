<?php
    require_once "../controladores/controlador_reto.php";
    
    if(empty ($_POST['nombre']) || empty ($_POST['fechaInIns']) || empty ($_POST['fechaFinIns']) || empty ($_POST['fechaInReto']) || empty ($_POST['fechaFinReto']) || empty ($_POST['fechaPub'])){
        echo 'No se puede introducir una categoría en blanco. <a href="./formulario_reto.php">Volver<a>';
    }else{
        $controlador = new ControladorRetos();
        $consulta = $controlador->alta($_POST);
        if($consulta > 0)
            echo 'La categoría se ha añadido correctamente. <a href="./listar_reto.php">Volver</a>';
    }
?>