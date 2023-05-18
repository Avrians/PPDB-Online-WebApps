@extends('layouts.mainDaftar')

@section('title', 'Hasil Pendaftaran')

@push('add-styles')
<link href="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@section('content')
<div class="container my-5">
  <div class="card">
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NISN</th>
                          <th>Asal Sekolah</th>
                          <th>Jurusan</th>
                          <th>Skor Seleksi</th>
                          <th>Status</th>
                      </tr>
                  </thead>

              </table>
          </div>
      </div>
  </div>
</div>
@endsection
@push('add-scripts')
    <!-- Page level plugins -->
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endpush