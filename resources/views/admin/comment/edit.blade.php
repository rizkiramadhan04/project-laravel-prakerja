@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('comment.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}" id="exampleInputName">
          </div>


          <div class="mb-3">
            <label for="exampleInputKomentar" class="form-label">Komentar</label>
            <input type="text" name="komentar" class="form-control @error('komentar') is-invalid @enderror" value="{{ $data->komentar }}" id="exampleInputKomentar">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
