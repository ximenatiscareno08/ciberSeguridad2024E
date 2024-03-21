$(document).ready(function() {
    $("#btnEnviar").click(function() {
        var nombre = $("#nombre").val();
        var apellidos = $("#apellidos").val();
        var edad = $("#edad").val();
        var correo = $("#correo").val();
        var contraseña = $("#contraseña").val();

        $.ajax({
            type: "POST",
            url: "registro.php",
            data: { nombre: nombre, apellidos: apellidos, edad: edad, correo: correo, contraseña: contraseña },
            success: function(response) {
                alert(response);
            }
        });
    });
});
