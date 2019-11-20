
console.log("Todo esta bien");

// $ --> llamada a Jquery

//$(".lista").addClass("verde");

//addClass / removeClass / toggleClass

//otra forma de agregar una clase, no usar esta forma
//$(".lista-item:nth-child(2)").css({"color": "yellow", "backgroundColor": "purple"});

/*
$(".lista-item").click(function () { 

    $(this).addClass("verde");
    $("h1").toggleClass("rojo");
});
*/

// no me
var caja = $("#caja");

// tiempo en ms y funcion callback
$("#mostrar").click( function() {
    caja.slideDown(1000, function(){ alert("termine");});

});


$("#ocultar").click( function() {
    caja.slideUp();

});

//chequear estas dos
$("#aparecer").click( function() {
    caja.fadeIn();
});

$("#desaparecer").click( function() {
    caja.fadeOut();
});
