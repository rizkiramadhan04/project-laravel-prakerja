@extends('template')
@section('main')
<form action="{{ route('user.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="exampleInputName">
    </div>

    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="exampleInputEmail">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword" class="form-label">password</label>
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="exampleInputPassword">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection