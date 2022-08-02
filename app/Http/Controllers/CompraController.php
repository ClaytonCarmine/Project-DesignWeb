<?php

namespace App\Http\Controllers;

use App\Models\lista_compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompraController extends Controller
{
 public function compras(){
     
     
     $comprasu=DB::table('lista_compras')
     ->select('tickets.total', 'comidas.nombre','comidas.precio','comidas.img','users.name as nombreU','users.apellido','tickets.direccion','cantidad')
     ->join('tickets','tickets.id', '=', 'lista_compras.ticket_id')
     ->join('comidas','comidas.id','=','lista_compras.comida_id')
     ->join('users','users.id', '=','tickets.user_id' )
     ->where('tickets.user_id', '=', auth()->id())
     ->get();
     if(!Auth::guest()){
        return view('layouts.compras',compact('comprasu'));
     }else{
        return back();
     }
    
 }
}
