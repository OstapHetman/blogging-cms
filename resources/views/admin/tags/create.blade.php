@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Create New Tag</h3>
      {{-- Start Form --}}
      <form action="{{ route('tag.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Tag:</label>
          <input type="text" class="form-control" name="tag">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Create</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection