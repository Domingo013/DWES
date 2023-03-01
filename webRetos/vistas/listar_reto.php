<?php
    require_once "../controladores/controlador_reto.php";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/5b31d65f7c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/style.css">
        <title>Web Retos</title>
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
            <div id="contenedorTabla">
				<?php
					$controlador = new ControladorCategorias();
					$resultado = $controlador->listar();
					
					if(isset($_GET['nombre'])){
						echo '<h3>¿De verdad quieres eliminar la categoría '.$_GET['nombre'].'?</h3>
						<a href="./eliminar_categoria.php?id='.$_GET['nombre'].'"><button>SÍ</button></a>
						<a href="./listar_categoria.php"><button>NO</button></a>';
					}else{
						$resultado = $controlador->listar();
						
						echo '<table>
								<tr>
									<td>ID</td>
									<td>Nombre</td>
									<td>Eliminar</td>
									<td>Modificar</td>';

						if($resultado->num_rows > 0){
							while($fila = $resultado->fetch_assoc()){
								echo '<tr>
										<td>'.$fila['id'].'</td>
										<td>'.$fila['fechaInIns'].'</td>
                                        <td>'.$fila['fechaFinIns'].'</td>
										<td>'.$fila['fechaInReto'].'</td>
                                        <td>'.$fila['fechaFinReto'].'</td>
										<td>'.$fila['fechaPub'].'</td>
										<td><a href="./listar_categoria.php?nombre='.$fila['nombre'].'$id='.$fila['id'].'">🗑</a></td>
										<td><a href="./formulario_modificar.php?nombre='.$fila["nombre"].'$id='.$fila['id'].'">✏</a></td>';
							}
						}else{
							echo '	<tr>
										<td>No hay categorías</td>
									</tr>';
						}
					}
				?>
			    </table><br>
                <!-- <a href="formulario.php" class="boton">
                    <span>AÑADIR CATEGORÍA</span>
                </a> -->
            </div>
		</div>
	</body>
</html>