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
                            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf
                                <!--Inicio columna izquierda forlmualrio-->
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="nombre" type="text" class="form-text" name="nombre" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Nombres') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="apellido" type="text" class="form-text" name="apellido" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Apellidos') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="num_ci" type="text" class="form-text" name="num_ci" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Carnet de Identidad') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="telefono" type="number" class="form-text" name="telefono" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Telefono') }}</label>
                                    </div>
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                              <label>{{ __('Foto Perfil') }}</label>
                                              <br>
                                              <div class="form-group note-group-select-from-files">
                                              <input class="note-image-input form-control" type="file" name="files" accept="img/*" multiple="multiple">
                                              </div>
                                        </div>

                                </div>
                                <!--Fin columna izquierda forlmualrio-->
                                <!--Inicio columna derecha forlmualrio-->
                                <div class="col-md-6">
                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="usuario" type="usuario" class="form-text{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ old('usuario') }}" required>
                                            @if ($errors->has('usuario'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('usuario') }}</strong>
                                                </span>
                                            @endif
                                        <span class="bar"></span>
                                        <label>{{ __('Usuario') }}</label>
                                    </div>

                                     <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="password" type="password" class="form-text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        <span class="bar"></span>
                                        <label>{{ __('Password') }}</label>
                                    </div>

                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="password-confirm" type="password" class="form-text" name="password_confirmation" required>
                                        <span class="bar"></span>
                                        <label >{{ __('Confirme Password') }}</label>
                                    </div>

                                    <div class="form-group form-animate-text" style="margin-top:10px !important;">
                                        <input id="email" type="email" class="form-text{{$errors->has('email') ? 'is-invalid':''}}" name="email" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        <span class="bar"></span>
                                        <label >{{ __('Email') }}</label>
                                    </div>
                                </div>
                                <!--Fin columna derecha forlmualrio-->
                                <div class="col-md-12">
                                    <center>
                                    <button type="submit" class="btn btn-primary">
                                            {{ __('Registrar') }}
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
