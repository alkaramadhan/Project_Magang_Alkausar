<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kode extends Model
{
    protected $table ='kodes';

    public function kode(){
        return $this->hasMany('App\Pedagang');
    }
}
