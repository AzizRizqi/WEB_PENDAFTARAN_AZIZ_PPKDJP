@extends('layout')
@section('content')
    <h1>Tambah Gelombang</h1>

    <form action="{{ route('jurusan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama jurusan">Nama jurusan:</label>
            <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" required>
        </div>
        <br>    
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
