<?php
	// cover.php
	
	$id = $_POST['id'];
	
	echo "El ID es $id";
	
	// Configuración
	$folder = "covers/"; // Carpeta a la que queremos subir los archivos
	
	$maxlimit = 6000000; // Máximo límite de tamaño (en bits), menos de 1mb
	
	$allowed_ext = "jpg,png,gif,jpeg"; // Extensiones permitidas (usar una coma para separarlas)
	
	$overwrite = "no"; // Permitir sobreescritura? (yes/no)

	$match = ""; 
	$filesize = $_FILES['userfile']['size']; // toma el tamaño del archivo
	$filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a minúsculas


	if(!$filename || $filename==""){ // mira si no se ha seleccionado ningún archivo
	   $error = "- Ningún archivo selecccionado para subir.<br>";
	}elseif(file_exists($folder.$filename) && $overwrite=="no"){ // comprueba si el archivo existe ya
	   $error = "- El archivo <b>$filename</b> ya existe<br>";
	}

	// comprobar tamaño de archivo
	if($filesize < 1){ // el archivo está vacío
	   $error .= "- Archivo vacío.<br>";
	}elseif($filesize > $maxlimit){ // el archivo supera el máximo
	   $error .= "- Este archivo supera el máximo tamaño permitido.<br>";
	}

	$file_ext = preg_split("/\./",$filename); 
	$allowed_ext = preg_split("/\,/",$allowed_ext); // verifica extension
	foreach($allowed_ext as $ext){
	   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
	}

	if(!$match){
	   $error = "- Este tipo de archivo no est&aacute; permitido: $filename<br>";
	}

	if(isset($error)==true){
	   print "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores
	}else{
	   if(move_uploaded_file(
		$_FILES['userfile']['tmp_name'], 
		$folder.$filename)
		){ // Finalmente sube el archivo
		  print "<b>$filename</b> se ha subido correctamente!"; 
		  
		  // UPDATE
		  include("conexion.php");
		  $update = "UPDATE libros
					 SET cover = '$filename'
					 WHERE id_libro = $id
					 LIMIT 1";
		  $ej = mysqli_query($conexion, $update);
		  if($ej === true){
				echo "Che, todo bien!";
		  } else {
			  echo "Error SQL";
		  }
		  
		  
	   }else{
		  print "Error! Puede que el tamaño supere el máximo permitido por el servidor. Inténtelo de nuevo."; // Otro error
	   }
	}
	
	
	
	
	
	
	
	
?>