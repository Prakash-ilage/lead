<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $phone = htmlspecialchars($_POST['phone']);
    $country = htmlspecialchars($_POST['country']);
    $usStates = htmlspecialchars($_POST['usStates']);
    $canadaProvinces = htmlspecialchars($_POST['canadaProvinces']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        // Mail configuration
        $to = "piprakash4@gmail.com"; // Replace with your email
        $subject = "New Message from Landing Page";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Mail content
        $mailBody = "You have received a new message:\n\n";
        $mailBody .= "First Name: $firstname\n";
        $mailBody .= "Last Name: $lastname\n";
        $mailBody .= "Email: $email\n";
        $mailBody .= "Company Name: $company\n";
        $mailBody .= "Phone: $phone\n";
        $mailBody .= "Country: $country\n";
        $mailBody .= "Us State: $usStates\n";
        $mailBody .= "Canada State: $canadaProvinces\n";


        // Send mail
        if (mail($to, $subject, $mailBody, $headers)) {
            header('Location: Assets/ringcentral-modernized-biggest-businesses.pdf');
            
        } else {
            $error = "There was an issue sending your email. Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Content Lead | How RingCentral has helped modernize today’s biggest businesses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container {
            /*max-width: 600px;*/
            /*margin: 50px auto;*/
            /*background: white;*/
            padding: 20px;
            /*box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);*/
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 0px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            width: 95%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .success {
            color: green;
            text-align: center;
            margin-top: 10px;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
        .title{
              background-color: #0584BD;
            }
        .form-section{
              background-color: #f2f2f2;
            }
        .form-check-input {
            position: absolute;
            margin-top: 5px;
            margin-left: -221px;
        }
        label.form-check-label {
            font-size: 15px;
            font-weight: 500;
        }
        .mt-40{
            margin-top: 40px;
            margin-bottom: 80px;
        }
        .main-title{
            width:1140px !important;
        }
        .hidden {
            display: none;
        }
        .footer{
            background-image: linear-gradient(180deg, #0000009C 0%, #000000DB 100%);
        }
        .media-img{
            display: block;
              margin-left: auto;
              margin-right: auto;
        }
        button.btn.btn-primary.btn-lg.btn-block {
            width: 48%;
            font-size: 16px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 24px;
        }
    </style>
</head>
<body>

  <div class="container py-4">
    <div class="row">
      <div class="col-md-6">
        <img src="Assets/ringcentral-logo.webp" width="200" >
      </div>
      <div class="col-md-6">
        
      </div>
    </div>
  </div>

<div class="title">
  <div class="container p-4 ">
     <div class="row">
      <div class="col-xl-12">
        <h2 class="text-white text-left">How RingCentral has helped modernize today’s biggest businesses</h2>
      </div>
    </div>
  </div>
 </div>
    <div class="container mt-40">
        <div class="row">
            <div class="col-md-6">
                      <p>This comprehensive eBook showcases real-world case studies and success stories, illustrating how RingCentral’s unified communications solutions have enhanced productivity, streamlined operations, and driven growth.</p>
      <p>By reading this eBook, you’ll gain valuable insights into:</p>

      <ul>
        <li>Leading enterprises organizations that have leveraged advanced technology to stay competitive and innovative in a rapidly changing landscape.</li>
        <li>The benefits of modernizing your communication systems.</li>
        <li>How a unified approach can positively impact your healthcare practice’s performance.</li>
      </ul>

      <p>Download now to discover the path to a more connected and efficient future in healthcare.</p>

      <img src="Assets/ringcentral-modernized-biggest-businesses-images.webp" width="400" class="media-img">
                
            </div>
            <div class="col-md-6">
                    
                    <!--<?php if (!empty($success)) { echo "<p class='success'>$success</p>"; } ?>-->
                    <!--<?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>-->
                    <!--<form action="" method="POST">-->
                    <!--    <div class="form-group">-->
                    <!--        <label for="name">Name</label>-->
                    <!--        <input type="text" id="name" name="name" placeholder="Your Name" required>-->
                    <!--    </div>-->
                    <!--    <div class="form-group">-->
                    <!--        <label for="email">Email</label>-->
                    <!--        <input type="email" id="email" name="email" placeholder="Your Email" required>-->
                    <!--    </div>-->
                    <!--    <div class="form-group">-->
                    <!--        <label for="message">Message</label>-->
                    <!--        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>-->
                    <!--    </div>-->
                    <!--    <button type="submit">Download Now</button>-->
                    <!--</form>-->
                    
                     <div class="form-section p-5">
                         <?php if (!empty($success)) { echo "<p class='success'>$success</p>"; } ?>
                         <?php if (!empty($error)) { echo "<p class='error'>$error</p>"; } ?>
                          <h4 class="text-center">Complete the Form Below<br><br></h4>
                      <form action="" method="POST">
                        <div class="form-group">
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                        <input type="text" name="company" id="company" class="form-control" placeholder="Company Name" required>
                      </div>
                        <div class="form-group">
                          <input type="phone" name="phone" id="phone" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="form-group" >
                          <select class="form-control" id="country" name="country" onchange="toggleStateDropdown()"  >
                            <option value="" disabled selected>Country</option>
                            <option value="US">United States</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antartica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo">Congo, the Democratic Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia (Hrvatska)</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="France Metropolitan">France, Metropolitan</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                            <option value="Holy See">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran (Islamic Republic of)</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                            <option value="Korea">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia, Federated States of</option>
                            <option value="Moldova">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                            <option value="Saint Lucia">Saint LUCIA</option>
                            <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                            <option value="Span">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="St. Helena">St. Helena</option>
                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syrian Arab Republic</option>
                            <option value="Taiwan">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Viet Nam</option>
                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                            <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>

                        </div>
                        
                        <div class="form-group hidden" id="usStatesDiv">
                          <select class="form-control" id="usStates" name="usStates">
                              <option value="" selected="selected">State</option>
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="DC">District Of Columbia</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                          </select>
                          </div>
                          
                          <div class="form-group hidden" id="canadaProvincesDiv">
                          <select class="form-control" id="canadaProvinces" name="canadaProvinces">
                                <option value="" selected="selected">State</option>
                              	<option value="AB">Alberta</option>
                            	<option value="BC">British Columbia</option>
                            	<option value="MB">Manitoba</option>
                            	<option value="NB">New Brunswick</option>
                            	<option value="NL">Newfoundland and Labrador</option>
                            	<option value="NS">Nova Scotia</option>
                            	<option value="ON">Ontario</option>
                            	<option value="PE">Prince Edward Island</option>
                            	<option value="QC">Quebec</option>
                            	<option value="SK">Saskatchewan</option>
                            	<option value="NT">Northwest Territories</option>
                            	<option value="NU">Nunavut</option>
                            	<option value="YT">Yukon</option>
                          </select>
                          </div>
                          
                
                          <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Please note by accessing advertiser content your details may be passed onto Content Lead &amp; RingCentral for fulfillment of ‘the offer’. The subscriber also permits the RingCentral to follow up the fulfillment of the offer by email, phone or letter. See the <a href="https://www.ringcentral.com/legal/last-update-july-29-2024/privacy-notice.html" style="color: #0000ff;" target="_blank"><u>Privacy Policy</u></a> for more information.</label>
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">DOWNLOAD NOW</button>
                      </div>
                        </div>
            </div>
        </div>
    </div>
    
    <div class="footer py-3">
        <h6 class="text-white text-center">Copyright © 2024 Content Lead, All Rights Reserved.</h6>
    </div>
    
    <script>
        function toggleStateDropdown() {
            const country = document.getElementById('country').value;
            const usStatesDiv = document.getElementById('usStatesDiv');
            const canadaProvincesDiv = document.getElementById('canadaProvincesDiv');

            // Reset visibility for both dropdowns
            usStatesDiv.classList.add('hidden');
            canadaProvincesDiv.classList.add('hidden');

            // Show the appropriate dropdown based on selected country
            if (country === 'US') {
                usStatesDiv.classList.remove('hidden');
            } else if (country === 'Canada') {
                canadaProvincesDiv.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>
