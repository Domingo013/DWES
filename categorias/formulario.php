<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8 />
        <meta content=autor value="Domingo Miño Redondo" />
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title>Alta de categorías</title>
    </head>
    <body>
        <div class="contenedor">
            <h1 id="titulo">ALTA DE CATEGORÍAS</h1>
            <form action="alta.php" method="post" id="formulario">
                <label>Nombre Categoría: </label>
                <input name="nombre" type="text" maxlength="100"/>
                <input class="boton" type="submit" name="enviar" value="Enviar"/>
            </form><br>
            <a href="listar.php" class="boton">
                <span>VOLVER</span>
            </a>
        </div>
    </body>
</html>
