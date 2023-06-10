<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
use App\Models\SiswaCalon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index()
    {
        $diterima = Hasilspk::where('status', 'Diterima')->count();
        $gagal = Hasilspk::where('status', 'Gagal')->count();
        $semua = SiswaCalon::count();
        return view('admin.index', [
            'gagal' => $gagal,
            'diterima' => $diterima,
            'semua' => $semua,
            'hasil' => Hasilspk::with('siswacalon')->get()
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
            'siswacalons' => Hasilspk::with('siswacalon')->get()
        ]);
    }
    public function mendaftarStore(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'nisn' => 'required|max:10',
            'no_telp' => 'required|max:13',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'asal_sekolah' => 'required',
            'jarak' => 'required',
            'jurusan' => 'required',
            'jk' => 'required',
            'nilai_indo' => 'required',
            'nilai_ipa' => 'required',
            'nilai_mtk' => 'required',
            'nilai_ing' => 'required',
            'alamat' => 'required',
            'email' => 'required',
        ]);
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }
        SiswaCalon::create($validatedData);

        Alert::success('Berhasil', 'Data anda sudah terekap, Silahkan tunggu info pengumuman!');
        return redirect('/admin/mendaftar');
    }

    public function diterima()
    {
        $diterima = Hasilspk::with('siswacalon')->where('status', 'Diterima')->get();
        return view('admin.diterima', [
            'siswacalons' => $diterima
        ]);
    }

    public function gagal()
    {
        $gagal = Hasilspk::with('siswacalon')->where('status', 'Gagal')->get();
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
    public function tambahData(){
        return view('admin.tambahdata');
    }

    public function penilaian()
    {
        return view('admin.penilaian', [
            'penilaian' => SiswaCalon::all()
        ]);
    }
}
