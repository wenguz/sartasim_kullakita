@extends('layouts.app')
@section('content')
@if(Session::has('notice'))
	<div>{{Session::get('notice')}}</div>
@endif
<div id="content">
	<div class="panel">
		<div class="panel-body">
			<div class="col-md-6 col-sm-12">
				<h3 class="animated fadeInLeft">{{ __('Modulo Estandar- Lista de casos') }}</h3>
			</div>
		</div>
	</div>
	<div class="form-element">
		<div class="col-md-12">
			<div class="panel form-element-padding">
				<div class="panel-heading">
					<h4>Los casos registrados en el sistema actualmente son los siguientes: </h4>
				</div>
				<div class="panel-body" style="padding-bottom:15px;">
				<!--Inicio buscadores-->
					<div class="col-md-12">
						<div class="btn-group">
							<!--Buscador por CI declarado con metodo scopeplate en modelo Usuario-->
							<form action="{{ route('casos.index') }}" method="get" role="search"
								class="form-group">
								<div class="col-md-6 col-md-12">
									<div class="col-sm-12">
										<!--name como esta en la BD-->
										<label class="label-search"><b>Ingrese # de caso o nombre de adolescente</b> </label>
									</div>
									<div class="col-md-9">
										<div class="col-sm-12">
											<!--name como esta en la BD-->
											<input type="text" name="caso_victima" class="form-control primary" placeholder="Buscar por numero de caso o nombre" size="100">
										</div>
									</div>
									<div class="col-md-3">
										<button type="submit" class="btn btn-primary mb-3"> Buscar</button>
									</div>
								</div>
							</form>
						<!--Fin buscador por mes-->
						</div>
					</div>
				<!--Fin buscadores-->
					<div class="col-md-12 padding-0">
						<!--Inicio Tabla-->
						<br>
						<div class="col-md-12">
							<div class="table-container">
								<div class="responsive-table" >
									<table class="table table-striped " border="1px" align="center">
										<thead class="thead-dark">
											<tr>
												<th scope="col">Id</th>
												<th scope="col">Nombre y Apellido</th>
												<th scope="col">Edad</th>
												<th scope="col">Fecha Ingreso</th>
												<th scope="col">CI</th>
												<th scope="col">Fotografia</th>
												<th scope="col">Opciones</th>
											</tr>
										</thead>
										<tbody border="1px">
											@if($casos->count() )
											@forelse($casos as $caso)
											<tr>
												<td>{{$caso->id_caso}}</td>
												<td>{{$caso->vic_nombre}} {{$caso->vic_apellido}}</td>
												<td>{{$caso->vic_edad}}</td>
												<td>{{$caso->fecha_ingreso}}</td>
												<td scope="row">{{$caso->doc_numero}}</td>
												<td><img width="40px" height="40px" src="{{ asset('uploads/avatars/'.$caso->avatar) }}"></td>
												<td  align="center">
													<div class="fa-hover col-md-3 col-sm-4 text-white" align="right">
														<a class="btn btn-info mb-3 fa fa-user text-white" href="{{action('VictimaController@profile',$caso->id_victima)}}"><i align="text-center">Foto</i></a>
													</div>
													<div class="fa-hover col-md-3 col-sm-4 text-white" align="right">
														<a class="btn btn-info mb-3 fa fa-pencil text-white" href="{{action('CasoController@edit',$caso->id_caso)}}"><i align="text-center">Editar</i></a>
													</div>
													<div class="fa-hover col-md-3 col-sm-4 text-white" align="right">
			                                            <a class="btn bg-orange mb-3 fa fa-folder-open text-white" href="agregar_social_1.html" align="text-center">Social</a>
			                                        </div>
			                                        <div class="fa-hover col-md-3 col-sm-4 text-white" align="right">
			                                            <a class="btn bg-dark-lime mb-3 fa fa-child text-white" href="agregar_social_1.html" align="text-center">Psicologico</a>
			                                        </div>
			                                        <div class="fa-hover col-md-3 col-sm-4 text-white" align="right">
			                                            <a class="btn bg-teal mb-3 fa fa-mail-forward text-white" href="agregar_egreso_1.html" align="text-center">Egreso</a>
			                                        </div>
												</td>
											</tr>
											@endforeach
											@else
											<tr>
												<td colspan="7">No hay registros !!</td>
											</tr>
											@endif
										</tbody>
									</table>
									{{$casos->links()}}
								</div>
							</div>
						</div>
						<!--Fin Tabla-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
