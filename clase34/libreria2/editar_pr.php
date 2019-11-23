<?php
	// editar_pr.php
	include("funciones.php");
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Editar cover</title>
		<link href="estilos.css" rel="stylesheet">
	</head>
	<body>
		<h1>Editar libro</h1>
		
		<?php
			$id = $_GET['id'];
			// echo $id;
		?>
		
		<form action="cover.php" method="post"  enctype="multipart/form-data">
			<input 
			 type ="hidden" 
			 name ="id"
			 value="<?php echo $id; ?>"
			>
			
			Cover:
			<input name="userfile" type="file">
			<br>
			
			<input type="submit" value="Agregar imagen">
		</form>
		
		
		
		
		
		
		
	</body>
</html>





