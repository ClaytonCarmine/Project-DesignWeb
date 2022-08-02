@extends('nav')

@section('contenido')
    <head>
        <link rel="stylesheet" href="css/checkout.css">
    </head>
    
    <div class="container cart-page" style="min-height: 70vh" >
        @if(session('status'))
            <h5 class="titulo3 fs-2">{{session('status')}}</h5>
        @endif
        @if(count(Cart::getContent()))   
            <table>
                <tr>
                    <th class="titulo2 fs-4">Producto</th>
                    <th class="titulo2 fs-4">Cantidad</th>
                    <th class="titulo2 fs-4">Subtotal</th>
                </tr>
                @foreach(Cart::getContent() as $item) 
                    <tr>
                        <td>
                            <div class="cart-info">
                                <img src="{{$item->attributes->img}}" height="100vh" width="100vh" alt="">
                                <div>
                                    <h5 class="titulo3 fs-5">{{$item->name}}</h5>
                                    <small class="fs-6 text-muted texto1">Precio: ${{$item->price}}</small>
                                    <br>
                                    <form action="{{route('cart.removeitem')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-sm btn-eliminar fs-6 texto1">Remover</button>
                                    </form>
                                </div>
                            </div>     
                        </td>
                        <td><h5 class="titulo2">{{$item->quantity}}</h5></td>
                        <td class="texto1 fs-5"> ${{$item->price*$item->quantity}}</td>
                    </tr>
                @endforeach
            </table>
            @php
                $subtotal=0;
            @endphp
            <p class="d-none">
                @foreach (Cart::getContent() as $item)
                {{
                    $subtotal=$subtotal+intval($item->price*$item->quantity)

                }}
                @endforeach
            </p>
            <div class="total-price">
                <table>
                    <tr>
                        <td class="fs-5 titulo2">Subtotal</td>
                        <td class="fs-5 texto1">${{$subtotal}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5 titulo2">I.V.A</td>
                        <td class="fs-5 texto1">${{$totalIVA=$subtotal*0.08}}</td>
                    </tr>
                    <tr>
                        <td class="fs-5 titulo2">Total</td>
                        <td class="fs-5 texto1">${{$totalCompra=$subtotal+$totalIVA}}</td>
                    </tr>
                </table>
            </div>
            <div class="total-price">
                @guest()
                    <a href="/login" class="btn btn-sm titulo2 fs-4 btn-comprar">Comprar</a>
                @else
                    <form action="{{route('paypal.payWithPayPal')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$totalCompra}}">
                        <button type="submit" class="btn btn-sm titulo1 fs-4 btn-comprar">Comprar Ahora</button>
                    </form>                
                @endguest  
            </div>
        @else 
            <div>
                <h2 class="text-center">Tu carrito de está vacío. </h2>
                <p class="text-center">Agrega algun producto para <a href="/menu">Comprar</a></p>
            </div>
        @endif
     </div>
@endsection
