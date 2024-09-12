@extends('layout')
@section('content')
    <h1>User</h1>

    <div class="card">
        <div class="card-header">Profiles</div>
        <div class="card-body">
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-2">ADD</a>
            <div class="table table-responsive">
                <div class="table table-bordered text-center">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>level</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_lengkap }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->level->nama_level }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('user.destroy',$item->id) }}" method="POST" style="display: inline;">
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
    </div>
@endsection
