@include('header')
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
				<li style="background-image: url({{ asset('images/sobre.jpg') }});">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
					   <div class="col-md-4"></div>
			   			<div class="col-md-4 col-md-offset-1 text-center js-fullheight slider-text">
			   				<div class="slider-text-inner desc">
			   					<h2 class="heading-section">Sobre a <br>Dominus Solar</h2>
			   				</div>
			   			</div>
						<div class="col-md-4"></div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-team-section">
			<div class="container">
				<div class="row about">
					<div class="col-md-4">
						<h2>Missão</h2>
						<p>Auxiliar residências, grandes e pequenas empresas a reduzirem seu gasto na conta de luz, a partir da escolha do projeto, nas instalações e manutenções de suas usinas. </p>
					</div>
					<div class="col-md-4">
						<h2>Visão</h2>
						<p>Transformar a qualidade de vida das pessoas com a economia dos gastos da conta de luz e contribuir para o futuro do planeta.
Tornar o Mato Grosso do Sul um estado sustentável e fazer a economia girar com o dinheiro ganho por nossos clientes a partir de nossos projetos e instalações.</p>
					</div>
					<div class="col-md-4">
						<h2>Valores</h2>
						<p>Foco no cliente</p>
						<p>Sustentabilidade</p>
						<p>Compromisso</p>
					</div>					
				</div>
			</div>
		</div>
		@include('footer')