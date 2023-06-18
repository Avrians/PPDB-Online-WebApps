@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Lengkap Calon Siswa</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Lengkap Calon Siswa</h6>
            </div>
            <div class="card-body">
                <a href="/admin/mendaftar" class="btn btn-warning mb-2">Back</a>
                <form action="/admin/updatedata/{{ $detailsiswa->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id" class="form-control" required
                                    value="{{ $detailsiswa->id }}">
                                <label class="form-label">Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ $detailsiswa->name }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">NISN</label>
                                <input type="number" name="nisn" class="form-control" value="{{ $detailsiswa->nisn }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">No Telepon</label>
                                <input type="number" name="no_telp" class="form-control"
                                    value="{{ $detailsiswa->no_telp }}" required>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $detailsiswa->email }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control" value="{{ $detailsiswa->jenik_kelamin }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Agama</label>
                                <input type="text" name="agama" class="form-control"
                                    value="{{ $detailsiswa->agama }}" required>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" class="form-control"
                                    value="{{ $detailsiswa->tanggal_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-group">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control"
                                    value="{{ $detailsiswa->tempat_lahir }}" required>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control"
                                    value="{{ $detailsiswa->asal_sekolah }}" required>
                            </div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jarak ke Sekolah (Dalam Kilometer(Km))</label>
                                <input type="number" name="jarak" class="form-control" value="{{ $detailsiswa->jarak }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="form-group">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control"
                                    value="{{ $detailsiswa->jurusan }}" required>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label">Nilai Ujian Nasional</label>
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">B. Indonesia</label>
                                <input type="number" name="nilai_indo" class="form-control"
                                    value="{{ $detailsiswa->nilai_indo }}" required>
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">B. Inggris</label>
                                <input type="number" name="nilai_ing" class="form-control"
                                    value="{{ $detailsiswa->nilai_ing }}" required>
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">IPA</label>
                                <input type="number" name="nilai_ipa" class="form-control"
                                    value="{{ $detailsiswa->nilai_ipa }}" required>
                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <div class="form-group">
                                <label class="form-label">MTK</label>
                                <input type="number" name="nilai_mtk" class="form-control"
                                    value="{{ $detailsiswa->nilai_mtk }}" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" rows="10" class="form-control">{{ $detailsiswa->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <button class="btn btn-primary w-100" type="submit">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
