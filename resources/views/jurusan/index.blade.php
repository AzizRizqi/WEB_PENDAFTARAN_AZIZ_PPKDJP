@extends('layout')
@section('content')
    <h1>Jurusan</h1>

    <div class="card">
        <div class="card-header">jurusan</div>
        <div class="card-body">
            <a href="{{ route('jurusan.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama jurusan</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jurusan as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $item->nama_jurusan }}</td>
                                <td>
                                    <a href="{{ route('jurusan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="" method="POST" style="display: inline;">
                                        @csrf
                                        {{-- @method('DELETE') --}}
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
    </div>
@endsection
