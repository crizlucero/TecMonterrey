function cargarCiudades() {
    $.ajax({
        type: 'GET',
        url: "assets/php/controlador/ciudades.php",
        success: function(data) {
            datos = JSON.parse(data);
            for (var row in datos) {
                //Información
                $('#ciudadesInfo').append('<div>' + datos[row].ciudad + '</div><div>' + datos[row].fecha + '</div>')
                    //Select en form
                $('#ciudad').append($("<option>", { value: datos[row].idCiudad, text: datos[row].ciudad }));
            }
        }
    });
}