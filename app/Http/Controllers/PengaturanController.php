<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaturan;
use App\Kota;
use App\Pos;
use App\User;
use Image;
use Auth;

class PengaturanController extends Controller
{
    public function index() {
        $pengaturan = Pengaturan::where('id_user', Auth::user()->id)->orderBy('id', 'DESC')->get();
        $kota = Kota::all();
        $pos = Pos::all();
        return view('pedagang.pengaturan_pedagang')->withPengaturan($pengaturan)
                                                   ->withKota($kota)
                                                   ->withPos($pos);
    }

    public function save(Request $request){
        $add =  new Pengaturan;
        $add->slogan = $request->slogan;
        $add->npwp = $request->npwp;
        $add->deskripsi = $request->deskripsi;
        $add->id_user = $request->id_user;
        $add->catatan = $request->catatan;
        $add->alamat = $request->alamat;
        $add->id_kota = $request->kota;
        $add->id_kode = $request->pos;

        if(empty($request->file('ktp')))
        {
            $add->ktp = $add->ktp;
        }
        else
        {
            $this->validate($request, ['ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('ktp');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/ktp/'. $filename) );
            $add->ktp  = $filename;
        }


        if(empty($request->file('gambar')))
        {
            $add->gambar = $add->gambar;
        }
        else
        {
            $this->validate($request, ['gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('gambar');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/avatar/'. $filename) );
            $add->gambar  = $filename;
        }
        $add->save();
        return redirect('/produk-pedagang');

    }
}
