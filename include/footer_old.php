<?php
$qf='select * from contact_us';
$qf_run=mysqli_query($conn,$qf);
$rowf=mysqli_fetch_row($qf_run);
?>
<div class="footer_area  footer_twelve" id="footer_contents">
      <div class="footer_widgets_wrap">
        <!--===============spacing==============-->
        <div class="pd_top_50"></div>
        <!--===============spacing==============-->
        <div class="container">
          <div class="row">

            <div class="col-lg-5">

              <div class="row">
                <div class="col-md-6 col-sm-12" style="padding-left:0px;">
                  <div class="footer_widgets wid_tit style_two">
                    <div class="fo_wid_title">
                      <h2>Quick Links</h2>
                    </div>
                  </div>
                  <div class="footer_widgets clearfix navigation_foo light_color style_four">
                    <div class="navigation_foo_box">
                      <div class="navigation_foo_inner">
                        <ul>
                          <li><a href="/" class="color_white">Home</a></li>
                          <li><a href="services.php" class="color_white">Services</a></li>
                          <!--<li><a class="color_white">Industries</a></li>-->
                          <li><a href="career.php" class="color_white">Career</a></li>
                          <li><a href="about_us.php" class="color_white">About Us</a></li>
                          <li><a href="contact_us.php" class="color_white">Contact</a></li>
                          <li><a href="privacy_policy.php" class="color_white">Privacy Policy</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12" style="padding-left:0px;">
                  <div class="footer_widgets wid_tit style_two">
                    <div class="fo_wid_title">
                      <h2>Important Links</h2>
                    </div>
                  </div>
                  <div class="footer_widgets clearfix navigation_foo light_color style_four">
                    <div class="navigation_foo_box">
                      <div class="navigation_foo_inner">


                        <ul>
<?php 
$quary_all = "SELECT * FROM `assets` WHERE `status` = 'Active' order by Rand() LIMIT 5";
$query_run_all = mysqli_query($conn, $quary_all);

if ($query_run_all) {
   foreach ($query_run_all as $row_all) {
       $url2 = str_replace(' ', '+',$row_all['title']);
?>
                        <li><a href="products?nm=<?php echo $url2; ?>" class="color_white"><?php echo $row_all['title']; ?></a></li>
                <?php  }
}?>
                          <!--<li><a href="assetss?name=Dealer+Management+System+[DMS]" class="color_white">Dealer Management System</a></li>-->
                          <!--<li><a href="assetss?name=Sales+Force+Automation+[SFA]" class="color_white">Sales Force Automation</a></li>-->
                          <!--<li><a href="case_studies.php" class="color_white">Case Studies</a></li>-->
                          <!--<li><a  class="color_white">Product</a></li>-->
                        </ul>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-lg-3">
              <div class="footer_widgets wid_tit style_two">
                <div class="fo_wid_title">
                  <h2>Reach Us</h2>
                </div>
              </div>
              <div class="footer_widgets clearfix navigation_foo light_color style_four">
                <div class="navigation_foo_box">
                  <div class="navigation_foo_inner">
                    <ul>
                      <li><a href="tel:<?php echo $rowf[1]; ?>" class="color_white">Sales <?php echo $rowf[1]; ?></a></li>
                      <li><a href="tel:<?php echo $rowf[2]; ?>" class="color_white">Sales <?php echo $rowf[2]; ?></a></li>
                       <li><a href="tel:+919783047112" class="color_white">HR +91 97830 47112</a></li>
                      <!--<li><a href="tel:+17162266939" class="color_white">+1 (716) 226-6939</a></li>-->
                       <!--<li><a href="tel:+442032894727" class="color_white">+44 20 3289 4727</a></li>-->
                      <li><a href="mailto:<?php echo $rowf[3]; ?>" class="color_white"> <?php echo $rowf[3]; ?></a></li>
                      <li><a href="mailto:<?php echo $rowf[4]; ?>" class="color_white"> <?php echo $rowf[4]; ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_widgets wid_tit style_two">
                <div class="fo_wid_title">
                  <h2>Address</h2>
                </div>
              </div>
             <div class="footer_widgets clearfix navigation_foo light_color style_four">
                <div class="navigation_foo_box">
                  <div class="navigation_foo_inner">
                     
                    <p style="font-weight:400 !important; font-size:18px !important;"> <a target="_blank" href="https://maps.app.goo.gl/SgoMpXrjyV82K9YS7"><?php echo $rowf[5]; ?></a></p>
                    
                  </div>
                  <style>
                        .social{
                            color: #000;
                            border: 1px solid rgba(0,0,0,0.5);
                            height:45px;
                            width:45px;
                            display:flex;
                            justify-content:center;
                            align-items:center;
                        }
                        .social:nth-child(1):hover{
                            color:white;
                           background-color:#0678B6;
                           border-color:#0678B6;
                        }
                        .social:nth-child(2):hover{
                            color:white;
                            border-color:#fff;
                           background: linear-gradient(212.78deg, #CB3CA9 14.73%, #FF6541 52.73%, #FFDC55 87.26%);
                        }
                        .social:nth-child(3):hover{
                            color:white;
                           background-color:#1877F2;border-color:#1877F2;
                        }
                        .social:nth-child(4):hover{
                            color:white;
                            background-color:#FF0000;border-color:#FF0000;
                        }
                        .social:nth-child(5):hover{
                            color:white;
                           background-color:#000000;
                           border-color:#000000;
                        }
                    </style>
                    <div class="d-flex">
                        <a href="https://www.linkedin.com/company/crmlanding" class="social rounded-circle me-2"><i class="fa-brands fa-linkedin-in "></i></a>
                        <a href="https://www.instagram.com/crmlanding" class="social rounded-circle me-2"><i class="fa-brands fa-instagram "></i></a>
                        <a href="https://www.facebook.com/CRMLandings" class="social rounded-circle me-2"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@neeraj-sethi" class="social rounded-circle me-2"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://twitter.com/crmlanding?s=09" class="social rounded-circle  "><i class="fa-brands fa-square-x-twitter "></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="auto-container">
        <div class="footer-copyright" style="border-top:2px solid black;">
          <!--===============spacing==============-->
          <div class="pd_top_10"></div>
          <!--===============spacing==============-->
          <div class="row">
            <div class="col-lg-6" style="padding-left:0px;">
              <a href="index.php" class="logo_mid">
                <img style="max-height: 50px;" src="assets/images/crmLanding_logo1.png" alt="CRM Landing" class="logo_default">
              </a>
            </div>
            <div class="col-lg-6 pd_top_10" style="padding-right:0px; ">
              <p class="color_white " style="float:right;">Copyright © <a href="www.crmlanding.in" class="color_white">CRM Landing Software Private Limited.</a> All Rights Reserved</p>
            </div>
          </div>
          <!--===============spacing==============-->
          <div class="pd_bottom_5"></div>
          <!--===============spacing==============-->
        </div>
      </div>
    </div>
        <!---==============footer end =================-->
        <!---==============mobile menu =================-->
        <div class="crt_mobile_menu">
            <div class="menu-backdrop"></div>
            <nav class="menu-box">
                <div class="close-btn d-flex ps-3 px-lg-0"><img src="assets/images/cross.jpg" style="width:16px;height:16px;margin-block:auto;">
                <div class="m x-3"></div>
                <a href="/">
                      <img src="assets/images/crmLanding_logo1.png" alt="CRM Landing" class="logo_default ms-1" style="max-width:176px !important;">
                  </a>
                </div>
                
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="d-flex mt-5 justify-content-center w-100">
                    <div class="col-lg-6 p-0">
                        <p class="pNavbarRightSet"><a href="tel:8619948778">IND: +91 86199 48778  </a></p>
                        <!--<p class="pNavbarRightSet"><a href="tel:+17162266939">US: +1 (716) 226-6939 </a> <br> <a href="tel:+442032894727">UK: +44 20 3289 4727</a></p>-->
                    </div>
                    <div class="col-lg-6 px-2">
                        <!--<p class="pNavbarRightSet"><a href="tel:8619948778">IND: +91 86199 48778  </a> <br> <a href="tel:9663870199">IND: +91 96638 70199</a></p>-->
                        <p class="pNavbarRightSet"><a href="tel:9663870199">IND: +91 96638 70199</a></p>
                    </div>
                </div>
            </nav>
        </div>
        <!---==============mobile menu end =================-->
        

   
        <!---==============cart=================-->
        
  
    <!-- Back to top with progress indicator-->
    <div class="prgoress_indicator">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    
   <a href="https://api.whatsapp.com/send?phone=9663870199" target="_blank"><img style="z-index: 999;
    border-radius: 50%;
    background-color: white;
    border: none;
    width: 50px;
    height: 50px;
    position: fixed;
    bottom: 75px;
    right:20px;" src="assets/images/WhatsApp.png" alt="Chat or connect on whatsapp"></a>
    <script>
        function submitclick() {
            alert("Thank You For Filling The Form. Our Team Will Get Back To You Within 24hrs");
        }

        function selService() {
            var serviceType = document.getElementById("serviceType").value;

            if (serviceType == "Other") {
                document.getElementById("serviceType").style.display = "none";
                document.getElementById("inServiceType").style.display = "Block";
            }


            var serviceType1 = document.getElementById("serviceType1").value;

            if (serviceType1 == "Other") {
                document.getElementById("serviceType1").style.display = "none";
                document.getElementById("inServiceType1").style.display = "Block";
            }
        }
    
        // myButton.addEventListener("click", function () {
        //     myPopup.classList.add("show");
        // });
        // closePopup.addEventListener("click", function () {
        //     myPopup.classList.remove("show");
        // });
        // window.addEventListener("click", function (event) {
        //     if (event.target == myPopup) {
        //         myPopup.classList.remove("show");
        //     }
        // });
    </script>

    <!---========================== javascript ==========================-->
    <script type='text/javascript' src='assets/js/jquery-3.6.0.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.fancybox.js'></script>
    <script type='text/javascript' src='assets/js/jQuery.style.switcher.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
    <script type='text/javascript' src='assets/js/color-scheme.js'></script>
    <script type='text/javascript' src='assets/js/owl.js'></script>
    <script type='text/javascript' src='assets/js/swiper.min.js'></script>
    <script type='text/javascript' src='assets/js/isotope.min.js'></script>
    <script type='text/javascript' src='assets/js/countdown.js'></script>
    <script type='text/javascript' src='assets/js/simpleParallax.min.js'></script>
    <script type='text/javascript' src='assets/js/appear.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
    <script type='text/javascript' src='assets/js/sharer.js'></script>
    <script type='text/javascript' src='assets/js/validation.js'></script>
    
    <script type='text/javascript' src='assets/js/creote-extension.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
