@extends('layout');
@section('content')
    <form action="{{ route('user.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="name" class="form-label">level</label>
            </div>
            <div class="col-sm-5">
                <select class="form-control" name="id_level">
                    @foreach ($level as $level)
                        <option value="{{ $level->id }}" <?= // dd($level->id)
                                $edit->id_level == $level->id ? 'selected' : '' ?>>
                            {{ $level->nama_level }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="nama lengkap" class="form-label">nama lengkap</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="nama_lengkap" value="{{ $edit->nama_lengkap }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="email" class="form-label">email</label>
            </div>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="name" name="email" value="{{ $edit->email }}">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="password" class="form-label">password</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="password" name="password" value="">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-secondary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
