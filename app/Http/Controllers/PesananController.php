<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesan = Pesanan::all();
        return view('pedagang.pesanan')->withPesan($pesan);
    }
}
