<?php
    require_once "../controladores/controladorcategoria.php";
    include_once("header.php")
?>
		<div id="contenedor2">
            <div id="contenedorTabla">
				<?php
					$controlador = new ControladorCategorias();
					$resultado = $controlador->listar();
					
					if(isset($_GET['id'])){
						echo '<h3>¿De verdad quieres eliminar la categoría </h3>
						<a href="./eliminar_categoria.php?id='.$_GET['id'].'"><button>SÍ</button></a>
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
										<td>'.$fila['nombre'].'</td>
										<td><a href="./listar_categoria.php?id='.$fila["id"].'"">🗑</a></td>
										<td><a href="./formulario_modificar_categoria.php?nombre='.$fila["nombre"].'$id='.$fila['id'].'">✏</a></td>';
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