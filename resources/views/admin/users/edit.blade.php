@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('user.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $data->name }}" id="exampleInputName">
          </div>
      
          <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $data->email }}" id="exampleInputEmail">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection