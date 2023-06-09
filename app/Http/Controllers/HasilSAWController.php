<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class HasilSAWController extends Controller
{
    public function index()
    {
        return view('admin.rank', [
            'hasil' => Hasilspk::get()
        ]);
    }
    public function normalisasi()
    {
        return view('admin.perhitungan', [
            'normalisasi' => Normalisasi::get()
        ]);
    }
    public function kategori(){
        return view('admin.kategori.index', [
            'kriteria' => Kriteria::get()
        ]);
    }
}
