$(document).ready(function(){   //esta funcion se ejecuta cuando se inicia el documento 


$(".LogIn").click(function(){//esta funcion se ejecuta cuando se precione el boton para loguearte

u=$(".text").val();
p=$(".password").val();
var datos='dat={"usuario": "'+u+'", "password":"'+p+'"}';

    $.ajax({
        data: datos,
        type: 'GET',
        dataType: "json",
        url: '../PHP/Inicio.php',
        success: function(res) {
            $.each(res,function(i,v){
                alert('Bienvenido '+v.nombre + ' ' +v.apellido);    
            });
        },
        error: function() {
            alert("Contraseña o Usuario incorrectas, por favor reintentarlo");
         }, 
       });
    });
});
