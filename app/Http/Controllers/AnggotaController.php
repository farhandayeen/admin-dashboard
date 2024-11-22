<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function anggota()
    {
        // Mengambil semua data dari model mahasiswa_model
        $data = Anggota::all();
        // Mengirimkan data ke view 'Pegawai.Index' dengan variabel 'data'
        return view('tables.anggota')->with('data', $data);
    }
}
