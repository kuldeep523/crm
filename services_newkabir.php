<?php include("admin/connection.php");
include("include/header.php"); ?>
<head>
    <title>Services-CRM Landing</title>
    <style>
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
    </style>
    <style>
        .industry-section {
        height: calc(70vh - 109px);
    }
   
    .left-col {
        background: linear-gradient(264deg, rgba(13, 66, 130, 0.00) 9.94%, white 28.58%, white 101.33%);
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
    
    .heroconsult{
        letter-spacing: 2px;
        font-weight: 500;
        font-size: 3.1rem;
        font-family: 'Outfit';
        line-height: 3.5rem;
        margin-top: -1rem;
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
        background-image: url('assets/images/solution/Image.jpg');
        height: 100%;
       background-size: 55% 100%;
       background-repeat:no-repeat;
       background-position:right top;
        animation: imagezoom 2s ease;
    }
    
    /*bg effect*/
     .bgeffect {
    width: 200px;
    height: 200px;
    background-color: #34cbb730;
    position: absolute;
    top: 185px;
    left:-80px;
    z-index: 0;
    border-radius: 50%;
    box-shadow: 0 0 70px 10px rgba(52, 203, 183, 0.3); /* Adds a blurred border */
} 
.bgeffect2{
    width: 200px;
    height: 200px;
    background-color: #0D89C833; /* Same as box-shadow color */
    position: absolute;
    top: -14%;
    left: -10%;
    z-index: -1;
    border-radius: 50%;
    box-shadow: 0 0 90px 37px rgba(13, 137, 200, 0.3); /* Matches the background color */

}
    
    .bookbtn{
        background-color:#DBF3FF ;
        border:2px solid #DBF3FF;
        border-radius:10px;
        transition:0.3s ease-in-out;
    }
    .bookbtn:hover{
        background-color:white;
        border:2px solid #0D89C8;
    }
    .overviewbg{
         background: linear-gradient(90deg, #0D89C8, #34CBB7);
         color:white;
         padding:5px 0px;
    }
    .overviewbg p a{
        color:white;
    }
    .shadowimg{
        /*width:140px;*/
        border-radius:15px;
        box-shadow: 1px 6px 20px #8B8B8B26;
    }
    
    .consult{
        background-color:#DBF3FF;
        position:absolute;
        border-radius:15px;
        top:150px;
        left:-100px;
        padding:10px 40px;
        box-shadow: -3px 6px 20px #8B8B8B26;
    }
    .consult h1{
        font-size:3.6rem;
        padding-top:0px !important;
        font-weight:520;
        background-image: linear-gradient(90deg, #0D89C8, #34CBB7);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }
    .consult p{
        font-size:16px;
    }
    
    .Projectdeliv{
        background-color:#defffb;
        position:absolute;
        border-radius:15px;
        top:270px;
        left:-45px;
        padding:10px 30px;
        box-shadow: -3px 6px 20px #8B8B8B26;
    }
    .Projectdeliv h1{
        font-size:3.6rem;
        padding-top:0px !important;
        font-weight:520;
        background-image: linear-gradient(90deg, #0D89C8, #34CBB7);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
    }
    .Projectdeliv p{
        font-size:16px;
    }
    
    .expteam{
        box-shadow: 1px 6px 20px #8B8B8B26;
        border-radius:15px;
        transition:background 0.5s ease;
    }
    .expteam:hover{
       background: linear-gradient(360deg, #0D89C8, #34CBB7);
       color:white;
    }
    .expteam:hover img {
    filter: grayscale(100%) brightness(200%);
    transition: filter 0.2s ease;
}

        /*arrow css*/
            .steps-container {
              display: flex;
              gap: 15px; 
            }
            
.step {
  position: relative;   
  background: #e8f2fd;
  color: black; 
  text-align: center;
  font-weight: 500;
  clip-path: polygon(0 0, calc(100% - 20px) 0, 100% 50%, calc(100% - 20px) 100%, 0 100%, 20px 50%);
  width: 150px; 
  height: 75px; 
  display: flex; 
  justify-content: center; 
  align-items: center; 
  overflow: visible; 
  z-index: 1; /* Ensure it stays on top */
}


            .step p{
                margin-bottom:0px;
            }
            
            .step:not(:last-child)::after {
              content: '';
              position: absolute;
              top: 0;
              right: -20px;
              width: 0;
              height: 0;
              border-style: solid;
              border-width: 37.5px 0 37.5px 20px; 
              border-color: transparent transparent transparent #007bff; 
            }
            .step:not(:first-child) {
              margin-left: 0; 
            }
            
    /*right scroll column css*/
        .timeline {
            position: relative;
            padding-left: 30px;
            border-left: 5px solid #e0e0e0;
        }
        .timeline-itemlast{
            border-left:none;
        }
        .timeline-item {
            margin-bottom: 40px;
            position:relative;
        }
        .timeline-icon {
            width: 58px;
            height: 58px;
            background-color: white;
            box-shadow: 1px 6px 20px #8B8B8B26;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            left: -85px;
            top: -15px;
        }
        .timeline-icon img{
            width:40px;
        }
        .timeline-item h5 {
            color: #0d89c8;
        }
        .timeline-item p {
            margin: 0;
        }
        .img-container img {
            max-width: 100%;
            border-radius: 5px;
        }
        
        
        .sec{
            position: relative;
            overflow:hidden;
        }

        .slider-wrapper12 {
            display: flex;
            
            transition: transform 0.5s ease;
            
        }

        .slide12 {
            width: 100%;
            flex-shrink: 0;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 442px;
        }
        .slide12 .subhea{
            line-height: 50px;
        }
        .ullll {
            position: absolute;
            bottom: 48px;
            margin: 0;
            display: flex;
            align-items: center ;
            left:4.5%;
        }

        .lll {
            color: #222;
            width: 12px;
            height: 12px;
            display: inline-block;
            background-color: #222;
            border-radius: 100%;
            margin-right: 10px;
            cursor: pointer;
        }

        .lll.is_active {
            width: 40px;
            height: 40px;
            color: #222;
            border: 1px solid #222;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
        }

        

        .content .col-lg-6 .image {
            max-width: 100%;
            height: auto;
        }
        .sec h6{
            color:#0d89c8;
        }
        
        .stickyimg{
                width: 523px;
                height: 523px;
                margin-left: 10px;
        }
    
        /*mobile*/
        @media (min-width: 100px) and (max-width: 424px){
            .consultingmobile1 h1{
                font-size:36px !important;
                font-weight:500 !important;
                line-height:45px !important;
            }
            .consultingmobile2 h1{
                font-size:21px !important;
                font-weight:600 !important;
                line-height:40px !important;
            }
            .one-stop{
                        padding-top: 180px !important;
                        font-size: 25px;
                        line-height: 40px;
                    }
            .slide12{
                height: 575px;
            }
             .ullll {
            bottom: 30px;
           
            left:1.5%;
        }
            .consult{
                top:180px !important;
                left:28px !important;
                padding:7px 25px !important;
            }
            .consult h1{
                font-size:2rem !important;
                /*padding-top:3px !important;*/
            }
           .Projectdeliv{
                top:290px !important;
                left:58px !important;
                padding:7px 10px !important;
            }
            .Projectdeliv h1{
                font-size:2rem !important;
                /*padding-top:2px !important;*/
            }
            .ulll{
                top:90% !important;
                left:3%!important;
            }
            .mobileframework h1{
                font-size:22px !important;
                line-height:33px !important;
            }
            .subhea{
                font-size:21px !important;
                line-height:34px !important;
                font-weight:550 !important;
            }
            .pra{
                font-size:14px !important;
            }
            .sec h6{
                font-size:16px !important;
            }
        }
        
        @media (min-width: 425px) and (max-width: 680px){
            .consultingmobile1 h1{
                font-size:38px !important;
                font-weight:500 !important;
                line-height:45px !important;
            }
            .consultingmobile2 h1{
                font-size:28px !important;
                font-weight:600 !important;
                line-height:45px !important;
            }
            .one-stop{
                padding-top:160px !important;
            }
            .slide12{
                height: 575px;
            }
            .ullll {
            bottom: 30px;
           
            left:1.5%;
        }
            .consult{
                top:200px !important;
                left:34px !important;
                padding:7px 25px !important;
            }
            .consult h1{
                font-size:2.9rem !important;
                padding-top:3px !important;
            }
            .Projectdeliv{
                top:310px !important;
                left:65px !important;
                padding:7px 20px !important;
            }
            .Projectdeliv h1{
                font-size:2.9rem !important;
                padding-top:3px !important;
            }
            .ulll{
                top:90% !important;
                left:3%!important;
            }
            .mobileframework h1{
                font-size:25px !important;
                line-height:38px !important;
            }
            .subhea{
                font-size:24px !important;
                line-height:40px !important;
                font-weight:600 !important;
            }
            .pra{
                font-size:14px !important;
            }
            .sec h6{
                font-size:16px !important;
            }
        }
        
       
        
        /*jaydeep 1280 * 631 screen*/
        @media (min-width:1275px) and (max-width:1300px) and (min-height:625px) and (max-height:650px){
            .industry-section {
                height: calc(67vh - 109px) !important;
            }
            
            .heroconsult{
                letter-spacing: 2px;
                font-weight: 500;
                font-size: 2.7rem !important;
                font-family: 'Outfit';
                line-height: 3.2rem;
                margin-top: -1rem;
            }
            .stickyimg{
                width:481px !important;
            }
            .step{
                width:130px !important;
            }
            .steps-container {
              display: flex;
              gap: 10px; 
            }
            .step p{
               font-size:15px !important;
            }
            .consultimg{
                margin-right:2rem !important;
                margin-left:0px !important;
            }
            .subhea {
                font-size: 34px !important;
            }
            
            
        }
        /*desktop*/
        @media (min-width:1236px) and (max-width:1245px)and (min-height:759px)and (max-height:769px){
                    .industry-section {
                height: calc(62.5vh - 109px) !important;
            }
            .subhea{
                font-size:34px !important;
            }
            .stickyimg{
                width:460px !important;
            }
            .step {
                width: 129px !important;
            }
            .one-stop{
                font-size: 35px !important;
                line-height: 43px !important;
            }
            .ullll {
               
                left: 5.5rem;
               
            }

        }
        /*kuldeep*/
        @media (min-width:1200px) and (max-width:1400px){
            .heroconsult{
                letter-spacing: 2px;
                font-weight: 500;
                font-size: 2.6rem;
                font-family: 'Outfit';
                line-height: 3.3rem;
                margin-top: -2rem;
            }
            .steps-container {
              display: flex;
              gap: 0px; 
            }
            .ullll{
                left:5.5rem;
            }
            .step {
              
              width: 145px; 
              
            }
             .consult{
               
                top:100px;
                left:-90px;
                padding:5px 25px;
            }
            .consult h1{
                font-size:3.2rem;
               
            }
            .Projectdeliv{
                top:205px !important;
                left:-35px;
                padding:5px 25px !important;
            }
            .Projectdeliv h1{
                font-size:3.2rem !important;
                padding-top:2px !important;
            }
            .stickyimg{
                width:450px !important;
                height:485px;
                    
            }
            .subhea {
                font-size: 34px !important;
            }
           
           .ullll {
               
                
                left: 5.5%;
                
            }
            .industry-section{
                height:calc(500px - 109px);
            }
        }
        @media (min-width: 1400px) {
    .heromt-Set {
        margin-top: 92px;
    }
}
    </style>
</head>
<!--===============PAGE CONTENT ==============-->



<div id="content " class="site-content " >
    <!--desktop hero section-->
    <section class="industry-section d-lg-block d-none">
        <div class="container-fluid p-0 dis None heromt-Set imageset position-relative" >
            <div class="row h-100">
                 
                <div class="col-lg-8   text-white ps-lg-5 p-0 px-4 left-col">
                    <div class="row h-100 align-items-center ">
                       <div class="col-xl-8 col-lg-9 col-12 ms-lg-5">
                            <!--<h6 class="industry-title">Industry</h6>-->
                        <h1 class="text-dark heroconsult themeSliderHeadingSet py-lg-4">Consulting & Implementation</h1>
                        <p class="le ad text-dark ">
                            Enhance customer satisfaction and loyalty through engaging and relevant customer experience.
                        </p>
                        <a href="#" class="btn bookbtn mt-3">Book a consulting call</a>
                       </div>
                    </div>
                </div>
                 
               <div class="bgeffect"></div>
            </div>
            
        </div>
    </section>
    <!--end hero section-->
    
    <!--mobile hero section-->
    <section class="pt-5 d-block d-lg-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 px-0">
                    <div class="position-relative">
                        <img src="assets/images/solution/Image.jpg" class="img-fluid" style="height:350px;object-fit:cover;">
                         <div class="position-absolute w-100 h-100 top-0 left-0" style=" background: linear-gradient(to top, #FFFFFF 0%, rgba(255, 255, 255, 0) 50%);">
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 pt-4 px-4 consultingmobile1">
                    <h1 class="text-dark themeSliderHeadingSet py-3 px-3">Consulting & Implementation</h1>
                        <p class="le ad text-dark px-3">
                            Enhance customer satisfaction and loyalty through engaging and relevant customer experience.
                        </p>
                        <a href="#" class="btn bookbtn mt-3 px-4 mx-3">Book a consulting call</a>
                </div>
            </div>
        </div>
    </section>
    <!--end mobile hero section-->
    
    
    <!--gradient bar section-->
    <section class=" w-100 d-lg-block d-none" >
        <div class="container-fluid">
            
            <div class="row px-5 p-0 d-lg-flex overviewbg" >
                <div class="col-lg-1"></div>
                <div class="col-lg-2 text-center">
                    <p class=" m-0">
                        <!--Overview-->
                        <a href="#overview" class="nav-linktab d-block py-2"> Overview</a>
                    </p>
                </div>
                   <div class="col-lg-2 text-center ">
                    <p class="m-0 ">
                        <a href="#consultion&implementationframework" class="nav-linktab d-block py-2">Consulting Framework</a>
                    </p>
                </div>
                   <div class="col-lg-2 text-center ">
                       <p class="m-0 ">
                            <a href="#whychooseus" class="nav-linktab d-block py-2">Why Choose Us</a>
                       </p>
                    </div>
                 <div class="col-lg-2 text-center ">
                      <p class="m-0 ">
                           <a href="#successstory" class="nav-linktab d-block py-2">Success Story</a>
                      </p>
                </div>
                 <div class="col-lg-2 text-center ">
                   <p class="m-0 ">
                        <a href="#faqs" class="nav-linktab d-block py-2">FAQ</a>
                   </p>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    
    
    <!--end gradient bar section-->
    
    <!--consulting service section-->
    <section class="py-5 mt-5 mt-lg-0 px-lg-4" id="overview">
        <div class="container-fluid pt-5 pt-lg-2 px-lg-5  px-2">
            <div class="row pt-lg-5">
                <div class="col-lg-8 consultingmobile2">
                    <h1 class="col-lg-10 col-12 ">India’s Leading Salesforce Consulting Service Provider</h1>
                    <p class="col-lg-10 pt-3">We are one of the India’s leading providers of Salesforce Consulting Services, Salesforce Development, , and professional 
                    Salesforce consultation across globe. As top-rated Salesforce consulting partner, we add significant value to your business 
                    by creating industry-specific CRM tools that drive revenue and enhance business growth.</p>
                    <div class="row pt-4 px-0 mx-3 mx-lg-0 col-lg-8">
                        <div class="col-lg-3 col-6 text-center">
                            <div class='shadowimg p-lg-2 p-3'>
                                <img src="assets/images/hero/summit_partner.png" class="img-fluid phone_image ">
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class='shadowimg p-lg-2 p-3'>
                                <img src="assets/images/hero/app_exchange.png" class="img-fluid phone_image">
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                            <div class='shadowimg p-lg-2 p-3'>
                                <img src="assets/images/hero/commerce_cloud.png" class="img-fluid phone_image">
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                            <div class='shadowimg p-lg-2 p-3'>
                                <img src="assets/images/hero/cloud_reseller.png" class="img-fluid phone_image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 position-relative d-lg-block d-none">
                    <div class=" consultimg h-100">
                        <img src="assets/images/solution/leading_salesforceimg.jpg" class="img-fluid h-100 " alt="" style="border-radius:20px">
                    </div>
                    <div class="bgeffect2 "></div>
                </div>
            </div>
            
        </div>
    </section>
    <!--end consulting service section-->
    <section>
        
    </section>
    <!--arrow design section-->
    <section class="d-lg-block d-none" id="consultion&implementationframework">
        <div class="container-fluid px-5 my-5">
            <div class="row">
                <div class="col-lg-12 text-center pb-5">
                     <h1>Consulting & Implementation Framework</h1>
                </div>
            </div>
            <div class="pt-3 d-flex align-items-center justify-content-center flex-wrap steps-container">
              <div class="step"><p>Discovery</p></div>
              <div class="step"><p>BRD</p></div>
              <div class="step"><p>Development</p></div>
              <div class="step"><p>UAT</p></div>
              <div class="step"><p>Data <br> Migration</p></div>
              <div class="step"><p>Training</p></div>
              <div class="step"><p>Deployment</p></div>
              <div class="step"><p>Hypercare</p></div>
            </div>
        </div>
    </section>
    <!--end arrow design section-->
    
    <section class="py-5 d-none d-lg-block" id="culture">
        <div class="container-fluid px-5">
            <div class="row mx-lg-5 position-relative">
                <div class="col-lg-6 pe-5 img-container " id="Features_scroll1">
                    <div >
                        <img src="assets/images/solution/CRML-Service-Page-graphicdesktop.png" class="img-fluid stickyimg" alt="Consulting & Implementation Framework" >
                   </div>
                </div>
                <div class="col-lg-6 d-none" id="extar">
                     
                </div>
            <!-- Right Column -->
            <div class="col-lg-6">
                <div class="timeline">
    <!-- Timeline Item 1 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/discoveryicon.png" class="img-fluid" alt="Discovery Icon">
        </div>
        <h5>Discovery</h5>
        <ul class="pt-3">
            <li>Pain Points</li>
            <li>Surface up latent needs</li>
            <li>Stakeholder Interviews</li>
            <li>Current State Analysis</li>
        </ul>
    </div>
    
    <!-- Timeline Item 2 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/brdicon.png" class="img-fluid" alt="BRD Icon">
        </div>
        <h5>Business Requirement Document (BRD)</h5>
        <ul class="pt-3">
            <li>Requirement Gathering</li>
            <li>Documentation</li>
            <li>Approval</li>
        </ul>
    </div>
    
    <!-- Timeline Item 3 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/developmenticon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Development</h5>
        <ul class="pt-3">
            <li>Solution Design</li>
            <li>Configuration and Customization</li>
            <li>Integration</li>
            <li>Custom Development</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/uaticon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>User Acceptance Testing (UAT)</h5>
        <ul class="pt-3">
            <li>Testing Planning</li>
            <li>UAT Execution</li>
            <li>Feedback Collection</li>
            <li>Bug Fixing</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/datamigration.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Data Migration</h5>
        <ul class="pt-3">
            <li>Data Assessment</li>
            <li>Data Mapping</li>
            <li>Migration Execution</li>
            <li>Validation</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/trainingicon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Training</h5>
        <ul class="pt-3">
            <li>Training Plan</li>
            <li>End-User Training</li>
            <li>Administrator Training</li>
            <li>Training Materials </li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/production_development-con.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Production Deployment</h5>
        <ul class="pt-3">
            <li>Deployment Planning</li>
            <li>Pre-Deplayment Testing</li>
            <li>Transition</li>
            
        </ul>
    </div>
    <div class="timeline-item timeline-itemlast mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/hypercare.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Hypercare</h5>
        <ul class="pt-3">
            <li>Post-Go-Live Support</li>
            <li>Performance Monitoring</li>
            <li>Issue Resolution</li>
            <li>System Optimization</li>
            
        </ul>
    </div>
</div>

            </div>
            </div>
        </div>
    </section>
    
    <!--mobile section-->
    <section class="py-5 d-block d-lg-none">
        <div class="container-fluid px-4">
            <div class="row ">
                <div class="col-12 text-center mobileframework">
                    <h1>Consulting & Implementation Framework</h1>
                </div>
                <div class="col-lg-6 img-container position-relative py-5" >
                <img src="assets/images/solution/CRML-Service-Page-graphic.jpg" class="img-fluid" alt="Consulting & Implementation Framework">
               
            </div>
            <!-- Right Column -->
            <div class="col-lg-6 px-4">
                <div class="timeline">
    <!-- Timeline Item 1 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/discoveryicon.png" class="img-fluid" alt="Discovery Icon">
        </div>
        <h5>Discovery</h5>
        <ul class="pt-3">
            <li>Pain Points</li>
            <li>Surface up latent needs</li>
            <li>Stakeholder Interviews</li>
            <li>Current State Analysis</li>
        </ul>
    </div>
    
    <!-- Timeline Item 2 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/brdicon.png" class="img-fluid" alt="BRD Icon">
        </div>
        <h5>Business Requirement Document (BRD)</h5>
        <ul class="pt-3">
            <li>Requirement Gathering</li>
            <li>Documentation</li>
            <li>Approval</li>
        </ul>
    </div>
    
    <!-- Timeline Item 3 -->
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/developmenticon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Development</h5>
        <ul class="pt-3">
            <li>Solution Design</li>
            <li>Configuration and Customization</li>
            <li>Integration</li>
            <li>Custom Development</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/uaticon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>User Acceptance Testing (UAT)</h5>
        <ul class="pt-3">
            <li>Testing Planning</li>
            <li>UAT Execution</li>
            <li>Feedback Collection</li>
            <li>Bug Fixing</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/datamigration.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Data Migration</h5>
        <ul class="pt-3">
            <li>Data Assessment</li>
            <li>Data Mapping</li>
            <li>Migration Execution</li>
            <li>Validation</li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/trainingicon.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Training</h5>
        <ul class="pt-3">
            <li>Training Plan</li>
            <li>End-User Training</li>
            <li>Administrator Training</li>
            <li>Training Materials </li>
        </ul>
    </div>
    
    <div class="timeline-item mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/production_development-con.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Production Deployment</h5>
        <ul class="pt-3">
            <li>Deployment Planning</li>
            <li>Pre-Deplayment Testing</li>
            <li>Transition</li>
            
        </ul>
    </div>
    <div class="timeline-item timeline-itemlast mx-4">
        <div class="timeline-icon p-3">
            <img src="assets/images/solution/hypercare.png" class="img-fluid" alt="Development Icon">
        </div>
        <h5>Hypercare</h5>
        <ul class="pt-3">
            <li>Post-Go-Live Support</li>
            <li>Performance Monitoring</li>
            <li>Issue Resolution</li>
            <li>System Optimization</li>
            
        </ul>
    </div>
</div>

            </div>
            </div>
        </div>
    </section>
    <!--end mobile section-->
    
    <script>
        window.addEventListener('scroll', function() {
      
        const scrollingPoint = window.scrollY;
        const cultureElement = document.getElementById("culture");
        const extar = document.getElementById("extar");
        section_point=cultureElement.getBoundingClientRect().top;
        console.log(section_point);
        const header1 = parseInt(document.querySelector(".header").offsetHeight);
        
        const featuresElement = document.getElementById("Features_scroll1");
        
            if ( section_point <= 50 && section_point >= -967) {
            featuresElement.style.position = "fixed";
            featuresElement.style.zIndex = "99";
            extar.classList.remove("d-none");
            featuresElement.style.top= header1+"px";
            
            
           
            // featuresElement.style.bottom = "0px";
        } 
        else if (section_point <= -967) {
            featuresElement.style.position = "absolute";
            featuresElement.style.top = "";
            featuresElement.style.bottom = "0";
         
        } 
        else {
            featuresElement.style.position = "static";
         extar.classList.add("d-none");
        }
       
    });
    </script>
    <!--why choose us section-->
    
    
    <section class="py-5" id="whychooseus">
        <div class="container-fluid px-3 px-lg-5">
            <div class="row pt-lg-5 ">
                <div class="col-lg-12 pb-5 text-center">
                    <h1>Why Choose Us</h1>
                </div>
                
            </div>
            <div class="row pt-lg-2 flex-lg-row flex-column-reverse align-items-center">
                <div class="col-lg-6 ">
                    <h1 class="col-lg-10 ms-lg-4 one-stop">One-Stop Solution to all your Salesforce Needs</h1>
                    <p class="col-lg-9 ms-lg-4 pt-4">We are one of the India’s leading providers of Salesforce Consulting Services, Salesforce 
                    Development, , and professional Salesforce consultation across globe. As top-rated Salesforce consulting partner.</p>
                    
                </div>
                <div class="col-lg-6 pt-3 position-relative ">
                    <div class="consult d-flex gap-3 align-items-center">
                        <div>
                            <h1>150+</h1>
                        </div>
                        <div>
                            <h5>Consultants</h5>
                            <p>Worldwide</p>
                        </div>
                    </div>
                    
                    <div class="Projectdeliv d-flex gap-3 align-items-center">
                        <div>
                            <h1>100+</h1>
                        </div>
                        <div>
                            <h5>Projects Delivered</h5>
                            <p>Across Industries</p>
                        </div>
                    </div>
                    <div class="mx-lg-5">
                        <img src="assets/images/solution/why-choose-us.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--end why choose us-->
    
    <section class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-6">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/experiencedteamicon.png" class="img-fluid mt-2" alt="Experienced Team">
                        <p class="pt-2 mb-0">Experienced  Team</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/proventrackrecord.png" class="img-fluid mt-2" alt="Proven Track Record">
                        <p class="pt-2 mb-0">Proven Track Record</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/comphrensive.png" class="img-fluid mt-2" alt="Comprehensive Solutions">
                        <p class="pt-2 mb-0">Comprehensive Solutions</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/client-centric.png" class="img-fluid mt-2" alt="Client-Centric Approach">
                        <p class="pt-2 mb-0">Client-Centric Approach</p>
                    </div>
                </div>
                
            </div>
            <div class="row text-center pt-4 pt-lg-5">
                <div class="col-lg-3 col-6">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/cutting-edge.png" class="img-fluid mt-2" alt="Cutting-Edge Technology">
                        <p class="pt-2 mb-0">Cutting-Edge Technology</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/tailored.png" class="img-fluid mt-2" alt="Tailored Strategies">
                        <p class="pt-2 mb-0">Tailored Strategies</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/warranty.png" class="img-fluid mt-2" alt="Warranty Support">
                        <p class="pt-2 mb-0">Warranty Support</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 mt-lg-0 mt-4">
                    <div class="expteam mx-lg-4 mx-2 p-lg-3 p-2 h-100">
                        <img src="assets/images/solution/cost-effective.png" class="img-fluid mt-2" alt="Cost-Effective Services">
                        <p class="pt-2 mb-0">Cost-Effective Services</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
     
    
    <!--slider-->
<section class="py-5" id="successstory">
       <div class="sec" style="background:#EAF5FE;">
            <div class="slider-wrapper12" >
            <div class="slide12" >
                <div class="content row ps-lg-4 align-items-lg-center h-100 ">
                     <div class="col-lg-5 px-0  position-relative d-lg-none d-block">
                        <img src="assets/images/case/new2.jpg" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(to top, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                       <h6 class="col-lg-9">Success Story</h6>
                        <h1 class=" subhea col-lg-11 pt-3">How Lohia Group Increased Conversions and Streamlined Customer Experience</h1>
                        <p class="  pra col-lg-11 py-4 mb-5">Lohia Group, a renowned machinery manufacturer, faced challenges with quote generation, impacting conversion rates and customer experience. </p>
                    </div>
                    <div class="col-lg-5 px-0 h-100 position-relative d-lg-block d-none">
                        <img src="assets/images/case/new2.jpg" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(to top, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide12" >
                <div class="content row ps-lg-4 align-items-lg-center h-100">
                     <div class="col-lg-5 px-0  position-relative d-lg-none d-block">
                        <img src="assets/images/case/new1.png" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(to top, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                       <h6 class="col-lg-9">Success Story</h6>
                        <h1 class=" subhea col-lg-11 pt-3">World's Largest Cycle Manufacturer Boosted Sales and Streamlined Operations CRM Solution</h1>
                        <p class="  pra col-lg-11 py-4 mb-5">The company dramatically improved its sales and operations by integrating advanced technologies with Salesforce to streamline processes, enhance dealer management, and drive unprecedented growth in a competitive market.</p>
                    </div>
                    <div class="col-lg-5 px-0 h-100 position-relative d-lg-block d-none">
                        <img src="assets/images/case/new1.png" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(toup, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide12" >
                <div class="content row ps-lg-4 align-items-lg-center h-100">
                    <div class="col-lg-5 px-0  position-relative d-lg-none d-block">
                        <img src="assets/images/case/new3.jpg" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(90deg, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                    <div class="col-lg-7 ps-lg-5">
                       <h6 class="col-lg-9">Success Story</h6>
                        <h1 class=" subhea col-lg-11 pt-3">Global SCM Solutions Provider Transforms Content Management with Automatic Language Adaptation</h1>
                        <p class="  pra col-lg-11 py-4 mb-5">Client: UPS (United Parcel Service) One of the Biggest & Global SCM Solutions Providers<br>
Industry: Supply Chain & Logistics<br>
Cloud: Service & Experience</p>
                    </div>
                    <div class="col-lg-5 px-0 h-100 position-relative d-lg-block d-none">
                        <img src="assets/images/case/new3.jpg" alt="" class="img-fluid w-100 h-100" style="object-fit:cover">
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(90deg, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul type="none" class="ullll">
            <li class="is_active lll" data-index="0"></li>
            <li class="lll" data-index="1"></li>
            <li class="lll" data-index="2"></li>
        </ul>
       </div>
    </section>
     <script>
        const sliderWrapper = document.querySelector('.slider-wrapper12');
        const slides = document.querySelectorAll('.slide12');
        const dots = document.querySelectorAll('.lll');
        let currentIndex = 0;

        function updateSlider(index) {
            const offset = -index * 100;
            sliderWrapper.style.transform = `translateX(${offset}%)`;
            dots.forEach(dot => {
                dot.classList.remove('is_active');
                dot.innerText = '';
            });
            dots[index].classList.add('is_active');
            dots[index].innerText = index+1;
        }

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                currentIndex = parseInt(dot.getAttribute('data-index'));
                updateSlider(currentIndex);
            });
        });

        updateSlider(currentIndex);
    </script>
<!--<section class=" py-5" id="successstory">-->
    
<!--        <div class="sec">-->
<!--            <div class="container-fluid pe-0" >-->
<!--            <div class="row ps-lg-5 flex-lg-row flex-column-reverse" >-->
<!--                <div class="col-lg-7 py-5 px-lg-5">-->
<!--                    <h6 class="col-lg-9">Success Story</h6>-->
                    <!--<h1 class=" hea col-lg-10">More Case Study</h1>-->
<!--                    <h1 class=" subhea col-lg-11 pt-3">National level Cycle Manufacturer leverages Sales & Service</h1>-->
<!--                    <p class="  pra col-lg-8 py-4">Our client achieves a comprehensive 360-degree management view through Dealer Onboarding, Beat Planning, and Order Management.</p>-->
<!--                </div>-->
<!--                <div class="col-lg-5 px-0">-->
<!--                    <img src="assets/images/solution/sliderimage.jpg" alt=""  class="image img-fluid h-100" style="object-fit:cover;">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <ul type="none" class="ulll">-->
<!--            <li class="is_active lll" image="assets/images/solution/sliderimage.jpg" hea="More Case Study" subhea="National level Cycle Manufacturer leverages Sales & Service" pra="Our client achieves a comprehensive 360-degree management view through Dealer Onboarding, Beat Planning, and Order Management.">1</li>-->
<!--            <li class="lll" image="assets/images/solution/sliderimage.jpg" hea="Morethen Case Study" subhea="National level1 Cycle Manufacturer leverages Sales & Service" pra="Our client achieves1 a comprehensive 360-degree management view through Dealer Onboarding, Beat Planning, and Order Management.">2</li>-->
<!--            <li class="lll" image="assets/images/solution/sliderimage.jpg" hea="Moreless Case Study" subhea="National level2 Cycle Manufacturer leverages Sales & Service" pra="Our client achieves2 a comprehensive 360-degree management view through Dealer Onboarding, Beat Planning, and Order Management.">3</li>-->
           
<!--        </ul>-->
<!--        </div>-->
<!--   </section>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
        // var tabNames = [];
        // Loop through all li elements and grab data, push them into an array of objects
        // $('.lll').each(function (index) {
        //     var _this = $(this);
        //     var elem = {};
        //     elem.name = _this.text();
        //     elem.color = _this.attr('color');
        //     elem.hea = _this.attr('hea');
        //     elem.subhea = _this.attr('subhea');
        //     elem.pra = _this.attr('pra');
        //     elem.image = _this.attr('image');
        //     tabNames.push(elem);
            // If this li is active, apply its data to the body
        //     if (_this.hasClass('is_active')) {
        //         $('.sec').css('background-color', elem.color);
        //         $('.hea').text(elem.hea);
        //         $('.subhea').text(elem.subhea);
        //         $('.pra').text(elem.pra);
        //         $('.image').attr('src', elem.image);
        //     }
        //     else {
        //         _this.text('');
        //     }
        // });
 
        // $('.lll').on('click', function (e) {
        //     var _this = $(this);
        //     var _idx = _this.index();
        //     _this.addClass('is_active');
        //     _this.text(tabNames[_idx].name);
        //     $('.sec').css('background-color', tabNames[_idx].color);
        //     $('.hea').text(tabNames[_idx].hea);
        //     $('.subhea').text(tabNames[_idx].subhea);
        //     $('.pra').text(tabNames[_idx].pra);
        //     $('.image').attr('src', tabNames[_idx].image);
        //     _this.siblings().text('');
        //     _this.siblings().removeClass('is_active');
        // });
    </script>
    <!--end slider-->
    
    
    <!--faqs-->
    <section class="py-5" id="faqs">
    <div class="container-fluid px-4 px-lg-5">
        <div class="title_all_box style_three text-center dark_color">
            <div class="title_sections three row">
                <h3 class="p-3 text-center" style="text-align: left;">FAQ's</h3>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_10"></div>
            <!--===============spacing==============-->
        </div>
        <style>
            .accordion {
                margin: 1em 0;
            }
            .accordion-item {
                border: 1px solid #C9C9C9;
            }
            .accordion-header {
                cursor: pointer;
                padding: 1em;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .accordion-header:hover {
                background-color: #e7e7e7;
            }
            .accordion-body {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                padding: 0 1em;
                border: 1px solid #C9C9C9;
                border-left: none;
                border-right: none;
            }
            .accordion-body.show {
                max-height: 200px; /* Adjust as needed */
                padding: 1em;
            }
            .accordion-icon {
                font-size: 2em;
                line-height: 0.75em;
                transition: transform 0.3s ease;
                color:#0e8ac8;
            }
        </style>

        <div class="accordion mx-lg-5">
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>What is Salesforce Implementation?</span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                   Salesforce Implementation involves setting up and customizing Salesforce CRM to meet the specific needs of your business. This includes configuring the platform, migrating data, integrating with other systems, and training users to ensure a seamless transition and optimal use of Salesforce. 
                   </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>How long does a Salesforce Implementation take?</span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    The duration of a Salesforce Implementation project can vary based on the complexity and specific requirements of your business. Typically, a standard implementation can take anywhere from a few weeks to several months. We will provide a detailed timeline after assessing your needs. 
                    </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>What are the benefits of implementing Salesforce for my business?</span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    Implementing Salesforce offers numerous benefits, including improved customer relationship management, streamlined sales and marketing processes, enhanced collaboration, better data analytics, and overall increased efficiency and productivity. 
                    </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>What is Account Engagement (Pardot) and how can it help my business?</span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    Account Engagement, powered by Pardot, is a marketing automation solution that helps businesses create meaningful connections, generate more pipeline, and empower sales to close more deals. It allows for targeted email campaigns, lead nurturing, and advanced analytics to optimize marketing efforts. 
                </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>What is Account Engagement (Pardot) and how can it help my business? </span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    ERP (Producer Responsibility) in the context of Salesforce refers to integrating your ERP system with Salesforce to manage your business operations more effectively. This integration helps ensure compliance with industry regulations, improves inventory management, and enhances overall operational efficiency. 
                    </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>Do you offer training and support after implementation? </span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    Absolutely. Salesforce is highly flexible and can be integrated with a wide range of other systems, including ERP, marketing automation, customer support, and other business applications. We can help you set up and manage these integrations to ensure seamless data flow and operational efficiency. 
                    </div>
            </div>
        </div>

        <script>
            function toggleAccordion(event) {
                const header = event.currentTarget;
                const body = header.nextElementSibling;
                const icon = header.querySelector('.accordion-icon');
                const isExpanded = body.classList.toggle('show');

                const allBodies = document.querySelectorAll('.accordion-body');
                const allIcons = document.querySelectorAll('.accordion-icon');

                allBodies.forEach((b) => {
                    if (b !== body) {
                        b.classList.remove('show');
                        b.style.maxHeight = null;
                    }
                });

                allIcons.forEach((i) => {
                    if (i !== icon) {
                        i.textContent = '+';
                    }
                });

                icon.textContent = isExpanded ? '-' : '+';
                body.style.maxHeight = isExpanded ? body.scrollHeight + "px" : null;
            }
        </script>
    </div>
</section>
    <!--end faqs-->
    
    
    <!--form-->
<section class="py-5 my-5" style="background-color:#eaf5fe;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                 <h2 class="mb-5 text-center">Get <span style="color:#00A1E0">Zero-Cost Salesforce</span> Consultation </h2>
            </div>
            <div class="col-lg-6">
                       <form class="" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <div class="group">
                                            <input type="text" class="input1 border-0 text-dark" name="name" style="background-color:#fff;" id="inputname1" pattern="[a-z A-Z]*" oninput="g1()" required="">
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label id="nameLable1">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <div class="group">
                                            <input type="text" class="input1 border-0 text-dark" onchange(new())="" name="email" id="input12" onchange="e1()" style="background-color:#fff;" required="">
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
                                                <input type="text" class="input1 border-0 text-dark" id="myInput1" maxlength="11" minlength="10" onchange(new())="" oninput="f1(this)" name="contact" style="background-color:#fff;" required="">
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
                                            <textarea type="text" class="input1 border-0 text-dark" style="background-color:#fff;color: white; width: 100%;resize:none" onfocus="label_area()" name="message" id="text_area" style=""></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label id="label_area" class="label_textarea">Message</label>
                                        </div>
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
                                    <div class="col-lg-12 mt-4 ">
                                      
                                            <div class="mt-3 d-flex flex-lg-row flex-column justify-content-between">
                                                
                      
                                                
                                               
                                                    <input type="hidden" value="0" id="callReq" name="callReq">
                                                    <input type="hidden" value="0" id="validEmail1">
                                                    <input type="hidden" value="0" id="validPhonenumber1">
                                                    <input type="submit" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="background-color:#fff;border:none;border-radius: 50px;width:auto;font-size:18px;">
                                                   <input type="button" value="SUBMIT" class="inptypeSubBtn d-none" style="background-color:#fff;color:black !important;">
                                              
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            
        </div>
    </div>
</section>
    <!--form-->
<?php require('include/footer.php'); ?>