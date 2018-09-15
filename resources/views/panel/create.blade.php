@extends('panel.layout')
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
				 		<a href="{{ route('panel.mis_proformas') }}" class="btn btn-dark"><i class="fas fa-angle-left light_icon"></i> VOLVER A MIS PROFORMAS</a>&nbsp;&nbsp;
				 		<hr>
				 		<div class="alert alert-light alert-dismissible fade show" role="alert">
						  <strong>Recomendaciones para completar tu proforma:</strong><br>
						  <small>Mientras más completo esté, más atractivo va a ser para los usuarios. </small>

						  <div class="row" style="margin-top: 15px;">
						  	
						  		<div class="col-2" align="center">
						  			<i class="far fa-thumbs-up fa-5x primary_icon"></i>
						  		</div>
						  		<div class="col-5">
						  			<ul>
						  				<li><small><i class="fas fa-exclamation-circle fa-sm primary_icon"></i> Escribe una descripción de minimo 300 caràcteres a tu proforma, aplica todos los detalles posibles.</small></li>
						  				<li><small><i class="fas fa-exclamation-circle fa-sm primary_icon"></i> Te recomendamos agregar como mínimo 3 imagenes.</small></li>
						  			</ul>
						  		</div>
						  		<div class="col-5">
						  			<ul>
						  				<li><small><i class="fas fa-exclamation-circle fa-sm primary_icon"></i> Selecciona bien la categoria y subcategoria para que tenga un buen posicionamiento</small></li>
						  			<li><small><i class="fas fa-exclamation-circle fa-sm primary_icon"></i> La ubicación es muy importamte para poder llegar a tu publico objetivo.</small></li>
						  			</ul>
						  		</div>
						  	</div>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec" style="margin-top: -40px;">
					 			<div class="border-title">
					 				<hr>
					 				<h2><i class="far fa-file-alt"></i> Publicar Proforma</h2>
					 			</div>
					 			<div class="block" style="margin-top: -80px;">
									<div class="change-password">
						 			<form action="{{ route('panel.store') }}" method="POST">
						 				@csrf
						 				<div class="row">
						 					<div class="col-lg-10">
						 						<div class="block" style="margin-top: -50px;">
						 							<nav aria-label="breadcrumb">
													  <ol class="breadcrumb">
													    <li class="breadcrumb-item"><a href="#" class="btn btn-primary">Datos principales</a> <i style="color: #444444; padding: 5px;" class="fas fa-arrow-right"></i> </li>
													    <li class="breadcrumb-item active" aria-current="page"><a href="#" class="btn btn-secondary" disabled>Multimedia</a></li>
													  </ol>
													</nav>
						 							<div class="row">
							 							<div class="col-9">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Titulo</b> (Titulo de la Proforma, caracteristica principal)</span>
									 							<input type="text" value="{{ old('title') }}" name="title" />
									 							@if($errors->has('title'))
									 							<br>
									 								<small class="alert alert-danger">{{ $errors->first('title') }}</small>
									 							@endif
									 						</div>
							 							</div>
							 							<div class="col-3">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Precio</b><small> (Opcional)</small></span>
									 							<input type="text" placeholder="$1.000" name="price" value="{{ old('price') }}" />
									 						</div>
							 							</div>
						 							</div>
						 						</div>
						 						<span class="pf-title" style="margin-top: -30px;"><b>Descripción</b> (Cuentanos el detalle de la proforma, esto te ayudara llegar a más personas)</span>
						 						<div class="pf-field">
						 							<textarea name="description">{{ old('description') }}</textarea>
						 							@if($errors->has('description'))
						 								<small class="alert alert-danger">{{ $errors->first('description') }}</small>
						 							@endif
						 						</div>
						 						
						 						<div class="block" style="margin-top: -70px;">
						 							<div class="row">
							 							<div class="col-6">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Categoria</b></span>
									 							<select name="category" class="form-control">
									 								<option value="">Elegir Categoria</option>
									 								@foreach($categories as $category)
									 									<option value="{{ $category->name }}">{{ $category->name }}</option>
									 								@endforeach
																</select>
																@if($errors->has('category'))
																	<br>
																	<small class="alert alert-danger">{{ $errors->first('category') }}</small>
																@endif
									 						</div>
							 							</div>
							 							<div class="col-6">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>SubCategoria</b></span>
									 							<select name="subcategory" data-placeholder="Select Your CV" class="form-control">
																	<option value="">subcategoria</option>
																</select>
									 						</div>
							 							</div>
						 							</div>
						 						</div>
						 						<div class="block" style="margin-top: -70px;">
						 							<h4>Ubicación</h4><hr>
						 							<div class="row">
							 							<div class="col-4">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Provincia</b></span>
									 							<select name="state" class="form-control">
									 								<option value="">Seleccionar provinvia</option>
																	@foreach($states as $state)
									 									<option value="{{ $state->name }}">{{ $state->name }}</option>
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
									 							<select name="city" data-placeholder="Select Your CV" class="form-control">
																	<option value="">Ciudad</option>
																</select>
									 						</div>
							 							</div>
							 							<div class="col-4">
							 								<div class="pf-field">
							 									<span class="pf-title"><b>Zona</b></span>
									 							<select name="zona" data-placeholder="Select Your CV" class="form-control">
																	<option>Zona</option>
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
