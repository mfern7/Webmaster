<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentario'];

/*
mail(

    "marcosf9@hotmail.com",
    "probando form",
    "Este es el cuerpomensaje",
    "From: Super sitio <info@superweb>"
);
*/

//mail a mi mail
mail(
    "marcosf9@hotmail.com",
    "Mail desde superweb.com",
    "Contactalo a $nombre por formulario"
    "From: Super sitio <info@superweb>"
)

//mail al usuario
mail(
    $email,
    "superweb - Recibimos tu consulta",
    "recibimos tu consulta por tu comentario: $comentarios"
    "From: Super sitio <info@superweb>"
)


?>