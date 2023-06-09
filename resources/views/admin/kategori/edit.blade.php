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
                        <div class="col-1 my-3">
                            <label class="form-label">Jarak</label>
                        </div>
                        <div class="col-1 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>
                        <div class="col-1 my-3">
                            <label class="form-label">Nilai B.Indonesia</label>
                        </div>
                        <div class="col-1 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>
                        <div class="col-1 my-3">
                            <label class="form-label">Nilai Matematika</label>
                        </div>
                        <div class="col-1 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>

                        <div class="col-1 my-3">
                            <label class="form-label">Nilai B.Inggris</label>
                        </div>
                        <div class="col-1 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>

                        <div class="col-1 my-3">
                            <label class="form-label">Nilai IPA</label>
                        </div>
                        <div class="col-1 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mb-3">
                        <button class="btn btn-primary w-100" type="submit">Kirim</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
