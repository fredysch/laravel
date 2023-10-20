<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $pageTitle ?? 'Dominus Solar' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? '' }}" />
    <meta name="keywords" content="{{ $metaKeywords ?? '' }}" />
    <meta name="author" content="{{ $metaAuthor ?? '' }}" />
    <meta property="og:title" content="{{ $ogTitle ?? '' }}"/>
    <meta property="og:image" content="{{ $ogImage ?? '' }}"/>
    <meta property="og:url" content="{{ $ogUrl ?? '' }}"/>
    <meta property="og:site_name" content="{{ $ogSiteName ?? '' }}"/>
    <meta property="og:description" content="{{ $ogDescription ?? '' }}"/>

    <link rel="shortcut icon" href="{{ asset('images/painel_solar.png') }}">

    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/form-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Modernizr JS -->
    <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif-->
</head>
<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div id="fh5co-header">
                <header id="fh5co-header-section">
                    <div class="container">
                        <div class="nav-header">
                            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                            <h1 id="fh5co-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/logo.jpg') }}"> <span class="dominus">DOMINUS</span><span class="solar"> SOLAR</span></a></h1>
                            <!-- START #fh5co-menu-wrap -->
                            <nav id="fh5co-menu-wrap" role="navigation">
                                <ul class="sf-menu" id="fh5co-primary-menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                                    <li><a href="{{ url('/servicos') }}">Servi&ccedil;os</a></li>
                                    <li><a href="{{ url('/projetos') }}">Projetos</a></li>
                                    <li><a href="{{ url('/treinamentos') }}">Treinamentos</a></li>
                                    <li><a href="{{ url('/contato') }}">Contato</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </div>
</body>
</html>
