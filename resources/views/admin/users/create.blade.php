@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Create New User</h3>
      {{-- Start Form --}}
      <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label>User:</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Add user</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection