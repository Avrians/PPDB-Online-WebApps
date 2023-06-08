@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Penilaian</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Penilaian</h6>
            </div>
            <div class="card-body">
                <a href="/admin/tambahdata" class="btn btn-primary mb-3">Tambah Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Nilai Indonesia</th>
                                <th>Nilai MTK</th>
                                <th>Nilai Inggris</th>
                                <th>Nilai IPA</th>
                                <th>Jarak</th>
                            </tr>
                        </thead>
                        @foreach ($penilaian as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->nisn }}</td>
                                <td>{{ $p->nilai_indo }}</td>
                                <td>{{ $p->nilai_mtk }}</td>
                                <td>{{ $p->nilai_ing }}</td>
                                <td>{{ $p->nilai_ipa }}</td>
                                <td>{{ $p->jarak }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
