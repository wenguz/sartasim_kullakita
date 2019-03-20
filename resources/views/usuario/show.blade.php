@extends('layouts.app')

@section('content')
<div id="content">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">{{ __('Modulo Administrador - Datos de Perfil') }}</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Los datos personales del usuario actual se muestran a continuacion</h4>
                </div>
                <div class="panel-body" style="padding-bottom:15px;">
                    <div class="col-md-12 panel-body" style="padding-bottom:15px;">
                        <!--Inicio Formulario Registro usuario-->
                                <!--Inicio columna izquierda forlmualrio-->
                                <div class="col-md-6">
                                    <label >{{ __('Foto Perfil') }}</label>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                       <img width="100px" height="100px" src="{{ asset('uploads/avatars/'.$person->avatar) }}">

                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input class="form-text" name="p_nombre" value="{{$person->persona_nombre}}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Nombres') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input class="form-text" name="p_apellido" value="{{ $person->persona_apellido }}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Apellidos') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input   class="form-text" name="p_ci" value="{{ $person->persona_ci }}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Carnet de Identidad') }}</label>
                                    </div>


                                 </div>
                                <!--Fin columna izquierda forlmualrio-->
                                <!--Inicio columna derecha forlmualrio-->
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input type="usuario" class="form-text" name="p_usua" value="{{ $person->usuario}}" disabled="true">
                                        <span class="bar"></span>
                                        <label>{{ __('Usuario') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input class="form-text" name="p_usua" value="{{ $person->password}}" disabled="true">
                                        <span class="bar"></span>
                                        <label>{{ __('Password') }}</label>
                                    </div>

                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  class="form-text" name="p_email" value="{{$person->email}}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Email') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input  class="form-text" name="p_telefono" value="{{ $person->persona_telefono}}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Telefono') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input   class="form-text" name="p_celular" value="{{$person->persona_celular}}" disabled="true">
                                        <span class="bar"></span>
                                        <label >{{ __('Celular') }}</label>
                                    </div>
                                </div>
                                <!--Fin columna derecha forlmualrio-->
                          <!---Fin formulario Registro usurio-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection