<?php

include("conexion.php");

$buscar = "SELECT * from libros;";

$ej_buscar = mysqli_query($conexion, $buscar);

if ($ej_buscar === false) {
    echo "Error!!! , ver SQL";
} else {
    echo "Funciono!!! <br> <br> <br>";

    // transformar el resultado en un array asociativo
    //muestra solo un regirtro
    //$reg = mysqli_fetch_array($ej_buscar);
    //echo $reg['id_libro'].". ". $reg['titulo']." - ".$reg['autor']," / ".$reg['precio']." // ".$reg['editorial']."<br>";

    //para mostrar todos los registros:
    while ($reg = mysqli_fetch_array($ej_buscar)) {
       
        echo $reg['id_libro'].". ". $reg['titulo']." - ".$reg['autor']," / ".$reg['precio']." // ".$reg['editorial']."<br>";

    }
    
       
    



} //No escribir nada abajo de esto


?>