<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up Page</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <section class="sing_up">
        <div class="container">
            <div class="sing_up_main">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="account">
                        <h4><a href="{{route('register')}}">Not an account?</a></h4>
                    </div>
                    <div class="login">
                        <h4><a href="{{route('register')}}">
                                Register now</a></h4>
                    </div>
                    <div class="sing_info">
                        <h1>LOG IN NOW</h1>
                        <div class="input_name">
                            <input type="email" placeholder="Email Address"  class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span><img src="images/email.png"> </span>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="input_name">
                            <input type="Password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <span><img src="images/lock.png"> </span>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="checkbox">
                            <label class="container_one">Remember me
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="submit">LOG IN</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</body>
</html>
