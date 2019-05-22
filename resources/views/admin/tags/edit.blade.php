@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Update Tag</h3>
      {{-- Start Form --}}
      <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
        @csrf
        <div class="form-group">
          <label>Tag: {{ $tag->tag }}</label>
          <input type="text" class="form-control" name="tag" value="{{ $tag->tag }}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Update</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection