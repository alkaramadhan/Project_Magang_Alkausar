<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    protected $table='poss';

    public function pos(){
        return $this->hasMany('App\Pengaturan');
    }
}
