@extends('layout')
@section('contenido')
	<div class="inner-header"></div>
	<section>
		<div class="block remove-top">
			<div class="container-fluid">
				<br>
				 <div class="row no-gape">
				 	@include('panel.nav_left')
				 	<div class="col-lg-1 column"></div>
				 	<div class="col-lg-8 column">

				 		<div class="padding-left">
					 		<div class="manage-jobs-sec" style="margin-top: -40px;">
					 			<div class="border-title">
					 				<h2 style="color: #FF9A00"><i class="fas fa-user-cog"></i> Datos Personales</h2>
					 			</div>
					 			<div class="block" style="margin-top: -80px;">
					 				<div class="change-password">
						 				<form action="{{ route('panel.user.edit',$user_data->id) }}" method="POST">
						 				@csrf
						 				{{ method_field('PUT') }}
						 				<div class="row">
						 					<div class="col-lg-10">
						 						<nav aria-label="breadcrumb">
													  <ol class="breadcrumb">
													    <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Datos Personales</a> <i style="color: #444444; padding: 5px;" class="fas fa-arrow-right"></i> </li>
													    <li class="breadcrumb-item active" aria-current="page"><a href="#" class="btn btn-secondary" disabled>Datos de Empresa</a></li>
													  </ol>
													</nav>
						 						<div class="block" style="margin-top: -50px;">
						 							<div class="row">
							 							<div class="col-6">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Nombres</b></span>
<input type="text" value="{{ $user_data->name }}{{ old('name') == $user_data->name? ' ' :'' }}" name="name" />
									 							@if($errors->has('name'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('name') }}</small>
									 							@endif
									 						</div>
							 							</div>
							 							<div class="col-6">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Apellidos</b></span>
									 							<input type="text" name="lastname" value="{{ $user_data->lastname }}{{ old('lastname') == $user_data->name? '':'' }}" />
									 							@if($errors->has('lastname'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('lastname') }}</small>
									 							@endif
									 						</div>
							 							</div>
						 							</div>
						 							<div class="pf-field">
					 									<span class="pf-title"><b>E-mail</b></span>
							 							<input type="text" value="{{ $user_data->email }}" name="email" />
							 							@if($errors->has('email'))
							 							<br>
							 								<small class="alert alert-danger">{{ $errors->first('email') }}</small>
							 							@endif
							 						</div>
						 						</div>
												<div class="block" style="margin-top: -100px;">
													<div class="row">
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>CI o RUC</b></span>
									 							<input maxlength="13" type="text" value="{{ $user_data->dni }}" name="dni" />
									 							@if($errors->has('dni'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('dni') }}</small>
									 							@endif
									 						</div>
														</div>
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>Teléfono celular</b></span>
									 							<input maxlength="10" type="text" value="{{ $user_data->movil }}{{ old('movil') == $user_data->movil? ' ' :'' }}" name="movil" />
									 							@if($errors->has('movil'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('movil') }}</small>
									 							@endif
									 						</div>
														</div>
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>Nivel Academico</b></span>
									 							<select name="studies" class="form-control">
									 								@if(Auth::user()->studies==null)
																	<option value="">Elegir</option>
									 								@else
									 								<option value="{{ Auth::user()->studies }}">{{ Auth::user()->studies }}</option>
									 								@endif
									 								<option value="">Study</option>
									 								<option value="Primaria">Primaria</option>
									 								<option value="Secundaria">Secundaria</option>
									 								<option value="Superior">Superior</option>
									 								<option value="Postgrado">Postgrado</option>
									 								<option value="Otros">Otros</option>
									 							</select>
									 						</div>
														</div>
													</div>
												</div>
												<div class="block" style="margin-top: -100px;">
													<div class="row">
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>Provincia</b></span>
									 							<select name="prov" class="form-control">
									 								@if(Auth::user()->prov==null)
																	<option value="">Elegir una Provincia</option>
									 								@else
									 								<option value="{{ Auth::user()->prov }}">{{ Auth::user()->prov }}</option>
									 								@endif
									 								
									 								@foreach($states as $state)

<option value="{{ $state->name }}"{{ old('prov') == $state->name? ' selected' :'' }}>
	{{ $state->name }}
</option>
									 								@endforeach
									 							</select>
									 							@if($errors->has('state'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('state') }}</small>
									 							@endif
									 						</div>
														</div>
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>Ciudad</b></span>
									 							<select name="state" class="form-control">
									 								<option value="">Elegir una Ciudad</option>
									 							</select>
									 							
									 						</div>
														</div>
														<div class="col-4">
															<div class="pf-field">
							 									<span class="pf-title"><b>Sector</b></span>
									 							<select name="state" class="form-control">
									 								<option value="">Elegir un Sector</option>
									 							</select>
									 							
									 						</div>
														</div>
													</div>
												</div>
						 
						 						<button type="submit">Continuar <i class="fas fa-arrow-right"></i></button>
						 					</div>
						 					
						 				</div>
						 				</form>
						 			</div>
					 			</div>
					 		</div>
					 	</div>
					</div>
				 </div>
			</div>
		</div>
	</section>
@endsection
