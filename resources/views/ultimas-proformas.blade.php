@extends('layout')
@section('contenido')
<section class="overlape">
		
	</section>

	<section>
		<br><br><br><br><br>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
				 	
				 	<div class="col-lg-12 column" style="background-color: white; padding: 12px;">
				 		<div class="modrn-joblist">
						 	<div class="tags-bar" >
						 		<h4 class="text-left">Últimas Proformas Publicadas</h4>
						 		<p>Estas son algunas de las reformas que hemos llevado a cabo</p>
						 	</div><!-- Tags Bar -->
					 		<div class="filterbar">
					 			
					 			<div class="sortby-sec">
					 				<span>Categoria</span>
					 				<select name="categoria" id="" class="chosen-city">
				 						<option value="ninguno">Seleccionar</option>
				 						@foreach($categories as $category)
				 						<option value="">{{ $category->name }}</option>
				 						@endforeach
				 					</select>

					 				<span>&nbsp;&nbsp;Buscar en</span>
					 				<select name="provincia" id="" class="chosen-city">
				 						<option value="ninguno">Seleccionar</option>
				 						@foreach($states as $state)
				 						<option value="">{{ $state->name }}</option>
				 						@endforeach
				 					</select>

					 				<span>&nbsp;&nbsp;Ordenar por</span>
									<select data-placeholder="20 Per Page" class="chosen">
										<option>30 Por Página</option>
										<option>40 Por Página</option>
										<option>50 Por Página</option>
									</select>
					 			</div>
					 			
					 		</div>
						 </div><!-- MOdern Job LIst -->
						 <div class="job-list-modern">
						 	<div class="job-listings-sec">
								@foreach($ads as $ad)
								<div class="job-listing wtabs" style="padding: 12px;">
									<div class="job-title-sec">
									<div class="c-logo"> 

										<a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html"><img src="{{ asset('images') }}/{{ $ad->imagen_1 }}" alt="" /></a>
										<small class="precio_anuncio">Desde</small><br><br>
										<h2 class="precio_anuncio">${{ $ad->price }}</h2>
									</div>
									<h3><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html" title="">{{ $ad->title }}</a></h3>
									<div class="job-lctn"><i class="la la-map-marker"></i><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html">{{ $ad->state }}, &nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-search-plus"></i>{{ $ad->category }}</a></div>
									<span>{{ $ad->name_company }}</span>
									<div class="job-lctn"><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html">{{ $ad->description }}</a></div>
									
								</div>
								<div class="job-style-bx">
									<img style="padding-bottom: 5px" class="rounded mx-auto d-block" width="80" src="{{ asset('images/avatar_user.png') }}" alt="">
									<a href=""><span class="job-is ft">Contactar</span></a>
									<i style="padding-bottom: 10px; padding-right: 13px" >{{ substr($ad->created_at, 0,10) }}</i>
								</div>
								</div>
								@endforeach
								<!-- Job -->
							</div>
						 </div>
					 </div>
				 </div>
			</div>
		</div>
	</section>
@endsection