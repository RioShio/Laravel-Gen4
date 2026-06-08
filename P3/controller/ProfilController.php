<?php

namespace App\Http\Controllers;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Satrio Ramanda Gustav',
            'kelas' => 'TI-2026'
        ];
        return view('profil', $data);
    }
}