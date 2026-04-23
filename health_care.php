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
    <title>Healthcare Industry-CRM Landing</title>
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
        font-size: 14px;
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
            <!-- mobile view start -->
            <div class="col-12 text-center pt-lg-5">
               <h1 class="pt-2  themeSliderHeadingSet">Healthcare Industry</h1>
               <div class="row pt-3">
                   <div class="col pe-4">
                       <div class="rounded-circle d-lg-block d-none" style="height:99px">
                           <img src="assets/new-pages/healthcare/health99px.jpg" class="image-fluid rounded-circle h-100">
                       </div>
                   </div>
                   <div class="col-12 d-lg-none d-block pt-2 p-0 pb-3">
                        <img src="assets/new-pages/healthcare/health3mobile.jpg" style="border-radius:1rem;" class="img-fluid">
                   </div>
                   <div class="col-6 d-lg-none d-block pt-3 ps-0 pb-3 pe-3"> 
                     <img src="assets/new-pages/healthcare/health2.jpg" style="border-radius:1rem;">
                   </div>
                   <div class="col-6 d-lg-none d-block pt-3 pe-0 pb-3 ps-3">
                        <img src="assets/new-pages/healthcare/health2new.jpg" style="border-radius:1rem;">
                   </div>
                   <div class="col-lg-9 col-12 px-lg-5 px-0 ">
                       <p class="text-lg-center text-start">
                       From empowering medical representatives in the field to streamlining patient engagement and device distribution — solutions designed to meet the unique demands of the healthcare sector.<br>
                       AI Intelligence Layer — Leverage AI-based analytics, workflows, sales coaches, nudges & recommendations to gain actionable insights into business performance, trends, competitor activity, and brand growth.
                        </p>
                        <a href="contact_us.php"><button class=" px-4 mt-3 border-0 text-white" style=" background: linear-gradient(84.06deg, #0D89C8 0%, #34CBB7 100%);border-radius:7px;padding-block:12px">
                           Request a demo
                       </button></a>
                   </div>
                   <div class="col ps-4">
                       <div class="rounded-circle d-lg-block d-none" style="height:99px">
                           <img src="assets/new-pages/healthcare/health99px.jpg" class="image-fluid rounded-circle h-100">
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
            <div class="col-lg-2 col-6 text-start align-self-lg-end pe-lg-0 pe-2" style="font-size:39px">
                <div class="position-relative h-100">
                    <img src="assets/images/automobile/bg-liner.png" class="h-100" >
                    <div class="position-absolute top-0 h-100 w-100 cloudp rounded-5 p-lg-3 pt-3 ps-3" style="background: linear-gradient(84.06deg,#0d8ac8aa 0%, #34cbb7aa 100%);border-radius:1rem">
                        <img src="assets/images/automobile/image 16.png" class="px-2 ">
                        <p class="text-white pt-lg-2 py-1 ps-2 m-0">
                            Cloud Platform
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-2 p-0 d-lg-block d-none ">
               <div >
                    <img src="assets/new-pages/healthcare/health2.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-3 pt-5 p-0 d-lg-block d-none">
                 <div >
                    <img src="assets/new-pages/healthcare/health3.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-2 p-0 d-lg-block d-none">
                 <div >
                    <img src="assets/new-pages/healthcare/health2new.jpg" style="border-radius:1rem;">
               </div>
            </div>
            <div class="col-6 col-lg-2 text-start align-self-lg-end ps-lg-0">
                 <div class="position-relative overflow-hidden h-100">
                    <img src="assets/images/automobile/bg-liner.png" class="h-100">
                    <div class="position-absolute top-0 h-100 w-100 text-white  rounded-5 p-lg-3 built px-2 pt-4 ps-4" style="background: linear-gradient(84.06deg,#0d8ac8aa 0%, #34cbb7aa 100%);border-radius:1rem">
                        <h1 class="text-white pb-3" style="font-size:50px" >120+</h1>
                        <p>
                            Built in Features
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
                    Home /  Healthcare Industry
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
                    
                    <a href="#sol4" class="nav-linktab d-block py-2">Insights</a>
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
                    Healthcare Industry Solution
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
                     <h4 class="hidden-content show-content">Pharma & Life Sciences</h4>
                 </div>
                 <div class="col-lg-8 col-md-8 pt-2 pt-lg-0 col-12 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad " style="background-color:white;">Multi-Speciality Hospitals</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Diagnostic Labs</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Nursing Homes</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Telemedicine</button>
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Hospitals & Diagnostic Chains</h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Surgical Instruments</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Diagnostic Labs</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Nursing Homes</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Telemedicine</button>
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none" style="background-color:#eaf5fe;">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Medical Devices & Equipment</h4>
                 </div>
                 <div class="col-lg-8 col-md-8  col-12 pt-2 pt-lg-0  hidden-content show-content">
                     <button class="btn rounded px-3  shadow  btnrad" style="background-color:white;">Surgical Instruments</button>
                     <button class="btn rounded px-3 mx-3 shadow btnrad" style="background-color:white;">Diagnostic Equipment</button>
                     <button class="btn rounded px-3 mx-3 shadow btnrad" style="background-color:white;">Consumables</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Wearables / IoT</button>
                     
                 </div>
            </div>
    </div>
</section>

<section class="py-4 d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Healthcare Distribution</h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Pharma Distributors</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Medical Device OEMs</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Retail Pharmacy Chains</button>
                     <button class="btn rounded px-3 shadow btnrad mt-3 mt-lg-0 mx-lg-3" style="background-color:white;">Wellness Brands</button>
                 </div>
            </div>
    </div>
</section>
<section class="py-4 d-lg-block d-none">
    <div class="container-sm px-3">
        <div class="row">
                 <div class="col-lg-4 col-md-4 col-12">
                     <h4 class="hidden-content show-content">Field Force & Operations</h4>
                 </div>
                 <div class="col-lg-8 col-md-8 col-12 pt-2 pt-lg-0 hidden-content show-content">
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">MR Teams</button>
                     <button class="btn rounded px-3 shadow btnrad mx-3" style="background-color:white;">Sales Teams</button>
                     <button class="btn rounded px-3 shadow btnrad" style="background-color:white;">Territory Managers</button>
                     <button class="btn rounded px-3 shadow btnrad mt-3 mt-lg-0 mx-lg-3" style="background-color:white;">Field Executives</button>
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
                    Healthcare Salesforce Solutions: Driving Smarter, Patient-Centric Operations
                </h4>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">
                The healthcare industry is undergoing rapid transformation driven by evolving regulations, increasing patient expectations, and advancements in digital technologies such as AI, data analytics, and connected care. These shifts are redefining how healthcare providers, pharma companies, and medical device organisations operate, engage with patients and HCPs, and deliver outcomes.
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
                            <h2>2.4 X</h2>
                            <p class="incr">
                                Increase in HCP visit efficiency with MR App automation
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-md-6 pt-3 pt-lg-0 ps-0 ps-lg-3 pe-0">
                        <div class="shadow h-100 p-4" style="border-radius:15px;">
                            <h2>30%</h2> 
                            <p class="incr">
                               More lead capture via automated patient & HCP journeys
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pt-3 hidden-content show-content d-lg-block d-none">
                <div class="pt-3 indusimg ms-auto text-end">
                    <!-- <img src="assets/images/automobile/automobile.png" class="img-fluid" style="border-radius:15px"> -->
                    <img src="assets/images/healthcare/heathcare.png" class="img-fluid" style="border-radius:15px">

                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 position-relative d-lg-block d-none">
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
                   Delivering complete healthcare solutions across Pharma, Providers, and Patients
                </h1>
            </div>
        </div>
        <div class="row py-5">
            <div class=" col-md-4 col-12 p-0">
                 <div class="row ">
                     
                     <div class="col-12 px-4">
                         <div class="shadow h-100 p-4 bg-light" style="border-radius:15px;"  >
                     <h3 class="hidden-content show-content pt-lg-3">Pharma / Medical Devices</h3>
                     <p class="pe-4 py-lg-4">Explore ready-to-deploy solutions for pharma companies and medical device manufacturers</p>
                     <div class="row justify-content-end">
                         <div class="circle-loader"></div>
                     </div>
                 </div>
                     </div>
                 <div class="col-12 p-0  py-3 d-lg-none">
                  <div class=" p-0 d-lg-none d-block py-2" style="background: #EEEEEE;">
                    <ol class="librdr list-style-none row m-0 text-center" id="itemList1" >
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items active" onclick="newid(1,'oem')" data-filter="all" style="cursor:pointer">Field  </li>
                        <li class="mb-0 pb-0 col-3 border border-0 filter_list_items" onclick="newid(1,'marketing')" data-filter="marketing" style="cursor:pointer">Commercial </li>
                        <li class="mb-0 pb-0 col-6 border border-0 filter_list_items" onclick="newid(1,'sales')" data-filter="sales" style="cursor:pointer">Patient Engagement</li>
                      
                    </ol>
                 </div>
                </div>
                <div class="col-12 d-lg-none px-4">
                    <div class="shadow p-4 h-100 list list1" style="border-radius:15px;max-height:700px;overflow:hidden;">
                    <ol class="librdr contentList">
                       <li data-item="oem1">MR Onboarding & Territory Allocation</li>
                            <li data-item="oem1">Visit Planning & Execution Route Optimisation</li>
                            <li data-item="oem1">Geo-tagging & Attendance Tracking</li>
                            <li data-item="oem">Complaint & Feedback Management </li>
                            <!--oem sale-->
                            <li data-item="oem1">Visit Reporting & Field Insights Expense & Claims Management</li>
                            <li data-item="oem1">Omni-channel Lead Capture Lead Management (HCP & Patients)</li>
                            <li data-item="oem1">Lead & Opportunity Tracking Doctor Visit Management Opportunity Management</li>
                        
                    </ol>
                </div>
                </div>
             </div>
            </div>
             
            <div class=" col-md-4 col-12 pt-4 pt-lg-0">
                 <div class="shadow p-4 h-100 bg-light" style="border-radius:15px;" >
                     <h3 class="hidden-content show-content pt-lg-3">Providers</h3>
                     <p class="pe-4 py-lg-4">Enable efficient operations and patient engagement across hospitals and diagnostic chains</p>
                     
                     <div class="row justify-content-end">
                         <div class="circle-loader " ></div>
                     </div>
                 </div>
            </div>
            
            
            <div class=" col-md-4 col-12 pt-4 pt-lg-0">
                 <div class="shadow h-100 p-4 bg-light" style="border-radius:15px;" >
                     <h3 class="hidden-content pt-lg-3  show-content">Patients</h3>
                     <p class="pe-4 py-lg-4">Deliver seamless patient journeys with connected communication and care management</p>
                     
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
                    Transform Healthcare Operations with CRM Landing: Your Partner in Digital Transformationn
                </h4>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">Following are the key features to elevate healthcare operations. Our AI-driven solutions help streamline MR activities, improve patient engagement, and optimise sales, service, and distribution workflows.</p>
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
            
            
            <div class="col-lg-4 ">
                <!--oem-->
                <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
                    <ol class="librdr contentList" start="1">
                            <li data-item="oem1">MR Onboarding & Territory Allocation</li>
                            <li data-item="oem1">Visit Planning & Execution Route Optimisation</li>
                            <li data-item="oem1">Geo-tagging & Attendance Tracking</li>
                            <li data-item="oem1">Complaint & Feedback Management </li>
                            <!--oem sale-->
                            <li data-item="oem1">Visit Reporting & Field Insights Expense & Claims Management</li>
                            <li data-item="oem1">Omni-channel Lead Capture Lead Management (HCP & Patients)</li>
                            <li data-item="oem1">Lead & Opportunity Tracking Doctor Visit Management Opportunity Management</li>

                    </ol>
                </div>
                <!--dealer-->
                  <div class="shadow p-4 h-100 list list2" style="border-radius:15px;">
                    <ol class="librdr contentList" start="1">
                         <li data-item="marketing5">Quote & Proposal Management</li>
                            <li data-item="marketing5">Insurance / Approval Workflows</li>
                            <li data-item="marketing5">Order & Prescription Capture</li>
                            <li data-item="marketing5">Inventory & Sample Management </li>
                            <!--oem sale-->
                            <li data-item="marketing5">Delivery & Post-Visit Follow-up </li>
                            <li data-item="marketing5">Patient Feedback & Surveys</li>
                            <li data-item="marketing5">Claims & Reimbursement Management</li>
                            <li data-item="marketing5">Account & HCP Management</li>
                            <li data-item="marketing5">Document Upload & Compliance</li>
                            <li data-item="marketing5">Activity Tracking</li>
                            <li data-item="marketing5">Forecasting & Demand Planning</li>
                            <li data-item="marketing5">Order Placement & Processing</li>


                    </ol>
                </div>
                <!--customer-->
                <div class="shadow p-4 h-100 list list3" style="border-radius:15px;">
                    <ol class="librdr contentList" start="1">
                         <!--oem marketing-->
                            <li data-item="sales5">Stock Acknowledgement</li>
                             <li data-item="sales5">Device / Product Lifecycle Management</li>
                            <li data-item="sales5">ERP & Hospital System Integration</li>
                            <li data-item="sales5">CTI / Telephony Integration</li>
                            <li data-item="sales5">IoT / Device Integration</li>
                            <li data-item="sales5">Compliance & Risk Scoring</li>
                            <li data-item="sales5">Mobile Sales Enablement</li>
                            <li data-item="sales5">Patient Mobile App</li>
                            <li data-item="sales5">Workflow Automation</li>
                            <li data-item="sales5">Performance Analytics</li>
                            <li data-item="sales5">Dashboards & Reporting</li>
                    </ol>
                </div>
            </div>
            
            <div class="col-lg-4 pt-lg-0 pt-4">
                <!--oem-->
                <div class="shadow p-4 h-100 list list1" style="border-radius:15px;">
                    <ol class="librdr contentList" start="1">
                        <li data-item="marketing5">Quote & Proposal Management</li>
                            <li data-item="marketing5">Insurance / Approval Workflows</li>
                            <li data-item="marketing5">Order & Prescription Capture</li>
                            <li data-item="marketing5">Inventory & Sample Management </li>
                            <!--oem sale-->
                            <li data-item="marketing5">Delivery & Post-Visit Follow-up </li>
                            <li data-item="marketing5">Patient Feedback & Surveys</li>
                            <li data-item="marketing5">Claims & Reimbursement Management</li>
                            <li data-item="marketing5">Account & HCP Management</li>
                            <li data-item="marketing5">Document Upload & Compliance</li>
                            <li data-item="marketing5">Activity Tracking</li>
                            <li data-item="marketing5">Forecasting & Demand Planning</li>
                            <li data-item="marketing5">Order Placement & Processing</li>
                        
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
                    
                    <ol class="librdr contentList" start="1">
                        
                            
                             <!--oem marketing-->
                            <li data-item="sales5">Stock Acknowledgement</li>
                             <li data-item="sales5">Device / Product Lifecycle Management</li>
                            <li data-item="sales5">ERP & Hospital System Integration</li>
                            <li data-item="sales5">CTI / Telephony Integration</li>
                            <li data-item="sales5">IoT / Device Integration</li>
                            <li data-item="sales5">Compliance & Risk Scoring</li>
                            <li data-item="sales5">Mobile Sales Enablement</li>
                            <li data-item="sales5">Patient Mobile App</li>
                            <li data-item="sales5">Workflow Automation</li>
                            <li data-item="sales5">Performance Analytics</li>
                            <li data-item="sales5">Dashboards & Reporting</li>
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

<!--mobile filter-->

<section class="pt-5 position-relative d-lg-none" >
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
                  Delivering complete healthcare solutions across Pharma, Providers, and Patients
                </h1>
            </div>
        
        </div>
       
        <div class="row py-5">
            <div class=" col-md-4 col-12 p-0">
                 <div class="row ">
                     
                     <div class="col-12 px-4 py-3" id="oem" >
                        <a href="#oem"> <div class="shadow h-100 p-4" style="border-radius:15px;" id="oem_box_mobile">
                             <h3 class="hidden-content show-content pt-lg-3">Pharma / Medical Devices</h3>
                             <p class="pe-4 py-lg-4">Explore ready-to-deploy solutions for pharma companies and medical device manufacturers</p>
                             <div class="row justify-content-end">
                                 <div class="circle-loader"></div>
                             </div>
                         </div></a>
                    </div>
                    <div class="row">
                    <div class="col-12 px-4 py-3" id="dealers" >
                     <a href="#dealers">
                         <div class="shadow p-4 h-100" style="border-radius:15px;"  id="dealers_box_mobile">
                            <h3 class="hidden-content show-content pt-lg-3">Providers</h3>
                            <p class="pe-3 py-lg-4">Enable efficient operations and patient engagement across hospitals and diagnostic chains</p>
                        
                            <div class="row justify-content-end">
                                <div class="circle-loader" ></div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-12 px-4 py-3 " id="customers" >
                         <a href="#customers">
                             <div class="shadow h-100 p-4 " style="border-radius:15px;"   id="customers_box_mobile">
                             <h3 class="hidden-content pt-lg-3 show-content">Patients</h3>
                             <p class="pe-4 py-lg-4">Deliver seamless patient journeys with connected communication and care management</p>
                             
                             <div class="row justify-content-end">
                                 <div class="circle-loader"></div>
                             </div>
                         </div>
                         </a>
                     </div>
                     <div class="col-12 p-0 pt-4  text-center list list1 d-lg-none" id="list_main1">
                       
                        <div class=" p-0 d-lg-none d-block mt-1 py-2" style="background: #EEEEEE;">
                        <ol class="librdr list-style-none row m-0 text-center" id="itemList5" >
                            <li class="mb-0 pb-0  col-3  border border-0 filter_list_items active" onclick="newid12(5,'oem5',0)" data-filter="oem5" style="cursor:pointer">Field</li>
                            <li class="mb-0 pb-0  col-3 border border-0 filter_list_items" onclick="newid12(5,'marketing5',0)" data-filter="marketing5" style="cursor:pointer">Commercial </li>
                            <li class="mb-0 pb-0  col-6 border border-0 filter_list_items" onclick="newid12(5,'sales5',0)" data-filter="sales5" style="cursor:pointer">Patient Engagement</li>
                          
                        </ol>
                     </div>
                       </div>
                    </div>
                     
                    <div class="col-12 d-lg-none px-4 ">
                    <div class="shadow p-4 h-100 list auto-height list1 mt-5 mb-4" id="listheight5" style="border-radius:15px;overflow:hidden;">
                        <ol class="librdr contentList_mobile"> 
                            <li data-item="oem5">MR Onboarding & Territory Allocation</li>
                            <li data-item="oem5">Visit Planning & Execution Route Optimisation</li>
                            <li data-item="oem5">Geo-tagging & Attendance Tracking</li>
                            <li data-item="oem5">Complaint & Feedback Management </li>
                            <!--oem sale-->
                            <li data-item="oem5">Visit Reporting & Field Insights Expense & Claims Management</li>
                            <li data-item="oem5">Omni-channel Lead Capture Lead Management (HCP & Patients)</li>
                            <li data-item="oem5">Lead & Opportunity Tracking Doctor Visit Management Opportunity Management</li>
                            <!--oem marketing-->


                            <li data-item="marketing5">Quote & Proposal Management</li>
                            <li data-item="marketing5">Insurance / Approval Workflows</li>
                            <li data-item="marketing5">Order & Prescription Capture</li>
                            <li data-item="marketing5">Inventory & Sample Management </li>
                            <!--oem sale-->
                            <li data-item="marketing5">Delivery & Post-Visit Follow-up </li>
                            <li data-item="marketing5">Patient Feedback & Surveys</li>
                            <li data-item="marketing5">Claims & Reimbursement Management</li>
                            <li data-item="marketing5">Account & HCP Management</li>
                            <li data-item="marketing5">Document Upload & Compliance</li>
                            <li data-item="marketing5">Activity Tracking</li>
                            <li data-item="marketing5">Forecasting & Demand Planning</li>
                            <li data-item="marketing5">Order Placement & Processing</li>


                            
                            <!--oem marketing-->
                            <li data-item="sales5">Stock Acknowledgement</li>
                             <li data-item="sales5">Device / Product Lifecycle Management</li>
                            <li data-item="sales5">ERP & Hospital System Integration</li>
                            <li data-item="sales5">CTI / Telephony Integration</li>
                            <li data-item="sales5">IoT / Device Integration</li>
                            <li data-item="sales5">Compliance & Risk Scoring</li>
                            <li data-item="sales5">Mobile Sales Enablement</li>
                            <li data-item="sales5">Patient Mobile App</li>
                            <li data-item="sales5">Workflow Automation</li>
                            <li data-item="sales5">Performance Analytics</li>
                            <li data-item="sales5">Dashboards & Reporting</li>
                        </ol>
                    </div>
                    <!-- <button id="openModalBtn1" class="btn fw-bold list list1 w-100 text-center">See all features <i class="fa-solid fa-chevron-right"></i></button> -->
                    </div>
                     
             </div>
            </div>
             <div id="list_content1" class="modalnew">
                <div class="modal-contentnew">
                    <span class="closenew1">&times;</span>
                    <div class="h-100 modal_body">
                        <ol class="librdr">
                            <li data-item="oem5">MR Onboarding & Territory Allocation</li>
                            <li data-item="oem5">Visit Planning & Execution Route Optimisation</li>
                            <li data-item="oem5">Geo-tagging & Attendance Tracking</li>
                            <li data-item="oem5">Complaint & Feedback Management </li>
                            <!--oem sale-->
                            <li data-item="oem5">Visit Reporting & Field Insights Expense & Claims Management</li>
                            <li data-item="oem5">Omni-channel Lead Capture Lead Management (HCP & Patients)</li>
                            <li data-item="oem5">Lead & Opportunity Tracking Doctor Visit Management Opportunity Management</li>
                            <!--oem marketing-->


                            <li data-item="marketing5">Quote & Proposal Management</li>
                            <li data-item="marketing5">Insurance / Approval Workflows</li>
                            <li data-item="marketing5">Order & Prescription Capture</li>
                            <li data-item="marketing5">Inventory & Sample Management </li>
                            <!--oem sale-->
                            <li data-item="marketing5">Delivery & Post-Visit Follow-up </li>
                            <li data-item="marketing5">Patient Feedback & Surveys</li>
                            <li data-item="marketing5">Claims & Reimbursement Management</li>
                            <li data-item="marketing5">Account & HCP Management</li>
                            <li data-item="marketing5">Document Upload & Compliance</li>
                            <li data-item="marketing5">Activity Tracking</li>
                            <li data-item="marketing5">Forecasting & Demand Planning</li>
                            <li data-item="marketing5">Order Placement & Processing</li>


                            
                            <!--oem marketing-->
                            <li data-item="sales5">Stock Acknowledgement</li>
                            <li data-item="sales5">Device / Product Lifecycle Management</li>
                            <li data-item="sales5">ERP & Hospital System Integration</li>
                            <li data-item="sales5">CTI / Telephony Integration</li>
                            <li data-item="sales5">IoT / Device Integration</li>
                            <li data-item="sales5">Compliance & Risk Scoring</li>
                            <li data-item="sales5">Mobile Sales Enablement</li>
                            <li data-item="sales5">Patient Mobile App</li>
                            <li data-item="sales5">Workflow Automation</li>
                            <li data-item="sales5">Performance Analytics</li>
                            <li data-item="sales5">Dashboards & Reporting</li>
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
     
       function newid12(id,selectedFilter,list_mobile_id) {
            const listEl = document.getElementById('itemList' + id);
            const lists_heights = document.getElementById('listheight' + id);
            const contentLists = document.getElementsByClassName('contentList_mobile');

            if (!listEl || !lists_heights || !contentLists || !contentLists[list_mobile_id]) return;

            const filterItems = listEl.getElementsByTagName('li');
            const contentItems = contentLists[list_mobile_id].getElementsByTagName('li');

            // Update active tab UI
            Array.from(filterItems).forEach(function(item) {
                item.classList.toggle('active', item.getAttribute('data-filter') === selectedFilter);
            });

            // Apply filter to list items
            if (selectedFilter === 'all') {
                Array.from(contentItems).forEach(function(contentItem) {
                    contentItem.classList.remove('hidden');
                });
            } else {
                Array.from(contentItems).forEach(function(contentItem) {
                    const contentFilter = contentItem.getAttribute('data-item');
                    contentItem.classList.toggle('hidden', contentFilter !== selectedFilter);
                });
            }

            // Height behavior: show fixed scroll only when showing "all"
            if (selectedFilter === 'all') {
                lists_heights.classList.remove('auto-height');
                lists_heights.classList.add('fixed-height');
            } else {
                lists_heights.classList.remove('fixed-height');
                lists_heights.classList.add('auto-height');
            }
       }

       // Ensure correct default view on first load (Field only)
       document.addEventListener('DOMContentLoaded', function () {
            newid12(5,'oem5',0);
       });

       
           
      

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
                     <h1 class=" circlepad">2.4X</h1>
                     
                 </div>
                 <p class="text-center pt-3">Increase in HCP visit efficiency with MR App automation</p>
            </div>    
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir">
                     <h1 class=" circlepad">30%</i></h1>
                     
                 </div>
                 <p class="text-center pt-3">More lead capture via automated patient & HCP journeys</p>
            </div>
            
            
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir" >
                     <h1 class="  circlepad">100% <i class="fa-solid fa-arrow-up text-success"></i></h1>
                     
                 </div>
                 <p class="text-center pt-3">Compliant as per UCPMP 2024</p>
            </div>
            
            <div class="col-lg-2 col-md-6 col-6">
               
                 <div class="shadow p-4 mx-auto text-center hidden-content show-content cir">
                     <h1 class=" circlepad">3X</h1>
                     
                 </div>
                 <p class="text-center pt-3">Faster lead capture and sample tracking</p>
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
                <h1 class="text-center px-5 p-lg-5 hidden-content">Delivering Industry Specific Cutting Edge Technology Solutions</h1>
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
                    Transformative digital technology solutions
                </h3>
                <p class="mt-4 hidden-content">
                    Our AI-driven Salesforce solutions streamline healthcare operations, enhance HCP and patient engagement, and drive smarter decision-making. From optimising MR field activities to enabling seamless integrations and real-time insights, we help organisations improve efficiency, compliance, and overall business performance.
                </p>
            </div>
            
            <div class="row vh-75 hidden-content">
                <div class="col-lg-6 col-12 pt-3 h-100   position-relative">
                    <div class="hover-container h-100">
                         <img src="assets/images/healthcare/PatientEngagement.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                
                        <div class="card-img-overlay1 py-4 px-lg-3 position-absolute bottom-0">
                            <h5 class="title mb-2">Enhancing HCP & Patient Engagement</h5>
                            <p class="card-text ">Build meaningful relationships with doctors and patients through personalised, omni-channel engagement and connected healthcare journeys.</p>
                        </div>
                    </div>    
            
                </div>
                <div class="col-lg-6 col-12 h-100 ps-1">
                <div class="row h-100 pt-3">
                    <div class="col-lg-6 col-12 h-50  position-relative pb-3" >
                        <div class="hover-container h-100">
                                <img src="assets/new-pages/healthcare/healthcare6.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative1">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">AI-Driven Insights</h6>
                                <p class="card-text " style="font-size:13px;">Unlock new revenue streams and enhance customer satisfaction with our tailored Salesforce solutions designed specifically for the automotive industry.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pb-3">
                         <div class="hover-container h-100">
                                <img src="assets/new-pages/healthcare/healthcare8.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute" id="transformative2">
                                <h6 class="title mb-2" style="fon t-size:1.05rem;">Seamless System Integration</h6>
                                <p class="card-text " style="font-size:13px;">Reduce manual tasks and improve efficiency with automated processes that allow your team to focus on what matters most: your customers.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pt-3">
                         <div class="hover-container h-100">
                                <img src="assets/new-pages/healthcare/health12.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative3">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">MR Field Force Automation</h6>
                                <p class="card-text " style="font-size:13px;">Leverage powerful analytics to gain actionable insights into your operations and market trends, enabling informed decision-making and strategic planning.</p>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-6 col-12 h-50  position-relative pt-3">
                         <div class="hover-container h-100">
                                <img src="assets/new-pages/healthcare/healthcare11.jpg" class="btnrad object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay12 py-3 px-3 position-absolute " id="transformative4">
                                <h6 class="title mb-2" style="fo nt-size:1.05rem;">Device Sales & Distribution</h6>
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
                Transformative digital technology solutions
                </h3>
                <p class="mt-4 hidden-content">
                Our AI-driven Salesforce solutions streamline healthcare operations, enhance HCP and patient engagement, and drive smarter decision-making. From optimising MR field activities to enabling seamless integrations and real-time insights, we help organisations improve efficiency, compliance, and overall business performance. 
                </p>
            </div>
            <div class="row hidden-content increased-height" id="height_inc&dic">
                <div class="col-12 pt-3 position-relative" id="view_more_id1">
                    <div class="hover-container">
                         <img src="assets/new-pages/healthcare/mobilePatientEngagement.jpg" class="object-fit-cover w-100" alt="Industry Image">
                
                        <div class="card-img-overlay1 py-4 px-lg-5 position-absolute bottom-0">
                            <h5 class="title mb-2">Enhancing HCP & Patient Engagement</h5>
                            <p class="card-text ">Build meaningful relationships with doctors and patients through personalised, omni-channel engagement and connected healthcare journeys.</p>
                        </div>
                    </div>    
                    
                </div>
                <div class="col-12 " id="view_more_id2">
                    <div class="  pt-4 pb-1 position-relative">
                        <div class="hover-container">
                                <img src="assets/new-pages/healthcare/mobilehealthcare6.jpg" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">AI-Driven Insights</h6>
                                <p class="card-text ">Unlock new revenue streams and enhance customer satisfaction with our tailored Salesforce solutions designed specifically for the automotive industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id3">
                    <div class=" pt-4 pb-1 position-relative">
                         <div class="hover-container">
                                <img src="assets/new-pages/healthcare/mobilehealthcare8.jpg" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">MR Field Force Automation</h6>
                                <p class="card-text ">Leverage powerful analytics to gain actionable insights into your operations and market trends, enabling informed decision-making and strategic planning.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id4">
                     <div class=" pt-4 position-relative" >
                         <div class="hover-container">
                                <img src="assets/new-pages/healthcare/mobilehealth12.jpg" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Seamless System Integration</h6>
                                <p class="card-text ">Reduce manual tasks and improve efficiency with automated processes that allow your team to focus on what matters most: your customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 " id="view_more_id5">
                     <div class="  pt-4 position-relative">
                         <div class="hover-container">
                                <img src="assets/new-pages/healthcare/mobilehealthcare11.jpg" class="object-fit-cover w-100 h-100" alt="Industry Image">
                             <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                                <h6 class="title mb-2">Device Sales & Distribution</h6>
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
    
    <section id="sol2" class="sectionscroll d-lg-block d-none" style="background: #EAF5FE;">
        <div class="container-sm py-5 " style="background: #EAF5FE;">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h3 class="mb-5 hidden-content">
                        Health Care Industry Segments
                    </h3>
                </div>
                <div class="container-sm pt-lg-5">
                    <div class="row hidden-content">
                    <div class="col-lg-3 col-6 px-lg-4 ">
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
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h4 class="title "
                            >Pharma</h4>
                        <ul>
                            <li class="m-0">Prescription Drugs</li>
                            <li  class="m-0">OTC / Consumer Health</li>
                            <li  class="m-0">Generics & Biosimilars</li>
                            <li  class="m-0">Specialty Pharma</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/pharmacy.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-lg-0">
                    <div class="imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h4 class="title "
                            >Hospitals</h4>
                            <ul>
                            <li class="m-0">Multi-Speciality Hospitals</li>
                            <li class="m-0">Diagnostic Labs</li>
                            <li class="m-0">Nursing Homes</li>
                            <li class="m-0">Tele-medicine Platforms</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/hospital.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>

                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">
                    
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h4 class="title "
                            >Medical Devices</h4>
                        <ul>
                            <li class="m-0">Surgical Instruments</li>
                            <li class="m-0">Diagnostic Equipment</li>
                            <li class="m-0">Consumables & Disposables</li>
                            <li class="m-0">Wearables & IoT Devices</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/medical-devices.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                </div>
                <div class="col-lg-3 col-6 px-lg-4 mt-4 mt-lg-0">
                    
                    <div class=" imgmove px-lg-4 px-3 py-4 btnrad" style="box-shadow: 0px 20px 50px 0px rgba(0, 161, 224, 0.20);">
                        <h4 class="title "
                            >Distribution</h4>
                            <ul>
                            <li class="m-0">Pharma Distributors</li>
                            <li class="m-0">Medical Device OEMs</li>
                            <li class="m-0">Retail Pharmacy Chains</li>
                            <li class="m-0">Nutrition & Wellness Brands</li>
                            
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/centralized.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end ">
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
                        Health Care Industry Segments
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
                        Health Care Industry Segments
                    </h3>
                </div>
            <div class="slider_mobile-container col-9">
                <div class="slider_mobile-content mob_slide">
                    <!-- Slide 1 -->
                    <div class="slide_mobile mob_slide1">
                        <div class="image-box">
                           <div class=" imgmove px-lg-4 px-3 py-4 btnrad" >
                       <h4 class="title "
                            >Pharma</h4>
                        <ul>
                            <li class="m-0">Prescription Drugs</li>
                            <li  class="m-0">OTC / Consumer Health</li>
                            <li  class="m-0">Generics & Biosimilars</li>
                            <li  class="m-0">Specialty Pharma</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/pharmacy.png" class="img-fluid" style="width:100px;">
                                
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
                            >Hospitals</h4>
                            <ul>
                            <li class="m-0">Multi-Speciality Hospitals</li>
                            <li class="m-0">Diagnostic Labs</li>
                            <li class="m-0">Nursing Homes</li>
                            <li class="m-0">Tele-medicine Platforms</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/hospital.png" class="img-fluid" style="width:100px;">
                                
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
                            >Medical Devices
</h4>
                        <ul>
                            <li class="m-0">Surgical Instruments</li>
                            <li class="m-0">Diagnostic Equipment</li>
                            <li class="m-0">Consumables & Disposables</li>
                            <li class="m-0">Wearables & IoT Devices</li>
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/medical-devices.png" class="img-fluid" style="width:100px;">
                                
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
                        <h4 class="title "
                            >Distribution</h4>
                            <ul>
                            <li class="m-0">Pharma Distributors</li>
                            <li class="m-0">Medical Device OEMs</li>
                            <li class="m-0">Retail Pharmacy Chains</li>
                            <li class="m-0">Nutrition & Wellness Brands</li>
                            
                        </ul>
                        <div class="row pt-5">
                            <div class="col-lg-8 col-md-8 col-6 px-lg-0">
                                <img src="assets/images/automobile/centralized.png" class="img-fluid" style="width:100px;">
                                
                            </div>
                            <div class="col-lg-4 col-md-4 col-6 px-lg-0 align-self-center d-flex align-items-end h-100 justify-content-end ">
                                <div class="circle-loader mt-4"></div>
                            </div>
                        </div>
                            
                    </div>
                        </div>
                    </div>
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
		    bottom:-47%;
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
            bottom:-62% !important;
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
            bottom:-57%;
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
            bottom:-66% !important;
        }
            .hover-container .card-img-overlay12{
            bottom:-66% !important;
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
            bottom:-53% !important;
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
						Transforming today's healthcare organisations into tomorrow's patient-first leaders 
					</h3>
					<p class="mt-4 hidden-content">
					We've partnered with  leading healthcare organisations — including pharma companies, medical device manufacturers, nutrition brands and hospital networks — to implement cutting-edge Salesforce solutions that have elevated MR productivity, improved HCP engagement, and accelerated device distribution at scale. 
                </p>
				</div>
				<div class="slider swiper col-lg-12 px-0 hidden-content ">
					<div class="slides swiper-wrapper">
						<div class="slide  swiper-slide " style="background-image: url('image1.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/healthcare/healthcare.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute" style="padding-block:20px" id="overlay1">
										<h6 class="successGautam pb-1">
											SUCCESS STORY
										</h6>
										<h5 class="title mb-2 headGautam">Twin Health: Unifying Patient Engagement on Health Cloud</h5>
										<p class="card-text successslide pGautam">Twin Health deployed our Salesforce Health Cloud and Marketing Cloud solution to manage lab appointment scheduling, sample collection workflows, vaccine trial tracking, and NPD operations — enabling care teams to deliver a connected, personalised patient experience with 100% lead capture and automated marketing journey management.</p>
										<button style="padding:10px 30px;background-color:#00A1E0;" class="rounded-pill border-0 text-white successslidebutton ">Coming Soon</button>
									</div>

								</div>
							</div>
						</div>
						<div class="slide swiper-slide" style="background-image: url('image2.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/healthcare/healthcare1.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute" style="padding-block:20px" id="overlay2">
										<h6 class="successGautam pb-1">
											SUCCESS STORY
										</h6>
										<h5 class="title mb-2 headGautam">Allengers: Scaling Medical Device Field Sales Nationwide</h5>
										<p class="card-text successslide pGautam">Allengers, a leading healthcare device manufacturer, leveraged our Salesforce Sales Cloud-based automation solution to manage field sales operations — enabling reps to capture leads, manage hospital visits, and drive order fulfilment in real time, significantly improving field productivity and lead-to-order conversion across their national network.</p>
										<button style="padding:10px 30px;background-color:#00A1E0;" class="rounded-pill border-0 text-white successslidebutton">Coming Soon</button>
									</div>

								</div>
							</div>
						</div>
						
						<div class="slide active swiper-slide" style="background-image: url('image1.jpg');">
							<div class="content">
								<div class="position-relative hover-container h-100">
									<img src="assets/new-pages/healthcare/healthcare15.jpg"
										class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
									<div class="card-img-overlay2  px-3 position-absolute" id="overlay4"
										style="padding-block:20px">
										<h6 class="successGautam pb-1">
											SUCCESS STORY
										</h6>
										<h5 class="title mb-2 headGautam">Hindustan Syringes & Medical Devices: Streamlining SFA & Distribution</h5>
										<p class="card-text successslide pGautam">HMD (Dispo Van) implemented our Salesforce Sales Cloud solution to manage field sales automation and dealer distribution — enabling field teams to execute visits, capture orders, and track inventory in real time, resulting in measurably improved distribution efficiency and field force accountability.</p>
										<button style="padding:10px 30px;background-color:#00A1E0;" class="rounded-pill border-0 text-white successslidebutton ">Coming Soon</button>
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
						Transforming today's healthcare organisations into tomorrow's patient-first leaders 
</h3>
<p class="mt-4 hidden-content">
					We've partnered with  leading healthcare organisations — including pharma companies, medical device manufacturers, nutrition brands and hospital networks — to implement cutting-edge Salesforce solutions that have elevated MR productivity, improved HCP engagement, and accelerated device distribution at scale. 
</p>
</div>
<div class="slider col-lg-12 hidden-content ps-0">
<div class="slides1">
<div class="slide1 active" style="background-image: url('image1.jpg');">
<div class="content">
<div class="position-relative hover-container h-100">
<img src="assets/new-pages/healthcare/healthcare.jpg"
										class="object-fit-cover rounded-0 h-100" alt="Industry Image">
<div class="card-img-overlay2  px-3 position-absolute bottom-0"
										style="padding-block:27px">
<h6 style="font-size:16px" class="pb-3">
											SUCCESS STORY
</h6>
<h5 class="title mb-2">Euler Motors: Revolutionizing Fleet Management</h5>
<p class="card-text success slide">Euler Motors leveraged our Salesforce solutions to streamline their fleet operations, resulting in a 30% increase in efficiency and a significant reduction in operational costs.</p>
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
<img src="assets/new-pages/healthcare/healthcare15.jpg"
										class="object-fit-cover rounded-0 h-100" alt="Industry Image">
<div class="card-img-overlay2  px-3 position-absolute bottom-0"
										style="padding-block:27px">
<h6 style="font-size:16px" class="pb-3">
											SUCCESS STORY
</h6>
<h5 class="title mb-2">City Life EV: Enhancing Customer Experience</h5>
<p class="card-text succes sslide">City Life EV adopted our Salesforce platform to enhance customer engagement, leading to a 25% boost in customer satisfaction scores and improved sales conversion rates.</p>
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
                  <h1 class="pt-lg-5 col-lg-9 p-0 Unlocking hidden-content">Unlocking Value in Healthcare with Connected Data & AI</h1>
                  <p class="fw-normal mt-2 text-justif col-lg-10 p-0 p-lg-4 ps-lg-0 hidden-content" style="font-size:16px;">Discover how healthcare organisations can modernise operations, improve patient engagement, and drive better outcomes using AI-powered Salesforce solutions.</p>
                  
                  <div class="pt-3">
                      <a href="health_care_casestudy.php" class="cta-btn">Read Case Study</a>
                  </div>
            </div>
            
            <div class="col-lg-5 py-3 text-end d-lg-block d-none hidden-content">
                <img src="assets/new-pages/healthcare/healthunlock.jpg" class="" alt="Industry Image" style="border-radius:15px; height: 400px;">
            </div>
            <div class="col-lg-5 py-3 text-end hidden-content d-lg-none d-block">
                <img src="assets/new-pages/healthcare/healthunlock.jpg" class="" alt="Industry Image" style="border-radius:15px;">
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
<section class="py-5 py-lg-5 sectionscroll" id="sol4">
        <div class="container-sm  px-3">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <h3 class="hidden-content">
                        Our Insights
                    </h3>
                    <p class="my-4 hidden-content">
                        Our experts share insights on improving healthcare operations, enhancing patient engagement, and leveraging technology to drive better outcomes and growth.
                    </p>
                </div>

                <div class="row hidden-content">
                    <div class="col-lg-4  d-lg-block d-none">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/healthcare/insite1.jpg" class="btnrad object-fit-cover rounded-0 h-100"
                            alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Improving MR Productivity with Field Automation</h4>
                            <a class="learn-more" href="products.php?nm=DMS+for+Primary+Sales">
                                
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>
                
                <div class="col-lg-4 d-block d-lg-none">
                    <div class="position-relative hover-container">
                        <img src="assets/new-pages/healthcare/insite2.jpg" class="btnrad object-fit-cover rounded-0 "
                            alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Optimising Healthcare Operations with Data</h4>
                            <a class="learn-more" href="products.php?nm=DMS+for+Primary+Sales">
                                
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-3">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/healthcare/insite2.jpg" class="btnrad object-fit-cover rounded-0 h-100" alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Optimising Healthcare Operations with Data</h4>
                            <a class="learn-more" href="products.php?nm=Sales+Force+Automation+[SFA]">
                                
                             
                                <span class="button-text " style="text-transform: none;font-size: 16px;font-weight: 400;">Read More <img src="assets/images/automobile/Right arrow.png" class="ps-1"></span>

                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4 mt-lg-0 mt-3 ">
                    <div class="position-relative hover-container h-100">
                        <img src="assets/new-pages/healthcare/insite3.jpg" class="btnrad object-fit-cover rounded-0 h-100"
                            alt="Industry Image">
                        <div class="card-img-overlay1 py-3 px-3 position-absolute bottom-0">
                            <h4 class="title mb-2 error">Optimising Healthcare Operations with Data</h4>
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
    
    
<section class="py-5 my-5" style="background-color:#eaf5fe;" >
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

<?php require('include/footer.php'); ?>
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

