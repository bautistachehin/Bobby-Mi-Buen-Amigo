$(document).ready(function(){   //esta funcion se ejecuta cuando se inicia el documento 


$(".LogIn").click(function(){//esta funcion se ejecuta cuando se precione el boton para loguearte

    $.ajax({
        data: {"usuario": ".text", "password": ".password"},
        type: 'POST',
        dataType: "json",
        url: 'http://localhost/RegistroBoby/PHP/Inicio.php',
        success: function() {
        alert("Has iniciado sesion");    
        },
        error: function() {
            alert("Contraseña o Usuario incorrectas, por favor reintentarlo");
         }, 
       });
    });
});
