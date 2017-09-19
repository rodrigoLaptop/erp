<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PATITO SOFT</title>

    <!-- Bootstrap -->
    <link href="{{asset('vistaPrincipal/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('vistaPrincipal/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vistaPrincipal/css/animate.css')}}">
	<link href="{{asset('vistaPrincipal/css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('vistaPrincipal/css/style.css')}}" rel="stylesheet" />


    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">

        <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{asset('css/signin.css')}}">
    <!-- =======================================================
        Theme Name: Day
        Theme URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div class="navbar-brand">
						<a href="{{asset('/')}}"><h1>Patito ERP</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="{{asset('/')}}" >Home</a></li>
							<li role="presentation"><a href="{{asset('/about')}}">Nosotros</a></li>
							<li role="presentation"><a href="{{asset('/services')}}">Software ERP</a></li>
							<li role="presentation"><a href="{{asset('/contact')}}">Contáctanos</a></li>
							<li role="presentation"><a href="{{asset('/register')}}">Regístrate</a></li>
							<li role="presentation"><a href="{{asset('/login')}}">Iniciar Sesión</a></li>
						</ul>
					</div>
				</div>		
            </div><!--/.container-->
        </nav><!--/nav-->		
    </header><!--/header-->	
	@yield('CONTENIDO')
	<footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>Información de Contacto</h4>
				<p>Si tienes alguna duda en cuanto a nuestros servicios, no dudes en comunicarte con nosotros.</p>
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i> Santa Cruz - Bolivia </li>
						<li><i class="fa fa-phone fa"></i> 67849099</li>
						<li><i class="fa fa-envelope fa"></i> patitoSoft@gmail.com</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div class="text-center">
					<h4>Galería</h4>
					<ul class="sidebar-gallery">
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery1.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery2.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery3.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery4.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery5.png')}}" alt="" /></a></li>
						<li><a href="#"><img src="{{asset('vistaPrincipal/img/gallery6.png')}}" alt="" /></a></li>
					</ul>
				</div>
			</div>

			<!--div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<div class="">
					<h4>Newsletter Registration</h4>
					<p>Subscribe today to receive the latest Day news via email. You may unsubscribe from this service at any time</p>
					<div class="btn-gamp">
						<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
					</div>

					<div class="btn-gamp">
						<a type="submit" class="btn btn-default">Subscribe</a>
					</div>

			</div-->
        </div>

		</div>
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; PatitoSoft.Derechos Reservados
				</div>
			</div>						
		</div>				
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('vistaPrincipal/js/jquery.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('vistaPrincipal/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vistaPrincipal/js/wow.min.js')}}"></script>
	<script>wow = new WOW({}).init();</script>	
    
</body>
</html>