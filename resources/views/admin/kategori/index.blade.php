@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ketentuan Penilaian</h1>
        </div>

        <!-- DataTales -->
        <div class="col-xl-4 col-lg-5 p-0">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Score Passing Grade</h6>
                </div>
                <div class="card-body">
                    <form action="/admin/kategori/passing/{{ $pass[0]->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-2 my-3">
                                <label class="form-label">Nilai</label>
                            </div>

                            <div class="col-6 my-3">
                                <div class="form-group">
                                    <input type="text" name="nilai" class="form-control" autocomplete="off"
                                        required value="{{ $pass[0]->nilai }}">
                                </div>
                            </div>
                            <div class="col-3 my-3">
                                <button class="btn btn-primary w-100" type="submit">Ubah</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <small class="text-danger">Masukan data tidak lebih dari 1 Range 0.01 - 1</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- DataTales -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kategori Penilaian</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Atribut</th>
                                <th>Bobot</th>
                                <th>Persentase</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($kriteria as $k)
                            <tr>
                                <td>{{ $k->name }}</td>
                                <td>{{ $k->atribut }}</td>
                                <td>{{ $k->bobot }}</td>
                                <td>{{ $k->persentase }}</td>
                                <td>
                                    <form action="/admin/kategori/edit/{{ $k->id }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-info mr-2">
                                            Edit
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
