@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Calon Siswa</h1>
        <p class="mb-4">
            Tambah Data Calon Siswa
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Data Calon Siswa</h6>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-warning mb-2">Back</a>
                <form action="#" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">NISN</label>
                                <input type="number" name="nisn" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">No Telepon</label>
                                <input type="number" name="no_telp" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-md-1 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="id_jk" class="form-control">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Agama</label>
                                <select name="id_agama" class="form-control">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jarak ke Sekolah (Dalam Kilometer(Km))</label>
                                <input type="number" name="jarak" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jurusan</label>
                                <select name="id_jurusan" class="form-control">
                                    <option value="ipa">IPA</option>
                                    <option value="ips">IPS</option>
                                    <option value="bahasa">Bahasa</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Nilai Ujian Nasional</label>
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">Bahasa Indonesia</label>
                                <input type="number" name="nilai_indo" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">Bahasa Inggris</label>
                                <input type="number" name="nilai_ing" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">IPA</label>
                                <input type="number" name="nilai_ipa" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">MTK</label>
                                <input type="number" name="nilai_mtk" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
