console.log("Hola typescript!!!!!!");
// variable: tipo
function saludar(nombre, apellido) {
    if (apellido) {
        return "Hola Mundo y " + nombre + " " + apellido;
    }
    else {
        return "Hola Mundo y " + nombre;
    }
}
;
console.log(saludar("marcos"));
function generarNombre(nombre, apellido) {
    if (apellido === void 0) { apellido = "Perez"; }
    return "Hola Mundo y " + nombre + " " + apellido;
}
;
console.log(generarNombre("marcos", "fernadnez"));
