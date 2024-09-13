@extends('layout')

@section('content')
    <div class="card mx-3 mb-3">
        <div class="card-body">
            <h2>Peserta Details</h2>
            <dl class="row">
                <dt class="col-sm-3">Nama Lengkap:</dt>
                <dd class="col-sm-9">{{ $peserta->nama_lengkap }}</dd>

                <dt class="col-sm-3">NIK:</dt>
                <dd class="col-sm-9">{{ $peserta->nik }}</dd>

                <dt class="col-sm-3">Kartu Keluarga:</dt>
                <dd class="col-sm-9">{{ $peserta->kartu_keluarga }}</dd>

                <dt class="col-sm-3">Jenis Kelamin:</dt>
                <dd class="col-sm-9">{{ $peserta->jenis_kelamin }}</dd>

                <dt class="col-sm-3">Tempat Lahir:</dt>
                <dd class="col-sm-9">{{ $peserta->tampat_lahir }}</dd>

                <dt class="col-sm-3">Tanggal Lahir:</dt>
                <dd class="col-sm-9">{{ $peserta->tanggal_lahir }}</dd>

                <dt class="col-sm-3">Pendidikan Terakhir:</dt>
                <dd class="col-sm-9">{{ $peserta->pendidikan_terakhir }}</dd>

                <dt class="col-sm-3">Nama Sekolah:</dt>
                <dd class="col-sm-9">{{ $peserta->nama_sekolah }}</dd>

                <dt class="col-sm-3">Kejuruan:</dt>
                <dd class="col-sm-9">{{ $peserta->kejuruan }}</dd>

                <dt class="col-sm-3">Nomor HP:</dt>
                <dd class="col-sm-9">{{ $peserta->nomer_hp }}</dd>

                <dt class="col-sm-3">Email:</dt>
                <dd class="col-sm-9">{{ $peserta->email }}</dd>

                <dt class="col-sm-3">Aktivitas Saat Ini:</dt>
                <dd class="col-sm-9">{{ $peserta->aktivitas_saat_ini }}</dd>

                <dt class="col-sm-3">Status:</dt>
                <dd class="col-sm-9">
                    @if ($peserta->status == 1)
                        <span class="badge bg-success">Diterima</span>
                    @elseif ($peserta->status == 2)
                        <span class="badge bg-secondary">Cadangan</span>
                    @elseif($peserta->status == 3)
                        <span class="badge bg-danger">Tidak Diterima</span>
                    @endif
                </dd>
            </dl>
        </div>
    </div>
@endsection
