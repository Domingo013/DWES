<?php
    include_once("header.php")
?>
        <?php
            require_once "../controladores/controladorcategoria.php";

            $id = $_GET['id'];
            $nombre = $_GET['nombre'];

            $controlador = new ControladorCategorias();
            $nombre2 = $controlador->nombre2($id);

        ?>
        <div id="contenedor2">
            <div id="contenedor_formulario">
            <h1 id="titulo">MOFIFICACIÓN DE CATEGORÍAS</h1>
                <form action="modificar_categoria.php?id=<?php echo $id; ?>" method="post">
                    <label>Nuevo nombre: </label>
                    <input name="nombre" value="<?php echo $nombre2["nombre"]?>" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="modificar" value="Modificar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
            <div id="contenedor_formulario2">
                <h1 id="titulo">MOFIFICACIÓN DE CATEGORÍAS</h1>
                <form action="modificar_categoria.php?id=<?php echo $id; ?>" method="post">
                    <label>Nuevo nombre: </label>
                    <input name="nombre" value="<?php echo $nombre2["nombre"]?>" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="modificar" value="Modificar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
            <div id="contenedor_formulario3">
                <h1 id="titulo">MOFIFICACIÓN DE CATEGORÍAS</h1>
                <form action="modificar_categoria.php?id=<?php echo $id; ?>" method="post">
                    <label>Nuevo nombre: </label>
                    <input name="nombre" value="<?php echo $nombre2["nombre"]?>" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="modificar" value="Modificar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
        </div>
    </body>
</html>