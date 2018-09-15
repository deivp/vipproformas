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
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec" style="margin-top: -40px;">
					 			<div class="border-title">
					 				<h2 style="color: #FF9A00"><i class="far fa-file-alt"></i> Mis Proformas</h2>
					 			</div>
					 			<div class="block" style="margin-top: -80px;">
					 				@foreach($ads as $ad)
					 					<div class="row" style="background-color: white; padding: 10px; margin-bottom: 10px;">
					 						<div class="col-lg-3">
					 							<img width="200" src="{{ asset('images') }}/{{ $ad->imagen_1 }}" alt="">
					 						</div>
					 						<div class="col-lg-9">
					 							<div class="row" style="padding-bottom: 10px;">
					 								<div class="col-lg-10">
					 									<h6 style="color: #5CBEFF;"><a href="{{ route('panel.ver_proforma',$ad->id) }}">{{ $ad->title }}</a> <a target="_blank" href="{{ route('public.ver_proforma',[$ad->id,$ad->title])}}"> <small> <i class="fas fa-external-link-alt"></i></small></a></h6>
					 								</div>
					 								<div class="col-lg-2">
					 									<a href="">En revision</a>
					 								</div>
					 							</div>
					 							<div class="row" style="padding-bottom: 10px;">
					 								<div class="col-lg-6">
					 									<span><i class="fas fa-map-marker-alt"></i> {{ $ad->state }}</span><br>
					 									<span><i class="fas fa-bars"></i> {{ $ad->category }}</span><br>
					 									<span><i class="far fa-money-bill-alt"></i> {{ $ad->price }}</span>
					 								</div>
					 								<div class="col-lg-2">
					 									<i class="fas fa-users"></i> 0<br>
					 									<small>Visitas</small>
					 								</div>
					 								<div class="col-lg-2">
					 									<i class="far fa-envelope"></i> 0<br>
					 									<small>Consultas</small>
					 								</div>
					 								<div class="col-lg-2">
					 									<i class="fas fa-mobile-alt"></i> 0<br>
					 									<small>Interesado en contactarse</small>
					 								</div>
					 							</div>
					 							
					 							<div class="row" style="background-color: #F8F8F8; padding: 5px;">
					 								<div class="col">
					 										<form onsubmit="return confirm('¿Esta seguro de eliminar esta proforma?');" action="{{ route('panel.destroy',$ad->id) }}" method="POST">
					 											@csrf
					 											{{ method_field('DELETE') }}
					 											<a class="btn btn-link pull-left" href="{{ route('panel.ver_proforma',$ad->id) }}"><i class="fas fa-pen"></i> Editar</a>
					 											<button class="btn btn-link pull-left"><i class="fas fa-trash-alt"></i> Eliminar</button>
					 										</form>
					 									
					 								</div>
					 							</div>
					 						</div>
					 					</div>
					 				@endforeach
					 			</div>
					 		</div>
					 	</div>
					</div>
				 </div>
			</div>
		</div>
	</section>
@endsection
