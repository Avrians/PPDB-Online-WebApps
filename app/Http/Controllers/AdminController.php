<?php

namespace App\Http\Controllers;

use App\Models\SiswaCalon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = SiswaCalon::find($id);
        $data->delete();

        return redirect('/admin/mendaftar')->with('toast_success', 'Data berhasil dihapus');
    }

    public function hapusData($id)
    {
        $data = SiswaCalon::find($id);
        $data->delete();

        return redirect('/admin/mendaftar')->with('toast_success', 'Data berhasil dihapus');
    }
}
