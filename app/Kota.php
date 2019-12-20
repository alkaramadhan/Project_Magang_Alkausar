<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table='kotas';

    public function kota() {
            return $this->hasMany('App\Pengaturan');
    }

    public function kabupaten(){
        return $this->hasMany('App\Pedagang');
    }
}
