<?php
//$usuario = "mf1";
//obtengo el valor del id usuario de preguntar.js
$usuario = $_GET['usuario'];

include("conexion.php");

$existe = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";

$existe_ej = mysqli_query($conexion, $existe);

if ($existe_ej === false) {
    echo("Error de SQL");
} else {
    //echo("vas bien");

    if (mysqli_num_rows($existe_ej) > 0) {
        echo('<img src="triste.jpeg" alt="cara triste">');

    } else {
        echo('<img src="feliz.jpeg" alt="cara feliz">');
    }
}



?>