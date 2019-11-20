
console.log("Todo esta bien");

// $ --> llamada a Jquery

//$(".lista").addClass("verde");

//addClass / removeClass / toggleClass

//otra forma de agregar una clase, no usar esta forma
//$(".lista-item:nth-child(2)").css({"color": "yellow", "backgroundColor": "purple"});



$(".lista-item").click(function () { 

    $(this).addClass("verde");
    $("h1").toggleClass("rojo");
});

