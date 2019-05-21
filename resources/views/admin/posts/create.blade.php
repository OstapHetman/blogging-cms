@extends('layouts.app')

@section('content')
  
  @if(count($errors) > 0)
      @foreach ($errors->all() as $err)
        <div class="alert alert-danger" role="alert">
          {{ $err }}
        </div>
      @endforeach
  @endif

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Create New Post</h3>
      {{-- Start Form --}}
      <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label>Title:</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Featured</span>
          </div>
          <div class="custom-file">

            <input type="file" name="featured" class="custom-file-input">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
          </div>
        </div>
        <div class="form-group">
          <label>Content:</label>
          <textarea name="content" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Create</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection