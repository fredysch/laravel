@include('header')
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
                <li style="background-image: url({{ asset('images/contato.jpg') }});">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
					   <div class="col-md-4"></div>
			   			<div class="col-md-4 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
			   					<h2 class="heading-section">Contate-nos</h2>
			   				</div>
			   			</div>
						<div class="col-md-4"></div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-contact-section">
			<div class="container">
			<form action="{{ route('send-contact') }}" method="POST">
				@csrf
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<h3 class="section-title">Nosso Endereço</h3>
							<p>Venha conhecer nossa empresa:</p>
							<ul>
								<li class="contact"><i class="fa-regular fa-map"></i> Rua Frei Mariano, 206 (Apartamento 1) Centro - Corumbá/MS</li>
								<li class="contact"><i class="fa-regular fa-map"></i> Bandeirantes, 1.407 Amambai - Campo Grande/MS</li>
								<li class="contact"><i class="fa-solid fa-mobile-screen"></i> (67)997152323</li>
							</ul>
						</div>
						<div class="col-md-6 col-md-pull-6">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Nome" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="phone" placeholder="Telefone" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Mensagem" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Enviar" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<!-- END fh5co-contact -->
		@include('footer')