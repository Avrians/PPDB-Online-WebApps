@extends('layouts.mainDaftar')

@section('title', 'Pendaftaran')

@section('content')

        <div class="container mb-5">

            <h2 class="text-center mt-5 mb-3">Tata Cara PPDB Online</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Daftar</h4>
                            <p>Calon peserta didik baru akses laman situs PPDB online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Memberikan Bukti Berkas</h4>
                            <p>Calon peserta didik mempersiapkan beberapa dokumen penting yang dibutuhkan untuk
                                memverifikasi data</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Verifikasi Data</h4>
                            <p>Operator akan melakukan verifikasi pengajuan akun dan berkas secara online</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card h-100 d-flex">
                        <div class="card-body text-center">
                            <h4>Hasil</h4>
                            <p>Calon peserta didik baru akan mengecek apakah mereka telah lulus atau tidak di halaman
                                <strong>"Hasil Pendaftaran"</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <h1>Biodata Calon Siswa</h1>
                    <hr>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" autocomplete="off" autofocus>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="number" name="no_telp" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select name="id_agama" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select name="id_jurusan" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select name="id_jenis_kelamin" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <h1 class="mt-5">Biodata Orang Tua</h1>
                                <hr>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Orang Tua (Ayah)</label>
                                    <input type="text" name="nama_ayah" class="form-control" autocomplete="off"
                                        autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pekerjaan Ayah</label>
                                    <select name="id_pekerjaan_ayah" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penghasilan Ayah</label>
                                    <select name="id_penghasilan_ayah" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama Orang Tua (Ibu)</label>
                                    <input type="text" name="nama_ibu" class="form-control" autocomplete="off"
                                        autofocus>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pekerjaan Ibu</label>
                                    <select name="id_pekerjaan_ibu" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Penghasilan Ibu</label>
                                    <select name="id_penghasilan_ibu" class="form-control">
                                        <option value="">NO Data</option>
                                        <option value="">NO Data</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>No Telepon</label>
                                    <input type="number" name="no_telp_ortu" class="form-control" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
