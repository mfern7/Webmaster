
console.log("Hola!");

// en JS puedo invocar IDs del HTML directamente sin definirlas
// arrow functions --> funcion anonima con nueva sintaxis
conseguir.addEventListener("click", () => {
    fetch("archivo.txt")
        .then((res) => {
            return res.text();

        })
        .then((contenido) => {
            console.log("Aca esta:", contenido);
            respuesta.innerHTML = contenido;

        }) 
        .catch((err) => {
            console.log("Error", err);
        });

 

});