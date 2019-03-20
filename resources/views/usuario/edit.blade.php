@extends('layouts.app')

@section('content')
<div id="content">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">{{ __('Modulo Administrador - Nuevo Usuario') }}</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Registre los datos de un nuevo usuario del sistema</h4>
                </div>
                <div class="panel-body" style="padding-bottom:15px;">
                    <div class="col-md-12 panel-body" style="padding-bottom:15px;">
                        <!--Inicio Formulario Registro usuario-->
                            <form method="POST" action="{{ route('users.update',$person->id_persona) }}">
                                @csrf
                                    @method('PUT')
                                <!--Inicio columna izquierda forlmualrio-->
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="text" class="form-text" name="p_nombre" value="{{$person->persona_nombre}}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Nombres') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="text" class="form-text" name="p_apellido" value="{{ $person->persona_apellido }}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Apellidos') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="text" class="form-text" name="p_ci" value="{{ $person->persona_ci }}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Carnet de Identidad') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="number" class="form-text" name="p_telefono" value="{{ $person->persona_telefono}}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Telefono') }}</label>
                                    </div>
                                    
                                 </div>
                                <!--Fin columna izquierda forlmualrio-->
                                <!--Inicio columna derecha forlmualrio-->
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input type="usuario" class="form-text" name="p_usua" value="{{ $person->usuario}}" required>
                                        <span class="bar"></span>
                                        <label>{{ __('Usuario') }}</label>
                                    </div>

                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="email" class="form-text" name="p_email" value="{{$person->email}}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Email') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  type="number" class="form-text" name="p_celular" value="{{$person->persona_celular}}" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Celular') }}</label>
                                    </div>
                                </div>
                                <!--Fin columna derecha forlmualrio-->
                                 <div class="col-md-12">
                                    <center>
                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Guardar') }}
                                    </button>
                                    </center>
                                </div>

                            </form>
                        <!---Fin formulario Registro usurio-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection