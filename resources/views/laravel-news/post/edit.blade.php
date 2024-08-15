@extends('template')
@section('main')
<h2>Edit Data</h2>
    <form action="{{ route('post.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleInputTitle" class="form-label">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $data->title }}" id="exampleInputTitle">
          </div>
      
      
          <div class="mb-3">
            <label for="exampleInputContent" class="form-label">Content</label>
            <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ $data->content }}" id="exampleInputContent">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection