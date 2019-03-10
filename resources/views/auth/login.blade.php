@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <div class="container-fluid mimin-wrapper">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="card">
                        <div class="modal-header"><h4>{{ __('Inicio de Sesion') }}</h4></div>

                        <div class="modal-body">
                            <form method="POST" action="{{ route('sign_in') }}" aria-label="{{ __('Login') }}">
                                @csrf

                                <div class="form-group" style="margin-top:20px !important;">
                                    <label for="email" class="col-sm-4 col-form-label text-md-right"><h5>{{ __('Nombre de usuario') }}</h5></label>

                                    <div class="form-group" style="margin-top:20px">
                                        <input id="usuario" type="text" class="form-control{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ old('email') }}" required autofocus>

                                        @if ($errors->has('usuario'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('usuario') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group " style="margin-top:20px !important;">
                                    <label for="password" class="col-md-4 col-form-label text-md-right"><h5>{{ __('Password') }}</h5></label>

                                    <div class="form-group" style="margin-top:20px">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <button type="submit" class="btn btn-primary ripple">
                                            {{ __('Ingresar') }}
                                    </button>
                                </div>
                                <div class="text-center" style="padding:5px;">
                                    <a href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste la contraseña?') }} |
                                    </a>
                                    <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
