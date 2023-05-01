<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('pendaftaran');
    }

    public function hasil() {
        return view('hasilpendaftaran');
    }

    public function store(Request $request) {

    }
}
