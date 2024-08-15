@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('siswa.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>NIS</label>
            <input type="number" name="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $data->nis }}">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $data->nama }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $data->alamat }}">
        </div>

        <div class="mb-3">
            <label for="exampleInputSekolah" class="form-label">Sekolah</label>
            <select type="text" name="sekolah_id" class="form-control @error('sekolah_id') is-invalid @enderror" id="exampleInputSekolah">
              <option value="">-- choose sekolah --</option>
                @foreach ($sekolah as $item)
                  <option value="{{ $item->id }}" @if ($item->id == $data->sekolah_id) selected @endif>{{ $item->nama_sekolah }}</option>
                @endforeach
            </select>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection