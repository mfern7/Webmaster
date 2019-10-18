/**
 * comentario 
 * 
 */

console.log("hola!");

var num1 = "Marcos";
var num2 = 1000;

var num4 = num1+num2;

console.log(num4);
console.log(num2 * 5);

console.log(num2 / 20);

/* error, no continua ejecutando las lineas siguientes

console.log(num10);

*/

// var undefined

var num3;
console.log(num3);

/* prompt("Cual es tu nombre?"); */

var respuesta = prompt("decime tu color:");
alert(respuesta);

console.log(respuesta + ",es el color elegido");

if(respuesta == "marcos") {
    alert("soy" + respuesta);

}