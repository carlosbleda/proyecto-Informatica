$(document).ready(function() {
    $(document).change(function() {

    })
    $('#usuario').click(function() {
        mostrar();
    })

});

function mostrar() {
    const action = "datos";
    const boton = $("#mostrar_user");

    var html = "";
    var modal = "";

    $.ajax({
        url: "./admin/mostraruser.php",
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
        var obj = JSON.parse(response);
        for (let index = 1; index < obj.length; index++) {
            var nombre = obj[index].nombre;
            var id = obj[index].id_persona;
            var apellido = obj[index].apellido;
            var email = obj[index].email;

            html += `<tr>
<th scope="row">${id}</th>
<td>${nombre}</td>
<td>${apellido}</td>
<td>${email}</td>
<td><button type="button" id='editar${index}' data-bs-toggle="modal" data-bs-target="#modal${index}" class="btn btn-outline-primary">editar</button></td>

</tr>

`;

            modal += `<div>
            <div class="modal fade" id='modal${index}' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Modificar usuario</h5>
        </div>
        <div class="modal-body">
            <form action="" class="needs-validation" method="post" novalidate enctype="multipart/form-data">
                <div class="form-row">
                
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nombre 
                            <input type="text" class="form-control" id="nombre" value="${obj[index].nombre}"placeholder=""></label>
                           
                        </div>
                       
                </div>
                
                <div class="form-group">
                    <label for="inputAddress">email</label>
                    <input type="email" class="form-control" id="email" value="${obj[index].email}" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">apellido</label>
                    <input type="text" class="form-control" id="apellido" value="${obj[index].apellido}" placeholder="">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Fecha Nacimiento </label>
                        <input type="date" class="form-control" value="${obj[index].fecha_nac}" id="fecha">
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cedula </label>
                        <input type="number" class="form-control"  value="${obj[index].cedula}" id="cedula">
                    </div>
                  
                    
                </div>
             
                <button type="button" class="btn btn-primary" onclick="actualizar()" id="modificar_usuario">Modificar usuario</button>
                
               
               
            </form>
        </div>
    </div>
   
</div>
</div>
</div>
`;
        }
        $("#tablauser").html(html);
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