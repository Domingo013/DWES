<?php
    require_once "conexion.php";
    require_once "procesos.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
        <meta content="autor" value="Domingo Miño Redondo" />
        <link rel="stylesheet" type="text/css" href="estilo.css"/>
        <title>Listado de categorías</title>
	</head>
	<body>
		<div class="contenedor">
			<h1 id="titulo">LISTADO DE CATEGORÍAS</h1>
			<table>
				<th>ID</th>
				<th>NOMBRE</th>
				<th>ELIMINAR</th>
				<th>MODIFICAR</th>
				<?php
					$procesos = new Procesos();
					
					$sql = "SELECT id, nombre FROM categorias;";
					$resultado = $procesos->listar($sql);	

					if($resultado == ''){
						echo "<h1>No hay categorías creadas</h1>";
					}else{
						foreach($resultado as $mostrar){
							echo '	<tr>	
										<td>'.$mostrar['id'].'</td>
										<td>'.$mostrar['nombre'].'</td>
										<td><a href="baja.php?id='.$mostrar["id"].'">🗑</a></td>
										<td><a href="formulario_modificar.php?id='.$mostrar["id"].'">✏</a></td>
									</tr>';
						};
					};
					
				?>
			</table><br>
			<a href="formulario.php" class="boton">
				<span>AÑADIR CATEGORÍA</span>
			</a>
		</div>
	</body>
</html>