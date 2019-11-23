
var data = '{"paises":[{"nombre":"Argentina","poblacion":47000000,"colores":["azul","blanco","celeste"]},{"nombre":"Alemania","poblacion":81000000,"colores":["amarillo","rojo","negro"]}]}';

console.log("DAta es:", data);


var dataJson = JSON.parse(data);

console.log("data Json es:", dataJson.paises);

console.log("El primer pais es: ", dataJson.paises[0].nombre);

console.log("El segundo color del 2 pais es: ", dataJson.paises[1].colores[1]);