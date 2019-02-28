<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Album') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="fdEcran">

<div class="">
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
<a href="{{asset('/home')}}"><img src="{{asset('/img/g2a-logo-ad-4.png')}}"></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            @guest
            <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link" href="{{ route('login') }}">@lang('Connexion')</a></li>
            <li class="nav-item{{ currentRoute(route('register')) }}"><a class="nav-link" href="{{ route('register') }}">@lang('Inscription')</a></li>
            @else
                <li class="nav-item">
                    <a id="logout" class="nav-link" href="{{ route('logout') }}">@lang('Déconnexion')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hide">
                        {{ csrf_field() }}
                    </form>
                </li>
            @endguest
        </ul>
    </div>
  
</nav>
<nav class="navbar navbar-dark bg-dark">
                        <div>
                      <a href="index.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-1  " type="submit"><img class="utilisateur  " src="{{asset('/img/600px-Xbox_one_logo.svg.png')}}"></button></a>

												<a href="index2.php"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-4 mr-5 " type="submit"><img class="utilisateur  " src="{{asset('/img/kisspng-playstation-4-playstation-3-5afd65389ec731.0511940015265559606504.png')}}"></button></a>
												<a href="{{asset('/panier/1')}}"> <button class="btn btn-outline-warning my-2 my-sm-0 ml-1  " type="submit"><img class="utilisateur  " src="{{asset('/img/panier.png')}}"></button></a>
												</div>

											<form class="form-inline" method="post" action="recherche.php" >

                        <input class="form-control mr-sm-2" name="motEntree" type="text" placeholder="Search" aria-label="Search">
												<button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="form"> Recherche</button>

                      </form>
                        
                    </nav>

</div>

@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
<script>
    $(() => {
        $('#logout').click((e) => {
            e.preventDefault()
            $('#logout-form').submit()
        })
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
