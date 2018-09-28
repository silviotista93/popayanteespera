@extends('admin.layout')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Agregue un nuevo Restaurante</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Empresas</a></li>
                    <li class="breadcrumb-item active">Actualizar Información</li>
                </ol>
            </div>
        </div>
    </div>
@stop

@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Información Basica</h4>
                </div>
                <div class="card-body">
                    <form action="/dashboard/restaurante-actualizado/{{$sitio->id}}" method="post">
                        @csrf {{method_field('PUT')}}
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('nombre')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Nombre del
                                            Restaurante</label>
                                        <input type="text" name="nombre" class="form-control"
                                               placeholder="enter nombre" value="{{ old('nombre',$sitio->nombre) }}">
                                        {!! $errors->first('nombre','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('direccion')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span>
                                            Dirección</label>
                                        <input type="text" name="direccion" class="form-control"
                                               placeholder="enter direccion"
                                               value="{{ old('direccion',$sitio->direccion)}}">
                                        {!! $errors->first('direccion','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('telefono')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Telefono
                                            1</label>
                                        <input type="text" name="telefono" class="form-control"
                                               placeholder="enter telefono 1"
                                               value="{{ old('telefono',$sitio->telefono)}}">
                                        {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Telefono 2 (Opcional)</label>
                                        <input type="text" name="telefono_2" class="form-control"
                                               placeholder="enter telefono 2"
                                               value="{{ old('telefono_2',$sitio->telefono_2)}}">
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="card-body">
                                        <label class="card-title"><span class="text-danger">*</span> Breve
                                            Descripción</label>
                                        <div class="form-group {{$errors->has('breve_descripcion')? 'error':''}}">
                                                    <textarea class="form-control" name="breve_descripcion" rows="7"
                                                              placeholder="enter breve descripcion ...">{{ old('breve_descripcion',$sitio->breve_descripcion)}}</textarea>
                                            {!! $errors->first('breve_descripcion','<span class="help-block">*:message</span>')!!}
                                        </div>
                                    </div>

                                </div>
                                <div class="col-5">
                                    <div class="card-body">
                                        <label class="card-title"><span class="text-danger">*</span> Subir
                                            Imagen</label>
                                        <div class="form-group">
                                            <div class="widget-user-image dropzone dropzoneImagen dz-clickable"
                                                 style="border: 0px !important; background-color:rgba(0, 0, 0, 0);">
                                                @if($sitio->imagen == null)
                                                    <div class="dropzone dropzoneImagen">

                                                    </div>
                                                @else
                                                    <img class="card-img-top img-responsive" width="10"
                                                         src="{{$sitio->imagen}}" alt="Card image cap">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: -107px;">
                                <div class="col-8">
                                    <div class="card-body">
                                        <label class="card-title"><span class="text-danger">*</span> Descripción</label>
                                        <div class="form-group {{$errors->has('descripcion')? 'error':''}}">
                                                    <textarea name="descripcion"
                                                              class="textarea_editor_restaurant form-control" rows="11"
                                                              placeholder="Enter text ...">{{ old('descripcion',$sitio->descripcion)}}</textarea>
                                            {!! $errors->first('descripcion','<span class="help-block">*:message</span>')!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card-body">
                                        <label class="card-title"><span class="text-danger">*</span> Subir
                                            Foto del Sitio</label>
                                            <div class="widget-user-image dropzone dropzoneFotoSitio dz-clickable"
                                                 style="border: 0px !important; background-color:rgba(0, 0, 0, 0);">
                                                @if($sitio->foto_sitio == null)
                                                    <div class="dropzone dropzoneFotoSitio">

                                                    </div>
                                                @else
                                                    <img class="card-img-top img-responsive" width="10"
                                                         src="{{$sitio->foto_sitio}}" alt="Card image cap">
                                                @endif
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        <!--/row-->
                        <div class="row" style="margin-top: -30px">
                            <div class="col-6">
                                <div class="card-body">
                                    <label class="control-label">Selecciona Categoria</label>
                                    <select class="form-control custom-select" name="id_tipoRestaurante" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">Selecciona Categoria</option>
                                        @foreach($tipoRestaurantes as $tipoRestaurante)
                                            <option value="{{$tipoRestaurante->id}}">{{$tipoRestaurante->categoria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="hidden" name="imagen" value="{{$sitio->imagen}}" id="inputImagen">
                            <input type="hidden" name="foto_sitio" value="{{$sitio->foto_sitio}}" id="inputFotoSitio">
                            <button type="submit" class="btn btn-block btn-success pull-right"><i
                                        class="fa fa-check"></i> Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('editorHTMLRestaurant')
    <script>
        $(document).ready(function () {

            $('.textarea_editor_restaurant').wysihtml5();


        });
    </script>
@stop
@stop
@section('dropzoneImagen')
    <script>
       new Dropzone('.dropzoneImagen', {
            url: '{{route('imagenRestaurant')}}',
            dictDefaultMessage: 'Click para subir imagen',
            acceptedFiles: 'image/*',
            paramName: 'imagen',
            maxFiles: 1,
            headers: {

                'X-CSRF-TOKEN': '{{csrf_token()}}'

            },
            success: function (file, response) {

                $('#inputImagen').val(response);
            }

        });
        Dropzone.autoDiscover = false;

    </script>

@endsection
@section('dropzoneFotoSitio')
    <script>
        new Dropzone('.dropzoneFotoSitio', {
            url: '{{route('fotoSitioRestaurant')}}',
            dictDefaultMessage: 'Click para subir imagen',
            acceptedFiles: 'image/*',
            paramName: 'foto_sitio',
            maxFiles: 1,
            headers: {

                'X-CSRF-TOKEN': '{{csrf_token()}}'

            },
            success: function (file, response) {

                $('#inputFotoSitio').val(response);
            }

        });
        Dropzone.autoDiscover = false;

    </script>

@endsection