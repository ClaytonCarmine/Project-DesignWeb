@extends('nav')

@section('contenido')
    <head>
        <link rel="stylesheet" href="css/checkout.css">
    </head>
    <div class="container " style="height: 80vh;">
        <div class="row d-flex h-100 justify-content-center alig-items-center">
            <div class="col-sm-12 m-auto">
                @if(count(Cart::getContent()))
                    
                    <table class="table table-striped">
                        <thead class="text-center">
                            <th>Producto</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Subtotal</th>
                            <th>
                            <form action="{{route('cart.clear')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm text-danger">vaciar carrito <i class="fa-solid fa-trash"></i></button>
                                </form>
                            </th>
                        </thead>
                        <tbody>
                           
                            @foreach(Cart::getContent() as $item)
                                <tr class="text-center">
                                    <td><img src="{{$item->attributes->img}}" class="img-fluid" width="120vh" alt=""></td>
                                    <td><p>{{$item->name}}</p></td>
                                    <td>
                                    <div class="form-group col-sm-4 m-auto">
                                        <select class="form-control" id="sel1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                    </td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>
                                        <form action="{{route('cart.removeitem')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <button type="submit" class="btn btn-sm text-danger">Eliminar <i class="fa-lg fa-solid fa-xmark"></i></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td><a href="">Comprar</a></td>
                            </tr>
                        </tfoot>
                    </table>
                @else 
                    <div>
                        <h2 class="text-center">Tu carrito de está vacío. </h2>
                        <p class="text-center">Agrega algun producto para <a href="/menu">Comprar</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection