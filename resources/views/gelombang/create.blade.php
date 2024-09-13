@extends('layout')
@section('content')
    <h1>Tambah Gelombang</h1>

    <form action="{{ route('gelombang.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama gelombang">Nama Gelombang:</label>
            <input type="text" class="form-control" id="nama_gelombang" name="nama_gelombang" required>
        </div>
        <div class="form-group">
            <label for="level">aktif:</label>
            <input type="number" class="form-control" id="aktif" name="aktif" required>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
