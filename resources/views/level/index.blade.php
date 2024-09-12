@extends('layout')
@section('content')
    <h1>Level</h1>

    <div class="card">
        <div class="card-header">Level</div>
        <div class="card-body">
            <a href="{{ route('level.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($levels as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_level }}</td>
                                <td></td>
                                <td>
                                    <a href="{{ route('level.edit',$item->id) }}" class="btn btn-sm btn-warning">Edit</a>
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