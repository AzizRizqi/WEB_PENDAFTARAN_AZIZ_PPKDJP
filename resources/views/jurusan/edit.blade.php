@extends('layout');
@section('content')
    <form action="{{ route('jurusan.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="edit gelombang" class="form-label">jurusan</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" value="{{ $edit->nama_jurusan }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
