@extends('admin.layouts.main')
@push('style')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Daftar Siswa Yang Mendaftar</h1>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Yang Mendaftar</h6>
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
                                <th>Aksi</th>
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
                                    <td>{{ $siswa->status }}</td>
                                    <td>
                                        <form action="/admin/detail/{{ $siswa->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-info mr-2">
                                                Detail
                                            </button>
                                        </form>
                                        <form action="/admin/editdata/{{ $siswa->id }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <button type="submit" class="btn btn-warning mr-2">
                                                Edit
                                            </button>
                                        </form>
                                        <form action="/admin/hapusdata/{{ $siswa->id }}" method="get">
                                            @method('delete')
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            {{-- <button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true"> --}}
                                            <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                                data-toggle="tooltip" title='Hapus'>
                                                Hapus
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><button type="submit" class="btn btn-danger mr-2" data-confirm-delete="true">
        </div>

    </div>
@endsection
@push('add-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
