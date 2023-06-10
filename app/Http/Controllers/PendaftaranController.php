<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
use App\Models\SiswaCalon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran');
    }

    public function hasil()
    {
        return view('hasilpendaftaran', [
            'siswacalons' => Hasilspk::orderByDesc('hasil')->with('siswacalon')->get()
        ]);
    }

    public function hapusData($id)
    {
        $data = SiswaCalon::find($id);
        
        $data->delete();
        return redirect('/admin/mendaftar')->with('toast_success', 'Data berhasil dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        SiswaCalon::create($validatedData);

        Alert::success('Berhasil', 'Data anda sudah terekap, Silahkan tunggu info pengumuman!');
        return redirect('/hasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
