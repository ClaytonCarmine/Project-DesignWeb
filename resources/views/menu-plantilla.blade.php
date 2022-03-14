@extends('nav')
@section('titulo','Menu/')
@section('contenido')
    <head>
        <link rel="stylesheet" href="{{asset('css/menu.css')}}">
    </head>
    <!-- header -->
    <header class="header">
        
    </header>
    <div class="section-title">
        <div class="container-title">
            <h2 class="brand-title card-title text-center fs-1">Menu</h2>
        </div>
    </div>
   
    @yield('cards')
@endsection
