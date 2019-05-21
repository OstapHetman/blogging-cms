@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Create New Category</h3>
      {{-- Start Form --}}
      <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Create</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection