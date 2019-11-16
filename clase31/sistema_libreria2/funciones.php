<?php
	// funciones.php
	
	function traerNombre ($id) {
		include("conexion.php");
		$usuario = mysqli_query($conexion, "SELECT nombre FROM usuarios
							 WHERE id_usuario = $id");
		$reg = mysqli_fetch_array($usuario);
		return $reg['nombre'];
	}
	
?>