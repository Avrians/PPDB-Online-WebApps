@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Siswa Yang Diterima</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Yang Diterima</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Jurusan</th>
                                <th>Asal Sekolah</th>
                                <th>Nilai IPA</th>
                                <th>Nilai MTK</th>
                                <th>Nilai B.Ind</th>
                                <th>Nilai B.Ing</th>
                                <th>Jarak (km)</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswacalons as $siswa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $siswa->siswacalon->name }}</td>
                                <td>{{ $siswa->siswacalon->nisn }}</td>
                                <td>{{ $siswa->siswacalon->no_telp }}</td>
                                <td>{{ $siswa->siswacalon->email }}</td>
                                <td>{{ $siswa->siswacalon->jurusan }}</td>
                                <td>{{ $siswa->siswacalon->asal_sekolah }}</td>
                                <td>{{ $siswa->siswacalon->nilai_ipa }}</td>
                                <td>{{ $siswa->siswacalon->nilai_mtk }}</td>
                                <td>{{ $siswa->siswacalon->nilai_indo }}</td>
                                <td>{{ $siswa->siswacalon->nilai_ing }}</td>
                                <td>{{ $siswa->siswacalon->jarak }}</td>
                                <td>
                                    @if ($siswa->status == 'Diterima')
                                    <span class="btn btn-info btn-sm">{{ $siswa->status }}</span>
                                    @else
                                    <span class="btn btn-danger btn-sm">{{ $siswa->status }}</span>
                                    @endif
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
