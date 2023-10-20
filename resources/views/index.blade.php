@include('header')

<header id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{ asset('images/Projetos_industriais.jpg') }});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h2>Projetos Industriais.</h2>
                                <p><a href="#" class="btn btn-primary btn-outline">Detalhes aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{ asset('images/Projetos_comerciais.jpg') }});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h2>Projetos Comerciais.</h2>
                                <p><a href="#" class="btn btn-primary btn-outline">Detalhes aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{ asset('images/Projetos_residenciais.jpg') }});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h2>Projetos Residenciais.</h2>
                                <p><a href="#" class="btn btn-primary btn-outline">Detalhes aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{ asset('images/Projetos_rurais.jpg') }});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-5 col-sm-6 col-xs-12 js-fullheight slider-text">
                        <div class="slider-text-inner">
                            <div class="desc">
                                <h2>Projetos Rurais.</h2>
                                <p><a href="#" class="btn btn-primary btn-outline">Detalhes aqui</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>

<div id="fh5co-team-section">
    <div class="container">
        <div class="row about">
            <div class="col-md-12">
                <iframe src="https://azume.com.br/simulador/63dac6ababcadc0016157a85" width="100%" height="700"></iframe>
            </div>
        </div>
    </div>
</div>
@include('footer')


