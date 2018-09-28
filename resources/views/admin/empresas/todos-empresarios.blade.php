@extends('admin.layout')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Todos los Empresarios</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Empresas</a></li>
                    <li class="breadcrumb-item active">All Empresarios</li>
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
                    <h4 class="card-title">Data Table</h4>
                    <h6 class="card-subtitle">Data table example</h6>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped table_allEmpresarios">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Estado</th>
                                <th>Telfono</th>
                                <th>Agregar Servicio</th>
                            </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="modalAllEmpresarios" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Asignar Servicio</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form method="post" action="{{route('asignarServicio')}}">
                    @csrf
                    <div class="modal-body">
                        <label class="control-label">Selecciona el tipo de servicio</label>
                        <select class="form-control custom-select" name="seleccionar_tipoServicio" data-placeholder="Choose a Category" tabindex="1">
                            @foreach($tipoServicios as $tipoServicio)
                                <option value="{{$tipoServicio->id}}">{{$tipoServicio->nombre}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="idEmpresario" name="id_empresario" value="">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Asignar</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->



@section('dataTables_allEmpresarios')
    <script>
        $('.table_allEmpresarios').DataTable({
            "processing": true,
            "serverSide": true,
            "data": null,
            "ajax": "/api/empresarios",
            "columns": [
                {data: 'name'},
                {data: 'apellidos'},
                {data: 'email'},
                {data: 'estado'},
                {data: 'telefono'},

                {
                    render: function (data, type, JsonResultRow, meta) {
                        return '<button type="button" class="btnAsignarServicio btn waves-effect waves-light btn-rounded btn-success" idEmpresario="'+JsonResultRow.id+'" data-toggle="modal" data-target="#modalAllEmpresarios">Asignar Servicio</button>'
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

@stop
