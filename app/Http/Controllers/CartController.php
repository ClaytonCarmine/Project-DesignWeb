<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comida;

use Cart ;
use Illuminate\Support\Arr;

class CartController extends Controller
{
    
    public function add(Request $request){
         $producto=Comida::find($request->producto_id);
         Cart::add(
            $producto->id,
            $producto->nombre,
            $producto->precio,
            1,
            array("img"=>$producto->img)
         );
        return  back()->with('success',"$producto->nombre se ha agregado correctamente");
    }

    public function cart(){
        $params=[
            'title'=>'shopping Cart Checkout'
        ];
        return view('layouts.checkout')->with($params);
    }
    public function removeitem(Request $request){
        $producto=Comida::where('id',$request->id)->firstOrFail();
        Cart::remove([
            'id'=>$request->id,
        ]);
        return back()->with('success','curso eliminado con exito de su carrito');
    }
    public function clear(){
        Cart::clear();
        return back()->with('success','Se borraron todos los productos');
    }

}
