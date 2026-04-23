<?php
include('admin/connection.php');
$pageName = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5JREHEPTX9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5JREHEPTX9');
</script>
   
    
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBVNKGH6');</script>
<!-- End Google Tag Manager --> 
    

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!--<title>CRM Landing</title>-->
  <!-- Fav Icon -->
  <link rel="icon" href="assets/images/favicon_crm.png" type="image/x-icon">
  <!-- Fav Icon -->
  <!-- Google Fonts -->
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Spartan%3A400%2C500%2C600%2C700%2C800%2C900%7CInter%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"   />

  <!-- Google Fonts -->
  <!-- Style -->
  <link rel='stylesheet' href='assets/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/owl.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/swiper.min.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/jquery.fancybox.min.css' type='text/css' media='all' />
  <link rel='styleshe
  
  et' href='assets/css/icomoon.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/flexslider.css' type='text/css' media='all' />
  <!--<link rel='stylesheet' href='assets/css/font-awesome.min.css' type='text/css' media='all' />-->
  <link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/scss/elements/theme-css.css' type='text/css' media='all' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link rel='stylesheet' href='assets/css/crm.css' type='text/css' media='all' />
  <link rel='stylesheet' href='assets/css/scss/elements/mystyle.css' type='text/css' media='all' />
  <link rel='stylesheet' id="creote-color-switcher-css" href='assets/css/scss/elements/color-switcher/color.css' type='text/css' media='all' />
  <!-- Style-->
  <!----woocommerce---->

  <!----woocommerce---->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
   <script src="https://www.google.com/recaptcha/api.js"></script> 
  
  
  <!-- For Toaster-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
  .toast-green {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 5px;
    background-color: green;
    width: 100%;
  }
  .toast-red {
    position: absolute;
    bottom: 0;
    left: 0;
    height: 5px;
    background-color: red;
    width: 100%;
  }
</style>

<script>
  function showToast(text,color,page) {
    const toastContent = document.createElement("div");
    const message = document.createElement("div");
    message.textContent = text;
    toastContent.appendChild(message);

    const toast = Toastify({
      node: toastContent,
      duration: 3000,
      style: {
        background: "white",
        color: color,
        height: "auto",
        padding: "10px 70px",
        borderRadius: "5px",
        boxShadow: "0px 0px 10px rgba(0,0,0,0.1)",
        position: "fixed",
      },
      gravity: "top",
      position: "center",
      stopOnFocus: true,
      className: "custom-toast",
      onClick: function(){}
    });

    toast.showToast();


    const progressBar = document.createElement("div");
    progressBar.className = "toast-"+color;
    toastContent.appendChild(progressBar);

    let width = 100;
    const duration = 3000;
    const interval = 10; 
    const decrement = (interval / duration) * 100;

    const progressInterval = setInterval(() => {
      width -= decrement;
      if (width <= 0) {
        clearInterval(progressInterval);
        toast.hideToast();
      }
      progressBar.style.width = width + '%';
    }, interval);
    
    
		setTimeout(function() {
    after_submit(page);
}, 3000);
  }




</script>




<style>
    #place{
        display:block !important;
    }
</style>
<style>
.pad_top{
    padding-bottom:93px;
}
.mar_had{
    margin-top:120px;
}

@media (max-width:550px) {
   .pad_top{
    padding-bottom:28px!important;
    } 
    .page_header_default{
           padding-top:30px;
           padding-bottom:15px;
    }
    .mar_had{
         margin-top:9px;
    }
    .crt_mobile_menu .menu-box .menu-outer ul.navbar_nav li .dropdown-menu {
        padding-top:1rem !important;
    }
    
    
   li a span{
        font-size:1.2rem;
        font-weight: 500!important;
    }
    .dropdown-item span{
        font-size:16px;
        font-weight: 400!important;
    } 
    .dropdown-menu{
    min-width:350px!important;
}
.span123{
    line-height:20px!important;
}
nav{
    scrollbar-width:none;
}

}

    @media (min-width:1200px) and (max-width:1400px) {
        p{
            font-size:15.5px;
            line-height: 26px;
        }
        ul li, ol li {
            margin-bottom: 4px;
        }
        .counter-block.style_one {
            height:140px;
        }
        .service_box.style_four .service_content .image_box .imgDesk{
            height:160px;
        }
        .fsLarge{
            font-size:2.5rem;
        }
       
         .abcdef{
             width:100%;
             height:280px;
         }
         h3{
             font-size:1.5rem;
             line-height:26px;
         }
    }





 @media (min-width:1400px){
        p{
            font-size:18px;
            line-height: 26px;
        }
        ul li, ol li {
            margin-bottom: 4px;
        }
        .counter-block.style_one {
            height:150px;
        }
        .service_box.style_four .service_content .image_box .imgDesk{
            height:170px;
        }
        .fsLarge{
            font-size:2.9rem;
        }
       
         .abcdef{
             width:100%;
             height:320px;
         }
         h3{
             font-size:1.8rem;
             line-height:26px;
         }
    }
</style>
</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBVNKGH6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->








<!--Loader-->
<script>window.onbeforeunload = function () { window.scrollTo(0, 0); }; </script>
<section id="loader">
<style>
html, body {

    scroll-behavior: auto!important;

}
    #loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 100000;
      text-align: center;
      font-family: Arial, sans-serif;
      color: #3498db;
      flex-direction: column;
    }
 
    .logo_default_progress {
      width: 200px;
      margin-bottom: 20px;
    }
 
    .progress-bar-container {
      width: 100%;
      background-color: #f3f3f3;
      border-radius: 5px;
      overflow: hidden;
      height: 5px;
    }
 
    .progress-bar {
      width: 0%;
      height: 100%;
      background-color: #3498db;
      animation: progress 3s ease-in-out forwards;
    }
 
    @keyframes progress {
      from { width: 0%; }
      to { width: 100%; }
    }
    
</style>
 
  <div>
<img src="assets/images/crmLanding_logo1.png" alt="CRM Landing" class="logo_default_progress">
<div class="progress-bar-container">
<div class="progress-bar"></div>
</div>
</div>
 
  <script>
    window.addEventListener("load", function() {
      const loader = document.getElementById("loader");
      setTimeout(() => {
        loader.style.display = "none";
      }, 2000); // Adjust the delay as needed
    });
</script>
</section>











  <div id="page" class="page_wapper hfeed site">

    <div id="wrapper_full" class="content_all_warpper">

      <div class="header_area" id="header_contents">
        <header class="header header_default style_three" style="position:fixed;width:100%">
          <div class="header_mid disNone">
            <div class="medium-container">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="logo mid_logo_icon" style="padding-left:21px;">
                    <a href="/" class="logo_mid">
                      <img src="assets/images/crmLanding_logo1.png" alt="CRM Landing" class="logo_default">
                    </a>
                  </div>
                </div> 
               
                <div class="col-lg-6 hidden-sm">
                  <div style="display: flex;" class="float-end pe-3">
                   
                    <style>
                            .dropdown1 {
                                position: relative;
                                display: inline-block;
                                margin-right:10px;
                                border:1px solid #fff !important;
                            }
                            
                            .dropdown-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: 200px;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                            }
                        
                            .dropdown-content a {
                                color: black;
                               padding:12px 16px;
                                text-decoration: none;
                                display: block;
                            }
                        
                            .dropdown-content a:hover {
                                background-color: #f1f1f1;
                                
                            }
                            .dropdown1:hover{
                               
                                    background:#00A1E0 !important;
                                 border-radius:50%;
                                 /*border:1px solid #00A1E0 !important;*/
                            }
                           
                            .dropdown1:hover .dropdown-content {
                                display: block;
                            }
                             .dropdown1:hover .hover-img-mail {
                                    content: url('assets/images/mail1.png');
                                }
                                .dropdown1:hover .hover-img-call {
                                    content: url('assets/images/call2.png');
                                }
                            .bg-transparent.px-3.rounded-pill.me-3{
                               border:1px solid  !important; 
                            }
                            .bg-transparent.px-3.rounded-pill.me-3:hover {
                                           
                                background:#00A1E0 !important;
                               border-color:#00A1E0 !important;
                               
                            }.bg-transparent.px-3.rounded-pill.me-3:hover a{
                                           
                                 color:#ffffff !important;
                               
                            }
                            .menu-box .close-btn{
                                margin-left:0!important;
                            }
                         .menu-box{
                             padding-left:0px!important;
                             padding-right:0px!important;
                         }
.hover-img-mail:hover {
    content: url(' class="d-none'>);
}

.hover-img-call:hover {
    content: url('assets/images/call2.png');
}
                  
                        </style>
                
                    <div class="dropdown1">
                        <img src="assets/images/mail1.png" class="d-none">
                         <img src="assets/images/call2.png" class="d-none">
                         
                       <img src="assets/images/mail.png" style="height:32px !important;"  id="head_mail" class="hover-img-mail">
                        <div class="dropdown-content">
                          <a href="mailto:info@crmlanding.in">info@crmlanding.in</a>
                               <a href="mailto:sales@crmlanding.in">sales@crmlanding.in</a>
                               <a href="mailto:career@crmlanding.in">career@crmlanding.in</a>
                        </div>
                      </div>
                      
                    <div class="dropdown1">
                        <img src="assets/images/call.png" style="height:32px !important;" id="head_call"  class="hover-img-call">
                         <div class="dropdown-content">
                                <a href="tel:+918619948778">Sales +91 86199 48778</a>
                                <a href="tel:+919663870199">Sales +91 96638 70199</a>
                                <!--<a href="tel:+17162266939">sales +1 (716) 226-6939</a>-->
                                <!--<a href="tel:+442032894727">sales +44 20 3289 4727</a>-->
                                <a href="tel:+919783047112">HR +91 97830 47112</a>
                        </div>
                    </div>
                    <script>
                          
                          function headimg(str){
                              if(str==1){
                                  document.getElementById("head_mail").src="assets/images/mail1.png";
                              }else{
                                  document.getElementById("head_call").src="assets/images/call2.png";
                              }
                          }
                          
                          function headimg1(str){
                              if(str==1){
                                  document.getElementById("head_mail").src="assets/images/mail.png";
                              }else{
                                  document.getElementById("head_call").src="assets/images/call.png";
                              }
                          }
                      </script>
                        <button class="bg-transparent px-3 rounded-pill me-3" style="height:32px !important;"> <a href="contact_us.php">Contact Us</a></button>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar_outer mod_btn_enable get_sticky_header disNone p-0">
            <div class="medium-container">
              <div class="row align-items-center" Style="text-align: center;">
                <div class="col-lg-12 menu_column">

                  <div class="navbar_togglers hamburger_menu">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="color: white !important;"></span>
                  </div>
                  <div class="header_content_collapse">
                    <div class="header_menu_box p-0">

                      <div class="navigation_menu">
                        <ul id="myNavbar" class="navbar_nav p-0">
                          <li class="menu-item active  position-static hnavbar mb-0 px-lg-0 px-3"> 
                            <a href="/" class="nav-link ">
                                <?php
                                 if($pageName=='index.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">Home</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>Home</span>
                                      <?php
                                 }
                                ?>
                              
                            </a>
                          </li>
                          <li class="menu-item active  position-static hnavbar mb-0 px-lg-0 px-3">
                            <a href="services.php" class="nav-link">
                                <?php
                                 if($pageName=='services.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">Services</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>Services</span>
                                      <?php
                                 }
                              ?>
                            </a>
                          </li>
                           <li class="menu-item active  position-static hnavbar mb-0 px-lg-0 px-3">
                            <a href="automobile_industry.php" class="nav-link">
                                <?php
                                 if($pageName=='automobile_industry.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">Automobile Industry</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>Automobile Industry</span>
                                      <?php
                                 }
                              ?>
                            </a>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown nav-item p-xxl-2 mb-0 ps-lg-0 ps-3 " style="padding:5px 0">
                           <a  class="dropdown-toggle nav-link" id="plusname3">
                           <?php
                              
                              if($pageName=='assets.php')
                              {
                                  ?>
                                  <span style="color:#34cbb7;" onclick="toggle(3)">Products</span>
                                   <?php
                              }
                              else
                              {
                                   ?>
                                  <span onclick="toggle(3)">Products</span>
                                   <?php
                             }
                             ?>
                            </a>
                           <style>
                               .crt_mobile_menu .menu-box .menu-outer ul.navbar_nav li ul {
                                   border-top:0px !important;
                                   margin-left:0 !important;
                               }
                               .crt_mobile_menu .menu-box .menu-outer ul.navbar_nav li a.nav-link {
                                       padding: 0px 62px 0px 0px;
                               }
                               
                               .crt_mobile_menu .menu-box .menu-outer ul.navbar_nav li.dropdown .dropdown-btn {
                                position: absolute;
                                right: 14px;
                                top: 15px;
                                height: 30px;
                                width: 30px;
                                line-height: 30px;
                                text-align: center;
                                border: 1px solid var(--border-color-dark);
                                border-radius: 3px;
                                cursor: pointer;
                                z-index: 99999;
                            }
                           </style>
                           
                            <ul class="dropdown-menu width_65_percentage top-100 ms-0 border-0 border-top-0" style="min-width:550px;"  >
                                             <li class="mb-0  ps-lg-0 ps-3">
                                                <div class="row">
                                                  <?php 
                                                      $quary = "SELECT * FROM `assets` WHERE `status`='Active'";
                                                      $assets = mysqli_query($conn, $quary);
                                                      if ($assets) {
                                                        foreach ($assets as $row) {
                                                            // echo $row['title'];
                                                         $url = str_replace(' ', '+',$row['title']);
                                                    ?>
                                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ps-2">
                                                      <div class="list_item_box style_one">
                                                            <a href="products.php?nm=<?php echo $url;?>" class="dropdown-item nav-link">
                                                                <span class="span123 pb-lg-0 pb-3" style="line-height:40px"><?php echo $row['title'];?></span>
                                                            </a>
                                                      </div>
                                                   </div>
                                                <?php 
                                                    }
                                                  }
                                                  ?>
                                                </div>
                                             </li>
                                          </ul>
                            <!--<div class="dropdown-btn" onclick="toggleIcon(icon2)"><i class="fa-solid fa-plus" id="icon2"></i></div>-->
                        </li>
                          <!--<li class="menu-item active  position-static ">-->
                          <!--  <a href="index.php" class="nav-link">--> 
                          <!--    <span>Industry</span>-->
                          <!--  </a>-->
                          <!--</li>-->
                          <li class="menu-item menu-item-has-children dropdown nav-item  p-xxl-2 mb-0 ps-3 ps-lg-0" style="padding:5px 0">
                            <a  class="dropdown-toggle nav-link"  id="plusname4">
                               
                                <?php
                                 if($pageName=='case_studies.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;" onclick="toggle(4)">Case Studies</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span onclick="toggle(4)">Case Studies</span>
                                      <?php
                                 }
                                ?>
                            </a>
                            <ul class="dropdown-menu top-100 ms-0 " style="min-width: 350px;">
                                <li class="menu-item  nav-item border-0 mb-0 ps-lg-0 ps-3">
                                     <a href="case_studies.php" class="dropdown-item nav-link">
                                        <span class="span123 pb-3" style="line-height:20px">Machine Manufacturer (Lohia Group)</span>
                                    </a>
                                </li>
                                 <li class="menu-item  nav-item border-0 mb-0 ps-lg-0 ps-3">
                                   <a href="cycle_manufacturer.php" class="dropdown-item nav-link">
                                        <span class="span123 pb-3" style="line-height:20px">Cycle Manufacturer</span>
                                    </a>
                                </li>
                                 <li class="menu-item  nav-item border-0 mb-0 ps-lg-0 ps-3">
                                      <a href="ups.php" class="dropdown-item nav-link">
                                        <span class="span123 pb-3" style="line-height:20px">Supply Chain & Logistics (UPS)</span>
                                    </a>
                                </li>
                                
                            </ul>
                                                       
                            <!--<div class="dropdown-btn" onclick="toggleIcon(icon1)"><i class="fa-solid fa-plus" id="icon1"></i></div>-->
                          </li>
                          
                          <script>
                           function toggleSection(div) {
          
                            var icon = div.querySelector('.icon1');
                            
                            if (icon.classList.contains('fa-plus')) {
                                  var xyz = document.getElementsByClassName("icon1");
                            for (var i = 0; i < xyz.length; i++) {
                                xyz[i].className = "fa fa-plus icon1";
                            }
                
                                icon.className = "fa fa-minus icon1";
                            } else {
                                  var xyz = document.getElementsByClassName("icon1");
                            for (var i = 0; i < xyz.length; i++) {
                                xyz[i].className = "fa fa-plus icon1";
                            }
                
                            }
                        }
                        
                        function toggle(id){
                             var y = window.matchMedia("(min-width: 1000px)");
                                if (y.matches) {
                                } else {
                                    // For screen widths below 1000px
                                   document.getElementById("plus"+id).click();
                                }
                        }
                      
                        </script>
                          <li class="menu-item position-static hnavbar mb-0 px-lg-0 px-3">
                            <a href="about_us.php" class="nav-link">
                                <?php
                                 if($pageName=='about_us.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">About Us</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>About Us</span>
                                      <?php
                                 }
                                ?>
                            </a>
                          </li>
                          <li class="menu-item   position-static hnavbar mb-0 px-lg-0 px-3">
                            <a href="contact_us.php" class="nav-link">
                                <?php
                                 if($pageName=='contact_us.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">Contact Us</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>Contact Us</span>
                                      <?php
                                 }
                                ?>
                              
                            </a>
                          </li>
                           <li class="menu-item   position-static hnavbar mb-0 px-lg-0 px-3">
                            <a href="career.php" class="nav-link">
                                <?php
                                 if($pageName=='career.php')
                                 {
                                     ?>
                                     <span style="color:#34cbb7;">Career</span>
                                      <?php
                                 }
                                 else
                                 {
                                      ?>
                                     <span>Career</span>
                                      <?php
                                 }
                                ?>
                              
                            </a>
                          </li>
                          <!--<li class="menu-item menu-item-has-children dropdown nav-item">-->
                          <!--                          <a href="#" class="dropdown-toggle nav-link">-->
                                                        <?php
                                                             if($pageName=='career.php')
                                                             {
                                                                 ?>
                                                                 <!--<span style="color:#34cbb7;">More</span>-->
                                                                  <?php
                                                             }
                                                             else
                                                             {
                                                                  ?>
                                                                 <!--<span>More</span>-->
                                                                  <?php
                                                             }
                                                            ?>
                                                <!--    </a>-->
                                                <!--    <ul class="dropdown-menu">-->
                                                <!--        <li class="menu-item  nav-item">-->
                                                <!--            <a href="career.php" class="dropdown-item nav-link">-->
                                                <!--                <span class="span123">Career</span>-->
                                                <!--            </a>-->
                                                <!--        </li>-->
                                                        
                                                <!--    </ul>-->
                                                
                        </ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar_outer mod_btn_enable get_sticky_headermobile disLapNone">
            <div class="medium-container">
              <div class="row align-items-center" >
                <div class="col-lg-12 row menu_column">
                  <div class="logo mid_logo_icon col-8 text-start ps-0">
                    <a href="/" class="logo_mid">
                      <img src="assets/images/crmLanding_logo1.png" style="height:40px; " alt="CRM Landing" class="logo_default">
                    </a>
                  </div>
                  <div class="col-3 p-0 d-flex justify-content-end gap-2 mt-1 pe-1">
                       <div class="dropdown1 m-0">
                        <img src="assets/images/mail.png" style="height:35px !important;" class="hover-img-mail" id="head_mail2">
                        <div class="dropdown-content" style="left:-55px;top:43px">
                           <a href="mailto:info@crmlanding.in">info@crmlanding.in</a>
                               <a href="mailto:sales@crmlanding.in">sales@crmlanding.in</a>
                               <a href="mailto:career@crmlanding.in">career@crmlanding.in</a>
                        </div>
                      </div>
                    <div class="dropdown1 m-0">
                        <img src="assets/images/call.png" style="height:35px !important;" id="head_call2" class="hover-img-call">
                         <div class="dropdown-content" style="left:-100px;top:43px">
                                 <a href="tel:+918619948778">Sales +91 86199 48778</a>
                                <a href="tel:+919663870199">Sales +91 96638 70199</a>
                                <!--<a href="tel:+17162266939">sales +1 (716) 226-6939</a>-->
                                <!--<a href="tel:+442032894727">sales +44 20 3289 4727</a>-->
                                <a href="tel:+919783047112">HR +91 97830 47112</a>
                        </div>
                    </div>
                  </div>
                   <script>
                          
                          function headimg2(str){
                              if(str==1){
                                  document.getElementById("head_mail2").src="assets/images/mail1.png";
                              }else{
                                  document.getElementById("head_call2").src="assets/images/call2.png";
                              }
                          }
                          
                          function headimg22(str){
                              if(str==1){
                                  document.getElementById("head_mail2").src="assets/images/mail.png";
                              }else{
                                  document.getElementById("head_call2").src="assets/images/call.png";
                              }
                          }
                      </script>
                  <div class="navbar_togglers hamburger_menu col-1 pe-0">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line" style="color: white !important;"></span>
                  </div>
                  <div class="header_content_collapse">
                    <div class="header_menu_box p-0">

                      <div class="navigation_menu">
                        <ul id="myNavbar" class="navbar_nav">
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>Home</span>
                            </a>
                          </li>
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>Services</span>
                            </a>
                          </li>
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>Assets</span>
                            </a>
                          </li>
                           <li class="menu-item active  position-static ">
                            <a href="#" class="nav-link">
                              <span>Automobile Industry</span>
                            </a>
                          </li>
                          <li class="menu-item active  position-static ">
                            <a href="#" class="nav-link">
                              <span>Case Studies</span>
                            </a>
                          </li>
                          
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>Industry</span>
                            </a>
                          </li>
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>More</span>
                            </a>
                          </li>
                          <li class="menu-item active  position-static ">
                            <a href="index.php" class="nav-link">
                              <span>About Us</span>
                            </a>
                          </li>

                        </ul>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
      <!----header-end---->


    <style>
        .ripple {
            /* box-sizing:border-box; */
            position: relative;
            z-index: 100;
        }

        .ripple:before {
            animation: ripple 2s ease-out infinite;
            border: solid 2px #6e6969;
            border-radius: 1em;
            bottom: 0;
            /* box-sizing:border-box; */
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .ripple:after {
            animation: ripple 2s 1s ease-out infinite;
            /* border:solid 2px #25d366; */
            border-radius: 1em;
            bottom: 0;
            box-sizing: border-box;
            content: "";
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        @keyframes ripple {
            0% {
                opacity: .15;
            }

            100% {
                border-radius: 2em;
                opacity: 0;
                transform: scale(3);
            }
        }
    </style>
    
   
