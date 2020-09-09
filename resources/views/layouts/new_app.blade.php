<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Page</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <section class="menu_bar">
        <div class="container">
            <div class="bar_menu">
                <ul>
                    <li><a class="{{Request::segment(1)==='contacts' ?'active':null}}" href="{{ route('contacts') }}">Contacts</a> </li>
                    @role('admin')
                    <li><a class="{{Request::segment(1)==='users' ?'active':null}}" href="{{ route('users') }}">Users</a></li>
                    @endrole
                    @role('user')
                    <li><a class="{{Request::segment(1)==='link' ?'active':null}}" href="{{ route('link') }}">Your Link</a> </li>
                    <li><a class="{{Request::segment(1)==='imports' ?'active':null}}" href="{{route('imports')}}">Import</a> </li>
                    <li><a  class="{{Request::segment(1)==='exports' ?'active':null}}" href="{{route('exports')}}">Export</a> </li>
                    @endrole
                    <li><a class="{{Request::segment(1)==='logout' ?'active':null}}" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </section>
    @yield('content')
</div>
@yield('scripts')
</body>
</html>
