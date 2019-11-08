

<?php

//for

for ($i = 0; $i < 10; $i++) {

    echo "Estas en la vuelta $i";
    echo "<br> <br>";

}

echo "Termino! <br> <br>";

//while

$mi_numero = 10;
$random = rand(0,50);
$cont = 1;

while ($mi_numero !== $random) {
    $random = rand(0,50);
    echo "No, perdiste... el numero es $random";
    echo "<br>";
    $cont = $cont + 1;
}

echo "Ganaste!";
echo "lo intentaste $cont veces";



?>
