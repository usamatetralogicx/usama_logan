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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="account">
                        <h4><a href="{{route('login')}}">Already have an account?</a></h4>
                    </div>
                    <div class="login">
                        <h4><a href="{{route('login')}}">Log In</a></h4>
                    </div>
                    <div class="sing_info">
                        <h1>SIGN UP NOW</h1>
                        <div class="input_name">
                            <input type="text" placeholder="User Name" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <span><img src="images/user.png"> </span>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="input_name">
                            <input type="email" placeholder="Email Address" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <span><img src="images/email.png"> </span>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="input_name">
                            <input type="Password" placeholder="Password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span><img src="images/lock.png"> </span>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="checkbox">
                            <label class="container_one">I have read and agree to terms & conditions.
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <button type="submit">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="process">
        <div class="container">
            <div class="process_main">
                <h2>What's the Process</h2>
                <div class="row">
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="process_sing">
                            <div class="process_loop">
                                <img src="images/sing.png">
                                <span>1</span>
                            </div>
                            <h4>Sign Up</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="process_sing">
                            <div class="process_loop">
                                <img src="images/sing1.png">
                                <span>2</span>
                            </div>
                            <h4>send link</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="process_sing">
                            <div class="process_loop">
                                <img src="images/sing2.png">
                                <span>3</span>
                            </div>
                            <h4>collect info</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="process_sing">
                            <div class="process_loop">
                                <img src="images/sing4.png">
                                <span>4</span>
                            </div>
                            <h4>it's done</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="process">
        <div class="container">
            <div class="process_main lis_part">
                <h2>Why this helps:</h2>
                <div class="row">
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="your_guest_list">
                            <div class="list">
                                <img src="images/list1.png">
                            </div>
                            <h4>Your Guest List</h4>
                            <p>Use our specialized tool and messages to gather all the addresses in a flash.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="your_guest_list">
                            <div class="list">
                                <img src="images/list2.png">
                            </div>
                            <h4>Save the Date Cards</h4>
                            <p>Announce the big day with stunning Save the Date Cards. Optional: Request a custom design at no additional cost.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="your_guest_list">
                            <div class="list">
                                <img src="images/list3.png">
                            </div>
                            <h4>Wedding Invitations</h4>
                            <p>Wow your family & friends with elegant Wedding Invitations. Optional:
                                Request a custom design at no
                                additional cost.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-lg-3 col-sm-3 col-xs-12">
                        <div class="your_guest_list">
                            <div class="list">
                                <img src="images/list4.png">
                            </div>
                            <h4>Thank You Cards-GratiCards</h4>
                            <p>Save time, eliminate hand cramps,
                                personalize messages,  and get them sent out quickly using our unique thank you card tool.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
