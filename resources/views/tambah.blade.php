@extends('template')
@section('main')
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
      <label for="exampleInputNis" class="form-label">NIS</label>
      <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ old('nis') }}" id="exampleInputNis">
    </div>

    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="exampleInputName">
    </div>


    <div class="mb-3">
      <label for="exampleInputAlamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" id="exampleInputAlamat">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection