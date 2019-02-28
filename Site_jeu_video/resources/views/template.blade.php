<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title></title>
	  <link rel="stylesheet" type="text/css" href="{{asset('/css/styles.css')}}"/>

</head>
    
<header>

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

            
            
                        <div class="carousel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                                 <img class="d-block w-100" src="{{asset('/img/2644.jpg')}}" alt="First slide">

                              <h3><a href="description/52" class="badge badge-warning btnCarousel">acheter</a></h3>
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('/img/rdr2.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('/img/fondEcran2.jpg')}}" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

            </div>




</header>

<body class="fdEcran">


	<div class="container ">
		<div class="row col-12 ">

@yield('content')





		</div>
	</div>
</body>

     <footer>
        <div class="container ">
            <div class="row">
                    <div class=" copy col-12 p-4">Copyright © 2005 - 2018 Instant Gaming - Instant Gaming Ltd - Hong Kong</div>

                    <div class="col-3"> Install the G2A app
                        Get G2A hot deals wherever you go!
                    </div>
                    <div class="col-6 ">
                    <img src="{{asset('/img/badge-app-store-b967b583fc.png')}}">
                    <img src="{{asset('/img/badge-google-play-ea809ca892.png')}}">
                    <img src="{{asset('/img/badge-microsoft-8ed605b6dc.png')}}">

                    </div>
                    <div class="col-3">
                        <p>Get 3% Cashback!</p>
                    </div>
                </div>
            </div>

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
    </footer>
</html>
