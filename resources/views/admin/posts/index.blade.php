@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header bg-info text-white">
      <h5 class="mb-0">Published Posts</h5>
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
        <th class="text-center">Trash</th>
      </thead>
      <tbody>
        @if ( $posts->count() > 0 )
          @foreach ($posts as $post)
            <tr>
              <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" style="width: 125px; height: 75px;"></td>
              <td class="text-center align-middle">{{ $post->title }}</td>
              <td class="text-center align-middle"><a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
              <td class="text-center align-middle"><a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>
          @endforeach
        @else
        <tr>
          <th colspan='4' class="text-center">No Posts Found</th>
        </tr>
        @endif
      </tbody>
    </table>
  </div>

@endsection