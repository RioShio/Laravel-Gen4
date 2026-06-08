<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Satrio Ramanda Gustav',
            'jurusan' => 'Teknik Informatika'
        ];
        return view('mahasiswa', $data);
    }
}
