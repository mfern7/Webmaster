<?php
/*
1.conectar a la DB
2.Crear la query
3.ejecutarla
4.preguntar si funciono
*/

//1
include("conexion.php");

//2
/* En la query SQL usar "" para poder ejecutar varibles con ''
*/
$insertar = "INSERT INTO libros
            VALUES (
                NULL,
                'Harry Potter6',
                'Rowling',
                546,
                2020,
                'Salamandra'
            )";
//3
// mysqli_query(conexion, query)
/*
ver funciones en php.net
*/
$ej_insertar = mysqli_query($conexion, $insertar);

//4
/* para isert, delete, update la variable pueda dar TRUE o FALSE
para SELECT si falla da FALSE y si no devuelve el dato
*/
if ($ej_insertar === true) {
    echo "Funciono";
} else {
    echo "Error!, ver SQL";
}
/*
Analizar errores:
1)ver el error de PHP si lo tira
2)Si muestra "Error!, ver SQL" es porque seguramente el error esta en la query SQL

*/



?>