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
                <form action="/admin/kategori/store/{{ $kriteria->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-1 my-3">
                            <label class="form-label">Nama</label>
                        </div>
                        <div class="col-2 my-3">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" autocomplete="off" autofocus
                                    required value="{{ $kriteria->name }}" disabled>
                            </div>
                        </div>
                        <div class="col-1 my-3">
                            <label class="form-label">Atribut</label>
                        </div>
                        <div class="col-2 my-3">
                            <div class="form-group">
                                <select name="atribut" class="form-control">
                                    <option value="Cost" {{ $kriteria->atribut == 'Cost' ? 'selected' : '' }}>Cost
                                    </option>
                                    <option value="Benefit" {{ $kriteria->atribut == 'Benefit' ? 'selected' : '' }}>Benefit
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-1 my-3">
                            <label class="form-label">Bobot</label>
                        </div>
                        <div class="col-2 my-3">
                            <div class="form-group">
                                <select name="bobot" class="form-control">
                                    <option value="1" {{ $kriteria->bobot == '1' ? 'selected' : '' }}>1</option>
                                    <option value="2" {{ $kriteria->bobot == '2' ? 'selected' : '' }}>2</option>
                                    <option value="3" {{ $kriteria->bobot == '3' ? 'selected' : '' }}>3</option>
                                    <option value="4" {{ $kriteria->bobot == '4' ? 'selected' : '' }}>4</option>
                                    <option value="5" {{ $kriteria->bobot == '5' ? 'selected' : '' }}>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 my-3">
                            <button class="btn btn-primary w-100" type="submit">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
