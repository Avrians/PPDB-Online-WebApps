<?php

namespace App\Http\Controllers;

use App\Models\SiswaCalon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $diterima = SiswaCalon::where('status', 'Diterima')->count();
        $gagal = SiswaCalon::where('status', 'Gagal')->count();
        $semua = SiswaCalon::count();
        return view('admin.index', [
            'gagal' => $gagal,
            'diterima' => $diterima,
            'semua' => $semua,
            'siswacalons' => SiswaCalon::all()
        ]);
    }

    public function detail($id)
    {
        $data = SiswaCalon::find($id);
        return view('admin.detail', [
            'detailsiswa' => $data
        ]);
    }

    public function editData($id, Request $request)
    {
        $data = SiswaCalon::find($id);
        return view('admin.editdata', [
            'detailsiswa' => $data
        ]);
    }

    public function mendaftar()
    {
        return view('admin.mendaftar', [
            'siswacalons' => SiswaCalon::all()
        ]);
    }

    public function diterima()
    {
        $diterima = SiswaCalon::where('status', 'Diterima')->get();
        return view('admin.diterima', [
            'siswacalons' => $diterima
        ]);
    }

    public function gagal()
    {
        $gagal = SiswaCalon::where('status', 'Gagal')->get();
        return view('admin.gagal', [
            'siswacalons' => $gagal
        ]);
    }

    public function hapusData($id)
    {
        $data = SiswaCalon::find($id);
        $data->delete();

        return redirect('/admin/mendaftar')->with('toast_success', 'Data berhasil dihapus');
    }

    public function penilaian()
    {
        return view('admin.penilaian', [
            'penilaian' => SiswaCalon::all()
        ]);
    }
}
