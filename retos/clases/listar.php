<?php
    require_once "../configuracion/config.php";
    require_once "procesos.php";
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
        <meta content="autor" value="Domingo Miño Redondo" />
        <link rel="stylesheet" type="text/css" href="../estilos/estilo.css"/>
        <title>Listado de categorías</title>
	</head>
	<body>
		<header>
			<a href="formulario.php" class="boton">
				<span>AÑADIR CATEGORÍA</span>
			</a>
			<a href="formulario.php" class="boton">
				<span>ELIMINAR CATEGORÍA</span>
			</a>
			<a href="formulario_modificar.php" class="boton">
				<span>MODIFICAR CATEGORÍA</span>
			</a>
		</header>
		<div class="contenedor">
			<h1 id="titulo">LISTADO DE CATEGORÍAS</h1>
			<table>
				<th>ID</th>
				<th>NOMBRE</th>
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
									</tr>';
						};
					};
				?>
			</table>
		</div>
	</body>
</html>