@extends('layouts.app')

@section('content')
  
  @include('admin.inc.errors')

  <div class="card">
    <div class="card-body">
      <h3 class="card-title mb-4">Edit blog settings</h3>
      {{-- Start Form --}}
      <form action="{{ route('settings.update') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Site Name:</label>
          <input type="text" class="form-control" name="site_name" value="{{ $settings->site_name }}">
        </div>
        <div class="form-group">
          <label>Adress:</label>
          <input type="text" class="form-control" name="adress" value="{{ $settings->adress }}">
        </div>
        <div class="form-group">
          <label>Contact phone:</label>
          <input type="text" class="form-control" name="contact_number" value="{{ $settings->contact_number }}">
        </div>
        <div class="form-group">
          <label>Contact email:</label>
          <input type="email" class="form-control" name="contact_email" value="{{ $settings->contact_email }}">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success btn-lg d-block mx-auto">Update site settings</button>
        </div>
      </form>
      {{-- End Form --}}
    </div>
  </div>
@endsection