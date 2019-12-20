<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    protected $table='pengaturans';
    protected $fillabel=['slogan', 'npwp', 'deskripsi', 'catatan', 'id_kota', 'id_kode', 'alamat'];

    public function kota(){
        return $this->belongsTo('App\Kota', 'id_kota');
    }
    public function pos(){
        return $this->belongsTo('App\Pos', 'id_kode');
    }
    public function userr(){
        return $this->belongsTo('App\User', 'id_user');
    }

}
