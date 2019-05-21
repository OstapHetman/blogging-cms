@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Update category: {{ $category->name }}</h3>
      {{-- Start Form --}}
      <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group">
          <label>Name:</label>
          <input type="text" class="form-control" name="name" value="{{ $category->name }}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Update</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection