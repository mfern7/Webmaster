
//seleccion por ID
var title = document.getElementById("title");

title.innerText = "Titulo modificado con js";

//classlist.add agrega una clase desde index.css
title.classList.add("big-font");


//Seleccion por etiquetas y clases
// querySelector selecciona el primer tag que encuentra
// var title2 = document.querySelector("h2");

// Seleccion por clases
var title2 = document.querySelector(".secondary-title");

title2.style.color = "green";

//Seleccion por selector usando queryselectorAll
//Selecciona todos las clases
var listItems = document.querySelectorAll(".js-properties-item");
listItems.innerText = "texto de js";

console.log(listItems);

for(var i = 0; i < listItems.length; i++) {

    listItems[i].classList.add("red");

}

//seleccciono el segundo item y le agrego 2 clases
listItems[2].classList.add("big-font", "back");

