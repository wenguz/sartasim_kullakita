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
		          <h4>Modificar los datos de un nuevo caso</h4>
		        </div>
		        <div class="panel-body" style="padding-bottom:15px;">
		          	<!--Inicio Botones encabezado-->
				        <div class="col-md-9 padding-0" style="padding-bottom:20px;">
				           <a class="btn btn-success mb-3" href="{{ route('casos.create')  }}">Nuevo Ingreso</a>
				        </div>
		          	<!--Fin Botones encabezado-->
		          	<div class="col-md-12 panel-body" style="padding-bottom:15px;">
			            <!--Inicio barra de progreso-->
				            <div class="progress">
				              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
				            </div>
				            <div class="alert alert-success hide"></div>
			            <!--Fin barra de progreso-->

			           	<!--Inicio Formulario Registro usuario-->
				            <form method="POST" action="{{ route('casos.update',$caso->id_caso) }}" aria-label="{{ __('Register') }}" id="register_form">
				              @csrf
				               @method('PUT')
				              	<div class="col-md-12">
				              		<fieldset>
					                  	<!--Inicio seccion 1-->
					                    	<div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
					                      		<a class="media-heading">1.- Datos Personales </a>
						                      	<div class="media-body box-shadow" style="padding:5px;">
							                        <!--Inicio fila izquierda formulario-->
							                        <div class="col-md-4">
							                          <div class="form-group"><label class="col-sm-8 control-label">Fecha- Hr Ingreso:</label>
							                            <div class="col-sm-10"><input type="text"  class="form-control border-bottom" value="{{ $caso->fecha_ingreso }}" name="f_in" disabled></div>
							                            <!--value={{ date('Y-m-d H:i:s') }} -->
							                          </div>
							                          <br>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Nombres: *</label>
							                            <div class="col-sm-10"><input type="text" name="vic_nombre" class="form-control border-bottom" disabled="true" value="{{$victima->vic_nombre}}">
							                            </div>
							                          </div>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Apellidos: *</label>
							                            <div class="col-sm-10"><input type="text" name="vic_apellido" class="form-control border-bottom" value="{{$victima->vic_apellido}}" disabled="true">
							                            </div>
							                          </div>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Edad: </label>
							                            <div class="col-sm-10"><input type="text" name="vic_edad" class="form-control border-bottom" value="{{$victima->vic_edad}}" disabled="true">
							                            </div>
							                          </div>
							                          <br>
							                          <br>
							                          <b class="col-sm-10 control-label">Documentos de Identificacion </b>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">DNI:</label>
							                            <div class="col-sm-10 padding-0">

								                              <input type="radio" name="vic_estado_dni" value="Tiene" checked="true">Tiene
								                              <input type="radio" name="vic_estado_dni" value="No tiene"> No Tiene

							                            </div>
							                          </div>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label ">Carnet Identidad:</label>
							                            <div class="col-sm-10 padding-0">

								                              <input type="radio" name="vic_estado_ci" value="Tiene" checked="true">Tiene
								                              <input type="radio" name="vic_estado_ci" value="No tiene" > No Tiene

							                            </div>
							                          </div>
							                          <br>
							                          <br>
							                          <b class="col-sm-8 control-label">Lugar de nacimiento </b>
							                          <br>

							                          <div class="form-group"><label class="col-sm-8 control-label text-right">Depto. nacimiento:</label>
							                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_departamento" value="{{$lugarna->departamento}}" ></div>
							                          </div>
							                        </div>
							                        <!--Fin fila izquierda formulario-->
							                        <!--Inicio fila central formulario-->
							                        <div class="col-md-4">
							                          <br>
							                          <br>
							                          <br>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Fecha nacimiento: </label>
							                            <div class="col-sm-10"><input type="date" class="form-control border-bottom" name="vic_fecha_nacimiento" value="{{$victima->vic_fecha_nacimiento}}">
							                            </div>
							                          </div>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Nacionalidad: </label>
							                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_nacionalidad" value="{{$victima->vic_nacionalidad}}" ></div>
							                          </div>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Procedencia: </label>
							                            <div class="col-sm-10 padding-0">
							                            	@if($victima->vic_procedencia == 'Urbano')
								                              <input type="radio" name="vic_procedencia" value="Urbano" checked="true">Urbano
								                              <input type="radio" name="vic_procedencia" value="Rural">Rural
							                              @else
							                              	<input type="radio" name="vic_procedencia" value="Urbano" >Urbano
							                              <input type="radio" name="vic_procedencia" value="Rural" checked="true">Rural
							                              @endif
							                            </div>
							                          </div>
							                          <br>
							                          <br>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">N° DNI:</label>


							                            <div class="col-sm-10"><input type="text"
							                            	class="form-control border-bottom"
							                            	name="vic_num_dni"

							                            	></div>

							                          </div>
							                          <br>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">N° CI:</label>

							                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_num_ci" ></div>

							                          </div>
							                          <br>
							                          <br>
							                          <div class="form-group"><label class="col-sm-8 control-label">Provincia nacimiento:</label>
							                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_provincia" value="{{$lugarna->provincia}}"></div>
							                          </div>
							                        </div>
							                        <!--Fin fila central formulario-->
							                        <!--Inicio fila derecha formulario-->
								                        <div class="col-md-4">
								                          <div class="form-group"><label class="col-sm-8 control-label">N° File:</label>
								                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" value="{{ $caso->id_caso }}"  name="id_caso" disabled></div>
								                          </div>
								                          <br>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">Certificado Nacimiento:</label>
								                            <div class="col-sm-10 padding-0">

									                              <input type="radio" name="vic_estado_cn" value="Tiene" checked="true">Tiene
									                              <input type="radio" name="vic_estado_cn" value="No tiene" > No Tiene

								                            </div>
								                          </div>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">Num. hermanos: *</label>
								                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_num_hermanos" id="vic_num_hermanos" required="true" value="{{$victima->vic_num_hermanos}}"></div>
								                          </div>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">Direccion:</label>
								                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_direccion" value="{{$victima->vic_direccion}}"></div>
								                          </div>
								                          <br>
								                          <br>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">Otro doc. identidad:</label>

								                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_doc_idn"  ></div>

								                          </div>
								                          <br>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">CI Expira: </label>

									                            <div class="col-sm-10"><input type="date" class="form-control border-bottom" name="ci_expira" ></div>

								                          </div>
								                          <br>
								                          <br>
								                          <div class="form-group"><label class="col-sm-8 control-label">País nacimiento: </label>
								                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_pais" value="{{$lugarna->pais}}">
								                            </div>
								                          </div>
								                        </div>
							                        <!--Fin fila derecha formulario-->
						                      	</div>
					                    	</div>
					                  	<!--Fin seccion 1-->
					                    <input type="button" class="next-form btn btn-info" value="Next" />
					                    <label class=" control-label text-center">[*] Texto que debe ser llenado obligatoriamente</label>
					                </fieldset>
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