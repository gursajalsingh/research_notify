<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootsrap css -->
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" href="./src/fontawesome/css/all.min.css">

    <!-- Base css with customised bootstrap included -->
    <link rel="stylesheet" href="./src/css/miri-ui-kit-free.css">

    <!-- Vendor css -->
    <link rel="stylesheet" href="./src/mdi/font/css/materialdesignicons.min.css">
</head>
<body>
    <style>
        .advance-search-header {
            height: 200px;
            background-color: rgba(248, 249, 250, 1);
            margin-top:92px;
        }
    </style>
     <header>
    <?php include 'navbar.php'; ?>
  </header>
    <section class="advance-search-header">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col">
                    <h1 class="display-4 text-center text-success">Event Detail</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-8" style="margin-left: 15%;">
        <div class="clearfix" style="user-select: auto;">
          <h5>Add New Events</h5>
        <hr>
        </div>

        <h6 style="color:brown;">Event organizer Details*</h6>
        <form>
          
          <div class="mb-3">
            <label for="inputName" class="form-label">Organizer's Name*</label>
            <input type="text" class="form-control" id="inputName" required>
          </div>
          <div class="mb-3">
            <label for="inputName1" class="form-label">Name of Organization*</label>
            <input type="text" class="form-control" id="inputName1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Organizer's Email address*</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">

            <label for="exampleInputPassword1" class="form-label">Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label">Confirm Password*</label>
            <input type="password" class="form-control" id="exampleInputPassword2" required>
          </div>
          
           <!-- <button type="submit" class="btn btn-soft-danger">Submit</button>  -->
          
        </form>
        
        <h6 style="margin-top:5%; color:brown;">Event Details*</h6>
<form>
          
          <div class="mb-3">
            <label for="inputEventName" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="inputEventName" required>
          </div>

          
          <div class="mb-3">
            <label for="inputEventType" class="form-label">Event Type*</label>
          <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Conference</option>
            <option value="1">Conference</option>
            <option value="2">Seminar</option>
            <option value="3">Workshop</option>
            <option value="4">Webinar</option>
            <option value="5">Online Conference</option>
            
          </select>
        </div>
        <div class="mb-3">
          <label for="inputEventCategory" class="form-label">Event Category*</label>
        <select class="form-control form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Engineering</option>
          <option value="1">Engineering</option>
          <option value="2">Medicine</option>
          <option value="3">Business</option>
          <option value="4">Mathematics</option>
          <option value="5">Life Science</option>
          <option value="6">Law</option>
          <option value="7">Social Science</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="inputCountry" class="form-label">Country*</label>
      
      <select name="country" class="form-control form-select-lg mb-3" id="country">
        <option value="0">Choose Country</option>
        <option value="244#"></option>
        <option value="1#Afghanistan">Afghanistan</option>
        <option value="2#Albania">Albania</option>
        <option value="3#Algeria">Algeria</option>
        <option value="4#American Samoa">American Samoa</option>
        <option value="5#Andorra">Andorra</option>
        <option value="6#Angola">Angola</option>
        <option value="7#Anguilla">Anguilla</option>
        <option value="8#Antarctica">Antarctica</option>
        <option value="9#Antigua and Barbuda">Antigua and Barbuda</option>
        <option value="10#Argentina">Argentina</option>
        <option value="238#Aringland Islands">Aringland Islands</option>
        <option value="11#Armenia">Armenia</option>
        <option value="12#Aruba">Aruba</option>
        <option value="13#Australia">Australia</option>
        <option value="14#Austria">Austria</option>
        <option value="15#Azerbaijan">Azerbaijan</option>
        <option value="16#Bahamas">Bahamas</option>
        <option value="17#Bahrain">Bahrain</option>
        <option value="18#Bangladesh">Bangladesh</option>
        <option value="19#Barbados">Barbados</option>
        <option value="20#Belarus">Belarus</option>
        <option value="21#Belgium">Belgium</option>
        <option value="22#Belize">Belize</option>
        <option value="23#Benin">Benin</option>
        <option value="24#Bermuda">Bermuda</option>
        <option value="25#Bhutan">Bhutan</option>
        <option value="26#Bolivia">Bolivia</option>
        <option value="27#Bosnia and Herzegovina">Bosnia and Herzegovina</option>
        <option value="28#Botswana">Botswana</option>
        <option value="29#Bouvet Island">Bouvet Island</option>
        <option value="30#Brazil">Brazil</option>
        <option value="31#British Indian Ocean territory">British Indian Ocean territory</option>
        <option value="32#Brunei Darussalam">Brunei Darussalam</option>
        <option value="33#Bulgaria">Bulgaria</option>
        <option value="34#Burkina Faso">Burkina Faso</option>
        <option value="35#Burundi">Burundi</option>
        <option value="36#Cambodia">Cambodia</option>
        <option value="37#Cameroon">Cameroon</option>
        <option value="38#Canada">Canada</option>
        <option value="39#Cape Verde">Cape Verde</option>
        <option value="40#Cayman Islands">Cayman Islands</option>
        <option value="41#Central African Republic">Central African Republic</option>
        <option value="42#Chad">Chad</option>
        <option value="43#Chile">Chile</option>
        <option value="44#China">China</option>
        <option value="45#Christmas Island">Christmas Island</option>
        <option value="46#Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
        <option value="47#Colombia">Colombia</option>
        <option value="48#Comoros">Comoros</option>
        <option value="49#Cook Islands">Cook Islands</option>
        <option value="50#Costa Rica">Costa Rica</option>
        <option value="51#Croatia (Hrvatska)">Croatia (Hrvatska)</option>
        <option value="239#Cte dIvoire (Ivory Coast)">Cte dIvoire (Ivory Coast)</option>
        <option value="52#Cuba">Cuba</option>
        <option value="53#Cyprus">Cyprus</option>
        <option value="54#Czech Republic">Czech Republic</option>
        <option value="55#Democratic Republic of Congo">Democratic Republic of Congo</option>
        <option value="56#Denmark">Denmark</option>
        <option value="57#Djibouti">Djibouti</option>
        <option value="58#Dominica">Dominica</option>
        <option value="59#Dominican Republic">Dominican Republic</option>
        <option value="60#East Timor">East Timor</option>
        <option value="61#Ecuador">Ecuador</option>
        <option value="62#Egypt">Egypt</option>
        <option value="63#El Salvador">El Salvador</option>
        <option value="64#Equatorial Guinea">Equatorial Guinea</option>
        <option value="65#Eritrea">Eritrea</option>
        <option value="66#Estonia">Estonia</option>
        <option value="67#Ethiopia">Ethiopia</option>
        <option value="68#Falkland Islands">Falkland Islands</option>
        <option value="69#Faroe Islands">Faroe Islands</option>
        <option value="70#Fiji">Fiji</option>
        <option value="71#Finland">Finland</option>
        <option value="72#France">France</option>
        <option value="73#French Guiana">French Guiana</option>
        <option value="74#French Polynesia">French Polynesia</option>
        <option value="75#French Southern Territories">French Southern Territories</option>
        <option value="76#Gabon">Gabon</option>
        <option value="77#Gambia">Gambia</option>
        <option value="78#Georgia">Georgia</option>
        <option value="79#Germany">Germany</option>
        <option value="80#Ghana">Ghana</option>
        <option value="81#Gibraltar">Gibraltar</option>
        <option value="82#Greece">Greece</option>
        <option value="83#Greenland">Greenland</option>
        <option value="84#Grenada">Grenada</option>
        <option value="85#Guadeloupe">Guadeloupe</option>
        <option value="86#Guam">Guam</option>
        <option value="87#Guatemala">Guatemala</option>
        <option value="88#Guinea">Guinea</option>
        <option value="89#Guinea-Bissau">Guinea-Bissau</option>
        <option value="90#Guyana">Guyana</option>
        <option value="91#Haiti">Haiti</option>
        <option value="92#Heard and McDonald Islands">Heard and McDonald Islands</option>
        <option value="93#Honduras">Honduras</option>
        <option value="243#Hong Kong">Hong Kong</option>
        <option value="94#Hungary">Hungary</option>
        <option value="95#Iceland">Iceland</option>
        <option value="96#India">India</option>
        <option value="97#Indonesia">Indonesia</option>
        <option value="98#Iran">Iran</option>
        <option value="99#Iraq">Iraq</option>
        <option value="100#Ireland">Ireland</option>
        <option value="101#Israel">Israel</option>
        <option value="102#Italy">Italy</option>
        <option value="103#Jamaica">Jamaica</option>
        <option value="104#Japan">Japan</option>
        <option value="105#Jordan">Jordan</option>
         <option value="106#Kazakhstan">Kazakhstan</option>
        <option value="107#Kenya">Kenya</option>
        <option value="108#Kiribati">Kiribati</option>
        <option value="109#Korea (north)">Korea (north)</option>
        <option value="110#Korea (south)">Korea (south)</option>
        <option value="111#Kuwait">Kuwait</option>
        <option value="112#Kyrgyzstan">Kyrgyzstan</option>
        <option value="240#Lao Peoples Democratic Republic">Lao Peoples Democratic Republic</option>
        <option value="113#Latvia">Latvia</option>
        <option value="114#Lebanon">Lebanon</option>
        <option value="115#Lesotho">Lesotho</option>
        <option value="116#Liberia">Liberia</option>
        <option value="117#Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
        <option value="118#Liechtenstein">Liechtenstein</option>
        <option value="119#Lithuania">Lithuania</option>
        <option value="120#Luxembourg">Luxembourg</option>
        <option value="121#Macau">Macau</option>
        <option value="122#Macedonia">Macedonia</option>
        <option value="123#Madagascar">Madagascar</option>
        <option value="124#Malawi">Malawi</option>
        <option value="125#Malaysia">Malaysia</option>
        <option value="126#Maldives">Maldives</option>
        <option value="127#Mali">Mali</option>
        <option value="128#Malta">Malta</option>
        <option value="129#Marshall Islands">Marshall Islands</option>
        <option value="130#Martinique">Martinique</option>
        <option value="131#Mauritania">Mauritania</option>
        <option value="132#Mauritius">Mauritius</option>
        <option value="133#Mayotte">Mayotte</option>
        <option value="134#Mexico">Mexico</option>
        <option value="135#Micronesia">Micronesia</option>
        <option value="136#Moldova">Moldova</option>
        <option value="137#Monaco">Monaco</option>
        <option value="138#Mongolia">Mongolia</option>
        <option value="139#Montserrat">Montserrat</option>
        <option value="140#Morocco">Morocco</option>
        <option value="141#Mozambique">Mozambique</option>
        <option value="142#Myanmar">Myanmar</option>
        <option value="143#Namibia">Namibia</option>
        <option value="144#Nauru">Nauru</option>
        <option value="145#Nepal">Nepal</option>
        <option value="146#Netherlands">Netherlands</option>
        <option value="147#New Caledonia">New Caledonia</option>
        <option value="148#New Zealand">New Zealand</option>
         <option value="149#Nicaragua">Nicaragua</option>
        <option value="150#Niger">Niger</option>
        <option value="151#Nigeria">Nigeria</option>
        <option value="152#Niue">Niue</option>
        <option value="153#Norfolk Island">Norfolk Island</option>
        <option value="154#Northern Mariana Islands">Northern Mariana Islands</option>
        <option value="155#Norway">Norway</option>
        <option value="156#Oman">Oman</option>
        <option value="157#Other">Other</option>
        <option value="158#Pakistan">Pakistan</option>
        <option value="159#Palau">Palau</option>
        <option value="160#Palestinian Territories">Palestinian Territories</option>
        <option value="161#Panama">Panama</option>
        <option value="162#Papua New Guinea">Papua New Guinea</option>
        <option value="163#Paraguay">Paraguay</option>
        <option value="164#Peru">Peru</option>
        <option value="165#Philippines">Philippines</option>
        <option value="166#Pitcairn">Pitcairn</option>
        <option value="167#Poland">Poland</option>
        <option value="168#Portugal">Portugal</option>
        <option value="169#Puerto Rico">Puerto Rico</option>
        <option value="170#Qatar">Qatar</option>
        <option value="172#Réunion">Réunion</option>
        <option value="171#Republic of Congo">Republic of Congo</option>
        <option value="173#Romania">Romania</option>
        <option value="174#Russian Federation">Russian Federation</option>
        <option value="175#Rwanda">Rwanda</option>
        <option value="176#Saint Helena">Saint Helena</option>
        <option value="177#Saint Kitts and Nevis">Saint Kitts and Nevis</option>
        <option value="178#Saint Lucia">Saint Lucia</option>
        <option value="179#Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
        <option value="180#Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
        <option value="181#Samoa">Samoa</option>
        <option value="182#San Marino">San Marino</option>
        <option value="183#Sao Tome and Principe">Sao Tome and Principe</option>
        <option value="184#Saudi Arabia">Saudi Arabia</option>
        <option value="185#Senegal">Senegal</option>
        <option value="186#Serbia and Montenegro">Serbia and Montenegro</option>
        <option value="187#Seychelles">Seychelles</option>
        <option value="188#Sierra Leone">Sierra Leone</option>
        <option value="189#Singapore">Singapore</option>
        <option value="190#Slovakia">Slovakia</option>
        <option value="191#Slovenia">Slovenia</option>
        <option value="192#Solomon Islands">Solomon Islands</option>
        <option value="193#Somalia">Somalia</option>
        <option value="194#South Africa">South Africa</option>
        <option value="195#South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
        <option value="196#Spain">Spain</option>
        <option value="197#Sri Lanka">Sri Lanka</option>
        <option value="198#Sudan">Sudan</option>
        <option value="199#Suriname">Suriname</option>
        <option value="200#Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
        <option value="201#Swaziland">Swaziland</option>
        <option value="202#Sweden">Sweden</option>
        <option value="203#Switzerland">Switzerland</option>
        <option value="204#Syria">Syria</option>
        <option value="205#Taiwan">Taiwan</option>
        <option value="206#Tajikistan">Tajikistan</option>
        <option value="207#Tanzania">Tanzania</option>
        <option value="208#Thailand">Thailand</option>
        <option value="209#Togo">Togo</option>
        <option value="210#Tokelau">Tokelau</option>
        <option value="211#Tonga">Tonga</option>
        <option value="212#Trinidad and Tobago">Trinidad and Tobago</option>
        <option value="213#Tunisia">Tunisia</option>
        <option value="214#Turkey">Turkey</option>
        <option value="242#Turkey">Turkey</option>
        <option value="215#Turkmenistan">Turkmenistan</option>
        <option value="216#Turks and Caicos Islands">Turks and Caicos Islands</option>
        <option value="217#Tuvalu">Tuvalu</option>
        <option value="218#Uganda">Uganda</option>
        <option value="219#Ukraine">Ukraine</option>
        <option value="220#undefined">undefined</option>
        <option value="221#United Arab Emirates">United Arab Emirates</option>
        <option value="241#United Arab Emirates">United Arab Emirates</option>
        <option value="222#United Kingdom">United Kingdom</option>
        <option value="223#United States of America">United States of America</option>
        <option value="224#Uruguay">Uruguay</option>
        <option value="225#Uzbekistan">Uzbekistan</option>
        <option value="226#Vanuatu">Vanuatu</option>
        <option value="227#Vatican City">Vatican City</option>
        <option value="228#Venezuela">Venezuela</option>
        <option value="229#Vietnam">Vietnam</option>
        <option value="230#Virgin Islands (British)">Virgin Islands (British)</option>
        <option value="231#Virgin Islands (US)">Virgin Islands (US)</option>
        <option value="232#Wallis and Futuna Islands">Wallis and Futuna Islands</option>
        <option value="233#Web">Web</option>
        <option value="234#Western Sahara">Western Sahara</option>
        <option value="235#Yemen">Yemen</option>
        <option value="236#Zambia">Zambia</option>
        <option value="237#Zimbabwe">Zimbabwe</option>
        </select>
    </div>

          <div class="mb-3">
            <label for="inputState" class="form-label">State or Province*</label>
            <input type="text" class="form-control" id="inputState" required>
          </div>
          <div class="mb-3">
            <label for="inputCity" class="form-label">City*</label>
            <input type="text" class="form-control" id="inputCity" required>
          </div>
          <div class="mb-3">
            <label for="inputOragnizingSociety" class="form-label">Oragnizing Society*</label>
            <input type="text" class="form-control" id="inputOragnizingSociety" required>
          </div>
          <div class="mb-3">
            <label for="inputContactPersonforevent" class="form-label">Contact Person for event*</label>
            <input type="text" class="form-control" id="inputContactPersonforevent" required>
          </div>
          <div class="mb-3">
            <label for="InputEventEnquiriesEmailAddress" class="form-label">Event Enquiries Email Address*</label>
            <input type="email" class="form-control" id="InputEventEnquiriesEmailAddress" aria-describedby="emailHelp" required>
           
          </div>
          <div class="mb-3">
            <label for="inputWebsiteAddress" class="form-label">Website Address*</label>
            <input type="text" class="form-control" id="inputWebsiteAddress" required>
          </div>
          <div class="mb-3">
            <label for="inputEventStartDate" class="form-label">Event Start Date*</label>
            <input type="text" class="form-control" id="inputEventStartDate" required>
          </div>
          <div class="mb-3">
            <label for="inputLastDayOfEvent" class="form-label">Last Day Of Event*</label>
            <input type="text" class="form-control" id="inputLastDayOfEvent" required>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Short Description Of Event*</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          
          
          <button type="submit" class="btn btn-soft-danger mb-5">Add</button>
         
        </form> 
      </div>
       
<?php include 'footer.php'; ?>
    <script src="./src/vendors/jquery/dist/jquery.min.js"></script>
    <script src="./src/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="./src/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./src/js/miri-ui-kit.js"></script>
</body>
</html>