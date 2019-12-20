<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berat extends Model
{
    protected $table='berats';

    public function products(){
        return $this->hasMany('App\Produk');
    }
}
