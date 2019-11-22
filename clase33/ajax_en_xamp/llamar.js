
console.log("Hola!");

// en JS puedo invocar IDs del HTML directamente sin definirlas
// arrow functions --> funcion anonima con nueva sintaxis
conseguir.addEventListener("click", () => {
    console.log("Se hizo click");

    var x = new XMLHttpRequest();

    x.addEventListener("readystatechange", () => {

        if (x.status === 200 && x.readyState === 4) {
            console.log("termino de cargar");

            respuesta.innerHTML = x.responseText;

        } else {
            console.log("Estado:", x.readyState);
            console.log("status:", x.status);
        }
    });

    //     metodo, archivo,     async
    //x.open("GET", "archivo.txtXXXX", true);
    x.open("GET", "archivo.txt", true);
    x.send();



});