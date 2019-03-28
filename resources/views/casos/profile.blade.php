@extends('layouts.app')

@section('content')
<div id="content">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-8 col-sm-12">
                <h3 class="animated fadeInLeft">{{ __('Modulo Estandar - Agregar foto') }}</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Agregar foto</h4>
                </div>
                <div class="panel-body" style="padding-bottom:15px;">
                    <div class="col-md-12 panel-body" style="padding-bottom:15px;">
                        <!--Inicio Formulario Registro usuario-->
                        <img width="100px" height="100px" src="{{ asset('uploads/avatars/'.$victima->avatar) }}">
                        <h2>{{ $victima->vic_nombre }}</h2>
                          <div class="form-group form-animate-text" style="margin-top:10px !important;">
                            <label>{{ __('Foto Perfil') }}</label>
                            <br>
                            <div class="form-group note-group-select-from-files">
                                <form enctype="multipart/form-data" method="POST" action="{{ route('caso.profile.update',$victima->id_victima)}}" >
                                  @csrf
                                   @method('PUT')
                                    <div class="form-group">
                                      <div class="col-md-6">
                                        <input type="file" class="form-control" name="avatar" >
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" name="submit">Actualizar</button>
                                      </div>
                                    </div>
                                </form>
                            </div>
                          </div>
                        <!---Fin formulario Registro usurio-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection