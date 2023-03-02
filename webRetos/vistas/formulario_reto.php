<?php
    include_once("header.php")
?>
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