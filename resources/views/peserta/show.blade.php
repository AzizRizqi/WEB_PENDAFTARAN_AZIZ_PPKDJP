@extends('layout');

@section('content')

    <div class="card">
        <div class="card-body">
            <p>Nama Lengkap: {{ $peserta->nama_lengkap }}</p>
            <p>NIK: {{ $peserta->nik }}</p>
            <p>Kartu Keluarga: {{ $peserta->kartu_keluarga }}</p>
            <p>Jenis Kelamin: {{ $peserta->jenis_kelamin }}</p>
            <p>Tempat Lahir: {{ $peserta->tempat_lahir }}</p>
            <p>Tanggal Lahir: {{ $peserta->tanggal_lahir }}</p>
            <p>Pendidikan Terakhir: {{ $peserta->pendidikan_terakhir }}</p>
            <p>Nama Sekolah: {{ $peserta->nama_sekolah }}</p>
            <p>Kejuruan: {{ $peserta->kejuruan }}</p>
            <p>Nomor HP: {{ $peserta->nomer_hp }}</p>
            <p>Email: {{ $peserta->email }}</p>
            <p>Aktivitas Saat Ini: {{ $peserta->aktivitas_saat_ini }}</p>
            <p>Status: {{ $peserta->status }}</p>
        </div>
    </div>
@endsection
