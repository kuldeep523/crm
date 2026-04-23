<?php include("admin/connection.php");
include("mail.php");
$id=1;
?>
<head>
    <title>Career-CRM Landing</title>
</head>
<style>
    .drop-zone {
  
  height: 150px;
  padding: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-family: "Quicksand", sans-serif;
  font-weight: 500;
  font-size: 20px;
  cursor: pointer;
  color: #cccccc;
  border: 1px dashed black;
  border-radius: 10px;
}

.drop-zone--over {
  border-style: solid;
}

.drop-zone__input {
  display: none;
}

.drop-zone__thumb {
  width: 100%;
  height: 100%;
  border-radius: 10px;
  overflow: hidden;
  background-color: #cccccc;
  background-size: cover;
  position: relative;
}

.drop-zone__thumb::after {
  content: attr(data-label);
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 5px 0;
  color: #ffffff;
  background: rgba(0, 0, 0, 0.75);
  font-size: 14px;
  text-align: center;
}
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
    color: #ffffff;
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

  @keyframes input1-focus {
    from {
      background: #123268;
    }

    to {
      width: 100%;
      background: transparent;
    }
  }
  .header .header_content_collapse .navigation_menu .navbar_nav li .dropdown-btn, .default_sickty_heaad .header_content_collapse .navigation_menu .navbar_nav li .dropdown-btn
        {
           
            top: 25px !important;
         
        }
</style>
<?php include('include/header.php'); ?>


<div class="pd_top_20"></div>
<div class="page_header_default style_one">
        <div class="parallax_cover" id="your-element-selector">
            <div class="simpleParallax" >
                <!--<img src="assets/images/page-header-default.png" alt="bg_image" class="cover-parallax">-->
            </div>
        </div>
        <div class="page_header_content">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_title_inner">
                            <div class="title_page">
                                <h1 style="color:black;">CAREER</h1> 
                                <!--<div class="pd_top_15 disLapNone"></div>-->
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 <?php
    $q = "SELECT * FROM career WHERE id='$id' AND status='Active'";
    $q_run = mysqli_query($conn,$q);
    $r = mysqli_fetch_row($q_run);
?>   
<section class="client-section " style="background-color: aliceblue;">
   <div class="auto-container ">
      <div class="row">
         <div class="col-lg-12">
            <div>
               <p class="text-center pt-2 i-class">Contact to our HR team -  <a href="tel:<?php echo $r[1]; ?>" class="ps-2 pr10 d-block d-lg-inline-block"> <i class="bi bi-telephone-fill i-class"></i> <?php echo $r[1]; ?>,</a> <a href="tel:<?php echo $r[2]; ?>" class="pr10 d-block d-lg-inline-block"> <i class="i-class bi bi-telephone-fill"></i> <?php echo $r[2]; ?>,</a><a href="mailto:<?php echo $r[3]; ?>" class="pr10 d-block d-lg-inline-block"> <i class="bi bi-envelope-at-fill i-class"></i> <?php echo $r[3]; ?></a></p>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-section-one " >
               <!--===============spacing==============-->
                    <div class="pd_top_50"></div>
               <!--===============spacing==============-->
               <div class="container">
                  <div class="row">
                     
                     <div class="invisible_normal_spacing"></div>
<?php
    $qa = "SELECT * FROM career_att WHERE Career_Id='$id' AND status='Active'  ORDER BY id DESC LIMIT 3";
    $qa_run = mysqli_query($conn,$qa);
    $a=1;
?>                      
<?php foreach($qa_run as $ra){ ?>
<style>
    .sliderTransbutton0<?php echo $a; ?> {
        background: linear-gradient(95deg, <?php echo $ra['color1']; ?> 0%, <?php echo $ra['color2']; ?> 100%) !important;
}
</style>
                     <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                     <div class="mr_bottom_50"></div>
                        <div class="service_box style_four dark_color">
                           <div class=" service_content sliderTransbutton0<?php echo $a; ?>">
                              <div class="image_box ">
                                 <img src="admin/uploads/<?php echo $ra['img']; ?>" class="img-fluid" alt="Service Image">
                                
                              </div>
                              <div class="mtminus20 content_inner text-left ">
                                 <h2><a style="cursor: unset;"><?php echo $ra['title']; ?></a></h2>
                                 <div>
                                   <?php echo $ra['content']; ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--===============spacing==============-->
                              <div class="mr_bottom_30"></div>
                        <!--===============spacing==============-->
                     </div>
<?php $a=$a+1; }?>
                     
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_60"></div>
               <!--===============spacing==============-->
            </section>
            <div class="col-12 text-center">
              <h1>Application Form </h1>
              <div class="pd_top_60"></div>
          </div>
    <section class="newsteller style_one mb-5">
    <!--===============spacing==============-->

    <!--===============spacing==============-->
    <div class="container-fluid bg-light">
      <div class="row">
          
        <div class="col-lg-6 col-md-12 p-0" style="background-image:url('admin/uploads/<?php echo $r[4]; ?>'); background-size:100% 100%;">
        </div>
        <div class="col-lg-6 col-md-12 row">
          <div class="pd_top_10"></div>
          <div class="item_scubscribe">
            
              <form method="POST" id="f1" action="" enctype="multipart/form-data">
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
                  <div class="col-lg-12 mt-3">
                        <select name="designation" id="designation"  class="state_select select2-hidden-accessible dlBorder" required onchange="chpo()">
                                                                <option  Selected disabled value="0">Select Position</option>
                                                                 <option value="Accountant (Location: Ajmer)" >Accountant (Location: Ajmer)</option>
                                                                <option value="Salesforce Developer" >Salesforce Developer</option>
                                                                <option value="Senior Salesforce Developer" >Senior Salesforce Developer</option>
                                                                <option value="Business Analyst">Business Analyst</option>
                                                                <option value="Business Development Manager">Business Development Manager</option>
                                                                <option value="Business Development Intern">Business Development Intern</option>
                                                                <option value="Graphic Designer">Graphic Designer</option>
                                                                <option value="Others">Others</option>
                                                                
                                                        
                                                        </select>
                     <div class="group"> 
                      <input type="text" name="other" class="input1 border-0" style="background-color:#f8f9fa;border-bottom:2px solid #09376f!important;display:none"  id="other" placeholder="Other Role" />
                    </div>
                    </div>
                  <div class="col-lg-12 row mt-4" style="padding-left:0px;">
                    <div class="col-lg-4">
                    <select name="countryCode" required class="state_select select2-hidden-accessible border-0" >
                                                                <option data-countryCode="IE" value="India (+91)" Selected>IND (+91)</option>
                                                                <option data-countryCode="US" value="USA (+1)" >USA (+1)</option>
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
                      <input type="text" class="input1 border-0" id="myInput" style="background-color:#f8f9fa;" maxlength="11" minlength="10" oninput="f(this)" onfocus="label_area()"  name="contact" required />
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
                  <script>
    // function label_area(){
    //      document.getElementById("place").className='phone_up';
    // }
    
    
    //  document.getElementById("myInput").addEventListener('blur', function() {
         
    //          var  textarea_con=document.getElementById("myInput").value;
    //           if (textarea_con.length > 0) {
    //   document.getElementById("place").className='phone_up';
    // } else {  
    //     document.getElementById("place").className='phone_down';
    // }
    //         });
    
</script>
                  <div class="col-lg-12 mt-3">
                    <div class="group">
                        <label class="position-static text-dark">Click to upload</label>
                        <input type="file" name="myFile" class="form-control"  value="Upload a File" required style="color: black; width: 100%;background-color: transparent;padding: .5rem 1rem" accept=".pdf, .jpg, .jpeg, .png, .gif, .bmp, .doc, .docx"> 
                        <!--<div class="drop-zone" id="dropZone" ondrop="handleDrop(event)" ondragover="handleDragOver(event)">-->
                        <!--    <span class="drop-zone__prompt">Drop file here or click to upload</span>-->
                        <!--    <input type="file" onchange="view()" accept=".pdf, .jpg, .jpeg, .png, .gif, .bmp, .doc, .docx" id="fileInput" name="myFile" class="drop-zone__input">-->
                        <!--</div>-->
                        <!--<a href="#" id="openFileLink" style="display:none;" class="prBtn">Preview</a>-->
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
                    <div>
                      <div class="mt-3">
                      <!-- <button type="button" class="theme-btn-Set fs-6 border-0 rounded-0" >SUBMIT <img class="btnReadMorecs " src="assets/images/service_icon/Right_arrow.png" alt=""></button>
                       -->
                      <div class="mt-3 d-flex flex-lg-row flex-column justify-content-between">
                                                <!-- <button type="button" class="theme-btn-Set fs-6 border-0 rounded-0" >SUBMIT <img class="btnReadMorecs " src="assets/images/service_icon/Right_arrow.png" alt=""></button> -->
                                                <div class="g-recaptcha" data-sitekey="6LfPu4wpAAAAANxOLnoiNVICxoitqDRORFoMOfpy">

                                                </div>
                                                <div class="mt-4 pt-2">
                                                     <input type="hidden" value="0" id="callReq" name="callReq">
                                                    <input type="hidden" value="0" id="validPhonenumber" >
                                                        <input type="hidden" value="0" id="validEmail" name="validEmail">
                                                         <span style="width:120px; background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);" id="submit" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex" onclick="sub()">
                                                             <input  type="button"  value="SUBMIT" class="inptypeSubBtn" style="color:white !important;" ><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                                                             
                                                              <span style="width:120px; background:linear-gradient(323deg, rgba(13,66,130,1) 0%, rgba(2,36,77,1) 61%, rgba(2,36,77,1) 100%);" id="main_sub" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex" onclick="sub()">
                                                             <input  type="submit" name="submit" id="submit_work"  value="SUBMIT" class="inptypeSubBtn" style="color:white !important;" ><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                                                             
                                                             
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

<script>
    function sub(){
        var designation = document.getElementById("designation").value;
        if(designation != 0){
            document.getElementById("submit_work").click();
        }else{
            showToast("Please Select the Role.","red","/");
        }
    }
    function chpo(){
        var designation = document.getElementById("designation").value;
        if(designation == 'Others'){
            document.getElementById("other").style.display="block";
        }else{
            document.getElementById("other").style.display="none";
        }
    }
</script>
  </section>

<script>
    document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
  const dropZoneElement = inputElement.closest(".drop-zone");

  dropZoneElement.addEventListener("click", (e) => {
    inputElement.click();
  });

  inputElement.addEventListener("change", (e) => {
    if (inputElement.files.length) {
      updateThumbnail(dropZoneElement, inputElement.files[0]);
    }
  });

  dropZoneElement.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropZoneElement.classList.add("drop-zone--over");
  });

  ["dragleave", "dragend"].forEach((type) => {
    dropZoneElement.addEventListener(type, (e) => {
      dropZoneElement.classList.remove("drop-zone--over");
    });
  });

  dropZoneElement.addEventListener("drop", (e) => {
    e.preventDefault();

    if (e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
    }

    dropZoneElement.classList.remove("drop-zone--over");
  });
});

/**
 * Updates the thumbnail on a drop zone element.
 *
 * @param {HTMLElement} dropZoneElement
 * @param {File} file
 */
function updateThumbnail(dropZoneElement, file) {
  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

  // First time - remove the prompt
  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
    dropZoneElement.querySelector(".drop-zone__prompt").remove();
  }

  // First time - there is no thumbnail element, so lets create it
  if (!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drop-zone__thumb");
    dropZoneElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;

  // Show thumbnail for image files
  if (file.type.startsWith("image/")) {
    const reader = new FileReader();

    reader.readAsDataURL(file);
    reader.onload = () => {
      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
    };
  } else {
    thumbnailElement.style.backgroundImage = null;
  }
}

</script>
 
    <script>
    VANTA.NET({
  el: "#your-element-selector",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0xffffff,
  backgroundColor: 0xefefef,
  showDots: false
})




function handleDragOver(event) {
  event.preventDefault();
  event.stopPropagation();
  // Add styles for when a file is dragged over the drop zone
  document.getElementById('dropZone').classList.add('drop-zone--over');
}

function handleDrop(event) {
  event.preventDefault();
  event.stopPropagation();
  // Remove styles for when a file is dropped
  document.getElementById('dropZone').classList.remove('drop-zone--over');

  const fileInput = document.getElementById('fileInput');
  const files = event.dataTransfer.files;

  if (files.length > 0) { 
    fileInput.files = files;
    view(); // Call your function to handle the dropped files
  }
}

function view() 
{
    var fileInput1 = document.getElementById('fileInput').value;
     
    var checking = fileInput1.toLowerCase();
    if(!checking.match(/(\.jpg|\.png|\.pdf|\.JPG|\.PNG|\.PDF|\.doc|\.DOC|\.docm|\.DOCM|\.docx|\.DOCX|\.dot|\.DOT|\.JPEG|\.jpeg)$/))
    {
        alert("Please Upload File in Valid Formate. Only Accept Image, pdf and Word Document");
        document.getElementById('fileInput').value="";
        
    }
    else
    {
        var a = document.getElementById("openFileLink");
    a.style.display="block";
    // alert(a);
    }
    
    
    
    
    
}
</script>
 <script>
        // Function to handle opening the file in a new tab
        function openFileInNewTab(file) {
        const fileURL = URL.createObjectURL(file);
        window.open(fileURL, '_blank');
        }

        // Event listener for the tag (anchor) click
        document.getElementById('openFileLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default behavior of the anchor tag

        const fileInput = document.getElementById('fileInput');
        const file = fileInput.files[0]; // Get the first file from the input

        if (file) {
            openFileInNewTab(file); // Open the file in a new tab
        } else {
            alert('Please select a file.');
        }
        });
        
        

    </script>
    
<?php 

        require('components/trustedItServices.php');
        require('components/lets_talk.php'); 
    ?>
<?php require('include/footer.php'); ?>


<?php
if(!empty($_POST['submit'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Country = $_POST['countryCode'];  
    $Contact = $_POST['contact'];
    $designation = $_POST['designation'];
    
    if($designation=='Others'){
        $other = $_POST['other'];
        $designation=$designation."( ".$other." )";
    }
    
                $filename =  $_FILES["myFile"]["name"];
                $tempname =  $_FILES["myFile"]["tmp_name"];
                $folder = "admin/uploads/".$filename; 
                move_uploaded_file($tempname, $folder);
                
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
               $Query = "INSERT INTO `Enquiry`(`name`,`email`,`country`,`contact`,`file`,`message`, `callRequest`, `date`, `status`,`companyName`,`designation`) VALUES ('$Name','$Email','$Country','$Contact','$filename','$Message', '2', now(), 'Active','','$designation')";
    $data = mysqli_query($conn,$Query) or exit($Query);
    if($data){
        ?>
        <script>
        showToast("Thanks! We’ll get back to you soon.","green","/");
        function after_submit(str) {
                        window.location.href ="https://crmmail.crmlanding.in/sendcareermail/<?php echo $Name; ?>/<?php echo $Email; ?>/<?php echo $designation; ?>/<?php echo $Contact; ?>/";
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


