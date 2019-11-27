//Isertar en HTML data de un archivo JSON externo

console.log('ksdflsf');


fetch('https://api.openweathermap.org/data/2.5/weather?q=Buenos%20Aires&units=metric&appid=098f139cd33ee4a524c9831f38974f51')
    .then(res => {
        return res.json();
    })
    .then( datos => {
        console.log(':D', datos);

       // https://openweathermap.org/img/w/04n.png

       // console.log(datos.weather[0].icon);
       var icono = `https://openweathermap.org/img/w/${datos.weather[0].icon}.png`;

       var imagen = document.createElement("img");
       imagen.setAttribute('src', icono);
   
       // 1.appendChild - se usa para insertar elementos HTML creados con createElement
       clima.appendChild(imagen);


       //clima.innerHTML = `<img src="${icono}" alt="Imagen clima">`;


        //parseInt --> transforma a un numero entero
        //var temperatura = parseInt(datos.main.temp);

        //Math.ceil //Math.floor // Math.round 
        var temperatura = Math.round(datos.main.temp);


        //con ${} invoco el contenido del array
        imgcono.innerHTML = `En ${datos.name} hacen  ${temperatura} C grados`;


    })
    .catch(error => {
        console.log('Error:', error);
    });