<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
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
}
