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
        <div class="container-cards container mt-5">
            <h2 class="fs-1 titulo2 ">Burritos</h2>
            <div class="row row-cols-1 row-cols-md-4  g-4 mt-5 ">
                @foreach($burritos as $burrito)
                    <div class="col">
                        <div class="card h-100 mx-auto card-menu">
                            <img src="{{$burrito->img}}" height="200px"  class="card-img-top img-menu" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 titulo2">{{$burrito->nombre}}</h5>
                                <p class="card-text texto1 fs-6 text-muted">{{$burrito->descripcion}}</p>
                                <h2 class="fs-6 texto1 text-muted">${{$burrito->precio}}</h2>
                            </div>
                            <div class="card-footer container-agregar">
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$burrito->id}}">
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
        <div class="container-cards container mt-5">
            <h2 class="fs-1 titulo2 ">Snacks</h2>
            <div class="row row-cols-1 row-cols-md-4  g-4 mt-5 ">
                @foreach($snacks as $snack)
                    <div class="col">
                        <div class="card h-100 mx-auto card-menu">
                            <img src="{{$snack->img}}" height="200px"  class="card-img-top img-menu" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 titulo2">{{$snack->nombre}}</h5>
                                <p class="card-text texto1 fs-6 text-muted">{{$snack->descripcion}}</p>
                                <h2 class="fs-6 texto1 text-muted">${{$snack->precio}}</h2>
                            </div>
                            <div class="card-footer container-agregar">
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$snack->id}}">
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
        <div class="container-cards container mt-5">
            <h2 class="fs-1 titulo2 ">Sandwiches</h2>
            <div class="row row-cols-1 row-cols-md-4  g-4 mt-5 ">
                @foreach($sandwiches as $sandwich)
                    <div class="col">
                        <div class="card h-100 mx-auto card-menu">
                            <img src="{{$sandwich->img}}" height="200px"  class="card-img-top img-menu" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 titulo2">{{$sandwich->nombre}}</h5>
                                <p class="card-text texto1 fs-6 text-muted">{{$sandwich->descripcion}}</p>
                                <h2 class="fs-6 texto1 text-muted">${{$sandwich->precio}}</h2>
                            </div>
                            <div class="card-footer container-agregar">
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$sandwich->id}}">
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
        <div class="container-cards container mt-5">
            <h2 class="fs-1 titulo2 ">Bebidas</h2>
            <div class="row row-cols-1 row-cols-md-4  g-4 mt-5 ">
                @foreach($bebidas as $bebida)
                    <div class="col">
                        <div class="card h-100 mx-auto card-menu">
                            <img src="{{$bebida->img}}" height="200px"  class="card-img-top img-menu" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-title fs-5 titulo2">{{$bebida->nombre}}</h5>
                                <p class="card-text texto1 fs-6 text-muted">{{$bebida->descripcion}}</p>
                                <h2 class="fs-6 texto1 text-muted">${{$bebida->precio}}</h2>
                            </div>
                            <div class="card-footer container-agregar">
                                <form action="{{route('cart.add')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="producto_id" value="{{$bebida->id}}">
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