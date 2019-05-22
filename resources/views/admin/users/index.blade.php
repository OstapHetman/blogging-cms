@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header bg-info text-white">
      <h5 class="mb-0">Users</h5>
    </div>
    <table class="table table-striped mb-0 table-bordered">
      <thead>
        <th class="text-center">
          Image
        </th>
        <th class="text-center">
          Name
        </th>
        <th class="text-center">Permissions</th>
        <th class="text-center">Delete</th>
      </thead>
      <tbody>
        @if ( $users->count() > 0 )
          @foreach ($users as $user)
            <tr>
              <td class="align-middle text-center"><img class="rounded-circle" src="{{ asset($user->profile->avatar) }}" alt="Avatar" width="75px" height="75px"></td>
              <td class="align-middle text-center">{{ $user->name }}</td>
              <td class="align-middle text-center">Permissions</td>
              <td class="align-middle text-center">Delete</td>
            </tr>
          @endforeach
        @else
        <tr>
          <th colspan='4' class="text-center">No users found</th>
        </tr>
        @endif
      </tbody>
    </table>
  </div>

@endsection