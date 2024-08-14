@extends('template')
@section('main')
<form>
    <div class="mb-3">
      <label for="exampleInputNis" class="form-label">NIS</label>
      <input type="number" class="form-control" id="exampleInputNis" aria-describedby="emailHelp">
      @if ($error->any())
      <div id="nisHelp" class="form-text">{{ $error->message }}</div>
      @endif
    </div>

    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Nama</label>
      <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
      <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>


    <div class="mb-3">
      <label for="exampleInputAlamat" class="form-label">Alamat</label>
      <input type="text" class="form-control" id="exampleInputAlamat" aria-describedby="emailHelp">
      <div id="alamatHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection