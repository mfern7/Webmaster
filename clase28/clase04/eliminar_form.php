<?php


include("conexion.php");

$registro = $_POST['registro'];


$borrar = "DELETE FROM libros WHERE id_libro = $registro;";


$ej_insertar = mysqli_query($conexion, $borrar);

if ($ej_insertar === true) {
    echo "Funciono!!!!!";
} else {
    echo "Error!, ver SQL";
}

?>