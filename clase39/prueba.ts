
console.log("Hola typescript!!!!!!");

            // variable: tipo
function saludar(nombre: string, apellido?:string) {
    
    if (apellido) {
        return `Hola Mundo y ${nombre} ${apellido}`;
    } else {
        return `Hola Mundo y ${nombre}`;
    }
    
};


console.log(saludar("marcos"));


function generarNombre(nombre: string, apellido = "Perez") {
    
         return `Hola Mundo y ${nombre} ${apellido}`;
   
    };
    


console.log(generarNombre("marcos","fernadnez"));
