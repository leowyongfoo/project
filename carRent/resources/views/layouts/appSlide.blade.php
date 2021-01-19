  
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/ico" href="images/car.jpg">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Suc_Car') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

/*<!--------------------------------------------------- Nav ----------------------------------------------->*/

ul li:hover 
{
    
    box-shadow: 0 4px 8px 0 rgba(100, 0, 0, 0.2), 0 6px 20px 0 rgba(100, 0, 0, 0.19);;
    text-decoration: none;
}

/*<!--------------------------------------------------- Nav ----------------------------------------------->*/


</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="background-image: linear-gradient(260deg,#3c3c3c 0%, #3c3c3c 100%)">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="images/nav.jpg" width='150px' style="position: absolute; top: 10px;">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" Style="color: white;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" Style="color: white;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                        <div class="topnav">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" id="Home" Style="color: white;"href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rentals" Style="color: white;" href="{{ route('clientView') }}">Car Rentals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="manage" Style="color: white;" href="{{ route('my.car') }}">Manage Rentals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pay" Style="color: white;" href="{{ route('my.order') }}">Payment</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" Style="color: white;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                        @endguest  
                    </ul>
                </div>
            </div>
        </nav>

        <!--------------------------------------------------- Slide Show(Start) ----------------------------------------------->

        <body class="antialiased" style="background-color: black">
    <div class="container-fluid" >
   <div class="row1" Style="margin-left: -15px ">
     <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" margin="auto" Style = "width: 101%; max-width: 1920px;">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="3000">
           <img src="images/banner1.jpg" class="d-block w-100" alt="..." height="600px">
         </div>
          <div class="carousel-item"  data-interval="3000">
            <img src="images/banner2.jpg" class="d-block w-100" alt="..." height="600px">
         </div>
          <div class="carousel-item" data-interval="4000">
              <img src="images/banner3.jpg" class="d-block w-100" alt="..." height="600px">
          </div>
          <div class="carousel-item" data-interval="4000">
              <img src="images/banner4.jpg" class="d-block w-100" alt="..." height="600px">
          </div>
         </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
           </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

          
       </div>
     </div>

     <!--------------------------------------------------- Slide Show(End) ----------------------------------------------->
    
     <!--------------------------------------------------- Side Menu(Start) ----------------------------------------------->
    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    


</body>
</html>