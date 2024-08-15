@extends('template')
@section('main')
<form action="{{ route('post.store') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="exampleInputTitle" class="form-label">Title</label>
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="exampleInputTitle">
    </div>


    <div class="mb-3">
      <label for="exampleInputContent" class="form-label">Content</label>
      <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}" id="exampleInputContent">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@endsection