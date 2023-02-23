<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5b31d65f7c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/style.css">
        <title>Web retos</title>
    </head>
    <body>
        <header>
            <img src="../assets/logo.png" id="logo" />
            <span id="titulo">Retos.evg</span>
        </header>
        <label id="menu">
            <input type="checkbox" />
            <i class="fa-sharp fa-solid fa-bars" id="iconomenu"></i>
            <div id="menuhamb">
                <ul id="navegador">
                    <li><h2>CATEGORÍAS</h2></li>
                    <li><a href="./listar_categoria.php">LISTAR</a></li>
                    <li><a href="./formulario_categoria.php">AÑADIR</a></li>
                    <li><a href="">ELIMINAR</a></li>
                    <li><a href="./formulario_modificar_categoria.php">MODIFICAR</a></li>
                    <li><h2>RETOS</h2></li>
                    <li><a href="./listar_reto.php">LISTAR</a></li>
                    <li><a href="./formulario_reto.php">AÑADIR</a></li>
                    <li><a href="">ELIMINAR</a></li>
                    <li><a href="./formulario_modificar_reto.php">MODIFICAR</a></li>
                </ul>
            </div>
		</label>
		<div id="contenedor1">
            <ul id="navegador">
                <li><h2>CATEGORÍAS</h2></li>
                <li><a href="./listar_categoria.php">LISTAR</a></li>
                <li><a href="./formulario_categoria.php">AÑADIR</a></li>
                <li><a href="">ELIMINAR</a></li>
                <li><a href="./formulario_modificar_categoria.php">MODIFICAR</a></li>
                <li><h2>RETOS</h2></li>
                <li><a href="./listar_reto.php">LISTAR</a></li>
                <li><a href="./formulario_reto.php">AÑADIR</a></li>
                <li><a href="">ELIMINAR</a></li>
                <li><a href="./formulario_modificar_reto.php">MODIFICAR</a></li>
            </ul>
        </div>
        <div id="contenedor2">
            <div id="contenedor_formulario">
                <h1 id="titulo">ALTA DE CATEGORÍAS</h1>
                <form action="./alta_categoria.php" method="post" id="formulario">
                <label>Nombre Categoría: </label>
                    <input name="nombre" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="enviar" value="Enviar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
            <div id="contenedor_formulario2">
                <h1 id="titulo">ALTA DE CATEGORÍAS</h1>
                <form action="./alta_categoria.php" method="post" id="formulario">
                <label>Nombre Categoría: </label>
                    <input name="nombre" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="enviar" value="Enviar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
            <div id="contenedor_formulario3">
                <h1 id="titulo">ALTA DE CATEGORÍAS</h1>
                <form action="./alta_categoria.php" method="post" id="formulario">
                <label>Nombre Categoría: </label>
                    <input name="nombre" type="text" maxlength="100"/>
                    <input class="boton" type="submit" name="enviar" value="Enviar"/>
                </form><br>
                <!-- <a href="./" class="boton">
                    <span>VOLVER</span>
                </a> -->
            </div>
        </div>
    </body>
</html>