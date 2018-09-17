@extends('layout')
@section('contenido')
<section class="overlape">
		
	</section>

	<section>
		<br><br><br><br><br>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
				 	<aside class="col-lg-3 column border-right" style="background-color: white;">
				 		<div class="widget">
				 			<div class="search_widget_job">
				 				<h3 class="sb-title open">+ Buscar en</h3>
				 				<div class="job-field">
				 					<select name="" id="" class="chosen-city">
				 						<option value="ninguno">Ubicación</option>
				 						@foreach($states as $state)
				 						<option value="">{{ $state->name }}</option>
				 						@endforeach
				 					</select>
				 					<i class="la la-map-marker"></i>
				 				</div><!-- Search Widget -->
				 			</div>
				 		</div>
				 		
				 		<div class="widget">
				 			<h3 class="sb-title open">+ Categorias</h3>
				 			<div class="specialism_widget">
				 				<div class="simple-checkbox scrollbar">
				 					@foreach($categories as $category)
										<p><input type="checkbox" name="spealism" id="{{ $category->id }}"><label for="{{ $category->id }}">{{ $category->name }}</label></p>
				 					@endforeach
				 				</div>
				 			</div>
				 		</div>
				 		
				 	</aside>
				 	<div class="col-lg-9 column">
				 		<div class="modrn-joblist" style="background-color: white; padding: 12px;">
						 	<div class="tags-bar" >
						 		<span>{{ $tag }}<i class="close-tag">x</i></span>
						 		<div class="action-tags">
						 			<a href="#" title=""><i class="la la-trash-o"></i> borrar</a>
						 		</div>
						 	</div><!-- Tags Bar -->
					 		<div class="filterbar">
					 			<span class="emlthis"><a href="mailto:example.com" title=""><i class="la la-envelope-o"></i> Enviar por correo</a></span>
					 			<div class="sortby-sec">
					 				<span>Ordenar por</span>
									<select data-placeholder="20 Per Page" class="chosen">
										<option>30 Por Página</option>
										<option>40 Por Página</option>
										<option>50 Por Página</option>
									</select>
					 			</div>
					 			<h5>{{ $total_ads }} Servicios Encontrados</h5>
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
									
									@if(App\Company::where('user_id',$ad->user_id)->first()==null)
										
									@else
									<span>{{ App\Company::where('user_id',$ad->user_id)->first()->value('name_company') }}</span>
									@endif

									

									<div class="job-lctn"><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html">{{ $ad->description }}</a></div>
									
								</div>
								<div class="job-style-bx">
									@if(App\Company::where('user_id',$ad->user_id)->first()==null)
										<img style="padding-bottom: 5px" class="rounded mx-auto d-block" width="80" src="{{ asset('images/avatar_user.png') }}" alt="">
									@else
									<img style="padding-bottom: 5px" class="rounded mx-auto d-block" width="80" src="{{ asset('images') }}/{{ App\Company::where('user_id',$ad->user_id)->first()->value('image') }}" alt="">
									@endif
									<a href="#"><span class="job-is ft">Contactar</span></a>
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