<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
use Illuminate\Http\Request;

class HasilSAWController extends Controller
{
    public function index()
    {
        return view('admin.rank', [
            'hasil' => Hasilspk::get()
        ]);
    }
}
