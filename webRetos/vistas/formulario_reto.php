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
            <a href="../index.html">
                <img src="../assets/logo.png" id="logo" />
                <span id="titulo">Retos.evg</span>
            </a>
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
                <h1>Añadir reto</h1><br><br>
                <form action="./alta_reto.php" method="post" id="formulario">
                    Nombre reto:
                    <input type="text" name="nombre"><br><br>
                    Dirigido a:
                    <select name="dirigido">
                        <option>ESO</option>
                        <option>BATCHILLERATO</option>
                        <option>PRIMARIA</option>
                    </select><br><br>
                    Categoría:
                    <select name="cat">
                    <?php 
                        require_once('../controladores/controladorcategoria.php');
                        $controlador = new ControladorCategorias();
                        $categorias = $controlador->listar();
                        if($categorias->num_rows > 0){
                            while($fila = $categorias->fetch_assoc()){
                                echo '<option value="'.$fila['idcategoria'].'">'.$fila['nombre'].'</option>';
                            }
                        }
                        else{
                            echo 'No hay categorias';
                        }
                    ?>
                    </select><br><br>
                    Inicio Inscripción:
                    <input type="date" name="fechaInIns">
                    Fin Inscripción	:
                    <input type="date" name="fechaFinIns"><br><br>
                    Inicio Reto:
                    <input type="date" name="fechaInReto">
                    Fin Reto:
                    <input type="date" name="fechaFinReto"><br><br>
                    Fecha Publicado:
                    <input type="date" name="fechaPub"><br><br>
                    Descripción:
                    <textarea name="descripcion"></textarea><br>
                    Publicar<input type="radio" name="publicado" value="1">
                    No publicar<input type="radio" name="publicado" value="0" checked><br><br>
                    <button id="btnCancelar">CANCELAR</button>
                    <input type="submit" id="btnAceptar" value="Aceptar">
                </form>
            </div>
            <div id="contenedor_formulario2">
                <h1>Añadir reto</h1><br><br>
                <form action="./alta_reto.php" method="post" id="formulario">
                    Nombre reto:
                    <input type="text" name="nombre"><br><br>
                    Dirigido a:
                    <select name="dirigido">
                        <option>ESO</option>
                        <option>BATCHILLERATO</option>
                        <option>PRIMARIA</option>
                    </select><br><br>
                    Inicio Inscripción:
                    <input type="date" name="fechaInIns"><br>
                    Fin Inscripción:
                    <input type="date" name="fechaFinIns"><br><br>
                    Inicio Reto:
                    <input type="date" name="fechaInReto"><br>
                    Fin Reto:
                    <input type="date" name="fechaFinReto"><br><br>
                    Fecha Publicado:
                    <input type="date" name="fechaPub"><br><br>
                    Descripción:
                    <textarea></textarea><br>
                    Publicar<input type="radio" name="publicado" value="1"><br>
                    No publicar<input type="radio" name="publicado" value="0" checked><br><br><br>
                    <button id="btnCancelar">CANCELAR</button>
                    <input type="submit" id="btnAceptar" value="Aceptar">
                </form>
            </div>
            <div id="contenedor_formulario3">
                <h1>Añadir reto</h1><br><br>
                <form action="./alta_reto.php" method="post" id="formulario">
                    Nombre reto:<br>
                    <input type="text" name="nombre"><br><br>
                    Dirigido a:<br>
                    <select name="dirigido">
                        <option>ESO</option>
                        <option>BATCHILLERATO</option>
                        <option>PRIMARIA</option>
                    </select><br><br>
                    Inicio Inscripción:<br>
                    <input type="date" name="fechaInIns"><br>
                    Fin Inscripción:<br>
                    <input type="date" name="fechaFinIns"><br><br>
                    Inicio Reto:<br>
                    <input type="date" name="fechaInReto"><br>
                    Fin Reto:<br>
                    <input type="date" name="fechaFinReto"><br><br>
                    Fecha Publicado:<br>
                    <input type="date" name="fechaPub"><br><br>
                    Descripción:<br>
                    <textarea></textarea><br>
                    Publicar<input type="radio" name="publicado" value="1"><br>
                    No publicar<input type="radio" name="publicado" value="0" checked><br><br><br>
                    <button id="btnCancelar">CANCELAR</button>
                    <input type="submit" id="btnAceptar" value="Aceptar">
                </form>
            </div>
        </div>
    </body>
</html>