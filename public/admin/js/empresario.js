//ASIGNAR SERVICIO AL EMPRESARIO

$(document).on('click','.btnAsignarServicio',function () {
    var idEmpresario = $(this).attr('idEmpresario');

    $('#idEmpresario').val(idEmpresario);
});