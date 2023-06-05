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
                            <strong>"Hasil Pendaftaran"</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <h1>Biodata Calon Siswa</h1>
                <hr>
                <form action="/daftar" method="POST">
                    @method('post')
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">NISN</label>
                                <input type="number" name="nisn" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">No Telepon</label>
                                <input type="number" name="no_telp" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Agama</label>
                                <select name="id_agama" class="form-control">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jarak ke Sekolah (Dalam Kilometer(Km))</label>
                                <input type="number" name="jarak" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jurusan</label>
                                <select name="id_jurusan" class="form-control">
                                    <option value="ipa">IPA</option>
                                    <option value="ips">IPS</option>
                                    <option value="bahasa">Bahasa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <select name="id_jk" class="form-control">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Nilai Ujian Nasional</label>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Bahasa Indonesia</label>
                                <input type="number" name="nilai_indo" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Bahasa Inggris</label>
                                <input type="number" name="nilai_ing" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">IPA</label>
                                <input type="number" name="nilai_ipa" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-3 mb-3">
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
                        <div class="col-9 mb-3">
                            <div class="form-group">
                                <label for="formFile" class="form-label">Upload Berkas</label>
                                <p>Mohon untuk mengupload berkas-berkas seperti Ijazah, SKHUN, NISN, Sertifikat Pendukung (Jika ada)</p>
                                <input class="form-control" type="file" id="berkas" name="berkas">
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
    </main>
@endsection
