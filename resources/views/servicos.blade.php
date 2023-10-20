@include('header')
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
				<li style="background-image: url({{ asset('images/servicos.jpg') }});">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
					   <div class="col-md-4"></div>
			   			<div class="col-md-4 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
			   					<h2 class="heading-section">Nossos servi&ccedil;os</h2>
			   				</div>
			   			</div>
						<div class="col-md-4"></div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-services-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="services-inner text-center">
							<img src="images/b-engineer.svg" alt="blueprint">
							<h3>Projetos Industriais</h3>
							<p> Semantics.</p>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services-inner">
							<img src="images/b-hotel.svg" alt="blueprint">
							<h3>Projetos Comerciais</h3>
							<p> Semantics.</p>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services-inner">
							<img src="images/b-hammer.svg" alt="blueprint">
							<h3>Projetos Residenciais</h3>
							<p> Semantics.</p>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="services-inner">
							<img src="images/b-tractor.svg" alt="blueprint">
							<h3>Projetos Rurais</h3>
							<p>Semantics.</p>
						</div>
					</div>					
				</div>
			</div>
		</div>
		@include('footer')