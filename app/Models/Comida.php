<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comida extends Model
{
    use HasFactory;
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    public function ticket(){
        return $this->hasMany('App\Models\Ticket');
    }
}
