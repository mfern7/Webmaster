

agregar.addEventListener('click', () => {
    var texto = item.value;
    console.log("se tipeo", texto);

    // 1.createElement - se usa para crear el elemento HTML

    var itemLista = document.createElement("li");
    itemLista.innerHTML = texto;

    // 1.appendChild - se usa para insertar elementos HTML creados con createElement
    lista.appendChild(itemLista);

    
});