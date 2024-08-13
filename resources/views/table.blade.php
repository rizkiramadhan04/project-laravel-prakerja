@extends('template')
@section('main')
<h1>Ini halaman table!</h1>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_array as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('js')
    <script>
        alert('ini halaman table!');
    </script>
@endsection