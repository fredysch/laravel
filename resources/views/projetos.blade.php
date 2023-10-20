@include('header')

<section id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
            <li style="background-image: url({{ asset('images/projetos.jpg') }});">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 col-md-offset-1 text-center js-fullheight slider-text">
                        <div class="slider-text-inner desc">
                            <h2 class="heading-section">Nossos projetos</h2>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </li>
        </ul>
    </div>
</section>

<section id="fh5co-work-section">
    <div class="container">
        <div class="row">
            @foreach ($projetos as $projeto)
                <div class="col-md-3 col-xs-6 text-center project">
                    <div class="grid-project">
                        <div class="image"><img src="{{ asset('storage/' . str_replace('"', '', $projeto->image)) }}" alt="{{ $projeto->name }}" class="img-responsive"></div>
                        <div class="desc">
                            <h3>{{ $projeto->category }}</h3>
                            <p>{{ strip_tags($projeto->description) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@include('footer')
