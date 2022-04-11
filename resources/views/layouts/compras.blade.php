@extends('nav')

@section('contenido')
    <head>
        <link rel="stylesheet" href="css/compras.css">
    </head>
    <div class="container  cart-page" style="min-height: 70vh;">
        @if(session('status'))
            <h5 class="titulo3 fs-2">{{session('status')}}</h5>
        @endif
        <h5 class="titulo2 fs-2">MIS PEDIDOS</h5>
        <table>
            @foreach($comprasu as $item)
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="{{$item->img}}" height="100vh" alt="">
                            <div>
                                <h5 class="titulo3 fs-3">{{$item->nombre}}</h5>
                                <small class="fs-6 text-muted texto1">Precio: ${{$total=$item->precio*$item->cantidad}}</small>
                                <p class="fs-6 text-muted texto1">Domicilio: {{$item->direccion}}</p>
                            </div>
                            <td>
                                <h5>Cantidad: {{$item->cantidad}}</h5>
                            </td>
                            <td>
                                <h5>11/20/12</h5>
                            </td>
                        </div>     
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
    
@endsection