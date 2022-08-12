<?php

namespace App\Http\Controllers;

use App\Models\Comida;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function comida(Request $request){
        $hamburguesas=Comida::select ('id','nombre','descripcion','precio','img')
            ->get();
        return view('layouts.menu',compact('hamburguesas'));
        
    }

    
}
