@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header bg-info text-white">
      <h5 class="mb-0">Tags</h5>
    </div>
    <table class="table table-striped mb-0 table-bordered">
      <thead>
        <th>
          Tag name
        </th>
        <th class="text-center">
          Edit
        </th>
        <th class="text-center">Delete</th>
      </thead>
      <tbody>
        @if ( $tags->count() > 0 )
          @foreach ($tags as $tag)
            <tr>
              <td>{{ $tag->tag }}</td>
              <td class="text-center"><a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
              <td class="text-center"><a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
            </tr>
          @endforeach
        @else
          <tr>
            <th colspan='3' class="text-center">No Tags Found</th>
          </tr>
        @endif
      </tbody>
    </table>
  </div>

@endsection