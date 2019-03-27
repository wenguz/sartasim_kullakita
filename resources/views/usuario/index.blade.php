@extends('layouts.app')

@section('content')
@if(Session::has('message'))
	<div>{{Session::get('message')}}</div>
@endif

<div id="content">
	<div class="panel">
		<div class="panel-body">
			<div class="col-md-8 col-sm-12">
				<h3 class="animated fadeInLeft">{{ __('Modulo Administrador - Listar Usuarios') }}</h3>
			</div>
		</div>
	</div>
	<div class="form-element">
		<div class="col-md-12">
			<div class="panel form-element-padding">
				<div class="panel-heading">
					<h4>Los usuarios registrados en el sistema actualmente son los siguientes: </h4>
				</div>
				<div class="panel-body" style="padding-bottom:15px;">
					<!--Inicio Tabla-->
					<div class="panel-body">
						<div class="col-md-12 padding-0" style="padding-bottom:20px;">
							<a class="btn btn-success mb-3" href="{{ route('register') }}">Agregar Usuario</a>
							<div class="col-md-12 padding-0">
								<br>
								<div class="col-md-12">
									<div class="table-container">
										<div class="responsive-table" >
											<table class="table table-striped " border="1px" align="center">
												<thead class="thead-dark">
													<tr>
														<th scope="col">Id</th>
														<th scope="col">Nombre y Apellido</th>
														<th scope="col">CI</th>
														<th scope="col">Fotografia</th>
														<th scope="col">Correo electronico</th>
														<th scope="col">Opciones</th>
													</tr>
												</thead>
												<tbody border="1px">
													@if($personas->count() )
														@forelse($personas as $persona)
														@if($persona->deleted_at==null)
													<tr>
														<td>{{$persona->id_persona}}</td>
														<td>{{$persona->persona_nombre}} {{$persona->persona_apellido}}</td>
														<td>{{$persona->persona_ci}}</td>
														<td><img width="40px" height="40px" src="{{ asset('uploads/avatars/'.$persona->avatar) }}"> </td>
														<td scope="row">{{$persona->email}}</td>
														<!--Si el usuario esta logueado no puede eliminar su proipio registro-->
														@if($persona->deleted_at == null)
															@if($persona->id_usuario==Auth::id())
															<td><a class="btn btn-info mb-1" href="{{action('UserController@edit',$persona->id_persona)}}"><i class="icons icon-pencil">Editar</i></a>
															</td>
															@else
															<td><a class="btn btn-info mb-1" href="{{action('UserController@edit',$persona->id_persona)}}"><i class="icons icon-pencil">Editar</i></a>
																<form action="{{action('UserController@destroy',$persona->id_persona)}}" method="post">
																	{{csrf_field()}}
																	<input type="hidden" name="_method" value="DELETE">
																<button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quiere eliminar?')"><i class="icons icon-trash">Eliminar</i></button>
																</form>
															</td>
															@endif
														@else
														<td></td>
														@endif

													</tr>
													@endif
														@endforeach
													@else
													<tr>
														<td colspan="7">No hay registros !!</td>
													</tr>
													@endif
												</tbody>
											</table>
											{{$personas->links()}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Fin Tabla-->
				</div>
			</div>
		</div>
	</div>
	@endsection