<?php
	// registro_pr.php

	// 0. conectar a la DB
	include('conexion.php'); 

	// 1.conseguir los datos del form
	$nombre = $_POST['nombre'];
	$clave = md5($_POST['clave']);
	$usuario = $_POST['usuario'];
	$email =  $_POST['email']; 

	// 2.Crear la query ()encriptar la clave)
	$insertar = "INSERT INTO usuarios VALUES (NULL,'$usuario','$clave','$nombre','$email')";

	
	// 3.Ejecutar la query
	
	$insertar_ej = mysqli_query($conexion, $insertar);


	// 4. preguntar si funciono

	if ($insertar_ej === true) {
		//echo "Registro insertado";
		//Redireccion a la home
		header("location: index.php");
	} else {

		echo "Errror!";
	}

?>