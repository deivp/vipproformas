@extends('layout')
@section('contenido')
<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="main-featured-sec style2" >
							<ul class="main-slider-sec style2 text-arrows">
								<li class="slideHome"><img src="{{ asset('images/slider_a.png') }}" alt="" /></li>
								<li class="slideHome"><img src="http://placehold.it/1600x800" alt="" /></li>
								<li class="slideHome"><img src="http://placehold.it/1600x800" alt="" /></li>
							</ul>
							<div class="job-search-sec">
								<div class="job-search style2">
									<h3>Profesionales de la construcción <i class="fas fa-brush fa-sm"></i></h3>
									<span style="font-size: 25px">Presupuestos económicos y de calidad en tu zona</span>
									<div class="search-job2">	
										<form action="{{ route('public.buscar_proformas') }}" method="POST">
											{{ csrf_field() }}
											<div class="row no-gape">
												<div class="col-lg-7 col-md-6 col-sm-8">
                                                    <div class="job-field">
                                                        <input type="text" placeholder="Que necesitas?" name="buscar" />
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 col-sm-4">
                                                    <div class="job-field">
		
                                                        <select name="categoria" data-placeholder="Any category" class="chosen-city">
                                                            <option value="0">Categoria</option>
                                                            @foreach($categories as $category)
                                                            	<option value="{{ $category->name }}">{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2  col-md-3 col-sm-12">
                                                    <button type="submit">BUSCAR <i class="la la-search"></i></button>
                                                </div>
											</div>
										</form>
									</div><!-- Job Search 2 -->
									<div class="quick-select-sec">
										<div class="row">
											@foreach($categories as $category_list)
											<div class="col-lg-3 col-md-3 col-sm-3">
												<div class="quick-select">
													<a href="{{ route('public.buscar_anuncio_categoria') }}" title="">
														@php
															echo $category_list->icon;
														@endphp
														<span>{{ $category_list->name }}</span>
													</a>
												</div><!-- Quick Select -->
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>¿Qué necesitas?</h2>
							<span>Tu proforma económica y de calidad empieza aquí.</span>
						</div><!-- Heading -->
						<div class="job-grid-sec">
							<div class="row">
								@foreach($ads  as $ad)
								<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
									<div class="job-grid">
										<div class="job-title-sec">
											<div class="c-logo"> <a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html"><img src="{{ asset('images/') }}/{{ $ad->imagen_2 }}" alt="" /></a> </div>
											<h3><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html" title="">{{ $ad->title }}</a></h3>
											<span>{{ $ad->category }} - {{ $ad->subcategory }}</span>
											{{-- <span class="fav-job"><i class="la la-heart-o"></i></span> --}}
										</div>
										<span class="job-lctn"><a href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html">{{ $ad->state }},</a></span>
										<a  href="{{route('public.ver_proforma',[$ad->id,str_replace(' ', '-', $ad->title)])}}.html" title="">VER PROFORMA</a>
									</div><!-- JOB Grid -->
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="#" title="" class="style2">Ver más proformas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>¿Cómo funciona VipProformas?</h2>
							<span>Todo lo que necesitas saber para obtener tu proforma
							</span>
						</div><!-- Heading -->
						<div class="how-to-sec">
							<div class="how-to">
								<span class="how-icon"><i class="la la-user"></i></span>
								<h3>Cuéntanos qué necesitas</h3>
								<p>Desde pequeños trabajos a grandes rehabilitaciones.</p>
							</div>
							<div class="how-to">
								<span class="how-icon"><i class="la la-file-archive-o"></i></span>
								<h3>Recibe presupuestos de tu zona</h3>
								<p>Las mejores empresas te enviarán sus ofertas. </p>
							</div>
							<div class="how-to">
								<span class="how-icon"><i class="la la-list"></i></span>
								<h3>Compara ofertas y elige la mejor</h3>
								<p>Elige las empresas mejor valoradas por otros usuarios.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Top de Empresas Registradas</h2>
							<span>Estas son algunas de las empresas mas solicitadas en el ultimo mes ¿has trabajos con alguno de ellos?</span>
						</div><!-- Heading -->
						<div class="top-company-sec">
							<div class="row" id="companies-carousel">
								@foreach($companies as $company)
								<div class="col-lg-3">
									<div class="top-compnay">
										<img src="{{ asset('images') }}/{{ $company->image }}" alt="" />
										<h3><a href="#" title="">{{ $company->name_company }}</a></h3>
										<span>{{ $company->profession }},</span>
										<a href="#" title="">CONTACTAR</a>
									</div><!-- Top Company -->
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(http://placehold.it/1920x1000) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color #273248"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>VipProformas en números</h2>
							<span>Hay miles de trabajos publicados, necesitas un experto? aqui lo encontraras</span>
						</div><!-- Heading -->
						<div class="stats-sec">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="stats">
										<span>{{ $total_ads }}</span>
										<h5>Proformas Publicados</h5>
									</div>
								</div>
								
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="stats">
										<span>{{ $total_companies }}</span>
										<h5>Empresas Registradas</h5>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="stats">
										<span>{{ $total_users }}</span>
										<h5>Miembros</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	{{-- <section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Quick Career Tips</h2>
							<span>Found by employers communicate directly with hiring managers and recruiters.</span>
						</div><!-- Heading -->
						<iframe width="600" height="540" src="https://www.youtube.com/embed/cC9iyYDjJ2s?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<section>
		<div class="block gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="subscription-sec">
							<div class="row">
								<div class="col-lg-6">
									<h3>Necesitas Ayuda ?</h3>
									<span>Envianos tu e-mail y un asesor se contactara contigo.</span>
								</div>
								<div class="col-lg-6">
									<form>
										<input type="text" placeholder="E-mail" />
										<button type="submit"><i class="la la-paper-plane icon_white"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	{{-- <section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="social-links">
							<a href="#" title="" class="fb-color"><i class="fab fa-facebook"></i> Facebook</a>
							<a href="#" title="" class="in-color"><i class="la la-instagram"></i> Instagram</a>
							<a href="#" title="" class="tw-color"><i class="la la-linkedin"></i> Linkedin</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

@endsection