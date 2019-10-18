

while (true) {
    var nombre = prompt("Cual es tu nombre");

/* AND = &&
    OR = ||
    EQUAL = ==
    NOT = !=
*/

    if (nombre == "pepe" || nombre == "PEPE" ) {
        alert("gracias!")
        console.log("bienvenido "+ nombre);
        break;
    } else {
        alert("ingresa 'pepe o PEPE' ");
    }


}

var edad = prompt("Cual es tu edad?");
var metal = prompt("te gusta el metal");

if (edad >= 21 && metal == "si") {

    console.log("Bienvenido al bar");

} else {
    consolo.log("No podes pasar");
} 

    

var edad2 = prompt("edad:");

if (edad2 >= 18 ) {
    console.log("podes manejar");

} else {
    var permiso = prompt("tenes permiso?");
    if (permiso == "si" ) {
        console.log("podes manejar");
        
    } else {
        console.log("No podes manejar");
    }   
    
}


