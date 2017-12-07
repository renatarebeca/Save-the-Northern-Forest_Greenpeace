<?php
$db_connection = new PDO("","", "");
$sql = "SELECT `sign_id`, `name`,`email`, `country`, `signatures`,`message` FROM `signatures`";
$result = $db_connection->query($sql);

//if there is article id in $_GET
if(isset($_GET['myID'])){

    $SecondID = $_GET['myID']; //myID - is var name//

    //if likes..goes here...
    if(isset($_GET['sign'])){
        $sql = "UPDATE signatures SET signatures = signatures + 1 WHERE sign_id = $SecondID";
        $db_connection->query($sql);
    }



    $sql = "select * from signatures WHERE sign_id = $SecondID";
    $result = $db_connection->query($sql);
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Kanit:600" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/news-style.css">
        <link rel="stylesheet" href="css/nav-style.css">
        <link rel="stylesheet" href="css/petition-style.css">
        <title>Petition</title>
    </head>
    <body>
        <header>
            <div class="row">
                <a href="mappage.html"> <img class="imgg" src="images/logo.png" alt="logo"></a>

                <nav id="nav">
                    <a style="color:#fae6cd;" href="petition.php">PETITION</a>
                    <a href="index.html"><nobr>WORLD MAP</nobr></a>
                    <a href="video.html">VIDEO</a>
                    <a href="news.php">NEWS</a>
                    <a href="contact.html">CONTACT</a>
                </nav>
            </div>
        </header>

        <img class="cover-img" src="images/headerimg.jpg" alt="header_image">
        <div class="section col-xs-12 col-sm-12 col-md-12"> 
            <div class="petition-text col-xs-12 col-sm-12 col-md-6">
                <h3> Carbon store or carbon bomb?</h3>
                <p>The Great Northern Forest has stood tall for thousands of years. It stores more carbon in its trees and soils than all the tropical rainforests put together and therefore its survival plays a crucial role in preventing climate chaos. </p>
                <p> But its continued destruction could turn this carbon store into a carbon bomb. </p>
                <p>In 2010, world governments agreed to take immediate action to prioritise the protection of the world's remaining forests (1). Despite this promise, the governments of Canada, Russia, Finland and Sweden still allow companies to destroy huge parts of the Great Northern Forest. </p>
                <p> We call upon the heads of these governments to keep their promise and take action to save the Great Northern Forest.</p>
                <p>Also called boreal forest or taiga in Russia, the Great Northern Forest is a unique global ecosystem circling the planet like a green crown. Stretching from northwest of Canada, through Sweden and Finland all the way to the Pacific coast of Russia, it includes the traditional territories of many Indigenous Peoples who have stewarded these landscapes since time immemorial. </p>
                <p>Though separated by oceans, the forest acts like a single ecosystem playing a crucial role in regulating the amount of CO2 in the atmosphere. It is also the single largest terrestrial carbon store on the planet. Yet its continued destruction of the Great Northern Forest could trigger a 'carbon bomb', releasing huge amounts of carbon stored in the trees, permafrosts and soils. We simply cannot afford to let this happen. </p>
                <p> If we don't act to protect the Great Northern Forest, we will lose the battle against climate change - what happens to this amazing forest will affect us all. </p>
                <p> Send a message to the governments of Canada, Sweden, Finland and Russia demanding protection of the Great Northern Forest.</p>
            </div>
            <div class=' right col-xs-12 col-sm-12 col-md-6'>
                <?php
                while($row = $result->fetchObject()) {
                    echo "<h1>SAVE THE GREAT NORTHERN FOREST!</h1>";
                    echo "<h3><img src='images/signs.png' alt='signsicon'>$row->signatures Signatures</h3>";
                    function send(){
                    echo "<a class='likenumber' href='?sign&myID=$row->sign_id'>SEND </a>";}
                }

                ?>
                <form class="form" action="" method="post">
                    <h3 class="formhead">Sign petition</h3>
                    <label class="formlabel"> Name </label>
                    <br>
                    <input class="namelabel" size="34" type="text" name="name" placeholder="Enter your name here" required>
                    <br><br>
                    <label> Email </label>
                    <br>
                    <input class="email" type="email" placeholder="Enter your email here">
                    <br><br>
                    <label > Country</label>
                    <br>
                    <select class="country">
                        <option value="DK">Denmark</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AX">Åland Islands</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AO">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AQ">Antarctica</option>
                        <option value="AG">Antigua and Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AM">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia, Plurinational State of</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option value="BA">Bosnia and Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BV">Bouvet Island</option>
                        <option value="BR">Brazil</option>
                        <option value="IO">British Indian Ocean Territory</option>
                        <option value="BN">Brunei Darussalam</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CX">Christmas Island</option>
                        <option value="CC">Cocos (Keeling) Islands</option>
                        <option value="CO">Colombia</option>
                        <option value="KM">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CD">Congo, the Democratic Republic of the</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CI">Côte d'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CW">Curaçao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FK">Falkland Islands (Malvinas)</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="TF">French Southern Territories</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GG">Guernsey</option>
                        <option value="GN">Guinea</option>
                        <option value="GW">Guinea-Bissau</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HM">Heard Island and McDonald Islands</option>
                        <option value="VA">Holy See (Vatican City State)</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IR">Iran, Islamic Republic of</option>
                        <option value="IQ">Iraq</option>
                        <option value="IE">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JE">Jersey</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="KP">Korea, Democratic People's Republic of</option>
                        <option value="KR">Korea, Republic of</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Lao People's Democratic Republic</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macao</option>
                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                        <option value="MG">Madagascar</option>
                        <option value="MW">Malawi</option>
                        <option value="MY">Malaysia</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="YT">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="FM">Micronesia, Federated States of</option>
                        <option value="MD">Moldova, Republic of</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="ME">Montenegro</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Namibia</option>
                        <option value="NR">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="NL">Netherlands</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NU">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="MP">Northern Mariana Islands</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau</option>
                        <option value="PS">Palestinian Territory, Occupied</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PN">Pitcairn</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="RE">Réunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russian Federation</option>
                        <option value="RW">Rwanda</option>
                        <option value="BL">Saint Barthélemy</option>
                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                        <option value="KN">Saint Kitts and Nevis</option>
                        <option value="LC">Saint Lucia</option>
                        <option value="MF">Saint Martin (French part)</option>
                        <option value="PM">Saint Pierre and Miquelon</option>
                        <option value="VC">Saint Vincent and the Grenadines</option>
                        <option value="WS">Samoa</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome and Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SX">Sint Maarten (Dutch part)</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="SO">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                        <option value="SS">South Sudan</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SJ">Svalbard and Jan Mayen</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syrian Arab Republic</option>
                        <option value="TW">Taiwan, Province of China</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania, United Republic of</option>
                        <option value="TH">Thailand</option>
                        <option value="TL">Timor-Leste</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad and Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TM">Turkmenistan</option>
                        <option value="TC">Turks and Caicos Islands</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States</option>
                        <option value="UM">United States Minor Outlying Islands</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                        <option value="VN">Viet Nam</option>
                        <option value="VG">Virgin Islands, British</option>
                        <option value="VI">Virgin Islands, U.S.</option>
                        <option value="WF">Wallis and Futuna</option>
                        <option value="EH">Western Sahara</option>
                        <option value="YE">Yemen</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                    <br><br>
                    <label class="formlabel"> Message </label>
                    <br>
                    <textarea class="textarea" type="text" rows="6" cols="36" name="message"> </textarea>
                    <input type="hidden" name="sign_id" value="<?php echo $SecondID; ?>">
                    <!-- input type hidden are not displayed on the page -->
                    <br><br>
                    <input name="send" class="btn read submitbutton" type="submit" onclick="document.write('<?php send() ?>');" value="SEND">

                </form>
            </div>
        </div>



        <!--FOOTER-->
        <div style="bottom: 0;" class="row footer">
            <div class="footer_wrap">
                <div class="col-sm-4 about_footer">
                    <h3 class="contacth3"> Address </h3>
                    <p class="prg"> Njalsgade 21 G,</p>
                    <p class="prg"> 2300 København S,</p>
                    <p class="prg"> Copenhagen,</p>
                    <p class="prg"> Denmark</p>
                </div>
                <div class="col-sm-4 logo_footer"> 
                    <a href="http://www.greenpeace.org/international/en/"><img class="footer_img" src="images/logo.png" alt="Footer logo"></a>
                </div>
                <div class="col-sm-4 about_footer">
                    <h3 class="contacth3">Thank you for your interest! </h3>
                    <p class="prg"> If you are a supporter </p>
                    <p class="prg"> you can find further info</p>
                    <p class="prg"> on freephone</p>
                    <p class="prg"> +31 (0) 20 718 20 00 </p>
                </div>
            </div>
        </div>
        <!--END FOOTER-->


        <script src="jquery/nav-jquery.js"></script>

    </body>
</html>