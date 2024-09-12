@extends('layout')
@section('content')
    <h1>gelombang</h1>

    <div class="card">
        <div class="card-header">Gelombang</div>
        <div class="card-body">
            <a href="{{ route('gelombang.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama golombang</th>
                                <th>aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gelombang as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $item->nama_gelombang }}</td>
                                <td>{{ $item->aktif }}</td>
                                <td>
                                    <a href="{{ route('gelombang.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
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
