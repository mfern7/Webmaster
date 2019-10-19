/**
 * 
 * DOM -  documen object model 
 *  js toma la estructura del HTML dentro de document
 */

 console.dir(document);

 // busca dentro de document el id saludo y lo guardo el contenido html en una variable
 var botonSaludo = document.getElementById("saludo");
 var tituloUno = document.getElementById("main-title");
 var mostrarLista = document.getElementById("show-list");
 
console.log(botonSaludo);
console.log(tituloUno);

 //
 botonSaludo.innerText = "hola!"

 botonSaludo.addEventListener("click", function(){
     //alert("curso de JavaScript")}
    botonSaludo.style.color = "red";
    tituloUno.style.color = "red";
 });

// probar funcionamiento
 tituloUno.addEventListener("click", function(){
     tituloUno.style.color = "blue";
 });


mostrarLista.addEventListener("clik", function() {

        mostrarLista.classList.toggle("active");

});
