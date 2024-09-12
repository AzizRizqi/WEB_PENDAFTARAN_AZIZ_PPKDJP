@extends('layout')
@section('content')
    <h1>Tambah Level</h1>

    <form action="{{ route('level.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">level:</label>
            <input type="text" class="form-control" id="level" name="nama_level" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
