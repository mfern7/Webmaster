<?php
	// login_pr.php
	
	// 0. Conectamos a la DB
	require('conexion.php');
	
	// 1. Conseguimos los datos del form
	$usuario = $_POST['usuario'];
	// Validamos encriptado con encriptado
	$clave = md5($_POST['clave']);
	
	// 2. Creamos la query
	$preguntar = "SELECT * FROM usuarios
				  WHERE
				   usuario = '$usuario'
				   AND
				   clave   = '$clave'";
	
	$p_ej = mysqli_query($conexion, $preguntar);
	
	if ($p_ej === false) {
		// Do not try this at home
		echo "Error, ver SQL: $preguntar";
	} else {		
		if (mysqli_num_rows($p_ej) === 1) {
			echo "Los datos son correctos!";
			
			// Buscar el ID de este usuario
			$reg = mysqli_fetch_array($p_ej);
			//$id = $reg['id_usuario'];
			
			// Creo una variable de sesión con ese ID
			session_start();
			$_SESSION['id'] = $reg['id_usuario'];
			
			// Lo mandamos a interno.php
			header("location: interno.php");
			
		} else {
			echo "INCORRECTO!";
		}
	} // DANGER ZONE
	
?>







