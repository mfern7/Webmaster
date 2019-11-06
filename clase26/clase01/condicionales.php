<?php
    $edadUsuario = 45;
    if ($edadUsuario >= 18) {
        
        $resultado = "mayor";

    } else {

        $resultado = "menor";
        
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>condicionales PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>

</head>
<body class="<?php echo $resultado ?>">
    <h1>Titulo principal</h1>

    <?php

        $edad = 10;

        if ($edad >= 18) {
            echo "Sos un adulto";

        } else {

            echo "oh no ...";
            $suma = $edad + 20;
            echo "deberias tener un poco mas ...".$suma;
            echo "<br>";
        }


    ?>

<?php
// switch


        $dia = date("N");

        switch ($dia) {

            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "MArtes";
                break;
            case 3:
                echo "Miercoles";
                break;

            default:
                echo "$dia no es un dia de la semana";
                break;
        }

        //functions
        echo "<br>";
        echo date("d/m/Y H:i:s");
        echo "<br>";

        //functions
        function precioTotal($precio, $cant) {

            $preciomultiplicar = $precio * $cant;
            return $preciomultiplicar;
        }

        echo precioTotal(10,10);

        echo "<br>";
        echo "----------------------------------------";
        echo "<br>";

        //arrays
        $diaSemana = array(date("l"), "martes","miercoles", "jueves", "viernes",1000);

        $diaSemana[7] = "Domingo";

        echo "Hoy es ".$diaSemana[0]." y mañana será ".$diaSemana[4];
        echo "<br>";
        echo "La semana tiene ".count($diaSemana)." dias. El ultimo elemento es ".$diaSemana[count($diaSemana)];

        echo "<br>";
        

?>
<hr>

<?php
// arrays asociativos

$registro = array(
        'titulo' => "harry potter",
        'autor' => "Rowling",
        'precio' => 10000
        
);

echo "El titulo es: ".$registro['titulo'];

$libros['titulo'] = "HARRY POTTER";
$libros['autor'] = "ROWLING";
$libros['precio'] = 2000;
echo "<br>";
echo "El precio del libro ".$libros['titulo']." y el auto es ".$libros['autor'];

echo "<br>";

$numeros = array(542,45,89,123);

foreach ($numeros as $valor) {

    echo "el valor es : $valor <br>";

} 

// random

echo rand();
echo "<br>";
echo rand(50,200);



?>


</body>
</html>