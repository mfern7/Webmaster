//scope.js


//LET
//block scope

var nombre = "pepe";

if (nombre === "pepe") {
    
    //let mensje = "Hola pepe";
    //el scope de let esta delimitado por todo lo que tenga llaves
    var mensje = "Hola pepe";
}


console.log("Esto da un error si la declaro con let: ", mensje);


