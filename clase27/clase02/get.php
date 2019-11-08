

<?php

echo "Estas en PHP <br>";

//Metodo para recibir datos por metodo GET
// array asocitivo

echo $_GET['nombre'];

$mi_nombre = $_GET['nombre'];

echo "<br> el nombre es $mi_nombre"." y tiene ".$_GET['edad']." años. <br> <br>";

switch ($mi_nombre) {
    case 'Tim':
        echo "Es tim !!!";
        $nombre = "Tim Burton";
        $imagen = "foto_tim.jpg";
        break;
    case 'Tom':
        echo "Es tom!!!";
        $nombre = "Tom Cruise";
        $imagen = "foto_dave.jpg";
        break;
    case 'Tam':
        echo "Es tam !!!";
        $nombre = "Tam Ara";
        $imagen = "foto_jo.jpg";
        break;
    
    default:
        //para errores
        echo "esa persona no se quien es!!";
        $nombre = "Persona si nombre!!";
        $imagen = "sin_imagen.jpeg";
        break;
}

?>

<h1><?php echo $nombre?></h1>
<img src="<?php echo $imagen ?>" alt="Imagen foto">
