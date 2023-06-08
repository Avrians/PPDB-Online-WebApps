@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Perhitungan Nilai Normalisasi</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Perhitungan Nilai Normalisasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nilai Indonesia</th>
                                <th>Nilai MTK</th>
                                <th>Nilai Inggris</th>
                                <th>Nilai IPA</th>
                                <th>Jarak</th>
                            </tr>
                        </thead>
                        @foreach ($normalisasi as $n)                            
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $n->nisn }}</td>
                            <td>{{ $n->nilai_indo }}</td>
                            <td>{{ $n->nilai_mtk }}</td>
                            <td>{{ $n->nilai_ing }}</td>
                            <td>{{ $n->nilai_ipa }}</td>
                            <td>{{ $n->jarak }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
