<?php

$id_libros = $_GET['id'];
echo "es : $id_libros";


?>

<form action="upload.php" method="post" enctype="multipart/form-data">  
    Enviar un nuevo archivo:
    <br>
    <input name="userfile" type="file" accept=".gif,.jpg,.jpeg,.tiff,.png,.webp">
    <input type="text" name="id_libro" value="<?php echo $id_libros ?>">
    <br>
    <input type="submit" value="Agregar imagen">
</form>