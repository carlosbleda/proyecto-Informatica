$(document).ready(function() {
    $(document).change(function() {

    })
    $('#productos').click(function() {

        mostrar();
    });


});

function mostrar() {
    const action = "productos";


    var html = "";
    var modal = "";

    $.ajax({
        url: "./admin/mostrarproductos.php",
        type: "POST",
        datatype: "Type-JSON",
        async: true,

        data: {
            action: action,
        },
        beforeSend: function() {},

        error: function(error) {
            console.log(error);
        },
    }).done(function(response) {
        console.log(response);


        $("#tablauser").html(response);
        $("#modal").html(modal);
    });
}

function actualizar() {
    const nombre = $("#nombre").val();
    const email = $("#email").val();
    const apellido = $("#apellido").val();
    const fecha = $("#fecha").val();
    const cedula = $("#cedula").val();
    const action = "modificar_usuario";

    $.ajax({
        url: "./admin/mostraruser.php",
        type: "POST",
        datatype: "Type-JSON",
        async: true,

        data: {
            action: action,
            nombre: nombre,
            apellido: apellido,
            email: email,
            fecha: fecha,
            cedula: cedula,
        },
        beforeSend: function() {},

        error: function(error) {
            console.log(error);
        },
    }).done(function(response) {
        console.log(response);
    });
}