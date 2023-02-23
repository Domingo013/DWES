<?php
	$contrasenia = '';
	$bbdd = 'retos1';
	$usu = 'root';
	$server = 'localhost';
	
	$mysqli = new mysqli($server, $usu, $contrasenia, $bbdd);
	$sentencia = $mysqli->prepare("INSERT INTO categorias (nombre) VALUES (?)"); 
	$sentencia->bind_param('s',$nombre ); 
	$sentencia2 = $mysqli->prepare("INSERT INTO profesores (nombre, correo, password) VALUES (?,?,?)"); 
	$sentencia2->bind_param('sss',$nombre2, $correo, $contrasenia2 ); 

	$i=0;
	while($i<10){
		$correo = 'profesor'.$i.'@gmail.com';
		$contrasenia2 = '12344321';
		$nombre2 = 'profesor '.$i;
		$nombre = 'categoria '.$i; 
		$sentencia2->execute();
		$sentencia->execute(); 
		$i++;
	}
	$sentencia2->close();
	$sentencia->close();
	$mysqli->close();
?>