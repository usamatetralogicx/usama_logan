<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .navbar-nav .nav-link, .navbar-nav .nav-link:hover,.navbar-brand, .navbar-brand:hover {
            color: white;
        }
        .card-header {
            background-color: #00265d;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            padding-top: 0.4375rem;
            padding-bottom: 0.4375rem;
            position: relative;
            text-align: left;
            color:white;
            font-size:16px;
        }
        .btn {
            border:0px solid white;
            border-radius: 0;
        }
        .form-control {
            border-radius: 0;
        }
        .btn-primary, .badge-primary {
            background-color: #00265d;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #00265d;
            color: #fff;
            opacity: 0.8;
        }
        </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color: #00265d;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    @guest
                        @else

                    <ul class="navbar-nav mr-auto text-center">
                        @role('admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users') }}">
                                Users
                            </a>
                        </li>
                        @endrole
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contacts') }}">
                                Contacts
                            </a>
                        </li>
                        @role('user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('exports') }}">
                                Export
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('link') }}">
                                Your Link
                            </a>
                        </li>
                        @endrole
                    </ul>
                    @endguest

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
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
            </div>

            @yield('content')
        </main>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('clipboard.js') }}"></script>

    <script>
        $( document ).ready(function() {
            var clipboard = new ClipboardJS('#copyBtn');
            clipboard.on('success', function (e) {
                $(e.trigger).text('copied Link');
            });
        });

    </script>

</body>
</html>
