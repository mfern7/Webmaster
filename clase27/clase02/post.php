

<?php

//post.php

echo "Nombre: ".$_POST['nombre']."<br>";
$nombre = $_POST['nombre'];

//md5 encriptacion basica
echo "Passsword: ".md5($_POST['passcode'])."<br>";

echo "Pais: ".$_POST['pais']."<br>";

echo "Turno: ".$_POST['turno']."<br>";



// Si no tilda el checkbox se rompe
//echo "Condiciones: ".$_POST['condiciones']."<br>";
//isset --> is X set ?

if (isset($_POST['condiciones']) == true) {
    $c_resp = "acepta cond";
    
} else {
    $c_resp = "NO acepta cond";
}

echo "Condiciones: $c_resp <br>";



?>

<h1><?php echo $nombre?></h1>
