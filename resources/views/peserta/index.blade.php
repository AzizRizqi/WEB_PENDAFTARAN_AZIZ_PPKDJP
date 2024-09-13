@extends('layout')

@section('content')
    <h1>Peserta Pelatihan</h1>

    <div class="card">
        <div class="card-header">Peserta Pelatihan</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Gelombang</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Kejuruan</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($peserta as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->gelombang->nama_gelombang }}</td>
                                <td>{{ $item->jenis_kelamin }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->pendidikan_terakhir }}</td>
                                <td>{{ $item->kejuruan }}</td>
                                <td>{{ $item->nomer_hp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        <span class="badge bg-success">Diterima</span>
                                    @elseif ($item->status == 2)
                                        <span class="badge bg-secondary">Cadangan</span>
                                    @elseif($item->status == 3)
                                        <span class="badge bg-danger">Tidak Diterima</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('peserta.show', $item->id) }}"
                                        class="btn btn-primary btn-sm mb-2">Detail</a>
                                    <a href="{{ route('peserta.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('peserta.destroy', $item->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
