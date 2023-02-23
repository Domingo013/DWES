<?php
    require_once "../controladores/controladorcategoria.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
        <meta content="autor" value="Domingo Miño Redondo" />
        <link rel="stylesheet" type="text/css" href="../estilos/style.css"/>
        <title>Listado de categorías</title>
	</head>
	<body>
		<div class="contenedor">
				<?php
					$controlador = new ControladorCategorias();
					$resultado = $controlador->listar();
					
					if(isset($_GET['nombre'])){
						echo '<h3>¿De verdad quieres eliminar la categoría '.$_GET['nombre'].'?</h3>
						<button><a href="./eliminar_categoria.php?id='.$_GET['nombre'].'">SÍ</a></button>
						<button><a href="./listar.php">NO</a></button>';
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
										<td>'.$fila['nombre'].'</td>
										<td><a href="./listar.php?nombre='.$fila['nombre'].'$id='.$fila['id'].'">🗑</a></td>
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
	</body>
</html>