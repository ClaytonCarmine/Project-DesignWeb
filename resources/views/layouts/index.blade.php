@extends('nav')

@section('contenido')
<head>
    <link rel="stylesheet" href="css/index.css">
</head>
<!-- carusell -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="btn-slide active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2" class="btn-slide"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3" class="btn-slide "></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active item1"  data-bs-interval="5000" style="height: 80vh; ">
      <img src="img/fondo-slider1.jpg" class="d-block w-100 img-fluid" style="height:80vh;  object-fit:cover; filter:brightness(0.8);" alt="...">
      <div class="carousel-caption  d-md-block text-white">
        <div class="row g-0 m-auto h-100 container-info">
          <div class="col-md-8 m-auto container-text-slider">
            <div class="card-body">
                <h5 class="card-title text-break titulo1 display-5">Nuevo</h5>
                <h5 class="card-title titulo2 display-1">BBQ</h5>
                <h5 class="card-title titulo3 display-3">HAMBUGUESA</h5>
            </div>
          </div>
          <div class="col-md-4 m-auto container-img-slider">
            <!-- <img src="" class="img-fluid rounded-start" style="filter:brightness(0.9);"  alt="..."> -->
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item "  data-bs-interval="5000" style="height: 80vh;">
      <img src="img/fondo-slider2.jpg" class="d-block w-100 img-fluid" style="height: 80vh;  object-fit: cover;filter:brightness(0.8); " alt="...">
      <div class="carousel-caption  d-md-block text-white">
        <div class="row g-0 m-auto h-100 container-info">
          <div class="col-md-8 m-auto container-text-slider">
            <div class="card-body ">
                <h5 class="card-title titulo1 display-6 ">Nuevo <br> Menu</h5>
                <h5 class="card-title titulo3 display-3 ">BURRITOS</h5>
                <a href="/" class="">Pide Ahora</a>
            </div>
          </div>
          <div class="col-md-4 m-auto container-img-slider">
            <!-- <img src="" class="img-fluid rounded-start" style="filter:brightness(0.9);"  alt="..."> -->
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item "  data-bs-interval="5000">
      <img src="img/fondo-slider3.jpg" class="d-block w-100 img-fluid" style="height: 80vh;  object-fit: cover; filter:brightness(0.8);" alt="...">
      <div class="carousel-caption  d-md-block text-white">
        <div class="row g-0 m-auto h-100 container-info">
          <div class="col-md-8 m-auto container-text-slider">
            <div class="card-body">
                <h5 class="card-title text-break header-titulo3 display-6">obra maestra del chef</h5>
                <h5 class="card-title titulo2 display-4">La Mejores</h5>
                <h5 class="card-title titulo3 display-3">HAMBUGUESA</h5>
            </div>
          </div>
          <div class="col-md-4 m-auto container-img-slider">
            <!-- <img src="" class="img-fluid rounded-start" style="filter:brightness(0.9);"  alt="..."> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- Cards -->
<div class="card-group mt-5">
  <div class="card bg-dark text-white d-flex m-5">
    <img src="img/fondo-card1.jpg" class="card-img img-fluid h-100 w-100" style="object-fit: cover; filter:brightness(0.8); " alt="...">
    <div class="card-footer text-center position-absolute fixed-bottom" style="border: none;">
      <h5 class="card-title display-4 titulo2">Sandwiches</h5>
      <h5 class="card-title fs-3">Desayuno Especial</h5>
    </div>
  </div>
  <div class="card bg-dark text-white d-flex m-5">
    <img src="img/fondo-card3.jpg" class="card-img img-fluid h-100" style="object-fit:cover; filter:brightness(0.8);"  alt="...">
    <div class="card-footer text-center position-absolute fixed-bottom" style="border: none;">
      <h5 class="card-title display-4 titulo2">Comprar Online</h5>
      <h5 class="card-title fs-3">Todos los dias de 9:00 a 23:00</h5>
    </div>
  </div>
  <div class="card bg-dark text-white d-flex m-5">
    <img src="img/fondo-card2.jpg" class="card-img img-fluid h-100" style="object-fit: cover; filter:brightness(0.8);"  alt="...">
    <div class="card-footer text-center position-absolute fixed-bottom" style="border: none;">
      <h5 class="card-title  display-4 titulo2">Snaks</h5>
      <h5 class="card-title fs-3">Prueba Nuestros Deliciosos Snaks</h5>
    </div>
  </div>
</div>
<!-- Menu -->
<div class="alimentod mt-5">
  <h5 class="text-center titulo2 fs-1">Menu</h5>
  <div class="container">
      <div class="card-group" >
        <div class="card card-menu m-auto" >
          <img src="img/menu-img1.png" class="card-img-top h-100 w-100" style=" object-fit:contain;" alt="...">
          <div class="card-body title-menu">
            <h5 class="card-title fs-4 titulo2">Hamburguesa</h5>
          </div>
        </div>
        <div class="card m-auto card-menu">
          <img src="img/menu-img2.png" class="card-img-top h-100" style=" object-fit:contain;" alt="...">
          <div class="card-body title-menu">
            <h5 class="card-title fs-4 titulo2">Mega Burrito</h5>
          </div> 
        </div>
        <div class="card m-auto card-menu">
          <img src="img/menu-img3.png" class="card-img-top h-100" style=" object-fit:contain;" alt="...">
          <div class="card-body title-menu">
            <h5 class="card-title fs-4 titulo2">Bonneless</h5>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="banner mt-5">
  <div class="card">
    <h5 class="card-title titulo3 display-5">Envio Gratis</h5>
    <h5 class="card-title text-white titulo2 display-3">En tu Primera Compra</h5>
    <a href="">Compra Online</a>
  </div>
</div>
<!-- galeria -->
<div class="galeria mt-5">
  <h5 class="text-center fs-1 titulo2">Establecimiento</h5>
  <div class="card-group">
    <div class="card card-galeria">
      <img src="img/galeria-img1.jpg" alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img2.jpg" alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img3.jpg"  alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img1.jpg"  alt="...">
    </div>
  </div>
</div>
<!-- mapa -->
<div class="mt-5" style="height: 50vh;">
  <h5 class="text-center fs-1 titulo2">Nuestra Ubicacion</h5>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26457.53803500314!2d-104.91587851180292!3d21.499975258105486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8427374065afeecf%3A0xffcbc1b16d200e59!2sBurger%20King!5e0!3m2!1ses-419!2smx!4v1647255123869!5m2!1ses-419!2smx" width="100%" height="90%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
@endsection