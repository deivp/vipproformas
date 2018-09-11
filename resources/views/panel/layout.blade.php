<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Panel - VIPPROFORMAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

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
	<span>Cargando..</span>
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="{{ asset('images/logo-vip.png') }}" alt="" /></a></div>
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
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
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
	
	<header class="stick-top">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="index.html" title=""><img src="{{ asset('images/logo-vip.png') }}" alt="" /></a>
				</div><!-- Logo -->
				<div class="my-profiles-sec">
					<span><img src="http://placehold.it/50x50" alt="" /> Ali TUFAN <i class="la la-bars"></i></span>
				</div>
				<div class="wishlist-dropsec">
					{{-- <span><i class="la la-heart"></i><strong>3</strong></span> --}}
					<div class="wishlist-dropdown">
						<ul class="scrollbar">
							<li>
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Web Designer / Developer</a></h3>
										<span>Massimo Artemisis</span>
									</div>
								</div><!-- Job -->
							</li>
							<li>
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
										<span>StarHealth</span>
									</div>
								</div><!-- Job -->
							</li>
							<li>
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Marketing Director</a></h3>
										<span>Tix Dog</span>
									</div>
								</div><!-- Job -->
							</li>
							<li>
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Web Designer / Developer</a></h3>
										<span>Massimo Artemisis</span>
									</div>
								</div><!-- Job -->
							</li>
							<li>
								<div class="job-listing">
									<div class="job-title-sec">
										<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
										<h3><a href="#" title="">Web Designer / Developer</a></h3>
										<span>Massimo Artemisis</span>
									</div>
								</div><!-- Job -->
							</li>
						</ul>
					</div>
				</div>
				<nav>
					<ul>
						<li>
							<a href="#" class="btn btn-primary" title=""><i class="fas fa-bullhorn"></i> ANUNCIAR</a>
						</li>
					</ul>
				</nav><!-- Menus -->
			</div>
		</div>
	</header>

	@yield('contenido')
	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="#" title=""><img src="http://placehold.it/178x40" alt="" /></a>
								</div>
								<span>Collin Street West, Victor 8007, Australia.</span>
								<span>+1 246-345-0695</span>
								<span>info@jobhunt.com</span>
								<div class="social">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-linkedin"></i></a>
									<a href="#" title=""><i class="fa fa-pinterest"></i></a>
									<a href="#" title=""><i class="fa fa-behance"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Privacy & Seurty </a>
										<a href="#" title="">Terms of Serice</a>
										<a href="#" title="">Communications </a>
										<a href="#" title="">Referral Terms </a>
										<a href="#" title="">Lending Licnses </a>
										<a href="#" title="">Disclaimers </a>	
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Support </a>
										<a href="#" title="">How It Works </a>
										<a href="#" title="">For Employers </a>
										<a href="#" title="">Underwriting </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>	
										<a href="#" title="">Canada Jobs</a>	
										<a href="#" title="">UK Jobs</a>	
										<a href="#" title="">Emplois en Fnce</a>	
										<a href="#" title="">Jobs in Deuts</a>	
										<a href="#" title="">Vacatures China</a>	
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
								<a href="#" title=""><img src="http://placehold.it/230x65" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>

<div class="profile-sidebar">
	<span class="close-profile"><i class="la la-close"></i></span>
	<div class="can-detail-s">
		<div class="cst"><img src="http://placehold.it/145x145" alt="" /></div>
		<h3>David Isama</h3>
		<span><i>UX / UI Designer</i> at Atract Solutions</span>
		<p>creativelayers088@gmail.com</p>
		<p>Member Since, 2017</p>
		<p><i class="la la-map-marker"></i>Pichincha / Turkey</p>
	</div>
	<div class="tree_widget-sec">
		<ul>
			<li class="inner-child active">
				<a href="#" title=""><i class="la la-file-text"></i>My Perfil</a>
				<ul style="display: block;">
					<li><a href="#" title="">Datos de usuario</a></li>
					<li><a href="#" title="">Cambiar contraseña</a></li>
				</ul>
			</li>
			<li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
		</ul>
	</div>
</div><!-- Profile Sidebar -->

<div class="view-resumesec">
	<div class="view-resumes">
		<span class="close-resume-popup"><i class="la la-close"></i></span>
		<h3>13 Times Viewed By 8 Companies.</h3>
		<div class="job-listing wtabs">
			<div class="job-title-sec">
				<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
				<h3><a href="#" title="">Web Designer / Developer</a></h3>
				<span>Massimo Artemisis</span>
				<div class="job-lctn">Sacramento, California</div>
			</div>
			<span class="date-resume">11.02.2017</span>
		</div><!-- Job -->
		<div class="job-listing wtabs">
			<div class="job-title-sec">
				<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
				<h3><a href="#" title="">C Developer (Senior) C .Net</a></h3>
				<span>Massimo Artemisis</span>
				<div class="job-lctn"><i class="la la-map-marker"></i>Sacramento, California</div>
			</div>
			<span class="date-resume">11.02.2017</span>
		</div><!-- Job -->
		<div class="job-listing wtabs">
			<div class="job-title-sec">
				<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
				<h3><a href="#" title="">Web Designer / Developer</a></h3>
				<span>Massimo Artemisis</span>
				<div class="job-lctn">Sacramento, California</div>
			</div>
			<span class="date-resume">11.02.2017</span>
		</div><!-- Job -->
		<div class="job-listing wtabs">
			<div class="job-title-sec">
				<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
				<h3><a href="#" title="">Web Designer / Developer</a></h3>
				<span>Massimo Artemisis</span>
				<div class="job-lctn">Sacramento, California</div>
			</div>
			<span class="date-resume">11.02.2017</span>
		</div><!-- Job -->
	</div>
</div>

<div class="follow-companiesec">
	<div class="follow-companies">
		<span class="close-follow-company"><i class="la la-close"></i></span>
		<h3>Follow Companies.</h3>
		<ul id="scrollbar">
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">Web Designer / Developer</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">Tix Dog</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">StarHealth</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">Altes Bank</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">StarHealth</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
			<li>
				<div class="job-listing wtabs">
					<div class="job-title-sec">
						<div class="c-logo"> <img src="http://placehold.it/98x51" alt="" /> </div>
						<h3><a href="#" title="">Altes Bank</a></h3>
						<div class="job-lctn">Sacramento, California</div>
					</div>
					<a href="#" title="" class="go-unfollow">Unfollow</a>
				</div><!-- Job -->	
			</li>
		</ul>		
	</div>
</div>

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

