<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bebida extends Model
{
    public function ticket(){
        return $this->hasMany('App\Models\Ticket');
    }
    use HasFactory;
    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }
    
}
