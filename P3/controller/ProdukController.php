<?php

namespace App\Http\Controllers;

class ProdukController extends Controller
{
    public function index()
    {
        $data = [
            'nama_produk' => 'Aplikasi Web Laravel',
            'harga' => 5000000
        ];
        return view('produk', $data);
    }
}