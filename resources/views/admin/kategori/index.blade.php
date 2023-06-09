@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Kategori Penilaian</h1>
        </div>

        <!-- DataTales Example -->
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
                                <th>Persentasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        @foreach ($kriteria as $k)                            
                        <tr>
                            <td>{{ $k->name }}</td>
                            <td>{{ $k->atribut }}</td>
                            <td>{{ $k->bobot }}</td>
                            <td>{{ $k->persentase }}</td>
                            <td>Edit</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
