<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table='kategoris';

    public function product(){
        return $this->hasMany('App\Produk');
    }
}
