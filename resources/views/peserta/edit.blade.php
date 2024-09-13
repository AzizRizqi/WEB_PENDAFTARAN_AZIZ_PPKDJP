@extends('layout')
@section('content')
    <form action="{{ route('peserta.update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="jurusan">Jurusan</label>
                </div>
                <div class="col-sm-10">
                    <select name="id_jurusan" id="id_jurusan" class="form-control">
                        @foreach ($jurusan as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $edit->id_jurusan ? 'selected' : '' }}>
                                {{ $item->nama_jurusan }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="gelombang">Gelombang</label>
                </div>
                <div class="col-sm-10">
                    <select name="id_gelombang" id="id_gelombang" class="form-control" readonly>
                        @foreach ($gelombang->where('aktif',1) as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $edit->id_gelombang ? 'selected' : '' }}>
                                {{ $item->nama_gelombang }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nama_lengkap">Nama Lengkap *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="{{$edit->nama_lengkap}}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nik">Nik *</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" id="nik" name="nik" class="form-control" value="{{$edit->nik}}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="unggah-akta">Unggah Akta Kelahiran *</label>
                </div>
                <div class="col-sm-10">
                    <input type="file" id="kartu_keluarga" name="kartu_keluarga" class="form-control-file">
                    @if($edit->kartu_keluarga)
                        <a href="{{ asset($edit->kartu_keluarga) }}" target="_blank">Lihat file yang diunggah</a>
                    @endif
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="jenis-kelamin">Jenis Kelamin *</label>
                </div>
                <div class="col-sm-10">
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-laki" {{ $edit->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ $edit->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="tempat_lahir">Tempat Lahir *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="tampat_lahir" name="tampat_lahir" class="form-control" value="{{$edit->tampat_lahir }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="tanggal_lahir">Tanggal Lahir *</label>
                </div>
                <div class="col-sm-10">
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" value="{{$edit->tanggal_lahir }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="pendidikan_terakhir">Pendidikan Terakhir *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" value="{{ $edit->pendidikan_terakhir }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nama_sekolah">Nama Sekolah *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control" value="{{$edit->nama_sekolah }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="kejuruan">Kejuruan *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="kejuruan" name="kejuruan" class="form-control" value="{{$edit->kejuruan }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="nomer_hp">No HP *</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" id="nomer_hp" name="nomer_hp" class="form-control" value="{{$edit->nomer_hp }}" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="email">Alamat Email</label>
                </div>
                <div class="col-sm-10">
                    <input type="email" id="email" name="email" class="form-control" value="{{$edit->email }}">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="aktivitas_saat_ini">Aktivitas Saat ini *</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" id="aktivitas_saat_ini" name="aktivitas_saat_ini" class="form-control" value="{{$edit->aktivitas_saat_ini }}" required>
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-2">
                    <label for="aktif" class="form-label">Aktif</label>
                </div>
                <div class="col-sm-5">
                    <select class="form-control" name="status">
                        <option value="1">Diterima</option>
                        <option value="2">Cadangan</option>
                        <option value="3">Ditolak</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
@endsection
