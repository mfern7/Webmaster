<?php


include("conexion.php");

$borrar = "DELETE FROM libros WHERE id_libro = 44;";


$ej_insertar = mysqli_query($conexion, $borrar);

if ($ej_insertar === true) {
    echo "Funciono!!!!!";
} else {
    echo "Error!, ver SQL";
}

?>