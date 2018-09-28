@extends('admin.layout')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Tus Empresas</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Empresas</a></li>
                    <li class="breadcrumb-item active">Lista de Empresas</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('contenido')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Actualiza información</h4>
                    <h6 class="card-subtitle">La informacio</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped table_allEmpresarios">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de Servicio</th>
                                <th>Estado</th>
                                <th>Fecha Registro</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('dataTables_allEmpresas')
    <script>
        $('.table_allEmpresarios').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "/api/sitios/{{auth()->user()->id}}",
            "columns": [
                {data: 'nombre'},
                {data: 'tipo_servicio.nombre'},
                {data: 'estado'},
                {data: 'created_at'},


                {
                    render: function (data, type, JsonResultRow, meta) {
                        return '<button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#modalAllEmpresarios"><i class="fa fa-eye"></i></button>' +
                            '<a href="/dashboard/restaurante/'+JsonResultRow.id+'" class="btn waves-effect waves-light btn-danger"><i class="fa fa-pencil"></i></a>'
                    }
                },
            ],
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

    </script>
@endsection