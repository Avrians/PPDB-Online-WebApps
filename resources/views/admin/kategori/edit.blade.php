@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Edit kategori</h1>
        <p class="mb-4">
            Edit Kategori Penilaian
        </p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori Penilaian</h6>
            </div>
            <div class="card-body">
                <a href="/admin/kategori/" class="btn btn-warning mb-2">Back</a>
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
                        <div class="col-12 mb-3">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
