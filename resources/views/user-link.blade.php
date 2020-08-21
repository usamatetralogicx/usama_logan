<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body {
            background: #faedd9;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
            padding:40px;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }


        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

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
        .btn-primary {
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

<div class="container">

    <div class="logo text-center">
        <img src="https://www.postable.com/assets/images/icon_link.svg">
    </div>

    <div class="message-text text-center">
        <h1>
            Logan would love your contact info.
        </h1>

        <p>
            So please enter everything with loving care.
        </p>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8">

    <div class="card p-4">
        <form action="{{ route('contacts.post') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="user" value="{{ $user->id }}">
            <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label><b>Name & Address</b></label>
                            <div class="row">
                                <div class="col-md-2">
                                    <select name="prefix" class="form-control">
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
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name">
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                                </div>
                            </div>
                        </div>

                                <div class="form-group">
                                    <div class="row">
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Street Address" name="street">
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Apt." name="apt">
                                </div>
                                    </div>
                            </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="City" name="city">
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="State" name="state">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" placeholder="Zip" name="zip">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">

                                        <select name="country" autocomplete="country" class="form-control">
                                            <option value="United States" selected="selected">United States</option> <option value="Canada">Canada</option> <option value="" disabled="disabled">--</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bonaire">Bonaire</option> <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option> <option value="Botswana">Botswana</option> <option value="Brazil">Brazil</option> <option value="Brunei">Brunei</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Costa Rica">Costa Rica</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Curaçao">Curaçao</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Côte d'Ivoire">Côte d'Ivoire</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="East Timor">East Timor</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="England">England</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Polynesia">French Polynesia</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Great Britain">Great Britain</option> <option value="Greece">Greece</option> <option value="Grenada">Grenada</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-Bissau">Guinea-Bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran">Iran</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Korea">Korea</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Laos">Laos</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libya">Libya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macau">Macau</option> <option value="Macedonia">Macedonia</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mexico">Mexico</option> <option value="Micronesia">Micronesia</option> <option value="Moldova">Moldova</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montenegro">Montenegro</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="North Korea">North Korea</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Romania">Romania</option> <option value="Russia">Russia</option> <option value="Rwanda">Rwanda</option> <option value="Saint John, U.S. Virgin Islands ">Saint John, U.S. Virgin Islands </option> <option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option> <option value="Saint Lucia">Saint Lucia</option> <option value="Saint Martin">Saint Martin</option> <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Serbia">Serbia</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Sint Maarten">Sint Maarten</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Kosovo">South Kosovo</option> <option value="South Sudan">South Sudan</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syria">Syria</option> <option value="São Tomé &amp; Príncipe">São Tomé &amp; Príncipe</option> <option value="Taiwan">Taiwan</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania">Tanzania</option> <option value="Thailand">Thailand</option> <option value="Togo">Togo</option> <option value="Tonga">Tonga</option> <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks &amp; Caicos">Turks &amp; Caicos</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States">United States</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Vatican City">Vatican City</option> <option value="Venezuela">Venezuela</option> <option value="Vietnam">Vietnam</option> <option value="Virgin Islands, British">Virgin Islands, British</option> <option value="Yemen">Yemen</option> <option value="Zaire">Zaire</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option></select>

                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label><b>Email, Phone & Birthday</b></label>
                            <div class="row">

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>


                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email" class="form-control">
                                </div>


                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="date"  name="birthday" placeholder="Date of Birth" class="form-control">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label><b>Spouse/Partner</b></label>
                            <div class="row">

                                <div class="col-md-2">
                                    <select name="spouce_prefix" class="form-control">
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
                                    <input type="text" class="form-control" placeholder="First Name" name="partner_first_name">
                                </div>

                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="Last Name" name="partner_last_name">
                                </div>

                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                        </div>


                        <p class="text-center terms-privacy">
                            This form is protected by reCAPTCHA and your info will not be shared with anyone.
                        </p>

                    </div>
            </div>
        </form>
    </div>
        </div>
    </div>
</div>
</body>
</html>
