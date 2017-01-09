$(function() {
    $("#btnEnviar").click(function() {
        $.ajax({
            type: 'POST',
            url: 'assets/php/controlador/guardarUsuario.php',
            data: {
                nombre: $("#strname").val(),
                email: $("#stremail").val(),
                ciudad: 1 //$("#strciudad option:selected").val(),
            },
            success: function() {
                alert("Contacto enviado");
            }
        });
    });
});