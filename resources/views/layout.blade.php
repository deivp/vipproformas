<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Vipproformas - Profesionales de la Construcción</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	<!-- Styles -->

	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/icons.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/chosen.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/colors/colors.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/vip_iso.ico') }}">

	
</head>
<body>

<div class="page-loading">
	<img src="images/loader.gif" alt="" />
	<span>Cargando...</span>
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="{{ route('public.home') }}" title=""><img src="{{ asset('images/logo-vip.png') }}" alt="" /></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images/icon.png" alt="" /> Menu
				</div>
				<div class="res-closemenu">
					<img src="images/icon2.png" alt="" /> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="{{ route('user.nuevo_anuncio') }}" title="Nuevo Anuncio" class="post-job-btn"><i class="la la-plus"></i>Anunciar</a>
				<ul class="account-btns">
					<li><a href="{{ route('public.proformas') }}"><i class="fas fa-file-invoice-dollar"></i> Ùltimas Proformas</a></li>
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Registrarme</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Acceso Usuarios</a></li>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name" />
				<button type="submit"><i class="la la-search"></i></button>
			</form>
			<div class="responsivemenu">
				
			</div>
		</div>
	</div>
	
	<header class="stick-top forsticky">
		<div class="menu-sec">
			<div class="container fluid">
				<div class="logo">
					<a href="{{ route('public.home') }}" title=""><img src="{{ asset('images/logo-vip.png') }}" alt="" /></a>
				</div><!-- Logo -->
				<div class="btn-extars">
					<a href="{{ route('user.nuevo_anuncio') }}" title="Nuevo Anuncio" class="post-job-btn"><i class="la la-plus"></i>Anunciar</a>
					<ul class="account-btns">
						<li><a href="{{ route('public.proformas') }}"><i class="fas fa-file-invoice-dollar"></i> Ùltimas Proformas</a></li>
						<li class="signup-popup"><a title=""><i class="la la-key"></i> Registrarme</a></li>
						<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Acceso Usuarios</a></li>
					</ul>
				</div><!-- Btn Extras -->
				<nav>
					
				</nav><!-- Menus -->
			</div>
		</div>
	</header>
	@yield('contenido')
	

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>¿Te Llamamos Gratis?</h3>
							<a href="" class="btn btn-success"><i class="fas fa-mobile-alt"></i> Llamada</a>
							{{-- <span>También puedes llamarnos al teléfono gratuito (593) 992190334</span> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="#" title=""><img src="{{ asset('images/logo-vip.png') }}" alt="" /></a>
								</div>
								<span>América N29-23 y Bartolome de las Casas</span>
								<span>+593 99 796 6163</span>
								<span>info@vipproformas.com</span>
								<div class="social">
									<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=i97OAKA9lpl6e22mp7GZOc1V8Ek7FAPMxVvEq1XbDmcXxyxj1STmFG8um2wH"></script></span>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-sm-4 column">
						<div class="widget">
							<h3 class="footer-title">Información Útil</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="{{ route('public.seguridad') }}" title="">Privacidad & Seguridad </a>
										<a href="" title="">Terminos del Servicio</a>
										<a href="#" title="">Prensa</a>	
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Suporte Técnico </a>
										<a href="{{ route('public.about') }}" title="">¿Como Funciona? </a>
										<a href="{{ route('public.contactos') }}" title="">Contactos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Síguenos</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title=""><i class="fab fa-facebook-square"></i> Facebook</a>
										<a href="#" title=""><i class="fab fa-linkedin"></i> Linkedin</a>
										<a href="#" title=""><i class="fab fa-youtube"></i> Youtube</a>
										<a href="#" title=""><i class="fab fa-instagram"></i> Instagram</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<h3 class="footer-title">¿Necesitas ayuda?</h3>
							<div class="download_widget">
								
								<a href="" class="btn btn-primary"><i class="fab fa-facebook-messenger"></i> Messenger</a><br>
								<a href="" class="btn btn-success"><i class="fab fa-whatsapp"></i> Whatsapp</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Vipproformas | Todos los Derechos Reservados</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Ingresa a tu cuenta</h3>
		<form action="{{ route('panel.mis_proformas') }}" method="GET">
			<div class="cfield">
				<input type="email" placeholder="E-mail" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Recordar</label>
			</p>
			<a href="#" title="">Olvide mi Password</a>
			<button type="submit">Ingresar</button>
		</form>
		{{-- <div class="extra-login">
			<span>O</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fab fa-facebook-square"></i></a>
				<a class="tw-login" href="#" title=""><i class="fab fa-twitter-square"></i></a>
			</div>
		</div> --}}
	</div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Registrarme</h3>
		{{-- <div class="select-user">
			<span>Quiero buscar</span>
			<span>Quiero anunciar</span>
		</div> --}}
		<form>
			<div class="cfield">
				<input type="text" placeholder="Email" />
				<i class="la la-envelope-o"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" />
				<i class="la la-key"></i>
			</div>
			{{-- <div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen">
					<option>Web Development</option>
					<option>Web Designing</option>
					<option>Art & Culture</option>
					<option>Reading & Writing</option>
				</select>
			</div> --}}
			<div class="cfield">
				<input type="text" placeholder="Celular" />
				<i class="la la-phone"></i>
			</div>
			<button type="submit">Registrarme</button>
		</form>
		{{-- <div class="extra-login">
			<span>O</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fab fa-facebook-square"></i></a>
				<a class="tw-login" href="#" title=""><i class="fab fa-twitter-square"></i></a>
			</div>
		</div> --}}
	</div>
</div><!-- SIGNUP POPUP -->

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/modernizr.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/slick.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/parallax.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/select-chosen.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/counter.js') }}" type="text/javascript"></script>

</body>
</html>

