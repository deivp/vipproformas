@extends('layout')
@section('contenido')

	<br><br><br>
	<section>
		<div class="block">
			<div class="container">
				<div class="row">
				 	<div class="col-lg-12 column">
				 		<div class="job-single-sec style3">
				 			
				 			<div class="job-wide-devider">
							 	<div class="row">
							 		<div class="col-lg-8 column" style="background-color: white">		
							 			<div class="job-details">
							 				<h2><a href=""></a>{{ $ad->title }}</h2>
							 				{{-- <span><a href="{{ url()->previous() }}"><i class="fas fa-arrow-left"></i>  --}}</a><i class="la la-map-marker"></i>{{ $ad->state }},</span>
							 				<hr>
							 				{{-- INICIA SLIDER --}}
							 				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
											  <div class="carousel-inner">
											    <div class="carousel-item active">
											      <img class="d-block w-100" src="{{ asset('images/') }}/{{ $ad->imagen_1 }}" alt="First slide">
											    </div>
											    <div class="carousel-item">
											      <img class="d-block w-100" src="{{ asset('images/') }}/{{ $ad->imagen_2 }}" alt="Second slide">
											    </div>
											    <div class="carousel-item">
											      <img class="d-block w-100" src="{{ asset('images/') }}/{{ $ad->imagen_3 }}" alt="Third slide">
											    </div>
											  </div>
											  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
											    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
											    <span class="carousel-control-next-icon" aria-hidden="true"></span>
											    <span class="sr-only">Next</span>
											  </a>
											</div>
											{{-- FIN SLIDER --}}
							 				<h3>Descripción</h3>
							 				<p>{{ $ad->description }}</p>
							 			</div>
							 			<div class="share-bar">
							 				<span>Compartir</span><a href="#" title="" class="share-fb"><i class="fab fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fab fa-twitter-square"></i></a>
							 			</div>
							 			<div class="extra-job-info">
								 			<span><i class="la la-clock-o"></i><strong>35</strong> Dias</span>
								 			<span><i class="fas fa-user-check"></i><strong>Verificado</strong> </span>
								 			<span><i class="la la-search-plus"></i><strong>35697</strong> Busquedas</span>
								 		</div>
								 		<div class="recent-jobs">
							 				<h3>Proformas Similares</h3>
							 				@foreach($similar_ads as $similar_ad)
							 				<div class="job-list-modern">
											 	<div class="job-listings-sec no-border">
													<div class="job-listing wtabs">
														<div class="job-title-sec">
															<div class="c-logo"> <a href="{{route('public.ver_proforma',[$similar_ad->id,str_replace(' ', '-', $similar_ad->title)])}}.html"><img src="{{ asset('images') }}/{{ $similar_ad->imagen_3}}" alt="" /></a> </div>
															<h3><a href="{{route('public.ver_proforma',[$similar_ad->id,str_replace(' ', '-', $similar_ad->title)])}}.html" title="">{{ $similar_ad->title }}</a></h3>
															
															<div class="job-lctn"><i class="la la-map-marker"></i>{{ $ad->state }},</div>
															<div class="job-lctn"><a href="{{route('public.ver_proforma',[$similar_ad->id,str_replace(' ', '-', $similar_ad->title)])}}.html">{{ $similar_ad->description }}</a></div>
														</div>
														<div class="job-style-bx" style="background-color: white">
															<a href="{{route('public.ver_proforma',[$similar_ad->id,str_replace(' ', '-', $similar_ad->title)])}}.html"><span class="job-is ft">Contactar</span></a>
															{{-- <span class="fav-job"><i class="la la-heart-o"></i></span> --}}
															<i>{{ substr($similar_ad->created_at, 0,10)  }}</i>
														</div>
													</div>
												</div>
											 </div>
							 				@endforeach
							 			</div>
							 		</div>
							 		<div class="col-lg-4-ad column">
							 			
								 		<div class="quick-form-job">
								 			<div class="job-single-head3">
								 			@if(App\Company::where('user_id',Auth::user()->id)->first()==null)
								 			{{-- DATOS AVATAR COMPANIA --}}
								 			<div class="job-thumb"> <img src="{{ asset('images/avatar_user.png') }}" alt="" /><span style="color:green"><i class="fas fa-user-check"></i> Verificado</span> </div>
							 				<div class="job-single-info3">
							 					<h3>{{ $user->email }}</h3>
							 					<span><i class="fas fa-mobile-alt"></i>0{{ $user->movil }}</span>
							 					<ul class="tags-jobs">
								 					<li><i class="la la-calendar-o"></i> Desde: {{ substr($user->created_at, 0,10)  }}</li>
								 					{{-- <li><i class="la la-eye"></i> Visitas 5683</li> --}}
								 				</ul>
							 				</div>
							 			</div>
							 				<h3>!Contacta al anunciate¡</h3>
								 			<form>
								 				<textarea placeholder="Mensaje para">Hola, vi este anuncio en Vipproformas y quiero que me contacten. Gracias.</textarea>
								 				<input type="text" placeholder="E-mail *" />
								 				<input type="text" placeholder="Nombre *" />
								 				<input type="text" placeholder="Teléfono *" />
								 				<button class="submit">Contactar</button>
								 				<span>Al enviar estás aceptando los <a href="#" title="">Términos y condiciones</a></span>
								 			</form>
								 		</div>

								 		<div class="job-overview">
								 			
								 			<ul>
								 				<li><i class="la la-money"></i><h3>Precio Desde</h3><span>${{ $ad->price }}</span></li>			 				
								 				<li><i class="la la-thumb-tack"></i><h3>Categoria</h3><span>{{ $ad->category }}</span></li>
								 				
								 			</ul>
								 		</div>
								 			{{-- FIN DATOS AVATAR COMPANIA --}}
								 			@else
								 			{{-- SI HAY DATOS DE COMPANIA --}}
								 			<div class="job-thumb"> <img src="{{ asset('images') }}/{{ $company->image }}" alt="" /><span style="color:green"><i class="fas fa-user-check"></i> Verificado</span> </div>
							 				<div class="job-single-info3">
							 					<h3>{{ $company->name_company }}</h3>
							 					<span><i class="fas fa-mobile-alt"></i>0{{ $user->movil }}</span>
							 					<ul class="tags-jobs">
								 					<li><i class="la la-file-text"></i> {{ $company->category }}</li>
								 					<li><i class="la la-calendar-o"></i> Desde: {{ substr($company->created_at, 0,10)  }}</li>
								 					{{-- <li><i class="la la-eye"></i> Visitas 5683</li> --}}
								 				</ul>
							 				</div>
							 			</div>
							 				<h3>!Contacta al anunciate¡</h3>
								 			<form>
								 				<textarea placeholder="Mensaje para {{ $company->name_company }}">Hola, vi este anuncio en Vipproformas y quiero que me contacten. Gracias.</textarea>
								 				<input type="text" placeholder="E-mail *" />
								 				<input type="text" placeholder="Nombre *" />
								 				<input type="text" placeholder="Teléfono *" />
								 				<button class="submit">Contactar</button>
								 				<span>Al enviar estás aceptando los <a href="#" title="">Términos y condiciones</a></span>
								 			</form>
								 		</div>

								 		<div class="job-overview">
								 			
								 			<ul>
								 				<li><i class="la la-money"></i><h3>Precio Desde</h3><span>${{ $ad->price }}</span></li>			 				
								 				<li><i class="la la-thumb-tack"></i><h3>Categoria</h3><span>{{ $ad->category }}</span></li>
								 				<li><i class="fas fa-globe"></i><h3>Experiencia</h3><span>{{ $company->company_age	 }} Años</span></li>
								 			</ul>
								 		</div>
								 			{{-- FIN DATOS DE COMPANIA SI ES QUE HAY!! --}}
								 			@endif
							 				<!-- Job Overview -->
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