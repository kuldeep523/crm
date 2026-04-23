<!DOCTYPE html>
<?php include('admin/connection.php'); ?>
<html lang="en" style="scrollbar-width:none">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="icon" href="assets/images/favicon_crm.png" type="image/x-icon">
    <style>
        body {
            font-family: 'Aldrich', sans-serif;
        }
        .other_fam{
            font-family: "DM Sans", sans-serif;
        }
        .navbar-custom {
            background-color: white;
            padding: 1rem 0;
        }
        .navbar-brand img {
            height: 40px;
        }
        .navbar-nav .nav-link {
            font-size: 1rem;
            color: black;
        }
        .header-content {
            text-align: left;
            padding-top: 3rem;
        }
        .header-content h1 {
            font-size: 3.1rem;
            font-weight: 400;
            color: black;
        }
        .header-content h1 span, h2 span {
            color: #007bff;
        }
        .header-content .btn-primary {
            background-color: #007bff;
            border: none;
            font-size: 1rem;
        }
        .header-content .powered-by {
            margin-top: 20px;
            display: flex;
            align-items: center;
            font-size: 1rem;
        }
        .header-content .powered-by img {
            height: 40px;
            margin-left: 5px;
        }
        .header-image {
            max-width: 100%;
            height: auto;
        }
        
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light navbar-custom sticky-top">
    <div class="col-12 d-lg-none text-center d-block">
        <a class=" " href="#">
                    <img src="assets/images/semi/logo.jpg" alt="CRM Landing Logo" class="w-50">
                </a>
    </div>
    <div class="container pe-0">
        <div class="row w-100">
            <!-- Left Section: Logo (Hidden on mobile) -->
            <div class="col-md-4 d-lg-flex d-none  align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/semi/logo.jpg" alt="CRM Landing Logo">
                </a>
            </div>
            
            <!-- Center Section: Navigation Links or Logo (Visible on mobile) -->
            <div class="col-md-4 d-none d-lg-flex justify-content-center align-items-center">
                 <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0 other_fam">
                        <!--<li class="nav-item dropdown">-->
                        <!--    <a class="nav-link dropdown-toggle" href="#" id="featuresDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                        <!--        Features-->
                        <!--    </a>-->
                        <!--    <ul class="dropdown-menu" aria-labelledby="featuresDropdown">-->
                        <!--        <li><a class="dropdown-item" href="#">Feature 1</a></li>-->
                        <!--        <li><a class="dropdown-item" href="#">Feature 2</a></li>-->
                        <!--    </ul>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="#">Contact</a>-->
                        <!--</li>-->
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="#">Schedule Demo</a>-->
                        <!--</li>-->
                    </ul>
                </div>
            </div>
            
            <!-- Right Section: Another Logo or Extra Content (Hidden on mobile) -->
            <div class="col-md-4 d-none d-lg-flex align-items-center justify-content-end px-0">
                <a class="navbar-brand me-0" href="#">
                    <img src="assets/images/semi/grp.png" alt="CRM Landing Logo">
                </a>
            </div>
        </div>
    </div>
</nav>



<style>
@media (max-width: 500px)
{
     .navbar-custom {
            padding: 0.5rem 0;
        }
    
     .header-content .powered-by {
            margin-top: 0px;
        }
        
    .header-content {
            padding: 1rem 0;
        }
     .header-content h1 {
            font-size: 2.5rem !important;
        }
    .header-content .powered-by img
    {
        height:30px !important;
    }
    .video-container {
    height: 650px !important;
    }
    .video-container .caption 
    {
      top:50% !important;
    }
    .features
    {
        line-height: 25px !important;
    }
    .bg-case-study
    {
        background-size:100% 100%;
        background-image: url(assets/images/semi/bg-mobile.jpg) !important;
        background-repeat: no-repeat;
        height:400px !important;
    }
    .overlay-text {
    position: absolute;
    top: -26px !important;
    left: 50%;
    transform: translateX(-50%);
    font-size: 3.2rem !important;
    color: rgba(0, 0, 0, 0.1);
    z-index: -1;
    white-space: nowrap;
}
.count-font{
    font-size:100px !important;
}
}
@media (min-width: 500px) and (max-width: 768px)
{
   
}
@media (min-width: 768px) and (max-width: 991px)
{
    
}
@media (min-width: 992px) and (max-width: 1200px)
{
   
}
@media (min-width: 1000px) and (max-width: 1200px)
{
    .video-container {
    height: 500px;
    width: 100%;
    position: relative;
    }
    
    .video-container video {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: fill;
      z-index: 0;
    }
    
    /* Just styling the content of the div, the *magic* in the previous rules */
    .video-container .caption 
    {
      z-index: 1;
      position: relative;
      text-align: center;
      color: #dc0000;
      padding: 10px;
    }
    
}
@media (min-width: 1200px) and (max-width: 1400px)
{
    .video-container {
    height: 500px;
    width: 100%;
    position: relative;
    }
    
    .video-container video {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: fill;
      z-index: 0;
    }
    
    /* Just styling the content of the div, the *magic* in the previous rules */
    .video-container .caption 
    {
      z-index: 1;
      position: relative;
      text-align: center;
      color: #dc0000;
      padding: 10px;
    }
    
    .bg-img{
        width:42.6% !important;
    }
    .bg-color{
        left:42.6% !important;
    }
    .bg-img-r{
        width:41.3% !important;
    }
    .bg-color-r{
        right:41.3% !important;
    }
}
        
@media (min-width: 1400px)
{
    .video-container {
    height: 530px !important;
    
    }
    
    .video-container video {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: fill;
      z-index: 0;
    }
    
    /* Just styling the content of the div, the *magic* in the previous rules */
    .video-container .caption 
    {
      z-index: 1;
      position: relative;
      text-align: center;
      color: #dc0000;
      padding: 10px;
      margin-top:50px;
    }
    
    
    
}

    
.video-container {
    height: 540px;
    width: 100%;
    position: relative;
    }
    
    .video-container video {
      width: 100%;
      height: 100%;
      position: absolute;
      object-fit: fill;
      z-index: 0;
    }
    
    /* Just styling the content of the div, the *magic* in the previous rules */
    .video-container .caption 
    {
      z-index: 1;
      position: relative;
      top:42%;
      transform:translate(0,-50%);
      color: #dc0000;
    }
</style>
<style>
    .contact_hading {
    font-size: 2.5rem;
    /*font-weight: bold;*/
    position: relative;
    color: #000;
    text-transform: uppercase;
    margin-bottom: 40px;
}
 
.overlay-text {
    position: absolute;
    top: -38px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 4rem;
    color: rgba(0, 0, 0, 0.1);
    z-index: -1;
    white-space: nowrap;
}
 .overlay1-text {
    position: absolute;
    top: -38px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 1.9rem;
    color: rgba(0, 0, 0, 0.1);
    z-index: -1;
    white-space: nowrap;
}
.contact-info {
    max-width: 100%;
    background-color: #000;
    padding: 30px;
    border-radius: 8px;
}
 
.contact-info p {
    margin: 0;
    padding: 10px 0;
    display: flex;
    align-items: center;
    font-size: 1rem;
}
 
.contact-info i {
    font-size: 1.5rem;
    margin-right: 10px;
}
 
form .form-control {
    border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    padding-left: 0;
    background-color: transparent;
}
 
form .form-control:focus {
    box-shadow: none;
    border-color: #000;
}
 
.btn-primary {
    background-color: #007bff;
    border: none;
    text-transform: uppercase;
}
 
.btn-primary:hover {
    background-color: #0056b3;
}
.btnnew
{
    font-size:12px !important;
    padding:14px 30px !important;
    border-radius:0px !important;
    font-weight:400;
}
</style>
    <!-- Header Section -->
<div class="container px-0 ">
    <div class="">
        <p class="bg-primary text-white text-center py-2 d-lg-none d-block mt-1" style="font-size:13px">
                    Sales | Service | Spare | Accessories | Value Chain
                </p>
      <header class="container px-lg-0">
        <div class="row align-items-center py-lg-3 pb-lg-0 py-0 px-3 my-4"> 
            
            <div class="col-md-7 header-content py-0">
                <h1 class="mb-0 mb-lg-2"><span>Automated 360 Insights</span> for Automotive Dealerships </h1>
                <!--<h1 class="mb-0 mb-lg-2"><span>Analytics Dashboard</span> for Automotive Dealerships </h1>-->
                <div class="mt-2">
                    <div class="powered-by ">
                        <span class="p-content pe-2 text-dark ">Powered By</span>
                        <img src="assets/images/semi/tab_logo.png" alt="Tableau Logo">
                    </div>
                </div>
                
                <div class="pt-3 d-none d-lg-block">
                    <a href="#dashboard" class="btn btn-primary mt-3 btnnew rounded-0 p-2 py-5">VIEW DASHBOARD</a>
                </div>
                
                 <script>
                     function book() {
    document.querySelector('.calendly-badge-content').click();
  }
                 </script>  
                
            </div>
            <div class="col-md-5 header-content  text-center">
                <!--<img  src="assets/images/semi/head_main.png" class="img-fluid rounded-2">-->
                <!--<img  src="assets/images/semi/hero.gif" class="img-fluid rounded-4">-->
                <!--<video src="assets/images/semi/hero_vid.mp4" class="img-fluid" autoplay muted></video>-->
                
                <!--is video ki  height kam hainisliye row par my-4 add kra hai-->
                 <video src="assets/images/semi/hero_vid_with.mp4" class="img-fluid" autoplay muted></video>
            </div>
            <div class="col-6 p-0 d-block d-lg-none">
                 <div class=" p-0">
                    <a href="#dashboard" class="btn btn-primary btnnew rounded-0 p-1">VIEW DASHBOARD</a>
                </div>
            </div>
            <div class="col-6 d-block d-lg-none">
                 <div class="pt-3" style="margin-top:-60px;">
                   <img  src="assets/images/semi/t.png" class="img-fluid ps-lg-2">
                </div>
            </div>
            
        </div>
    </header>
    </div>
</div>
<div class="container-fluid p-0 pb-5 pt-2">
    <!--<img src="assets/images/semi/tyre.gif"  class="img-fluid  w-100 d-lg-block d-none" stylr="height:97px">-->
    <video src="assets/images/semi/Tyre.mp4" class="img-fluid  w-100 d-lg-block d-none" autoplay muted></video>
</div>





<style>
     .stats {
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .stats .stat-item {
            margin-bottom: 15px;
        }
        .stats .stat-item span {
            display: block;
            font-size:50px;
            color: #007bff;
        }
        .stats .stat-item div {
            font-size:24px;
        }
         .form-container {
            background-color: linear-gradient(180deg, #ffffff 0%, #e6f3ff 100%); /* replaced card color with background color */
            padding: 40px;
            border-radius: 8px;
            margin-top: 40px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color:#F7F9FB;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: black;
        }
</style>
  <script>
    window.addEventListener('load', function() {
        const delay = 3000; // Delay before starting the counters

        setTimeout(function() {
            function updateCounter(counterElement, target, speed, suffix = '+') {
                let count = 0;
                function incrementCounter() {
                    if (count <= target) {
                        counterElement.innerText = suffix ? count + suffix : `${count}/${target}`;
                        count++;
                        setTimeout(incrementCounter, speed);
                    }
                }
                incrementCounter();
            }

            updateCounter(document.getElementById('counter1'), 15, 200);
            updateCounter(document.getElementById('counter2'), 120, 50);
            updateCounter(document.getElementById('counter3'), 5, 300, '');
        }, delay);
    });
</script>
    <section class="mb-4">
        <div class="container-fluid ">
        <div class="stats row">
            <div class="col-md-4 stat-item">
                <span class="counter" id="counter1">0</span>
                <div>Years of Service</div>
            </div>
            <div class="col-md-4 stat-item">
                <span class="counter" id="counter2">0</span>
                <div>Happy Customers</div>
            </div>
            <div class="col-md-4 stat-item">
                <span class="counter" id="counter3">0</span>
                <div>CSAT</div>
            </div>
        </div>



<a  name="dashboard" id="dashboard"></a>
<section class="margin-top">
     <style>
        /* Basic reset and styling */
        * {
            margin: 0;
            padding: 0;
        }

        body {
            /*padding: 20px;*/
            /*background: #eee;*/
            /*user-select: none;*/
        }

        [type=radio] {
            display: none;
        }

        /* Slider container */
        #slider {
            width: 100%;
            height: 35vw;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }
.margin-top{
            margin-block: 80px;
        }
        /* Slider image labels */
        .slider-slide {
            margin: auto;
            width: 60%;
            height: 85%;
            border-radius: 4px;
            position: absolute;
            left: 0;
            right: 0;
            cursor: pointer;
            transition: transform 0.6s ease, box-shadow 0.6s ease, filter 0.6s ease, opacity 0.6s ease;
            background-size: cover;
            background-position: center;
            opacity: 0; /* Hide all slides initially */
            transform: scale(1); /* Default scale for active slide */
        }

        /* Show only one inactive slide on each side of the active slide */
        #s1:checked ~ #slide1,
        #s2:checked ~ #slide2,
        #s3:checked ~ #slide3,
        #s4:checked ~ #slide4,
        #s5:checked ~ #slide5 {
            opacity: 1; /* Show active slide */
            filter: none;
            transform: scale(1); /* Scale for active slide */
                        box-shadow: 0 13px 25px 0 rgba(0,0,0,.3), 0 11px 7px 0 rgba(6, 96, 252, 0.20);
        }

        #s1:checked ~ #slide2,
        #s1:checked ~ #slide5,
        #s2:checked ~ #slide1,
        #s2:checked ~ #slide3,
        #s3:checked ~ #slide2,
        #s3:checked ~ #slide4,
        #s4:checked ~ #slide3,
        #s4:checked ~ #slide5,
        #s5:checked ~ #slide4,
        #s5:checked ~ #slide1 {
            opacity: 1; /* Show one inactive slide on each side */
            filter: blur(5px);
            transform: translate3d(15%, 0, -100px) scale(0.9); /* Smaller height for inactive slides */
        }

        #slide1,
        #slide2,
        #slide3,
        #slide4,
        #slide5 {
            filter: blur(5px);
            opacity: 0;
            transform: scale(0.9); /* Default scale for inactive slides */
        }

        /* Slide transition effects */
        #s1:checked ~ #slide4, #s2:checked ~ #slide5,
        #s3:checked ~ #slide1, #s4:checked ~ #slide2,
        #s5:checked ~ #slide3 {
            box-shadow: 0 1px 4px 0 rgba(6, 96, 252, 0.20);
            transform: translate3d(-30%,0,-200px);
        }

        #s1:checked ~ #slide5, #s2:checked ~ #slide1,
        #s3:checked ~ #slide2, #s4:checked ~ #slide3,
        #s5:checked ~ #slide4 {
            box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(6, 96, 252, 0.20);
            transform: translate3d(-30%,0,-100px);
        }

        #s1:checked ~ #slide1, #s2:checked ~ #slide2,
        #s3:checked ~ #slide3, #s4:checked ~ #slide4,
        #s5:checked ~ #slide5 {
            box-shadow: 0 13px 25px 0 rgba(0,0,0,.3), 0 11px 7px 0 rgba(6, 96, 252, 0.20);
            transform: translate3d(0,0,0);
        }

        #s1:checked ~ #slide2, #s2:checked ~ #slide3,
        #s3:checked ~ #slide4, #s4:checked ~ #slide5,
        #s5:checked ~ #slide1 {
            box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(6, 96, 252, 0.20);
            transform: translate3d(30%,0,-100px);
        }

        #s1:checked ~ #slide3, #s2:checked ~ #slide4,
        #s3:checked ~ #slide5, #s4:checked ~ #slide1,
        #s5:checked ~ #slide2 {
            box-shadow: 0 1px 4px 0 rgba(6, 96, 252, 0.20);
            transform: translate3d(30%,0,-200px);
        }
        .dot-controls {
          display: flex;
          justify-content: center;
          position: absolute;
          bottom: -37px;
          width: 100%;
          text-align: center;
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            #slider {
                height: 45vh;
            }
    
            .slider-slide {
                width: 100%;
                height: 60%;
            }
            .dot-controls {
        
          bottom: 50px;
          
        }
        
        .margin-top{
            margin-block: 150px 0;
        }

            /* Mobile transition effects */
            #s1:checked ~ #slide4, #s2:checked ~ #slide5,
            #s3:checked ~ #slide1, #s4:checked ~ #slide2,
            #s5:checked ~ #slide3 {
                box-shadow: 0 1px 4px 0 rgba(6, 96, 252, 0.20);
                transform: translate3d(0,-30%, -200px);
            }

            #s1:checked ~ #slide5, #s2:checked ~ #slide1,
            #s3:checked ~ #slide2, #s4:checked ~ #slide3,
            #s5:checked ~ #slide4 {
                box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(6, 96, 252, 0.20);
                transform: translate3d(0,-29%, -100px);
            }

            #s1:checked ~ #slide1, #s2:checked ~ #slide2,
            #s3:checked ~ #slide3, #s4:checked ~ #slide4,
            #s5:checked ~ #slide5 {
                            box-shadow: 0 13px 25px 0 rgba(0,0,0,.3), 0 11px 7px 0 rgba(6, 96, 252, 0.20);
                transform: translate3d(0,0,0);
            }

            #s1:checked ~ #slide2, #s2:checked ~ #slide3,
            #s3:checked ~ #slide4, #s4:checked ~ #slide5,
            #s5:checked ~ #slide1 {
                box-shadow: 0 6px 10px 0 rgba(0,0,0,.3), 0 2px 2px 0 rgba(6, 96, 252, 0.20);
                transform: translate3d(0,29%, -100px);
            }

            #s1:checked ~ #slide3, #s2:checked ~ #slide4,
            #s3:checked ~ #slide5, #s4:checked ~ #slide1,
            #s5:checked ~ #slide2 {
                box-shadow: 0 1px 4px 0 rgba(6, 96, 252, 0.20);
                transform: translate3d(0,30%, -200px);
            }

            .nav-buttons {
                display: none !important;
            }

            .dot-controls {
                display: flex;
            }
            .s_c{
                top:-90px!important;
        }
        }

        /* Navigation buttons styling */
        .nav-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }

        .nav-buttons button {
            color: rgba(0, 0, 0, 0.5);
            border: none;
            /*color: white;*/
            padding: 10px;
            cursor: pointer;
        }

        .nav-buttons button:hover {
            color: rgba(0, 0, 0, 0.7);
        }

        /* Dot controls styling */
        

        .dot-controls .dot {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #BABABA;
            margin: 0 5px;
            cursor: pointer;
        }

        .dot-controls .dot.active {
          width: 28px;
          border-radius: 50px;
          background-color: #0660FC;
        }

        #slide1 { background-image: url('assets/images/semi/ENQUIRY.jpg'); background-size: 100% 100%;}
        #slide2 { background-image: url('assets/images/semi/Sales.jpg');background-size: 100% 100%; }
        #slide3 { background-image: url('assets/images/semi/Spare-parts.jpg');background-size: 100% 100%; }
        #slide4 { background-image: url('assets/images/semi/supplychain.jpg');background-size: 100% 100%; }
        #slide5 { background-image: url('assets/images/semi/Sales.jpg'); background-size: 100% 100%;}
        
        .s_c{
               position: absolute;
                bottom: -80px;
                width:100%;
                text-align:center;
                opacity:0;
                font-weight:400;
                transition:all 0.5s;
        }
       #s1:checked ~ #slide1 .s_c, #s2:checked ~ #slide2 .s_c,
        #s3:checked ~ #slide3 .s_c, #s4:checked ~ #slide4 .s_c,
        #s5:checked ~ #slide5 .s_c {
                opacity:1;
            }
    </style>
    <div  class="container-sm d-flex justify-content-center">
        <div class="row" id="slider">
            
                <input type="radio" name="slider" id="s1">
                <input type="radio" name="slider" id="s2">
                <input type="radio" name="slider" id="s3" checked>
                <input type="radio" name="slider" id="s4">
                <input type="radio" name="slider" id="s5">
                <label for="s1" class="slider-slide" id="slide1"><div class="s_c"><h4>Enquiry Dashboard</h4></div></label>
                <label for="s2" class="slider-slide" id="slide2"><div class="s_c"><h4>Sales Dashboard</h4></div></label>
                <label for="s3" class="slider-slide" id="slide3"><div class="s_c"><h4>Spare Parts Dashboard</h4></div></label>
                <label for="s4" class="slider-slide" id="slide4"><div class="s_c"><h4>Supply Chain Dashboard</h4></div></label>
                <label for="s5" class="slider-slide" id="slide5"><div class="s_c"><h4>Sales Dashboard</h4></div></label>
                <div class="nav-buttons">
                    <button id="prev">&#10094;</button>
                    <button id="next">&#10095;</button>
                </div>
                
            
            <div class="dot-controls col-lg-12 col-2">
                <div class="dot" data-target="s1"></div>
                <div class="dot" data-target="s2"></div>
                <div class="dot" data-target="s3"></div>
                <div class="dot" data-target="s4"></div>
                <div class="dot" data-target="s5"></div>
            </div>
        </div>
    </div>
        
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function myFunction() {
                document.getElementById('next').click();
            }
            setInterval(myFunction, 3000);
        });
    </script>
    <script>


        const radios = document.querySelectorAll('input[name="slider"]');
        const dots = document.querySelectorAll('.dot-controls .dot');

        let index = 2; // Starting slide index

        document.getElementById('prev').addEventListener('click', () => {
            index = (index === 0) ? radios.length - 1 : index - 1;
            radios[index].checked = true;
            updateDots();
        });

        document.getElementById('next').addEventListener('click', () => {
            index = (index === radios.length - 1) ? 0 : index + 1;
            radios[index].checked = true;
            updateDots();
        });

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                index = i;
                radios[index].checked = true;
                updateDots();
            });
        });

        function updateDots() {
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        // Initialize dots
        updateDots();
    </script>
</sction>
        <div class="form-container zero-cost-consultation col-md-8 offset-md-2  d-none">
            <h3 class="text-center">Get a Zero-Cost Salesforce Consultation</h3>
            <form>
                            <div class="row mb-3">
                                <div class="col-12 mt-3">
                                    <input type="text" class="form-control " placeholder="Name">
                                </div>
                                <div class="col mt-3">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col mt-3">
                                    <input type="text" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="col mt-3">
                                    <input type="tel" class="form-control" placeholder="Business Phone">
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btnnew mt-4 text-uppercase">Book a Call</button>
                            </div>
                        </form>
        </div>
    </div>
    </section>

 <style>
        @import url('https://fonts.googleapis.com/css2?family=Aldrich&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
         
        .count-font{
            font-size: 130px;
            -webkit-text-stroke: 0.5px #FFF;
            color:transparent;
        }
        .p-content
        {
            font-family: "DM Sans", sans-serif;
            font-weight: 400;
            line-height: 30px;
            font-size: 18px;
        }
    </style>
<section class=" py-5">
    <div class="py-3">
        <h2 class="text-center position-relative contact_hading d-lg-none d-block fs-4">
                            <span class="overlay1-text " style="-webkit-text-stroke: 0.5px #0660fc57;color: transparent;top:-15px">Trusted by Clients</span>
                            Trusted by Clients
                        </h2>
                     <h2 class="text-center position-relative contact_hading d-lg-block d-none">
                            <span class="overlay-text" style="-webkit-text-stroke: 0.5px #0660fc57;color: transparent;">Trusted by Clients</span>
                            Trusted by Clients
                        </h2>
                </div>
                
    <div class="position-relative my-5">
        
        <div class="container-sm ">
                    <div class="row flex-column-reverse flex-lg-row">
                        
                        <div class="col-lg-7 col-12 ">
                            <div class="row">
                                
                                <div class="col-lg-4 col-12 ps-0 d-lg-block d-none">
                                    
                                        <img src="assets/images/semi/hl1.png" alt="" class="img-fluid">
                                   
                                </div>
                                <div class="col-lg-8 col-12 pt-5 pt-lg-0">
                                    <h4>
                                        Accelerating Excellence with Our Business Dashboarding Solution
                                    </h4>
                                    <p class="pt-2 p-content">
                                      Mercedes - Silver Arrow represents the pinnacle of luxury and innovation in the automotive industry. With a commitment to excellence, Silver Arrow is renowned for its high-performance vehicles, cutting-edge technology, and unparalleled customer experience.
                                      </p>
                                </div>
                                <div class="col-lg-4 col-12   py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Data Consolidation</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Real-time Analytics</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4">
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Customizable Dashboards</h5>
                                </div>
                            </div>
                            <div class="position-absolute start-0 bottom-0 h-75 w-50 d-lg-block d-none""" style="z-index: -1;">
                                <img src="assets/images/semi/image-bg-1.jpg " alt="" class="w-100 h-100">
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 p-0 px-lg-3 d-lg-block d-none">
                            
                           <div class="ḥ-100">
                               
                            <img src="assets/images/semi/image39.png " alt="" class="img-fluid h-100 ">
                           </div>
                          <div class="position-absolute  end-0 bottom-0 d-lg-block d-none bg-img-r" style="background-color:  #0660FC;width: 41.7%;z-index: -1;height: 40%;">
                            <div class="h-100" style="background-color:  #0660FC;">
                                
                            </div>
                           </div>
                          <div class="position-absolute  bottom-0 d-lg-block d-none bg-color-r" style="background-color:  #000000;right: 41.7%;z-index: 2;height: 30%;">
                                <img src="assets/images/semi/image40.png" alt="" class="img-fluid h-100">
                           </div>
                           <h1 class="count-font  py-3 text-end d-lg-block d-none" style="line-height: 100px;">01</h1>
                        </div>
                         <div class="col-12 d-lg-none d-block p-0">
                                    <img src="assets/images/semi/g1.jpg" class="img-fluid"> 
                                </div>
                    </div>
                </div>
    </div>
                <!--right section-->
    <div class="position-relative my-5">
        
        <div class="container-sm ">
                    <div class="row">
                         <div class="col-12 d-lg-none d-block p-0">
                                    <img src="assets/images/semi/g2.jpg" class="img-fluid"> 
                                </div>
                        <div class="col-lg-5 p-0  col-12 ">
                           
                           <div class="ḥ-100 px-0 d-lg-block d-none">
                               <img src="assets/images/semi/image41.png" alt="" class="img-fluid h-100 ">
                           </div>
                           <div class="position-absolute  start-0 bottom-0 d-lg-block d-none bg-img" style="background-color:  #0660FC; width:42.9%; z-index: -1; height: 40%;">
                            <div class="h-100" style="background-color:  #0660FC;">
                                
                            </div>
                           </div>
                           <div class="position-absolute  bottom-0  d-lg-block d-none bg-color" style="background-color:  #000000; left:42.9%; z-index: 2;height: 28.50%;">
                                <img src="assets/images/semi/image42.png" alt="" class="img-fluid h-100">
                           </div>
                           <h1 class="count-font  py-3 d-lg-block d-none" style="line-height: 100px;">02</h1>
                        </div>
                        <div class="col-lg-7 col-12 ps-3 ">
                            <div class="row ps-lg-3">
                                <div class="col-lg-8 col-12 px-lg-0  pt-5 pt-lg-0">
                                    <h4>
                                       Increasing Efficiency with Our Visual Dashboard Solution
                                    </h4>
                                    <p class="pt-2 p-content ">
                                        Vida by Hero Electric is a trailblazer in the electric two-wheeler market, dedicated to providing sustainable, efficient, and reliable electric mobility solutions. Vida focuses on innovation and customer satisfaction to lead the transition to green transportation.
                                        </p>
                                </div>
                                <div class="col-lg-4 col-12 pe-0">
                                    
                                        <img src="assets/images/semi/hl2.png" alt="" class="img-fluid d-lg-block d-none">
                                    
                                </div>
                                <div class="col-lg-4 col-12   ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3 pe-3" style="border-color: #FF5311 !important;">Unified Data View</h5>
                                </div>
                                <div class="col-lg-4 col-12    ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #FF5311 !important;">Dynamic Reporting Setup</h5>
                                </div>
                                <div class="col-lg-4 col-12  ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #FF5311 !important;">Customizable Dashboards</h5>
                                </div>
                            </div>
                            <div class="position-absolute end-0 bottom-0 h-75 w-50 d-lg-block d-none"  style="z-index: -1;">
                                <img src="assets/images/semi/image-bg-1.jpg" alt="" class=" h-100 w-100">
                            </div>
                        </div>
                    </div>
                </div>
    </div>  
    
    
    
      <div class="position-relative my-5">
        
        <div class="container-sm ">
                    <div class="row flex-column-reverse flex-lg-row">
                        
                        <div class="col-lg-7 col-12 ">
                            <div class="row">
                                
                                <div class="col-lg-4 col-12 ps-0 d-lg-block d-none">
                                        <img src="assets/images/semi/hl3.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 col-12 ps-lg-0 pt-5 pt-lg-0">
                                    <h4>
                                        Transforming Operations with Our Visual Dashboard Solution
                                    </h4>
                                    <p class="pt-2 p-content">
                                      Mahindra is a global leader in the automotive industry, renowned for its innovative vehicles and commitment to sustainability. With a diverse portfolio ranging from SUVs to electric vehicles, Mahindra continuously strives to enhance customer experiences and operational efficiency.
                                      </p>
                                </div>
                                <div class="col-lg-4 col-12   py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Automated Data Sync</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Instant Data Updates</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4">
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Customizable Dashboards</h5>
                                </div>
                            </div>
                            <div class="position-absolute start-0 bottom-0 h-75 w-50 d-lg-block d-none""" style="z-index: -1;">
                                <img src="assets/images/semi/image-bg-1.jpg " alt="" class="w-100 h-100">
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 p-0 px-lg-3  d-lg-block d-none">
                         
                           <div class="ḥ-100">
                             
                                  <img src="assets/images/semi/image 46.jpg" alt="" class="img-fluid h-100">
                           </div>
                          <div class="position-absolute  end-0 bottom-0 d-lg-block d-none bg-img-r" style="background-color:  #0660FC;width: 41.7%;z-index: -1;height: 40%;">
                            <div class="h-100" style="background-color:  #0660FC;">
                                
                            </div>
                           </div>
                          <div class="position-absolute  bottom-0 d-lg-block d-none bg-color-r" style="background-color:  #000000;right: 41.7%;z-index: 2;height: 27%;">
                                <img src="assets/images/semi/image45.png" alt="" class="img-fluid h-100">
                           </div>
                           <h1 class="count-font  py-3 text-end d-lg-block d-none" style="line-height: 100px;">03</h1>
                        </div>
                        <div class="col-12 d-lg-none d-block p-0">
                                    <img src="assets/images/semi/g3.jpg" class="img-fluid"> 
                                </div>
                    </div>
                </div>
    </div>
                <!--right section-->
    <div class="position-relative my-5">
        
        <div class="container-sm ">
                    <div class="row">
                         <div class="col-12 d-lg-none d-block p-0">
                                    <img src="assets/images/semi/g4.jpg" class="img-fluid"> 
                                </div>
                        <div class="col-lg-5 p-0  col-12 d-lg-block d-none">
                          
                           <div class="ḥ-100 px-0 ">
                               <h1 class="count-font   d-lg-none d-block text-end " style="-webkit-text-stroke: 2.5px #0660fca3;line-height: 100px;opacity:0.2;">04</h1>
                            <img src="assets/images/semi/image-r-2.jpg" alt="" class="img-fluid h-100 ">
                           </div>
                           <div class="position-absolute  start-0 bottom-0 d-lg-block d-none bg-img" style="background-color:  #0660FC; width:42.9%; z-index: -1; height: 40%;">
                            <div class="h-100" style="background-color:  #0660FC;">
                                
                            </div>
                           </div>
                           <div class="position-absolute  bottom-0  d-lg-block d-none bg-color" style="background-color:  #000000; left:42.9%; z-index: 2;height: 28.50%;">
                                <img src="assets/images/semi/image-r-1.jpg" alt="" class="img-fluid h-100">
                           </div>
                           <h1 class="count-font  py-3 d-lg-block d-none" style="line-height: 100px;">04</h1>
                        </div>
                        <div class="col-lg-7 col-12  ">
                            <div class="row ps-lg-3">
                                <div class="col-lg-8 col-12  ps-lg-0 pt-5 pt-lg-0">
                                    <h4>
                                        Elevating Performance with Visual Dashboard
                                    </h4>
                                    <p class="pt-2 p-content ">
                                       Euler Motors is a pioneering electric vehicle (EV) manufacturer focused on developing cutting-edge commercial EVs for sustainable urban transportation. Known for their innovation, reliability, and commitment to sustainability.
                                       </p>
                                </div>
                                <div class="col-lg-4 col-12 pe-0">
                                        <img src="assets/images/semi/hl4.png" alt="" class="img-fluid d-lg-block d-none">
                                </div>
                                <div class="col-lg-4 col-12   ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Operational Efficiency</h5>
                                </div>
                                <div class="col-lg-4 col-12    ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Performance Monitoring</h5>
                                </div>
                                <div class="col-lg-4 col-12  ps-lg-0 py-xxl-4 py-lg-2 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #000 !important;">Customizable Dashboards</h5>
                                </div>
                            </div>
                            <div class="position-absolute end-0 bottom-0 h-75 w-50 d-lg-block d-none" style="z-index: -1;">
                                <img src="assets/images/semi/image-bg-1.jpg" alt="" class=" h-100 w-100">
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
    
    <div class="position-relative my-5">
        
        <div class="container-sm ">
                    <div class="row flex-column-reverse flex-lg-row">
                          
                        <div class="col-lg-7 col-12 ">
                            <div class="row">
                                 
                                <div class="col-lg-4 col-12 ps-0 d-lg-block d-none">
                                        <img src="assets/images/semi/hl5.png" alt="" class="img-fluid">
                                </div>
                                <div class="col-lg-8 col-12 pt-5 pt-lg-0">
                                    <h4>
                                       Improved Sales Performance
                                    </h4>
                                    <p class="pt-2 p-content">
                                       City Life EV is a leading electric vehicle (EV) manufacturer committed to creating sustainable and innovative transportation solutions for urban living. With a focus on eco-friendly technology and customer satisfaction, City Life EV is at the forefront of the green mobility revolution.
                                       </p>
                                </div>
                                <div class="col-lg-4 col-12   py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #AB1E22 !important;">Data Consolidation</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4" >
                                    <h5 class="border-start border-5 ps-3" style="border-color: #AB1E22 !important;">Enhanced User Experience</h5>
                                </div>
                                <div class="col-lg-4 col-12  py-xxl-4 py-lg-2 ps-lg-0 ps-4">
                                    <h5 class="border-start border-5 ps-3" style="border-color: #AB1E22 !important;">Customizable Dashboards</h5>
                                </div>
                            </div>
                            <div class="position-absolute start-0 bottom-0 h-75 w-50 d-lg-block d-none"  style="z-index: -1;">
                                <img src="assets/images/semi/image-bg-1.jpg " alt="" class="w-100 h-100">
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 p-0 px-lg-3 d-lg-block d-none">
                            
                           <div class="ḥ-100">
                                <img src="assets/images/semi/image-7.jpg " alt="" class="img-fluid h-100">
                           </div>
                          <div class="position-absolute  end-0 bottom-0 d-lg-block d-none bg-img-r" style="background-color:  #0660FC;width: 41.7%;z-index: -1;height: 40%;">
                            <div class="h-100" style="background-color:  #0660FC;">
                                
                            </div>
                           </div>
                          <div class="position-absolute  bottom-0 d-lg-block d-none bg-color-r" style="background-color:  #000000;right: 41.7%;z-index: 2;height: 30%;">
                                <img src="assets/images/semi/image-8.jpg" alt="" class="img-fluid h-100">
                           </div>
                           <h1 class="count-font  py-3 text-end d-lg-block d-none" style="line-height: 100px;">05</h1>
                        </div>
                         <div class="col-12 d-lg-none d-block p-0">
                                    <img src="assets/images/semi/g5.jpg" class="img-fluid"> 
                                </div>
                    </div>
                 
                </div>
    </div>
</section> 

 <style>
        @import url('https://fonts.googleapis.com/css2?family=Aldrich&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
         
        .count-font{
            font-size: 130px;
            -webkit-text-stroke: 0.5px #FFF;
            color:transparent;
        }
        .p-content
        {
            font-family: "DM Sans", sans-serif;
            font-weight: 400;
            line-height: 30px;
            font-size: 18px;
        }
    </style>

   
  
  
 <style> 
  .features
        {
            list-style:none;
            list-style: none;
            color: white;
            font-size: 20px;
            line-height: 47px;
        }
        .features li
        {
           border-left: 5px solid white;
           padding-left: 20px;
           margin-top:15px;
        }
        .features li:hover
        {
            border-left: 5px solid blue;
            cursor:pointer;
        }
</style>
<section >
<div class="container p-5 mt-4" style="background:#000000;">
<div class="row">
<div class="col-lg-6 header pe-lg-4"> 
<h2 class="text-white  d-none d-lg-block">
                                How Our Solution <span>Benefits</span><br> the <span>
                                    Automotive Industry
</span></h2>
<h2 class="text-white  d-block d-lg-none">
                                How Our <span>Solution</span><br>Benefits  <span>the
                                    </span> Automotive<span>Industry</span></h2>
<p style="color: #73777C;" class="mt-3 mb-0 p-content">
                                    As a leader in the Gartner Magic Quadrant for Business Intelligence and Analytics Platforms, Tableau (now with AI) accelerates your automotive parts business. Discover which parts are top sellers, identify defective returns, and pinpoint lucrative vehicle customers. Enhance responsiveness, cross-sell complementary spares, and drive revenue growth. Get your answers fast and stay ahead in the fast lane!
</p>
</h2>
</div>
<div class="col-lg-6 ps-lg-4 ">
<h2 style="color:#FFFFFF;opacity:0.2;padding-left:30px" class=" d-lg-block d-none ps-5">
                                FEATURES
</h2>
<div>
<ul class="features ps-0 ps-lg-5 mt-lg-3">
<li>Customizable Dashboards</li>
<li>Real-time Data Analytics</li>
<li>Interactive Reports</li>
<li>Seamless Salesforce Integration</li>
</ul>
</div>
</div>
</div>
</div>

</section>
  
  
  
   
   
   <section class="pb-3 my-4">
       <div class="container-fluid bg-case-study d-flex justify-content-lg-end justify-content-center align-items-end p-5" >
            
            <a class="btn btn-primary btnnew   mt-4 text-uppercase h-auto my-5 mx-4" onclick="book()">Book a Demo</a>
            
       </div>
   </section>
   
   
   
 
 
 
<section class="px-lg-5">
    <style>
        .table-custom thead th {
            background-color: #f8f9fa;
            font-weight: bold;
            text-align: center;
        }
        .table-custom tbody td:first-child {
            text-align: left;
            background-color: #f8f9fa;
        }
        .table-custom tbody td:not(:first-child) {
            text-align: center;
        }
        .gold {
            background-color: #FFFAE1!important;
        }
        .platinum {
            background-color: #F4F4F4!important;
        }
        .diamond {
            background-color: #F1E6FF!important;
        }
        .checkmark {
            color: #0660FC!important;
        }
        .cross {
            color: #343A40!important;
        }
        .i-icon {
            color: #343a40;
        }
    </style>
    <div class="container mt-5 px-lg-5 text-center">
        <h2 class="text-center position-relative contact_hading">
            <span class="overlay-text" style="-webkit-text-stroke: 0.5px #0660fc57;color: transparent;">Packages</span>
            Packages
        </h2>
        <table class="table table-bordered table-custom">
            <thead>
                <tr>
                    <th style="width:40%;"></th>
                    <th class="gold" style="width:20%;">
                        <span class="d-block d-lg-none">T-1</span>
                        <span class="d-none d-lg-block">TIER-1</span>
                    </th>
                    <th class="platinum" style="width:20%;">
                        <span class="d-block d-lg-none">T-2</span>
                        <span class="d-none d-lg-block">TIER-2</span>
                    </th>
                    <th class="diamond" style="width:20%;">
                        <span class="d-block d-lg-none">T-3</span>
                        <span class="d-none d-lg-block">TIER-3</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Sales Dashboard
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Sales Dashboard"></i>-->
                    </td>
                    <td class="gold checkmark">✔</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Service Dashboard
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Service Dashboard"></i>-->
                    </td>
                    <td class="gold checkmark">✔</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Spares Dashboard
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Spares Dashboard"></i>-->
                    </td>
                    <td class="gold checkmark">✔</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Accessories Dashboard
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Accessories Dashboard"></i>-->
                    </td>
                    <td class="gold cross">✖</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Value Chain Dashboard
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Value Chain Dashboard"></i>-->
                    </td>
                    <td class="gold cross">✖</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Multi Branch
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Multi Branch"></i>-->
                    </td>
                    <td class="gold cross">✖</td>
                    <td class="platinum checkmark">✔</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Multi Brand
                        <!--<i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" title="Detailed info about Multi Brand"></i>-->
                    </td>
                    <td class="gold cross">✖</td>
                    <td class="platinum cross">✖</td>
                    <td class="diamond checkmark">✔</td>
                </tr>
                <tr>
                    <td>
                        Creator License
                        <i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" data-bs-placement="right" title="Tableau Creator license is designed for users who create content which includes the design, cleaning and curation of data sources, the creation of visualizations and dashboards with which other users will interact. It also includes designing governance and permissions models that control which information users may find."></i>
                    </td>
                    <td class="gold">1</td>
                    <td class="platinum">1</td>
                    <td class="diamond">1</td>
                </tr>
                <tr>
                    <td>
                        Viewer License
                        <i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" data-bs-placement="right" title="Tableau Viewer will have the ability to view and interact with published visualizations and dashboards. These users can be granted permission to access published content, explore guided drill paths, apply filters and even subscribe to dashboards for regular updates and data-driven alerts on laptop, ipads, tablet and even mobile devices."></i>
                    </td>
                    <td class="gold">10</td>
                    <td class="platinum">15</td>
                    <td class="diamond">25</td>
                </tr>
                <tr>
                    <td>
                        Explorer License
                        <i class="fas fa-info-circle i-icon" data-bs-toggle="tooltip" data-bs-placement="right" title="Tableau Explorer will have the freedom to access and analyse published data, create and distribute their own dashboards, and manage the content they have built or been granted permission to edit on laptop, ipads, tablet and even mobile devices."></i>
                    </td>
                    <td class="gold">0</td>
                    <td class="platinum">3</td>
                    <td class="diamond">5</td>
                </tr>
            </tbody>
        </table>

        <script>
            // Initialize Bootstrap tooltips
            document.addEventListener('DOMContentLoaded', function () {
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            });
        </script>

        <a href="#contact_form"><button type="button" class="btn btn-primary rounded-0 px-3 my-3" onclick="target()">Contact Us For Pricing</button></a>
        <script>
            function target(){
                document.getElementById('from').value="Query For Pricing";
            }
        </script>
    </div>
</section>

 
 
 
 
 

   
   
   <style>
        .bg-case-study
        {
                    background-image: url(assets/images/semi/case-study-bg.svg);
                    background-repeat: no-repeat;
                    background-size:100% 100%;
                    height:500px;
                    /*background-attachment:fixed;*/
        }
        .pricing-card {
            border: 1px solid #ddd;
            border-radius: 0;
            text-align: center;
            padding: 30px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f0eeee;
        }
        .pricing-card.highlight {
            background-color: #007bff;
            color: #fff;
        }
        .pricing-card.highlight .btn {
            background-color: #fff;
            color: #007bff;
            border: none;
        }
        .pricing-card.highlight .btn:hover {
            background-color: #e6e6e6;
        }
        .pricing-card h2 {
            margin-bottom: 20px;
        }
        .pricing-card ul {
            list-style: none;
            padding: 0;
        }
        .pricing-card ul li {
            display: flex;
            align-items: center;
            margin: 15px 0;
            font-size: 16px;
        }
        .pricing-card ul li i {
            margin-right: 10px;
            color: #007bff;
        }
        .pricing-card.highlight ul li i {
            color: #fff;
        }
        .pricing-card .btn {
            width: 100%;
            border-radius: 0px;
            padding: 10px 0;
            font-weight: 500;
            font-size: 16px;
        }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<section class="py-5 d-none">
<div class="container ">
<div class="row">
<h2 class="text-center position-relative contact_hading">
<span class="overlay-text" style="-webkit-text-stroke: 0.5px #0660fc57;color: transparent;">Pricing</span>
                            Pricing
</h2>
<div class="col-md-4 mt-lg-4">
<div class="pricing-card">
<h2>Gold Pack</h2>
<p class="display-6">FREE</p>
<ul style="min-height:173px">
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>01 Creator License</span></li>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>10 Viewer Licenses</span></li>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>02 Dashboards</span></li>
</ul>
<button class="btn btn-primary btn-block mt-4">Gold Pack<i class="fas fa-angle-right rounded-circle bg-white d-inline-flex justify-content-center align-items-center ms-2" style="color:#0660fc;height:20px;width:20px;"></i></button>
                </div>
</div>
<div class="col-md-4">
<div class="pricing-card highlight">
<h2>Platinum Pack</h2>
<p class="display-6">₹X99,000</p>
<ul >
<li class="py-1"><img src="assets/images/semi/SVG.svg" style="width:20px;" class="me-2"><span>01 Creator License</span></li>
<li class="py-1"><img src="assets/images/semi/SVG.svg" style="width:20px;" class="me-2"><span>10 Viewer Licenses</span></li>
<li class="py-1"><img src="assets/images/semi/SVG.svg" style="width:20px;" class="me-2"><span>02 Dashboards</span></li>
<li class="py-1"><img src="assets/images/semi/SVG.svg" style="width:20px;" class="me-2"><span>05 Explorer Licenses</span></li>
</ul>
<button class="btn btn-light btn-block mt-4">Platinum Pack <i class="fas fa-angle-right rounded-circle d-inline-flex justify-content-center align-items-center ms-2" style="color:#fff;height:20px;width:20px;background:#0660fc;"></i></button>
                </div>
</div>
<div class="col-md-4 mt-4">
<div class="pricing-card">
<h2>Diamond Pack</h2>
<p class="display-6">₹X99,000</p>
<ul>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>01 Creator License</span></li>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>10 Viewer Licenses</span></li>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>02 Dashboards</span></li>
<li class="py-1"><img src="assets/images/semi/SVG_black.svg" style="width:20px;" class="me-2"><span>05 Explorer Licenses</span></li>
</ul>
<button class="btn btn-primary btn-block mt-4">Diamond Pack <i class="fas fa-angle-right rounded-circle bg-white d-inline-flex justify-content-center align-items-center ms-2" style="color:#0660fc;height:20px;width:20px;"></i></button>
                </div>
</div>
</div>
</div>  
</section>    




<style>
        @import url('https://fonts.googleapis.com/css2?family=Aldrich&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap');
          body {
            font-family: 'Aldrich', sans-serif;
        }
        .calendly-badge-content{
            font-family: 'Aldrich', sans-serif!important;
            font-weight: 300!important;
        }
        .count-font{
            font-size: 130px;
            -webkit-text-stroke: 0.5px #FFF;
            color:transparent;
        }
        .p-content
        {
            font-family: "DM Sans", sans-serif;
            font-weight: 400;
            line-height: 28px;
            font-size: 18px;
        }
</style>
 
<style>
    .contact_hading {
    font-size: 2.5rem;
    /*font-weight: bold;*/
    position: relative;
    color: #000;
    text-transform: uppercase;
    margin-bottom: 40px;
}
.overlay-text {
    position: absolute;
    top: -38px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 4rem;
    color: rgba(0, 0, 0, 0.1);
    z-index: -1;
    white-space: nowrap;
}
.contact-info {
    max-width: 100%;
    background-color: #000;
    padding: 30px;
    border-radius: 8px;
}
.contact-info p {
    margin: 0;
    padding: 10px 0;
    display: flex;
    align-items: center;
    font-size: 1rem;
}
.contact-info i {
    font-size: 1.5rem;
    margin-right: 10px;
}
.contact-info i:hover{
     background:#fff !important;
     color:#0660FC !important;
     border-color:#0660FC !important;
}
form .form-control {
    border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    padding-left: 0;
    background-color: transparent;
}
form .form-control:focus {
    box-shadow: none;
    border-color: #000;
}
.btn-primary {
    background-color: #007bff;
    border: none;
    text-transform: uppercase;
}
.btn-primary:hover {
    background-color: #0056b3;
}
p a{
    text-decoration:none!important;
}
.text-danger
{
        --bs-text-opacity: 1;
    color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
    font-size: 12px;
}
</style>
<a  name="contact_form" id="contact_form"></a>
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h2 class="text-center position-relative contact_hading">
          <span class="overlay-text" style="-webkit-text-stroke: 0.5px #0660fc57;color: transparent;">Contact Us</span>
          Contact Us
        </h2>
        <div class="row">
          <div class="col-md-6">
            <form method="POST" action="">
              <div class="row mb-3">
                <div class="col-lg-6 col-12 mt-3">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                  <small class="text-danger" id="nameError"></small>
                </div>
                <div class="col-lg-6 col-12 mt-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                  <small class="text-danger" id="emailError"></small>
                </div>
                <div class="col-lg-6 col-12 mt-3">
                  <input type="text" class="form-control" id="companyName" name="cname" placeholder="Company Name">
                  <small class="text-danger" id="companyError"></small>
                </div>
                 <div class="col-lg-2 col-12 mt-3">
                  <input type="text" class="form-control" id="cc" placeholder="CC" name="cc" value="+91">
                  <input type="text" class="form-control d-none" id="from" name="from" value="Contact Form" >
                </div>
                <div class="col-lg-4 col-12 mt-3">
                  <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone" onkeyup="ph()">
                  <small class="text-danger" id="phoneError"></small>
                </div>
                <div class="col-lg-12 col-12 mt-3">
                  <textarea class="form-control" rows="3" placeholder="Description" name="msg" style="resize:none"></textarea>
                </div>
              </div>
              <div class="pt-4 d-lg-block d-flex justify-content-center mb-4">
                <button type="button" class="btn btn-primary rounded-0 px-3" onclick="form_ch()">Submit</button> 
                <input type="submit" name="sub" id="sub" style="display:none">
              </div>
            </form>
          </div>
          <div class="col-md-6 ps-lg-5 mt-lg-0 mt-4 p-0">
            <div class="contact-info bg-dark text-white rounded-0 py-5 px-5">
              <p>
                <i class="bi bi-telephone-fill border border-2 d-flex justify-content-center align-items-center" style="font-size:13px;width:30px;height:30px;"></i> 
                <a href="tel:+919663870199" class="text-white">+91 96638 70199</a>
              </p>
              <p>
                <i class="bi bi-envelope-fill border border-2 d-flex justify-content-center align-items-center" style="font-size:13px;width:30px;height:30px;"></i> 
                <a href="mailto:sales@crmlanding.in" class="text-white">sales@crmlanding.in</a>
              </p>
              <p class="d-flex">
                <i class="bi bi-geo-alt-fill align-self-start border border-2 d-flex justify-content-center align-items-center" style="font-size:13px;width:66px;height:30px;"></i> 
                <a href="https://www.google.com/maps/search/?api=1&query=Shyama+Royale,+Shastri+Nagar,+Ajmer,+Rajasthan" target="_blank" class="text-white">1st & 2nd Floor, Shyama Royale, Shastri Nagar, Ajmer – Rajasthan (305001) – INDIA</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function ph(){
    let input = document.getElementById('phone');
    input.value = input.value.replace(/[a-zA-Z]/g, '');
}
function form_ch(){
     let isValid = true;
      let name = $('#name').val().trim();
      let email = $('#email').val().trim();
      let companyName = $('#companyName').val().trim();
      let phone = $('#phone').val().trim();
      
      // Name validation
      if (name === "") {
        $('#nameError').text('Name is required.');
        isValid = false;
      } else {
        $('#nameError').text('');
      }

      // Email validation
      let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
      if (email === "" || !email.match(emailPattern)) {
        $('#emailError').text('Please enter a valid email.');
        isValid = false;
      } else {
        $('#emailError').text('');
      }

      // Company Name validation
      if (companyName === "") {
        $('#companyError').text('Company Name is required.');
        isValid = false;
      } else {
        $('#companyError').text('');
      }

      // Phone validation
      let phonePattern = /^[1-9][0-9]{9}$/;
      let repeatedNumbersPattern = /(1{8}|2{8}|3{8}|4{8}|5{8}|6{8}|7{8}|8{8}|9{8})/;
      if (!phone.match(phonePattern) || phone.match(repeatedNumbersPattern)) {
        $('#phoneError').text('Invalid phone number.');
        isValid = false;
      } else {
        $('#phoneError').text('');
      }

      if (isValid) {
         document.getElementById('sub').click();
      }
}

</script>


   
   
   
   
   
   <!-- Calendly badge widget begin -->
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
<script type="text/javascript">window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/jaydeepcrm/30min', text: 'Schedule Demo', color: '#0069ff', textColor: '#ffffff', branding: undefined }); }</script>
<!-- Calendly badge widget end -->
   
   
   
   
  <!-- for nav-->
  <!-- Calendly inline widget begin -->
<!--<div class="calendly-inline-widget" data-url="-->
<!--https://calendly.com/jaydeepcrm/30min"-->
<!--style="min-width:320px;height:700px;"></div>-->
<!--<script type="text/javascript" src="-->
<!--https://assets.calendly.com/assets/external/widget.js"-->
<!--async></script>-->
<!-- Calendly inline widget end -->
   
   
    <!-- External JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

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

 function after_submit(str) {
                        window.location.href =str;
                    }


</script>



</html>
<?php
if(!empty($_POST['sub'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $cname=$_POST['cname'];
   $cc=$_POST['cc'];
   $phone=$_POST['phone'];
   $msg=$_POST['msg'];
   $from=$_POST['from'];
   
   $q="INSERT INTO `automobile_dashboard`(`name`, `email`, `cname`, `cc`, `phone`, `msg`,`from_en`) VALUES ('$name','$email','$cname','$cc','$phone','$msg','$from')";
   $qr=mysqli_query($conn,$q);
   if($qr){
       ?>
       <script> showToast("Thanks! We’ll get back to you soon.","green","https://crmlanding.in/automobile_dashboard");</script>
       <?php
   }else{
       ?>
        <script>showToast("Please Try Again.","red","https://crmlanding.in/automobile_dashboard");</script>
        <?php
   }
}
?>