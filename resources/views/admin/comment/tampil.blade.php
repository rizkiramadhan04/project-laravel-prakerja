@extends('template')
@section('main')
<h1>Ini halaman Comment</h1>
<a href="{{ route('comment.create') }}" class="btn btn-primary">Tambah Data</a>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->komentar }}</td>
                    <td class="d-flex gap-1"><a href="{{ route('comment.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('comment.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
