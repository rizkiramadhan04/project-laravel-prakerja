@extends('template')
@section('main')
<form action="{{ route('comment.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="exampleInputName">
    </div>


    <div class="mb-3">
      <label for="exampleInputKomentar" class="form-label">Komentar</label>
      <input type="text" name="komentar" class="form-control @error('komentar') is-invalid @enderror" value="{{ old('komentar') }}" id="exampleInputKomentar">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection