
console.log("vas bien");
//Blur se usa para, focus
usuario.addEventListener("blur", (evento) => {console.log("dejaste de escribir");
        //(evento) busca info del evento, ver en console de chrome
        //console.log(evento);
        var nombreUsuario = evento.target.value;


        var x = new XMLHttpRequest();

        //chequea que la resultado del request de status 200 y state 4
        x.addEventListener("readystatechange", () => {
            if (x.readyState === 4 && x.status === 200) {
                // mostrar img
                //console.log("ok");
                //modifica el contenido del <div id=respuesta> en registro.php y le injecta el contenido del request con .responseText (del preguntar.php)
                respuesta.innerHTML = x.responseText;

            } else {
                console.log("status:", x.status);
                console.log("status:", x.readyState);
            }

        });


        x.open("GET", "preguntar.php?usuario=" + nombreUsuario, true);
        x.send();



});