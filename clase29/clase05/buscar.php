<!--
<style>
    table {
        border: 1px solid lightgrey;
    }
    
    tr:first-child {
        font-weight: bold;
        color: white;
        background-color: black;
    }
    
    tr:nth-child(2n+3) {
        background-color: red;    
    }

</style>
-->    
<link rel="stylesheet" href="style.css">
<?php

include("conexion.php");

$termino = $_GET['termino'];


$buscar = "SELECT * from libros WHERE titulo LIKE '%$termino%' OR autor LIKE '%$termino%'";

$ej_buscar = mysqli_query($conexion, $buscar);

if ($ej_buscar === false) {
    echo "Error!!! , ver SQL";
} else {
    echo "Funciono!!! <br> <br> <br>";
    }
    
    //mysqli_num_rows: cantidad de resultados
    $cant = mysqli_num_rows($ej_buscar);
    //echo "<br> <br> La cantidad de registro es encontrados es: '$cant'.<br> ";
    if ($cant === 0) {

       echo "No tengo '$termino'";
    }  else {

        echo "tengo '$termino' <br> <br> <br>";

        //abro tabla
        echo "<table>";
        echo "<tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Autor</td>
                <td>Precio</td>       
             </tr>
        ";


        while ($reg = mysqli_fetch_array($ej_buscar)) {
            //cierro php para escribir HTML 
            ?>

                <tr>
                    <td>
                        <?php echo $reg['id_libro']; ?>
                    </td>
                    <td>
                        <?php echo $reg['titulo']; ?>
                    </td>
                    <td>
                        <?php echo $reg['autor']; ?>
                    </td>
                    <td>
                        <?php echo $reg['precio']; ?>
                    </td>
                </tr>
            
            <?php
            //vuelvo a abrir php
        }

        //cierro tabla
        echo "</table>";



    } //Danger zone no escribir nada abajo de esto
    


?>