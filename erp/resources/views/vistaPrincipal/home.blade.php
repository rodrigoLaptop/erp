@extends('vistaPrincipal.index')
@section('CONTENIDO')

	<div class="slider">
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="{{asset('vistaPrincipal/img/slide.jpg')}}" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2><span>Patito ERP, un Servicio Software 100% web y totalmente gratuito </span></h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<p>Ideal para pequeñas y medianas empresas</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
							</div>
						</div>
					</div>

					<div class="item">
						<img src="{{asset('vistaPrincipal/img/slide.jpg')}}" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
								<h2>Toma el control, organiza e incrementa tus ventas</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<p>Un software de gestión con todo lo que necesitas</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
							</div>
						</div>
					</div>
					<div class="item">
						<img src="{{asset('vistaPrincipal/img/slide.jpg')}}" class="img-responsive" alt="">
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
								<h2>Administra tu empresa en un click</h2>
							</div>
							<div class="col-md-10 col-md-offset-1">
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
									<p>Comienza hoy a tomar las mejores decisiones para tu empresa</p>
								</div>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
							</div>
						</div>
					</div>
				</div>

				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->

	<div class="about">
		<div class="container">
			<div class="text-center">
				<h2>Expande tu negocio </h2>
				<div class="col-md-10 col-md-offset-1">
					<p>Nuestro Sistema ERP le brinda la facilidad de gestionar su negocio en cualquier momento y lugar, de manera fácil y segura. Tener al alcance de su mano toda la información y las herramientas para una mejor toma de decisiones y potenciar la expansión de su negocio a través de estrategias de marketing. </p>
				</div>

			</div>
		</div>
	</div>
	<hr>

	<div class="services">
		<div class="container">
			<div class="text-center">
				<h2>consectetur adipisicing elit</h2>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<i class="fa fa-heart-o"></i>
				<h3>Fully Responsive</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<i class="fa fa-cloud"></i>
				<h3>Información en la nube</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
				<i class="fa fa-book"></i>
				<h3>Fresh and Clean</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
			<div class="col-md-3 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
				<i class="fa fa-gear"></i>
				<h3>Easy to Customize</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
			</div>
		</div>
	</div>

	<section class="action">
		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Amet porro numquam ratione</h4>
				<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
			</div>
			<div class="right-image hidden-xs"></div>
		</div>
	</section>

	<div class="gallery">
		<div class="text-center">
			<h2>Gallery</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident </p>
		</div>
		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/8.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>SEGURIDAD</h4>
						<p></p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/9.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>COMPRAS</h4>
						<p>Te brindamos un registro preciso de tus inventarios.</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/10.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>VENTAS</h4>
						<p>Conoce de primera mano las ganancias de tu negocio.</p>
					</figcaption>
				</figure>
			</div>
		</div>

		<div class="container">
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/11.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>CRM</h4>
						<p>Expande tu negocio y mejora la relación con tus clientes.</p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/12.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>REPORTES</h4>
						<p>Obten reportes rápidos y precisos.  </p>
					</figcaption>
				</figure>
			</div>
			<div class="col-md-4">
				<figure class="effect-marley">
					<img src="{{asset('vistaPrincipal/img/13.jpg')}}" alt="" class="img-responsive"/>
					<figcaption>
						<h4>CATALOGO WEB</h4>
						<p>Promociona tus productos a través de tu propia aplicación móvil.</p>
					</figcaption>
				</figure>
			</div>
		</div>
	</div>

@endsection