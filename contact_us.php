<?php include("admin/connection.php"); 
include('include/header.php'); 
include("mail.php");
?>
<head>
    <title>Contact Us-CRM Landing</title>
</head>
<?php
$q='select * from contact_us';
$q_run=mysqli_query($conn,$q);
$row=mysqli_fetch_row($q_run);
?>

<style>
    
  .group {
    position: relative;
  }

  .input1 {
    font-size: 16px;
    padding: 10px 10px 10px 5px;
    display: block;
    width: 185px;
    border: none;
    border-bottom: 1px solid #6c6c6c;
    background: transparent;
    color: black;
  }

  .input1:focus {
    outline: none;
  }

  label,.phone_down {
    color: #999999;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 5px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }

  .input1:focus~label,
  .input1:valid~label,.phone_up {
    top: -20px;
    font-size: 14px;
    color: #123268;
  }

  .bar {
    position: relative;
    display: block;
    width: 100%;
  }

  .bar:before,
  .bar:after {
    content: "";
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: #123268;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }

  .bar:before {
    left: 50%;
  }

  .bar:after {
    right: 50%;
  }

  .input1:focus~.bar:before,
  .input1:focus~.bar:after {
    width: 50%;
  }

  .highlight {
    position: absolute;
    height: 60%;
    width: 0px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
  }

  .input1:focus~.highlight {
    animation: input1-focus 0.5s ease;
  }

  @keyframes input1-focus {
    from {
      background: #123268;
    }

    to {
      width: 100%;
      background: transparent;
    }
  }
</style>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->

<div id="content" class="site-content ">
  <!---slider--->

  <div class="pd_bottom_30"></div>
  <div class="pd_bottom_25"></div>
  
  <!---about section--->
  <section class="client-brand-section">
    <div class="container-fluid">
      <div class="pad_top" style=""></div>
      <div class="row  justify-content-center ">
      <div class="col-xl-1 col-xxl-1 col-lg-1  grid_box">
            
          </div>
          <div class="col-xl-2 col-xxl-2 col-lg-2 col-md-6 col-sm-12 grid_box">
            <div class="counter-block style_onenew count-box ">
              <h3 class="get" style="padding-right: 20px;">Get In Touch <br>With Us</h3>
            </div>
          </div>
        <div class="col-lg-9 row justify-content-center lightbg pl0 pt5 pb5">
          
          <div class="col-xl-3 col-xxl-3 col-lg-3  col-md-6 col-sm-12 grid_box plcontact0">
            <div class="counter-block style_onenew count-box d-flex ">
              <div class="mr3 pt5">
                <div class="pIcon" style="background-color: #E4FFFC;">
                <i class="bi bi-person-lines-fill contactAddressI1"></i>
                <!-- <img class="conIcon" src="assets/images/service_icon/phone.png" alt=""> -->
                </div>
              </div>
              <div class="pt-2">
                <a class="afsSet1200" href="tel:<?php echo $row[1]; ?>"><?php echo $row[1]; ?></a><br>
                <a class="afsSet1200" href="tel:<?php echo $row[2]; ?>"><?php echo $row[2]; ?></a>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-xxl-3 col-lg-3  col-md-6 col-sm-12 grid_box">
            <div class="counter-block style_onenew count-box d-flex ">
              <div class="mr3 pt5">
              <div class="pIcon" style="background-color: #FFEBF0;">
              <i class="bi bi-envelope-fill contactAddressI2"></i>  
              <!-- <img class="conIcon" src="assets/images/service_icon/mail.png" alt=""> -->
                </div>
                
              </div>
              <div class="pt-2">
            

                <a target="_blank" class="afsSet1200" href="mailto:<?php echo $row[3]; ?>"><?php echo $row[3]; ?></a><br>
                <a target="_blank" class="afsSet1200" href="mailto:<?php echo $row[4]; ?>"><?php echo $row[4]; ?></a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-xxl-6 col-lg-6   col-md-6 col-sm-12 grid_box">
            <div class="counter-block style_onenew count-box d-flex ">
              <div class="mr3 pt5">
              <div class="pIcon " style="background-color: #F3EAFF;">
              <i class="bi bi-geo-alt-fill contactAddressI3"></i>
                <!-- <img class="conIcon" src="assets/images/service_icon/location.png" alt=""> -->
                </div>
               
              </div>
              <div class="pt-2 afsSet1200">
                  <a target="_blank" href="https://maps.app.goo.gl/SgoMpXrjyV82K9YS7"><?php echo $row[5]; ?></a>
              
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--===============spacing==============-->
    <div class="" style="padding-bottom: 40px;"></div>
    <!--===============spacing==============-->
  </section>
  <section class="newsteller style_one">
    <!--===============spacing==============-->

    <!--===============spacing==============-->
    <div class="container-fluid bg-light">
      <div class="row">
        <div class="col-lg-6 col-md-12 p-0" style="background-image:url('admin/uploads/<?php echo $row[6]; ?>'); background-size:cover;">
        </div>
        <div class="col-lg-6 col-md-12 row">
          <div class="pd_top_10"></div> 
          <div class="item_scubscribe">  
            <div class="input_group">
              <div class="col-lg-12 pb-1">
                <h2 class="mb-3">Feel free to write</h2>
              </div>
              <form class="" method="post" action="" >
                <div class="row">
                  <div class="col-lg-12 mt-2">
                    <div class="group">
                      <input type="text" name="name" class="input1 border-0" style="background-color:#f8f9fa;"  id="input" pattern="[a-z A-Z]*" oninput="g()" required/>
                      <span class="highlight"></span>
                      <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                      <label id="name">Name</label>
                    </div>
                  </div>
                  <div class="col-lg-12 mt-4">
                    <div class="group">
                      <input type="text" class="input1 border-0" name="email" style="background-color:#f8f9fa;" id="input1" onchange="e()" required />
                      <span class="highlight"></span>
                      <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                      <label id="email">Email</label>
                    </div>
                    <div class="error text-danger" id="emailError">
                        
                    </div>
                    <div class="error text-success" id="emailSuccess">
                        
                    </div>
                  </div>
                  <div class="col-lg-12 row mt-4" style="padding-left:0px;">
                    <div class="col-lg-4">
                    <select name="countryCode" required class="state_select select2-hidden-accessible border-0" >
                                                                <option data-countryCode="IE" value="India (+91)" Selected>IND (+91)</option>
                                                                <option data-countryCode="US" value="USA (+1)">USA (+1)</option>
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
																<option data-countryCode="IE" value="India (+91)">IND (+91)</option>
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
                                                                <option data-countryCode="SH" value="St. Helena (+290)"><i class=" socialmedia p-2 mar3 bg-white rounded-3fa fa-shekel" aria-hidden="true"></i> (+290)</option>
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
                    <div class="col-lg-8">
                    <div class="group">
                      <input type="text" class="input1 border-0" id="myInput" style="background-color:#f8f9fa;" maxlength="11" minlength="10" oninput="f(this)" onfocus="label_area()" name="contact" required />
                      <span class="highlight"></span>
                      <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                      <label id="place">Phone</label>
                    </div>
                    <div class="error text-danger" id="phoneError">
                        
                    </div>
                     <div class="error text-success" id="phoneSuccess">
                    </div> 
                    </div>
                  </div>
                  <div class="col-lg-12 mt-4">
                    <div class="group">
                      <textarea type="text" name="message" class="input1 border-0"  style="color: black; width: 100%;"></textarea>
                      <span class="highlight"></span>
                      <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                      <label>Message</label>
                    </div>
                  </div>
                        <div class="col-lg-12 mt-5">
                            <div class="mt-3 d-flex flex-lg-row flex-column justify-content-between">
                            <div class="g-recaptcha" data-sitekey="6LfPu4wpAAAAANxOLnoiNVICxoitqDRORFoMOfpy"></div>
                              <div class="mt-4 pt-2">
                                 <input type="hidden" value="0" id="callReq" name="callReq">
                                 <input type="hidden" value="0" id="validPhonenumber" >
                                 <input type="hidden" value="0" id="validEmail" name="validEmail">
                                 <span style="width:120px; background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);" id="submit" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex">
                                 <input  type="submit" name="submit" value="SUBMIT" class="inptypeSubBtn" style="color:white !important;" ><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                                 <span style="width:120px; background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);" id="button" onclick="showalert()" class="theme-btn-Set-home fs-6 border-0 rounded-0 d-flex">
                                 <input  type="button" value="SUBMIT" class="inptypeSubBtn" style="color:white !important;" ><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                              </div>
                             </div>
                        </div>
                </div>
              </form>
            </div>
            <div class="pd_top_40"></div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <section class="client-brand-section disNone" style="background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);">
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
    <div class="container">

      <div class="row  justify-content-center">
        <div class="col-lg-12  row text-center">
          <div class="col-lg-12 col-12 d-flex justify-content-center ml0" >
            
                    <style>
                        .social-icon{
                            
                            
                            height:80px;
                            width:80px;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            font-size:50px;
                            transition: all .3s ease-out;
                        }
                        .social-icon:nth-child(1){
                           color:#0678B6;
                           background-color:white;
                        }
                        .social-icon:nth-child(2){
                           color:#ff7676;
                           background-color:white;
                        }
                        /*.social-icon:nth-child(2){*/
                        /*   background: linear-gradient(212.78deg, #CB3CA9 14.73%, #FF6541 52.73%, #FFDC55 87.26%);*/
                        /*   color: transparent;*/
                        /*   -webkit-background-clip: text;*/
                        /*   background-color:white !important;*/
                        /*}*/
                        .social-icon:nth-child(3){
                           
                           color:#1877F2;
                           background-color:white;
                        }
                        .social-icon:nth-child(4){
                            background-color:white; 
                            color:#FF0000;
                        }
                        .social-icon:nth-child(5){
                          background-color:white;
                          color:black;
                           
                        }
                        .social-icon:nth-child(1):hover{
                            color:white;
                           background-color:#0678B6;
                           border-color:#0678B6;
                        }
                        .social-icon:nth-child(2):hover{
                            color:white;
                            border:none;
                           background: linear-gradient(212.78deg, #CB3CA9 14.73%, #FF6541 52.73%, #FFDC55 87.26%);
                        }
                        .social-icon:nth-child(3):hover{
                            color:white;
                           background-color:#1877F2;
                           border-color:#1877F2;
                        }
                        .social-icon:nth-child(4):hover{
                            color:white;
                            background-color:#FF0000;border-color:#FF0000;
                        }
                        .social-icon:nth-child(5):hover{
                            color:white;
                           background-color:#000000;
                           border-color:#000000;
                        }
                        
                    </style>
                    <div class="d-flex ps-5">
                        <a href="https://www.linkedin.com/company/crmlanding" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-linkedin-in "></i></a>
                        <a href="https://www.instagram.com/crmlanding" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-instagram "></i></a>
                        <a href="https://www.facebook.com/CRMLandings" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-facebook-f "></i></a>
                        <a href="https://www.youtube.com/@neeraj-sethi" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-youtube "></i></a>
                        <a href="https://twitter.com/crmlanding?s=09" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-x-twitter "></i></a>
                    </div>
          </div>
          <div class="col-lg-1 "></div>
        </div>
      </div>

    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_80"></div>
    <!--===============spacing==============-->
  </section>
  <section class="client-brand-section disLapNone" style="background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);">
    <!--===============spacing==============-->
    <div class="pd_bottom_20"></div>
    <!--===============spacing==============-->
    <div class="container">

      <div class="row  justify-content-center">
        <div class="col-lg-9  row text-center">
        <div class="col-lg-1 "></div>
          <div class="col-lg-3 col-md-2 ">
            <div class="pt-2 ">
              <h4 class="text-white text-center mb-3">Connect Us :</h4>
            </div>
          </div>
          <div class="col-lg-7 col d-flex justify-content-center ml0" >
            <style>
           @media(max-width: 576px){
            .social-icon{ 
                            height:50px;
                            width:50px;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                            font-size:25px;
                            
                        }
                        .social-icon:nth-child(1){
                            color:white;
                           background-color:#0678B6;
                           border-color:#0678B6;
                        }
                        .social-icon:nth-child(2){
                            color:white;
                           background: linear-gradient(212.78deg, #CB3CA9 14.73%, #FF6541 52.73%, #FFDC55 87.26%);*/
                            color: transparent;
                        }
                        /*.social-icon:nth-child(2){*/
                        /*    color:white;*/
                        /*    border:none;*/
                        /*   background: linear-gradient(212.78deg, #CB3CA9 14.73%, #FF6541 52.73%, #FFDC55 87.26%);*/
                        /*}*/
                        .social-icon:nth-child(3){
                            color:white;
                           background-color:#1877F2;
                           border-color:#1877F2;
                        }
                        .social-icon:nth-child(4){
                            color:white;
                            background-color:#FF0000;border-color:#FF0000;
                        }
                        .social-icon:nth-child(5){
                            color:white;
                           background-color:#000000;
                           border-color:#000000;
                        }
            }
                        
                        
          </style>
                    <div class="d-flex ">
                        <a href="https://www.linkedin.com/company/crmlanding" class="social-icon rounded-circle "><i class="fa-brands fa-linkedin-in "></i></a>
                        <a href="https://www.instagram.com/crmlanding" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-instagram "></i></a>
                        <a href="https://www.facebook.com/CRMLandings" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-facebook-f "></i></a>
                        <a href="https://www.youtube.com/@neeraj-sethi" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-youtube "></i></a>
                        <a href="https://twitter.com/crmlanding?s=09" class="social-icon rounded-circle ms-3"><i class="fa-brands fa-square-x-twitter "></i></a>
                    </div>
          </div>
          <div class="col-lg-1 "></div>
        </div>
      </div>

    </div>
    <!--===============spacing==============-->
    <div class="pd_bottom_40"></div>
    <!--===============spacing==============-->
  </section>
  <section>
    <div class="container-fluid">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14285.322909268618!2d74.6415377!3d26.4772942!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be7b7f21c7401%3A0x60c3d31a0d4bdff8!2sCRM%20Landing!5e0!3m2!1sen!2sin!4v1695387066759!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </section>



</div>

<?php include('include/footer.php') ?>
</body>

</html>
<?php
if(isset($_POST['submit'])){
$Name = $_POST['name'];
$Email = $_POST['email'];
$Country = $_POST['countryCode'];
$Contact = $_POST['contact'];
$Message = $_POST['message'];
if (isset($_POST['g-recaptcha-response'])) {
        $recaptcha = $_POST['g-recaptcha-response'];
        if (!$recaptcha) {
            // recaptcha not check
           ?>
                    <script>
                    showToast("Please Check Recapture.","red","/");
                    </script>
                   <?php
            exit;
        } else {
            // recaptcha check
            $secretkey = "6LfPu4wpAAAAAOa1rjSqH8OfBx0j0x9Y5gtMOLWH";
            $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secretkey . '&response=' . $recaptcha;
            $response = file_get_contents($url);
            $responsekey = json_decode($response, true);
            if ($responsekey['success']){
              $Query = "INSERT INTO `Enquiry`(`name`,`email`,`country`,`contact`, `file`, `message`, `callRequest`, `date`, `status`,`companyName`) VALUES ('$Name','$Email','$Country','$Contact','','$Message', '3', now(), 'Active','')";
                               
$data = mysqli_query($conn,$Query);
if($data){
                      ?>
                    <script>
                    showToast("Thanks! We’ll get back to you soon.","green","/");
                    function after_submit(str) {
                        window.location.href ="https://crmmail.crmlanding.in/sendmail/<?php echo $Name; ?>/<?php echo $Email; ?>/<?php echo $Contact; ?>";
                    }
                    </script>
                   <?php
}
else{
     ?>
                    <script>
                    showToast("Please Try Again.","red","/");
                    </script>
                   <?php
}
            } else {
                //success==0;
                // ReCAPTCHA verification failed
                // Handle the error, for example, redirect the user back to the form
                // header("location:index.php");
                 ?>
                    <script>
                    showToast("Please Try Again.","red","/");
                    </script>
                   <?php
                exit;
            }
        }
    }

}
?>