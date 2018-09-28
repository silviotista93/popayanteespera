@extends('admin.layout')

@section('header')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Nueva Empresa</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Empresas</a></li>
                    <li class="breadcrumb-item active">Agregar Empresa</li>
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
                    <h4 class="m-b-0 text-white">Información del Gerente o Administrador de la Empresa</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('empresarioAgregado')}}">
                        @csrf
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('name')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Nombre </label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="enter nombre" value="{{old('name')}}">
                                        {!! $errors->first('name','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('apellidos')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Apellidos</label>
                                        <input type="text" name="apellidos" class="form-control"
                                               placeholder="enter apellidos" value="{{old('apellidos')}}">
                                        {!! $errors->first('apellidos','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('telefono')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Telefono 1</label>
                                        <input type="text" name="telefono" class="form-control"
                                               placeholder="enter telefono 1" value="{{old('telefono')}}">
                                        {!! $errors->first('telefono','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('telefono_2')? 'error':''}}">
                                        <label class="control-label">Telefono 2 (Opcional)</label>
                                        <input type="text" name="telefono_2" class="form-control"
                                               placeholder="enter telefono 2" value="{{old('telefono_2')}}">
                                        {!! $errors->first('telefono_2','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group {{$errors->has('email')? 'error':''}}">
                                        <label class="control-label"><span class="text-danger">*</span> Email</label>
                                        <input type="email" name="email" class="form-control"
                                               placeholder="enter email" value="{{old('email')}}">
                                        {!! $errors->first('email','<span class="help-block">*:message</span>')!!}
                                        <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="rol" value="2">
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="form-actions">
                            <button type="submit" class="btn btn-block btn-success"><i class="fa fa-check"></i> Crear empresario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop