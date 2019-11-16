<?php
	// interno.php
	
	session_start();
	if (isset($_SESSION['id']) === false) {
		header("location: index.php");
	}
	
	// Me conecto a la DB
	require("conexion.php");
	require("funciones.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hola <?php echo traerNombre($_SESSION['id']); ?>!</title>
		<link href="estilos.css" rel="stylesheet">
	</head>

	<body>
		<h1><?php echo traerNombre($_SESSION['id']); ?>, esta es la librería de Don Pepe!</h1>
		
		<a href="agregar.php">Agregar libro</a> |
		<a href="salir.php">Cerrar sesión</a>
		
		<hr>
		
		<?php
			// Listar todos los libros
			$listado = "SELECT * FROM libros";
			$listado_ej = mysqli_query($conexion, $listado);
		?>
		<div class="listado">
		
			<?php
		// Imprimo todos mis libros
		while($reg = mysqli_fetch_array($listado_ej)){
			?>
			<a href="editar.php?id=<?php echo $reg['id_libro']; ?>" class="listado-libro">
				<h2><?php echo $reg['titulo']; ?>
					<span class="listado-libro_autor">
						- <?php echo $reg['autor']; ?>
					</span>
				</h2>
				<img src="<?php echo $reg['cover'];?>" alt="">
				<p>Precio: $<?php echo $reg['precio']; ?></p>
			</a>
			<?php
		} // cierra while
			?>
		</div>
		
	</body>
</html>
