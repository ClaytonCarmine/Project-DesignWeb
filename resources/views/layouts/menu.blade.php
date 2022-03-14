@extends('menu-plantilla')
@section('cards')
    <div class="section-menu">
        <div class="container-cards">
            <h2 class="fs-3 ">Hamburguesas</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($hamburguesas as $hamburguesa)
                    <div class="col">
                    
                        <div class="card h-100 mx-auto">
                            <img src="{{$hamburguesa->img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$hamburguesa->nombre}}</h5>
                                <p class="card-text">{{$hamburguesa->descripcion}}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <h2 class="fs-5">${{$hamburguesa->precio}}</h2>
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$hamburguesa->id}}">
                                    <input type="submit" name="btn" class="btn btn-primary btn-sm btnA" value="AGREGAR">
                                </form>
                                <!-- <button class="btn btn-primary btn-sm btnA" type="submit">Agregar</button> -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>   
        </div>
        <div class="container-cards">
            <h2 class="fs-3 ">Burritos</h2>
            <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach($burritos as $burrito)
                    <div class="col">
                        <div class="card h-100 mx-auto">
                            <img src="{{asset('img/hamburguesa-clasica.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$burrito->nombre}}</h5>
                                <p class="card-text">{{$burrito->descripcion}}</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <h2 class="fs-5">${{$burrito->precio}}</h2>
                                <button class="btn btn-primary btn-sm btnA" type="submit">Agregar</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>   
        </div>
    </div>
@endsection