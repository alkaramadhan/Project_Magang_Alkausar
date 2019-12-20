<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\User;
use App\Kategori;
use App\Berat;
use App\Exports\ProdukExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use Image;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->get();
        $kate = Kategori::all();
        $brt = Berat::all();
        return view('pedagang.produk_pedagang')->withProduk($produk)->withKate($kate)->withBrt($brt);
    }
    public function export_excel()
	{
       
		return (new ProdukExport)->download('excel.xlsx');
    }
    
    public function tambah()
    {
        $kate = Kategori::all();
        $brt = Berat::all();
        return view('pedagang.tambah_produk')->withKate($kate)->withBrt($brt);
    }
    public function simpan(Request $request)
    {
        $post = new Produk;
        $post->nama_produk = $request->nama_produk;
        $post->user_id = $request->user_id;
        $post->id_kategori = $request->kategori;
        $post->kondisi = $request->kondisi;
        $post->kondisi_produk = $request->kondisi_produk;
        $post->jumlah = $request->jumlah;
        $post->minimum = $request->minimum;
        $post->harga_satuan = $request->harga_satuan;
        $post->harga_grosir = $request->harga_grosir;
        $post->id_berat = $request->berat;
        $post->jumlah_barat = $request->jumlah_barat;
        $post->varian = $request->varian;
        $post->asuransi = $request->asuransi;
        if(empty($request->file('gambar1')))
        {
            $post->gambar1 = $post->gambar1;
        }
        else
        {
            $this->validate($request, ['gambar1' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('gambar1');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/produk/'. $filename) );
            $post->gambar1  = $filename;
        }

        if(empty($request->file('gambar2')))
        {
            $post->gambar2 = $post->gambar2;
        }
        else
        {
            $this->validate($request, ['gambar2' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('gambar2');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/produk/'. $filename) );
            $post->gambar2  = $filename;
        }

        if(empty($request->file('gambar3')))
        {
            $post->gambar3 = $post->gambar3;
        }
        else
        {
            $this->validate($request, ['gambar3' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('gambar3');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/produk/'. $filename) );
            $post->gambar3  = $filename;
        }

        if(empty($request->file('gambar4')))
        {
            $post->gambar4 = $post->gambar4;
        }
        else
        {
            $this->validate($request, ['gambar4' => 'required|image|mimes:jpeg,png,jpg|max:2048']);
            $file   =$request->file('gambar4');
            $filename  = rand() . '.'. $file->getClientOriginalName();
            Image::make($file)->resize(300, 300)->save( public_path('image/produk/'. $filename) );
            $post->gambar4  = $filename;
        }
        $post->save();
        return redirect('/produk-pedagang')->with(['success' => 'Barang Berhasil diTambahkan']);
     }
     public function edit($id)
     {
         $produk = Produk::find($id);
         $kate = Kategori::all();
         $brt = Berat::all();
         return view('pedagang.edit_barang')->withProduk($produk)->withKate($kate)->withBrt($brt);
     }

     public function update(Request $request)
     {
        $put = Produk::find($request->id);
        $put->nama_produk = $request->nama_produk;
        $put->id_kategori = $request->kategori;
        $put->kondisi = $request->kondisi;
        $put->kondisi_produk = $request->kondisi_produk;
        $put->jumlah = $request->jumlah;
        $put->minimum = $request->minimum;
        $put->harga_satuan = $request->harga_satuan;
        $put->harga_grosir = $request->harga_grosir;
        $put->id_berat = $request->berat;
        $put->jumlah_barat = $request->jumlah_barat;
        $put->varian = $request->varian;
        $put->asuransi = $request->asuransi;

        $file   =$request->file('gambar1');
            if(empty($file))
            {
                $put->save();
                return redirect('/produk-pedagang'); 
            }
            $filename  =$file->getClientOriginalName();
            $request->file('gambar1')->move('image/',$filename);
            $put->gambar1  =$filename;

            $file   =$request->file('gambar2');
            if(empty($file))
            {
                $put->save();
                return redirect('/produk-pedagang'); 
            }
            $filename  =$file->getClientOriginalName();
            $request->file('gambar2')->move('image/',$filename);
            $put->gambar2  =$filename;
            
            $file   =$request->file('gambar3');
            if(empty($file))
            {
                $put->save();
                return redirect('/produk-pedagang'); 
            }
            $filename  =$file->getClientOriginalName();
            $request->file('gambar3')->move('image/',$filename);
            $put->gambar3  =$filename;

            $file   =$request->file('gambar4');
            if(empty($file))
            {
                $put->save();
                return redirect('/produk-pedagang'); 
            }
            $filename  =$file->getClientOriginalName();
            $request->file('gambar4')->move('image/',$filename);
            $put->gambar4  =$filename;

            $put->save();
            return redirect('/produk-pedagang'); 

     }
     public function delete($id)
     {
         $del = Produk::find($id);
         $del->delete();
         return back()->with(['hapus' => 'Barang Berhasil dihapus']);
     }

}
