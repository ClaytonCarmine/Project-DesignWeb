@extends('menu-plantilla')
@section('cards')
    <div class="section-menu" style="min-height: 200vh">
        <div class="container-cards container mt-5">
            <h2 class="fs-1 titulo2 ">Hamburguesas</h2>
            <div class="row row-cols-1 row-cols-md-4  g-4 mt-5 ">
                @foreach($hamburguesas as $hamburguesa)
                    <div class="col">
                        <div class="card h-100 mx-auto card-menu">
                            <img src="{{$hamburguesa->img}}" height="200px"  class="card-img-top img-menu" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 titulo2">{{$hamburguesa->nombre}}</h5>
                                <p class="card-text texto1 fs-6 text-muted">{{$hamburguesa->descripcion}}</p>
                                <h2 class="fs-6 texto1 text-muted">${{$hamburguesa->precio}}</h2>
                            </div>
                            <div class="card-footer container-agregar">
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$hamburguesa->id}}">
                                    <div class="d-flex">
                                        <input class="quantity m-auto" type="number" value="1" name="quantity" min="1" max="5">
                                    </div>
                                    <input type="submit" name="btn" class="btn btn-agregar w-100 fs-5 titulo1 mt-2" value="AGREGAR">
                                </form>
                                <!-- <button class="btn btn-primary btn-sm btnA" type="submit">Agregar</button> -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>   
        </div>
        
    </div>
@endsection