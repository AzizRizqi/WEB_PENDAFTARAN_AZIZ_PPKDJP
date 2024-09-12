@extends('layout')
@section('content')
    <h1>Tambah User</h1>

    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="id_level">Level</label>
            <select name="id_level" id="id_level" class="form-control">
                @foreach ($level as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_level }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
