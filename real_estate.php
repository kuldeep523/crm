<?php
include("admin/connection.php");
include('include/header.php'); ?>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
<script>
   window.addEventListener('load', function() {
    const width = window.innerWidth;
    const height = window.innerHeight;
    for (var i = 0; i <= 4; i++) {
        const element = document.getElementById("transformative" + i);
        
        if (element) {  
            
            if (width == 1280 && height == 631) {
                element.classList.add("transformative_overlay1280");
                element.classList.remove("card-img-overlay12");
                console.log(`Resolution: ${width} x ${height}`);
            } 
            else if (width == 1536 && height == 791) {
               
                element.classList.add("transformative_overlay");
                element.classList.remove("card-img-overlay12");
                console.log(`Resolution: ${width} x ${height}`);
            } else {
                element.classList.remove("transformative_overlay");
               element.classList.remove("transformative_overlay1280");
                element.classList.add("card-img-overlay12");
            }
        } else {
            console.warn(`Element with id overlay${i} not found.`);
        }
    }
    for (var i = 0; i <= 6; i++) {
        const element = document.getElementById("overlay" + i);
        
        if (element) {  
            
            if (width == 1280 && height == 631) {
                element.classList.add("overlay-important");
                element.classList.remove("card-img-overlay2");
                console.log(`Resolution: ${width} x ${height}`);
            } 
            else if (width == 1536 && height == 791) {
               
                element.classList.add("overlay-important1536_791");
                element.classList.remove("card-img-overlay2");
                console.log(`Resolution: ${width} x ${height}`);
            } else {
                element.classList.remove("overlay-important1536_791");
               element.classList.remove("overlay-important1536_791");
                element.classList.add("card-img-overlay2");
            }
        } else {
            console.warn(`Element with id overlay${i} not found.`);
        }
    }

    console.log("Resolution: " + width + "x" + height);
});
</script>
<head>
    <title>Real Estate Industry - CRM Landing</title>
</head>
<style>
 
    .left-col {
        background: linear-gradient(264deg, rgba(13, 66, 130, 0.00) 9.94%, #0D4282 28.58%, #02244D 101.33%);
        padding: 5rem;
        height: 100%;
    }

    .right-col {
        position: relative;
        overflow: hidden;
    }

    .industry-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .half-overlay {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background-color: rgba(0, 51, 102, 0.8);
        z-index: 1;
    }

    .imageset {
        background-image: url('assets/images/automobile/Hero.png');
        height: 100%;
       background-size: 100% 100%;
        animation: imagezoom 2s ease;
    }

@keyframes imagezoom {
        from {
             background-size: 105% 105%;
        }

        to {
            background-size: 100% 100%;
        }
    }
    .industry-title {
        color: #00A4E4;
        letter-spacing: 2px;
        /*font-weight: bold;*/
        text-transform: uppercase;
    }

    .lead {
        font-size: 1.2rem;
    }

    .error {
        color: #0D4282;
    }

    .card {
        position: relative;
        width: 100%;
        overflow: hidden;
        border: none;
    }


    .card-img-overlay1 {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 15px;
        width: 100%;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #000;
        /* Black title */
        margin-bottom: 10px;
    }

    .card-text {
        color: #333;
        font-size: 13px;
        font-weight: 500;
    }
    .hover-container {
    position: relative;
    border-radius:15px;
    overflow: hidden;
}
    .object-fit-cover {
    transition: transform 2s ease-in-out;
    
}

.card-img-overlay1 {
    background-color: rgba(255, 255, 255, 0.9); 
    transition: background-color 1s ease-in-out;
}
.card-img-overlay2{
    background-color: rgba(255, 255, 255, 0.9); 
}
.hover-container:hover .object-fit-cover {
    transform: scale(1.1);
    /*border-radius:10px;*/
}

.hover-container:hover .card-img-overlay1 {
    background-color: rgba(118, 216, 203, 1); 
    /*border-radius:10px;*/
}
.cta-btn {
      background-color: #0099ff;
      color: white;
      border-radius: 50px;
      padding: 10px 30px;
      text-decoration: none;
    }
    .cta-btn:hover {
      background-color: #007acc;
      text-decoration: none;
    }
    
    @media (max-width:576px){
    .industry-section {
    height: calc(48vh - 109px);
    
}
.left-col{
    background: linear-gradient(264deg, rgba(13, 66, 130, 0.00) 9.94%, #0D4282 40.58%, #02244D 101.33%);
}
.imageset{
    background-size:110% 100%;
    background-position:end;
}
.heromt-Set{
    margin-top:60px;
}
}

    @media (max-width: 768px) {
        .left-col {
            padding: 2rem;
        }

        .lead {
            font-size: 1rem;
        }
    }
    @media (min-width:1000px) and (max-width:1400px){
        .industry-section{
           height: calc(85vh - 109px);
        }
    }
    @media (min-width: 1400px) {
        .heromt-Set {
            margin-top: 109px;
        }
    }
    @media (min-width:992px){
        .deliv{
            padding-right:1rem !important;
            padding-left:1rem !important;
        }
        .Unlocking{
            width:93% !important;
        } 
    }
    
    @media (min-width: 1200px) and (max-width:1400px){
        .heromt-Set{
            margin-top:100px;
        }
        
        
    }
</style>

<style>
.fs-6{
    font-size:0.6rem!important;
}
    .error {
        color: #0D4282;
    }

    .befor {
        position: relative;
        height: 80;
    }

    .befor:before {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: #2a2a2ad1;
        top: 0;
    }

    .imgchange:hover {
        background-color: white;
    }

   
    

    @media (-webkit-video-playable-inline) {
        #either-gif-or-video img {
            display: none;
        }

        #either-gif-or-video video {
            display: initial;
        }
    }

    .group {
        position: relative;
    }
    .group input, .group input[type=text]{
        height:25px;
    }

    .input1 {
        font-size: 16px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 185px;
        border: none;
        border-bottom: 1px solid #6c6c6c;
        background: transparent !important;
        color: #000000;
    }

    input {
        color: white !important;
    }

    select {
        color: white !important;
    }

    .input1:focus {
        outline: none;
    }

    label {
        color: #999999;
        font-size: 16px;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 10px;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }
    
    .label_textarea {
        color: #999999;
        font-size: 16px!important;
        font-weight: normal;
        position: absolute;
        pointer-events: none;
        left: 5px;
        top: 60px!important;
        transition: 0.2s ease all;
        -moz-transition: 0.2s ease all;
        -webkit-transition: 0.2s ease all;
    }

    .input1:focus ~ label,
.input1:valid ~ label,
.phone_up
    {
        top: -17px;
        font-size: 12px;
        color: #999999;
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
        bottom: 0px;
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

    .casebutton {
        background-color: #E5E5E5;
        color: black !important;
    }

    .casebutton:hover {
        background-color: #00A1E0 !important;
        color: #fff !important;

    }
.coloringline {
    position: relative;
    margin-left: 96px;
    border-left: 7px solid #D4D4D4;
    /*overflow:hidden;*/
}

.coloringline:before {
    content: "";
    position: absolute;
    left: -7px;
    top: 0;
    width: 7px;
    height: var(--before-height, 0);
    background-color: #00A1E0;
    transition: height 0.1s, background-color 0.1s;
    z-index: 1;
}

.righticon2{
        display: block;
        color:#fff;
        width: 50px;
        height: 50px;
        background: #D4D4D4;
        text-align: center;
        right: calc(100% + 27px);
        top: 5%;
        border-radius: 100%;
        position: absolute;
        z-index:99;
        display:flex;
        justify-content:center;
        align-items: center;
    }
    .righticon-small {
        margin-top: 50px;
    }

   
    
    .righticon-small2 {
        display: block;
        color:#fff;
        width: 35px;
        height: 35px;
        background: #D4D4D4;
        text-align: center;
        right: calc(100% + 35px);
        top: 5%;
        border-radius: 100%;
        position: absolute;
       z-index:99;
       display:flex;
       justify-content:center;
       align-items: center;
    }

.icon-colored {
    background: #00A1E0; /* colored state */
}
    /*#Features_scroll1{*/
    /*    top:109px;*/
    /*}*/

.main_height{
    height:450px;
}
.img_logo_380{
        display:none;
    }
    .img_logo_480{
        display:none;
    }
 .bgeffect1 {
    width: 250px;
    height: 250px;
    background-color: #34cbb730;
    position: absolute;
    top: 500px;
    z-index: -1;
    border-radius: 50%;
    box-shadow: 0 0 70px 10px rgba(52, 203, 183, 0.3); /* Adds a blurred border */
} 
@media (max-width:1400px){
    .bgeffect1 {
    width: 200px;
    height: 200px;
      top:540px;  
    }
}
    
@media (max-width:380px) {
    .img_logo_380{
        display:block;
    }
        .main_height{
            height:370px;
        }
        .pad_top {
            padding-bottom: 28px !important;
        }

        .page_header_default {
            padding-top: 30px;
            padding-bottom: 15px;
        }

        .mar_had {
            margin-top: 9px;
        }
        .coloringline{
            margin-left: 54px;
            padding: 0px 30px 0px 30px;
        }
      
        .righticon2{
            width: 45px;
            height: 45px;
             right: calc(100% + 11px);
        }
        .righticon-small2{
            width: 30px;
            height: 30px;
             right: calc(100% + 18px);
        }
        .coloringline {
    border-left:4px solid #D4D4D4;
}
.coloringline:before {
    width: 4px;
    left: -4px;
   }
   .built{
       padding-top:0.5rem !important;
       padding-left:1rem !important;
   }
   .cloudp{
       padding-top:0.5rem !important;
       padding-left:0.5rem !important;
   }
    }
    @media (min-width:381px) and (max-width:550px){
         h1{
        line-height: 44px;
    }
       .img_logo_480{
        display:block;
    }
         .main_height{
            height:450px;
        }
        .pad_top {
            padding-bottom: 28px !important;
        }

        .page_header_default {
            padding-top: 30px;
            padding-bottom: 15px;
        }

        .mar_had {
            margin-top: 9px;
        }
        .coloringline{
            margin-left: 54px;
            padding: 0px 30px 0px 30px;
        }
      
        .righticon2{
            width: 45px;
            height: 45px;
             right: calc(100% + 11px);
        }
        .righticon-small2{
            width: 30px;
            height: 30px;
             right: calc(100% + 18px);
        }
        .coloringline {
    border-left:4px solid #D4D4D4;
}
.coloringline:before {
    width: 4px;
    left: -4px;
   }
    /* #Features_scroll1{*/
    /*    top:54px;*/
    /*}*/
    }
    
    @media (min-width:1400px){
         .main_height{
            height:535px;
        }
    }

</style>
<div id="content " class="site-content " >
<section class=" pb-5" id="culture">
    <div class="container dis None heromt-Set pb-lg-5" >
        <div class="row h-100">
            <div class="col-12 text-center pt-lg-5">
               <h1 class="pt-2  themeSliderHeadingSet">Real Estate Industry</h1>
               <div class="row pt-3">
                   <div class="col pe-4">
                       <div class="rounded-circle d-lg-block d-none" style="height:99px">
                           <!--<img src="assets/images/automobile/car.png" class="image-fluid rounded-circle h-100">-->
                       </div>
                   </div>
                   <div class="col-12 d-lg-none d-block pt-2 p-0 pb-3">
                        <img src="assets/new-pages/real-Estate/mobilehero.jpg" style="border-radius:1rem;" class="img-fluid">
                   </div>
                   <div class="col-6 d-lg-none d-block pt-3 ps-0 pb-3 pe-3"> 
                     <img src="assets/new-pages/real-Estate/realEstate1.jpg" style="border-radius:1rem;">
                   </div>
                   <div class="col-6 d-lg-none d-block pt-3 pe-0 pb-3 ps-3">
                        <img src="assets/new-pages/real-Estate/realEstate2.jpg" style="border-radius:1rem;">
                   </div>
                   <div class="col-lg-9 col-12 px-lg-5 px-0 ">
                        <p class="text-lg-center text-start">
                            Transforming Real Estate developers, brokers, and property management companies with our comprehensive Salesforce solutions. From accelerating lead-to-booking conversions and managing channel partner networks, to automating payment milestones and post-handover customer journeys — solutions designed to meet the unique demands of the Real Estate sector.      
                        </p>
                        <p class="text-lg-center text-start">AI Intelligence Layer — Leverage AI-based analytics, workflows, sales coaches, nudges & recommendations to gain actionable insights into lead pipeline health, broker performance, payment collection trends, and project-wise revenue — enabling smarter, faster decisions for sales leadership.</p>
                        <a href="contact_us.php"><button class=" px-4 mt-3 border-0 text-white" style=" background: linear-gradient(84.06deg, #0D89C8 0%, #34CBB7 100%);border-radius:7px;padding-block:12px">
                           Request a demo
                       </button></a>
                   </div>
                   <div class="col ps-4">
                       <div class="rounded-circle d-lg-block d-none" style="height:99px">
                           <!--<img src="assets/images/automobile/car.png" class="image-fluid rounded-circle h-100">-->
                       </div>
                   </div>
               </div>
               
            </div>
             
           
        </div>
        <style>
            .image16{
                
            }
        </style>
        <div class="row justify-content-between pt-lg-0 pt-4">
            <div class="col-lg-2 col-6 text-start align-self-lg-center pe-lg-0 pe-2" style="font-size:39px">
                <div class="position-relative h-100">
                    <img src="assets/images/automobile/bg-liner.png" class="h-100" >
                    <div class="position-absolute top-0 h-100 w-100 cloudp rounded-5 p-lg-3 pt-3 ps-3" style="background: linear-gradient(84.06deg,#0d8ac8aa 0%, #34cbb7aa 100%);border-radius:1rem">
                        <img src="assets/images/automobile/header_logo.svg" style="height: 50px;" class="px-2 ">
                        <p class="text-white pt-lg-2 py-1 ps-2 m-0">
                            React Native
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 d-lg-block d-none ">
               <div >
                    <img src="assets/new-pages/real-Estate/realEstate1.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-3 pt-5 p-0 d-lg-block d-none">
                 <div >
                    <img src="assets/new-pages/real-Estate/hero.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-2 p-0 d-lg-block d-none">
                 <div >
                    <img src="assets/new-pages/real-Estate/realEstate2.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-6 col-lg-2 text-start align-self-lg-center ps-lg-0">
                 <div class="position-relative overflow-hidden h-100">
                    <img src="assets/images/automobile/bg-liner.png" class="h-100">
                    <div class="position-absolute top-0 h-100 w-100 text-white  rounded-5 p-lg-3 built px-2 pt-4 ps-4" style="background: linear-gradient(84.06deg,#0d8ac8aa 0%, #34cbb7aa 100%);border-radius:1rem">
                        <h1 class="text-white pb-1" style="font-size:45px" >40%</h1>
                        <p style="line-height:20px;">
                            Faster Order Booking
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bgeffect1 d-lg-block d-none"></div>
</section>
<style>
    .nav-linktab.active{
        background:#ddd6d6;
    }
</style>
<section class=" w-100 d-lg-block d-none"  id="Features_scroll1">
    <div class="container-fluid">

        <div class="row  d-lg-flex d-none" style="background-color:#F7F7F7;">
            
            <div class="col-lg-4 ps-5">
                <p class="ps-5 py-2 m-0">
                    Home / Real Estate
                </p>
            </div>
               <div class="col-lg-2 text-center ">
                <p class="m-0">
                    <a href="#sol1" class="nav-linktab d-block py-2">Solutions</a>
                </p>
            </div>
               <div class="col-lg-2 text-center ">
                   <p class="m-0">
                        <a href="#sol2" class="nav-linktab d-block py-2">Segments</a>
                   </p>
                </div>
             <div class="col-lg-2 text-center ">
              <p class="m-0">
                    <a href="#sol3" class="nav-linktab d-block py-2">Transforming</a>
              </p>
            </div>
             <div class="col-lg-2 text-center ">
               <p class="m-0">
                    
                    <a href="#sol4" class="nav-linktab d-block py-2">Info</a>
               </p>
            </div>
        </div>
    </div>
</section>
    <script>
    window.addEventListener('scroll', function() {
      
        const scrollingPoint = window.scrollY;
        const cultureElement = document.getElementById("culture");
        const header1 = parseInt(document.querySelector(".header").offsetHeight);
        // const header2 = parseInt(document.querySelector(".header").offsetHeight);
        // alert(cultureElement.offsetHeight);
        const featuresElement = document.getElementById("Features_scroll1");
        const box = document.getElementById("yourdivid");
        
            if ( scrollingPoint >= (cultureElement.offsetHeight)) {
            featuresElement.style.position = "fixed";
            featuresElement.style.zIndex = "99";
            
            featuresElement.style.top= header1+"px";
            
            
           
            // featuresElement.style.bottom = "0px";
        } 
        // else if (scrollingPoint > (cultureElement.offsetHeight-420)) {
        //     featuresElement.style.position = "absolute";
        //     featuresElement.style.top = "";
        //     featuresElement.style.bottom = "0";
         
        // } 
        else {
            featuresElement.style.position = "static";
         
        }
       
    });
 document.addEventListener('DOMContentLoaded', () => {
                   
                const sections = document.querySelectorAll('.sectionscroll');
                const navLinks = document.querySelectorAll('.nav-linktab');
             
                const observerOptions = {
                    root: null, // relative to the viewport
                    rootMargin: '0px',
                    threshold: 0.7 // Trigger when 50% of the section is visible
                };
           
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                       
                        if (entry.isIntersecting) {
                            
                            // Remove active class from all links
                            navLinks.forEach(link => link.classList.remove('active'));
                             
            
                            // Add active class to the link that matches the intersecting section
                            const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                            
                            activeLink.classList.add('active');
                            //alert("yes");
                        }
                    });
                }, observerOptions);
                 
                // Observe each section
                sections.forEach(section => observer.observe(section));
            });
    
</script>
  <style>
      .indusimg{
          width:75%;
      }
      @media (min-width:992px) and (max-width:1200px){
          .indusimg{
              width:100%;
          }
      }
  </style>  
<section class="d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row p s-3 ps-lg-4">
            <div class="col-lg-12 col-md-12 col-12">
                <h1 class="text-center  hidden-content show-content py-5">
                    Real Estate Industry Solution
                </h1>
            </div>
            
        </div>
        
    </div>
</section>

<section class="py-4 d-lg-block d-none" style="background-color:#eaf5fe;">
    <style>
        .btnrad{
                border-radius: 10px !important;
        }
    </style>
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Residential Developer </h4>
                 </div>
                 <div class="col-lg-8 col-md-8 pt-2 pt-lg-0 col-12 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Lead Management</button>
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Pre-Sales CRM</button>
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Inventory Tracking,</button>
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Broker Portal</button>
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Other</button>
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Commercial Developer </h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Lead to Lease</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Tenant Management,</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Renewal Automation</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Document Generation</button>
                     
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none" style="background-color:#eaf5fe;">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Broker / Channel Partner </h4>
                 </div>
                 <div class="col-lg-8 col-md-8  col-12 pt-2 pt-lg-0  hidden-content show-content">
                     <button class="btn rounded px-3  shadow  btnrad" style="background-color:white;">Lead Submission Portal,</button>
                     <button class="btn rounded px-3  shadow  btnrad" style="background-color:white;">Commission Tracking</button>
                     <button class="btn rounded px-3  shadow  btnrad" style="background-color:white;">Deal Pipeline</button>
                     <button class="btn rounded px-3  shadow  btnrad" style="background-color:white;">Whatsaap Integration</button>
                     
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Post-Sales / Collections </h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Payment Milestone Tracking</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Demand Letter Automation</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">eSign</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Buyer Self-Service Portal,</button>
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none" style="background-color:#eaf5fe;">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Customer Engagement </h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">AI Voice Agent</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">WhatsApp CRM</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Marketing Cloud Journeys</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">CTI Integration</button>
                     
                 </div>
            </div>
    </div>
</section>

<script>
    window.addEventListener('scroll', function() {
    var sections = document.querySelectorAll('.hidden-content');
    
    sections.forEach(function(section) {
        var sectionPosition = section.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.2;

        if(sectionPosition < screenPosition) {
            section.classList.add('show-content');
        } 
        else {
            section.classList.remove('show-content');
        }
    });
});

</script>

<section class="mt-lg-5 py-lg-5">
    <div class="container-sm px-lg-0 px-lg-3">
        <div class="row px-lg-0  px-3">
            <div class="col-lg-7 pt-lg-4 p-0 px-lg-3">
                <h4 class="righti con-small error col-lg-9  p-0 hidden-content show-content" style="font-weight:400;">
                    Real Estate Salesforce Solutions: Driving Faster Bookings and Seamless Customer Journeys
                </h4>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">
                    The Real Estate industry is evolving rapidly, driven by rising buyer expectations, complex channel partner networks, and the need for real-time visibility across pre-sales and post-sales operations. These shifts are transforming how developers manage leads, brokers handle transactions, and teams track payment collections — making intelligent CRM the backbone of every successful Real Estate business. 
               </p>
                <div class="row pt-5 hidden-content show-content">
                    <div class="col-lg-6 col-md-6 ps-0 pe-lg-3 pe-0 ">
                        <div class="shadow h-100 p-4" style="border-radius:15px;">
                            <style>
                                .incr{
                                    font-size:15px;
                                }
                                @media (min-width:992px) and (max-width:1199px){
                                    .incr{
                                         font-size:12px;
                                    }
                                }
                            </style>
                            <h2>25% </h2>
                            <p class="incr">
                                Better lead conversion rates with Pre-Sales automation 
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 pt-3 pt-lg-0 ps-0 ps-lg-3 pe-0">
                        <div class="shadow h-100 p-4" style="border-radius:15px;">
                            <h2>20% </h2> 
                            <p class="incr">
                                Faster payment collection with Post-Sales milestone tracking 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pt-3 hidden-content show-content d-lg-block d-none">
                <div class="pt-3 indusimg ms-auto text-end">
                    <img src="assets/new-pages/real-Estate/realnew.jpg" class="img-fluid" style="border-radius:15px">
                </div>
            </div>
        </div>
    </div>
</section>
<style>
        .circle-loader {
  width: 30px;
  height: 30px;
  border: 5px solid rgba(0, 0, 0, 0.2);
  border-radius: 50%;
}
.shadow.active {
            border: 2px solid #00A1E0; 
            
        }
       .shadow.active .circle-loader{
           border-color:#00A1E0;
       }
       .filter_list_items.active{
           color: #00A1E0;
       }
       .bgeffect2 {
    width: 150px;
    height: 150px;
    background-color:#34cbb730;
    position:absolute;
    top:100px;
    left:30px;
    z-index:-1;
    border-radius: 50%;
    box-shadow: 0 0 70px 10px rgba(52, 203, 183, 0.3);
} 
    </style>



<section>
   <div class="container-sm p-0">
      <div class="bgeffect2 d-lg-block d-none"></div>
      <div class="row px-lg-4 px-3">
         <div class="col-lg-12 p-lg-0 px-3 pb-lg-3 mt-3 mt-lg-0">
            <h1 class="hidden-content show-content">
              Delivering complete Real Estate solutions across Developers, Brokers, and Service Teams 
            </h1>
         </div>
      </div>
      <div class="row py-lg-5">
         <div class=" col-md-4 col-12 pt-4 pt-lg-0">
            <div class="shadow p-4 h-100 bg-light" style="border-radius:15px;">
               <h3 class="hidden-content show-content pt-lg-3">Residential & Commercial Developer </h3>
               <div class="pt-3">
                    <p>Explore solutions for lead <br> management, inventory <br> tracking, broker portal, and <br> post-booking automation </p>
                </div>
                <div class="row justify-content-end">
                  <div class="circle-loader " ></div>
               </div>
            </div>
         </div>
         <div class=" col-md-4 col-12 pt-4 pt-lg-0">
            <div class="shadow p-4 h-100 bg-light" style="border-radius:15px;">
               <h3 class="hidden-content show-content pt-lg-3">Broker / Channel Partner </h3>
               <div class="pt-3">
                    <p>Manage leads, commissions, <br> site visits, and deal pipelines <br> across your partner network  </p>
                </div>
               <div class="row justify-content-end">
                  <div class="circle-loader " ></div>
               </div>
            </div>
         </div>
         <div class=" col-md-4 col-12 pt-4 pt-lg-0">
            <div class="shadow p-4 h-100 bg-light" style="border-radius:15px;">
               <h3 class="hidden-content show-content pt-lg-3">Post-Sales & Property Management </h3>
               <div class="pt-3">
                    <p>Automate payment milestones, <br> documentation, buyer <br> communication, and service <br> requests </p>
                </div>
               <div class="row justify-content-end">
                  <div class="circle-loader " ></div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
            <div class="col-lg-12">
                <h4 class="righti con-small error col-lg-8 p-0 hidden-content show-content mt-4 mt-lg-0" style="font-weight:400;">
                   Transform Real Estate Operations with CRM Landing: Your Partner in Digital Transformation 
                </h4>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">Following are the key features to elevate Real Estate operations. Our AI-driven solutions help streamline lead conversions, optimise broker networks, and ensure seamless post-booking experiences across the value chain. </p>
            </div>
      </div>
      <div class="row py-4">
   <!-- Mobile Tabs -->
   <div class="col-12 p-0 pt-4 text-center d-lg-none" id="list_main1">
      <div id="list_scroll1" class="w-100">
         <div class="p-0 mt-1 py-2" style="background: #EEEEEE;">
            <ol class=" list-style-none row m-0 text-center" id="itemList5">
               <li class="mb-0 pb-0 col-4 filter_list_items active" onclick="showTab('sfaCard')" style="cursor:pointer">Pre-Sales / Developer</li>
               <li class="mb-0 pb-0 col-4 filter_list_items" onclick="showTab('industryCard')" style="cursor:pointer">Broker / Channel Partner</li>
               <li class="mb-0 pb-0 col-4 filter_list_items" onclick="showTab('dmsCard')" style="cursor:pointer">Post-Sales / Collections</li>
            </ol>
         </div>
      </div>
   </div>

   <!-- SFA Features -->
   <div class="col-lg-4 d-none d-lg-block">
      <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
         <p style="font-weight:500;" class="mb-2">Pre-Sales / Developer</p>
         <ol class="librdr contentList" start="1">
            <li>Omni-channel Lead Capture</li>
            <li>Intelligent Lead Routing by project, budget & geography </li>
            <li>Site Visit Scheduling, Tracking & Automated Reminders </li>
            <li>Real-Time Unit Inventory Visibility & Blocking Management</li>
            <li>Configurable Pricing Engine & Lead Scoring</li>
            <li>Dealer / Broker Onboarding with Commission Tracking</li>
            <li>Project & Unit Inventory Management </li>
            <li>Marketing Cloud Journeys for Lead Nurturing </li>
            <li>Mobile-Ready for Field Sales Agents </li>
            <li>Reports & Dashboards for Project-Wise Performance </li>
         </ol>
      </div>
   </div>

   <div class="col-lg-4 d-none d-lg-block">
      <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
         <p style="font-weight:500;" class="mb-2">Broker / Channel Partner</p>
         <ol class="librdr contentList" start="1">
            <li>Dedicated Broker Portal with Lead Submission & Inventory View </li>
            <li>Commission Tracking & Payout Management </li>
            <li>Deal Pipeline & Opportunity Stage Tracking </li>
            <li>WhatsApp Integration for Buyer & Broker Communication </li>
            <li>Performance Analytics & Broker Productivity Dashboards </li>
            <li>Overseas Sales Tracking </li>
         </ol>
      </div>
   </div>

   <div class="col-lg-4 d-none d-lg-block">
      <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
         <p style="font-weight:500;" class="mb-2">Post-Sales / Collections</p>
         <ol class="librdr contentList" start="1">
            <li>Omni-channel Lead Capture</li>
            <li>Intelligent Lead Routing by project, budget & geography </li>
            <li>Site Visit Scheduling, Tracking & Automated Reminders </li>
            <li>Real-Time Unit Inventory Visibility & Blocking Management</li>
            <li>Configurable Pricing Engine & Lead Scoring</li>
            <li>Dealer / Broker Onboarding with Commission Tracking</li>
            <li>Project & Unit Inventory Management </li>
            <li>Marketing Cloud Journeys for Lead Nurturing </li>
            <li>Mobile-Ready for Field Sales Agents </li>
            <li>Reports & Dashboards for Project-Wise Performance </li>
         </ol>
      </div>
   </div>

   <!-- Mobile Cards -->
   <div class="col-12 d-lg-none mt-4">
      <div id="sfaCard" class="tabCard">
         <div class="shadow p-4 mb-3 list list1" style="border-radius:15px;">
            <p style="font-weight:500;" class="mb-2">Pre-Sales / Developer</p>
            <ol class="librdr contentList" start="1">
               <li>Omni-channel Lead Capture</li>
                <li>Intelligent Lead Routing by project, budget & geography </li>
                <li>Site Visit Scheduling, Tracking & Automated Reminders </li>
                <li>Real-Time Unit Inventory Visibility & Blocking Management</li>
                <li>Configurable Pricing Engine & Lead Scoring</li>
                <li>Dealer / Broker Onboarding with Commission Tracking</li>
                <li>Project & Unit Inventory Management </li>
                <li>Marketing Cloud Journeys for Lead Nurturing </li>
                <li>Mobile-Ready for Field Sales Agents </li>
                <li>Reports & Dashboards for Project-Wise Performance </li>
            </ol>
         </div>
      </div>

      <div id="industryCard" class="tabCard d-none">
         <div class="shadow p-4 mb-3 list list1" style="border-radius:15px;">
            <p style="font-weight:500;" class="mb-2">Broker / Channel Partner</p>
            <ol class="librdr contentList" start="1">
                <li>Dedicated Broker Portal with Lead Submission & Inventory View </li>
                <li>Commission Tracking & Payout Management </li>
                <li>Deal Pipeline & Opportunity Stage Tracking </li>
                <li>WhatsApp Integration for Buyer & Broker Communication </li>
                <li>Performance Analytics & Broker Productivity Dashboards </li>
                <li>NRI & Overseas Sales Tracking </li>
            </ol>
         </div>
      </div>

      <div id="dmsCard" class="tabCard d-none">
         <div class="shadow p-4 mb-3 list list1" style="border-radius:15px;">
            <p style="font-weight:500;" class="mb-2">Post-Sales / Collections</p>
            <ol class="librdr contentList" start="1">
               <li>Omni-channel Lead Capture</li>
                <li>Intelligent Lead Routing by project, budget & geography </li>
                <li>Site Visit Scheduling, Tracking & Automated Reminders </li>
                <li>Real-Time Unit Inventory Visibility & Blocking Management</li>
                <li>Configurable Pricing Engine & Lead Scoring</li>
                <li>Dealer / Broker Onboarding with Commission Tracking</li>
                <li>Project & Unit Inventory Management </li>
                <li>Marketing Cloud Journeys for Lead Nurturing </li>
                <li>Mobile-Ready for Field Sales Agents </li>
                <li>Reports & Dashboards for Project-Wise Performance </li>
            </ol>
         </div>
      </div>
   </div>
</div>
<script>
   function showTab(tabId) {
      // Hide all cards
      document.querySelectorAll('.tabCard').forEach(card => {
         card.classList.add('d-none');
      });

      // Remove active class from all buttons
      document.querySelectorAll('.filter_list_items').forEach(btn => {
         btn.classList.remove('active');
      });

      // Show selected card
      document.getElementById(tabId).classList.remove('d-none');

      // Highlight the selected tab
      event.target.classList.add('active');
   }
</script>


   </div>
</section>
<!--//d-lg-block add for the filter li list-->
<section class="py-5 position-relative d-none">
    <style>
        .circle-loader {
  width: 30px;
  height: 30px;
  border: 5px solid rgba(0, 0, 0, 0.2);
  border-radius: 50%;
}
.shadow.active {
            border: 2px solid #00A1E0; 
            
        }
       .shadow.active .circle-loader{
           border-color:#00A1E0;
       }
       .filter_list_items.active{
           color: #00A1E0;
       }
       .bgeffect2 {
    width: 150px;
    height: 150px;
    background-color:#34cbb730;
    position:absolute;
    top:100px;
    left:30px;
    z-index:-1;
    border-radius: 50%;
    box-shadow: 0 0 70px 10px rgba(52, 203, 183, 0.3);
} 
    </style>
    <div class="container-sm p-0">
        <div class="bgeffect2 d-lg-block d-none"></div>
        <div class="row px-lg-4 px-3"> 
            <div class="col-lg-12 p-lg-0 px-3">
                <h1 class="hidden-content show-content">
                   Transforming today's Real Estate businesses into tomorrow's most trusted developers
                </h1>
            </div>
        
        </div>
        <div class="row py-5">
            <div class=" col-md-4 col-12 p-0">
                 <div class="row ">
                     
                     <div class="col-12 px-4">
                         <div class="shadow h-100 p-4 bg-light active" style="border-radius:15px;"  onclick="showList12(1, this)">
                     <h3 class="hidden-content show-content pt-lg-3">OEM</h3>
                     <p class="pe-4 py-lg-4">Explore OEM’s ready to implement features</p>
                     <div class="row justify-content-end">
                         <div class="circle-loader"></div>
                     </div>
                 </div>
                     </div>
                 <div class="col-12 p-0  py-3 d-lg-none">
                  <div class=" p-0 d-lg-none d-block py-2" style="background: #EEEEEE;">
                    <ol class="librdr list-style-none row m-0 text-center" id="itemList1" >
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items active" onclick="newid(1,'all')" data-filter="all" style="cursor:pointer">All</li>
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid(1,'marketing')" data-filter="marketing" style="cursor:pointer">Marketing</li>
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid(1,'sales')" data-filter="sales" style="cursor:pointer">Sales</li>
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid(1,'service')" data-filter="service" style="cursor:pointer">Service</li>
                      
                    </ol>
                 </div>
                </div>
                <div class="col-12 d-lg-none px-4">
                    <div class="shadow p-4 h-100 list list1" style="border-radius:15px;max-height:700px;overflow:hidden;">
                    <ol class="librdr contentList">
                        <!--oem Service Management-->
                        <li data-item="service">Remote Diagnostics </li>
                        <li data-item="service">Bay Management </li>
                        <li data-item="service">Entitlement Management</li>
                        <li data-item="service">Recall Management </li>
                        <!--oem sale-->
                        <li data-item="sales">Dealer Onboarding with ROI Calculation </li>
                        <li data-item="sales">OEM Order Placement </li>
                        <li data-item="sales">GRN (Goods Received Note) </li>
                        <li data-item="sales">FAME Claim Management</li>
                        <!--oem marketing-->
                        <li data-item="marketing">Brand Awareness Campaigns </li>
                        <li data-item="marketing">Product Launch Campaigns </li>
                        <li data-item="marketing">Digital Marketing Strategy </li> 
                        <li data-item="service">Warranty & Claim Management </li>
                        <li data-item="service">Spare Parts Inventory Management </li>
                        <li data-item="service">Spares & Accessories Ordering </li>
                        <li data-item="service">ERP Integration </li>
                        <!--oem sale-->
                        <li data-item="sales" style="white-space:nowrap">Mobile Sales Enablement for OEM Sales Users</li>
                        <li data-item="sales">Sales Performance Analytics </li>
                        <li data-item="sales">Sales Forecasting </li>
                        <li data-item="sales">Workflow Automation </li>
                        <!--oem marketing-->
                        <li data-item="marketing">Social Media Integration </li>
                        <li data-item="marketing">Market Research and Analysis </li>
                        <li data-item="marketing">Marketing Analytics and Reporting </li>
                         <!--oem service-->
                        <li data-item="service">CTI Integration </li>
                        <li data-item="service">Service Analytics and Reporting </li>
                        <li data-item="service">Dashboard </li>
                        <!--oem sales-->
                        <li data-item="sales">ERP Integration [OEM & Dealer] </li>
                        <li data-item="sales">Telematics Integration </li>
                        <li data-item="sales">Customer Feedback Management </li>
                        <li data-item="sales">Post Service Follow-up Survey</li>
                        
                        
                        <!--oem marketing-->
                        <li data-item="marketing">Content Creation and Distribution </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Event Management and Participation </li>
                    </ol>
                </div>
                </div>
             </div>
            </div>
             
            <div class=" col-md-4 col-12 pt-4 pt-lg-0">
                 <div class="shadow p-4 h-100 bg-light" style="border-radius:15px;" onclick="showList12(2, this)">
                     <h3 class="hidden-content show-content pt-lg-3">Dealers</h3>
                     <p class="pe-4 py-lg-4">Explore OEM’s ready to implement features</p>
                     
                     <div class="row justify-content-end">
                         <div class="circle-loader " ></div>
                     </div>
                 </div>
            </div>
            
            
            <div class=" col-md-4 col-12 pt-4 pt-lg-0">
                 <div class="shadow h-100 p-4 bg-light" style="border-radius:15px;"  onclick="showList12(3, this)">
                     <h3 class="hidden-content pt-lg-3  show-content">Customers</h3>
                     <p class="pe-4 py-lg-4">Explore OEM’s ready to implement features</p>
                     
                     <div class="row justify-content-end">
                         <div class="circle-loader"></div>
                     </div>
                 </div>
            </div>
        </div>  
           <input type="text" value="1" id="itemListnumber" class="d-none"> 
    </div>

 <script>
       function showList12(listNumber, button) {
           document.getElementById('alldesk').click();
           
           document.getElementById('itemListnumber').value=listNumber;
           const lists = document.querySelectorAll('.list');
           lists.forEach(list => {
               list.style.display = 'none'; 
           });
           const selectedLists = document.querySelectorAll('.list' + listNumber);
           selectedLists.forEach(list => {
               list.style.display = 'block'; 
           });

           const buttons = document.querySelectorAll('.shadow'); 
           buttons.forEach(shadow => {
               shadow.classList.remove('active');
           });

           button.classList.add('active');
            newid(2,'all');
       }
   </script>
<style>
     .hidden {
            display: none;
        
     }
     .list-style-none{
         list-style:none;
         padding-left:0.5rem;
         border-left-top-radius:0px;
     }
      
        .list {
            display: none;
           
          
        }
         .list1 {
            display: block; 
        }
</style>
<!--desktop filter-->

    <div class="container-sm position-relative d-lg-block d-none" >
        <div class="row">
            <div class="col-lg-12">
                <h4 class="righti con-small error col-lg-8 p-0 hidden-content show-content" style="font-weight:400;">
                    Power Your Sales & Distribution, From Planning to Performance
                </h4>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">Explore the key features that will propel your dealership into the digital era, streamline your operations, and elevate customer experiences. Our innovative solutions are designed to help you adapt to the evolving technology.</p>
            </div>
        </div>
        <style>
            .librdr li{
                border-bottom: 3px solid;
                border-image: linear-gradient(to right, lightgray, white) 1;
                margin-bottom:20px;
                padding-bottom:10px;
            }
            /*ol{*/
            /*    list-style:none;*/
            
            /*}*/
             
            @media(max-width:1450px){
                .ff{ 
                           right:100% !important;
                    } 
            }
                   @media (max-width:1200px){
                       .ff{ 
                           right:97% !important;
                    } 
                    }
            

        </style>
                
        <div class="row py-4 px-4 position-relative">
            
            <div class="shadow p-3 top-10 position-absolute ff" style="border-radius:15px;border-bottom-left-radius: 0;border-top-left-radius: 0;right:100%; width:auto">
                    <ol class="librdr list-style-none" id="itemList2" >
                        <li class="mb-2 pb-1 filter_list_items active" onclick="newid(2,'all')" data-filter="all" style="cursor:pointer" id="alldesk">All</li>
                        <li class="mb-2 pb-1 filter_list_items" onclick="newid(2,'marketing')" data-filter="marketing" style="cursor:pointer">Marketing</li>
                        <li class="mb-2 pb-1 filter_list_items" onclick="newid(2,'sales')" data-filter="sales" style="cursor:pointer">Sales</li>
                        <li class="mb-2 pb-1 filter_list_items" onclick="newid(2,'service')" data-filter="service" style="cursor:pointer">Service</li>
                      
                    </ol>
                </div>
            <div class="col-lg-4 ">
                <!--oem-->
                <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol11">
                        <!--oem Service Management-->
                        <li data-item="service">Remote Diagnostics </li>
                        <li data-item="service">Bay Management </li>
                        <li data-item="service">Entitlement Management</li>
                        <li data-item="service">Recall Management </li>
                        <!--oem sale-->
                        <li data-item="sales">Dealer Onboarding with ROI Calculation </li>
                        <li data-item="sales">OEM Order Placement </li>
                        <li data-item="sales">GRN (Goods Received Note) </li>
                        <li data-item="sales">FAME Claim Management</li>
                        <!--oem marketing-->
                        <li data-item="marketing">Brand Awareness Campaigns </li>
                        <li data-item="marketing">Product Launch Campaigns </li>
                        <li data-item="marketing">Digital Marketing Strategy </li> 
                    </ol>
                </div>
                <!--dealer-->
                  <div class="shadow p-4 h-100 list list2" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol21" >
                        
                        <!--dealer service-->
                         <li data-item="service">Service Marketing </li>
                        <li data-item="service">Omni Channel Case Sourcing </li>
                        <li data-item="service">Service Planning</li>
                        <li data-item="service">Case Management</li>
                        <li data-item="service">Knowledge Base Management </li>
                        <li data-item="service">Omni-Channel Support </li>
                        <li data-item="service">Service Console</li>
                        <li data-item="service">Dispatcher Console</li>
                        <!--dealer sale-->
                        <li data-item="sales">Visit Planning and Execution </li>
                        <li data-item="sales">Route Planning  </li>
                        <li data-item="sales">Geotagging and Attendance Capture </li>
                        <li data-item="sales">Complaint/Feedback Management </li>
                        <li data-item="sales">Visit Report & Marketing Intelligence Capturing  </li>
                        <li data-item="sales">Expense Management   </li>
                        <li data-item="sales">Omni-channel Lead Sourcing  </li>
                        <li data-item="sales">Lead Management </li>
                        <li data-item="sales">Lead & Opportunity Categorization </li>
                        <li data-item="sales">Test Drive/Ride Management </li>
                        <li data-item="sales">Opportunity Management </li>
                        <li data-item="sales">Quote and Proposal Management </li>
                        <li data-item="sales">Finance Checks & Applications </li>
                        <!--dealer marketing-->
                        <li data-item="marketing">Social Media Integration </li>
                        <li data-item="marketing">Local Advertising Campaigns </li>
                        <li data-item="marketing">Event and Showroom Promotions </li>
                    </ol>
                </div>
                <!--customer-->
                <div class="shadow p-4 h-100 list list3" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol31" >
                        <!--customer Service-->
                        <li data-item="service">Omni-Channel Support </li>
                        <li data-item="service">Remote Diagnostics </li>
                        
                        <!--customer sale-->
                        <!--<li data-item="sales">Omni-channel Lead Sourcing </li>-->
                        <li data-item="sales">Test Drive/Ride Management </li>
                        <li data-item="sales">Finance Checks & Applications </li>
                        <li data-item="sales">Customer Order Placement </li>
                        <!--customer marketing-->
                        <li data-item="marketing">Personalized Offers and Discounts </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Loyalty Programs and Rewards  </li>
                    </ol>
                </div>
            </div>
            
            <div class="col-lg-4 pt-lg-0 pt-4">
                <!--oem-->
                <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol12" >
                         <!--oem service-->
                        <li data-item="service">Warranty & Claim Management </li>
                        <li data-item="service">Spare Parts Inventory Management </li>
                        <li data-item="service">Spares & Accessories Ordering </li>
                        <li data-item="service">ERP Integration </li>
                        <!--oem sale-->
                        <li data-item="sales">Mobile Sales Enablement for OEM Sales Users</li>
                        <li data-item="sales">Sales Performance Analytics </li>
                        <li data-item="sales">Sales Forecasting </li>
                        <li data-item="sales">Workflow Automation </li>
                        <!--oem marketing-->
                        <li data-item="marketing">Social Media Integration </li>
                        <li data-item="marketing">Market Research and Analysis </li>
                        <li data-item="marketing">Marketing Analytics and Reporting </li>
                        
                    </ol>
                </div>
            <!--dealer-->
                <div class="shadow p-4 h-100 list list2" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol22" >
                         <!--dealer service-->
                         <li data-item="service">Bay Management </li>
                        <li data-item="service">Job Card Creation </li>
                        <li data-item="service">Entitlement Management </li>
                        <li data-item="service">Social Media Integration </li>
                        <li data-item="service">Activity/Camps Management </li>
                        <li data-item="service">Service Analytics and Reporting</li>
                        <li data-item="service">Dashboard </li>
                        <li data-item="service">Customer Feedback Management </li>
                        <!--dealer sale-->
                       <li data-item="sales">Customer Order Placement </li>
                        <li data-item="sales">Inventory Management </li>
                        <li data-item="sales">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales">Post Sales Follow-up Survey </li>
                        <li data-item="sales">Account and Contact Management </li>
                        <li data-item="sales">Document Upload and Approval Process </li>
                        <li data-item="sales">Activity Management </li>
                        <li data-item="sales">Sales Forecasting </li>
                        <li data-item="sales">OEM Order Placement </li>
                        <li data-item="sales">GRN (Goods Received Note) </li>
                        <li data-item="sales">Used Vehicle Business Management </li>
                        <li data-item="sales">ERP Integration [OEM & Dealer] </li>
                        <li data-item="sales">CTI Integration </li>
                        <!--dealer marketing-->
                        <li data-item="marketing">Digital Marketing Strategy </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Customer Loyalty Programs </li>
                    </ol>
                </div>
                <!--customer-->
                <div class="shadow p-4 h-100 list list3" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol32" >
                        <!--customer Service-->
                        <li data-item="service">Feedback Management </li>
                        <li data-item="service">Post Service Follow-up Survey </li>
                        
                        <!--customer sale-->
                        <li data-item="sales">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales">Warranty & Claim Management </li>
                        <li data-item="sales">Recall Management </li>
                        
                        <!--customer marketing-->
                        <li data-item="marketing">Customer Referral Programs </li>
                        <li data-item="marketing">Social Media Engagement </li>
                        <li data-item="marketing">Event Invitations and Exclusive Previews </li>
                    </ol>
                </div>
                
            </div>
            
            <div class="col-lg-4 pt-lg-0 pt-4">
                <!--oem-->
                <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
                    
                    <ol class="librdr contentList" id="ol13" >
                        <!--oem service-->
                        <li data-item="service">CTI Integration </li>
                        <li data-item="service">Service Analytics and Reporting </li>
                        <li data-item="service">Job Card Creation </li>
                        <li data-item="service">Dashboard </li>
                        <!--oem sales-->
                        <li data-item="sales">ERP Integration [OEM & Dealer] </li>
                        <li data-item="sales">Telematics Integration </li>
                        <li data-item="sales">Customer Feedback Management </li>
                        <li data-item="sales">Post Service Follow-up Survey</li>
                        
                        
                        <!--oem marketing-->
                        <li data-item="marketing">Content Creation and Distribution </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Event Management and Participation </li>
                    </ol>
                </div>
                <!--dealer-->
                <div class="shadow p-4 h-100 list list2" style="border-radius:15px;">
                    <ol class="librdr contentList" id="ol23" >
                        <!--dealer service-->
                         <li data-item="service">Spares & Accessories Ordering to OEM </li>
                        <li data-item="service">Warranty & Claim Management </li>
                        <li data-item="service">Recall Management </li>
                        <li data-item="service">Spare Parts Inventory Management </li>
                        <li data-item="service">Post Service Follow-up Survey</li>
                        <li data-item="service">Mobile Sales Enablement for Service Advisors </li>
                        <li data-item="service">ERP Integration </li>
                        <li data-item="service">CTI Integration </li>
                        <!--dealer sale-->
                        <li data-item="sales">Telematics Integration </li>
                        <li data-item="sales">CIBIL Score Integration  </li>
                        <li data-item="sales">Mobile Sales Enablement for Dealer Sales Users  </li>
                        <li data-item="sales">Workflow Automation </li>
                        <li data-item="sales">Sales Performance Analytics </li>
                        <li data-item="sales">Dashboard  </li>
                        <li data-item="sales">Customer Feedback Management </li>
                        <li data-item="sales">Post Service Follow-up Survey </li>
                        <!--dealer marketing-->
                        <li data-item="marketing">Marketing Analytics and Reporting</li>
                        <li data-item="marketing">Lead Generation Campaigns </li>
                        <li data-item="marketing">Content Creation and Distribution </li>
                    </ol>
                </div>
                <!--customer-->
                 <div class="shadow p-4 h-100 list list3" style="border-radius:15px;">
                    <ol  class="librdr contentList" id="ol33" >
                        <!--customer Service-->
                        <li data-item="service">Mobile App for Customers </li>
                        <!--customer sale-->
                        
                        <li data-item="sales">Spares & Accessories </li>
                        <li data-item="sales">VAS Pitch</li>
                        <!--customer marketing-->
                        <li data-item="marketing">Feedback and Survey Incentives </li>
                        <li data-item="marketing">Content Marketing (Blogs, Newsletters, etc.) </li>
                    </ol>
                </div>
            </div>
     
    </div>
      <script>
      
     window.onload = function() {
        document.getElementById('ol11').setAttribute('start', 1);
        document.getElementById('ol21').setAttribute('start', 1);
        document.getElementById('ol31').setAttribute('start', 1);
        document.getElementById('ol12').setAttribute('start', 12);
        document.getElementById('ol22').setAttribute('start', 25);
        document.getElementById('ol32').setAttribute('start', 9);
        document.getElementById('ol13').setAttribute('start', 23);
        document.getElementById('ol23').setAttribute('start', 49);
        document.getElementById('ol33').setAttribute('start', 17);
        
        document.getElementById('alldesk').click();
};
     
     
        function newid(id,fil){
             let listNumber=document.getElementById('itemListnumber').value;
           
             
            const filterItems = document.getElementById('itemList'+id).getElementsByTagName('li');
             const contentLists = document.getElementsByClassName('contentList');

        Array.from(filterItems).forEach(function(filterItem) {
            filterItem.addEventListener('click', function() {
                let selectedFilter = filterItem.getAttribute('data-filter');

                Array.from(filterItems).forEach(function(item) {
                    item.classList.remove('active');
                });

                filterItem.classList.add('active');

                Array.from(contentLists).forEach(function(contentList) {
                    const contentItems = contentList.getElementsByTagName('li');

                    if (selectedFilter === 'all') {
                        Array.from(contentItems).forEach(function(contentItem) {
                            contentItem.classList.remove('hidden');
                        });
                    } else {
                        Array.from(contentItems).forEach(function(contentItem) {
                            let contentFilter = contentItem.getAttribute('data-item');

                            if (contentFilter === selectedFilter) {
                                contentItem.classList.remove('hidden');
                            } else {
                                contentItem.classList.add('hidden');
                            }
                        });
                    }
                });
            });
        });
         //oem  
             if(listNumber==1 && fil=='marketing'){
                 document.getElementById('ol11').setAttribute('start', 1);
                 document.getElementById('ol12').setAttribute('start', 4);
                 document.getElementById('ol13').setAttribute('start', 7);
             }else if(listNumber==1 && fil=='sales'){
                 document.getElementById('ol11').setAttribute('start', 1);
                 document.getElementById('ol12').setAttribute('start', 5);
                 document.getElementById('ol13').setAttribute('start', 9);
             }else if(listNumber==1 && fil=='service'){
                 document.getElementById('ol11').setAttribute('start', 1);
                 document.getElementById('ol12').setAttribute('start', 5);
                 document.getElementById('ol13').setAttribute('start', 9);
             }else if(listNumber==1 && fil=='all'){
                 document.getElementById('ol11').setAttribute('start', 1);
                 document.getElementById('ol12').setAttribute('start', 12);
                 document.getElementById('ol13').setAttribute('start', 23);
             }
            //  dealers
            else if(listNumber==2 && fil=='marketing'){
                 document.getElementById('ol21').setAttribute('start', 1);
                 document.getElementById('ol22').setAttribute('start', 4);
                 document.getElementById('ol23').setAttribute('start', 7);
             }else if(listNumber==2 && fil=='sales'){
                 document.getElementById('ol21').setAttribute('start', 1);
                 document.getElementById('ol22').setAttribute('start', 14);
                 document.getElementById('ol23').setAttribute('start', 27);
             }else if(listNumber==2 && fil=='service'){
                 document.getElementById('ol21').setAttribute('start', 1);
                 document.getElementById('ol22').setAttribute('start', 9);
                 document.getElementById('ol23').setAttribute('start', 17);
             }else if(listNumber==2 && fil=='all'){
                 document.getElementById('ol21').setAttribute('start', 1);
                 document.getElementById('ol22').setAttribute('start', 25);
                 document.getElementById('ol23').setAttribute('start', 49);
             }
             //  customer
            else if(listNumber==3 && fil=='marketing'){
                 document.getElementById('ol31').setAttribute('start', 1);
                 document.getElementById('ol32').setAttribute('start', 4);
                 document.getElementById('ol33').setAttribute('start', 7);
             }else if(listNumber==3 && fil=='sales'){
                 document.getElementById('ol31').setAttribute('start', 1);
                 document.getElementById('ol32').setAttribute('start', 4);
                 document.getElementById('ol33').setAttribute('start', 7);
             }else if(listNumber==3 && fil=='service'){
                 document.getElementById('ol31').setAttribute('start', 1);
                 document.getElementById('ol32').setAttribute('start', 3);
                 document.getElementById('ol33').setAttribute('start', 5);
             }else if(listNumber==3 && fil=='all'){
                 document.getElementById('ol31').setAttribute('start', 1);
                 document.getElementById('ol32').setAttribute('start', 9);
                 document.getElementById('ol33').setAttribute('start', 17);
             }
        }
       

      

    </script>
</section>

<!--mobile filter for the list item filter use d-lg-none-->

<section class="pt-5 position-relative d-none" >
    <style>
        /*model css*/
        /* Modal container */
.modalnew {
    display: none; /* Hidden by default */
    position: fixed; 
    z-index: 999; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    background-color: rgba(0, 0, 0, 0.5); /* Black with opacity */
    justify-content: center;
    align-items: center;
    overflow: auto; /* Enable scroll if modal content is too long */
}

/* Modal content */
.modal-contentnew {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    width: 90%;
    max-width: 500px;
    position: relative;
    /*text-align: center;*/
    height:80vh;
    
}
 .modal_body{
     height:0%;
     overflow-y:scroll;
    scrollbar-width:none
 }
/* Close button */
.closenew2,.closenew1 ,.closenew3{
    position: absolute;
    top: 10px;
    right: 20px;
    color: #333;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
 
}
#openModalBtn1,#openModalBtn2,#openModalBtn3{
    outline:none;
}



    </style>
    <style>
        .circle-loader {
  width: 30px;
  height: 30px;
  border: 5px solid rgba(0, 0, 0, 0.2);
  border-radius: 50%;
}
.shadow.active {
            border: 2px solid #00A1E0; 
            
        }
       .shadow.active .circle-loader{
           border-color:#00A1E0;
       }
       .filter_list_items.active{
           color: #00A1E0;
       }
       .fixed-height {
    height: 703px !important;
}

.auto-height {
    height: auto !important;
}
    </style>
    <div class="container-sm p-0">
        <div class="row px-lg-4 px-3"> 
            <div class="col-lg-12 p-lg-0 px-3">
                <h1 class="hidden-content show-content">
                   Delivering complete automotive solution covering OEM’s, Dealers and Customers
                </h1>
            </div>
        
        </div>
       
        <div class="row py-5">
            <div class=" col-md-4 col-12 p-0">
                 <div class="row ">
                     
                     <div class="col-12 px-4 py-3" id="oem" onclick="showList(1, 'oem_box_mobile')">
                        <a href="#oem"> <div class="shadow h-100 p-4 active" style="border-radius:15px;" id="oem_box_mobile">
                             <h3 class="hidden-content show-content pt-lg-3">OEM</h3>
                             <p class="pe-4 py-lg-4">Explore OEM’s ready to implement features</p>
                             <div class="row justify-content-end">
                                 <div class="circle-loader"></div>
                             </div>
                         </div></a>
                    </div>
                     <div class="col-12 p-0 pt-4  text-center list list1 d-lg-none" id="list_main1">
                       <div id="list_scroll1" class="w-100 ">
                            <div class="row py-2" style="background: #EEEEEE;">
                            <div class="col-4">
                                <a href="#oem" style="color: #00A1E0 !important;">
                                    OEM
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="#dealers">Dealers</a>
                            </div>
                            <div class="col-4">
                                <a href="#customers">
                                    Customers
                                </a>
                            </div>
                           
                        </div>
                        <div class=" p-0 d-lg-none d-block mt-1 py-2" style="background: #EEEEEE;">
                        <!--<ol class="librdr list-style-none row m-0 text-center" id="itemList5" >-->
                        <!--    <li class="mb-0 pb-0  col-3  border border-0 filter_list_items active" onclick="newid12(5,'all',0)" data-filter="all" style="cursor:pointer">All</li>-->
                        <!--    <li class="mb-0 pb-0  col-3 border border-0 filter_list_items" onclick="newid12(5,'marketing',0)" data-filter="marketing5" style="cursor:pointer">Marketing</li>-->
                        <!--    <li class="mb-0 pb-0  col-3 border border-0 filter_list_items" onclick="newid12(5, 'sales',0)" data-filter="sales5" style="cursor:pointer">Sales</li>-->
                        <!--    <li class="mb-0 pb-0  col-3 border border-0 filter_list_items" onclick="newid12(5, 'service',0)" data-filter="service5" style="cursor:pointer">Service</li>-->
                          
                        <!--</ol>-->
                     </div>
                       </div>
                    </div>
                     
                    <div class="col-12 d-lg-none px-4 ">
                    <div class="shadow p-4 h-100 list fixed-height list1 mt-5 mb-4" id="listheight5" style="border-radius:15px;overflow:hidden;">
                        <ol class="librdr contentList_mobile"> 
                            <!--oem Service Management-->
                            <li data-item="service5">Remote Diagnostics </li>
                            <li data-item="service5">Bay Management </li>
                            <li data-item="service5">Entitlement Management</li>
                            <li data-item="service5">Recall Management </li>
                            <!--oem sale-->
                            <li data-item="sales5">Dealer Onboarding with ROI Calculation </li>
                            <li data-item="sales5">OEM Order Placement </li>
                            <li data-item="sales5">GRN (Goods Received Note) </li>
                            <li data-item="sales5">FAME Claim Management</li>
                            <!--oem marketing-->
                            <li data-item="marketing5">Brand Awareness Campaigns </li>
                            <li data-item="marketing5">Product Launch Campaigns </li>
                            <li data-item="marketing5">Digital Marketing Strategy </li> 
                            <li data-item="service5">Warranty & Claim Management </li>
                            <li data-item="service5">Spare Parts Inventory Management </li>
                            <li data-item="service5">Spares & Accessories Ordering </li>
                            <li data-item="service5">ERP Integration </li>
                            <!--oem sale-->
                            <li data-item="sales5" >Mobile Sales Enablement for OEM Sales Users</li>
                            <li data-item="sales5">Sales Performance Analytics </li>
                            <li data-item="sales5">Sales Forecasting </li>
                            <li data-item="sales5">Workflow Automation </li>
                            <!--oem marketing-->
                            <li data-item="marketing5">Social Media Integration </li>
                            <li data-item="marketing5">Market Research and Analysis </li>
                            <li data-item="marketing5">Marketing Analytics and Reporting </li>
                             <!--oem service-->
                            <li data-item="service5">CTI Integration </li>
                            <li data-item="service5">Service Analytics and Reporting </li>
                            <li data-item="service5">Dashboard </li>
                            <!--oem sales-->
                            <li data-item="sales5">ERP Integration [OEM & Dealer] </li>
                            <li data-item="sales5">Telematics Integration </li>
                            <li data-item="sales5">Customer Feedback Management </li>
                            <li data-item="sales5">Post Service Follow-up Survey</li>
                            
                            
                            <!--oem marketing-->
                            <li data-item="marketing5">Content Creation and Distribution </li>
                            <li data-item="marketing5">Email Marketing Campaigns </li>
                            <li data-item="marketing5">Event Management and Participation </li>
                        </ol>
                    </div>
                    <button id="openModalBtn1" class="btn fw-bold list list1 w-100 text-center">See all features <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                     
             </div>
            </div>
             <div id="list_content1" class="modalnew">
                <div class="modal-contentnew">
                    <span class="closenew1">&times;</span>
                    <div class="h-100 modal_body">
                        <ol class="librdr">
                            <!--oem Service Management-->
                            <li data-item="service">Remote Diagnostics </li>
                            <li data-item="service">Bay Management </li>
                            <li data-item="service">Entitlement Management</li>
                            <li data-item="service">Recall Management </li>
                            <!--oem sale-->
                            <li data-item="sales">Dealer Onboarding with ROI Calculation </li>
                            <li data-item="sales">OEM Order Placement </li>
                            <li data-item="sales">GRN (Goods Received Note) </li>
                            <li data-item="sales">FAME Claim Management</li>
                            <!--oem marketing-->
                            <li data-item="marketing">Brand Awareness Campaigns </li>
                            <li data-item="marketing">Product Launch Campaigns </li>
                            <li data-item="marketing">Digital Marketing Strategy </li> 
                            <li data-item="service">Warranty & Claim Management </li>
                            <li data-item="service">Spare Parts Inventory Management </li>
                            <li data-item="service">Spares & Accessories Ordering </li>
                            <li data-item="service">ERP Integration </li>
                            <!--oem sale-->
                            <li data-item="sales" >Mobile Sales Enablement for OEM Sales Users</li>
                            <li data-item="sales">Sales Performance Analytics </li>
                            <li data-item="sales">Sales Forecasting </li>
                            <li data-item="sales">Workflow Automation </li>
                            <!--oem marketing-->
                            <li data-item="marketing">Social Media Integration </li>
                            <li data-item="marketing">Market Research and Analysis </li>
                            <li data-item="marketing">Marketing Analytics and Reporting </li>
                             <!--oem service-->
                            <li data-item="service">CTI Integration </li>
                            <li data-item="service">Service Analytics and Reporting </li>
                            <li data-item="service">Dashboard </li>
                            <!--oem sales-->
                            <li data-item="sales">ERP Integration [OEM & Dealer] </li>
                            <li data-item="sales">Telematics Integration </li>
                            <li data-item="sales">Customer Feedback Management </li>
                            <li data-item="sales">Post Service Follow-up Survey</li>
                            
                            
                            <!--oem marketing-->
                            <li data-item="marketing">Content Creation and Distribution </li>
                            <li data-item="marketing">Email Marketing Campaigns </li>
                            <li data-item="marketing">Event Management and Participation </li>
                        </ol>
                    </div>
                </div>
                
               
            </div>
            
            <script>
                // Get modal element
               
                   
                const modal = document.getElementById('list_content1');
                
                // Check if the modal exists
             
                const openModalBtn = document.getElementById('openModalBtn1');
                const closeBtn = document.getElementsByClassName('closenew1')[0];
            
            
            
                // Open modal when clicking the button
                openModalBtn.onclick = function () {
                    modal.style.display = 'flex'; // Flex to center the content
                };
            
                // Close modal when clicking (x)
                closeBtn.onclick = function () {
                    modal.style.display = 'none';
                };
            
                // Close modal when clicking outside the modal content
                window.onclick = function (event) {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                }
            


            </script>
            <div class=" col-md-4 col-12  pt-lg-0 p-0">
                <div class="row">
                    <div class="col-12 px-4 py-3" id="dealers" onclick="showList(2, 'dealers_box_mobile')">
                     <a href="#dealers">
                         <div class="shadow p-4 h-100" style="border-radius:15px;"  id="dealers_box_mobile">
                     <h3 class="hidden-content show-content pt-lg-3">Dealers</h3>
                     <p class="pe-3 py-lg-4">Explore OEM’s ready to implement features</p>
                     
                     <div class="row justify-content-end">
                         <div class="circle-loader" ></div>
                     </div>
                     </a>
                 </div>
                </div>
                <div class="col-12 p-0 pt-4 text-center list list2 d-lg-none " id="list_main2">
                        <div id="list_scroll2" class="w-100">
                            <div class="row py-2" style="background: #EEEEEE;">
                            <div class="col-4"  onclick="showList(1, 'oem_box_mobile')">
                                <a href="#oem">OEM</a>
                            </div>
                            <div class="col-4" onclick="showList(2, 'dealers_box_mobile')">
                                <a href="#dealers" style="color: #00A1E0 !important;">Dealers</a>
                            </div>
                            <div class="col-4"  onclick="showList(3, 'customers_box_mobile')">
                                <a href="#customers">Customers</a>
                            </div>
                           
                        </div>
                        <div class=" p-0 d-lg-none d-block  mt-1 py-2" style="background: #EEEEEE;">
                        <ol class="librdr list-style-none row m-0 text-center" id="itemList3" >
                            <li class="mb-0 pb-0 col-3 border border-0 filter_list_items active" onclick="newid12(3, 'all', 1)" data-filter="all" style="cursor:pointer">All</li>
                            <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(3, 'marketing', 1)" data-filter="marketing3" style="cursor:pointer">Marketing</li>
                            <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(3, 'sales', 1)" data-filter="sales3" style="cursor:pointer">Sales</li>
                            <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(3, 'service', 1)" data-filter="service3" style="cursor:pointer">Service</li>
                          
                        </ol>
                     </div>
                        </div>
                    </div>
                
                    <div class="col-12 d-lg-none px-4">
                        <div class="shadow p-4 mt-5 mb-4 h-100 list fixed-height list2" id="listheight3" style="border-radius:15px;overflow:hidden;">
                        <ol class="librdr  contentList_mobile" >
                            <!--oem Service Management-->
                            <!--dealer service-->
                            <li data-item="service3">Service Marketing </li>
                            <li data-item="service3">Omni Channel Case Sourcing </li>
                            <li data-item="service3">Service Planning</li>
                            <li data-item="service3">Case Management</li>
                            <li data-item="service3">Knowledge Base Management </li>
                            <li data-item="service3">Omni-Channel Support </li>
                            <li data-item="service3">Service Console</li>
                            <li data-item="service3">Dispatcher Console</li>
                            <!--dealer sale-->
                            <li data-item="sales3">Visit Planning and Execution </li>
                            <li data-item="sales3">Route Planning  </li>
                            <li data-item="sales3">Geotagging and Attendance Capture </li>
                            <li data-item="sales3">Complaint/Feedback Management </li>
                            <li data-item="sales3">Visit Report & Marketing Intelligence Capturing  </li>
                            <li data-item="sales3">Expense Management   </li>
                            <li data-item="sales3">Omni-channel Lead Sourcing  </li>
                            <li data-item="sales3">Lead Management </li>
                            <li data-item="sales3">Lead & Opportunity Categorization </li>
                            <li data-item="sales3">Test Drive/Ride Management </li>
                            <li data-item="sales3">Opportunity Management </li>
                            <li data-item="sales3">Quote and Proposal Management </li>
                            <li data-item="sales3">Finance Checks & Applications </li>
                            <!--dealer marketing-->
                            <li data-item="marketing3">Social Media Integration </li>
                            <li data-item="marketing3">Local Advertising Campaigns </li>
                            <li data-item="marketing3">Event and Showroom Promotions </li>
                             <li data-item="service3">Bay Management </li>
                        <li data-item="service3">Job Card Creation </li>
                        <li data-item="service3">Entitlement Management </li>
                        <li data-item="service3">Social Media Integration </li>
                        <li data-item="service3">Activity/Camps Management </li>
                        <li data-item="service3">Service Analytics and Reporting</li>
                        <li data-item="service3">Dashboard </li>
                        <li data-item="service3">Customer Feedback Management </li>
                        <!--dealer sale-->
                       <li data-item="sales3">Customer Order Placement </li>
                        <li data-item="sales3">Inventory Management </li>
                        <li data-item="sales3">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales3">Post Sales Follow-up Survey </li>
                        <li data-item="sales3">Account and Contact Management </li>
                        <li data-item="sales3">Document Upload and Approval Process </li>
                        <li data-item="sales3">Activity Management </li>
                        <li data-item="sales3">Sales Forecasting </li>
                        <li data-item="sales3">OEM Order Placement </li>
                        <li data-item="sales3">GRN (Goods Received Note) </li>
                        <li data-item="sales3">Used Vehicle Business Management </li>
                        <li data-item="sales3">ERP Integration [OEM & Dealer] </li>
                        <li data-item="sales3">CTI Integration </li>
                        <!--dealer marketing-->
                        <li data-item="marketing3">Digital Marketing Strategy </li>
                        <li data-item="marketing3">Email Marketing Campaigns </li>
                        <li data-item="marketing3">Customer Loyalty Programs </li>
                        <!--dealer service-->
                         <li data-item="service3">Spares & Accessories Ordering to OEM </li>
                        <li data-item="service3">Warranty & Claim Management </li>
                        <li data-item="service3">Recall Management </li>
                        <li data-item="service3">Spare Parts Inventory Management </li>
                        <li data-item="service3">Post Service Follow-up Survey</li>
                        <li data-item="service3">Mobile Sales Enablement for Service Advisors </li>
                        <li data-item="service3">ERP Integration </li>
                        <li data-item="service3">CTI Integration </li>
                        <!--dealer sale-->
                        <li data-item="sales3">Telematics Integration </li>
                        <li data-item="sales3">CIBIL Score Integration  </li>
                        <li data-item="sales3">Mobile Sales Enablement for Dealer Sales Users  </li>
                        <li data-item="sales3">Workflow Automation </li>
                        <li data-item="sales3">Sales Performance Analytics </li>
                        <li data-item="sales3">Dashboard  </li>
                        <li data-item="sales3">Customer Feedback Management </li>
                        <li data-item="sales3">Post Service Follow-up Survey </li>
                        <!--dealer marketing-->
                        <li data-item="marketing3">Marketing Analytics and Reporting</li>
                        <li data-item="marketing3">Lead Generation Campaigns </li>
                        <li data-item="marketing3">Content Creation and Distribution </li>
                        </ol>
                    </div>
                     <button id="openModalBtn2" class="btn fw-bold list list2 w-100 text-center">See all features <i class="fa-solid fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
            <div id="list_content2" class="modalnew">
                <div class="modal-contentnew">
                    <span class="closenew2">&times;</span>
                    <div class="h-100 modal_body">
                           <ol class="librdr " >
                            <!--oem Service Management-->
                            <!--dealer service-->
                            <li data-item="service">Service Marketing </li>
                            <li data-item="service">Omni Channel Case Sourcing </li>
                            <li data-item="service">Service Planning</li>
                            <li data-item="service">Case Management</li>
                            <li data-item="service">Knowledge Base Management </li>
                            <li data-item="service">Omni-Channel Support </li>
                            <li data-item="service">Service Console</li>
                            <li data-item="service">Dispatcher Console</li>
                            <!--dealer sale-->
                            <li data-item="sales">Visit Planning and Execution </li>
                            <li data-item="sales">Route Planning  </li>
                            <li data-item="sales">Geotagging and Attendance Capture </li>
                            <li data-item="sales">Complaint/Feedback Management </li>
                            <li data-item="sales">Visit Report & Marketing Intelligence Capturing  </li>
                            <li data-item="sales">Expense Management   </li>
                            <li data-item="sales">Omni-channel Lead Sourcing  </li>
                            <li data-item="sales">Lead Management </li>
                            <li data-item="sales">Lead & Opportunity Categorization </li>
                            <li data-item="sales">Test Drive/Ride Management </li>
                            <li data-item="sales">Opportunity Management </li>
                            <li data-item="sales">Quote and Proposal Management </li>
                            <li data-item="sales">Finance Checks & Applications </li>
                            <!--dealer marketing-->
                            <li data-item="marketing">Social Media Integration </li>
                            <li data-item="marketing">Local Advertising Campaigns </li>
                            <li data-item="marketing">Event and Showroom Promotions </li>
                             <li data-item="service">Bay Management </li>
                        <li data-item="service">Job Card Creation </li>
                        <li data-item="service">Entitlement Management </li>
                        <li data-item="service">Social Media Integration </li>
                        <li data-item="service">Activity/Camps Management </li>
                        <li data-item="service">Service Analytics and Reporting</li>
                        <li data-item="service">Dashboard </li>
                        <li data-item="service">Customer Feedback Management </li>
                        <!--dealer sale-->
                       <li data-item="sales">Customer Order Placement </li>
                        <li data-item="sales">Inventory Management </li>
                        <li data-item="sales">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales">Post Sales Follow-up Survey </li>
                        <li data-item="sales">Account and Contact Management </li>
                        <li data-item="sales">Document Upload and Approval Process </li>
                        <li data-item="sales">Activity Management </li>
                        <li data-item="sales">Sales Forecasting </li>
                        <li data-item="sales">OEM Order Placement </li>
                        <li data-item="sales">GRN (Goods Received Note) </li>
                        <li data-item="sales">Used Vehicle Business Management </li>
                        <li data-item="sales">ERP Integration [OEM & Dealer] </li>
                        <li data-item="sales">CTI Integration </li>
                        <!--dealer marketing-->
                        <li data-item="marketing">Digital Marketing Strategy </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Customer Loyalty Programs </li>
                        <!--dealer service-->
                         <li data-item="service">Spares & Accessories Ordering to OEM </li>
                        <li data-item="service">Warranty & Claim Management </li>
                        <li data-item="service">Recall Management </li>
                        <li data-item="service">Spare Parts Inventory Management </li>
                        <li data-item="service">Post Service Follow-up Survey</li>
                        <li data-item="service">Mobile Sales Enablement for Service Advisors </li>
                        <li data-item="service">ERP Integration </li>
                        <li data-item="service">CTI Integration </li>
                        <!--dealer sale-->
                        <li data-item="sales">Telematics Integration </li>
                        <li data-item="sales">CIBIL Score Integration  </li>
                        <li data-item="sales">Mobile Sales Enablement for Dealer Sales Users  </li>
                        <li data-item="sales">Workflow Automation </li>
                        <li data-item="sales">Sales Performance Analytics </li>
                        <li data-item="sales">Dashboard  </li>
                        <li data-item="sales">Customer Feedback Management </li>
                        <li data-item="sales">Post Service Follow-up Survey </li>
                        <!--dealer marketing-->
                        <li data-item="marketing">Marketing Analytics and Reporting</li>
                        <li data-item="marketing">Lead Generation Campaigns </li>
                        <li data-item="marketing">Content Creation and Distribution </li>
                        </ol>
                    </div>
                </div>
                 <script>
                // Get modal element
               
                   
                const modal1 = document.getElementById('list_content2');
                
                // Check if the modal exists
             
                const openModalBtn1 = document.getElementById('openModalBtn2');
                const closeBtn1 = document.getElementsByClassName('closenew2')[0];
            
            
            
                // Open modal when clicking the button
                openModalBtn1.onclick = function () {
                    modal1.style.display = 'flex'; // Flex to center the content
                };
            
                // Close modal when clicking (x)
                closeBtn1.onclick = function () {
                    modal1.style.display = 'none';
                };
            
                // Close modal when clicking outside the modal content
                window.onclick = function (event) {
                    if (event.target === modal1) {
                        modal1.style.display = 'none';
                    }
                }
            


            </script>
               
            </div>
            <div class=" col-md-4 col-12 pt-lg-0 p-0">
                 <div class="row">
                     <div class="col-12 px-4 py-3 " id="customers" onclick="showList(3, 'customers_box_mobile')">
                         <a href="#customers">
                             <div class="shadow h-100 p-4 " style="border-radius:15px;"   id="customers_box_mobile">
                             <h3 class="hidden-content pt-lg-3 show-content">Customers</h3>
                             <p class="pe-4 py-lg-4">Explore OEM’s ready to implement features</p>
                             
                             <div class="row justify-content-end">
                                 <div class="circle-loader"></div>
                             </div>
                         </div>
                         </a>
                     </div>
                   <div class="col-12 p-0 pt-4 text-center list list3 listheight d-lg-none" id="list_main3">
                        <div id="list_scroll3" class="w-100">
                            <div class="row py-2" style="background: #EEEEEE;">
                            <div class="col-4"  onclick="showList(1, 'oem_box_mobile')">
                                <a href="#oem">OEM</a>
                            </div>
                            <div class="col-4"  onclick="showList(2, 'dealers_box_mobile')">
                                <a href="#dealers">Dealers</a>
                            </div>
                            <div class="col-4" onclick="showList(3, 'customers_box_mobile')">
                                <a href="#customers" style="color: #00A1E0 !important;">Customers</a>
                            </div>
                           
                        </div>
                         <div class=" p-0 d-lg-none d-block mt-1 py-2" style="background: #EEEEEE;">
                            <ol class="librdr list-style-none row m-0 text-center" id="itemList4" >
                                <li class="mb-0 pb-0 col-3 border border-0 filter_list_items active" onclick="newid12(4,'all',2)" data-filter="all" style="cursor:pointer">All</li>
                                <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(4, 'marketing', 2)" data-filter="marketing4" style="cursor:pointer">Marketing</li>
                                <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(4, 'sales', 2)" data-filter="sales4" style="cursor:pointer">Sales</li>
                                <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid12(4, 'service', 2)" data-filter="service4" style="cursor:pointer">Service</li>
                              
                            </ol>
                        </div>
                        </div>
                
                    </div>
                    <div class="col-12 d-lg-none px-4 ">
                        <div class="shadow p-4 mt-5 mb-4 h-100 fixed-height list list3" id="listheight4" style="border-radius:15px;overflow:hidden;">
                        <ol class="librdr contentList_mobile">
                           <!--customer Service-->
                        <li data-item="service4">Omni-Channel Support </li>
                        <li data-item="service4">Remote Diagnostics </li>
                        
                        <!--customer sale-->
                        <!--<li data-item="sales">Omni-channel Lead Sourcing </li>-->
                        <li data-item="sales4">Test Drive/Ride Management </li>
                        <li data-item="sales4">Finance Checks & Applications </li>
                        <li data-item="sales4">Customer Order Placement </li>
                        <!--customer marketing-->
                        <li data-item="marketing4">Personalized Offers and Discounts </li>
                        <li data-item="marketing4">Email Marketing Campaigns </li>
                        <li data-item="marketing4">Loyalty Programs and Rewards  </li>
                         <!--customer Service-->
                        <li data-item="service4">Feedback Management </li>
                        <li data-item="service4">Post Service Follow-up Survey </li>
                        
                        <!--customer sale-->
                        <li data-item="sales4">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales4">Warranty & Claim Management </li>
                        <li data-item="sales4">Recall Management </li>
                        
                        <!--customer marketing-->
                        <li data-item="marketing4">Customer Referral Programs </li>
                        <li data-item="marketing4">Social Media Engagement </li>
                        <li data-item="marketing4">Event Invitations and Exclusive Previews </li>
                         <!--customer Service-->
                        <li data-item="service">Mobile App for Customers </li>
                        <!--customer sale-->
                        
                        <li data-item="sales4">Spares & Accessories </li>
                        <li data-item="sales4">VAS Pitch</li>
                        <!--customer marketing-->
                        <li data-item="marketing4">Feedback and Survey Incentives </li>
                        <li data-item="marketing4">Content Marketing (Blogs, Newsletters, etc.) </li>
                        </ol>
                    </div>
                    
                    </div>
                    <button id="openModalBtn3"   class="btn fw-bold list list3 w-100 text-center">See all features <i class="fa-solid fa-chevron-right"></i></button>
                 </div>
            </div>
        </div>  
            
    </div>
    <div id="list_content3" class="modalnew">
                <div class="modal-contentnew">
                    <span class="closenew3">&times;</span>
                    <div class="h-100 modal_body">
                        <ol class="librdr">
                           <!--customer Service-->
                        <li data-item="service">Omni-Channel Support </li>
                        <li data-item="service">Remote Diagnostics </li>
                        
                        <!--customer sale-->
                        <!--<li data-item="sales">Omni-channel Lead Sourcing </li>-->
                        <li data-item="sales">Test Drive/Ride Management </li>
                        <li data-item="sales">Finance Checks & Applications </li>
                        <li data-item="sales">Customer Order Placement </li>
                        <!--customer marketing-->
                        <li data-item="marketing">Personalized Offers and Discounts </li>
                        <li data-item="marketing">Email Marketing Campaigns </li>
                        <li data-item="marketing">Loyalty Programs and Rewards  </li>
                         <!--customer Service-->
                        <li data-item="service">Feedback Management </li>
                        <li data-item="service">Post Service Follow-up Survey </li>
                        
                        <!--customer sale-->
                        <li data-item="sales">PDI Delivery & Post Sales Follow Up </li>
                        <li data-item="sales">Warranty & Claim Management </li>
                        <li data-item="sales">Recall Management </li>
                        
                        <!--customer marketing-->
                        <li data-item="marketing">Customer Referral Programs </li>
                        <li data-item="marketing">Social Media Engagement </li>
                        <li data-item="marketing">Event Invitations and Exclusive Previews </li>
                         <!--customer Service-->
                        <li data-item="service">Mobile App for Customers </li>
                        <!--customer sale-->
                        
                        <li data-item="sales">Spares & Accessories </li>
                        <li data-item="sales">VAS Pitch</li>
                        <!--customer marketing-->
                        <li data-item="marketing">Feedback and Survey Incentives </li>
                        <li data-item="marketing">Content Marketing (Blogs, Newsletters, etc.) </li>
                        </ol>
                    </div>
                </div>
                
               
            </div>
            <script>
                // Get modal element
               
                   
                const modal2 = document.getElementById('list_content3');
                
                // Check if the modal exists
             
                const openModalBtn2 = document.getElementById('openModalBtn3');
                const closeBtn2 = document.getElementsByClassName('closenew3')[0];
            
            
            
                // Open modal when clicking the button
                openModalBtn2.onclick = function () {
                    modal2.style.display = 'flex'; // Flex to center the content
                };
            
                // Close modal when clicking (x)
                closeBtn2.onclick = function () {
                    modal2.style.display = 'none';
                };
            
                // Close modal when clicking outside the modal content
                window.onclick = function (event) {
                    if (event.target === modal2) {
                        modal2.style.display = 'none';
                    }
                }
            


            </script>
<!--sticky script-->
<script>
   window.addEventListener('scroll', function() {
    const scrollingPoint1 = window.scrollY;
    const section_filter = document.getElementById("section_filter");
    section_point=section_filter.getBoundingClientRect().top

    // List scroll 1
    const featuresElement1 = document.getElementById("list_scroll1");
    const featuresMain1 = document.getElementById("list_main1");
    
    if (featuresElement1 && featuresMain1) {
        const point = featuresMain1.getBoundingClientRect().top;
     
        
        if (point <= 50 && section_point >= 152) {
            featuresElement1.style.position = "fixed";
            featuresElement1.style.zIndex = "99";
            featuresElement1.style.top = "54px";
        } else if (section_point < 152) {
            featuresElement1.style.position = "absolute";
            featuresElement1.style.bottom = "0px";
            featuresElement1.style.top = "";
        } else {
            featuresElement1.style.position = "static";
            
        }
    }

    // List scroll 2
    const featuresElement2 = document.getElementById("list_scroll2");
    const featuresMain2 = document.getElementById("list_main2");
    
    if (featuresElement2 && featuresMain2) {
        const point2 = featuresMain2.getBoundingClientRect().top;

        
        if (point2 <= 50 && section_point > 152) {
            featuresElement2.style.position = "fixed";
            featuresElement2.style.zIndex = "99";
            featuresElement2.style.top = "54px";
        } else if (section_point < 152) {
            featuresElement2.style.position = "absolute";
             featuresElement2.style.bottom = "0px";
            featuresElement2.style.top = "";
        } else {
            featuresElement2.style.position = "static";
        }
    }

    // List scroll 3
    const featuresElement3 = document.getElementById("list_scroll3");
    const featuresMain3 = document.getElementById("list_main3");
    
    if (featuresElement3 && featuresMain3) {
        const point3 = featuresMain3.getBoundingClientRect().top;
      
        
        if (point3 <= 50 && section_point > 152) {
            featuresElement3.style.position = "fixed";
            featuresElement3.style.zIndex = "99";
            featuresElement3.style.top = "54px";
        } else if (section_point < 152) {
            featuresElement3.style.position = "absolute";
             featuresElement3.style.bottom = "0px";
            featuresElement3.style.top = "";
        } else {
            featuresElement3.style.position = "static";
        }
    }
});

    
</script>
 <script>
       function showList(listNumber, button) { 
           const lists = document.querySelectorAll('.list');
           lists.forEach(list => {
               list.style.display = 'none'; 
           });
           const selectedLists = document.querySelectorAll('.list' + listNumber);
           selectedLists.forEach(list => {
               list.style.display = 'block'; 
           });

           const buttons = document.querySelectorAll('.shadow'); 
           buttons.forEach(shadow => {
               shadow.classList.remove('active');
           });

            document.getElementById(button).classList.add('active');
       }
   </script>
<style>
     .hidden {
            display: none;
        
     }
     .list-style-none{
         list-style:none;
         padding-left:0.5rem;
         border-left-top-radius:0px;
     }
      
        .list {
            display: none;
           
          
        }
         .list1 {
            display: block; 
        }
</style>
<!--mobile filter-->

   
      <script>
     
       function newid12(id,filter,list_mobile_id) {
          
    const filterItems = document.getElementById('itemList' + id).getElementsByTagName('li');
    const contentLists = document.getElementsByClassName('contentList_mobile');
    const lists_heights = document.getElementById('listheight' + id)
    
    console.log(contentLists);
    Array.from(filterItems).forEach(function(filterItem) {
        filterItem.addEventListener('click', function() {
            let selectedFilter = filterItem.getAttribute('data-filter');
            
            Array.from(filterItems).forEach(function(item) {
                item.classList.remove('active');
            });

            filterItem.classList.add('active');

           
                const contentItems = contentLists[list_mobile_id].getElementsByTagName('li');

                // Reset the maxHeight for all list items
              

                // Now, you can remove the restriction for the specific filtered item(s)
                if (selectedFilter === 'all') {
                    Array.from(contentItems).forEach(function(contentItem) {
                        contentItem.classList.remove('hidden');
                    });
                } else {
                    Array.from(contentItems).forEach(function(contentItem) {
                        let contentFilter = contentItem.getAttribute('data-item');

                        if (contentFilter === selectedFilter) {
                            contentItem.classList.remove('hidden');
                        } else {
                            contentItem.classList.add('hidden');
                        }
                    });
                }
        
                // Optionally, adjust the maxHeight based on the filter
               
           
        });
    });
    if (filter == 'all') {
    // Remove the auto-height class and add the fixed-height class
    lists_heights.classList.remove('auto-height');
    lists_heights.classList.add('fixed-height');
    } else {
        // Remove the fixed-height class and add the auto-height class
        lists_heights.classList.remove('fixed-height');
        lists_heights.classList.add('auto-height');
    }
}

       
           
      

    </script>
</section>



<section id="section_filter">
    <div class="container-sm">
        <div class="row pt-5 justify-content-evenly " style="">
             <style>
                    .circlepad{
                        padding-top:2rem;
                    }
                    .cir{
                        border-radius:50%; 
                        width:180px; 
                        height:180px;
                    }
                    @media (max-width:576px){
                       .cir{ 
                        width:150px; 
                        height:150px;
                    } 
                    }
                </style>
                
            <div class="col-lg-2 col-md-6 col-6 ">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir">
                     <h1 class=" circlepad">25% <i class="fa-solid fa-arrow-down text-danger"></i></h1>
                     
                 </div>
                 <p class="text-center pt-3">better lead conversion rates with Pre-Sales automation</p>
            </div>    
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir">
                     <h1 class=" circlepad">20% </h1>
                     
                 </div>
                 <p class="text-center pt-3">faster payment collection with Post-Sales milestone tracking</p>
            </div>
            
            
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir" >
                     <h1 class="  circlepad">9/10 </h1>
                     <!--<i class="fa-solid fa-arrow-up text-success"></i>-->
                     
                 </div>
                 <p class="text-center pt-3">maturity score for our production-ready Pre-Sales CRM solution </p>
            </div>
            
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir">
                     <h1 class=" circlepad">5/5 </h1>
                     
                 </div>
                 <p class="text-center pt-3">CSAT rating across all Real Estate implementations</p>
            </div>
        </div>
    </div>
</section>



<section class="py-5 ">
    <style>
    .hidden-content {
    opacity: 0;
    /*transform: scale(0.9);*/
    transition: opacity 0.6s ease-out;
}

.show-content {
    opacity: 1;
    /*transform: scale(1);*/
}

</style>

<script>
    window.addEventListener('scroll', function() {
    var sections = document.querySelectorAll('.hidden-content');
    
    sections.forEach(function(section) {
        var sectionPosition = section.getBoundingClientRect().top;
        var screenPosition = window.innerHeight / 1.2;

        if(sectionPosition < screenPosition) {
            section.classList.add('show-content');
        } 
        else {
            section.classList.remove('show-content');
        }
    });
});

</script>

    <div class="container-fluid py-lg-4 py-5 " style="background-color:#eaf5fe;">
        <div class="row  px-lg-5 justify-content-center">
            <div class="col-lg-8 p-lg-2 px-lg-5 deliv">
                <h1 class="text-center px-5 p-lg-5 hidden-content">Delivering Industry-Specific, Future-Ready <br> Real Estate Solutions</h1>
            </div>
        </div>
    </div>
    <script>
    window.addEventListener('scroll', function() {
    var section = document.querySelector('.hidden-content');
    var sectionPosition = section.getBoundingClientRect().top;
    var screenPosition = window.innerHeight / 1.2;

    if(sectionPosition < screenPosition) {
        section.classList.add('show-content');
    } 
    else {
        section.classList.remove('show-content');
    }
});

</script>
</section>


<style>
    .vh-75{
        height:75vh !important;
    }
    .hover-container .card-img-overlay12{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-43%;
           transition: all 1s ease-in-out;
        }
        .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        .hover-container .transformative_overlay{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-43%;
           transition: all 1s ease-in-out;
        }
        .hover-container:hover .transformative_overlay{
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        
         .hover-container .transformative_overlay1280{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-66%;
           transition: all 1s ease-in-out;
        }
        .hover-container:hover .transformative_overlay1280{
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
     
</style>
<section class=" py-5 d-lg-block d-none sectionscroll" id="sol1">
    <div class="container-sm ">
        <div class="row">
            <div class="col-lg-12 ">
                <h3 class="hidden-content">
                   Transforming today's Real Estate businesses into tomorrow's most trusted developers
                </h3>
                <p class="mt-4 hidden-content">
                We've partnered with some of India's leading Real Estate developers, brokers, and property management companies — from residential and luxury developers to commercial leasing firms and broker networks — to implement cutting-edge Salesforce solutions that have accelerated lead conversions, improved broker productivity, and streamlined the entire post-booking experience.
            </p>
            </div>
            
            <div class="row vh-75 hidden-content">
                <div class="col-lg-6 col-12 pt-3 h-100   position-relative">
                    <div class="hover-container h-100">
                         <img src="assets/images/automobile/blog1.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                
                        <div class="card-img-overlay1 py-4 px-lg-3 position-absolute bottom-0">
                            <h5 class="title mb-2">Revolutionising Field Execution</h5>
                            <p class="card-text ">Automating visit flows, capturing outlet data effortlessly, and providing real-time sales insights—so your teams can focus on closing deals.</p>
                        </div>
                    </div>    
            
                </div>
                <div class="col-lg-6 col-12 h-100 ps-1">
                <div class="row h-100 pt-3">
                    <div class="col-lg-6 col-12 h-50  position-relative pb-3" >
                        <div class="hover-container h-100">
                                <img src="assets/images/automobile/blog2.png" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative1">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">Smarter Decision-Making with AI</h6>
                                <p class="card-text " style="font-size:13px;">Unlock new revenue streams and enhance customer satisfaction with our tailored Salesforce solutions designed specifically for the automotive industry.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pb-3">
                         <div class="hover-container h-100">
                                <img src="assets/images/automobile/blog3.png" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute" id="transformative2">
                                <h6 class="title mb-2" style="fon t-size:1.05rem;">Customisable to your workflow and processes.</h6>
                                <p class="card-text " style="font-size:13px;">Reduce manual tasks and improve efficiency with automated processes that allow your team to focus on what matters most: your customers.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pt-3">
                         <div class="hover-container h-100">
                                <img src="assets/images/automobile/blog4.png" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative3">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">Adaptable to Every FMCG Vertical</h6>
                                <p class="card-text " style="font-size:13px;">Leverage powerful analytics to gain actionable insights into your operations and market trends, enabling informed decision-making and strategic planning.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pt-3">
                         <div class="hover-container h-100">
                                <img src="assets/images/automobile/blog5.png" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative4">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">Reps focus on selling, not remembering.</h6>
                                <p class="card-text " style="font-size:13px;">Experience a cohesive ecosystem with our solutions that seamlessly integrate across all departments, ensuring smooth operations and enhanced collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
          
           
        </div>
    </div>
</section>
<style>
    .increased-height{
        height:1158px;
        overflow:hidden;
        transition: height 1s ease-in;
    }
    .default-height {
        height:1975px;
        transition: height 1s ease-out;
    }
    
</style>
<!--mobile view-->
<section class="d-lg-none pb-5 d-block sectionscroll" id="sol1">
    <div class="container-fluid  px-lg-5 px-3">
        <div class="row ps-lg-4">
            <div class="col-lg-12 ">
                <h3 class="hidden-content">
                Transforming today's Real Estate businesses into tomorrow's most trusted developers
                </h3>
                <p class="mt-4 hidden-content">
                We've partnered with some of India's leading Real Estate developers, brokers, and property management companies — from residential and luxury developers to commercial leasing firms and broker networks — to implement cutting-edge Salesforce solutions that have accelerated lead conversions, improved broker productivity, and streamlined the entire post-booking experience. 
                </p>
            </div>
            <div class="row hidden-content increased-height" id="height_inc&dic">
                <div class="col-12 pt-3 position-relative" id="view_more_id1">
                    <div class="hover-container">
                         <img src="assets/images/automobile/enchancecustomer.png" class="object-fit-cover w-100" alt="Industry Image">
                
                        <div class="card-img-overlay1 py-4 px-lg-5 position-absolute bottom-0">
                            <h5 class="title mb-2">Revolutionising Field Execution</h5>
                            <p class="card-text ">Automating visit flows, capturing outlet data effortlessly, and providing real-time sales insights—so your teams can focus on closing deals</p>
                        </div>
                    </div>    
                    
                </div>
                <div class="col-12 " id="view_more_id2">
                    <div class="  pt-4 pb-1 position-relative">
                        <div class="hover-container">
                                <img src="assets/images/automobile/acceleratedealership.png" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Accelerate Your Dealership’s Growth</h6>
                                <p class="card-text ">Unlock new revenue streams and enhance customer satisfaction with our tailored Salesforce solutions designed specifically for the automotive industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id3">
                    <div class=" pt-4 pb-1 position-relative">
                         <div class="hover-container">
                                <img src="assets/images/automobile/data-driven.png" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Data-Driven Insights for Better Decisions</h6>
                                <p class="card-text ">Leverage powerful analytics to gain actionable insights into your operations and market trends, enabling informed decision-making and strategic planning.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id4">
                     <div class=" pt-4 position-relative" >
                         <div class="hover-container">
                                <img src="assets/images/automobile/streamline.png" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Streamline Operations with Automation</h6>
                                <p class="card-text ">Reduce manual tasks and improve efficiency with automated processes that allow your team to focus on what matters most: your customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id5">
                     <div class="  pt-4 position-relative">
                         <div class="hover-container">
                                <img src="assets/images/automobile/seamless.png" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Seamless Integration for a Unified Experience</h6>
                                <p class="card-text ">Experience a cohesive ecosystem with our solutions that seamlessly integrate across all departments, ensuring smooth operations and enhanced collaboration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-center pt-3 fw-bold">
                    <span onclick="toggleHeight()"   id="toggleButton">View More <i class="fa-solid fa-chevron-down"></i></span>
                </p>
            </div>
        </div>
    </div>
    
    
   <script>
    var div = document.getElementById('height_inc&dic');
    
    // Get the heights of the elements
    var div1 = document.getElementById("view_more_id1").offsetHeight;
    var div2 = document.getElementById("view_more_id2").offsetHeight;
    var div3 = document.getElementById("view_more_id3").offsetHeight;
    var div4 = document.getElementById("view_more_id4").offsetHeight;
    var div5 = document.getElementById("view_more_id5").offsetHeight;
    
    // Calculate the total height without using "!important"
    var total_3 = div1 + div2 + div3 + "px";
    console.log(total_3);
    
    // Apply the calculated height to the div
    document.getElementById('height_inc&dic').style.height = total_3;

    // Function to toggle the height
    function toggleHeight() {
        var button = document.getElementById('toggleButton');
        
        // Toggle between adding/removing the class
        if (div.classList.contains('increased-height')) {
            div.classList.remove('increased-height');
            div.classList.add('default-height');
            
            // Set the expanded height
            document.getElementById('height_inc&dic').style.height = (div1 + div2 + div3 + div4 + div5) + "px";
            button.innerHTML = 'View Less <i class="fa-solid fa-chevron-up"></i>';
        } else {
            div.classList.remove('default-height');
            div.classList.add('increased-height');
            
            // Set the collapsed height
            document.getElementById('height_inc&dic').style.height = (div1 + div2 + div3) + "px";
            button.innerHTML = 'View More <i class="fa-solid fa-chevron-down"></i>';
        }
    }
</script>

</section>
<style>
    @media (max-width:576px){
        .title{
            font-size:18px;
        }
    }
</style>
    <!--<section id="sol2" class="sectionscroll" style="background: #EAF5FE;">-->
    <!--    <div class="container-sm py-5 px-3 " style="background: #EAF5FE;">-->
    <!--        <div class="row px-lg-4">-->
    <!--            <div class="col-lg-12 ">-->
    <!--                <h3 class="mb-5 hidden-content">-->
    <!--                    Segments-->
    <!--                </h3>-->
    <!--            </div>-->
    <!--            <div class="container">-->
    <!--                <div class="row hidden-content">-->
    <!--                <div class="col-lg-3 col-6 px-lg-4 ">-->
    <!--                <div class="bg-light text-center px-lg-5 px-3 py-4" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
    <!--                    <img src="assets/images/automobile/vehicle4.png" class="img-fluid">-->
    <!--                        <h6 class="title "-->
    <!--                        >Passenger<br> Vehicles</h6>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-6 px-lg-4 mt-lg-0">-->
    <!--                <div class="bg-white py-4 px-lg-5 px-3 text-center"-->
    <!--                    style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
    <!--                    <img src="assets/images/automobile/vehicle3.png" class="img-fluid">-->
    <!--                    <h6 class="title ">Commercial<br> Vehicles</h6>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--            <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">-->
    <!--                <div class="bg-white py-4 px-lg-5 px-3 text-center"-->
    <!--                    style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
    <!--                    <img src="assets/images/automobile/vehicle2.png" class="img-fluid">-->
    <!--                    <h6 class="title ">Specialized<br> Vehicles</h6>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">-->
    <!--                <div class="bg-white py-4 px-lg-5 px-3 text-center"-->
    <!--                    style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
    <!--                    <img src="assets/images/automobile/vehicle4.png" class="img-fluid">-->
    <!--                    <h6 class="title">Aftermarket<br> Vehicles</h6>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->


    <style>
                            .imgmove {
    position: relative; 
    background-color:white;
}

.imgmove:hover .img-fluid {
    transform: translateY(100%);
    opacity: 0;
    transition: transform 0.5s ease, opacity 0.5s ease;
    
}
.imgmove:hover{
    background-color: #EAF5FE;
    box-shadow: 0px 20px 50px 0px rgba(2, 131, 182, 0.20) !important;
}
.
.imgmove:hover .title {
    color:#00a1e0 !important;
}
.imgmove:hover .circle-loader{
    border-color:#00a1e0;
}

.imgmove .img-fluid {
    transform: translateY(0);
    opacity: 1;
    transition: transform 0.5s ease, opacity 0.5s ease;
}

.imgmove ul {
    position: absolute;
   top:-39px;
    left: 24px;
    right: 0;
    opacity: 0;
    transform: translateY(0);
    transition: all 0.5s ease;
}

.imgmove:hover ul {

    transform: translateY(100px);
    opacity: 1;
}

@media (max-width:1400px){
    .imgmove ul{
        max-width:162px !important;
        font-size:14px !important;
        white-space:nowrap !important;
    }
}
</style>
    
    <section id="sol2" class="sectionscroll d-lg-block d-none" style="background: #EAF5FE;">
        <div class="container-sm py-5 " style="background: #EAF5FE;">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mb-5 hidden-content">
                       Real Estate Goods Segments
                    </h3>
                </div>
                <div class="container-sm pt-lg-5">
                    <div class="row hidden-content">
                    <div class="col-lg-3 col-6 px-lg-4 ">
                        
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h6 class="title">Residential (Developer)</h6>
                        <ul>
                            <li class="m-0">Apartments & High-Rise </li>
                            <li  class="m-0">Villas & Plotted Developments </li>
                            <li  class="m-0">Affordable Housing </li>
                            <li  class="m-0">Luxury Residential </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/building.png" class="img-fluid" style="width:100px;">
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">
                    
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h6 class="title">Commercial (Developer)</h6>
                            <ul>
                            <li class="m-0">Office Spaces </li>
                            <li class="m-0">Retail & Mall Management </li>
                            <li class="m-0">Mixed-Use Developments </li>
                            <li class="m-0">Co-Working Spaces </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/investment.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end ">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-lg-0">
                    <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h6 class="title ">Real Estate Brokers</h6>
                            <ul>
                            <li class="m-0">Channel Partner Networks </li>
                            <li class="m-0">Property Brokers </li>
                            <li class="m-0">Franchise Broker Networks </li>
                            <li class="m-0">NRI & Overseas Sales </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/real-estate-agency.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>

                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">
                    
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h5 class="title ">Property Management</h5>
                        <ul>
                            <li class="m-0">Rental Management </li>
                            <li class="m-0">Commercial Leasing </li>
                            <li class="m-0">Facilities Management </li>
                            <li class="m-0">Real Estate IT Services </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/property.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                
                </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="sol2" class="sectionscroll d-lg-none d-none" style="background: #EAF5FE;">
        <div class="container-sm py-5 " style="background: #EAF5FE;">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mb-5 hidden-content">
                       Retail & Consumer Goods Segments
                    </h3>
                </div>
                <div class="container-sm pt-lg-5">
                    <div class="row hidden-content">
<!--                    <div id="vehicleSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">-->
<!--  <div class="carousel-inner">-->
<!--    <div class="carousel-item active">-->
<!--      <div class="col-lg-12 px-lg-4">-->
<!--        <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
<!--          <h4 class="title">Passenger</h4>-->
<!--          <ul>-->
<!--            <li class="m-0">Cars</li>-->
<!--            <li class="m-0">Bikes</li>-->
<!--            <li class="m-0">EV's</li>-->
<!--            <li class="m-0">Other</li>-->
<!--          </ul>-->
<!--          <div class="row pt-5">-->
<!--            <div class="col-lg-8 col-md-8 col-6 px-lg-0">-->
<!--              <img src="assets/images/automobile/vehicle4.png" class="img-fluid" style="width:100px;">-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">-->
<!--              <div class="circle-loader mt-4"></div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    
<!--    <div class="carousel-item">-->
<!--      <div class="col-lg-12 px-lg-4">-->
<!--        <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
<!--          <h4 class="title">Commercial</h4>-->
<!--          <ul>-->
<!--            <li class="m-0">Light Commercial Vehicles</li>-->
<!--            <li class="m-0">Medium Duty Trucks</li>-->
<!--            <li class="m-0">Heavy Duty Trucks</li>-->
<!--            <li class="m-0">Buses</li>-->
<!--            <li class="m-0">Vans</li>-->
<!--          </ul>-->
<!--          <div class="row pt-5">-->
<!--            <div class="col-lg-8 col-md-8 col-6 px-lg-0">-->
<!--              <img src="assets/images/automobile/vehicle3.png" class="img-fluid" style="width:100px;">-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">-->
<!--              <div class="circle-loader mt-4"></div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

<!--    <div class="carousel-item">-->
<!--      <div class="col-lg-12 px-lg-4">-->
<!--        <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
<!--          <h4 class="title">Specialized</h4>-->
<!--          <ul>-->
<!--            <li class="m-0">Ev's</li>-->
<!--            <li class="m-0">Emergency Vehicles</li>-->
<!--            <li class="m-0">Construction Vehicles</li>-->
<!--            <li class="m-0">Agricultural Vehicles</li>-->
<!--            <li class="m-0">Military Vehicles</li>-->
<!--          </ul>-->
<!--          <div class="row pt-5">-->
<!--            <div class="col-lg-8 col-md-8 col-6 px-lg-0">-->
<!--              <img src="assets/images/automobile/vehicle2.png" class="img-fluid" style="width:100px;">-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">-->
<!--              <div class="circle-loader mt-4"></div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

<!--    <div class="carousel-item">-->
<!--      <div class="col-lg-12 px-lg-4">-->
<!--        <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">-->
<!--          <h4 class="title">Aftermarket</h4>-->
<!--          <ul>-->
<!--            <li class="m-0">Second Hand Vehicle</li>-->
<!--            <li class="m-0">Classic/Vintage</li>-->
<!--            <li class="m-0">Modified/Custom</li>-->
<!--          </ul>-->
<!--          <div class="row pt-5">-->
<!--            <div class="col-lg-8 col-md-8 col-6 px-lg-0">-->
<!--              <img src="assets/images/automobile/vehicle4.png" class="img-fluid" style="width:100px;">-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">-->
<!--              <div class="circle-loader mt-4"></div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->

<!--  <button class="carousel-control-prev" type="button" data-bs-target="#vehicleSlider" data-bs-slide="prev">-->
<!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--    <span class="visually-hidden">Previous</span>-->
<!--  </button>-->
<!--  <button class="carousel-control-next" type="button" data-bs-target="#vehicleSlider" data-bs-slide="next">-->
<!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--    <span class="visually-hidden">Next</span>-->
<!--  </button>-->
<!--</div>-->

                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-lg-none d-block py-5" style="background: #EAF5FE;">
      <style>
        /* slider_mobile Container */
        .slider_mobile-container {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .slider_mobile-header {
            margin-bottom: 20px;
            position: relative;
        }

        .slider_mobile-header h2 {
           
            color: #d81f26;
        }

        .slider_mobile-header p {
            height: 200px;
            
            line-height: 1.6;
            overflow: hidden;
        }

        .slider_mobile-content {
            display: flex;
            transition: transform 0.6s ease-in-out;
        }

        .slide_mobile {
            min-width: 100%;
            box-sizing: border-box;
            padding: 20px;
        }

        
        .image-box img {
            width: 100%;
            max-width: 500px;
            border-radius: 8px;
            transition: transform 0.5s ease-in-out;
        }

        /* Image zoom on hover */
        .image-box img:hover {
            transform: scale(1.05);
        }

        .content-slide {
            opacity: 0;
            display: none;
            transition: opacity 0.6s ease-in-out;
        }

        .content-slide.active {
            opacity: 1;
            display: block;
        }

        /* Fade-in and out effect for content */
        .fade-in {
            animation: fadeIn 0.6s ease forwards;
        }

        .fade-out {
            animation: fadeOut 0.6s ease forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
            }

            to {
                opacity: 0;
            }
        }

        /* Responsive Styling */
        @media (max-width: 768px) {
           
         

            .image-box img {
                max-width: 100%;
            }
            .imgmove:hover{
                box-shadow: 0px 0px 20px 10px rgba(2, 131, 182, 0.10) !important;
            }
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                    <h3 class="mb-5 hidden-content ps-3">
                        Real Estate Goods Segments
                    </h3>
                </div>
            <div class="slider_mobile-container col-9">
                <div class="slider_mobile-content mob_slide">
                    <!-- Slide 1 -->
                    <div class="slide_mobile mob_slide1">
                        <div class="image-box">
                           <div class=" imgmove px-lg-4 px-3 py-4 btnrad" >
                       <h4 class="title "
                            >Residential (Developer)</h4>
                        <ul>
                            <li class="m-0">Apartments & High-Rise </li>
                            <li  class="m-0">Villas & Plotted Developments </li>
                            <li  class="m-0">Affordable Housing </li>
                            <li  class="m-0">Luxury Residential </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/building.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="slide_mobile mob_slide1">
                        <div class="image-box">
                           <div class=" imgmove px-lg-4 px-3 py-4 btnrad">
                        <h4 class="title "
                            >Commercial (Developer)</h4>
                            <ul>
                            <li class="m-0">Office Spaces </li>
                            <li class="m-0">Retail & Mall Management </li>
                            <li class="m-0">Mixed-Use Developments </li>
                            <li class="m-0">Co-Working Spaces </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/investment.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                    </div>
                    </div>
                    
                    <!-- Slide 3 -->
                    <div class="slide_mobile mob_slide1">
                        <div class="image-box">
                           <div class=" imgmove px-lg-4 px-3 py-4 btnrad" >
                       <h4 class="title "
                            >Real Estate Brokers</h4>
                            <ul>
                            <li class="m-0">Channel Partner Networks </li>
                            <li class="m-0">Property Brokers </li>
                            <li class="m-0">Franchise Broker Networks </li>
                            <li class="m-0">NRI & Overseas Sales </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/real-estate-agency.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                        </div>
                    </div>
                    <!--slider 4-->
                     <div class="slide_mobile mob_slide1">
                        <div class="image-box">
                           <div class=" imgmove px-lg-4 px-3 py-4 btnrad" >
                        <h5 class="title ">Property Management</h5>
                        <ul>
                            <li class="m-0">Rental Management </li>
                            <li class="m-0">Commercial Leasing </li>
                            <li class="m-0">Facilities Management </li>
                            <li class="m-0">Real Estate IT Services </li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/new-pages/real-Estate/property.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end ">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                        </div>
                    </div>
                    <!--<div class="slide_mobile mob_slide1">-->
                    <!--    <div class="image-box">-->
                    <!--       <div class=" imgmove px-lg-4 px-3 py-4 btnrad" >-->
                    <!--    <h4 class="title "-->
                    <!--        >Consumer Durables</h4>-->
                    <!--        <ul>-->
                    <!--        <li class="m-0">Second Hand Vehicle</li>-->
                    <!--        <li class="m-0">Classic/Vintage</li>-->
                    <!--        <li class="m-0">Modified/Custom</li>-->
                            
                    <!--    </ul>-->
                    <!--    <div class="row pt-5">-->
                    <!--        <div class="col-lg-8 col-md-8 col-6 px-lg-0">-->
                    <!--            <img src="assets/images/automobile/vehicle4.png" class="img-fluid" style="width:100px;">-->
                                
                    <!--        </div>-->
                    <!--        <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end ">-->
                    <!--            <div class="circle-loader mt-4"></div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                            
                    <!--</div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
<script>
let currentSlide1_mobile = 0;
const slidesContainer_mobile = document.querySelector('.mob_slide');
const slides1_mobile = document.querySelectorAll('.mob_slide1');
const indicators_mobile = document.querySelectorAll('.indicator'); // Update this line if you have indicators for the slider
const totalSlides1_mobile = slides1_mobile.length;
let autoSlideTimeout_mobile;
let isTouching_mobile = false;
let startX_mobile = 0;
let moveDistance_mobile = 0;

const firstSlideClone_mobile = slides1_mobile[0].cloneNode(true);
slidesContainer_mobile.appendChild(firstSlideClone_mobile);

const totalSlidesWithClone_mobile = totalSlides1_mobile + 1;

function changeSlide1_mobile(direction) {
    stopAutoSlide_mobile();

    if (currentSlide1_mobile === totalSlides1_mobile - 1 && direction === 1) {
        slidesContainer_mobile.style.transition = 'transform 0.3s ease-in-out';
        currentSlide1_mobile = totalSlides1_mobile;
        moveSlides_mobile();

        setTimeout(() => {
            slidesContainer_mobile.style.transition = 'none';
            currentSlide1_mobile = 0; 
            moveSlides_mobile();
        }, 500);
    } else {
        currentSlide1_mobile = (currentSlide1_mobile + direction + totalSlides1_mobile) % totalSlides1_mobile;
        slidesContainer_mobile.style.transition = 'transform 0.3s ease-in-out';
        moveSlides_mobile();
    }

    resetAutoSlide_mobile();
}

function moveSlides_mobile() {
    const offset1_mobile = currentSlide1_mobile * 100;
    slidesContainer_mobile.style.transform = `translateX(-${offset1_mobile}%)`;
    indicators_mobile.forEach((indicator_mobile, index) => {
        indicator_mobile.classList.toggle('active', index === currentSlide1_mobile);
    });
}

function startAutoSlide_mobile() {
    autoSlideTimeout_mobile = setTimeout(function() {
        changeSlide1_mobile(1);
    }, 3000);
}

function stopAutoSlide_mobile() {
    clearTimeout(autoSlideTimeout_mobile);
}

function resetAutoSlide_mobile() {
    stopAutoSlide_mobile();
    startAutoSlide_mobile();
}

const sliderElement_mobile = document.querySelector('.mob_slide');

sliderElement_mobile.addEventListener('touchstart', function(e) {
    stopAutoSlide_mobile(); 
    isTouching_mobile = true;
    startX_mobile = e.touches[0].clientX;
});

sliderElement_mobile.addEventListener('touchmove', function(e) {
    if (isTouching_mobile) {
        const currentX_mobile = e.touches[0].clientX;
        moveDistance_mobile = currentX_mobile - startX_mobile;
    }
});

sliderElement_mobile.addEventListener('touchend', function() {
    isTouching_mobile = false;
    if (moveDistance_mobile > 50) {
        changeSlide1_mobile(-1);
    } else if (moveDistance_mobile < -50) {
        changeSlide1_mobile(1);
    }

    resetAutoSlide_mobile();
});

startAutoSlide_mobile();
</script>
  </section>
    <!--slider-->
 <style>
		.slider {
			position: relative;
			top:48px;
			width: 100%;
			margin: auto;
			overflow: hidden;
			left:8px;
		}
        .ff{
            right:98% !important;
        }
		.slides {
			display: flex;
			transition: transform 0.5s ease-in-out;
			height: 75vh;
		}
		.slides1 {
			display: flex;
			transition: transform 0.5s ease-in-out;
			height: 50vh;
		}

		.slide.swiper-slide{
			width: 25% !important;
			height: 70%;
			background-size: cover;
			background-position: center;
			transition: all 0.5s ease;
			align-self: end;
		}
			.slide1 {
			min-width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			transition: all 0.5s ease;
			align-self: end;
		}

		.slider .content,.slider1 .content {
			
			height: 100%;
			padding: 0 15px;
			overflow:hidden;
		}
		.content img{
		    width:100%;
			transition: all 0.5s ease;
			object-fit:cover;
		}
		.successslide .swiper-slide{
		    opacity:0;
		    transition:opacity 1s 0.3s ease;
		}
       .successslidebutton.swiper-slide{
            display:none;
            opacity:0;
            
        }
		.slide.swiper-slide-active{
			height: 100% !important;
		
			overflow:hidden;
			min-width:50%;
			padding-right:30px;
		}
		.card-img-overlay2{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-34%;
            transition: all 1s ease-in-out;
        }
        .slide.swiper-slide-active .hover-container .card-img-overlay2{
            bottom:0;
        }
        .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        .hover-container:hover .card-img-overlay2 .successslide{
            transition:opacity 1s 0.3s ease;
            opacity:1;
            
        }
        .card-img-overlay3{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-58%;
           transition: all 1s ease-in-out;
        }
        .hover-container:hover .card-img-overlay3 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        .slide.swiper-slide-active .content .overlay-important{
            bottom:0;
        }
        .overlay-important{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-55%;
            transition: all 1s ease-in-out;
        }
        .hover-container:hover .overlay-important {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        .slide.swiper-slide-active .content .overlay-important{
            bottom:0;
        }
        .hover-container:hover .overlay-important .successslide{
            transition:opacity 1s 0.3s ease;
            opacity:1;
            
        }
        .slide.swiper-slide-active .content .overlay-important1536_791{
            bottom:0;
        }
        .overlay-important1536_791{
            background-color: rgba(255, 255, 255, 0.9);
            bottom:-46%;
            transition: all 1s ease-in-out;
        }
        .hover-container:hover .overlay-important1536_791 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
        .slide.swiper-slide-active .content .overlay-important1536_791{
            bottom:0;
        }
        .hover-container:hover .overlay-important .successslide{
            transition:opacity 1s 0.3s ease;
            opacity:1;
            
        }
        .hover-container:hover .card-img-overlay2 .successslide{
            transition:opacity 1s 0.3s ease;
            opacity:1;
            
        }
		.slide1.active{
		    	height: 100% !important;
			/*transform: scale(1.1);*/
			overflow:hidden;
			min-width:100%;
			/*padding-right:20px;*/
		}
		.slide1 .successslide, .slide1.active .successslidebutton{
		    display:block;
		}
		.slide.swiper-slide-active .successslide, .slide .swiper-slide-active .successslidebutton{
		    display:block;
		    opacity:1;
		}

        .successslidebutton{
            /*margin-bottom:20px;*/
        }
        .swiper-button-prev::before,.swiper-button-next::before{
            content="\f060";
            display:none !important;
        }
		.buttonslider.swiper-button-prev,.buttonslider.swiper-button-next {
			position: absolute;
			box-shadow:0px 0px 40px 0px rgba(0, 0, 0, .09);
		    background:white;
			border: none;
		    width:50px;
		    height:50px;
			cursor: pointer;
		}
		.card-img-overlay2{
		    width:100%;
		    bottom:-44%;
		}
        .successGautam
            {
                font-size:14px !important;
                 /*margin-top:20px !important;*/
            }
        
		.prev.swiper-button-prev{
			/*right: 75px;*/
			left:89% !important;
			top:80px;
			font-size:25px;
		
			border-radius:50%;
			transition:0.3s ease;
		}
           
		.next.swiper-button-next{
		    top:80px;
			right: 40px;
			font-size:25px;
			z-index:11;
			border-radius:50%;
			transition:0.3s ease;
		}
		
		@media (max-width:576px){
		    .slide{
		        min-width: 100%;
		    }
		}
		
		@media (min-width:992px) and (max-width:1300px){
		    .prev.swiper-button-prev{
			/*right: 75px;*/
			left:87% !important;
			top:40px !important;
		}
           
		.next.swiper-button-next{
		    top:40px !important;
		}
        .slide .card-img-overlay2{
            bottom:-48% !important;
        }
        .slide .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
        }
        .slide.swiper-slide-active .card-img-overlay2{
            bottom:0 !important;
        } 
        
        
        
      .hover-container .card-img-overlay12{
            background-color: rgba(255, 255, 255, 0.9); 
            bottom:-48%;
           transition: all 1s ease-in-out;
        }
        .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0;
             
        }
            .hover-container .card-img-overlay12 p{
                line-height: 18px !important;
            }
       
        
            .slide.swiper-slide{
                height:80%;
            }
            .slide.swiper-slide-active .headGautam
            {
                font-size:1.3rem !important;
                line-height:25px !important;
            }
            .slide .headGautam
            {
                font-size:1rem !important;
                line-height:20px !important;
            }
            .pGautam
            {
                font-size:16px !important;
                 line-height:20px !important;
                 margin-top:20px !important;
            }
            .ff{
                right:97% !important;
            }
           
    }
    	@media (min-width:1301px) and (max-width:1400px){
    	     .slide .card-img-overlay2{
            bottom:-62% !important;
        }
            .hover-container .card-img-overlay12{
            bottom:-62% !important;
        }
         .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
             
        }
        .slide .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
        }
        .slide.swiper-slide-active .card-img-overlay2{
            bottom:0 !important;
        } 
         .slide.swiper-slide-active .headGautam
            {
                font-size:1.3rem !important;
                line-height:25px !important;
            }
            .slide .headGautam
            {
                font-size:1rem !important;
                line-height:20px !important;
            }
            	    .prev.swiper-button-prev{
			/*right: 75px;*/
			left:86% !important;
			top:40px !important;
		}
           
		.next.swiper-button-next{
		    top:40px !important;
		}
		.ff{
            right:101% !important;
        }
    	}
    	@media(min-width:1500px) and (max-width:1520px){
    	      .slide .card-img-overlay2{
            bottom:-46% !important;
        }
         .slide .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
        }
        .slide.swiper-slide-active .card-img-overlay2{
            bottom:0 !important;
        } 
             .hover-container .card-img-overlay12{
            bottom:-42% !important;
        }
         .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
             
        }
        .ff{
            right:100% !important;
        }
    	}
    	@media(min-width:1530px) and (max-width:1540px){
    	       .slide .card-img-overlay2{
            /*bottom:-53% !important;*/
        }
         .slide .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
        }
        .slide.swiper-slide-active .card-img-overlay2{
            bottom:0 !important;
        } 
             .hover-container .card-img-overlay12{
            bottom:-48% !important;
        }
         .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
             
        }
        .ff{
            right:100% !important;
        }
    	}
    	@media(min-width:1600px){
    	    .slide .card-img-overlay2{
            bottom:-40% !important;
        }
        .slide .hover-container:hover .card-img-overlay2 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
        }
        .slide.swiper-slide-active .card-img-overlay2{
            bottom:0 !important;
        }
         .card-img-overlay12{
                bottom:-55% !important;
                
            }
            .card-img-overlay12 p{
                line-height: 18px !important;
            }
            .hover-container:hover .card-img-overlay12 {
            background-color: rgba(118, 216, 203, 1);
            bottom:0 !important;
             
        }
    	}
    /*@media (min-width:1401px) and (max-width:1450px){*/
        
    /*    .slide .card-img-overlay2{*/
    /*        bottom:-52% !;*/
    /*    }*/
    /*    .slide.active .card-img-overlay2{*/
    /*        bottom:0;*/
    /*    } */
    /*    .card-img-overlay12{*/
    /*            bottom:-40% !important;*/
    /*        }*/
    /*        .hover-container:hover .card-img-overlay12 {*/
    /*        background-color: rgba(118, 216, 203, 1);*/
    /*        bottom:0;*/
             
    /*    }*/
    /*}*/
    .card-text{
        font-weight:normal;
    }
	
    </style>
   <section class="py-5 d-lg-block d-none sectionscroll" id="sol3">
		<div class="container-sm">

			<div class="row">
				<div class="col-lg-12 ">
					<h3 class="hidden-content">
						Success Stories
					</h3>
				</div>
				<div class="slider swiper col-lg-12 px-0 hidden-content ">
					<div class="slides swiper-wrapper">
						<div class="slide  swiper-slide " style="background-image: url('image1.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/real-Estate/story1.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute" style="padding-block:20px" id="overlay1">
									
										<h5 class="title mb-2 headGautam">Shubhashish Homes: Automating the Full Buyer Journey </h5>
										<p class="card-text successslide pGautam">Shubhashish Homes, a leading residential Real Estate developer, deployed our Salesforce Sales Cloud and Marketing Cloud solution to manage their complete lead-to-order lifecycle — including intelligent lead routing, site visit scheduling, broker management, and after-sales communication. The implementation enabled their team to respond faster to buyer enquiries, track every touchpoint in the customer journey, and deliver a more personalised buying experience. </p>
										<!--<button style="padding:10px 30px;background-color:#00A1E0;" class="rounded-pill border-0 text-white successslidebutton ">Coming Soon</button>-->
									</div>

								</div>
							</div>
						</div>
						<div class="slide swiper-slide" style="background-image: url('image2.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/real-Estate/story2.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute" style="padding-block:20px" id="overlay2">
									
										<h5 class="title mb-2 headGautam">Somani Realtors: Streamlining Broker-Led Sales & After-Sales </h5>
										<p class="card-text successslide pGautam">Somani Realtors, an established Real Estate brokerage, leveraged our Salesforce Sales Cloud and Service Cloud implementation to manage lead flow from channel partners, track opportunity stages, and automate after-sales follow-ups — enabling their team to handle a higher volume of transactions with the same team size and improved customer satisfaction scores. </p>
										<!--<button style="padding:10px 30px;background-color:#00A1E0;" class="rounded-pill border-0 text-white successslidebutton">Coming Soon</button>-->
									</div>

								</div>
							</div>
						</div>
						<div class="slide swiper-slide" style="background-image: url('image3.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/real-Estate/story3.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute"  style="padding-block:20px" id="overlay3">
										
										<h5 class="title mb-2 headGautam">Rethink: Managing Property Leasing & Rental Portfolios </h5>
										<p class="card-text successslide pGautam">Rethink deployed our Salesforce Sales Cloud solution to manage their property leasing business — tracking rental agreements, monitoring lease renewals, managing tenant relationships, and maintaining full visibility across their residential and commercial property portfolio, significantly improving operational efficiency and tenant retention. </p>
										<!--<button style="padding:10px 30px;background-color:#00A1E0;"	class="rounded-pill border-0 text-white successslidebutton">Coming Soon</button>-->
									</div>

								</div>
							</div>
						</div>
                        <div class="slide swiper-slide" style="background-image: url('image3.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/real-Estate/story3.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute"  style="padding-block:20px" id="overlay3">
										
										<h5 class="title mb-2 headGautam">A Leading Commercial Property Developer: Driving Faster Tenant Onboarding </h5>
										<p class="card-text successslide pGautam">A prominent commercial Real Estate developer adopted our Salesforce Sales Cloud and Experience Cloud implementation to manage their leasing pipeline — enabling their team to track tenant enquiries, automate lease renewal workflows, generate digital agreements, and offer a self-service tenant portal, resulting in faster onboarding cycles and higher renewal rates. </p>
										<!--<button style="padding:10px 30px;background-color:#00A1E0;"	class="rounded-pill border-0 text-white successslidebutton">Coming Soon</button>-->
									</div>

								</div>
							</div>
						</div>
						
					</div>
					<button class="buttonslider swiper-button-prev prev"><i class="fa-solid fa-arrow-left"></i>
					</button>
					<button class="buttonslider swiper-button-next next" ><i class="fa-solid fa-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
		<script>
		const swiper = new Swiper('.swiper', {
            loop: true, // Enable infinite loop mode
            slidesPerView: 4, // Show 3 cards at a time
            slidesPerGroup: 1, // Slide one card at a time
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 30000000, // Time between slides
                disableOnInteraction: false,
            },
            on: {
                init: function () {
                    // Set the first slide as active
                    this.slides[0].classList.add('swiper-slide-active');
                },
            },
        });
// 			let currentSlide = 0;
// 			const slides = document.querySelectorAll('.slide');
// 			const totalSlides = slides.length;
// 			const visibleSlides = 4; 
//             const prevButton = document.getElementById('prevButton');
//             const nextButton = document.getElementById('nextButton');
           
// 			function changeSlide(direction) {
				
// 				slides[currentSlide].classList.remove('active');

				
// 				currentSlide = (currentSlide + direction + totalSlides) % totalSlides;

				
// 				slides[currentSlide].classList.add('active');

				
// 				const offset = currentSlide * (100 / visibleSlides); 
// 				document.querySelector('.slides').style.transform = `translateX(-${offset}%)`;
// 				    updateButtons();
//         		    nextButtons();
//                 }
        
//                 function updateButtons() {
//                         // Enable or disable the previous button based on current slide index
//                         if (currentSlide >= 1) {
//                             prevButton.setAttribute('onclick', 'changeSlide(-1)');
//                             prevButton.style.color="black";
//                         } else {
//                             prevButton.removeAttribute('onclick');
//                             prevButton.style.color="gray";
//                         }
//                     }
//                      function nextButtons() {
//                         // Enable or disable the previous button based on current slide index
//                         if (currentSlide == totalSlides-3) {
//                             nextButton.removeAttribute('onclick');
//                              nextButton.style.color="gray";
//                         } else {
//                             nextButton.setAttribute('onclick', 'changeSlide(1)');
//                             nextButton.style.color="black";
//                         }
//                     }
                    
//                 document.addEventListener('DOMContentLoaded', () => {
                   
//                 const sections = document.querySelectorAll('.sectionscroll');
//                 const navLinks = document.querySelectorAll('.nav-linktab');
             
//                 const observerOptions = {
//                     root: null, // relative to the viewport
//                     rootMargin: '0px',
//                     threshold: 0.7 // Trigger when 50% of the section is visible
//                 };
           
//                 const observer = new IntersectionObserver((entries) => {
//                     entries.forEach(entry => {
                       
//                         if (entry.isIntersecting) {
                            
//                             // Remove active class from all links
//                             navLinks.forEach(link => link.classList.remove('active'));
                             
            
//                             // Add active class to the link that matches the intersecting section
//                             const activeLink = document.querySelector(`a[href="#${entry.target.id}"]`);
                            
//                             activeLink.classList.add('active');
//                             //alert("yes");
//                         }
//                     });
//                 }, observerOptions);
                 
//                 // Observe each section
//                 sections.forEach(section => observer.observe(section));
//             });
		</script>
	</section>
 
<!--mobile slider-->
       <section class="py-5 d-lg-none d-block" id="sol3">
<div class="container-fluid px-lg-5">
 
			<div class="row px-lg-4">
<div class="col-lg-12 px-4">
<h3 class="hidden-content">
						Success Stories
</h3>
</div>
<div class="slider col-lg-12 hidden-content ps-0">
<div class="slides1">
<div class="slide1 active" style="background-image: url('image1.jpg');">
<div class="content">
<div class="position-relative hover-container h-100">
<img src="assets/new-pages/real-Estate/mobilestory1.jpg"
										class="object-fit-cover rounded-0 h-100" alt="Industry Image">
<div class="card-img-overlay2  px-3 position-absolute bottom-0"
										style="padding-block:27px">

<h5 class="title mb-2">Shubhashish Homes: Automating the Full Buyer Journey .</h5>
<p class="card-text success slide">Shubhashish Homes, a leading residential Real Estate developer, deployed our Salesforce Sales Cloud and Marketing Cloud solution to manage their complete lead-to-order lifecycle — including intelligent lead routing, site visit scheduling, broker management, and after-sales communication. The implementation enabled their team to respond faster to buyer enquiries, track every touchpoint in the customer journey, and deliver a more personalised buying experience. </p>
<!--<button style="padding:10px 30px;background-color:#00A1E0;"-->
<!--	class="rounded-pill border-0 text-white successslidebutton ">learn-->
<!--	more</button>-->
</div>
 
								</div>
</div>
</div>
<div class="slide1" style="background-image: url('image2.jpg');">
<div class="content">
<div class="position-relative hover-container h-100">
<img src="assets/new-pages/real-Estate/mobilestory2.jpg"
										class="object-fit-cover rounded-0 h-100" alt="Industry Image">
<div class="card-img-overlay2  px-3 position-absolute bottom-0"
										style="padding-block:27px">

<h5 class="title mb-2">Somani Realtors: Streamlining Broker-Led Sales & After-Sales </h5>
<p class="card-text succes sslide">Somani Realtors, an established Real Estate brokerage, leveraged our Salesforce Sales Cloud and Service Cloud implementation to manage lead flow from channel partners, track opportunity stages, and automate after-sales follow-ups — enabling their team to handle a higher volume of transactions with the same team size and improved customer satisfaction scores. </p>
<!--<button style="padding:10px 30px;background-color:#00A1E0;"-->
<!--	class="rounded-pill border-0 text-white successslidebutton">learn-->
<!--	more</button>-->
</div>
 
								</div>
</div>
</div>
<div class="slide1" style="background-image: url('image3.jpg');">
<div class="content">
<div class="position-relative hover-container h-100">
<img src="assets/new-pages/real-Estate/mobilestory3.jpg"
										class="object-fit-cover rounded-0 h-100" alt="Industry Image">
<div class="card-img-overlay2  px-3 position-absolute bottom-0"
										style="padding-block:27px">
<!--<h6 style="font-size:16px" class="pb-3">-->
<!--											SUCCESS STORY-->
<!--</h6>-->
<h5 class="title mb-2">Rethink: Managing Property Leasing & Rental Portfolios </h5>
<p class="card-text succ essslide">Rethink deployed our Salesforce Sales Cloud solution to manage their property leasing business — tracking rental agreements, monitoring lease renewals, managing tenant relationships, and maintaining full visibility across their residential and commercial property portfolio, significantly improving operational efficiency and tenant retention. </p>
<!--<button style="padding:10px 30px;background-color:#00A1E0;"-->
<!--	class="rounded-pill border-0 text-white successslidebutton">learn-->
<!--	more</button>-->
</div>

 
								</div>
</div>
</div>
 
					</div>
<button class="buttonslider prev d-none" onclick="changeSlide1(-1)"><i class="fa-solid fa-arrow-left"></i>
</button>
<button class="buttonslider next d-none" onclick="changeSlide1(1)"><i class="fa-solid fa-arrow-right"></i>
</button>
<style>
                        .slider-indicators {
                            text-align: center;
                            margin-top: 40px;
                        }
 
                        .indicator {
                            display: inline-block;
                            width: 10px;
                            height: 10px;
                            margin: 0 5px;
                            background-color: #ccc;
                            border-radius: 50%;
                            cursor: pointer;
                            transition: background-color 0.3s ease;
                        }
 
                        .indicator.active {
                            background-color: #00A1E0; /* Active indicator color */
                        }
</style>
<div class="slider-indicators">
<span class="indicator active" onclick="goToSlide(0)"></span>
<span class="indicator" onclick="goToSlide(1)"></span>
<span class="indicator" onclick="goToSlide(2)"></span>
</div>
 
				</div>
</div>
</div>
<script>
let currentSlide1 = 0;
const slidesContainer = document.querySelector('.slides1');
const slides1 = document.querySelectorAll('.slide1');
const indicators = document.querySelectorAll('.indicator');
const totalSlides1 = slides1.length;
let autoSlideTimeout;
let isTouching = false;
let startX = 0;
let moveDistance = 0;
 
const firstSlideClone = slides1[0].cloneNode(true);
slidesContainer.appendChild(firstSlideClone);
 
const totalSlidesWithClone = totalSlides1 + 1;
 
function changeSlide1(direction) {
    stopAutoSlide();
 
    if (currentSlide1 === totalSlides1 - 1 && direction === 1) {
        slidesContainer.style.transition = 'transform 0.5s ease-in-out';
        currentSlide1 = totalSlides1;
        moveSlides();
 
        setTimeout(() => {
            slidesContainer.style.transition = 'none';
            currentSlide1 = 0; 
            moveSlides();
        }, 500);
    } else {
        currentSlide1 = (currentSlide1 + direction + totalSlides1) % totalSlides1;
        slidesContainer.style.transition = 'transform 0.3s ease-in-out';
        moveSlides();
    }
 
    resetAutoSlide();
}
 
function moveSlides() {
    const offset1 = currentSlide1 * 100;
    slidesContainer.style.transform = `translateX(-${offset1}%)`;
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle('active', index === currentSlide1);
    });
}
 
 
function startAutoSlide() {
    autoSlideTimeout = setTimeout(function() {
        changeSlide1(1);
    }, 3000);
}
 
function stopAutoSlide() {
    clearTimeout(autoSlideTimeout);
}
 
function resetAutoSlide() {
    stopAutoSlide();
    startAutoSlide();
}
 
const sliderElement = document.querySelector('.slides1');
 
sliderElement.addEventListener('touchstart', function(e) {
    stopAutoSlide(); 
    isTouching = true;
    startX = e.touches[0].clientX;
});
 
sliderElement.addEventListener('touchmove', function(e) {
    if (isTouching) {
        const currentX = e.touches[0].clientX;
        moveDistance = currentX - startX;
    }
});
 
sliderElement.addEventListener('touchend', function() {
    isTouching = false;
    if (moveDistance > 50) {
        changeSlide1(-1);
    } else if (moveDistance < -50) {
        changeSlide1(1);
    }
 
    
    resetAutoSlide();
});
 
startAutoSlide();
 
 
		</script>
</section>

<section class="py-5 mt-5" style="background-color:#eaf5fe;">
    <div class="container-sm px-3" style="background-color:#eaf5fe;">
        <div class="row row flex-column-reverse flex-lg-row">
            <div class="col-lg-7 pt-lg-0 pe-3">
                  <h1 class="pt-lg-5 col-lg-9 p-0 Unlocking hidden-content">Unlocking Value in Real Estate with Connected Data & AI </h1>
                  <p class="fw-normal mt-2 text-justif col-lg-10 p-0 p-lg-4 ps-lg-0 hidden-content" style="font-size:16px;">Discover how real estate businesses can optimise lead conversions, improve broker network performance, and streamline collections using AI-powered Salesforce solutions. 

Our experts share insights on improving real estate operations, optimising channel partner networks, and leveraging technology to drive faster bookings and collections. .</p>
                  
                  <div class="pt-3">
                      <a href="products?nm=Sales+Force+Automation+[SFA]" class="cta-btn">Read Case Study</a>
                  </div>
            </div>
            
            <div class="col-lg-5 py-3 text-end d-lg-block d-none hidden-content">
                <img src="assets/new-pages/real-Estate/unlock.jpg" class="" alt="Industry Image" style="border-radius:15px; height: 400px;">
            </div>
            <div class="col-lg-5 py-3 text-end hidden-content d-lg-none d-block">
                <img src="assets/new-pages/real-Estate/unlock.jpg" class="" alt="Industry Image" style="border-radius:15px;">
            </div>
        </div>
    </div>
</section>

    <section class="py-5 py-lg-5 sectionscroll" id="sol4">
            <div class="container-sm  px-3">
                <div class="row">
                <div class="col-lg-12 mb-4">
                    <h3 class="hidden-content">
                        Our Insights
                    </h3>
                </div>

                <div class="row hidden-content">
                    <div class="col-lg-4  d-lg-block d-none">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/real-Estate/insite1.jpg" class="btnrad object-fit-cover rounded-0 h-100"
                            alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Automating Lead-to-Booking Conversions with Salesforce </h4>
                            <a class="learn-more" href="products.php?nm=DMS+for+Primary+Sales">
                                
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-3">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/real-Estate/insite2.jpg" class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">How Broker Portals Drive Channel Partner Performance</h4>
                            <a class="learn-more" href="products.php?nm=Sales+Force+Automation+[SFA]">
                                
                             
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-3 ">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/real-Estate/insite3.jpg" class="btnrad object-fit-cover rounded-0 h-100"
                            alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Eliminating Manual Collections: Real Estate Post-Sales on Salesforce </h4>
                            <a class="learn-more" href="products.php?nm=WhatsApp+Integrator">
                                
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
<style>
    .learn-more-anime .learn-more {
        position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        background: transparent;
        transition: all .5s 0s ease-in-out;
        width: 170px;
        height: auto;
        font-size: inherit;
        font-family: inherit;
    }



    .learn-more-anime .learn-more .circle-learn-more {
        transition: all .5s 0s ease-in-out;
        position: relative;
        display: block;
        margin: 0;
        width: 0.75rem;
        height: 24px;
        padding: 5px;


    }

    .learn-more-anime .learn-more .circle-learn-more .icon-learn-more {
        transition: all .5s 0s ease-in-out;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        background: #fff;
    }

    .learn-more-anime .learn-more .circle-learn-more .icon-learn-more.arrow-learn-more {
        transition: all .5s 0s ease-in-out;
        left: 0.625rem;
        width: 1.125rem;
        height: 0.125rem;
        background: #282936;
    }

    .learn-more-anime .learn-more .circle-learn-more .icon-learn-more.arrow-learn-more::before {
        transition: all .5s 0s ease-in-out;
        position: absolute;
        content: '';
        top: -0.25rem;
        right: 0.0625rem;
        width: 0.625rem;
        height: 0.650rem;
        border-top: 0.125rem solid #282936;
        border-right: 0.125rem solid #282936;
        transform: rotate(45deg);
    }

    .learn-more-anime .learn-more .button-text {
        transition: all .5s 0s ease-in-out;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;


        color: #282936;
        font-weight: 700;
        line-height: 1.6;
        text-align: center;
        text-transform: uppercase;
    }

    .learn-more-anime:hover .learn-more {
        width: 7rem;
    }

    .learn-more-anime:hover .learn-more .circle-learn-more {
        width: 100%;

        background: #282936;

        /* display: none; */
    }

    .learn-more-anime:hover .learn-more.circle-learn-more .icon-learn-more.arrow-learn-more {
        background: #282936;
        transform: translate(1rem, 0);

    }


    .learn-more-anime:hover .learn-more .button-text {
        color: #fff;

    }
    .card-img-overlay1 .error{
        font-size: 1.3rem;
    }
</style>
<!--<section class="py-5 py-lg-5 sectionscroll" >-->
<!--        <div class="container-sm  px-3">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 mb-4">-->
<!--                    <h3 class="hidden-content">-->
<!--                       Our Insights-->
<!--                    </h3>-->
<!--                    <p class="my-4 hidden-content">-->
<!--                        Virtusa’s technology and industry experts share knowledge on tackling today’s business and digital transformation challenges. Get key tips and insights to inspire new thinking, avoid pitfalls and drive higher results.-->
<!--                    </p>-->
<!--                </div>-->

<!--                <div class="row hidden-content">-->
<!--                    <div class="col-lg-4  d-lg-block d-none">-->
<!--                    <div class="position-relative hover-container h-100">-->
<!--                        <img src="assets/images/automobile/unsplash_2PJMDIgK9EA.svg" class="btnrad object-fit-cover rounded-0 h-100"-->
<!--                            alt="Industry Image">-->
<!--                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">-->
<!--                            <h4 class="title mb-2 error">National Pipe Manufacturer Optimizes Operations with Salesforce Solutions.</h4>-->
<!--                            <a class="learn-more" href="products.php?nm=DMS+for+Primary+Sales">-->
<!--                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>-->
<!--                            </a>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="col-lg-4 d-block d-lg-none">-->
<!--                    <div class="position-relative hover-container">-->
<!--                        <img src="assets/images/automobile/unsplash_aL2rxQhEfAM.svg" class="btnrad object-fit-cover rounded-0 "-->
<!--                            alt="Industry Image">-->
<!--                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">-->
<!--                            <h4 class="title mb-2 error">National Level Cycle Manufacturer improves Sales and Operations Management</h4>-->
<!--                            <a class="learn-more" href="products.php?nm=DMS+for+Primary+Sales">-->
                                
<!--                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>-->

<!--                            </a>-->
<!--                        </div>-->

<!--                    </div> -->
<!--                </div>-->

<!--                <div class="col-lg-4 mt-lg-0 mt-3">-->
<!--                    <div class="position-relative hover-container h-100">-->
<!--                        <img src="assets/images/automobile/unsplash_XbZy0-JHINA.svg" class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">-->
<!--                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">-->
<!--                            <h4 class="title mb-2 error">National Pipe Manufacturer Optimizes Operations with Salesforce Solutions.</h4>-->
<!--                            <a class="learn-more" href="products.php?nm=Sales+Force+Automation+[SFA]">-->
<!--                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>-->
<!--                            </a>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 mt-lg-0 mt-3 ">-->
<!--                    <div class="position-relative hover-container h-100">-->
<!--                        <img src="assets/images/automobile/unsplash_XbZy0-JHINA.svg" class="btnrad object-fit-cover rounded-0 h-100"-->
<!--                            alt="Industry Image">-->
<!--                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">-->
<!--                            <h4 class="title mb-2 error">National Pipe Manufacturer Optimizes Operations with Salesforce Solutions.</h4>-->
<!--                            <a class="learn-more" href="products.php?nm=WhatsApp+Integrator">-->
                                
<!--                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>-->

<!--                            </a>-->
<!--                        </div>-->

<!--                    </div>-->
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    
    
<section class="py-5 my-5" style="background-color:#eaf5fe;" id="sol4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                 <h2 class="mb-5 text-center">Get <span style="color:#00A1E0">Zero-Cost Salesforce</span> Consultation </h2>
            </div>
            <div class="col-lg-6">
                <form class="" method="post" action="">
                        <div class="row">
                            <div class="col-lg-12 mt-2">
                                <div class="group">
                                    <input type="text" class="input1 border-0 text-dark" name="name" style="background-color:#f8f9fa;" id="inputname1" pattern="[a-z A-Z]*" oninput="g1()" required />
                                    <span class="highlight"></span>
                                    <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                    <label id="nameLable1">Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4">
                                <div class="group">
                                    <input type="text" class="input1 border-0 text-dark" onchange(new()) name="email" id="input12" onchange="e1()" required />
                                    <span class="highlight"></span>
                                    <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                    <label id="email1">Email</label>
                                </div>
                                <div class="error fs-6 text-danger" id="emailError1">

                                </div>
                                <div class="error fs-6 text-success" id="emailSuccess1">

                                </div>
                            </div>

                            <div class="col-lg-6 mt-4">
                                
                                
                                    <div class="group">
                                        <input type="text" class="input1 border-0 text-dark" id="myInput1" maxlength="11" minlength="10" onchange(new()) oninput="f1(this)" name="contact" required />
                                        <span class="highlight"></span>
                                        <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                        <label id="place1" class="d-block">Phone</label>
                                    </div>
                                    <div class="error fs-6 text-danger" id="phoneError1">

                                    </div>
                                    <div class="error fs-6 text-success" id="phoneSuccess1">

                                    </div>
                                
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="group">
                                    <textarea type="text" class="input1 border-0 text-dark" style="color: white; width: 100%;resize:none" onfocus="label_area()" name="message" id="text_area"></textarea>
                                    <span class="highlight"></span>
                                    <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                    <label id="label_area" class="label_textarea">Message</label>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-4 ">
                                
                                    <div class="mt-3 d-flex flex-lg-row flex-column justify-content-between">
                                        <input type="hidden" value="0" id="callReq" name="callReq">
                                        <input type="hidden" value="0" id="validEmail1">
                                        <input type="hidden" value="0" id="validPhonenumber1">
                                        <input type="submit" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;">
                                        <input type="button" value="SUBMIT" class="inptypeSubBtn d-none" style="color:black !important;">
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            <script>
                function label_area(){
                    document.getElementById("label_area").className='phone_up';
                }
                
                
                document.getElementById("text_area").addEventListener('blur', function() {
                    
                        var  textarea_con=document.getElementById("text_area").value;
                        if (textarea_con.length > 0) {
                document.getElementById("label_area").className='phone_up';
                } else {  
                    document.getElementById("label_area").className='label_textarea';
                }
                        });
                
            </script>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 pt-4 px-3">
               <div class="d-flex">
                    <div class="mt-1">
                    <img src="assets/images/case/whatsapp.png" width="30px">
                    </div>
                    <div class="ps-2">
                        <p>
                            IND: <a href="tel:+918619948778">+91 86199 48778</a> | <a href="tel:+919663870199">+91 96638 70199</a> <br>
                            US: <a href="tel:+17162266939">+1 (716) 226-6939</a><br>
                            UK: <a href="tel:+442032894727">+44 20 3289 4727</a>
                        </p>
                    </div>
               </div>
               <div class="d-flex pt-4">
                    <div class="mt-1">
                        <img src="assets/images/case/mail.png" width="30px">
                    </div>
                    <div class="ps-2 fs-4">
                       <p>
                           <a href="mailto:sales@crmlanding.in" target="_blank">sales@crmlanding.in</a><br>
                            <a href="mailto:info@crmlanding.in" target="_blank">info@crmlanding.in</a>
                       </p>
                    </div>
               </div>
               <a target="_blank" href="https://maps.app.goo.gl/SgoMpXrjyV82K9YS7">
                <div class="d-flex pt-4">
                    <div class="mt-1">
                        <img src="assets/images/case/location.png" width="60px">
                    </div>
                    <div class="ps-2 fs-4">
                       <p>
                            2nd Floor, Shyama Royal, Near Mamta Sweets, Shastri Nagar, Ajmer - Rajasthan, (305001), INDIA
                       </p>
                    </div>
               </div>
               </a>
            </div>
        </div>
    </div>
</section>
<?php require('include/footer.php'); ?>
<?php
if (!empty($_POST['submit'])) {
    $companyName=$_POST['companyName'];
    $Name = $_POST['name'];
    $callReq = "3";
    $Email = $_POST['email'];
    $Country = $_POST['countryCode'];
    $Contact = $_POST['contact'];
    $Message = $_POST['message'];
   
           
                $Query = "INSERT INTO `Enquiry`(`name`, `email`, `country`, `contact`, `file`, `message`, `callRequest`, `date`, `status`,`companyName`,`designation`) VALUES ('$Name','$Email','$Country','$Contact','','$Message', '$callReq', now(), 'Active','$companyName','')";
                $data = mysqli_query($conn, $Query);
                if ($data) {
                        ?>
                        <script>
                        showToast("Thanks! We’ll get back to you soon.","green","automobile_industry.php");
                         function after_submit(str) {
                        window.location.href ="https://crmmail.crmlanding.in/sendmail/<?php echo $Name; ?>/<?php echo $Email; ?>/<?php echo $Contact; ?>";
                    }
                        </script>
                        <?php
                } else {
                    ?>
                    <script>
                    showToast("Please Try Again.","red","/");
                    </script>
                   <?php
                }
}
         
?>
    <!--===============spacing==============-->
    
</div>
<script>
    //   for number validation
    function f1(elem) {

        var inputElement1 = document.getElementById('myInput1');
        var place1 = document.getElementById("place1");
        var val1 = elem.value;
        if (val1.length > 0) {
            place1.classList.add("phone_up");
        } else {
            place1.classList.remove("phone_up");
        }


        if (isNaN(val1)) {
            inputElement1.value = '';
            document.getElementById("phoneError1").innerText = "Not using Alphabet";
            return;
            document.getElementById("validPhonenumber1").value = "0";


            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }

        if (/^[0]/.test(val1)) {
            inputElement1.value = '';
            document.getElementById("phoneError1").innerText = "Number Not start from 0";
            document.getElementById("validPhonenumber1").value = "0";


            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;

        }
        if (/^(1{8}|2{8}|3{8}|4{8}|5{8}|6{8}|7{8}|8{8}|9{8})$/.test(val1)) {
            inputElement1.value = '';
            document.getElementById("validPhonenumber1").value = "0";
            document.getElementById("phoneError1").innerText = "Number Repeated Multitime";
            place1.style.setProperty('--placeholder-color', 'red');


            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        else if (val1.length < 10) {
            // document.getElementById("validPhonenumber1").value = "0";
            document.getElementById("phoneError1").innerText = "Invalid Phone Number";
            document.getElementById("phoneSuccess1").innerText = "";
            document.getElementById("place1").style.display = "none";


            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        else {
            // document.getElementById("validPhonenumber1").value = "1";
            document.getElementById("phoneSuccess1").innerText = "Valid Phone Number";
            document.getElementById("phoneError1").innerText = "";


            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

        }




    }
    function f2(elem) {

        var inputElement12 = document.getElementById('myInput12');
        var place12 = document.getElementById("place12");
        var val12 = elem.value;
        if (val12.length > 0) {
            place12.classList.add("phone_up");
        } else {
            place12.classList.remove("phone_up");
        }
        if (isNaN(val12)) {
            inputElement12.value = '';
            document.getElementById("phoneError12").innerText = "Not using Alphabet";
            return;
            document.getElementById("validPhonenumber12").value = "0";


            var new12 = document.getElementById("validPhonenumber12").value;
            var new22 = document.getElementById("validEmail12").value;

            if (new12 == "1" && new22 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }

        if (/^[0]/.test(val12)) {
            inputElement12.value = '';
            document.getElementById("phoneError12").innerText = "Number Not start from 0";
            document.getElementById("validPhonenumber12").value = "0";


            var new12 = document.getElementById("validPhonenumber12").value;
            var new22 = document.getElementById("validEmail12").value;

            if (new12 == "1" && new22 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;

        }
        if (/^(1{8}|2{8}|3{8}|4{8}|5{8}|6{8}|7{8}|8{8}|9{8})$/.test(val12)) {
            inputElement12.value = '';
            document.getElementById("validPhonenumber12").value = "0";
            document.getElementById("phoneError12").innerText = "Number Repeated Multitime";
            place12.style.setProperty('--placeholder-color', 'red');


            var new12 = document.getElementById("validPhonenumber12").value;
            var new22 = document.getElementById("validEmail12").value;

            if (new12 == "1" && new22 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        else if (val12.length < 10) {
            // document.getElementById("validPhonenumber1").value = "0";
            document.getElementById("phoneError12").innerText = "Invalid Phone Number";
            document.getElementById("phoneSuccess12").innerText = "";
            document.getElementById("place12").style.display = "none";


            var new1 = document.getElementById("validPhonenumber12").value;
            var new2 = document.getElementById("validEmail12").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        else {
            // document.getElementById("validPhonenumber1").value = "1";
            document.getElementById("phoneSuccess12").innerText = "Valid Phone Number";
            document.getElementById("phoneError12").innerText = "";


            var new12 = document.getElementById("validPhonenumber12").value;
            var new22 = document.getElementById("validEmail12").value;

            if (new12 == "1" && new22 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

        }




    }
    // for name validation
    function g2() {
        const inputElement12 = document.getElementById("inputname12");
        const nameLabel12 = document.getElementById("nameLabel12");
        //   const compeny_input = document.getElementById("compeny_input");
        // const compeny_nameLabel = document.getElementById("compeny_nameLabel");
        const value12 = inputElement12.value;
        const sanitizedValue12 = value12.replace(/[^a-zA-Z ]/g, '');

        if (value12 !== sanitizedValue12) {
            inputElement12.value = sanitizedValue12;
            nameLabel12.textContent = "Enter correct Name";
            // inputElement.placeholder = "Enter valid Name";
            // inputElement.style.setProperty('--placeholder-color', 'red');
        }
    }
    function g1() {
        const inputElement1 = document.getElementById("inputname1");
        const nameLabel1 = document.getElementById("nameLable1");
        //   const compeny_input = document.getElementById("compeny_input");
        // const compeny_nameLabel = document.getElementById("compeny_nameLabel");
        const value1 = inputElement1.value;
        const sanitizedValue1 = value1.replace(/[^a-zA-Z ]/g, '');

        if (value1 !== sanitizedValue1) {
            inputElement1.value = sanitizedValue1;
            nameLabel1.textContent = "Enter correct Name";
            // inputElement.placeholder = "Enter valid Name";
            // inputElement.style.setProperty('--placeholder-color', 'red');
        }
    }
    function e1() {
        var email1 = document.getElementById("input12").value;

        // Check if the email is in a valid format
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email1)) {
            document.getElementById("emailError1").innerText = "Please enter a valid email address.";
            document.getElementById("emailSuccess1").innerText = "";
            testflage = 0;
            document.getElementById("validEmail1").value = "0";

            var new1 = document.getElementById("validPhonenumber1").value;
            var new2 = document.getElementById("validEmail1").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;
        }

        // If all conditions pass, clear the error message

        document.getElementById("validEmail1").value = "1";
        document.getElementById("emailError1").innerText = "";
        document.getElementById("emailSuccess1").innerText = "Valid Email";

        var new1 = document.getElementById("validPhonenumber1").value;
        var new2 = document.getElementById("validEmail2").value;

        if (new1 == "1" && new2 == "1") {
            document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
        }
        else {
            document.getElementById("button1").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
        }


        testflage = 1;
    }

    function e2() {
        var email12 = document.getElementById("input13").value;

        // Check if the email is in a valid format
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email12)) {
            document.getElementById("emailError12").innerText = "Please enter a valid email address.";
            document.getElementById("emailSuccess12").innerText = "";
            testflage = 0;
            document.getElementById("validEmail12").value = "0";

            var new12 = document.getElementById("validPhonenumber12").value;
            var new22 = document.getElementById("validEmail12").value;

            if (new12 == "1" && new22 == "1") {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;
        }

        // If all conditions pass, clear the error message

        document.getElementById("validEmail12").value = "1";
        document.getElementById("emailError12").innerText = "";
        document.getElementById("emailSuccess12").innerText = "Valid Email";

        var new1 = document.getElementById("validPhonenumber12").value;
        var new2 = document.getElementById("validEmail12").value;

        if (new1 == "1" && new2 == "1") {
            document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
        }
        else {
            document.getElementById("button12").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
        }


        testflage = 1;
    }
    function showalert1() {
        alert("Please Validate form");
    }
</script>




<!--for scroll form-->
<script>
    //   for number velidation
    function f3(elem) {

        var inputElement = document.getElementById('myInput');
        var place = document.getElementById("place");
        var val = elem.value;

        if (val.length > 0) {
            place.classList.add("phone_up");
        } else {
            place.classList.remove("phone_up");
        }


        if (isNaN(val)) {
            inputElement.value = '';
            document.getElementById("phoneError").innerText = "Not using Alphabet";
            return;
            document.getElementById("validPhonenumber").value = "0";

            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }

        if (/^[0]/.test(val)) {
            inputElement.value = '';
            document.getElementById("phoneError").innerText = "Number Not start from 0";
            document.getElementById("validPhonenumber").value = "0";


            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;
            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;

        }
        if (/^(1{8}|2{8}|3{8}|4{8}|5{8}|6{8}|7{8}|8{8}|9{8})$/.test(val)) {
            inputElement.value = '';
            document.getElementById("validPhonenumber").value = "0";
            document.getElementById("phoneError").innerText = "Number Repeated Multitime";
            place.style.setProperty('--placeholder-color', 'red');

            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        if (val.length < 10) {
            document.getElementById("validPhonenumber").value = "0";
            document.getElementById("phoneError").innerText = "Invalid Phone Number";
            document.getElementById("phoneSuccess").innerText = "";


            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }


        }
        else {
            document.getElementById("validPhonenumber").value = "1";
            document.getElementById("phoneSuccess").innerText = "Valid Phone Number";
            document.getElementById("phoneError").innerText = "";
            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

        }



    }
    // for name velidation
    function g3() {
        const inputElement = document.getElementById("input");
        const nameLabel = document.getElementById("nameLabel");
        const value = inputElement.value;
        const sanitizedValue = value.replace(/[^a-zA-Z ]/g, '');

        if (value !== sanitizedValue) {
            inputElement.value = sanitizedValue;
            nameLabel.textContent = "Enter correct Name";
            // inputElement.placeholder = "Enter valid Name";
            // inputElement.style.setProperty('--placeholder-color', 'red');
        }
    }
    function e3() {
        var email = document.getElementById("input1").value;

        // Check if the email is in a valid format
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById("emailError").innerText = "Please enter a valid email address.";
            document.getElementById("emailSuccess").innerText = "";
            testflage = 0;
            document.getElementById("validEmail").value = "0";

            var new1 = document.getElementById("validPhonenumber").value;
            var new2 = document.getElementById("validEmail").value;

            if (new1 == "1" && new2 == "1") {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
            }
            else {
                document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
                document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
            }

            return;
        }

        // If all conditions pass, clear the error message

        document.getElementById("validEmail").value = "1";
        document.getElementById("emailError").innerText = "";
        document.getElementById("emailSuccess").innerText = "Valid Email";

        var new1 = document.getElementById("validPhonenumber").value;
        var new2 = document.getElementById("validEmail").value;

        if (new1 == "1" && new2 == "1") {
            document.getElementById("button").className = "theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className = "theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent ";
        }
        else {
            document.getElementById("button").className = "theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className = "theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
        }


        testflage = 1;
    }
    
     
    
            
     
 
</script> 

