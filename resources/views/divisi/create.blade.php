@extends('layout.master')

@section('title')
    Tambah Divisi
@endsection

@section('content')
    <div class="container mt-4">
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header d-md-flex flex-row justify-content-between">
                <h5 class="card-title">Tambah Divisi</h5>
                <div>
                    <a class="btn btn-secondary" href="{{ URL::previous() }}"> Kembali</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('divisi.store') }}" method="POST" enctype="multipart/form-data" id="mainform">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Divisi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" id="nama" required
                                placeholder="Silahkan masukan nama divisi">
                        </div>
                        <div class="col-12">
                            @error('nama')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary ml-3" form="mainform">Simpan</button>
            </div>
        </div>
    </div>
@endsection
