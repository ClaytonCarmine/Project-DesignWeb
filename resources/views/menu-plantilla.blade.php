@extends('nav')
@section('titulo','Menu/')
@section('contenido')
    <head>
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    </head>
    <!-- header -->
    <header class="header">
        <div class="card bg-dark text-white h-100">
            <img src="img/banner-menu1.jpg"class="card-img" height="100%" style="object-fit:cover; filter:brightness(0.4);" alt="...">
            <div class="card-img-overlay  d-flex">
              <div class="info-header text-center m-auto">
                <h5 class="card-title display-2 titulo3">Las mejores Hambueguesa</h5>
                <h5 class="card-title display-5 titulo2">Elije tu Preferida</h5>
              </div>
              
            </div>
          </div>
    </header>
    <div class="section-title">
        <div class="container-title">
            <h2 class="brand-title card-title text-center display-3 titulo2 mt-5">Menu</h2>
        </div>
    </div>
   
    @yield('cards')
@endsection
