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
        $burritos=Comida::select ('nombre','descripcion','precio','img')
            ->where('categoria_id','=',2)
            ->get();
        return view('layouts.menu',compact('hamburguesas','burritos'));
    }

    
}
