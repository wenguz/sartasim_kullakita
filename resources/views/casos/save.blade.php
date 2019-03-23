@extends('layouts.app')
@section('content')
<div id="content">
    <div class="panel">
        <div class="panel-body">
            <div class="col-md-6 col-sm-12">
                <h3 class="animated fadeInLeft">{{ __('Modulo Estandar- Nuevo Caso') }}</h3>
            </div>
        </div>
    </div>
    <div class="form-element">
        <div class="col-md-12">
            <div class="panel form-element-padding">
                <div class="panel-heading">
                    <h4>Registre los datos de un nuevo caso</h4>
                </div>
                <div class="panel-body" style="padding-bottom:15px;">
                    <!--Inicio Botones encabezado-->
                          <div class="col-md-9 padding-0" style="padding-bottom:20px;">
                            <a class="btn btn-success mb-3" href="agregar_ingreso_1.html">Nuevo Ingreso</a>
                          </div>
                          <div class="col-md-3 btn-group padding-0" role="group" aria-label="...">
                            <a class="btn btn-danger mb-3" href="agregar_ingreso_1.html">Parte 1</a>
                            <a class="btn btn-default  mb-3" href="agregar_ingreso_2.html">Parte 2</a>
                            <a class="btn btn-default mb-3" href="agregar_ingreso_3.html">Parte 3</a>
                          </div>
                          <!--Fin Botones encabezado-->
                    <div class="col-md-12 panel-body" style="padding-bottom:15px;">
                        <!--Inicio Formulario Registro usuario-->
                            <form method="POST" action="{{ route('casos.store') }}" aria-label="{{ __('Register') }}">
                                @csrf
                                <div class="col-md-12">
                                    <!--Inicio seccion 1-->
                                      <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                                        <a class="media-heading">1.- Datos Personales </a>
                                        <div class="media-body box-shadow" style="padding:5px;">
                                            <!--Inicio fila izquierda formulario-->
                                               <div class="col-md-4">
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Fecha- Hr Ingreso:</label>
                                                    <div class="col-sm-8"><input type="text"  class="form-control border-bottom" value="{{ $caso->fecha_ingreso }}" name="f_in" disabled></div>


                                                    <!--value={{ date('Y-m-d H:i:s') }} -->
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Nombres:</label>
                                                     <div class="col-sm-8"><input type="text" name="vic_nombre" class="form-control border-bottom">
                                                    </div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Apellidos:</label>
                                                    <div class="col-sm-8"><input type="text" name="vic_apellido" class="form-control border-bottom">
                                                    </div>
                                                  </div>
                                                   <div class="form-group"><label class="col-sm-4 control-label text-right">Edad: </label>
                                                    <div class="col-sm-8"><input type="text" name="vic_edad" class="form-control border-bottom">
                                                    </div>
                                                  </div>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">DNI:</label>
                                                      <div class="col-sm-8 padding-0">
                                                        <input type="radio" name="vic_estado_dni" value="Tiene">Tiene
                                                        <input type="radio" name="vic_estado_dni" value="no tiene"> No Tiene
                                                      </div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Carnet Identidad:</label>
                                                      <div class="col-sm-8 padding-0">
                                                        <input type="radio" name="vic_estado_ci" value="Tiene">Tiene
                                                        <input type="radio" name="vic_estado_ci" value="No tiene" > No Tiene
                                                      </div>
                                                  </div>
                                                  <b class="col-sm-8 control-label">Lugar de nacimiento </b>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Depto. nacimiento:</label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_departamento" ></div>
                                                  </div>
                                                </div>
                                            <!--Fin fila izquierda formulario-->
                                            <!--Inicio fila central formulario-->
                                               <div class="col-md-4">
                                                  <br>
                                                  <br>

                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Fecha nacimiento: </label>
                                                    <div class="col-sm-8"><input type="date" class="form-control border-bottom" name="vic_fecha_nacimiento">
                                                    </div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Nacionalidad: </label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_nacionalidad" ></div>
                                                  </div>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Procedencia: </label>
                                                    <div class="col-sm-8 padding-0">
                                                        <input type="radio" name="vic_procedencia" value="Urbano">Urbano
                                                        <input type="radio" name="vic_procedencia" value="Rural">Rural
                                                    </div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">N° DNI:</label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_num_dni" ></div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">N° CI:</label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_num_ci" ></div>
                                                  </div>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Provincia nacimiento:</label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_provincia"></div>
                                                  </div>
                                                </div>
                                            <!--Fin fila central formulario-->
                                            <!--Inicio fila derecha formulario-->
                                               <div class="col-md-4">
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">N° File:</label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" value="{{ $caso->id_caso }}"  name="id_caso" disabled></div>
                                                  </div>
                                                  <div class="form-group"><label class="col-sm-6 control-label text-right">Certificado Nacimiento:</label>
                                                      <div class="col-sm-4 padding-0">
                                                        <input type="radio" name="vic_estado_cn" value="Tiene">Tiene
                                                        <input type="radio" name="vic_estado_cn" value="No tiene"> No Tiene
                                                      </div>
                                                  </div>

                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">Otro doc. identidad:</label>
                                                      <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_doc_idn" ></div>
                                                  </div>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">CI Expira: </label>
                                                    <div class="col-sm-8"><input type="date" class="form-control border-bottom" name="ci_expira" ></div>
                                                  </div>
                                                  <br>
                                                  <div class="form-group"><label class="col-sm-4 control-label text-right">País nacimiento: </label>
                                                    <div class="col-sm-8"><input type="text" class="form-control border-bottom" name="vic_pais">
                                                    </div>
                                                  </div>
                                                </div>
                                            <!--Fin fila derecha formulario-->
                                        </div>
                                      </div>
                                    <!--Fin seccion 1-->

                                    <!--Inicio seccion 2-->
                                    <!--Fin seccion 2-->
                                 </div>
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
