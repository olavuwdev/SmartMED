<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica do Sertão</title>
    <!-- icon -->
	<link rel="icon" type="image/png" href="{{ asset('img/LOGO PNG/COLORIDO/V6.icon') }}?v=2" sizes="128x128">


    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/cubeportfolio/css/cubeportfolio.min.css') }}">
	<link href="{{ asset('css/nivo-lightbox.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/teste.css') }}">
</head>
    <body class="antialiased">

       <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					<p class="bold text-left">Segunda - Sabado, 07:00 as 18:00 </p>
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">Contato (84) 98532-2511</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/LOGO PNG/COLORIDO/V1.1.png" alt="" width="70" height="50" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Inicio</a></li>
				<li><a href="#service">Serviços</a></li>
				<li><a href="#doctor">Especialistas</a></li>
				<li><a href="#facilities">Facilidades</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>Mais <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Home form</a></li>
					<li><a href="index-video.html">Home video</a></li>
					<li><a href="index-cta.html">Home CTA</a></li>
					<li><a href="https://bootstrapmade.com">Download</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
{{ $slot }}
	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Sobre Clinica do Sertão</h5>
						<p>
							Cuidando de você com expertise e dedicação, para uma vida saudável e plena.
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Clinica Sertão</h5>
						<p>
							Cuidando de você com expertise e dedicação, para uma vida saudável e plena.
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Segunda - Sabado, 8am as 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> (84) 98532-2511
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@clinicadosertao.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Nossa localização</h5>
						<p>Rua Bernardo Vieira, n.º 133, Centro, CEP: 5965o-000 | Assú |RN.</p><br />
						<div class="mapa">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.934912510368!2d-36.90825818847072!3d-5.5766410943806415!2m3!1f0!2f0!3f0!3m2!1
						i1024!2i768!4f13.1!3m3!1m2!1s0x7b0f2549d32ea21%3A0x63d5a698598e7be6!2sR.%20Bernardo%20Vi%C3%AAira%2C%20133%2C%20A%C3%A7u%20-%20RN%2C%2059650-000!5e0!3
						m2!1spt-BR!2sbr!4v1690418317697!5m2!1spt-BR!2sbr"
						 style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>

					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Siga nossas Redes</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2015 - Clinica do Sertao. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
					<div class="text-right">
						<p><a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</p>
					</div>
                    <!--
                        All links in the footer should remain intact.
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Medicio
                    -->
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
	<!-- Core JavaScript Files -->
    <script src="{{ asset ('js/jquery.min.js') }}"></script>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('js/jquery.easing.min.js') }}"></script>
	<script src="{{ asset ('js/wow.min.js') }}"></script>
	<script src="{{ asset ('js/jquery.scrollTo.js') }}"></script>
	<script src="{{ asset ('js/jquery.appear.js') }}"></script>
	<script src="{{ asset ('js/stellar.js') }}"></script>
	<script src="{{ asset ('plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
	<script src="{{ asset ('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset ('js/nivo-lightbox.min.js') }}"></script>
    <script src="{{ asset ('js/custom.js') }}"></script>
	<script src="{{ asset ('https://cdn.jsdelivr.net/npm/flatpickr') }}"></script>
	<script>
		flatpickr('.flatpickr', {
		  dateFormat: 'd/m/Y', // Formato de data (dia/mês/ano)
		  locale: 'pt', // Localização para exibição dos meses e dias em português
		});
	  </script>



    </body>
</html>
