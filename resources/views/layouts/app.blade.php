<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">

                    @if (Auth::check())
                        <div class="col-lg-4">

                            <div class="list-group">
                                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action">Dashboard</a>
                                @if (Auth::user()->admin)
                                    <a href="{{ route('users') }}" class="list-group-item list-group-item-action">Users</a>
                                    <a href="{{ route('user.create') }}" class="list-group-item list-group-item-action">Add new user</a>
                                @endif
                                <a href="{{ route('user.profile') }}" class="list-group-item list-group-item-action">My profile</a>
                                <a href="{{ route('post.create') }}" class="list-group-item list-group-item-action">
                                    Create new post
                                </a>
                                <a href="{{ route('category.create') }}" class="list-group-item list-group-item-action">Create new category</a>
                                <a href="{{ route('tag.create') }}" class="list-group-item list-group-item-action">Create new tag</a>
                                <a href="{{ route('categories') }}" class="list-group-item list-group-item-action">All Categories</a>
                                <a href="{{ route('tags') }}" class="list-group-item list-group-item-action">All Tags</a>
                                <a href="{{ route('posts') }}" class="list-group-item list-group-item-action">All Posts</a>
                                <a href="{{ route('trashed') }}" class="list-group-item list-group-item-action">All Trashed Posts</a>
                                @if (Auth::user()->admin)
                                    <a href="{{ route('settings') }}" class="list-group-item list-group-item-action">Settings</a>
                                @endif
                            </div>
    
                        </div>
                        <div class="col-lg-8">@yield('content')</div>
                    @else
                        <div class="col-12">@yield('content')</div>
                    @endif
                </div>
            </div>
        </main>
    </div>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}", {timeOut: 2500})
        @endif
        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}", {timeOut: 2500})
        @endif
    </script>

    @yield('scripts')

</body>
</html>
