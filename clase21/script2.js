/**
 * 
 * DOM -  documen object model 
 *  js toma la estructura del HTML dentro de document
 */

 console.dir(document);

 // busca dentro de document el id saludo y lo guardo el contenido html en una variable
 var botonSaludo = document.getElementById("saludo");
 var tituloUno = document.getElementById("main-title");
 var tituloDos = document.getElementById("titulo1");

 var mostrarLista = document.getElementById("show-list");
 var lista = document.getElementById("main-ul");

console.log(botonSaludo);
console.log(tituloUno);

 //boton1
 botonSaludo.innerText = "hola!";
 
 botonSaludo.addEventListener("click", function(){
     //alert("curso de JavaScript")}
    botonSaludo.style.color = "red";
    tituloUno.style.color = "red";
 });


// boton2
tituloDos.addEventListener("click", function(){
    tituloUno.style.color = "blue";
 });


 //boton mostrar lal ista

mostrarLista.addEventListener("click", function() {

    lista.classList.toggle("active");

});
