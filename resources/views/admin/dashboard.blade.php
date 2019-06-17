@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-header">Posted</div>
        
                <div class="card-body">
                    <h4 class="text-center mb-0">{{ $post_count }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-header">Trashed Posts</div>
        
                <div class="card-body">
                    <h4 class="text-center mb-0">{{ $trashed_count }}</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-header">Users</div>
        
                <div class="card-body">
                    <h4 class="text-center mb-0">{{ $users_count }}</h4>
                </div>
            </div>
        </div>

            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-header">Categories</div>
            
                    <div class="card-body">
                        <h4 class="text-center mb-0">{{ $cat_count }}</h4>
                    </div>
                </div>
            </div>
    </div>
@endsection
