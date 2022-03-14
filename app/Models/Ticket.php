<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function comida(){
        return $this->belongsTo('App\Models\Comida');
    }
    public function bebida(){
        return $this->belongsTo('App\Models\Bebida');
    }
}
