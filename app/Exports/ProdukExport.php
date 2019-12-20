<?php

namespace App\Exports;

use App\Produk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;



class ProdukExport implements FromView, ShouldAutoSize
{
    use Exportable;
    
    public function view(): View
    {
        return view('pedagang.excel', [
            'excel' => Produk::all()
        ]);
    }
}
