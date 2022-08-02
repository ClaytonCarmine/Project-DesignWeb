<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    {{-- gsap --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <title>@yield('titulo')La Cueva</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid" style="width: 80%;">
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <i class="fa-solid fa-bars icon-nav"></i>
            </button>
            <a href="/" class="navbar-brand fs-2 text-dark" style="font-family: 'Lilita One', cursive;"><i class="fa-solid fa-burger"></i> La cueva</a>
            
            
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto ">
                    <a href="/" class="nav-item nav-link fs-5 active text-dark">Home</a>
                    <a href="/menu" class="nav-item nav-link fs-5 active text-dark">Comprar</a>
                    <a href="/menu" class="nav-item nav-link fs-5 active text-dark">Menu</a>
                </div>
                <div class="btn-group ">
                    @guest
                        @if (Route::has('login'))
                            <a href="/login" class="nav-item nav-link fs-5 active text-dark">Login</a>
                        @endif
                        @if (Route::has('register'))
                            <a href="/register" class="nav-item nav-link fs-5 active text-dark">Registrate</a>
                        @endif
                    @else
                        <div class="btn-group">
                            <a id="navbarDropdown" class="name nav-link dropdown-toggle nav-item  fs-5 active text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name}} {{ Auth::user()->apellido}}
                            </a>
                            <div class=" dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <a class="d-flex nav-item nav-link fs-5 active" href="{{route('compras')}}">
                            <i class="fa-solid fa-user m-auto text-dark"></i>
                        </a>
                    @endguest
                    
                   
                </div> 
            </div> 
            <a class="d-flex nav-item nav-link fs-5 active" href="{{route('cart.checkout')}}">
                <i class="fa-solid fa-cart-shopping m-auto text-dark">
                    @if(count(Cart::getContent()))
                        <span>{{count(Cart::getContent())}}</span>
                    @endif
                </i>
            </a>  
        </div>
    </nav>
    
    @yield('contenido')

    <footer class="text-center text-white footer">
        <div class="container p-4 pb-0">
            <section class="footer-text">
                <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Registrate y ordena</span>
                <a href="/register" class="btn btn-comprar1 fs-6 titulo2">Registrate</a>
                </p>
            </section>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">LaCueva.ml</a>
        </div>
  </footer>
 
    </div>
    <script src="https://kit.fontawesome.com/7f2bed488b.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>