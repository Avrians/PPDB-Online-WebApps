@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Score Passing Grade</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">0.7</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    <a href="/admin/mendaftar" style="text-decoration:none" class="text-warning">Total
                                        Mendaftar</a>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $semua }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-warning"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    <a href="/admin/diterima" style="text-decoration:none" class="text-info">Total
                                        Diterima</a>
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $diterima }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-plus fa-2x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    <a href="/admin/gagal" style="text-decoration:none" class="text-danger">Total Gagal</a>
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $gagal }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-minus-circle fa-2x text-danger"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Yang Mendaftar</h6>
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
                                <th>Skor</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hasil as $hsl)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $hsl->siswacalon->name }}</td>
                                    <td>{{ $hsl->siswacalon->nisn }}</td>
                                    <td>{{ $hsl->siswacalon->no_telp }}</td>
                                    <td>{{ $hsl->siswacalon->email }}</td>
                                    <td>{{ $hsl->siswacalon->jurusan }}</td>
                                    <td>{{ $hsl->siswacalon->asal_sekolah }}</td>
                                    <td>{{ $hsl->siswacalon->nilai_ipa }}</td>
                                    <td>{{ $hsl->siswacalon->nilai_mtk }}</td>
                                    <td>{{ $hsl->siswacalon->nilai_indo }}</td>
                                    <td>{{ $hsl->siswacalon->nilai_ing }}</td>
                                    <td>{{ $hsl->siswacalon->jarak }}</td>
                                    <td>{{ $hsl->hasil }}</td>
                                    <td>{{ $hsl->status }}</td>
                                    <td>
                                        <form action="/admin/detail/{{ $hsl->siswacalon->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-info mr-2">
                                                Detail
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
