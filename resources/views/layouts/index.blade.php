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
                <h5 class="card-title titulo2 display-1">INSTRUMENTOS</h5>
                <h5 class="card-title titulo3 display-3">ENFERMERIA</h5>
            </div>
          </div>
          <div class="col-md-4 m-auto container-img-slider">
            <!-- <img src="" class="img-fluid rounded-start" style="filter:brightness(0.9);"  alt="..."> -->
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item " data-bs-interval="5000" style="height: 80vh;">
      <img src="img/fondo-slider1.jpg" class="d-block w-100 img-fluid" style="height: 80vh;  object-fit: cover;filter:brightness(0.8); " alt="...">
      <div class="carousel-caption  d-md-block text-white">
        <div class="row g-0 m-auto h-100 container-info">
          <div class="col-md-8 m-auto container-text-slider">
            <div class="card-body ">
                
                <h5 class="card-title titulo3 display-3 ">Nuevos Productos</h5>
                <a href="/menu" class="btn-comprar fs-6 titulo2">Pide Ahora</a>
            </div>
          </div>
          <div class="col-md-4 m-auto container-img-slider">
            <!-- <img src="" class="img-fluid rounded-start" style="filter:brightness(0.9);"  alt="..."> -->
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item "  data-bs-interval="5000">
      <img src="img/fondo-slider1.jpg" class="d-block w-100 img-fluid" style="height: 80vh;  object-fit: cover; filter:brightness(0.8);" alt="...">
      <div class="carousel-caption  d-md-block text-white">
        <div class="row g-0 m-auto h-100 container-info">
          <div class="col-md-8 m-auto container-text-slider">
            <div class="card-body">
                <h5 class="card-title text-break header-titulo3 display-6">Las mejores Ofertas</h5>
                
                <h5 class="card-title titulo3 display-3">Tu mejor Opcion</h5>
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
      <h5 class="card-title display-4 titulo2">Medicamentos</h5>
      <h5 class="card-title fs-3">En cualquier momento</h5>
    </div>
  </div>
  <div class="card bg-dark text-white d-flex m-5">
    <img src="img/fondo-card3.jpg" class="card-img img-fluid h-100" style="object-fit:cover; filter:brightness(0.8);"  alt="...">
    <div class="card-footer text-center position-absolute fixed-bottom" style="border: none;">
      <h5 class="card-title display-4 titulo2">Comprar Online</h5>
      <h5 class="card-title fs-3">Las 24 horas del dia</h5>
    </div>
  </div>
  <div class="card bg-dark text-white d-flex m-5">
    <img src="img/fondo-card2.jpg" class="card-img img-fluid h-100" style="object-fit: cover; filter:brightness(0.8);"  alt="...">
    <div class="card-footer text-center position-absolute fixed-bottom" style="border: none;">
      <h5 class="card-title  display-4 titulo2">Farmacia</h5>
      <h5 class="card-title fs-3">La farmacia a las 24 horas del dia</h5>
    </div>
  </div>
</div>
<!-- Menu -->

<!-- banner -->
<div class="banner mt-5">
  <div class="card">
    <h5 class="card-title titulo3 display-5">Envio Gratis</h5>
    <h5 class="card-title text-white titulo2 display-3">En tu Primera Compra</h5>
    <a href="/menu" class="btn-comprar fs-5 titulo2">Compra Online</a>
  </div>
</div>
<!-- servicios -->

<!-- galeria -->
<div class="galeria ">
  <div class="card-group">
    <div class="card card-galeria">
      <img src="img/galeria-img1.jpg" alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img2.jpg" alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img1.jpg"  alt="...">
    </div>
    <div class="card card-galeria">
      <img src="img/galeria-img4.jpg"  alt="...">
    </div>
  </div>
</div>
<!-- mapa -->
<div id="map"></div>

<script src="/animations/index.js"></script>
<script src="css/index.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAudkgZYRJfx0c8uRhM2QVgXiBWmlww-Gg&callback=iniciarMap&v=weekly"></script>
@endsection