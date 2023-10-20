       
        <footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<h3 class="section-title">Sobre nós:</h3>
							<p>Temos como objetivo promover o uso da energia solar fotovoltaica como forma de reduzir os custos para os consumidores. Contamos com que existe de mais moderno atualmente no mercado em tecnologias para geração e aproveitamento de energias sustentáveis e renováveis.</p>
						</div>
						
						<div class="col-md-3">
							<h3 class="section-title">Nossos serviços</h3>
							<ul>
								<li><a href="">Projetos Industriais</a></li>
								<li><a href="">Projetos Comerciais</a></li>
								<li><a href="">Projetos Residenciais</a></li>
								<li><a href="">Projetos Rurais</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="section-title">Nosso Endereço</h3>
							<ul>
								<li><i class="fa-regular fa-map"></i> Rua Frei Mariano, 206 (Apartamento 1) Centro - Corumbá/MS</li>
								<li><i class="fa-regular fa-map"></i> Avenida Bandeirantes, 1.407 Amambai - Campo Grande/MS</li>
								<li><i class="fa-solid fa-mobile-screen"></i> (67)997152323</li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3 class="section-title">Contate-nos</h3>
							<form class="contact-form" action="{{ route('send-contact') }}" method="POST">
							@csrf
								<div class="form-group">
									<label for="name" class="sr-only">Nome</label>
									<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="Phone" class="sr-only">Email</label>
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone" required>
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Mensagem</label>
									<textarea class="form-control" name="message" id="message" rows="7" placeholder="Mensagem" required></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Enviar">
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="https://instagram.com/dominus.energiasolar?igshid=NzZhOTFlYzFmZQ=="><i class="fa-brands fa-instagram"></i></i></i></a>
								<a href="https://www.youtube.com/@Dominus_Energia_Solar"><i class="fa-brands fa-youtube"></i></i></i></a>
								<a href="{{ url('/admin') }}" target="_blank"><i class="fa-solid fa-right-to-bracket"></i></i></a>
							</p>
							<p><span class="dominus">Dominus</span><span class="solar"> Solar</span> - Painéis solares e Energia sustentável.</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>
	
<script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
