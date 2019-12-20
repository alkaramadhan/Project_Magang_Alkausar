<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table='produks';
    protected $fillabel=['nama_produk','id_kategori','kondisi','kondisi_produk','jumlah','minimun'
                        ,'harga_satuan','harga_grosir','id_berat','jumlah_barat','asuransi'];
    
    public function kategori(){
        return $this->belongsTo('App\Kategori', 'id_kategori');
    }
    public function berat(){
        return $this->belongsTo('App\Berat', 'id_berat');
    }
    
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }

    public function wishlist(){
        return $this->hasMany('App\Wishlist');
    }
}
