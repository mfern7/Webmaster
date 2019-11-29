//scope.js

//console.log("todo ok");

var edad;

function mostrarEdad() {
    //function scope, el scope the var esta delimitado solo por las functions

    var edad = 45;    
}

mostrarEdad();

//esto sigue dando error
console.log("La edad es :", edad);

