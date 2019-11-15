<?php
	// login_pr.php
	
	require('conexion.php');

	$usuario = $_POST['usuario'];

	$clave = md5($_POST['clave']);

//2. Creamos la query

$preguntar = "SELECT * FROM usuarios WHERE  usuario = '$usuario' AND clave = '$clave'";


//3.ejecuto la query

$p_ej = mysqli_query($conexion, $preguntar);

if ($p_ej === false) {
	echo "Error, ver SQL: $preguntar";
} else {

	if(mysqli_num_rows($p_ej) === 1) {

		echo "los datos son correctos";

		//Buscar el id de este usuario
		$reg = mysqli_fetch_array($p_ej);
		echo "El usuario es: ";
		echo $reg['id_usuario'];
		$id = $reg['id_usuario'];

		//Creo una variable con ese ID
		session_start();
		$_SESSION['id'] = $id;

		//redirecciono al user a la pagina interna
		header("location: interno.php");

		} else {
		
			echo "Los datos son incorrectos";
	}

}



?>