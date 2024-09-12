@extends('layout');
@section('content')
    <form action="{{ route('level.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="edit level" class="form-label">level</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_level" id="nama_level" value="{{ $edit->nama_level }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
