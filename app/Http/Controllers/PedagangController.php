<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedagang;
use App\Kota;
use App\Kode;
use App\User;
use Image;
use Auth;

class PedagangController extends Controller
{
    public function tambah()
    {
       $kode = Kode::all();
       $kota = Kota::all();
       return view('pedagang.pengaturan')->withKota($kota)->withKode($kode); 
    }

    public function nambah(Request $req)
    {
        $add = new Pedagang;
        $add->slogan = $req->slogan;
        $add->npwp = $req->npwp;
        $add->deskripsi = $req->deskripsi;
        if(empty($req->file('gambar_ktp')))
        {
            $add->gambar_ktp = $add->gambar_ktp;
        }
        else
        {
            $this->validate($req, ['gambar_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$req->file('gambar_ktp');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/ktp/'. $filename) );
            $add->gambar_ktp  = $filename;
        }

        if(empty($req->file('file_siup')))
        {
            $add->file_siup = $add->file_siup;
        }
        else
        {
            $this->validate($req, ['file_siup' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$req->file('file_siup');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/siup/'. $filename) );
            $add->file_siup  = $filename;
        }

        if(empty($req->file('gambar_toko')))
        {
            $add->gambar_toko = $add->gambar_toko;
        }
        else
        {
            $this->validate($req, ['gambar_toko' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$req->file('gambar_toko');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/pedagang/'. $filename) );
            $add->gambar_toko  = $filename;
        }

        if(empty($req->file('sampul_toko')))
        {
            $add->sampul_toko = $add->sampul_toko;
        }
        else
        {
            $this->validate($req, ['sampul_toko' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$req->file('sampul_toko');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/sampul/'. $filename) );
            $add->sampul_toko  = $filename;
        }

        $add->catatan_toko = $req->catatan_toko;
        $add->alamat_toko = $req->alamat_toko;
        $add->user_id = $req->user_id;
        $add->kabupaten = $req->kabupaten;
        $add->kode_pos = $req->kode_pos;
        $add->save();
        return redirect('/produk-pedagang');

    }
}
