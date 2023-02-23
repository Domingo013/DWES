<?php

    require_once('../controladores/controladorcategoria.php');

    $id = $_GET['id'];

    $controlador = new ControladorCategorias();
    $resultado = $controlador->eliminar($id);
    
?>