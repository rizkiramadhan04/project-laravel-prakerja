@extends('template')
@section('main')
<h1>Ini halaman Siswa</h1>
<a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Data</a>
<a href="{{ route('siswa.edit') }}" class="btn btn-primary">Edit Data</a>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Name</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection