<?php

    require_once('../controladores/controladorcategoria.php');

    $datos = $_GET;

    $controlador = new ControladorCategorias();
    $resultado = $controlador->eliminar($datos);
    
?>