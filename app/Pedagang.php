<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    protected $table='pedagangs';

    public function kabupaten(){
        return $this->belongsTo('App\Kota', 'kabupaten');
    }

    public function kode(){
        return $this->belongsTo('App\Kode', 'kode_pos');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
