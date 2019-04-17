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
            <form method="POST" action="{{ route('casos.store') }}" aria-label="{{ __('Register') }}" id="register_form">
              @csrf

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
                            <div class="col-sm-10"><input type="text" name="vic_nombre" id="vic_nombre" class="form-control border-bottom" required="true">
                            </div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Apellidos: *</label>
                            <div class="col-sm-10"><input type="text" name="vic_apellido" class="form-control border-bottom">
                            </div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Edad: </label>
                            <div class="col-sm-10"><input type="text" name="vic_edad" class="form-control border-bottom">
                            </div>
                          </div>
                          <br>
                          <br>
                          <b class="col-sm-10 control-label">Documentos de Identificacion </b>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">DNI:</label>
                            <div class="col-sm-10 padding-0">
                              <input type="radio" name="vic_estado_dni" value="Tiene">Tiene
                              <input type="radio" name="vic_estado_dni" value="No tiene" checked="true"> No Tiene
                            </div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label ">Carnet Identidad:</label>
                            <div class="col-sm-10 padding-0">
                              <input type="radio" name="vic_estado_ci" value="Tiene">Tiene
                              <input type="radio" name="vic_estado_ci" value="No tiene" checked="true"> No Tiene
                            </div>
                          </div>
                          <br>
                          <br>
                          <b class="col-sm-8 control-label">Lugar de nacimiento </b>
                          <br>

                          <div class="form-group"><label class="col-sm-8 control-label text-right">Depto. nacimiento:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_departamento" ></div>
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
                            <div class="col-sm-10"><input type="date" class="form-control border-bottom" name="vic_fecha_nacimiento">
                            </div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Nacionalidad: </label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_nacionalidad" ></div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Procedencia: </label>
                            <div class="col-sm-10 padding-0">
                              <input type="radio" name="vic_procedencia" value="Urbano" checked="true">Urbano
                              <input type="radio" name="vic_procedencia" value="Rural">Rural
                            </div>
                          </div>
                          <br>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">N° DNI:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_num_dni" ></div>
                          </div>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">N° CI:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_num_ci" ></div>
                          </div>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Provincia nacimiento:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_provincia"></div>
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
                              <input type="radio" name="vic_estado_cn" value="Tiene">Tiene
                              <input type="radio" name="vic_estado_cn" value="No tiene" checked="true"> No Tiene
                            </div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Num. hermanos: *</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_num_hermanos" id="vic_num_hermanos" required="true"></div>
                          </div>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Direccion:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_direccion" ></div>
                          </div>
                          <br>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">Otro doc. identidad:</label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_doc_idn" ></div>
                          </div>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">CI Expira: </label>
                            <div class="col-sm-10"><input type="date" class="form-control border-bottom" name="ci_expira" ></div>
                          </div>
                          <br>
                          <br>
                          <div class="form-group"><label class="col-sm-8 control-label">País nacimiento: </label>
                            <div class="col-sm-10"><input type="text" class="form-control border-bottom" name="vic_pais">
                            </div>
                          </div>
                        </div>
                        <!--Fin fila derecha formulario-->
                      </div>
                    </div>
                  <!--Fin seccion 1-->
                  <!--Inicio seccion 2   revisar: https://www.eduardocollado.com/2016/11/17/formularios-html-con-campos-dinamicos-en-javascript/    -->
                    <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                      <a class="media-heading">2.- Antecedentes Familiares </a>
                      <div class="media-body box-shadow" style="padding:5px;">

                        <!--Inicio formulario dinamico parentesco-->
                        <!--https://programacion.net/articulo/anadir_y_eliminar_campos_inputs_dinamicamente_mediante_jquery_1816?fbclid=IwAR3AJo4g3w-llOsfcAleMYwrD9bxvyMjdnZtGCpAMp4rjwztsYqiDFOII-c-->
                        <div class="field_wrapper">
                          <div class="col-md-12">
                            <label class="control-label text-right">Nombres: *</label>
                            <input type="text" name="parentesco_nombre[]" value="" required="true" />

                            <label class="control-label text-right">Apellidos: *</label>
                            <input type="text" name="parentesco_apellido[]" value=""/>

                            <label class="control-label text-right">Telefono:</label>
                            <input type="text" name="parentesco_telefono[]" value=""/>

                            <label class="control-label text-right">Celular:</label>
                            <input type="text" name="parentesco_celular[]" value=""/>

                            <label class="control-label text-right">Parentesco:</label>
                            <select name="pariente[]">
                              <option value="Padres">Padres</option>
                              <option value="Hermanos">Hermanos</option>
                              <option value="Tios">Tios</option>
                              <option value="Abuelos">Abuelos</option>
                            </select>

                            <a href="javascript:void(0);" class="add_button fa fa-plus-square" title="Add field"></a>
                          </div>
                        </div>
                        <!--Finformulario dinamico parentesco-->
                        <div class="form-group"><label class="col-sm-12 control-label ">Observaciones:</label>
                          <div class="col-sm-12">
                            <textarea type="text" class="form-control" name="parentesco_observacion"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!--Fin seccion 2-->
                    <input type="button" class="next-form btn btn-info" value="Next" />
                </fieldset>

                <fieldset>
                  <!--Inicio seccion 3-->
                      <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                        <a class="media-heading">3.- Antecedentes Institucionales </a>
                        <div class="media-body box-shadow" style="padding:8px;">
                        <!--Inicio fila izquierda formulario-->
                        <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Defensoria de la Niñez y Adolescencia que interna: *</label>
                              <!--Tabla instituciones-->
                              <div class="col-sm-6"><input type="text" name="defensoria_interna_0" value="Defensoria Niñez y Adolescencia que interna" hidden="true"><input type="text" class="form-control border-bottom" name="defensoria_interna_1" required="true"></div>
                            </div>
                        <br>
                          <div class="form-group"><label class="col-sm-6 control-label text-right">Institucion responsable de caso: *</label>
                            <div class="col-sm-6"><input type="text"name="ins_responsable_0" value="Institucion responsable de caso" hidden="true"><input type="text" class="form-control border-bottom" name="ins_responsable_1" required="true"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-6 control-label text-right">Telefono: </label>
                            <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="ins_responsable_2"></div>
                          </div>

                        <div class="form-group"><label class="col-sm-12 control-labelt"><b>Modalidad de Ingreso</b></label></div>
                        <!--documentos caso -- docc_estado.-->
                          <div class="form-group"><label class="col-sm-6 control-label"><li>Orden Judicial:</li></label>
                            <div class="col-sm-6 padding-0">
                              <input type="text" name="docc_oj_0" value="Orden_Judicial" hidden="true">
                              <input type="radio" name="docc_oj_1" value="Tiene">Tiene
                              <input type="radio" name="docc_oj_1" value="No tiene" checked="true"> No Tiene
                            </div>
                          </div>

                          <div class="form-group"><label class="col-sm-6 control-label"><li>Req. Fiscal:</li></label>
                            <div class="col-sm-6 padding-0">
                              <!--documentos caso -- docc_estado.-->
                              <input type="text"name="docc_rf_0" value="Requerimiento_Fiscal" hidden="true">
                              <input type="radio" name="docc_rf_1" value="Tiene">Tiene
                              <input type="radio"name="docc_rf_1" value="No tiene" checked="true"> No Tiene
                            </div>
                          </div>
                          <div class="form-group"><label class="col-sm-6 control-label text-right">Defensoria de la Niñez y Adolescencia atiende el caso:</label>
                            <div class="col-sm-6"><input type="text" name="defensoria_atiende_0" value="Defensoria Niñez y Adolescencia que atiende el caso" hidden="true"><input type="text" class="form-control border-bottom" name="defensoria_atiende_1" ></div>
                          </div>
                        <br>
                          <div class="form-group"><label class="col-sm-6 control-label"><li>Ingreso por transferencia:</li></label>
                            <div class="col-sm-6 padding-0">
                              <input type="text" name="transferencia_0" value="Ingreso por transferencia" hidden="true">
                              <input type="radio" name="transferencia_1" value="Si">Si
                              <input type="radio" name="transferencia_1" value="No" checked="true"> No
                            </div>
                          </div>
                      </div>
                      <!--Fin fila izquierda formulario-->
                      <!--Inicio fila central formulario-->
                      <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                          <div class="col-sm-6 padding-0">
                            <!--para la institucion que interna-->
                            <input type="radio" name="defensoria_interna_2" value="Urbano" checked="true">Urbano
                            <input type="radio" name="defensoria_interna_2" value="Rural">Rural
                          </div>
                        </div>
                        <br>
                        <!--personas: nombre y apellido lo demas nul. en respponsables:cargo:responsable-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Nombre responsable de caso: *</label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="persona_responsable_0" required="true" ></div>
                        </div>
                        <!--instituciones: ins _celular-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Celular: </label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="ins_responsable_3"></div>
                        </div>
                        <br>
                        <br>
                        <!--documnetos caso: docc_num-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Num. resolucion: </label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="docc_oj_2"></div>
                        </div>
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Coordinacion: </label>
                          <div class="col-sm-6 padding-0">
                            <input type="text" name="docc_coordinacion_0" value="Coordinacion" hidden="true">
                            <input type="radio" name="docc_coordinacion_1" value="Si">Si
                            <input type="radio" name="docc_coordinacion_1" value="No" checked="true">No
                          </div>
                        </div>
                        <!--para la institucion que atiende el caso-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                          <div class="col-sm-6 padding-0">
                            <input type="radio" name="defensoria_atiende_2" value="Urbano" checked="true">Urbano
                            <input type="radio"  name="defensoria_atiende_2" value="Rural">Rural
                          </div>
                        </div>
                        <!--instituciones: . insitucion_caso: transfiere-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Nombre de Hogar de transferencia: </label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="transferencia_2">
                          </div>
                        </div>
                      </div>
                      <!--Fin fila central formulario-->
                      <!--Inicio fila derecha formulario-->
                      <div class="col-md-4">
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="defensoria_interna_3"></div>
                        </div>
                        <br>
                        <!--personas: nombre y apellido lo demas nul. en respponsables:cargo:responsable-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Apellido responsable de caso: *</label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="persona_responsable_1" required="true"></div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <!--instituciones: . insitucion_caso: ingreso-->
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Juzgado Publico de la Niñez:</label>
                          <div class="col-sm-6"><input type="text"name="ins_juzgado_0" value="Juzgado Publico de la Niñez" hidden="true"><input type="text" class="form-control border-bottom" name="ins_juzgado_1"></div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                          <div class="col-sm-6"><input type="text" class="form-control border-bottom" name="defensoria_atiende_3"></div>
                        </div>
                      </div>
                      <!--Fin fila derecha formulario-->
                      <!--institucion_casos:observacion, accion:transfiere-->
                      <div class="form-group"><label class="col-sm-12 control-label">Nombres anteriores hogares de permanencia: </label>
                        <div class="col-sm-12"><textarea type="text" class="form-control" name="transferencia_3" ></textarea>
                        </div>
                      </div>
                      <br>
                      <!--Inicio opciones-->
                      <div class="form-group"><label class="col-sm-12 control-labelt"><b>Documentos presentados al momento de ingreso</b></label>
                        <div class="col-sm-10">
                          <div class="col-md-4">
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[0]" value="Orden_Judicial">Orden Judicial - Acogimiento
                            </div>
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[1]" value="Requerimiento_Fiscal"> Requerimiento Fiscal
                            </div>
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[2]" value="Ficha_Internacion">Ficha Internacion
                            </div>
                            <br>
                          </div>
                          <div class="col-md-4">
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[3]" value="Informe_Social">Informe Social
                            </div>
                            <br>
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[4]" value="Informe_Psicologico">Informe Psicologico
                            </div>
                            <br>
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[5]" value="Informe_Medico">Informe Medico
                            </div>
                            <br>
                          </div>
                          <br>
                          <div class="col-md-4">
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[6]" value="Informe_Pedagogico">Informe Pedagogico
                            </div>
                            <div class="col-sm-12 padding-0">
                              <br>
                              <input type="checkbox" name="docc_estado_in[7]" value="Otros_Documentos">Otro
                              <input type="text" class="form-control border-bottom" placeholder="Especificar" name="docc_estado_in[8]">
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Fin opciones-->
                      <div class="form-group"><label class="col-sm-12 control-label">Observaciones: </label>
                        <!--documneto_casos: docc_observacion-->
                        <div class="col-sm-12"><textarea type="text" class="form-control" name="docc_observacion"></textarea>
                        </div>
                      </div>
                    </div>
                      </div>
                  <!--Fin seccion 3-->
                  <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
                  <input type="button" name="next" class="next-form btn btn-info" value="Next" />
                </fieldset>

                <fieldset>
                  <!--Inicio seccion 4-->
                  <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                    <a class="media-heading">4.- Problematica de Ingreso </a>
                    <div class="media-body box-shadow" style="padding:8px;">
                      <!--Inicio opciones-->
                      <div class="col-sm-12">
                        <div class="col-md-4">
                          <div class="col-sm-12 padding-0">
                            <input type="checkbox" name="problematica[0]" value="Violencia_Sexual_Comercial">Violencia Sexual Comercial
                          </div>
                          <div class="col-sm-12 padding-0">
                            <input type="checkbox" name="problematica[1]" value="Trata_ConFines_Explotacion_Sexual_Comercial">Trata con fines de explotacion sexual comercial
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-sm-12 padding-0">
                            <input type="checkbox" name="problematica[2]" value="Trata_ConFines_Explotacion_Laboral">Trata con fines de explotacion Laboral
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="col-sm-12 padding-0">
                            <input type="checkbox" name="problematica[3]" value="Violencia_Sexual">Violencia Sexual
                            <input type="text" class="form-control border-bottom" placeholder="Descripcion" name="problematica[4]">
                          </div>
                        </div>
                      </div>
                      <!--Fin opciones-->
                    </div>
                  </div>
                  <!--Fin seccion 4-->
                  <!--Inicio seccion 5-->
                    <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                      <a class="media-heading">5.- Antecedentes de Salud de ingreso </a>
                      <div class="media-body box-shadow" style="padding:8px;">
                        <p>Verificacion de informes medicos evacuados</p>
                        <div class="col-md-6">
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Tratamiento Medico: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="radio" name="trat_medico" value="Si" >Si
                              <input type="radio" name="trat_medico" value="No" checked="true">No
                            </div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Recetas Adjuntas: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="radio" name="receta_adj" value="Si">Si
                              <input type="radio" name="receta_adj" value="No" checked="true">No
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Certificado medico forence: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="radio" name="certificado_for" value="Si">Si
                              <input type="radio" name="certificado_for" value="No" checked="true">No
                            </div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Otro: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="text" class="form-control border-bottom" placeholder="Descripcion" name="doc_medico">
                            </div>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-12 control-label">Observaciones: </label>
                          <div class="col-sm-12"><textarea type="text" class="form-control" name="docc_observacion_medico"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  <!--Fin seccion 5-->
                  <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
                  <input type="button" name="next" class="next-form btn btn-info" value="Next" />
                </fieldset>
                <fieldset>
                  <!--Inicio seccion 6-->
                    <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                      <a class="media-heading">6.- Antecedentes de Lugar de ubicacion </a>
                      <div class="media-body box-shadow" style="padding:8px;">
                        <p>Lugar en el que se encontro a la adolescente</p>
                        <!--Inicio opciones-->
                        <div class="form-group"><label class="col-sm-12 control-labelt">Lugar</label>
                          <div class="col-sm-12">
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="Alojamiento">Alojamiento
                              </div>
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="Via Publica"> Via Publica
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="Operativo">Operativo
                              </div>
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="Casa de citas">Casa de citas
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="Domicilio Particular">Domicilio Particular
                              </div>
                              <div class="col-sm-12 padding-0">
                                <input type="radio" name="ubicacion" value="U. Educativa">U. Educativa
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group"><label class="col-sm-4 control-label text-right">Otro lugar </label>
                                <div class="col-sm-8 padding-0">
                                  <input type="text" class="form-control border-bottom" placeholder="Descripcion" name="ubicacion">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Fin opciones-->
                      </div>
                    </div>
                  <!--Fin seccion 6-->

                  <!--Inicio seccion 7-->
                    <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                      <a class="media-heading">7.- Recepcion de Pertenecias</a>
                      <div class="media-body box-shadow" style="padding:8px;">
                        <!--Inicio opciones-->
                        <div class="form-group"><label class="col-sm-12 control-labelt">Pertenecias</label>
                          <div class="col-sm-12">
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="checkbox" name="pertenencia" value="Bajo Inventario">Bajo Inventario
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="checkbox" name="pertenencia" value="Recepcion Objetos de valor">Recepcion Objetos de valor
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="checkbox" name="pertenencia" value="Dinero">Dinero
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="col-sm-12 padding-0">
                                <input type="checkbox" name="option">Otras pertenencias
                                <input type="text" name="pertenencia" class="form-control border-bottom" placeholder="descripsion">
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--Fin opciones-->

                      </div>
                    </div>
                  <!--Fin seccion 7-->

                  <!--Inicio seccion 8-->
                  <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
                    <a class="media-heading">8.- Acciones inmediatas a seguir por el refugio </a>
                    <div class="media-body box-shadow" style="padding:8px;">
                      <div class="col-md-6">
                        <div class="form-group"><label class="col-sm-4 control-label text-right">Area Social: </label>
                          <div class="col-sm-12"><textarea type="text" class="form-control" name="docc_obb_social">
                          </textarea>
                        </div>
                      </div>
                      <div class="form-group"><label class="col-sm-4 control-label text-right">Area Salud: </label>
                        <div class="col-sm-12"><textarea type="text" class="form-control"  name="docc_obb_salud">
                        </textarea>
                      </div>
                    </div>
                    <div class="form-group"><label class="col-sm-4 control-label text-right">Area Legal: </label>
                      <div class="col-sm-12"><textarea type="text" class="form-control"  name="docc_obb_legal">
                      </textarea>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group"><label class="col-sm-4 control-label text-right">Area Psicologica: </label>
                    <div class="col-sm-12"><textarea type="text" class="form-control"  name="docc_obb_psicologica">
                    </textarea>
                  </div>
                </div>
                <div class="form-group"><label class="col-sm-4 control-label text-right">Area Pedagogica: </label>
                  <div class="col-sm-12"><textarea type="text" class="form-control"  name="docc_obb_pedagogica">
                  </textarea>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--Fin seccion 8-->



        <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
        <input type="button" name="next" class="next-form btn btn-info" value="Next" />
      </fieldset>


      <fieldset>
        <!--Inicio seccion 9-->
          <div class="media" style="border-style:outset; padding:5px; font-size: 14px;">
              <a class="media-heading">9.- Programacion de acciones conjuntas con la institucion</a>
              <div class="media-body box-shadow" style="padding:8px;">
                <div class="col-md-6">
                  <div class="form-group"><label class="col-sm-4 control-label text-right">Fecha: </label>
                    <div class="col-sm-12"><textarea type="text" class="form-control">
                    </textarea>
                  </div>
                </div>

              </div>

              <div class="col-md-6">
                <div class="form-group"><label class="col-sm-4 control-label text-right">Acciones: </label>
                  <div class="col-sm-12"><textarea type="text" class="form-control">
                  </textarea>
                </div>
              </div>
          </div>

          </div>
          </div>
        <!--Fin seccion 9-->
    <div class="col-md-6">
      <div class="form-group" style="padding:5px; font-size: 20px;">
        <div class="col-sm-6">
          <input type="text" class="form-control border-bottom" name="persona_nombre_res">
        </div>
        <div class="col-sm-6">
          <input type="text" class="form-control border-bottom" name="persona_apellido_res">
        </div>
        <label class="col-sm-6 control-label text-center">Nombre de la Responsable de Ingreso</label>
        <label class="col-sm-6 control-label text-center">Apellido de la Responsable de Ingreso</label>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group" style="padding:5px; font-size: 20px;">
        <div class="col-sm-6">
          <input type="text" class="form-control border-bottom" name="persona_nombre_der">
        </div>
        <div class="col-sm-6">
          <input type="text" class="form-control border-bottom" name="persona_apellido_der">
        </div>
        <label class="col-sm-6 control-label text-center">Nombre de la Responsable de Derivacion</label>
        <label class="col-sm-6 control-label text-center">Apellido de la Responsable de Derivacion</label>
      </div>
    </div>
    <div class="col-md-12">
      <center>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
      </center>
    </div>
     <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
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
