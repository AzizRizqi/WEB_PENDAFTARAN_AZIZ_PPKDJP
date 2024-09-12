@extends('layout');
@section('content')
    <form action="{{ route('gelombang.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="edit gelombang" class="form-label">Gelombang</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_gelombang" id="nama_gelombang" value="{{ $edit->nama_gelombang }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="edit aktif" class="form-label">aktif</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="aktif" id="aktif" value="{{ $edit->aktif }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
