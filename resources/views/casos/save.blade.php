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
                              <div class="form-group"><label class="col-sm-8 control-label">Nombres:</label>
                                <div class="col-sm-10"><input type="text" name="vic_nombre" id="vic_nombre" class="form-control border-bottom" required="true">
                                </div>
                              </div>
                              <br>
                              <div class="form-group"><label class="col-sm-8 control-label">Apellidos:</label>
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
                            <div class="form-group"><label class="col-sm-8 control-label">Num. hermanos:</label>
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
                        <div class="form-group"><label class="col-sm-12 control-label ">Observaciones:</label>
                          <div class="col-sm-12">
                            <textarea type="text" class="form-control"></textarea>
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
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Defensoria de la Niñez y Adolescencia que interna:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Institucion responsable de caso:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Telefono: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-12 control-labelt"><b>Modalidad de Ingreso</b></label></div>

                            <div class="form-group"><label class="col-sm-6 control-label"><li>Orden Judicial:</li></label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Tiene
                                <input type="radio" name="option"> No Tiene
                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-6 control-label"><li>Req. Fiscal:</li></label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Tiene
                                <input type="radio" name="option"> No Tiene
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Defensoria de la Niñez y Adolescencia atiende el caso:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label"><li>Ingreso por transferencia:</li></label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Si
                                <input type="radio" name="option"> No
                              </div>
                            </div>
                          </div>
                        <!--Fin fila izquierda formulario-->
                        <!--Inicio fila central formulario-->
                          <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Urbano
                                <input type="radio" name="option">Rural
                              </div>
                            </div>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Nombre responsable de caso:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Celular: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Num. resolucion: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Coordinacion: </label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Si
                                <input type="radio" name="option">No
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                              <div class="col-sm-6 padding-0">
                                <input type="radio" name="option">Urbano
                                <input type="radio" name="option">Rural
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Nombre de Hogar de transferencia: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom">
                              </div>
                            </div>
                          </div>
                        <!--Fin fila central formulario-->
                        <!--Inicio fila derecha formulario-->
                          <div class="col-md-4">
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Apellido responsable de caso:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Juzgado Publico de la Niñez:</label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom" ></div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group"><label class="col-sm-6 control-label text-right">Municipio: </label>
                              <div class="col-sm-6"><input type="text" class="form-control border-bottom"></div>
                            </div>
                          </div>
                        <!--Fin fila derecha formulario-->

                        <div class="form-group"><label class="col-sm-12 control-label">Nombres anteriores hogares de permanencia: </label>
                          <div class="col-sm-12"><textarea type="text" class="form-control"></textarea>
                          </div>
                        </div>
                        <br>
                        <!--Inicio opciones-->
                          <div class="form-group"><label class="col-sm-12 control-labelt"><b>Documentos presentados al momento de ingreso</b></label>
                            <div class="col-sm-10">
                              <div class="col-md-4">
                                <div class="col-sm-12 padding-0">
                                  <br>
                                  <input type="checkbox" name="option">Orden Judicial- Acogimiento
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <br>
                                  <input type="checkbox" name="option"> Requerimiento Fiscal
                                </div>
                                <div class="col-sm-12 padding-0">
                                  <br>
                                  <input type="checkbox" name="option">Ficha Internacion
                                </div>
                                <br>
                              </div>
                              <div class="col-md-4">
                                <div class="col-sm-12 padding-0">
                                  <br>
                                  <input type="checkbox" name="option">Informe Social
                                </div>
                                  <br>
                                  <div class="col-sm-12 padding-0">
                                    <br>
                                    <input type="checkbox" name="option">Informe Psicologico
                                  </div>
                                  <br>
                                  <div class="col-sm-12 padding-0">
                                    <br>
                                    <input type="checkbox" name="option">Informe Medico
                                  </div>
                                  <br>
                              </div>
                              <br>
                                <div class="col-md-4">
                                  <div class="col-sm-12 padding-0">
                                    <br>
                                    <input type="checkbox" name="option">Informe Pedagogico
                                  </div>
                                  <div class="col-sm-12 padding-0">
                                    <br>
                                    <input type="checkbox" name="option">Otro
                                    <input type="text" class="form-control border-bottom" placeholder="Especificar">
                                  </div>
                                </div>
                            </div>
                          </div>
                        <!--Fin opciones-->
                          <div class="form-group"><label class="col-sm-12 control-label">Observaciones: </label>
                            <div class="col-sm-12"><textarea type="text" class="form-control"></textarea>
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
                              <input type="checkbox" name="option">Violencia Sexual Comercial
                            </div>
                            <div class="col-sm-12 padding-0">
                              <input type="checkbox" name="option">Trata con fines de explotacion sexual comercial
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="col-sm-12 padding-0">
                              <input type="checkbox" name="option">Trata con fines de explotacion Laboral
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="col-sm-12 padding-0">
                              <input type="checkbox" name="option">Violencia Sexual
                              <input type="text" class="form-control border-bottom" placeholder="descripcion">
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
                              <input type="radio" name="option">Si
                              <input type="radio" name="option">No
                            </div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Recetas Adjuntas: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="radio" name="option">Si
                              <input type="radio" name="option">No
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Certificado medico forence: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="radio" name="option">Si
                              <input type="radio" name="option">No
                            </div>
                          </div>
                          <div class="form-group"><label class="col-sm-4 control-label text-right">Otro: </label>
                            <div class="col-sm-8 padding-0">
                              <input type="text" class="form-control border-bottom" placeholder="Descripcion">
                            </div>
                          </div>
                        </div>
                        <div class="form-group"><label class="col-sm-12 control-label">Observaciones: </label>
                          <div class="col-sm-12"><textarea type="text" class="form-control"></textarea>
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
                                                        <input type="radio" name="option">Alojamiento
                                                      </div>
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option"> Via Publica
                                                      </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option">Operativo
                                                      </div>
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option">Casa de citas
                                                      </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option">Domicilio Particular
                                                      </div>
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option">U. Educativa
                                                      </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                      <div class="col-sm-12 padding-0">
                                                        <input type="radio" name="option">Otro lugar
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
                                        <input type="checkbox" name="option">Bajo Inventario
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="col-sm-12 padding-0">
                                        <input type="checkbox" name="option">Recepcion Objetos de valor
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="col-sm-12 padding-0">
                                        <input type="checkbox" name="option">Dinero
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="col-sm-12 padding-0">
                                        <input type="checkbox" name="option">Otras pertenencias
                                        <input type="text" name="pertenencias" class="form-control border-bottom" placeholder="descripsion">
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
                              <div class="col-sm-12"><textarea type="text" class="form-control">
                              </textarea>
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-4 control-label text-right">Area Salud: </label>
                              <div class="col-sm-12"><textarea type="text" class="form-control">
                              </textarea>
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-4 control-label text-right">Area Legal: </label>
                              <div class="col-sm-12"><textarea type="text" class="form-control">
                              </textarea>
                              </div>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group"><label class="col-sm-4 control-label text-right">Area Psicologica: </label>
                              <div class="col-sm-12"><textarea type="text" class="form-control">
                              </textarea>
                              </div>
                            </div>
                            <div class="form-group"><label class="col-sm-4 control-label text-right">Area Pedagogica: </label>
                              <div class="col-sm-12"><textarea type="text" class="form-control">
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
                    <div class="col-sm-12">
                      <input type="text" class="form-control border-bottom">
                    </div>
                    <label class="col-sm-12 control-label text-center">Nombre  de la Responsable de Ingreso</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group" style="padding:5px; font-size: 20px;">
                    <div class="col-sm-12">
                      <input type="text" class="form-control border-bottom">
                    </div>
                    <label class="col-sm-12 control-label text-center">Nombre  de la Responsable de Derivacion</label>
                  </div>
                </div>
                  <div class="col-md-12">
                    <center>
                    <button type="submit" name="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
                    </center>
                  </div>
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

