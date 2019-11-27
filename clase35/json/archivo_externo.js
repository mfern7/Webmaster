//Isertar en HTML data de un archivo JSON externo


fetch('paises.json')
    .then(res => {
        return res.json();
    })
    .then( datos => {
        console.log(':D', datos);

        for (var i = 0; i < datos.length; i++) {
            console.log("Pais:", datos[i].nombre);

            // 1.createElement - se usa para crear el elemento HTML    
            var pais = datos[i].nombre
            var itemLista = document.createElement("li");
            itemLista.innerHTML = pais;
        
            // 1.appendChild - se usa para insertar elementos HTML creados con createElement
            lista.appendChild(itemLista);

        }


    })
    .catch(error => {
        console.log('Error:', error);
    });