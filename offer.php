<?php
include("admin/connection.php");
if (isset($_POST['submit'])) {

    $name = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $countryCode = addslashes($_POST['countryCode']);
    $contactNumber = addslashes($_POST['contactNumber']);
    $companyName = addslashes($_POST['companyName']);
    $serviceType = addslashes($_POST['serviceType']);
    $txtServiceType = addslashes($_POST['txtServiceType']);
    $message = addslashes($_POST['message']);
    $query = "INSERT INTO `enquiry`(`fullName`, `email`, `countryCode`, `contactNumber`, `companyName`, `serviceType`, `txtServiceType`, `message`, `date`, `status`) VALUES ('$name','$email', '$countryCode', '$contactNumber', '$companyName', '$serviceType', '$txtServiceType', '$message', NOW(), 'Pending')";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script> alert("Thank You For Filling The Form. Our Team Will Get Back To You Within 24hrs"); </script>';
        //header('Location: u pdate.php');
        ///echo '<script>window.reload()</script>';
        ?>
        <script> window.location.href="offer.php";</script>
        <?php
        
    } else {
        echo '<script> alert("Please Try Again"); </script>';
    }
}
?>
    <?php include('include/header.php'); ?>
            <!--===============PAGE CONTENT ==============-->
            <!--===============PAGE CONTENT ==============-->
            <div id="content" class="site-content ">
                <!---slider--->

                <!---client---->
                <section class="client-section">
                    <!--===============spacing==============-->

                    <!--===============spacing==============-->
                    <!-- <div class="auto-container">
                  <div class="row">
                     <div class="client_logo_carousel type_three">
                        <div class="swiper-container" data-swiper='{
                           "autoplay": {
                             "delay": 6000
                           },
                           "freeMode": true,
                           "loop": true,
                           "speed": 1000,
                           "centeredSlides": false,
                           "slidesPerView": 5,
                           "spaceBetween": 30,
                           "pagination": {
                             "el": ".swiper-pagination",
                             "clickable": true
                           },
                            
                           "breakpoints": {
                              "1200": {
                                 "slidesPerView": 5
                              },
                              "1024": {
                               "slidesPerView": 4
                              },
                             "768": {
                               "slidesPerView": 3
                             },
                             "576": {
                               "slidesPerView": 1 
                             },
                             "0": {
                               "slidesPerView": 1 
                             }
                           }
                         }'>
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-2.jpg" alt="clients-logo">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-3.jpg" alt="clients-logo">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-4.jpg" alt="clients-logo">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-5.jpg" alt="clients-logo">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-6.jpg" alt="clients-logo">
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="image">
                                    <img src="assets/images/logo-7.jpg" alt="clients-logo">
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div> -->
                    <!--===============spacing==============-->

                    <!--===============spacing==============-->
                    <div class="divider_1 dark"></div>
                </section>
                <section class="about-section mobileOfferForm">
                    <!--===============spacing==============-->
                    <div class="pd_top_60"></div>
                    <!--===============spacing==============-->
                    <div class="container-fluid" style="background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%) ;">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6 col-12 pt-5 row text-center mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0">

                                <div class="image_boxes style_seven">
                                    <div class="pt-3 ">
                                        <img src="assets/images/service_icon/Dream-Force-logo1.png" style="height: 60px;" alt="" class="img-fluid">
                                    </div>
                                    <div class="pt-4 text-center">
                                        <h4 style="color: white;">
                                            Get $500 OFF on all <br>our Services*
                                        </h4>
                                        </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-12" style="padding: 0px 0px;">
                                <div class="col-lg-10 col-12 pb-5">
                                    <div class="mainContainer mobileveiwpad" style="background-image: url('assets/images/service_icon/image.png');">
                                        <div class="row bg-white ">
                                            <div class="col-lg-12 col-12">
                                                <div>
                                                    <h2 class="h2SetWhite text-black text-center">Dreamforce Offers</h2>

                                                </div>
                                            </div>
                                            <form class="g-4" action="" method="post" enctype="multipart/form-data">
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Name<strong style="color: red;">*</strong> </label>
                                                    <input type="text" name="name" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Email<strong style="color: red;">*</strong></label>
                                                    <input type="email" name="email" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12 row border-0" style="padding: 0px 0px;">
                                                <label class="fw-bolder" style="padding-left: 15px;"> Contact Number <strong style="color: red;">*</strong></label>
                                                <div class="col-lg-4 col-5 " style="padding-right: 0px;">
                                                <select name="countryCode" required class="state_select select2-hidden-accessible">
                                                            <option data-countryCode="GB" value="UK (+44)" >UK (+44)</option>
                                                            <option data-countryCode="US" value="USA (+1)" Selected>USA (+1)</option>
                                                                <option data-countryCode="Andorra" value="Andorra (+376)">AD (+376)</option>
                                                                <option data-countryCode="AO" value="Angola (+244)">AO (+244)</option>
                                                                <option data-countryCode="AI" value="Anguilla (+1264)">AI (+1264)</option>
                                                                <option data-countryCode="AG" value="Antigua Barbuda (+1268)">AG (+1268)</option>
                                                                <option data-countryCode="AR" value="Argentina (+54)">AR (+54)</option>
                                                                <option data-countryCode="AM" value="Armenia (+374)">AM (+374)</option>
                                                                <option data-countryCode="AW" value="Aruba (+297)">AW (+297)</option>
                                                                <option data-countryCode="AU" value="Australia (+61)">AU (+61)</option>
                                                                <option data-countryCode="AT" value="Austria (+43)">AT (+43)</option>
                                                                <option data-countryCode="AZ" value="Azerbaijan (+994)">AZ (+994)</option>
                                                                <option data-countryCode="BS" value="Bahamas (+1242)">BS (+1242)</option>
                                                                <option data-countryCode="BH" value="Bahrain (+973)">BH (+973)</option>
                                                                <option data-countryCode="BD" value="Bangladesh (+880)">BD (+880)</option>
                                                                <option data-countryCode="BB" value="Barbados (+1246)">BB (+1246)</option>
                                                                <option data-countryCode="BY" value="Belarus (+375)">BY (+375)</option>
                                                                <option data-countryCode="BE" value="Belgium (+32)">BE (+32)</option>
                                                                <option data-countryCode="BZ" value="Belize (+501)">BZ (+501)</option>
                                                                <option data-countryCode="BJ" value="Benin (+229)">BJ (+229)</option>
                                                                <option data-countryCode="BM" value="Bermuda (+1441)">BM (+1441)</option>
                                                                <option data-countryCode="BT" value="Bhutan (+975)">BT (+975)</option>
                                                                <option data-countryCode="BO" value="Bolivia (+591)">BO (+591)</option>
                                                                <option data-countryCode="BA" value="Bosnia Herzegovina (+387)">BA (+387)</option>
                                                                <option data-countryCode="BW" value="Botswana (+267)">BW (+267)</option>
                                                                <option data-countryCode="BR" value="Brazil (+55)">BR (+55)</option>
                                                                <option data-countryCode="BN" value="Brunei (+673)">BN (+673)</option>
                                                                <option data-countryCode="BG" value="Bulgaria (+359)">BG (+359)</option>
                                                                <option data-countryCode="BF" value="Burkina Faso (+226)">BF (+226)</option>
                                                                <option data-countryCode="BI" value="Burundi (+257)">BI (+257)</option>
                                                                <option data-countryCode="KH" value="Cambodia (+855)">KH (+855)</option>
                                                                <option data-countryCode="CM" value="Cameroon (+237)">CM (+237)</option>
                                                                <option data-countryCode="CA" value="Canada (+1)">CA (+1)</option>
                                                                <option data-countryCode="CV" value="Cape Verde Islands (+238)">CV (+238)</option>
                                                                <option data-countryCode="KY" value="Cayman Islands (+1345)">KY (+1345)</option>
                                                                <option data-countryCode="CF" value="Central African Republic (+236)">CF (+236)</option>
                                                                <option data-countryCode="CL" value="Chile (+56)">CL (+56)</option>
                                                                <option data-countryCode="CN" value="China (+86)">CN (+86)</option>
                                                                <option data-countryCode="CO" value="Colombia (+57)">CO (+57)</option>
                                                                <option data-countryCode="KM" value="Comoros (+269)">KM (+269)</option>
                                                                <option data-countryCode="CG" value="Congo (+242)">CG (+242)</option>
                                                                <option data-countryCode="CK" value="Cook Islands (+682)">CK (+682)</option>
                                                                <option data-countryCode="CR" value="Costa Rica (+506)">CR (+506)</option>
                                                                <option data-countryCode="HR" value="Croatia (+385)">HR (+385)</option>
                                                                <option data-countryCode="CU" value="Cuba (+53)">CU (+53)</option>
                                                                <option data-countryCode="CY" value="Cyprus North (+90392)">CY (+90392)</option>
                                                                <option data-countryCode="CY" value="Cyprus South (+357)">CY (+357)</option>
                                                                <option data-countryCode="CZ" value="Czech Republic (+42)">CZ (+42)</option>
                                                                <option data-countryCode="DK" value="Denmark (+45)">DK (+45)</option>
                                                                <option data-countryCode="DJ" value="Djibouti (+253)">DJ (+253)</option>
                                                                <option data-countryCode="DM" value="Dominica (+1809)">DM (+1809)</option>
                                                                <option data-countryCode="DO" value="Dominican Republic (+1809)"> (+1809)</option>
                                                                <option data-countryCode="EC" value="Ecuador (+593)">EC (+593)</option>
                                                                <option data-countryCode="EG" value="Egypt (+20)">EG (+20)</option>
                                                                <option data-countryCode="SV" value="El Salvador (+503)">SV (+503)</option>
                                                                <option data-countryCode="GQ" value="Equatorial Guinea (+240)">GQ (+240)</option>
                                                                <option data-countryCode="ER" value="Eritrea (+291)">ER (+291)</option>
                                                                <option data-countryCode="EE" value="Estonia (+372)">EE (+372)</option>
                                                                <option data-countryCode="ET" value="Ethiopia (+251)">ET (+251)</option>
                                                                <option data-countryCode="FK" value="Falkland Islands (+500)">FK (+500)</option>
                                                                <option data-countryCode="FO" value="Faroe Islands (+298)">FO (+298)</option>
                                                                <option data-countryCode="FJ" value="Fiji (+679)">FJ (+679)</option>
                                                                <option data-countryCode="FI" value="Finland (+358)">FI (+358)</option>
                                                                <option data-countryCode="FR" value="France (+33)">FR (+33)</option>
                                                                <option data-countryCode="GF" value="French Guiana (+594)">FG (+594)</option>
                                                                <option data-countryCode="PF" value="French Polynesia (+689)">PF (+689)</option>
                                                                <option data-countryCode="GA" value="Gabon (+241)">GA (+241)</option>
                                                                <option data-countryCode="GM" value="Gambia (+220)">GN (+220)</option>
                                                                <option data-countryCode="GE" value="Georgia (+7880)">GE (+7880)</option>
                                                                <option data-countryCode="DE" value="Germany (+49)">DE (+49)</option>
                                                                <option data-countryCode="GH" value="Ghana (+233)">GH (+233)</option>
                                                                <option data-countryCode="GI" value="Gibraltar (+350)">GI (+350)</option>
                                                                <option data-countryCode="GR" value="Greece (+30)">GR (+30)</option>
                                                                <option data-countryCode="GL" value="Greenland (+299)">GL (+299)</option>
                                                                <option data-countryCode="GD" value="Grenada (+1473)">GD (+1473)</option>
                                                                <option data-countryCode="GP" value="Guadeloupe (+590)">GP (+590)</option>
                                                                <option data-countryCode="GU" value="Guam (+671)">GU (+671)</option>
                                                                <option data-countryCode="GT" value="Guatemala (+502)">GT (+502)</option>
                                                                <option data-countryCode="GN" value="Guinea (+224)">GN (+224)</option>
                                                                <option data-countryCode="GW" value="Guinea - Bissau (+245)">GW - Bissau (+245)</option>
                                                                <option data-countryCode="GY" value="Guyana (+592)">GY (+592)</option>
                                                                <option data-countryCode="HT" value="Haiti (+509)">HT (+509)</option>
                                                                <option data-countryCode="HN" value="Honduras (+504)">HN (+504)</option>
                                                                <option data-countryCode="HK" value="Hong Kong (+852)">HK (+852)</option>
                                                                <option data-countryCode="HU" value="Hungary (+36)">HU (+36)</option>
                                                                <option data-countryCode="IS" value="Iceland (+354)">IS (+354)</option>
                                                                <option data-countryCode="BH" value="Bharat (+91)">BH (+91)</option>
                                                                <option data-countryCode="ID" value="Indonesia (+62)">ID (+62)</option>
                                                                <option data-countryCode="IR" value="Iran (+98)">IR (+98)</option>
                                                                <option data-countryCode="IQ" value="Iraq (+964)">IQ (+964)</option>
                                                                <option data-countryCode="IE" value="Ireland (+353)">IE (+353)</option>
                                                                <option data-countryCode="IL" value="Israel (+972)">IL (+972)</option>
                                                                <option data-countryCode="IT" value="Italy (+39)">IT (+39)</option>
                                                                <option data-countryCode="JM" value="Jamaica (+1876)">JM (+1876)</option>
                                                                <option data-countryCode="JP" value="Japan (+81)">JP (+81)</option>
                                                                <option data-countryCode="JO" value="Jordan (+962)">JO (+962)</option>
                                                                <option data-countryCode="KZ" value="Kazakhstan (+7)">KZ (+7)</option>
                                                                <option data-countryCode="KE" value="Kenya (+254)">KE (+254)</option>
                                                                <option data-countryCode="KI" value="Kiribati (+686)">KI (+686)</option>
                                                                <option data-countryCode="KP" value="Korea North (+850)">KP (+850)</option>
                                                                <option data-countryCode="KR" value="Korea South (+82)">KR (+82)</option>
                                                                <option data-countryCode="KW" value="Kuwait (+965)">KW (+965)</option>
                                                                <option data-countryCode="KG" value="Kyrgyzstan (+996)">KG (+996)</option>
                                                                <option data-countryCode="LA" value="Laos (+856)">LA (+856)</option>
                                                                <option data-countryCode="LV" value="Latvia (+371)">LV (+371)</option>
                                                                <option data-countryCode="LB" value="Lebanon (+961)">LB (+961)</option>
                                                                <option data-countryCode="LR" value="Liberia (+231)">LR (+231)</option>
                                                                <option data-countryCode="LY" value="Libya (+218)">LY (+218)</option>
                                                                <option data-countryCode="LI" value="Liechtenstein (+417)">LI (+417)</option>
                                                                <option data-countryCode="LT" value="Lithuania (+370)">LT (+370)</option>
                                                                <option data-countryCode="LU" value="Luxembourg (+352)">LU (+352)</option>
                                                                <option data-countryCode="MO" value="Macao (+853)">MO (+853)</option>
                                                                <option data-countryCode="MK" value="Macedonia (+389)">MK (+389)</option>
                                                                <option data-countryCode="MG" value="Madagascar (+261)">MG (+261)</option>
                                                                <option data-countryCode="MW" value="Malawi (+265)">MW (+265)</option>
                                                                <option data-countryCode="MY" value="Malaysia (+60)">MY (+60)</option>
                                                                <option data-countryCode="MV" value="Maldives (+960)">MV (+960)</option>
                                                                <option data-countryCode="ML" value="Mali (+223)">ML (+223)</option>
                                                                <option data-countryCode="MT" value="Malta (+356)">MT (+356)</option>
                                                                <option data-countryCode="MH" value="Marshall Islands (+692)">MH (+692)</option>
                                                                <option data-countryCode="MQ" value="Martinique (+596)">MQ (+596)</option>
                                                                <option data-countryCode="MR" value="Mauritania (+222)">MR (+222)</option>
                                                                <option data-countryCode="YT" value="Mayotte (+269)">YT (+269)</option>
                                                                <option data-countryCode="MX" value="Mexico (+52)">MX (+52)</option>
                                                                <option data-countryCode="FM" value="Micronesia (+691)">FM (+691)</option>
                                                                <option data-countryCode="MD" value="Moldova (+373)">MD (+373)</option>
                                                                <option data-countryCode="MC" value="Monaco (+377)">MC (+377)</option>
                                                                <option data-countryCode="MN" value="Mongolia (+976)">MN (+976)</option>
                                                                <option data-countryCode="MS" value="Montserrat (+1664)">MS (+1664)</option>
                                                                <option data-countryCode="MA" value="Morocco (+212)">MA (+212)</option>
                                                                <option data-countryCode="MZ" value="Mozambique (+258)">MZ (+258)</option>
                                                                <option data-countryCode="MN" value="Myanmar (+95)">MN (+95)</option>
                                                                <option data-countryCode="NA" value="Namibia (+264)">NA (+264)</option>
                                                                <option data-countryCode="NR" value="Nauru (+674)">NR (+674)</option>
                                                                <option data-countryCode="NP" value="Nepal (+977)">NP (+977)</option>
                                                                <option data-countryCode="NL" value="Netherlands (+31)">NL (+31)</option>
                                                                <option data-countryCode="NC" value="New Caledonia (+687)">NC (+687)</option>
                                                                <option data-countryCode="NZ" value="New Zealand (+64)">NZ (+64)</option>
                                                                <option data-countryCode="NI" value="Nicaragua (+505)">NI (+505)</option>
                                                                <option data-countryCode="NE" value="Niger (+227)">NE (+227)</option>
                                                                <option data-countryCode="NG" value="Nigeria (+234)">NG (+234)</option>
                                                                <option data-countryCode="NU" value="Niue (+683)">NU (+683)</option>
                                                                <option data-countryCode="NF" value="Norfolk Islands (+672)">NF (+672)</option>
                                                                <option data-countryCode="NP" value="Northern Marianas (+670)">NP (+670)</option>
                                                                <option data-countryCode="NO" value="Norway (+47)">NO (+47)</option>
                                                                <option data-countryCode="OM" value="Oman (+968)">OM (+968)</option>
                                                                <option data-countryCode="PW" value="Palau (+680)">PW (+680)</option>
                                                                <option data-countryCode="PA" value="Panama (+507)">PA (+507)</option>
                                                                <option data-countryCode="PG" value="Papua New Guinea (+675)">PG (+675)</option>
                                                                <option data-countryCode="PY" value="Paraguay (+595)">PY (+595)</option>
                                                                <option data-countryCode="PE" value="Peru (+51)">PE (+51)</option>
                                                                <option data-countryCode="PH" value="Philippines (+63)">PH (+63)</option>
                                                                <option data-countryCode="PL" value="Poland (+48)">PL (+48)</option>
                                                                <option data-countryCode="PT" value="Portugal (+351)">PT (+351)</option>
                                                                <option data-countryCode="PR" value="Puerto Rico (+1787)">PR (+1787)</option>
                                                                <option data-countryCode="QA" value="Qatar (+974)">QA (+974)</option>
                                                                <option data-countryCode="RE" value="Reunion (+262)">RE (+262)</option>
                                                                <option data-countryCode="RO" value="Romania (+40)">RO (+40)</option>
                                                                <option data-countryCode="RU" value="Russia (+7)">RU (+7)</option>
                                                                <option data-countryCode="RW" value="Rwanda (+250)">RW (+250)</option>
                                                                <option data-countryCode="SM" value="San Marino (+378)">col-sm-6 (+378)</option>
                                                                <option data-countryCode="ST" value="Sao Tome Principe (+239)">ST (+239)</option>
                                                                <option data-countryCode="SA" value="Saudi Arabia (+966)">Saudi (+966)</option>
                                                                <option data-countryCode="SN" value="Senegal (+221)">SN (+221)</option>
                                                                <option data-countryCode="CS" value="Serbia (+381)">CS (+381)</option>
                                                                <option data-countryCode="SC" value="Seychelles (+248)">SC (+248)</option>
                                                                <option data-countryCode="SL" value="Sierra Leone (+232)">SL (+232)</option>
                                                                <option data-countryCode="SG" value="Singapore (+65)">SG (+65)</option>
                                                                <option data-countryCode="SK" value="Slovak Republic (+421)">SK (+421)</option>
                                                                <option data-countryCode="SI" value="Slovenia (+386)">SI (+386)</option>
                                                                <option data-countryCode="SB" value="Solomon Islands (+677)">SB (+677)</option>
                                                                <option data-countryCode="SO" value="Somalia (+252)">SO (+252)</option>
                                                                <option data-countryCode="ZA" value="South Africa (+27)">ZA (+27)</option>
                                                                <option data-countryCode="ES" value="Spain (+34)">ES (+34)</option>
                                                                <option data-countryCode="LK" value="Sri Lanka (+94)">LK (+94)</option>
                                                                <option data-countryCode="SH" value="St. Helena (+290)"><i class="fa fa-shekel" aria-hidden="true"></i> (+290)</option>
                                                                <option data-countryCode="KN" value="St. Kitts (+1869)">KN (+1869)</option>
                                                                <option data-countryCode="SC" value="St. Lucia (+1758)">SC (+1758)</option>
                                                                <option data-countryCode="SD" value="Sudan (+249)">SD (+249)</option>
                                                                <option data-countryCode="SR" value="Suriname (+597)">SR (+597)</option>
                                                                <option data-countryCode="SZ" value="Swaziland (+268)">SZ (+268)</option>
                                                                <option data-countryCode="SE" value="Sweden (+46)">SE (+46)</option>
                                                                <option data-countryCode="CH" value="Switzerland (+41)">CH (+41)</option>
                                                                <option data-countryCode="SI" value="Syria (+963)">SI (+963)</option>
                                                                <option data-countryCode="TW" value="Taiwan (+886)">TW (+886)</option>
                                                                <option data-countryCode="TJ" value="Tajikstan (+7)">TJ (+7)</option>
                                                                <option data-countryCode="TH" value="Thailand (+66)">TH (+66)</option>
                                                                <option data-countryCode="TG" value="Togo (+228)">TG (+228)</option>
                                                                <option data-countryCode="TO" value="Tonga (+676)">TO (+676)</option>
                                                                <option data-countryCode="TT" value="Trinidad Tobago">TT (+1868)</option>
                                                                <option data-countryCode="TN" value="Tunisia (+216)">TN (+216)</option>
                                                                <option data-countryCode="TR" value="Turkey (+90)">TR (+90)</option>
                                                                <option data-countryCode="TM" value="Turkmenistan (+7)">TM (+7)</option>
                                                                <option data-countryCode="TM" value="Turkmenistan (+993)">TM (+993)</option>
                                                                <option data-countryCode="TC" value="Turks Caicos Islands (+1649)">TC (+1649)</option>
                                                                <option data-countryCode="TV" value="Tuvalu (+688)">TV (+688)</option>
                                                                <option data-countryCode="UG" value="Uganda (+256)">UG (+256)</option>
                                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                <option data-countryCode="UA" value="Ukraine (+380)">UA (+380)</option>
                                                                <option data-countryCode="AE" value="United Arab Emirates (+971)">AE (+971)</option>
                                                                <option data-countryCode="UY" value="Uruguay (+598)">UY (+598)</option>
                                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                <option data-countryCode="UZ" value="Uzbekistan (+7)">UZ (+7)</option>
                                                                <option data-countryCode="VU" value="Vanuatu (+678)">VU (+678)</option>
                                                                <option data-countryCode="VA" value="Vatican City (+379)">VA (+379)</option>
                                                                <option data-countryCode="VE" value="Venezuela (+58)">VE (+58)</option>
                                                                <option data-countryCode="VN" value="Vietnam (+84)">VN (+84)</option>
                                                                <option data-countryCode="VG" value="Virgin Islands - British">VG (+1284)</option>
                                                                <option data-countryCode="VI" value="Virgin Islands - US (+1340)">VI (+1340)</option>
                                                                <option data-countryCode="WF" value="Wallis Futuna (+681)">WF (+681)</option>
                                                                <option data-countryCode="YE" value="Yemen (North)(+969)">YE(+969)</option>
                                                                <option data-countryCode="YE" value="Yemen (South)(+967)">YE(+967)</option>
                                                                <option data-countryCode="ZM" value="Zambia (+260)">ZM (+260)</option>
                                                                <option data-countryCode="ZW" value="Zimbabwe (+263)">ZW (+263)</option>
                                                        
                                                        </select>
                                                    <!-- <select name="countryCode" required class="  state_select select2-hidden-accessible ">
                                                        
                                                        <option value="">Country</option>
                                                        <option value="Afghanistan +93">Afghanistan +93</option>
                                                        <option value="Aland Islands +358">Aland Islands +358</option>
                                                        <option value="355">Albania +355</option>
                                                        <option value="213">Algeria +213</option>
                                                        <option value="1684">American Samoa +1684</option>
                                                        <option value="376">Andorra +376</option>
                                                        <option value="244">Angola +244</option>
                                                        <option value="1264">Anguilla +1264</option>
                                                        <option value="672">Antarctica +672</option>
                                                        <option value="1268">Antigua and Barbuda +1268</option>
                                                        <option value="54">Argentina +54</option>
                                                        <option value="374">Armenia +374</option>
                                                        <option value="297">Aruba +297</option>
                                                        <option value="61">Australia +61</option>
                                                        <option value="43">Austria +43</option>
                                                        <option value="994">Azerbaijan +994</option>
                                                        <option value="1242">Bahamas +1242</option>
                                                        <option value="973">Bahrain +973</option>
                                                        <option value="880">Bangladesh +880</option>
                                                        <option value="1246">Barbados +1246</option>
                                                        <option value="375">Belarus +375</option>
                                                        <option value="32">Belgium +32</option>
                                                        <option value="501">Belize +501</option>
                                                        <option value="229">Benin +229</option>
                                                        <option value="1441">Bermuda +1441</option>
                                                        <option value="975">Bhutan +975</option>
                                                        <option value="591">Bolivia +591</option>
                                                        <option value="599">Bonaire, Sint Eustatius and Saba +599</option>
                                                        <option value="387">Bosnia and Herzegovina +387</option>
                                                        <option value="267">Botswana +267</option>
                                                        <option value="55">Bouvet Island +55</option>
                                                        <option value="55">Brazil +55</option>
                                                        <option value="246">British Indian Ocean Territory +246</option>
                                                        <option value="673">Brunei Darussalam +673</option>
                                                        <option value="359">Bulgaria +359</option>
                                                        <option value="226">Burkina Faso +226</option>
                                                        <option value="257">Burundi +257</option>
                                                        <option value="855">Cambodia +855</option>
                                                        <option value="237">Cameroon +237</option>
                                                        <option value="1">Canada +1</option>
                                                        <option value="238">Cape Verde +238</option>
                                                        <option value="1345">Cayman Islands +1345</option>
                                                        <option value="236">Central African Republic +236</option>
                                                        <option value="235">Chad +235</option>
                                                        <option value="56">Chile +56</option>
                                                        <option value="86">China +86</option>
                                                        <option value="61">Christmas Island +61</option>
                                                        <option value="672">Cocos (Keeling) Islands +672</option>
                                                        <option value="57">Colombia +57</option>
                                                        <option value="269">Comoros +269</option>
                                                        <option value="242">Congo +242</option>
                                                        <option value="242">Congo, Democratic Republic of the Congo +242</option>
                                                        <option value="682">Cook Islands +682</option>
                                                        <option value="506">Costa Rica +506</option>
                                                        <option value="225">Cote D'Ivoire +225</option>
                                                        <option value="385">Croatia +385</option>
                                                        <option value="53">Cuba +53</option>
                                                        <option value="599">Curacao +599</option>
                                                        <option value="357">Cyprus +357</option>
                                                        <option value="420">Czech Republic +420</option>
                                                        <option value="45">Denmark +45</option>
                                                        <option value="253">Djibouti +253</option>
                                                        <option value="1767">Dominica +1767</option>
                                                        <option value="1809">Dominican Republic +1809</option>
                                                        <option value="593">Ecuador +593</option>
                                                        <option value="20">Egypt +20</option>
                                                        <option value="503">El Salvador +503</option>
                                                        <option value="240">Equatorial Guinea +240</option>
                                                        <option value="291">Eritrea +291</option>
                                                        <option value="372">Estonia +372</option>
                                                        <option value="251">Ethiopia +251</option>
                                                        <option value="500">Falkland Islands (Malvinas) +500</option>
                                                        <option value="298">Faroe Islands +298</option>
                                                        <option value="679">Fiji +679</option>
                                                        <option value="358">Finland +358</option>
                                                        <option value="33">France +33</option>
                                                        <option value="594">French Guiana +594</option>
                                                        <option value="689">French Polynesia +689</option>
                                                        <option value="262">French Southern Territories +262</option>
                                                        <option value="241">Gabon +241</option>
                                                        <option value="220">Gambia +220</option>
                                                        <option value="995">Georgia +995</option>
                                                        <option value="49">Germany +49</option>
                                                        <option value="233">Ghana +233</option>
                                                        <option value="350">Gibraltar +350</option>
                                                        <option value="30">Greece +30</option>
                                                        <option value="299">Greenland +299</option>
                                                        <option value="1473">Grenada +1473</option>
                                                        <option value="590">Guadeloupe +590</option>
                                                        <option value="1671">Guam +1671</option>
                                                        <option value="502">Guatemala +502</option>
                                                        <option value="44">Guernsey +44</option>
                                                        <option value="224">Guinea +224</option>
                                                        <option value="245">Guinea-Bissau +245</option>
                                                        <option value="592">Guyana +592</option>
                                                        <option value="509">Haiti +509</option>
                                                        <option value="39">Holy See (Vatican City State) +39</option>
                                                        <option value="504">Honduras +504</option>
                                                        <option value="852">Hong Kong +852</option>
                                                        <option value="36">Hungary +36</option>
                                                        <option value="354">Iceland +354</option>
                                                        <option value="91">India +91</option>
                                                        <option value="62">Indonesia +62</option>
                                                        <option value="98">Iran, Islamic Republic of +98</option>
                                                        <option value="964">Iraq +964</option>
                                                        <option value="353">Ireland +353</option>
                                                        <option value="44">Isle of Man +44</option>
                                                        <option value="972">Israel +972</option>
                                                        <option value="39">Italy +39</option>
                                                        <option value="1876">Jamaica +1876</option>
                                                        <option value="81">Japan +81</option>
                                                        <option value="44">Jersey +44</option>
                                                        <option value="962">Jordan +962</option>
                                                        <option value="7">Kazakhstan +7</option>
                                                        <option value="254">Kenya +254</option>
                                                        <option value="686">Kiribati +686</option>
                                                        <option value="850">Korea, Democratic People's Republic of +850</option>
                                                        <option value="82">Korea, Republic of +82</option>
                                                        <option value="383">Kosovo +383</option>
                                                        <option value="965">Kuwait +965</option>
                                                        <option value="996">Kyrgyzstan +996</option>
                                                        <option value="856">Lao People's Democratic Republic +856</option>
                                                        <option value="371">Latvia +371</option>
                                                        <option value="961">Lebanon +961</option>
                                                        <option value="266">Lesotho +266</option>
                                                        <option value="231">Liberia +231</option>
                                                        <option value="218">Libyan Arab Jamahiriya +218</option>
                                                        <option value="423">Liechtenstein +423</option>
                                                        <option value="370">Lithuania +370</option>
                                                        <option value="352">Luxembourg +352</option>
                                                        <option value="853">Macao +853</option>
                                                        <option value="389">Macedonia, the Former Yugoslav Republic of +389</option>
                                                        <option value="261">Madagascar +261</option>
                                                        <option value="265">Malawi +265</option>
                                                        <option value="60">Malaysia +60</option>
                                                        <option value="960">Maldives +960</option>
                                                        <option value="223">Mali +223</option>
                                                        <option value="356">Malta +356</option>
                                                        <option value="692">Marshall Islands +692</option>
                                                        <option value="596">Martinique +596</option>
                                                        <option value="222">Mauritania +222</option>
                                                        <option value="230">Mauritius +230</option>
                                                        <option value="262">Mayotte +262</option>
                                                        <option value="52">Mexico +52</option>
                                                        <option value="691">Micronesia, Federated States of +691</option>
                                                        <option value="373">Moldova, Republic of +373</option>
                                                        <option value="377">Monaco +377</option>
                                                        <option value="976">Mongolia +976</option>
                                                        <option value="382">Montenegro +382</option>
                                                        <option value="1664">Montserrat +1664</option>
                                                        <option value="212">Morocco +212</option>
                                                        <option value="258">Mozambique +258</option>
                                                        <option value="95">Myanmar +95</option>
                                                        <option value="264">Namibia +264</option>
                                                        <option value="674">Nauru +674</option>
                                                        <option value="977">Nepal +977</option>
                                                        <option value="31">Netherlands +31</option>
                                                        <option value="599">Netherlands Antilles +599</option>
                                                        <option value="687">New Caledonia +687</option>
                                                        <option value="64">New Zealand +64</option>
                                                        <option value="505">Nicaragua +505</option>
                                                        <option value="227">Niger +227</option>
                                                        <option value="234">Nigeria +234</option>
                                                        <option value="683">Niue +683</option>
                                                        <option value="672">Norfolk Island +672</option>
                                                        <option value="1670">Northern Mariana Islands +1670</option>
                                                        <option value="47">Norway +47</option>
                                                        <option value="968">Oman +968</option>
                                                        <option value="92">Pakistan +92</option>
                                                        <option value="680">Palau +680</option>
                                                        <option value="970">Palestinian Territory, Occupied +970</option>
                                                        <option value="507">Panama +507</option>
                                                        <option value="675">Papua New Guinea +675</option>
                                                        <option value="595">Paraguay +595</option>
                                                        <option value="51">Peru +51</option>
                                                        <option value="63">Philippines +63</option>
                                                        <option value="64">Pitcairn +64</option>
                                                        <option value="48">Poland +48</option>
                                                        <option value="351">Portugal +351</option>
                                                        <option value="1787">Puerto Rico +1787</option>
                                                        <option value="974">Qatar +974</option>
                                                        <option value="262">Reunion +262</option>
                                                        <option value="40">Romania +40</option>
                                                        <option value="7">Russian Federation +7</option>
                                                        <option value="250">Rwanda +250</option>
                                                        <option value="590">Saint Barthelemy +590</option>
                                                        <option value="290">Saint Helena +290</option>
                                                        <option value="1869">Saint Kitts and Nevis +1869</option>
                                                        <option value="1758">Saint Lucia +1758</option>
                                                        <option value="590">Saint Martin +590</option>
                                                        <option value="508">Saint Pierre and Miquelon +508</option>
                                                        <option value="1784">Saint Vincent and the Grenadines +1784</option>
                                                        <option value="684">Samoa +684</option>
                                                        <option value="378">San Marino +378</option>
                                                        <option value="239">Sao Tome and Principe +239</option>
                                                        <option value="966">Saudi Arabia +966</option>
                                                        <option value="221">Senegal +221</option>
                                                        <option value="381">Serbia +381</option>
                                                        <option value="381">Serbia and Montenegro +381</option>
                                                        <option value="248">Seychelles +248</option>
                                                        <option value="232">Sierra Leone +232</option>
                                                        <option value="65">Singapore +65</option>
                                                        <option value="721">Sint Maarten +721</option>
                                                        <option value="421">Slovakia +421</option>
                                                        <option value="386">Slovenia +386</option>
                                                        <option value="677">Solomon Islands +677</option>
                                                        <option value="252">Somalia +252</option>
                                                        <option value="27">South Africa +27</option>
                                                        <option value="500">South Georgia and the South Sandwich Islands +500</option>
                                                        <option value="211">South Sudan +211</option>
                                                        <option value="34">Spain +34</option>
                                                        <option value="94">Sri Lanka +94</option>
                                                        <option value="249">Sudan +249</option>
                                                        <option value="597">Suriname +597</option>
                                                        <option value="47">Svalbard and Jan Mayen +47</option>
                                                        <option value="268">Swaziland +268</option>
                                                        <option value="46">Sweden +46</option>
                                                        <option value="41">Switzerland +41</option>
                                                        <option value="963">Syrian Arab Republic +963</option>
                                                        <option value="886">Taiwan, Province of China +886</option>
                                                        <option value="992">Tajikistan +992</option>
                                                        <option value="255">Tanzania, United Republic of +255</option>
                                                        <option value="66">Thailand +66</option>
                                                        <option value="670">Timor-Leste +670</option>
                                                        <option value="228">Togo +228</option>
                                                        <option value="690">Tokelau +690</option>
                                                        <option value="676">Tonga +676</option>
                                                        <option value="1868">Trinidad and Tobago +1868</option>
                                                        <option value="216">Tunisia +216</option>
                                                        <option value="90">Turkey +90</option>
                                                        <option value="7370">Turkmenistan +7370</option>
                                                        <option value="1649">Turks and Caicos Islands +1649</option>
                                                        <option value="688">Tuvalu +688</option>
                                                        <option value="256">Uganda +256</option>
                                                        <option value="380">Ukraine +380</option>
                                                        <option value="971">United Arab Emirates +971</option>
                                                        <option value="44">United Kingdom +44</option>
                                                        <option value="1">United States +1</option>
                                                        <option value="1">United States Minor Outlying Islands +1</option>
                                                        <option value="598">Uruguay +598</option>
                                                        <option value="998">Uzbekistan +998</option>
                                                        <option value="678">Vanuatu +678</option>
                                                        <option value="58">Venezuela +58</option>
                                                        <option value="84">Viet Nam +84</option>
                                                        <option value="1284">Virgin Islands, British +1284</option>
                                                        <option value="1340">Virgin Islands, U.s. +1340</option>
                                                        <option value="681">Wallis and Futuna +681</option>
                                                        <option value="212">Western Sahara +212</option>
                                                        <option value="967">Yemen +967</option>
                                                        <option value="260">Zambia +260</option>
                                                        <option value="263">Zimbabwe +263</option>

                                                    </select> -->
                                                </div>
                                                <div class="col-lg-8 col-7 " style="padding-left: 0px;">
                                                    <div class="form-group has-error">
                                                        <input type="text" name="contactNumber" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Company Name <strong style="color: red;">*</strong></label>
                                                    <input type="text" name="companyName" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error" style="display: block;">
                                                    <label class="fw-bolder pb-1"> Select Service <strong style="color: red;">*</strong></label>
                                                    <input type="text" id="inServiceType" style="display: none;" name="txtServiceType" >
                                                    <select name="serviceType" id="serviceType" onchange="selService()" required class="state_select select2-hidden-accessible">
                                                        <option value="">Select Service</option>
                                                        <option value="Implementa  tion">Implementation</option>
                                                        <option value="Consulting">Consulting</option>
                                                        <option value="Data Migration">Data Migration</option>
                                                        <option value="Contract Staffing">Contract Staffing</option>
                                                        <option value="Product Development">Product Development</option>
                                                        <option value="Managed Services">Managed Services</option>
                                                        <option value="Software Development">Software Development</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">
                                                        Message</label>
                                                    <textarea type="text" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12 mb-3 mt-2">
                                                <button type="submit" name="submit" class="border border-none py-1 px-2 text-white" style="background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);">
                                                    <p style="display: inline; padding: 5px;">SUBMIT</p><img style="padding-left: 8px; padding-bottom:3px; padding-top:0px; height:18px;" src="assets/images/service_icon/Right_arrow.png" alt="">
                                                </button>
                                            </div>
                                        </form>
                                        </div>
                                        
                                    </div>
                                    <p class="description text-white pt-3">*Get a 15% discount on all our services to a <br>maximum value of $500.</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_100"></div>
                    <!--===============spacing==============-->
                </section>

                <section class="desktopOfferForm">
                    <div class="pd_top_60"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6" style="text-align: center; padding-top: 110px;">
                                <img src="assets/images/service_icon/Dream-Force-logo1.png" style="height:73px;" alt="" class="img-fluid">
                                <p class="description" style="position: absolute; top: 638px; left: 150px;text-align:left;">*Get a 15% discount on all our services to a <br>maximum value of $500.</p>
                            </div>
                            <div class="col-lg-6 p-3 row" style="height: 677px;">
                                <div class="col-lg-10 col-12" style="background-image: url('assets/images/service_icon/image.png');">

                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-6 row" style="position:absolute; margin-top:210px; background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%) ;">
                                <div class="col-lg-5">
                                    <div class="image_boxes style_seven">
                                        <div class="pt-5  pb-5 float-end">
                                            <span style="color: white; font-weight: 500; font-size: 40px;">
                                                <br>
                                                Get $500 OFF on all <br>our Services*
                                                <br>
                                                <br>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12  row" style="position:absolute;margin-top: 49px;margin-left: 31px; ">
                                <div class="col-lg-6">

                                </div>

                                <div class="col-lg-6 justify-content-center align-items-center">
                                    <div class="row col-lg-9  bg-white p-2">
                                        <div class="col-lg-12 col-12">
                                            <div>
                                                <h2 class="h2SetWhite text-black text-center">Dreamforce Offers</h2>
                                            </div>
                                        </div>
                                        <form class="g-4" action="" method="post" enctype="multipart/form-data">
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Name<strong style="color: red;">*</strong> </label>
                                                    <input type="text" name="name" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Email<strong style="color: red;">*</strong></label>
                                                    <input type="email" name="email" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12 row border-0" style="padding: 0px 0px;">
                                                <label class="fw-bolder" style="padding-left: 15px;"> Contact Number <strong style="color: red;">*</strong></label>
                                                <div class="col-lg-4 col-5 " style="padding-right: 0px;">
                                                <select name="countryCode" required class="state_select select2-hidden-accessible">
                                                                <option data-countryCode="US" value="USA (+1)" Selected>USA (+1)</option>
                                                                <option data-countryCode="GB" value="UK (+44)" >UK (+44)</option>
                                                                <option data-countryCode="Andorra" value="Andorra (+376)">AD (+376)</option>
                                                                <option data-countryCode="AO" value="Angola (+244)">AO (+244)</option>
                                                                <option data-countryCode="AI" value="Anguilla (+1264)">AI (+1264)</option>
                                                                <option data-countryCode="AG" value="Antigua Barbuda (+1268)">AG (+1268)</option>
                                                                <option data-countryCode="AR" value="Argentina (+54)">AR (+54)</option>
                                                                <option data-countryCode="AM" value="Armenia (+374)">AM (+374)</option>
                                                                <option data-countryCode="AW" value="Aruba (+297)">AW (+297)</option>
                                                                <option data-countryCode="AU" value="Australia (+61)">AU (+61)</option>
                                                                <option data-countryCode="AT" value="Austria (+43)">AT (+43)</option>
                                                                <option data-countryCode="AZ" value="Azerbaijan (+994)">AZ (+994)</option>
                                                                <option data-countryCode="BS" value="Bahamas (+1242)">BS (+1242)</option>
                                                                <option data-countryCode="BH" value="Bahrain (+973)">BH (+973)</option>
                                                                <option data-countryCode="BD" value="Bangladesh (+880)">BD (+880)</option>
                                                                <option data-countryCode="BB" value="Barbados (+1246)">BB (+1246)</option>
                                                                <option data-countryCode="BY" value="Belarus (+375)">BY (+375)</option>
                                                                <option data-countryCode="BE" value="Belgium (+32)">BE (+32)</option>
                                                                <option data-countryCode="BZ" value="Belize (+501)">BZ (+501)</option>
                                                                <option data-countryCode="BJ" value="Benin (+229)">BJ (+229)</option>
                                                                <option data-countryCode="BM" value="Bermuda (+1441)">BM (+1441)</option>
                                                                <option data-countryCode="BT" value="Bhutan (+975)">BT (+975)</option>
                                                                <option data-countryCode="BO" value="Bolivia (+591)">BO (+591)</option>
                                                                <option data-countryCode="BA" value="Bosnia Herzegovina (+387)">BA (+387)</option>
                                                                <option data-countryCode="BW" value="Botswana (+267)">BW (+267)</option>
                                                                <option data-countryCode="BR" value="Brazil (+55)">BR (+55)</option>
                                                                <option data-countryCode="BN" value="Brunei (+673)">BN (+673)</option>
                                                                <option data-countryCode="BG" value="Bulgaria (+359)">BG (+359)</option>
                                                                <option data-countryCode="BF" value="Burkina Faso (+226)">BF (+226)</option>
                                                                <option data-countryCode="BI" value="Burundi (+257)">BI (+257)</option>
                                                                <option data-countryCode="KH" value="Cambodia (+855)">KH (+855)</option>
                                                                <option data-countryCode="CM" value="Cameroon (+237)">CM (+237)</option>
                                                                <option data-countryCode="CA" value="Canada (+1)">CA (+1)</option>
                                                                <option data-countryCode="CV" value="Cape Verde Islands (+238)">CV (+238)</option>
                                                                <option data-countryCode="KY" value="Cayman Islands (+1345)">KY (+1345)</option>
                                                                <option data-countryCode="CF" value="Central African Republic (+236)">CF (+236)</option>
                                                                <option data-countryCode="CL" value="Chile (+56)">CL (+56)</option>
                                                                <option data-countryCode="CN" value="China (+86)">CN (+86)</option>
                                                                <option data-countryCode="CO" value="Colombia (+57)">CO (+57)</option>
                                                                <option data-countryCode="KM" value="Comoros (+269)">KM (+269)</option>
                                                                <option data-countryCode="CG" value="Congo (+242)">CG (+242)</option>
                                                                <option data-countryCode="CK" value="Cook Islands (+682)">CK (+682)</option>
                                                                <option data-countryCode="CR" value="Costa Rica (+506)">CR (+506)</option>
                                                                <option data-countryCode="HR" value="Croatia (+385)">HR (+385)</option>
                                                                <option data-countryCode="CU" value="Cuba (+53)">CU (+53)</option>
                                                                <option data-countryCode="CY" value="Cyprus North (+90392)">CY (+90392)</option>
                                                                <option data-countryCode="CY" value="Cyprus South (+357)">CY (+357)</option>
                                                                <option data-countryCode="CZ" value="Czech Republic (+42)">CZ (+42)</option>
                                                                <option data-countryCode="DK" value="Denmark (+45)">DK (+45)</option>
                                                                <option data-countryCode="DJ" value="Djibouti (+253)">DJ (+253)</option>
                                                                <option data-countryCode="DM" value="Dominica (+1809)">DM (+1809)</option>
                                                                <option data-countryCode="DO" value="Dominican Republic (+1809)"> (+1809)</option>
                                                                <option data-countryCode="EC" value="Ecuador (+593)">EC (+593)</option>
                                                                <option data-countryCode="EG" value="Egypt (+20)">EG (+20)</option>
                                                                <option data-countryCode="SV" value="El Salvador (+503)">SV (+503)</option>
                                                                <option data-countryCode="GQ" value="Equatorial Guinea (+240)">GQ (+240)</option>
                                                                <option data-countryCode="ER" value="Eritrea (+291)">ER (+291)</option>
                                                                <option data-countryCode="EE" value="Estonia (+372)">EE (+372)</option>
                                                                <option data-countryCode="ET" value="Ethiopia (+251)">ET (+251)</option>
                                                                <option data-countryCode="FK" value="Falkland Islands (+500)">FK (+500)</option>
                                                                <option data-countryCode="FO" value="Faroe Islands (+298)">FO (+298)</option>
                                                                <option data-countryCode="FJ" value="Fiji (+679)">FJ (+679)</option>
                                                                <option data-countryCode="FI" value="Finland (+358)">FI (+358)</option>
                                                                <option data-countryCode="FR" value="France (+33)">FR (+33)</option>
                                                                <option data-countryCode="GF" value="French Guiana (+594)">FG (+594)</option>
                                                                <option data-countryCode="PF" value="French Polynesia (+689)">PF (+689)</option>
                                                                <option data-countryCode="GA" value="Gabon (+241)">GA (+241)</option>
                                                                <option data-countryCode="GM" value="Gambia (+220)">GN (+220)</option>
                                                                <option data-countryCode="GE" value="Georgia (+7880)">GE (+7880)</option>
                                                                <option data-countryCode="DE" value="Germany (+49)">DE (+49)</option>
                                                                <option data-countryCode="GH" value="Ghana (+233)">GH (+233)</option>
                                                                <option data-countryCode="GI" value="Gibraltar (+350)">GI (+350)</option>
                                                                <option data-countryCode="GR" value="Greece (+30)">GR (+30)</option>
                                                                <option data-countryCode="GL" value="Greenland (+299)">GL (+299)</option>
                                                                <option data-countryCode="GD" value="Grenada (+1473)">GD (+1473)</option>
                                                                <option data-countryCode="GP" value="Guadeloupe (+590)">GP (+590)</option>
                                                                <option data-countryCode="GU" value="Guam (+671)">GU (+671)</option>
                                                                <option data-countryCode="GT" value="Guatemala (+502)">GT (+502)</option>
                                                                <option data-countryCode="GN" value="Guinea (+224)">GN (+224)</option>
                                                                <option data-countryCode="GW" value="Guinea - Bissau (+245)">GW - Bissau (+245)</option>
                                                                <option data-countryCode="GY" value="Guyana (+592)">GY (+592)</option>
                                                                <option data-countryCode="HT" value="Haiti (+509)">HT (+509)</option>
                                                                <option data-countryCode="HN" value="Honduras (+504)">HN (+504)</option>
                                                                <option data-countryCode="HK" value="Hong Kong (+852)">HK (+852)</option>
                                                                <option data-countryCode="HU" value="Hungary (+36)">HU (+36)</option>
                                                                <option data-countryCode="IS" value="Iceland (+354)">IS (+354)</option>
                                                                <option data-countryCode="BH" value="Bharat (+91)">BH (+91)</option>
                                                                <option data-countryCode="ID" value="Indonesia (+62)">ID (+62)</option>
                                                                <option data-countryCode="IR" value="Iran (+98)">IR (+98)</option>
                                                                <option data-countryCode="IQ" value="Iraq (+964)">IQ (+964)</option>
                                                                <option data-countryCode="IE" value="Ireland (+353)">IE (+353)</option>
                                                                <option data-countryCode="IL" value="Israel (+972)">IL (+972)</option>
                                                                <option data-countryCode="IT" value="Italy (+39)">IT (+39)</option>
                                                                <option data-countryCode="JM" value="Jamaica (+1876)">JM (+1876)</option>
                                                                <option data-countryCode="JP" value="Japan (+81)">JP (+81)</option>
                                                                <option data-countryCode="JO" value="Jordan (+962)">JO (+962)</option>
                                                                <option data-countryCode="KZ" value="Kazakhstan (+7)">KZ (+7)</option>
                                                                <option data-countryCode="KE" value="Kenya (+254)">KE (+254)</option>
                                                                <option data-countryCode="KI" value="Kiribati (+686)">KI (+686)</option>
                                                                <option data-countryCode="KP" value="Korea North (+850)">KP (+850)</option>
                                                                <option data-countryCode="KR" value="Korea South (+82)">KR (+82)</option>
                                                                <option data-countryCode="KW" value="Kuwait (+965)">KW (+965)</option>
                                                                <option data-countryCode="KG" value="Kyrgyzstan (+996)">KG (+996)</option>
                                                                <option data-countryCode="LA" value="Laos (+856)">LA (+856)</option>
                                                                <option data-countryCode="LV" value="Latvia (+371)">LV (+371)</option>
                                                                <option data-countryCode="LB" value="Lebanon (+961)">LB (+961)</option>
                                                                <option data-countryCode="LR" value="Liberia (+231)">LR (+231)</option>
                                                                <option data-countryCode="LY" value="Libya (+218)">LY (+218)</option>
                                                                <option data-countryCode="LI" value="Liechtenstein (+417)">LI (+417)</option>
                                                                <option data-countryCode="LT" value="Lithuania (+370)">LT (+370)</option>
                                                                <option data-countryCode="LU" value="Luxembourg (+352)">LU (+352)</option>
                                                                <option data-countryCode="MO" value="Macao (+853)">MO (+853)</option>
                                                                <option data-countryCode="MK" value="Macedonia (+389)">MK (+389)</option>
                                                                <option data-countryCode="MG" value="Madagascar (+261)">MG (+261)</option>
                                                                <option data-countryCode="MW" value="Malawi (+265)">MW (+265)</option>
                                                                <option data-countryCode="MY" value="Malaysia (+60)">MY (+60)</option>
                                                                <option data-countryCode="MV" value="Maldives (+960)">MV (+960)</option>
                                                                <option data-countryCode="ML" value="Mali (+223)">ML (+223)</option>
                                                                <option data-countryCode="MT" value="Malta (+356)">MT (+356)</option>
                                                                <option data-countryCode="MH" value="Marshall Islands (+692)">MH (+692)</option>
                                                                <option data-countryCode="MQ" value="Martinique (+596)">MQ (+596)</option>
                                                                <option data-countryCode="MR" value="Mauritania (+222)">MR (+222)</option>
                                                                <option data-countryCode="YT" value="Mayotte (+269)">YT (+269)</option>
                                                                <option data-countryCode="MX" value="Mexico (+52)">MX (+52)</option>
                                                                <option data-countryCode="FM" value="Micronesia (+691)">FM (+691)</option>
                                                                <option data-countryCode="MD" value="Moldova (+373)">MD (+373)</option>
                                                                <option data-countryCode="MC" value="Monaco (+377)">MC (+377)</option>
                                                                <option data-countryCode="MN" value="Mongolia (+976)">MN (+976)</option>
                                                                <option data-countryCode="MS" value="Montserrat (+1664)">MS (+1664)</option>
                                                                <option data-countryCode="MA" value="Morocco (+212)">MA (+212)</option>
                                                                <option data-countryCode="MZ" value="Mozambique (+258)">MZ (+258)</option>
                                                                <option data-countryCode="MN" value="Myanmar (+95)">MN (+95)</option>
                                                                <option data-countryCode="NA" value="Namibia (+264)">NA (+264)</option>
                                                                <option data-countryCode="NR" value="Nauru (+674)">NR (+674)</option>
                                                                <option data-countryCode="NP" value="Nepal (+977)">NP (+977)</option>
                                                                <option data-countryCode="NL" value="Netherlands (+31)">NL (+31)</option>
                                                                <option data-countryCode="NC" value="New Caledonia (+687)">NC (+687)</option>
                                                                <option data-countryCode="NZ" value="New Zealand (+64)">NZ (+64)</option>
                                                                <option data-countryCode="NI" value="Nicaragua (+505)">NI (+505)</option>
                                                                <option data-countryCode="NE" value="Niger (+227)">NE (+227)</option>
                                                                <option data-countryCode="NG" value="Nigeria (+234)">NG (+234)</option>
                                                                <option data-countryCode="NU" value="Niue (+683)">NU (+683)</option>
                                                                <option data-countryCode="NF" value="Norfolk Islands (+672)">NF (+672)</option>
                                                                <option data-countryCode="NP" value="Northern Marianas (+670)">NP (+670)</option>
                                                                <option data-countryCode="NO" value="Norway (+47)">NO (+47)</option>
                                                                <option data-countryCode="OM" value="Oman (+968)">OM (+968)</option>
                                                                <option data-countryCode="PW" value="Palau (+680)">PW (+680)</option>
                                                                <option data-countryCode="PA" value="Panama (+507)">PA (+507)</option>
                                                                <option data-countryCode="PG" value="Papua New Guinea (+675)">PG (+675)</option>
                                                                <option data-countryCode="PY" value="Paraguay (+595)">PY (+595)</option>
                                                                <option data-countryCode="PE" value="Peru (+51)">PE (+51)</option>
                                                                <option data-countryCode="PH" value="Philippines (+63)">PH (+63)</option>
                                                                <option data-countryCode="PL" value="Poland (+48)">PL (+48)</option>
                                                                <option data-countryCode="PT" value="Portugal (+351)">PT (+351)</option>
                                                                <option data-countryCode="PR" value="Puerto Rico (+1787)">PR (+1787)</option>
                                                                <option data-countryCode="QA" value="Qatar (+974)">QA (+974)</option>
                                                                <option data-countryCode="RE" value="Reunion (+262)">RE (+262)</option>
                                                                <option data-countryCode="RO" value="Romania (+40)">RO (+40)</option>
                                                                <option data-countryCode="RU" value="Russia (+7)">RU (+7)</option>
                                                                <option data-countryCode="RW" value="Rwanda (+250)">RW (+250)</option>
                                                                <option data-countryCode="SM" value="San Marino (+378)">col-sm-6 (+378)</option>
                                                                <option data-countryCode="ST" value="Sao Tome Principe (+239)">ST (+239)</option>
                                                                <option data-countryCode="SA" value="Saudi Arabia (+966)">Saudi (+966)</option>
                                                                <option data-countryCode="SN" value="Senegal (+221)">SN (+221)</option>
                                                                <option data-countryCode="CS" value="Serbia (+381)">CS (+381)</option>
                                                                <option data-countryCode="SC" value="Seychelles (+248)">SC (+248)</option>
                                                                <option data-countryCode="SL" value="Sierra Leone (+232)">SL (+232)</option>
                                                                <option data-countryCode="SG" value="Singapore (+65)">SG (+65)</option>
                                                                <option data-countryCode="SK" value="Slovak Republic (+421)">SK (+421)</option>
                                                                <option data-countryCode="SI" value="Slovenia (+386)">SI (+386)</option>
                                                                <option data-countryCode="SB" value="Solomon Islands (+677)">SB (+677)</option>
                                                                <option data-countryCode="SO" value="Somalia (+252)">SO (+252)</option>
                                                                <option data-countryCode="ZA" value="South Africa (+27)">ZA (+27)</option>
                                                                <option data-countryCode="ES" value="Spain (+34)">ES (+34)</option>
                                                                <option data-countryCode="LK" value="Sri Lanka (+94)">LK (+94)</option>
                                                                <option data-countryCode="SH" value="St. Helena (+290)"><i class="fa fa-shekel" aria-hidden="true"></i> (+290)</option>
                                                                <option data-countryCode="KN" value="St. Kitts (+1869)">KN (+1869)</option>
                                                                <option data-countryCode="SC" value="St. Lucia (+1758)">SC (+1758)</option>
                                                                <option data-countryCode="SD" value="Sudan (+249)">SD (+249)</option>
                                                                <option data-countryCode="SR" value="Suriname (+597)">SR (+597)</option>
                                                                <option data-countryCode="SZ" value="Swaziland (+268)">SZ (+268)</option>
                                                                <option data-countryCode="SE" value="Sweden (+46)">SE (+46)</option>
                                                                <option data-countryCode="CH" value="Switzerland (+41)">CH (+41)</option>
                                                                <option data-countryCode="SI" value="Syria (+963)">SI (+963)</option>
                                                                <option data-countryCode="TW" value="Taiwan (+886)">TW (+886)</option>
                                                                <option data-countryCode="TJ" value="Tajikstan (+7)">TJ (+7)</option>
                                                                <option data-countryCode="TH" value="Thailand (+66)">TH (+66)</option>
                                                                <option data-countryCode="TG" value="Togo (+228)">TG (+228)</option>
                                                                <option data-countryCode="TO" value="Tonga (+676)">TO (+676)</option>
                                                                <option data-countryCode="TT" value="Trinidad Tobago">TT (+1868)</option>
                                                                <option data-countryCode="TN" value="Tunisia (+216)">TN (+216)</option>
                                                                <option data-countryCode="TR" value="Turkey (+90)">TR (+90)</option>
                                                                <option data-countryCode="TM" value="Turkmenistan (+7)">TM (+7)</option>
                                                                <option data-countryCode="TM" value="Turkmenistan (+993)">TM (+993)</option>
                                                                <option data-countryCode="TC" value="Turks Caicos Islands (+1649)">TC (+1649)</option>
                                                                <option data-countryCode="TV" value="Tuvalu (+688)">TV (+688)</option>
                                                                <option data-countryCode="UG" value="Uganda (+256)">UG (+256)</option>
                                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                                <option data-countryCode="UA" value="Ukraine (+380)">UA (+380)</option>
                                                                <option data-countryCode="AE" value="United Arab Emirates (+971)">AE (+971)</option>
                                                                <option data-countryCode="UY" value="Uruguay (+598)">UY (+598)</option>
                                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                                <option data-countryCode="UZ" value="Uzbekistan (+7)">UZ (+7)</option>
                                                                <option data-countryCode="VU" value="Vanuatu (+678)">VU (+678)</option>
                                                                <option data-countryCode="VA" value="Vatican City (+379)">VA (+379)</option>
                                                                <option data-countryCode="VE" value="Venezuela (+58)">VE (+58)</option>
                                                                <option data-countryCode="VN" value="Vietnam (+84)">VN (+84)</option>
                                                                <option data-countryCode="VG" value="Virgin Islands - British">VG (+1284)</option>
                                                                <option data-countryCode="VI" value="Virgin Islands - US (+1340)">VI (+1340)</option>
                                                                <option data-countryCode="WF" value="Wallis Futuna (+681)">WF (+681)</option>
                                                                <option data-countryCode="YE" value="Yemen (North)(+969)">YE(+969)</option>
                                                                <option data-countryCode="YE" value="Yemen (South)(+967)">YE(+967)</option>
                                                                <option data-countryCode="ZM" value="Zambia (+260)">ZM (+260)</option>
                                                                <option data-countryCode="ZW" value="Zimbabwe (+263)">ZW (+263)</option>
                                                        
                                                        </select>
                                                </div>
                                                <div class="col-lg-8 col-7 " style="padding-left: 0px;">
                                                    <div class="form-group has-error">
                                                        <input type="text" name="contactNumber" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">Company Name <strong style="color: red;">*</strong></label>
                                                    <input type="text" name="companyName" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error" style="display: block;">
                                                    <label class="fw-bolder pb-1"> Select Service <strong style="color: red;">*</strong></label>
                                                    <input type="text" id="inServiceType1" style="display: none;" name="txtServiceType" >
                                                    <select name="serviceType" id="serviceType1" onchange="selService()" required class="state_select select2-hidden-accessible">
                                                        <option value="">Select Service you are looking for</option>
                                                        <option value="Implementa  tion">Implementation</option>
                                                        <option value="Consulting">Consulting</option>
                                                        <option value="Data Migration">Data Migration</option>
                                                        <option value="Contract Staffing">Contract Staffing</option>
                                                        <option value="Product Development">Product Development</option>
                                                        <option value="Managed Services">Managed Services</option>
                                                        <option value="Software Development">Software Development</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12">
                                                <div class="form-group has-error">
                                                    <label class="fw-bolder pb-1">
                                                        Message</label>
                                                    <textarea type="text" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-12 mb-3 mt-2">
                                            <button type="submit" name="submit" class="border border-none py-1 px-2 text-white" style="background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);">
                                                    <p style="display: inline; padding: 5px;">SUBMIT</p><img style="padding-left: 8px; padding-bottom:3px; padding-top:0px; height:18px;" src="assets/images/service_icon/Right_arrow.png" alt="">
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="col-lg-12 bg-black float-end">
                                <div style="text-align: right;">
                                <p>
                                fvnjkvbjkfn j
                                </p>
                                </div>
                               
                            </div> -->
                        </div>

                    </div>
                    <div class="pd_bottom_60"></div>
                </section>
                <!---client-end---->

                <!---about section--->
                <section class="client-brand-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title_all_box style_three text-center dark_color">
                                    <div class="title_sections three">
                                        <h3>Our Expert Services</h3>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_50"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                        </div>
                        <div class="row  justify-content-center">
                            <div class="col-lg-9 row justify-content-center">
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box " style="border:1px solid #29C1B2;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/Implementation Services.png" alt="Implementation Services" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Implementation</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #E26E8C;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/Consulting 5.png" alt="Consulting" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Consulting</h6>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #B163C9;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/Data Migration (On Premise to Cloud).png" alt="Data Migration (On Premise to Cloud)" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Data Migration</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #8C5EC6;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/Staff Augmentation 13.png" alt="Staff Augmentation" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Contract Staffing</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #00A1E0;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/app-exchange.png" alt="app-exchange" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Product Development</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #DD7A01;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/MaintenanceSupport & Service.png" alt="Managed Services" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Managed Services</h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6 mt-4 grid_box">
                                    <div class="counter-block style_one count-box" style="border:1px solid #29C1B2;">
                                        <div class="content_box text-center">
                                            <div class="icon align-item-center">
                                                <img src="assets/images/service_icon/Custom sw dev.png" alt="Software Development" class="img-fluid  height_50" />
                                            </div>
                                        </div>
                                        <div class="content_box text-center mt-2">
                                            <h6>Software Development</h6>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_80"></div>
                    <!--===============spacing==============-->
                </section>


                <!---Testimonial---->
                <section class="testimonial-section bg_light_1">
                    <!--===============spacing==============-->
                    <div class="pd_top_50"></div>
                    <!--===============spacing==============-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title_all_box style_three text-center dark_color">
                                    <div class="title_sections three pb-4">
                                        <h3>CLIENT TESTIMONIALS</h3>

                                        <h5 style="margin-top:20px;">Experiences that Speak for Themselves</h5>
                                    </div>
                                    <!--===============spacing==============-->
                                    <div class="pd_bottom_30"></div>
                                    <!--===============spacing==============-->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="testimonial_sec light_color style_four">
                                    <div class="swiper-container" data-swiper='{
                                 "autoplay": {
                                   "delay": 6000
                                 },
                                 "freeMode": false,
                                 "loop": true,
                                 "speed": 1000,
                                 "centeredSlides": false,
                                 "slidesPerView": 2,
                                 "spaceBetween": 30,
                                 "pagination": {
                                   "el": ".swiper-pagination",
                                   "clickable": true
                                 },
                                  
                                 "breakpoints": {
                                    "1200": {
                                       "slidesPerView": 3
                                    },
                                    "1024": {
                                     "slidesPerView": 3 
                                    },
                                   "768": {
                                     "slidesPerView": 2 
                                   },
                                   "576": {
                                     "slidesPerView": 1 
                                   },
                                   "0": {
                                     "slidesPerView": 1 
                                   }
                                 }
                               }'>
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial_box" style="background-color: white; padding:35px; border-top:6px solid #29C1B2;">
                                                    <div class="box_inner not_ovelay">
                                                        <div class="rating text-center">
                                                            <h6>Really appriciate their hardwork and work quality</h6>
                                                        </div>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, Experiences that Speak for Themselves adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <div class="client_bx" style="padding-top:10px;">
                                                            <div class="image_box" style="border-radius: 0px;">
                                                                <img src="assets/images/testi-3.png" alt="image">
                                                            </div>
                                                            <div class="left_s">
                                                                <h2 class="title">Tommy Reaves</h2>
                                                                <h6 class="from">President</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial_box" style="background-color: white; padding:35px; border-top:6px solid #E26E8C;">
                                                    <div class="box_inner not_ovelay">
                                                        <div class="rating text-center">
                                                            <h6>Really appriciate their hardwork and work quality</h6>
                                                        </div>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, Experiences that Speak for Themselves adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <div class="client_bx" style="padding-top:10px;">
                                                            <div class="image_box" style="border-radius: 0px;">
                                                                <img src="assets/images/testi-3.png" alt="image">
                                                            </div>
                                                            <div class="left_s">
                                                                <h2 class="title">Tommy Reaves</h2>
                                                                <h6 class="from">President</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial_box" style="background-color: white; padding:35px; border-top:6px solid #DD7A01;">
                                                    <div class="box_inner not_ovelay">
                                                        <div class="rating text-center">
                                                            <h6>Really appriciate their hardwork and work quality</h6>
                                                        </div>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, Experiences that Speak for Themselves adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <div class="client_bx" style="padding-top:10px;">
                                                            <div class="image_box" style="border-radius: 0px;">
                                                                <img src="assets/images/testi-3.png" alt="image">
                                                            </div>
                                                            <div class="left_s">
                                                                <h2 class="title">Tommy Reaves</h2>
                                                                <h6 class="from">President</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial_box" style="background-color: white; padding:35px; border-top:6px solid #E26E8C;">
                                                    <div class="box_inner not_ovelay">
                                                        <div class="rating text-center">
                                                            <h6>Really appriciate their hardwork and work quality</h6>
                                                        </div>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, Experiences that Speak for Themselves adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <div class="client_bx" style="padding-top:10px;">
                                                            <div class="image_box" style="border-radius: 0px;">
                                                                <img src="assets/images/testi-3.png" alt="image">
                                                            </div>
                                                            <div class="left_s">
                                                                <h2 class="title">Tommy Reaves</h2>
                                                                <h6 class="from">President</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial_box" style="background-color: white; padding:35px; border-top:6px solid #8C5EC6;">
                                                    <div class="box_inner not_ovelay">
                                                        <div class="rating text-center">
                                                            <h6>Really appriciate their hardwork and work quality</h6>
                                                        </div>
                                                        <p class="description">
                                                            Lorem ipsum dolor sit amet, Experiences that Speak for Themselves adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.
                                                        </p>
                                                        <div class="client_bx" style="padding-top:10px;">
                                                            <div class="image_box" style="border-radius: 0px;">
                                                                <img src="assets/images/testi-3.png" alt="image">
                                                            </div>
                                                            <div class="left_s">
                                                                <h2 class="title">Tommy Reaves</h2>
                                                                <h6 class="from">President</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_80"></div>
                    <!--===============spacing==============-->
                </section>
                <!---Testimonial---->


            </div>
            <!--===============PAGE CONTENT ==============-->
            <!--===============PAGE CONTENT ==============-->
        </div>

       <?php include('include/footer.php') ?>
</body>

</html>