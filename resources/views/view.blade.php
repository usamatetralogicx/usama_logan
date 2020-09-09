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
                    <li><a class="active" href="">Contacts</a> </li>
                    <li><a href="">Your Link</a> </li>
                    <li><a href="">Import</a> </li>
                    <li><a href="">Export</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="contact_main">
        <div class="container">
            <div class="row">
                <div class="contact_main_one">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact_title">
                            <h4>{{$view_contact->first_name}}  Contact </h4>
                            <div class="col-md-6 offset-md-3">
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                            </div>

                            {{--                            <div class="cotnact_form_part_2">--}}
                            {{--                                <form action="{{ route('contacts') }}" method="GET" class="p-2">--}}

                            {{--                                    @if($user)--}}
                            {{--                                        <input type="hidden" name="user" value="{{ $user }}">--}}
                            {{--                                    @endif--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <div class="col-md-10">--}}
                            {{--                                            <input type="text" value="{{ $query }}"  class="form-control" name="q">--}}
                            {{--                                        </div>--}}

                            {{--                                        <div class="col-md-2">--}}
                            {{--                                            <button type="submit" class="btn btn-primary form-control">Search</button>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                    --}}{{--                                                <div class="add_main col-md-2">--}}
                            {{--                                    --}}{{--                                                    <a href="" class="btn"> <img src="images/add.png"></a>--}}
                            {{--                                    --}}{{--                                                </div>--}}
                            {{--                                    --}}{{--                                                <div class="add_user col-md-2">--}}
                            {{--                                    --}}{{--                                                    <a href="" class="btn"><img src="images/user_add.png"></a>--}}
                            {{--                                    --}}{{--                                                </div>--}}
                            {{--                                </form>--}}


                            <div class="words_menu">
                                <ul>
                                    <li><a href="">a</a></li>
                                    <li><a href="">b</a></li>
                                    <li><a href="">c</a></li>
                                    <li><a href="">d</a></li>
                                    <li><a href="">e</a></li>
                                    <li><a href="">f</a></li>
                                    <li><a href="">g</a></li>
                                    <li><a href="">h</a></li>
                                    <li><a href="">i</a></li>
                                    <li><a href="">j</a></li>
                                    <li><a href="">k</a></li>
                                    <li><a href="">l</a></li>
                                    <li><a href="">m</a></li>
                                    <li><a href="">n</a></li>
                                    <li><a href="">o</a></li>
                                    <li><a href="">p</a></li>
                                    <li><a href="">q</a></li>
                                    <li><a href="">r</a></li>
                                    <li><a href="">s</a></li>
                                    <li><a href="">t</a></li>
                                    <li><a href="">u</a></li>
                                    <li><a href="">v</a></li>
                                    <li><a href="">w</a></li>
                                    <li><a href="">x</a></li>
                                    <li><a href="">y</a></li>
                                    <li><a href="">z</a></li>
                                </ul>
                            </div>
                            <div class="all_contacts_form">
                                <div class="all_contacts_form">

                                    <div class="faq_1">
                                        <h6 class="accordion ac-title acc-active" data-in="#tab1">{{$view_contact->first_name}} </h6>
                                        <div class="faq_title_shape accordian-para acc-show" id="tab1" style="display:block">
                                            <div class="faq_left_icon">
                                                <img src="{{asset('images/shap.png')}}">
                                            </div>
                                            <div class="faq_right_icon">
                                                <img src="{{asset('images/shape2.png')}}">
                                            </div>
                                            <form>
                                                <div class="faq_submit ">
                                                    <h4>Name & Address</h4>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Full Name" value="{{$view_contact->first_name}}" >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="First Name" name="first_name" value="{{$view_contact->first_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Last Name" name="last_name" value="{{$view_contact->last_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Street Address" name="street" value="{{$view_contact->address}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Apt" name="apt" value="{{$view_contact->apt}}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="City" name="city" value="{{$view_contact->city}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="State" name="state" value="{{$view_contact->state}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Zip" name="zip" value="{{$view_contact->zip}}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <h4>Email & Phone</h4>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Phone" name="phone" value="{{$view_contact->phone}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Email Address" name="email" value="{{$view_contact->email}}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="clearfix"></div>
                                                    <h4>Spouse/Partner</h4>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="First Name" name="partner_first_name" value="{{$view_contact->spouce_first_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        <div class="peral_input">
                                                            <input type="text" placeholder="Last Name" name="partner_last_name" value="{{$view_contact->spouce_last_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="events">
                        <h4>Events & updates</h4>
                        <div class="events_main">
                            <ul>
                                <li>
                                    <div class="events_img">
                                        <img src="{{asset('images/events1.png')}}">
                                    </div>
                                    <div class="events_txt">
                                        <h5>Get all of your wedding cards here!</h5>
                                        <h6><a href="">See the cards</a> </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="{{asset('images/events2.png')}}">
                                    </div>
                                    <div class="events_txt">
                                        <h5>Logan Rogers</h5>
                                        <p>Update info on July 15th</p>
                                        <h6><a href="">View contacts</a> </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="{{asset('images/events3.png')}}">
                                    </div>
                                    <div class="events_txt">
                                        <h5>You have contacts in 1 state</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="{{asset('images/events4.png')}}">
                                    </div>
                                    <div class="events_txt">
                                        <h5>Your Wedding Day: June 15</h5>
                                        <p>Update info on July 15th</p>
                                        <h3>35d   4hr   13mins   26sec</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="messages">
                        <h4>Messages</h4>
                        <div class="faq">
                            <div class="faq_heading_product" onclick="faq(1)" id="qf1">
                                <h3>Hey could you give me your contact... <span><i class="fas fa-chevron-down"></i></span></h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq_content2" id="tabf1" style="display: none;">
                                <p>Hey could you give me your contact info below real quick so i can send you a wedding invitaction ? it takes <span>30</span> seconds <span><img src="images/emoje.png" alt="" title=""> </span></p>
                                <h4><a href="">www.thepaperperl.com/loganrogers1</a> </h4>
                                <a class="btn">Copy to clip board</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<script>
    function reset_acc() {
        $('.ac-title').removeClass('acc-active');
        $('.accordian-para').slideUp();
        $('.plus-icon').removeClass('cross-icon');
    }
    $('.ac-title').click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('acc-active'))
        {
            reset_acc();
        }
        else {
            reset_acc();
            var getID = $(this).attr('data-in');
            $(getID).slideDown();
            $(this).addClass('acc-active');
            $(this).find('.plus-icon').addClass('cross-icon');
        }
    });

    function showds(para) {
        $('#tab'+para).slideToggle('1000');
        if($('#q'+para +' '+'i').hasClass('fa-chevron-up')){
            $('#q'+para +' '+'i').addClass("fa-chevron-down");
            $('#q'+para +' '+'i').removeClass("fa-chevron-up");
        } else {
            $('#q'+para +' '+'i').addClass("fa-chevron-up");
            $('#q'+para +' '+'i').removeClass("fa-chevron-down");
        }
    }

    function faq(para) {
        $('#tabf'+para).slideToggle('1000');
        if($('#qf'+para +' '+'i').hasClass('fa-chevron-up')){
            $('#qf'+para +' '+'i').addClass("fa-chevron-down");
            $('#qf'+para +' '+'i').removeClass("fa-chevron-up");
        } else {
            $('#qf'+para +' '+'i').addClass("fa-chevron-up");
            $('#qf'+para +' '+'i').removeClass("fa-chevron-down");
        }
    }
</script>
</html>
