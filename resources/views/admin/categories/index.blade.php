@extends('layouts.app')

@section('content')

  <div class="card">
    <div class="card-header bg-info text-white">
      <h5 class="mb-0">Categories</h5>
    </div>
    <table class="table table-striped mb-0 table-bordered">
      <thead>
        <th>
          Category name
        </th>
        <th class="text-center">
          Edit
        </th>
        <th class="text-center">Delete</th>
      </thead>
      <tbody>
       @if ( $categories->count() >0 )
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td class="text-center"><a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
            <td class="text-center"><a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
          </tr>
        @endforeach
       @else
        <tr>
          <th colspan='3' class="text-center">No Categories Found</th>
        </tr>
       @endif
      </tbody>
    </table>
  </div>

@endsection