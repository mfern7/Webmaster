<?php
	// login_pr.php
	
	// 0. Consigo los datos
	$usuario = $_POST['usuario'];
	$clave   = md5($_POST['clave']);
	
	// 1. Conecto a la BD
	include("conexion.php");
	
	// 2. Genero la query
	$existe = "SELECT * FROM usuarios
			   WHERE
			      usuario = '$usuario'
				  AND
				  clave   = '$clave'
			  ";
	
	// 3. Ejecuto la query
	$ej = mysqli_query($conexion, $existe);
	
	// 4. Pregunto si NO funcionó
	if($ej === false){
		echo "Error";
	} else {
		//echo "Vas bien, no se si los datos estan ok";
		
		// Pregunto cuántos resultados me devolvió la consulta
		if(mysqli_num_rows($ej) === 1){
			// Averiguar el ID del usuario
			$reg = mysqli_fetch_array($ej);
			
			// Guardarlo en una variable de sesión
		    session_start();
		    $_SESSION['id'] = $reg['id_usuario'];
			
			// Enviarlo al contenido privado
			header("location:interno.php");
			
		} else {
			echo "Datos incorrectos";
		}
		
	}
	
	
?>









