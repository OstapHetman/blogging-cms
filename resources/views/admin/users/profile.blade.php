@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Edit profile</h3>
      {{-- Start Form --}}
      <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Avatar</label>
        <div class="custom-file mb-3">
          <input type="file" name="avatar" class="custom-file-input">
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
        <div class="form-group">
          <label>Username:</label>
          <input type="text" class="form-control" name="name" value="{{ $user->name }}">
        </div>
        <div class="form-group">
          <label>Facebook:</label>
          <input type="text" class="form-control" name="facebook" value="{{ $user->profile->facebook }}">
        </div>
        <div class="form-group">
          <label>Youtube:</label>
          <input type="text" class="form-control" name="youtube" value="{{ $user->profile->youtube }}">
        </div>
        <div class="form-group">
          <label>About you:</label>
          <textarea class="form-control" name="about" rows="5">{{ $user->profile->about }}</textarea>
        </div>
        <div class="form-group">
          <label>Email:</label>
          <input type="email" class="form-control" name="email" value="{{ $user->email }}">
        </div>
        <div class="form-group">
          <label>New password:</label>
          <input type="password" class="form-control" name="password">
        </div>
        
        
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Update profile</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection