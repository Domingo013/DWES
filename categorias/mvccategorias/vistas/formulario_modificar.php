<?php
    require_once('../controladores/controladorcategoria.php');

    $id = $_GET['id'];
    $consulta = new Procesos();

    $nombre2 = $consulta->nombre2($id);
    $array = $nombre2->fetch_array(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Domingo Miño Redondo" />
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title>Modificación de categorías</title>
    </head>
    <body>
        <div class="contenedor">	
            <h1 id="titulo">MOFIFICACIÓN DE CATEGORÍAS</h1>
            <form action="modificar.php?id=<?php echo $id; ?>" method="post">
                <label>Nuevo nombre: </label>
                <input name="nombre" value="<?php echo $array["nombre"]?>" type="text" maxlength="100"/>
                <input class="boton" type="submit" name="modificar" value="Modificar"/>
            </form><br>
            <a href="listar.php" class="boton">
                <span>VOLVER</span>
            </a>
        </div>
    </body>
</html>