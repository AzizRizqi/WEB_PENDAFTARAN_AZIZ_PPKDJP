@extends('layout')
@section('content')
    <form action="{{ route('gelombang.update', $edit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="nama_gelombang" class="form-label">Gelombang</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_gelombang" id="nama_gelombang"
                    value="{{ $edit->nama_gelombang }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="aktif" class="form-label">Aktif</label>
            </div>
            <div class="col-sm-5">
                <select class="form-control" name="aktif">
                    <option value="1" {{ $edit->aktif == 1 ? 'selected' : '' }}>Aktif</option>
                    <option value="2" {{ $edit->aktif == 2 ? 'selected' : '' }}>Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
