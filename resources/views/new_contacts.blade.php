@extends('layouts.new_app')
@section('content')
    <section class="contact_main">
        <div class="container">
            <div class="row">
                <div class="contact_main_one">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact_title">
                            <h4>All  Contacts </h4>
                            @if(session()->has('success'))
                                <div class="alert alert-success mb-3 text-center font-weight-bold">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <div class="cotnact_form_part_2">
                                <div class="flex_1">
                                <div class="main_search">
                                    <form action="{{ route('contacts') }}" method="GET" class="p-2">
                                        @if($user)
                                            <input type="hidden" name="user" value="{{ $user }}">
                                        @endif
                                            <input type="text" value="{{ $query }}" placeholder="Search Contacts" name="q">
                                    <button type="submit"><img src="images/search.png"> </button>
                                    </form>
                                </div>
                                <div class="add_main">
                                    <a href="" class="btn"> <img src="images/add.png"></a>
                                </div>
                                <div class="add_user">
                                    <a href="" class="btn"><img src="images/user_add.png"></a>
                                </div>
                            </div>
                            </div>
                                <div class="words_menu">
                                    <ul>
                                        <li><a class="alphatic" href="">a</a></li>
                                        <li><a class="alphatic" href="">b</a></li>
                                        <li><a class="alphatic" href="">c</a></li>
                                        <li><a class="alphatic" href="">d</a></li>
                                        <li><a  class="alphatic"href="">e</a></li>
                                        <li><a class="alphatic" href="">f</a></li>
                                        <li><a class="alphatic" href="">g</a></li>
                                        <li><a class="alphatic" href="">h</a></li>
                                        <li><a class="alphatic" href="">i</a></li>
                                        <li><a class="alphatic" href="">j</a></li>
                                        <li><a class="alphatic" href="">k</a></li>
                                        <li><a class="alphatic" href="">l</a></li>
                                        <li><a class="alphatic" href="">m</a></li>
                                        <li><a class="alphatic" href="">n</a></li>
                                        <li><a class="alphatic" href="">o</a></li>
                                        <li><a class="alphatic" href="">p</a></li>
                                        <li><a class="alphatic" href="">q</a></li>
                                        <li><a class="alphatic" href="">r</a></li>
                                        <li><a class="alphatic" href="">s</a></li>
                                        <li><a class="alphatic" href="">t</a></li>
                                        <li><a class="alphatic" href="">u</a></li>
                                        <li><a class="alphatic" href="">v</a></li>
                                        <li><a class="alphatic" href="">w</a></li>
                                        <li><a class="alphatic" href="">x</a></li>
                                        <li><a class="alphatic" href="">y</a></li>
                                        <li><a class="alphatic" href="">z</a></li>
                                    </ul>
                                </div>
                                <div class="all_contacts_form">
                                    <div class="all_contacts_form">
                                        @if(count($contacts) >= 1)
                                        @foreach($contacts as $contact)
                                        <div class="faq_1">
                                            <h6 class="accordion ac-title acc-active" data-in="#tab1_{{$contact->id}}">{{$contact->first_name}}</h6>
                                                @role('admin')
                                                <div class="pull-right">
                                                <button  type="submit" class="btn custom_btn btn-sm" >Update</button>
                                                    <a class="btn custom_btn btn-sm" href="{{ route('contact.delete', $contact->id) }}">Delete</a>
                                                </div>
                                                @endrole
                                            <div class="faq_title_shape accordian-para acc-show" id="tab1_{{$contact->id}}" style="display:block">
                                                <div class="faq_left_icon">
                                                    <img src="images/shap.png">
                                                </div>
                                                <div class="faq_right_icon">
                                                    <img src="images/shape2.png">
                                                </div>
                                                <form action="{{ route('contacts.post') }}" method="POST">
                                                    {{ csrf_field() }}
                                                    <div class="faq_submit ">

                                                            <input type="hidden" name="user" value="{{ $contact->user_id }}">
                                                            <input type="hidden" value="{{ $contact->id }}" name="contact_id">
                                                        <h4>Name & Address</h4>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                            <select name="prefix" class="form-control" data-value="{{ $contact->prefix }}">
                                                                <option value="" >Title</option>
                                                                <option value="Mr.">Mr.</option>
                                                                <option value="Ms.">Ms.</option>
                                                                <option value="Mrs.">Mrs.</option>
                                                                <option value="Mx.">Mx.</option>
                                                                <option value="Dr.">Dr.</option>
                                                                <option value="Hon.">Hon.</option>
                                                                <option value="Rev.">Rev.</option>
                                                                <option value="Rabbi">Rabbi</option>
                                                                <option value="">None</option>
                                                            </select>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="First Name" value="{{$contact->first_name}}" name="first_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Last Name" value="{{$contact->last_name}}" name="last_name">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Street Address" value="{{$contact->address}}" name="street">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Apt" value="{{$contact->apt}}" name="apt">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="City" value="{{$contact->city}}" name="city">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="State" value="{{$contact->state}}" name="state">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Zip" value="{{$contact->zip}}" name="zip">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <h4>Email & Phone</h4>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Phone" value="{{$contact->phone}}"name="phone">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Email Address" value="{{$contact->email}}" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
{{--                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <select>--}}
{{--                                                                    <option value="1">Select Birthday</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <div class="clearfix"></div>
{{--                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
{{--                                                            <div class="peral_input">--}}
{{--                                                                <input type="text" placeholder="Gift">--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
                                                        <h4>Spouse/Partner</h4>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <select name="spouce_prefix" class="form-control" data-value="{{ $contact->spouce_prefix }}">
                                                                    <option value="" disabled>Title</option>
                                                                    <option value="Mr.">Mr.</option>
                                                                    <option value="Ms.">Ms.</option>
                                                                    <option value="Mrs.">Mrs.</option>
                                                                    <option value="Mx.">Mx.</option>
                                                                    <option value="Dr.">Dr.</option>
                                                                    <option value="Hon.">Hon.</option>
                                                                    <option value="Rev.">Rev.</option>
                                                                    <option value="Rabbi">Rabbi</option>
                                                                    <option value="">None</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="First Name" value="{{$contact->spouse_first_name}}" name="partner_first_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input">
                                                                <input type="text" placeholder="Last Name" value="{{$contact->spouse_last_name}}" name="partner_last_name">
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="peral_input buttons">
                                                                @role('user')
                                                            <button  type="submit" class="btn custom_btn btn-sm" >Update</button>
                                                                <a class="btn custom_btn btn-sm" href="{{ route('contact.delete', $contact->id) }}">Delete</a>
                                                                @endrole

                                                            </div>
                                                        </div>

                                                    </div>
                                                </form>

                                                    <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        @endforeach
                                        @else
                                            <div class="text-center find" >
                                                <b>No Contact find</b>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        {{ $contacts->links() }}
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
@section('scripts')
<script>
    $(document).ready(function () {
        $('.ac-title').removeClass('acc-active');
        $('.accordian-para').slideUp();
        $('alphatic').click(function (e) {
            e.preventDefault();
           value =$(this).text();
           console.log(value);
           $.ajax({
               url:"{{route('alphabatic_search')}}",
               data: {
                   value:value,
               },
               method:'get',
               success:function (result) {
                   console.log(result.success);
                   $('.faq_1').append(result.success);
               }
           })
        })
    });
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
@endsection
