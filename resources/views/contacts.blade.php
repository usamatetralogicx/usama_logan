@extends('layouts.app')

@section('content')
    <div class="container">
        @php
            $user_details = \App\User::where('id', $user)->first();
        @endphp

        @if(isset($user_details))
            <div class="mb-3">
        <h4 class="m-0">{{ $user_details->name }} <small>({{ $user_details->email }})</small></h4>

    </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card  text-center">

                    <div class="card-header">
                        Contacts
                    </div>
                    <form action="{{ route('contacts') }}" method="GET" class="p-2">

                        @if($user)
                            <input type="hidden" name="user" value="{{ $user }}">
                        @endif

                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" value="{{ $query }}" class="form-control" name="q">
                        </div>

                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary form-control">Search</button>
                        </div>

                    </div>
                    </form>
                    <table class="table text-left">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Country</th>
                            <th scope="col">State</th>
                            @role('admin')
                                <th scope="col">User</th>
                            @endrole
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->country }}</td>
                            <td>{{ $contact->state}}</td>
                            @role('admin')
                                <td>
                                    @if(isset($contact->has_user))
                                        <a href="{{ route('contacts')  }}?user={{ $contact->has_user->id }}">
                                            <span class="badge badge-primary">{{ $contact->has_user->name }}</span>
                                        </a>
                                    @endif
                                </td>
                            @endrole
                            <td class="text-right">
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view_modal_{{ $contact->id }}">View</button>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit_modal_{{ $contact->id }}">Edit</button>
                                <a class="btn btn-primary btn-sm" href="{{ route('contact.delete', $contact->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                        <div class="text-center">
                            {{ $contacts->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>



    @foreach($contacts as $contact)
    <div class="modal fade" id="edit_modal_{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ $contact->first_name }} {{ $contact->last_name }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('contacts.post') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="user" value="{{ $contact->user_id }}">
                        <input type="hidden" value="{{ $contact->id }}" name="contact_id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label><b>Name & Address</b></label>
                                    <div class="row">
                                        <div class="col-md-2">
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
                                        <div class="col-md-5">
                                            <input type="text" value="{{ $contact->first_name }}" class="form-control" placeholder="First Name" name="first_name">
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" value="{{ $contact->last_name }}" class="form-control" placeholder="Last Name" name="last_name">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input type="text" value="{{ $contact->address }}" class="form-control" placeholder="Street Address" name="street">
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" value="{{ $contact->apt }}" class="form-control" placeholder="Apt." name="apt">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" value="{{ $contact->city }}" class="form-control" placeholder="City" name="city">
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" value="{{ $contact->state }}" class="form-control" placeholder="State" name="state">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" value="{{ $contact->zip }}" class="form-control" placeholder="Zip" name="zip">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <select name="country" autocomplete="country" class="form-control" data-value="{{ $contact->country }}">
                                                <option value="United States" selected="selected">United States</option> <option value="Canada">Canada</option> <option value="" disabled="disabled">--</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bonaire">Bonaire</option> <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option> <option value="Botswana">Botswana</option> <option value="Brazil">Brazil</option> <option value="Brunei">Brunei</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Costa Rica">Costa Rica</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Curaçao">Curaçao</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Côte d'Ivoire">Côte d'Ivoire</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="East Timor">East Timor</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="England">England</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Polynesia">French Polynesia</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Great Britain">Great Britain</option> <option value="Greece">Greece</option> <option value="Grenada">Grenada</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-Bissau">Guinea-Bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran">Iran</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Korea">Korea</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Laos">Laos</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libya">Libya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macau">Macau</option> <option value="Macedonia">Macedonia</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mexico">Mexico</option> <option value="Micronesia">Micronesia</option> <option value="Moldova">Moldova</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montenegro">Montenegro</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="North Korea">North Korea</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Romania">Romania</option> <option value="Russia">Russia</option> <option value="Rwanda">Rwanda</option> <option value="Saint John, U.S. Virgin Islands ">Saint John, U.S. Virgin Islands </option> <option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option> <option value="Saint Lucia">Saint Lucia</option> <option value="Saint Martin">Saint Martin</option> <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Serbia">Serbia</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Sint Maarten">Sint Maarten</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Kosovo">South Kosovo</option> <option value="South Sudan">South Sudan</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syria">Syria</option> <option value="São Tomé &amp; Príncipe">São Tomé &amp; Príncipe</option> <option value="Taiwan">Taiwan</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania">Tanzania</option> <option value="Thailand">Thailand</option> <option value="Togo">Togo</option> <option value="Tonga">Tonga</option> <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks &amp; Caicos">Turks &amp; Caicos</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States">United States</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Vatican City">Vatican City</option> <option value="Venezuela">Venezuela</option> <option value="Vietnam">Vietnam</option> <option value="Virgin Islands, British">Virgin Islands, British</option> <option value="Yemen">Yemen</option> <option value="Zaire">Zaire</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option></select>

                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label><b>Email, Phone & Birthday</b></label>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <input type="text" value="{{ $contact->phone }}" class="form-control" name="phone" placeholder="Phone Number">
                                        </div>


                                        <div class="col-md-6">
                                            <input type="email" value="{{ $contact->email }}" name="email" placeholder="Email" class="form-control">
                                        </div>


                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="date"  name="birthday" value="{{ $contact->date }}" placeholder="Date of Birth" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label><b>Spouse/Partner</b></label>
                                    <div class="row">

                                        <div class="col-md-2">
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


                                        <div class="col-md-5">
                                            <input type="text" value="{{ $contact->spouce_first_name }}" class="form-control" placeholder="First Name" name="partner_first_name">
                                        </div>

                                        <div class="col-md-5">
                                            <input type="text" value="{{ $contact->spouce_last_name }}" class="form-control" placeholder="Last Name" name="partner_last_name">
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary form-control">Update</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="view_modal_{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        {{ $contact->first_name }} {{ $contact->last_name }}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <table class="table table-striped table-responsive">
                            <tbody>
                                <tr>
                                    <td><b>Name</b></td>
                                    <td>{{ $contact->prefix }} {{ $contact->first_name }} {{ $contact->last_name }}</td>
                                </tr>
                                <tr>
                                    <td><b>Address</b></td>
                                    <td>{{ $contact->address }}<br>
                                        {{ $contact->apt }}, {{ $contact->city }}, {{ $contact->state }}
                                    <br>
                                        {{ $contact->country }}, {{ $contact->zip }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <td><b>Phone</b></td>
                                    <td>{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td><b>Date Of Birthday</b></td>
                                    <td>{{ $contact->date }}</td>
                                </tr>
                                <tr>
                                    <td><b>Spouse/Partner</b></td>
                                    <td>{{ $contact->spouce_prefix }} {{ $contact->spouce_first_name }} {{ $contact->spouce_last_name }}</td>
                                </tr>


                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
