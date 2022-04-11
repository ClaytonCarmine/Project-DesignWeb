<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function comida(Request $request){
        $hamburguesas=Comida::select ('id','nombre','descripcion','precio','img')
            ->where('categoria_id','=',1)
            ->get();
        $burritos=Comida::select ('id','nombre','descripcion','precio','img')
            ->where('categoria_id','=',2)
            ->get();
        $snacks=Comida::select ('id','nombre','descripcion','precio','img')
            ->where('categoria_id','=',3)
            ->get();
        $sandwiches=Comida::select ('id','nombre','descripcion','precio','img')
            ->where('categoria_id','=',4)
            ->get();
        $bebidas=Comida::select ('id','nombre','descripcion','precio','img')
            ->where('categoria_id','=',5)
            ->get();
        
        return view('layouts.menu',compact('hamburguesas','burritos','bebidas','snacks','sandwiches'));
        
    }

    
}
