<?php
	// editar.php
	include("funciones.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Agregar cover a un libro</title>
		<link href="estilos.css" rel="stylesheet">
	</head>
	<body>
		<h1>Editar libro</h1>
		
		<?php
	include("conexion.php");
	$buscar = "SELECT * FROM libros
			   WHERE cover IS NULL";
	$ej = mysqli_query($conexion, $buscar);
	
	if($ej === false){
		echo "Error, ver SQL";
	} else {
		echo "Vas bien";
		
		// Preguntamos si hay resultados
		if(mysqli_num_rows($ej) === 0){
			echo "Yay! Todos los libros tienen cover.";
		} else {
			
			echo "<ul>";
			while(
			  $reg = mysqli_fetch_array($ej)
			){
	//echo "<li>" . $reg['titulo'] . "</li>";
	
	?>
			<li>
			<?php echo $reg['titulo']; ?>
			- 
			<?php echo $reg['autor']; ?>
	<a href="editar_pr.php?id=<?php 
		echo $reg['id_libro'];
	?>">
		<img src="iconos/editar.png" alt="Agregar cover">
	</a>
		</li>
	<?php
	
			}
			echo "</ul>";
			
			
		} // Cierra else de cant. resultados
	}
		?>
		
		
			
		
		
		
	</body>
</html>






