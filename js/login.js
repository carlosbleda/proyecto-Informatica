$(document).ready(function() {
    if (window.sessionStorage.getItem('nombre') == true) {
        var usuario = window.sessionStorage.getItem('nombre')


    }

    $('#ingresar').click(function() {
        login();
    });
    $('#registrarse').click(function() {
        registro()
    })
})

function login() {
    const action = "login";
    const user = $("#correo").val();
    const pass = $("#pass").val();
    var html = ''
    var modal = "";


    $.ajax({
        url: "./admin/login.php",
        type: "POST",
        datatype: "Type-JSON",
        async: true,

        data: {
            action: action,
            correo: user,
            pass: pass
        },
        beforeSend: function() {},

        error: function(error) {
            console.log(error);
        },
    }).done(function(response) {
        console.log(response);
        if (response == 'usuario y contraseña incorrecto') {
            alert(response);

        } else {
            if (response == 'admin') {
                window.location.href = "usuarios.php"
            } else {
                window.sessionStorage.setItem('nombre', response)
                html = ` <i class="fa-solid fa-user">${response}</i>
`
                $('#acceder').html('<a class="dropdown-item" id="acceder" href="index.php">Cerrar Sesion</a></li>')
                $('#crear_cuenta').hide()
                alert('Bienvenido' + response)
                $('#user').html(html);
                $('#login').modal('hide')
            }
        }
    });
}

function registro() {
    const action = "registro";
    const boton = $("#mostrar_user");
    const nombre = $("#nombre_r").val();
    const apellido = $("#apellido_r").val();
    const pass = $("#pass_r").val();
    const email = $("#correo_r").val();
    const fecha = $("#fecha_nac_r").val();
    const cedula = $("#cedula_r").val();
    var html = "";
    var modal = "";

    $.ajax({
        url: "./admin/login.php",
        type: "POST",
        datatype: "Type-JSON",
        async: true,

        data: {
            action: action,
            nombre: nombre,
            apellido: apellido,
            email: email,
            fecha: fecha,
            pass: pass,
            cedula: cedula,
        },
        beforeSend: function() {},

        error: function(error) {
            console.log(error);
        },
    }).done(function(response) {
        console.log(response);
        var obj = JSON.parse(response);

    });


}