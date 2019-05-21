@extends('layouts.app')

@section('content')

  <div class="card">
    <table class="table table-striped">
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
        @foreach ($categories as $category)
          <tr>
            <td>{{ $category->name }}</td>
            <td class="text-center"><a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-info text-white"><i class="far fa-edit"></i></a></td>
            <td class="text-center"><a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection