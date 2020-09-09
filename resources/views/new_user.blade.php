@extends('layouts.new_app')
@section('content')
    <section class="contact_main">
        <div class="container">
            <div class="row">
                <div class="contact_main_one">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact_title">
                            <h4>All  Users </h4>
                            <div class="cotnact_form_part_2">
                                <div class="flex_1">
                                    <div class="main_search">
                                        <form  action="{{ route('users') }}" method="GET" class="p-2">
                                                <input type="text" class="form-control" name="q" value="@if(isset($request)){{ $request }}@endif">
                                            <button type="submit"><img src="images/search.png"> </button>
                                        </form>
                                    </div>
{{--                                    <div class="add_main">--}}
{{--                                        <a href="" class="btn"> <img src="images/add.png"></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="add_user">--}}
{{--                                        <a href="" class="btn"><img src="images/user_add.png"></a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>


{{--                            <div class="words_menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="">a</a></li>--}}
{{--                                    <li><a href="">b</a></li>--}}
{{--                                    <li><a href="">c</a></li>--}}
{{--                                    <li><a href="">d</a></li>--}}
{{--                                    <li><a href="">e</a></li>--}}
{{--                                    <li><a href="">f</a></li>--}}
{{--                                    <li><a href="">g</a></li>--}}
{{--                                    <li><a href="">h</a></li>--}}
{{--                                    <li><a href="">i</a></li>--}}
{{--                                    <li><a href="">j</a></li>--}}
{{--                                    <li><a href="">k</a></li>--}}
{{--                                    <li><a href="">l</a></li>--}}
{{--                                    <li><a href="">m</a></li>--}}
{{--                                    <li><a href="">n</a></li>--}}
{{--                                    <li><a href="">o</a></li>--}}
{{--                                    <li><a href="">p</a></li>--}}
{{--                                    <li><a href="">q</a></li>--}}
{{--                                    <li><a href="">r</a></li>--}}
{{--                                    <li><a href="">s</a></li>--}}
{{--                                    <li><a href="">t</a></li>--}}
{{--                                    <li><a href="">u</a></li>--}}
{{--                                    <li><a href="">v</a></li>--}}
{{--                                    <li><a href="">w</a></li>--}}
{{--                                    <li><a href="">x</a></li>--}}
{{--                                    <li><a href="">y</a></li>--}}
{{--                                    <li><a href="">z</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                            <div class="all_contacts_form">
                                <div class="all_contacts_form">
                                    @if(count($users) >= 1)
                                    @foreach($users as $user)
                                        <div class="faq_1">
                                            <h6 class="accordion ac-title acc-active" data-in="#tab1_{{$user->id}}">
                                                <div class="flex_2">
                                                    <div class="user_1">{{$user->name}}</div>
                                                    <div class="user_2">{{$user->email}}</div>
                                                    @if($user->unique_code)
                                                    <div class="user_3"><a href="{{ env('APP_URL') }}/{{ $user->unique_code }}" target="_blank">{{ $user->unique_code }}</a></div>
                                                    @else
                                                        <div class="user_3"><b>Not a Preview link</b></div>
                                                    @endif
                                                    <div class="user_4">{{ count($user->has_contacts) }}</div>
                                                </div>
                                                </h6>
                                            <div class="faq_title_shape accordian-para acc-show" id="tab1_{{$user->id}}" style="display:block">
{{--                                                <div class="faq_left_icon">--}}
{{--                                                    <img src="images/shap.png">--}}
{{--                                                </div>--}}
{{--                                                <div class="faq_right_icon">--}}
{{--                                                    <img src="images/shape2.png">--}}
{{--                                                </div>--}}
{{--                                                <form action="{{ route('contacts.post') }}" method="POST">--}}
{{--                                                    {{ csrf_field() }}--}}
{{--                                                    <div class="faq_submit ">--}}

{{--                                                        <input type="hidden" name="user" value="{{ $contact->user_id }}">--}}
{{--                                                        <input type="hidden" value="{{ $contact->id }}" name="contact_id">--}}
{{--                                                        <h4>Name & Address</h4>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <select name="prefix" class="form-control" data-value="{{ $contact->prefix }}">--}}
{{--                                                                    <option value="" >Title</option>--}}
{{--                                                                    <option value="Mr.">Mr.</option>--}}
{{--                                                                    <option value="Ms.">Ms.</option>--}}
{{--                                                                    <option value="Mrs.">Mrs.</option>--}}
{{--                                                                    <option value="Mx.">Mx.</option>--}}
{{--                                                                    <option value="Dr.">Dr.</option>--}}
{{--                                                                    <option value="Hon.">Hon.</option>--}}
{{--                                                                    <option value="Rev.">Rev.</option>--}}
{{--                                                                    <option value="Rabbi">Rabbi</option>--}}
{{--                                                                    <option value="">None</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="First Name" value="{{$contact->first_name}}" name="first_name">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Last Name" value="{{$contact->last_name}}" name="last_name">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Street Address" value="{{$contact->address}}" name="street">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Apt" value="{{$contact->apt}}" name="apt">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="City" value="{{$contact->city}}" name="city">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="State" value="{{$contact->state}}" name="state">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Zip" value="{{$contact->zip}}" name="zip">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        <h4>Email & Phone</h4>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Phone" value="{{$contact->phone}}"name="phone">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Email Address" value="{{$contact->email}}" name="email">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        --}}{{--                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                        --}}{{--                                                            <div class="peral_input">--}}
{{--                                                        --}}{{--                                                                <select>--}}
{{--                                                        --}}{{--                                                                    <option value="1">Select Birthday</option>--}}
{{--                                                        --}}{{--                                                                </select>--}}
{{--                                                        --}}{{--                                                            </div>--}}
{{--                                                        --}}{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        --}}{{--                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                        --}}{{--                                                            <div class="peral_input">--}}
{{--                                                        --}}{{--                                                                <input type="text" placeholder="Gift">--}}
{{--                                                        --}}{{--                                                            </div>--}}
{{--                                                        --}}{{--                                                        </div>--}}
{{--                                                        <h4>Spouse/Partner</h4>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <select name="spouce_prefix" class="form-control" data-value="{{ $contact->spouce_prefix }}">--}}
{{--                                                                    <option value="" disabled>Title</option>--}}
{{--                                                                    <option value="Mr.">Mr.</option>--}}
{{--                                                                    <option value="Ms.">Ms.</option>--}}
{{--                                                                    <option value="Mrs.">Mrs.</option>--}}
{{--                                                                    <option value="Mx.">Mx.</option>--}}
{{--                                                                    <option value="Dr.">Dr.</option>--}}
{{--                                                                    <option value="Hon.">Hon.</option>--}}
{{--                                                                    <option value="Rev.">Rev.</option>--}}
{{--                                                                    <option value="Rabbi">Rabbi</option>--}}
{{--                                                                    <option value="">None</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="First Name" value="{{$contact->spouse_first_name}}" name="partner_first_name">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Last Name" value="{{$contact->spouse_last_name}}" name="partner_last_name">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="clearfix"></div>--}}
{{--                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}
{{--                                                            <div class="peral_input buttons">--}}
{{--                                                                <button  type="submit" class="btn custom_btn btn-sm" >Update</button>--}}
{{--                                                                <a class="btn custom_btn btn-sm" href="{{ route('contact.delete', $contact->id) }}">Delete</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}
{{--                                                </form>--}}

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    @endforeach
                                    @else
                                        <div class="text-center find" >
                                            <b>No Record find</b>
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    {{ $users->links() }}
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
                                        <img src="images/events1.png">
                                    </div>
                                    <div class="events_txt">
                                        <h5>Get all of your wedding cards here!</h5>
                                        <h6><a href="">See the cards</a> </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="images/events2.png">
                                    </div>
                                    <div class="events_txt">
                                        <h5>Logan Rogers</h5>
                                        <p>Update info on July 15th</p>
                                        <h6><a href="">View contacts</a> </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="images/events3.png">
                                    </div>
                                    <div class="events_txt">
                                        <h5>You have contacts in 1 state</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="events_img">
                                        <img src="images/events4.png">
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
@endsection
{{--@section('scripts')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('.ac-title').removeClass('acc-active');--}}
{{--            $('.accordian-para').slideUp();--}}
{{--        });--}}
{{--        function reset_acc() {--}}
{{--            $('.ac-title').removeClass('acc-active');--}}
{{--            $('.accordian-para').slideUp();--}}
{{--            $('.plus-icon').removeClass('cross-icon');--}}
{{--        }--}}
{{--        $('.ac-title').click(function (e) {--}}
{{--            e.preventDefault();--}}
{{--            if ($(this).hasClass('acc-active'))--}}
{{--            {--}}
{{--                reset_acc();--}}
{{--            }--}}
{{--            else {--}}
{{--                reset_acc();--}}
{{--                var getID = $(this).attr('data-in');--}}
{{--                $(getID).slideDown();--}}
{{--                $(this).addClass('acc-active');--}}
{{--                $(this).find('.plus-icon').addClass('cross-icon');--}}
{{--            }--}}
{{--        });--}}

{{--        function showds(para) {--}}
{{--            $('#tab'+para).slideToggle('1000');--}}
{{--            if($('#q'+para +' '+'i').hasClass('fa-chevron-up')){--}}
{{--                $('#q'+para +' '+'i').addClass("fa-chevron-down");--}}
{{--                $('#q'+para +' '+'i').removeClass("fa-chevron-up");--}}
{{--            } else {--}}
{{--                $('#q'+para +' '+'i').addClass("fa-chevron-up");--}}
{{--                $('#q'+para +' '+'i').removeClass("fa-chevron-down");--}}
{{--            }--}}
{{--        }--}}

{{--        function faq(para) {--}}
{{--            $('#tabf'+para).slideToggle('1000');--}}
{{--            if($('#qf'+para +' '+'i').hasClass('fa-chevron-up')){--}}
{{--                $('#qf'+para +' '+'i').addClass("fa-chevron-down");--}}
{{--                $('#qf'+para +' '+'i').removeClass("fa-chevron-up");--}}
{{--            } else {--}}
{{--                $('#qf'+para +' '+'i').addClass("fa-chevron-up");--}}
{{--                $('#qf'+para +' '+'i').removeClass("fa-chevron-down");--}}
{{--            }--}}
{{--        }--}}
{{--    </script>--}}
{{--@endsection--}}
