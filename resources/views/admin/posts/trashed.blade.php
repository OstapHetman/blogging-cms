@extends('layouts.app')

@section('content')

  <div class="card">
    <table class="table table-striped">
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
        @foreach ($posts as $post)
          <tr>
            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" style="width: 125px; height: 75px;"></td>
            <td class="text-center align-middle">{{ $post->title }}</td>
            <td class="text-center align-middle"><a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
            <td class="text-center align-middle"><a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-warning"><i class="fas fa-trash-restore"></i></a></td>
            <td class="text-center align-middle"><a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-danger"><i class="fas fas fa-trash"></i></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection