<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hasilspk;
use App\Models\Kriteria;
use App\Models\Normalisasi;
use App\Models\PassingScore;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilSAWController extends Controller
{
    public function index()
    {
        return view('admin.rank', [
            'hasil' => Hasilspk::orderByDesc('hasil')->get()
        ]);
    }
    public function normalisasi()
    {
        return view('admin.perhitungan', [
            'normalisasi' => Normalisasi::get()
        ]);
    }
    public function kategori()
    {
        return view('admin.kategori.index', [
            'kriteria' => Kriteria::get(),
            'pass' => PassingScore::get()
        ]);
    }
    public function kategoriEdit($id)
    {
        $data = Category::find($id);
        return view('admin.kategori.edit', [
            'kriteria' => $data
        ]);
    }
    public function kategoriStore(Request $request, $id)
    {
        $validatedData = $request->validate([
            'atribut' => 'required',
            'bobot' => 'required'
        ]);
        try {
            $data = Category::find($id);
            $data->update($validatedData);
            return redirect('/admin/kategori')->with('toast_success', 'Absensi Keluar Berhasil');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
    public function passing(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nilai' => 'required'
        ]);
        try {
            $data = PassingScore::find($id);
            $data->update($validatedData);
            Alert::success('Berhasil', 'Data Passing Score Berhasil Diubah!');
            return redirect('/admin/kategori');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
