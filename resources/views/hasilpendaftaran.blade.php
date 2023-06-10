@extends('layouts.mainDaftar')

@section('title', 'Hasil Pendaftaran')

@push('add-styles')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container my-5">
        <h3 class="text-center mb-3">Hasil Seleksi Pendaftaran PPDB SMA Nusa Bangsa</h3>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Asal Sekolah</th>
                                <th>Skor</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswacalons as $siswa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $siswa->siswacalon->name }}</td>
                                    <td>{{ $siswa->siswacalon->nisn }}</td>
                                    <td>{{ $siswa->siswacalon->asal_sekolah }}</td>
                                    <td>{{ $siswa->hasil }}</td>
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
@push('add-scripts')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('sbadmin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/demo/datatables-demo.js') }}"></script>
@endpush
