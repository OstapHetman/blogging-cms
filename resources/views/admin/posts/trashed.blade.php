@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header bg-info text-white">
      <h5 class="mb-0">Trashed Posts</h5>
    </div>
    <table class="table table-striped mb-0 table-bordered">
      <thead>
        <th>
          Image
        </th>
        <th class="text-center">
          Title
        </th>
        <th class="text-center">Edit</th>
        <th class="text-center">Restore</th>
        <th class="text-center">Delete</th>
      </thead>
      <tbody>
        @if($posts->count() >0 )
          @foreach ($posts as $post)
            <tr>
              <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" style="width: 125px; height: 75px;"></td>
              <td class="text-center align-middle">{{ $post->title }}</td>
              <td class="text-center align-middle"><a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
              <td class="text-center align-middle"><a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-warning"><i class="fas fa-trash-restore"></i></a></td>
              <td class="text-center align-middle"><a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-danger"><i class="fas fas fa-trash"></i></a></td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan='5' class="text-center">No Trashed Posts</th>
          </tr>
        @endif
      </tbody>
    </table>
  </div>

@endsection