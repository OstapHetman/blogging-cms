@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

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
          <label>Select Category:</label>
          <select name="category_id" class="form-control">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label>Select Tags: </label>
          @foreach ($tags as $tag)
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="tags[]" class="custom-control-input" value="{{ $tag->id }}" id="tag-{{ $tag->tag }}">
              <label class="custom-control-label" for="tag-{{ $tag->tag }}">{{ $tag->tag }}</label>
            </div>
          @endforeach
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