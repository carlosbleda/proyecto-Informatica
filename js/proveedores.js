$(document).ready(

    $('#modificar').click(function() {
        const nombre = $('#nombre_p').val()
        const email = $('#email_P').val()
        const calle = $('#calle_P').val()
        const numero = $('#numero_P').val()
        const esquina = $('#esquina_P').val()
        var action = 'modificar_proveedor'
        $.ajax({

            url: "/admin/proveedores.php",
            type: "POST",
            datatype: 'Type-JSON',
            async: true,
            data: {
                action: action,
                nombre_P: nombre,
                email_P: email,
                calle_P: calle,
                numero_P: numero,
                esquina_p: esquina


            },
            beforeSend: function() {

            },
            success: function(response) {
                /* const respuesta = JSON.parse(response) */
                console.log(response);
                /*   mostrar.html(response) */

            },
            error: function(error) {
                console.log(error);
            }

        });
    })
)