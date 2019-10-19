/**
 * booleans,string, number, arrays.
 * if, for, while, 
 * 
 */

// Boleans

var esMayor = true;
var esMenor = false;


 if (esMayor) {
     console.log("Se cumple el codigo");
     
 } else {
     if (esMenor == false) {
         console.log("No se cumple la condicion")
     }}
 

 var edad = prompt("ingrese su edad"); // el valor ingresado por el user en el promt es de tipo "string"

typeof(edad); // muestra el tipo de dato de la varialble

if (edad === 23) {
    console.log("son iguales");
} else {
    console.log("son tipos distintos porque el '===' compara los valores dentro de las variables y tambien el tipo de datos");
}

if (edad == 23) {
    console.log("son iguales por que el '==' compara los valores dentro de las variables y No el tipo de datos");
} else {
    console.log("son tipos distintos");
}

edad = Number(edad); // convierte tipo de dato string a number

/// arrays

var nombres = ["juan", "pedro", "sofia", "ezequiel", ];

console.log(nombres);

console.log("El tercer elemento es : " + nombres[2]);

/// for
/* for(variable inicial, condicion de corte, incremental*/

var contador;

for (contador = 0; contador < 10; contador++) {
    console.log("tareda repetida : " + contador);
}

/*
for (let index = 0; index < array.length; index++) {
    const element = array[index];
    
}

index++     suma 1
index--     resta 1
index+= 4   suma 4

*/

console.log(nombres.length); // muestra la cantidad de elementos del array.

for (contador = 0; contador < nombres.length; contador++) {
    console.log("Hola : " + nombres[contador]);
}

//ejercicio

for (var contador = 0; contador < 1000; contador++) {
    console.log("tabla del 5 >> " + contador + " x 5 = " + contador * 5 );
}

// while

contador = 0
while (contador < 10) {
    console.log(contador * 5);
    contador++;
}


