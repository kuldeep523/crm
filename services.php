
<?php include("admin/connection.php");
include("include/header.php"); ?>
<script>
    element_usernames = document.querySelectorAll(".username");
                Array.from(element_usernames).forEach(element_username => {
                    element_username.addEventListener('click', () => {
                        // Remove 'active' class from all elements
                       alert("yes");
                    });
                });
</script>
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
       padding:20px 15px !important;
        display: block;
        width: 185px;
        border: none;
        border-bottom: 1px solid #6c6c6c;
        background: #fff !important;
        color: #000000;
    }
    .input_service {
        font-size: 16px;
       padding:20px 15px !important;
        display: block;
        width: 185px;
        border: none;
        border-bottom: 1px solid #6c6c6c;
        background: #fff !important;
        color: #000000;
    }
    input::placeholder,textarea::placeholder{
        color: #999;
        font-size:16px;
    }
    

    select {
        color: white !important;
    }

   .input_service:focus {
        outline: none;
        background-color: #fff !important;
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

.input1:focus-within{
    background-color:#fff !important;
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
              gap: 20px; 
            }
            
.step {
    width: 150px;
    height: 75px;
    padding-left:20px;
    position: relative;
    text-align:center;
    background: white;
    box-shadow: 15px 15px 17px #0D89C833;
    display:flex;
    justify-content:center;
    align-items:center;
    z-index:1;
}
.step:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 20px solid #daedf763; 
            border-top: 37.5px solid transparent;
            border-bottom: 37.5px solid transparent;
        }
        
        .step2:after {
            border-left: 0 !important; 
        }
    
        .step:before {
            content: "";
            position: absolute;
            right: -20px; 
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 20px solid white;
            border-top: 38.5px solid transparent;
            border-bottom: 37.5px solid transparent;
        }

            .step p{
                margin-bottom:0px;
                 z-index:1;
            }
            
            
            /*.step:not(:last-child)::after {*/
            /*  content: '';*/
            /*  position: absolute;*/
            /*  top: 0;*/
            /*  right: -20px;*/
            /*  width: 0;*/
            /*  height: 0;*/
            /*  border-style: solid;*/
            /*  border-width: 37.5px 0 37.5px 20px; */
            /*  border-color: transparent transparent transparent #007bff; */
            /*}*/
            /*.step:not(:first-child) {*/
            /*  margin-left: 0; */
            /*}*/
            
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
                /*height: 523px;*/
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
                height: 640px;
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
                height: 640px;
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
        
        @media (min-width:768px) and (min-height:1024px){
            .one-stop{
                padding-top:160px !important;
            }
            .consult{
                top:420px !important;
                left:50px !important;
                padding:7px 25px !important;
            }
            .Projectdeliv{
                top:525px !important;
                left:135px !important;
                padding:7px 20px !important;
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
            .steps-container {
              display: flex;
              gap: 20px !important; 
            }
            .step{
                width:118px !important;
            }
            .step:after {
            content: "";
            position: absolute;
            left: 0px;
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 20px solid #daedf763;
            border-top: 37.5px solid transparent;
            border-bottom: 37.5px solid transparent;
            /*filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));*/
        }
    
        .step:before {
            content: "";
            position: absolute;
            right: -20px; 
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 21.5px solid white;
            border-top: 38.5px solid transparent;
            border-bottom: 37.5px solid transparent;
            /*filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));*/
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
            .steps-container {
              display: flex;
              gap: 15px !important; 
            }
            .step {
                width: 119px !important;
            }
            
            .step:after {
                content: "";
                position: absolute;
                left: 0px;
                bottom: 0;
                width: 0;
                height: 0;
                border-left: 20px solid #daedf763;
                border-top: 37.5px solid transparent;
                border-bottom: 37.5px solid transparent;
                /*filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));*/
            }
        
            .step:before {
                content: "";
                position: absolute;
                right: -31px; 
                bottom: 0;
                width: 0;
                height: 0;
                border-left: 32.5px solid white;
                border-top: 38.5px solid transparent;
                border-bottom: 37.5px solid transparent;
                /*filter: drop-shadow(0 4px 10px rgba(0, 0, 0, 0.2));*/
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
              gap: 18px; 
            }
            .ullll{
                left:5.5rem;
            }
            .step {
              
              width: 130px; 
              
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
                /*height:485px;*/
                    
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
        @media (min-width: 1401px) {
    .heromt-Set {
        margin-top: 92px;
    }
    .steps-container {
              display: flex;
              gap: 20px; 
            }
}

        @media (min-width:1494px) and (min-height:934px){
    .industry-section{
                height:calc(500px - 109px) !important;
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
                        <a href="#form_insert" class="btn bookbtn mt-3">Book a consulting call</a>
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
                        <p class="l ead text-dark px-3">
                            Enhance customer satisfaction and loyalty through engaging and relevant customer experience.
                        </p>
                        <a href="#form_insert" class="btn bookbtn mt-3 px-4 mx-3">Book a consulting call</a>
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
              <div class="step step2"><p>Discovery</p></div>
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
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(to right, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
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
                        <div class="position-absolute w-100 h-100 top-0 left-0" style="background: linear-gradient(to right, #EAF5FE 0%, rgba(234, 245, 254, 0) 20%);">
                            
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
                    <span>What is ERP (Producer Responsibility) and why is it important?</span>
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
    
    <style>
        select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
     background: url() !important;
}
    </style>
    <!--form-->
<section class="py-5 my-5" style="background-color:#eaf5fe;" id="form_insert">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                 <h2 class="mb-5 text-center">Get Zero-Cost Salesforce Consultation </h2>
            </div>
            <div class="col-lg-8 col-md-12 row ">
                    <div class="pd_top_10"></div>
                    <div class="item_scubscribe">
                        <div class="input_group">
                          
<form method="post" action="" autocomplete="off">
    <div class="row">
        <div class="col-lg-6">
            <div class="group">
                <input type="text" class="input1 username border-0" name="name" placeholder="Name" id="input13" pattern="[a-zA-Z ]*" oninput="g3()" required autocomplete="off"/>
            </div>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-3">
            <div class="group">
                <input type="text" class="input1 input_service border-0" name="email" id="input12" onchange="e3()" placeholder="Email" required autocomplete="off"/>
            </div>
            <div class="error fs-6 text-danger" id="emailError1"></div>
            <div class="error fs-6 text-success" id="emailSuccess1"></div>
        </div>
        <div class="col-lg-6 row mx-0 mt-3">
            <div class="col-4 p-0 position-relative" style="font-size:16px !important">
                <select name="countryCode" required="" class="state_select select2-hidden-accessible border-0" style="background-color: #fff !important;color:#999 !important;">
                                                <option data-countrycode="US" value="USA (+1)">USA (+1)</option>
                                                <option data-countrycode="GB" value="UK (+44)">UK (+44)</option>
                                                <option data-countrycode="Andorra" value="Andorra (+376)">AD (+376)</option>
                                                <option data-countrycode="AO" value="Angola (+244)">AO (+244)</option>
                                                <option data-countrycode="AI" value="Anguilla (+1264)">AI (+1264)</option>
                                                <option data-countrycode="AG" value="Antigua Barbuda (+1268)">AG (+1268)</option>
                                                <option data-countrycode="AR" value="Argentina (+54)">AR (+54)</option>
                                                <option data-countrycode="AM" value="Armenia (+374)">AM (+374)</option>
                                                <option data-countrycode="AW" value="Aruba (+297)">AW (+297)</option>
                                                <option data-countrycode="AU" value="Australia (+61)">AU (+61)</option>
                                                <option data-countrycode="AT" value="Austria (+43)">AT (+43)</option>
                                                <option data-countrycode="AZ" value="Azerbaijan (+994)">AZ (+994)</option>
                                                <option data-countrycode="BS" value="Bahamas (+1242)">BS (+1242)</option>
                                                <option data-countrycode="BH" value="Bahrain (+973)">BH (+973)</option>
                                                <option data-countrycode="BD" value="Bangladesh (+880)">BD (+880)</option>
                                                <option data-countrycode="BB" value="Barbados (+1246)">BB (+1246)</option>
                                                <option data-countrycode="BY" value="Belarus (+375)">BY (+375)</option>
                                                <option data-countrycode="BE" value="Belgium (+32)">BE (+32)</option>
                                                <option data-countrycode="BZ" value="Belize (+501)">BZ (+501)</option>
                                                <option data-countrycode="BJ" value="Benin (+229)">BJ (+229)</option>
                                                <option data-countrycode="BM" value="Bermuda (+1441)">BM (+1441)</option>
                                                <option data-countrycode="BT" value="Bhutan (+975)">BT (+975)</option>
                                                <option data-countrycode="BO" value="Bolivia (+591)">BO (+591)</option>
                                                <option data-countrycode="BA" value="Bosnia Herzegovina (+387)">BA (+387)</option>
                                                <option data-countrycode="BW" value="Botswana (+267)">BW (+267)</option>
                                                <option data-countrycode="BR" value="Brazil (+55)">BR (+55)</option>
                                                <option data-countrycode="BN" value="Brunei (+673)">BN (+673)</option>
                                                <option data-countrycode="BG" value="Bulgaria (+359)">BG (+359)</option>
                                                <option data-countrycode="BF" value="Burkina Faso (+226)">BF (+226)</option>
                                                <option data-countrycode="BI" value="Burundi (+257)">BI (+257)</option>
                                                <option data-countrycode="KH" value="Cambodia (+855)">KH (+855)</option>
                                                <option data-countrycode="CM" value="Cameroon (+237)">CM (+237)</option>
                                                <option data-countrycode="CA" value="Canada (+1)">CA (+1)</option>
                                                <option data-countrycode="CV" value="Cape Verde Islands (+238)">CV (+238)</option>
                                                <option data-countrycode="KY" value="Cayman Islands (+1345)">KY (+1345)</option>
                                                <option data-countrycode="CF" value="Central African Republic (+236)">CF (+236)</option>
                                                <option data-countrycode="CL" value="Chile (+56)">CL (+56)</option>
                                                <option data-countrycode="CN" value="China (+86)">CN (+86)</option>
                                                <option data-countrycode="CO" value="Colombia (+57)">CO (+57)</option>
                                                <option data-countrycode="KM" value="Comoros (+269)">KM (+269)</option>
                                                <option data-countrycode="CG" value="Congo (+242)">CG (+242)</option>
                                                <option data-countrycode="CK" value="Cook Islands (+682)">CK (+682)</option>
                                                <option data-countrycode="CR" value="Costa Rica (+506)">CR (+506)</option>
                                                <option data-countrycode="HR" value="Croatia (+385)">HR (+385)</option>
                                                <option data-countrycode="CU" value="Cuba (+53)">CU (+53)</option>
                                                <option data-countrycode="CY" value="Cyprus North (+90392)">CY (+90392)</option>
                                                <option data-countrycode="CY" value="Cyprus South (+357)">CY (+357)</option>
                                                <option data-countrycode="CZ" value="Czech Republic (+42)">CZ (+42)</option>
                                                <option data-countrycode="DK" value="Denmark (+45)">DK (+45)</option>
                                                <option data-countrycode="DJ" value="Djibouti (+253)">DJ (+253)</option>
                                                <option data-countrycode="DM" value="Dominica (+1809)">DM (+1809)</option>
                                                <option data-countrycode="DO" value="Dominican Republic (+1809)"> (+1809)</option>
                                                <option data-countrycode="EC" value="Ecuador (+593)">EC (+593)</option>
                                                <option data-countrycode="EG" value="Egypt (+20)">EG (+20)</option>
                                                <option data-countrycode="SV" value="El Salvador (+503)">SV (+503)</option>
                                                <option data-countrycode="GQ" value="Equatorial Guinea (+240)">GQ (+240)</option>
                                                <option data-countrycode="ER" value="Eritrea (+291)">ER (+291)</option>
                                                <option data-countrycode="EE" value="Estonia (+372)">EE (+372)</option>
                                                <option data-countrycode="ET" value="Ethiopia (+251)">ET (+251)</option>
                                                <option data-countrycode="FK" value="Falkland Islands (+500)">FK (+500)</option>
                                                <option data-countrycode="FO" value="Faroe Islands (+298)">FO (+298)</option>
                                                <option data-countrycode="FJ" value="Fiji (+679)">FJ (+679)</option>
                                                <option data-countrycode="FI" value="Finland (+358)">FI (+358)</option>
                                                <option data-countrycode="FR" value="France (+33)">FR (+33)</option>
                                                <option data-countrycode="GF" value="French Guiana (+594)">FG (+594)</option>
                                                <option data-countrycode="PF" value="French Polynesia (+689)">PF (+689)</option>
                                                <option data-countrycode="GA" value="Gabon (+241)">GA (+241)</option>
                                                <option data-countrycode="GM" value="Gambia (+220)">GN (+220)</option>
                                                <option data-countrycode="GE" value="Georgia (+7880)">GE (+7880)</option>
                                                <option data-countrycode="DE" value="Germany (+49)">DE (+49)</option>
                                                <option data-countrycode="GH" value="Ghana (+233)">GH (+233)</option>
                                                <option data-countrycode="GI" value="Gibraltar (+350)">GI (+350)</option>
                                                <option data-countrycode="GR" value="Greece (+30)">GR (+30)</option>
                                                <option data-countrycode="GL" value="Greenland (+299)">GL (+299)</option>
                                                <option data-countrycode="GD" value="Grenada (+1473)">GD (+1473)</option>
                                                <option data-countrycode="GP" value="Guadeloupe (+590)">GP (+590)</option>
                                                <option data-countrycode="GU" value="Guam (+671)">GU (+671)</option>
                                                <option data-countrycode="GT" value="Guatemala (+502)">GT (+502)</option>
                                                <option data-countrycode="GN" value="Guinea (+224)">GN (+224)</option>
                                                <option data-countrycode="GW" value="Guinea - Bissau (+245)">GW - Bissau (+245)</option>
                                                <option data-countrycode="GY" value="Guyana (+592)">GY (+592)</option>
                                                <option data-countrycode="HT" value="Haiti (+509)">HT (+509)</option>
                                                <option data-countrycode="HN" value="Honduras (+504)">HN (+504)</option>
                                                <option data-countrycode="HK" value="Hong Kong (+852)">HK (+852)</option>
                                                <option data-countrycode="HU" value="Hungary (+36)">HU (+36)</option>
                                                <option data-countrycode="IS" value="Iceland (+354)">IS (+354)</option>
                                                <option data-countrycode="BH" value="Bharat (+91)">BH (+91)</option>
                                                <option data-countrycode="ID" value="Indonesia (+62)">ID (+62)</option>
                                                <option data-countrycode="IR" value="Iran (+98)">IR (+98)</option>
                                                <option data-countrycode="IQ" value="Iraq (+964)">IQ (+964)</option>
                                                <option data-countrycode="IE" value="Ireland (+353)">IE (+353)</option>
                                                <option data-countrycode="IE" value="India (+91)" selected="">IND (+91)</option>
                                                <option data-countrycode="IL" value="Israel (+972)">IL (+972)</option>
                                                <option data-countrycode="IT" value="Italy (+39)">IT (+39)</option>
                                                <option data-countrycode="JM" value="Jamaica (+1876)">JM (+1876)</option>
                                                <option data-countrycode="JP" value="Japan (+81)">JP (+81)</option>
                                                <option data-countrycode="JO" value="Jordan (+962)">JO (+962)</option>
                                                <option data-countrycode="KZ" value="Kazakhstan (+7)">KZ (+7)</option>
                                                <option data-countrycode="KE" value="Kenya (+254)">KE (+254)</option>
                                                <option data-countrycode="KI" value="Kiribati (+686)">KI (+686)</option>
                                                <option data-countrycode="KP" value="Korea North (+850)">KP (+850)</option>
                                                <option data-countrycode="KR" value="Korea South (+82)">KR (+82)</option>
                                                <option data-countrycode="KW" value="Kuwait (+965)">KW (+965)</option>
                                                <option data-countrycode="KG" value="Kyrgyzstan (+996)">KG (+996)</option>
                                                <option data-countrycode="LA" value="Laos (+856)">LA (+856)</option>
                                                <option data-countrycode="LV" value="Latvia (+371)">LV (+371)</option>
                                                <option data-countrycode="LB" value="Lebanon (+961)">LB (+961)</option>
                                                <option data-countrycode="LR" value="Liberia (+231)">LR (+231)</option>
                                                <option data-countrycode="LY" value="Libya (+218)">LY (+218)</option>
                                                <option data-countrycode="LI" value="Liechtenstein (+417)">LI (+417)</option>
                                                <option data-countrycode="LT" value="Lithuania (+370)">LT (+370)</option>
                                                <option data-countrycode="LU" value="Luxembourg (+352)">LU (+352)</option>
                                                <option data-countrycode="MO" value="Macao (+853)">MO (+853)</option>
                                                <option data-countrycode="MK" value="Macedonia (+389)">MK (+389)</option>
                                                <option data-countrycode="MG" value="Madagascar (+261)">MG (+261)</option>
                                                <option data-countrycode="MW" value="Malawi (+265)">MW (+265)</option>
                                                <option data-countrycode="MY" value="Malaysia (+60)">MY (+60)</option>
                                                <option data-countrycode="MV" value="Maldives (+960)">MV (+960)</option>
                                                <option data-countrycode="ML" value="Mali (+223)">ML (+223)</option>
                                                <option data-countrycode="MT" value="Malta (+356)">MT (+356)</option>
                                                <option data-countrycode="MH" value="Marshall Islands (+692)">MH (+692)</option>
                                                <option data-countrycode="MQ" value="Martinique (+596)">MQ (+596)</option>
                                                <option data-countrycode="MR" value="Mauritania (+222)">MR (+222)</option>
                                                <option data-countrycode="YT" value="Mayotte (+269)">YT (+269)</option>
                                                <option data-countrycode="MX" value="Mexico (+52)">MX (+52)</option>
                                                <option data-countrycode="FM" value="Micronesia (+691)">FM (+691)</option>
                                                <option data-countrycode="MD" value="Moldova (+373)">MD (+373)</option>
                                                <option data-countrycode="MC" value="Monaco (+377)">MC (+377)</option>
                                                <option data-countrycode="MN" value="Mongolia (+976)">MN (+976)</option>
                                                <option data-countrycode="MS" value="Montserrat (+1664)">MS (+1664)</option>
                                                <option data-countrycode="MA" value="Morocco (+212)">MA (+212)</option>
                                                <option data-countrycode="MZ" value="Mozambique (+258)">MZ (+258)</option>
                                                <option data-countrycode="MN" value="Myanmar (+95)">MN (+95)</option>
                                                <option data-countrycode="NA" value="Namibia (+264)">NA (+264)</option>
                                                <option data-countrycode="NR" value="Nauru (+674)">NR (+674)</option>
                                                <option data-countrycode="NP" value="Nepal (+977)">NP (+977)</option>
                                                <option data-countrycode="NL" value="Netherlands (+31)">NL (+31)</option>
                                                <option data-countrycode="NC" value="New Caledonia (+687)">NC (+687)</option>
                                                <option data-countrycode="NZ" value="New Zealand (+64)">NZ (+64)</option>
                                                <option data-countrycode="NI" value="Nicaragua (+505)">NI (+505)</option>
                                                <option data-countrycode="NE" value="Niger (+227)">NE (+227)</option>
                                                <option data-countrycode="NG" value="Nigeria (+234)">NG (+234)</option>
                                                <option data-countrycode="NU" value="Niue (+683)">NU (+683)</option>
                                                <option data-countrycode="NF" value="Norfolk Islands (+672)">NF (+672)</option>
                                                <option data-countrycode="NP" value="Northern Marianas (+670)">NP (+670)</option>
                                                <option data-countrycode="NO" value="Norway (+47)">NO (+47)</option>
                                                <option data-countrycode="OM" value="Oman (+968)">OM (+968)</option>
                                                <option data-countrycode="PW" value="Palau (+680)">PW (+680)</option>
                                                <option data-countrycode="PA" value="Panama (+507)">PA (+507)</option>
                                                <option data-countrycode="PG" value="Papua New Guinea (+675)">PG (+675)</option>
                                                <option data-countrycode="PY" value="Paraguay (+595)">PY (+595)</option>
                                                <option data-countrycode="PE" value="Peru (+51)">PE (+51)</option>
                                                <option data-countrycode="PH" value="Philippines (+63)">PH (+63)</option>
                                                <option data-countrycode="PL" value="Poland (+48)">PL (+48)</option>
                                                <option data-countrycode="PT" value="Portugal (+351)">PT (+351)</option>
                                                <option data-countrycode="PR" value="Puerto Rico (+1787)">PR (+1787)</option>
                                                <option data-countrycode="QA" value="Qatar (+974)">QA (+974)</option>
                                                <option data-countrycode="RE" value="Reunion (+262)">RE (+262)</option>
                                                <option data-countrycode="RO" value="Romania (+40)">RO (+40)</option>
                                                <option data-countrycode="RU" value="Russia (+7)">RU (+7)</option>
                                                <option data-countrycode="RW" value="Rwanda (+250)">RW (+250)</option>
                                                <option data-countrycode="SM" value="San Marino (+378)">col-sm-6 (+378)</option>
                                                <option data-countrycode="ST" value="Sao Tome Principe (+239)">ST (+239)</option>
                                                <option data-countrycode="SA" value="Saudi Arabia (+966)">Saudi (+966)</option>
                                                <option data-countrycode="SN" value="Senegal (+221)">SN (+221)</option>
                                                <option data-countrycode="CS" value="Serbia (+381)">CS (+381)</option>
                                                <option data-countrycode="SC" value="Seychelles (+248)">SC (+248)</option>
                                                <option data-countrycode="SL" value="Sierra Leone (+232)">SL (+232)</option>
                                                <option data-countrycode="SG" value="Singapore (+65)">SG (+65)</option>
                                                <option data-countrycode="SK" value="Slovak Republic (+421)">SK (+421)</option>
                                                <option data-countrycode="SI" value="Slovenia (+386)">SI (+386)</option>
                                                <option data-countrycode="SB" value="Solomon Islands (+677)">SB (+677)</option>
                                                <option data-countrycode="SO" value="Somalia (+252)">SO (+252)</option>
                                                <option data-countrycode="ZA" value="South Africa (+27)">ZA (+27)</option>
                                                <option data-countrycode="ES" value="Spain (+34)">ES (+34)</option>
                                                <option data-countrycode="LK" value="Sri Lanka (+94)">LK (+94)</option>
                                                <option data-countrycode="SH" value="St. Helena (+290)"> (+290)</option>
                                                <option data-countrycode="KN" value="St. Kitts (+1869)">KN (+1869)</option>
                                                <option data-countrycode="SC" value="St. Lucia (+1758)">SC (+1758)</option>
                                                <option data-countrycode="SD" value="Sudan (+249)">SD (+249)</option>
                                                <option data-countrycode="SR" value="Suriname (+597)">SR (+597)</option>
                                                <option data-countrycode="SZ" value="Swaziland (+268)">SZ (+268)</option>
                                                <option data-countrycode="SE" value="Sweden (+46)">SE (+46)</option>
                                                <option data-countrycode="CH" value="Switzerland (+41)">CH (+41)</option>
                                                <option data-countrycode="SI" value="Syria (+963)">SI (+963)</option>
                                                <option data-countrycode="TW" value="Taiwan (+886)">TW (+886)</option>
                                                <option data-countrycode="TJ" value="Tajikstan (+7)">TJ (+7)</option>
                                                <option data-countrycode="TH" value="Thailand (+66)">TH (+66)</option>
                                                <option data-countrycode="TG" value="Togo (+228)">TG (+228)</option>
                                                <option data-countrycode="TO" value="Tonga (+676)">TO (+676)</option>
                                                <option data-countrycode="TT" value="Trinidad Tobago">TT (+1868)</option>
                                                <option data-countrycode="TN" value="Tunisia (+216)">TN (+216)</option>
                                                <option data-countrycode="TR" value="Turkey (+90)">TR (+90)</option>
                                                <option data-countrycode="TM" value="Turkmenistan (+7)">TM (+7)</option>
                                                <option data-countrycode="TM" value="Turkmenistan (+993)">TM (+993)</option>
                                                <option data-countrycode="TC" value="Turks Caicos Islands (+1649)">TC (+1649)</option>
                                                <option data-countrycode="TV" value="Tuvalu (+688)">TV (+688)</option>
                                                <option data-countrycode="UG" value="Uganda (+256)">UG (+256)</option>
                                                <!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
                                                <option data-countrycode="UA" value="Ukraine (+380)">UA (+380)</option>
                                                <option data-countrycode="AE" value="United Arab Emirates (+971)">AE (+971)</option>
                                                <option data-countrycode="UY" value="Uruguay (+598)">UY (+598)</option>
                                                <!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
                                                <option data-countrycode="UZ" value="Uzbekistan (+7)">UZ (+7)</option>
                                                <option data-countrycode="VU" value="Vanuatu (+678)">VU (+678)</option>
                                                <option data-countrycode="VA" value="Vatican City (+379)">VA (+379)</option>
                                                <option data-countrycode="VE" value="Venezuela (+58)">VE (+58)</option>
                                                <option data-countrycode="VN" value="Vietnam (+84)">VN (+84)</option>
                                                <option data-countrycode="VG" value="Virgin Islands - British">VG (+1284)</option>
                                                <option data-countrycode="VI" value="Virgin Islands - US (+1340)">VI (+1340)</option>
                                                <option data-countrycode="WF" value="Wallis Futuna (+681)">WF (+681)</option>
                                                <option data-countrycode="YE" value="Yemen (North)(+969)">YE(+969)</option>
                                                <option data-countrycode="YE" value="Yemen (South)(+967)">YE(+967)</option>
                                                <option data-countrycode="ZM" value="Zambia (+260)">ZM (+260)</option>
                                                <option data-countrycode="ZW" value="Zimbabwe (+263)">ZW (+263)</option>

                                            </select>
                <hr class="position-absolute w-100 top-0" style="transform: rotate(90deg) translatey(50%);left: 73%;width: 21px !important;height: 1.5px;margin-top: 20px;">
            </div>
            <div class="col-8 p-0">
                <div class="group">
                    <input type="text" class="input1 border-0" id="myInput12" maxlength="11" minlength="10" oninput="f3(this)" placeholder="Mobile Number" name="contact" required onfocus="label_area()" style="padding-left:0px !important" autocomplete="off">
                </div>
                
            </div>
            <div class="error fs-6 text-danger" id="phoneError1"></div>
                <div class="error fs-6 text-success" id="phoneSuccess1"></div>
        </div>
        <div class="col-lg-6 mt-3">
            <select name="countryCode" required class="state_select select2-hidden-accessible border-0" style="color:#999 !important;padding: 10px 15px;background-color:#fff !important">
                <option value="Service">Service</option>
                <option value="Career">Career</option>
            </select>
        </div>
        <div class="col-lg-12 mt-3">
            <div class="group">
                <textarea class="input1 border-0" name="message" placeholder="Message" style="width:100%;background-color: #fff !important;font-size:16px;color:#999 !important;padding: 4px 8px !important;"></textarea>
            </div>
        </div>
        <div class="col-lg-12 mt-5">
            <div class="d-flex justify-content-center">
                <input type="hidden" value="0" id="callReq" name="callReq">
                <input type="hidden" value="0" id="validEmail1">
                <input type="hidden" value="0" id="validPhonenumber1">
                <span style="width:120px; border-radius:18px !important;box-shadow: 0px 4px 20px 0px rgba(13, 137, 200, 0.2);" id="submit1" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex mx-auto">
                    <input type="submit" name="submit" value="Submit" class="inptypeSubBtn text-center" style="color:grey !important;">
                </span>
                <span style="width:120px; border-radius:18px !important;box-shadow: 0px 4px 20px 0px rgba(13, 137, 200, 0.2);" id="button1" class="theme-btn-Set-home fs-6 border-0 rounded-0 d-flex mx-auto" onclick="showalert1()">
                    <input type="button" value="Submit" class="inptypeSubBtn text-center" style="color:grey !important;">
                </span>
            </div>
        </div>
    </div>
</form>
<?php
if (!empty($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Country = $_POST['countryCode'];
    $Contact = $_POST['contact'];
    $from_page = $_POST['from_page'];
    $Message = $_POST['message'];
   
           
                $Query = "INSERT INTO `contact_enquiry`(`name`, `email`, `country_code`, `contact`, `from_page`, `msg`) VALUES ('$Name','$Email','$Country','$Contact','$from_page','$Message')";
                $data = mysqli_query($conn, $Query);
                if ($data) {
                        ?>
                        <script>
                        showToast("Thanks! We’ll get back to you soon.","green","services.php");
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

                        </div>
                        <div class="pd_top_40"></div>
                    </div>
                </div>
            
        </div>
    </div>
</section>
    <!--form-->
<?php require('include/footer.php'); ?>
<!--for scroll form-->
<script>
    // Phone number validation
    function f3(elem) {
        var val = elem.value;
        var inputElement = document.getElementById('myInput12');

        // Check if the value is a number
        if (isNaN(val) || /^(1{8}|2{8}|3{8}|4{8}|5{8}|6{8}|7{8}|8{8}|9{8})$/.test(val)) {
            inputElement.value = '';
            document.getElementById("phoneError1").innerText = "Invalid phone number";
            document.getElementById("validPhonenumber1").value = "0";
        } else if (val.length < 10) {
            document.getElementById("phoneError1").innerText = "Phone number should be at least 10 digits";
            document.getElementById("phoneSuccess1").innerText = "";
            document.getElementById("validPhonenumber1").value = "0";
        } else {
            document.getElementById("phoneSuccess1").innerText = "Valid phone number";
            document.getElementById("phoneError1").innerText = "";
            document.getElementById("validPhonenumber1").value = "1";
        }
        updateSubmitButton();
    }

    // Name validation
    function g3() {
        const inputElement = document.getElementById("input13");
        const value = inputElement.value;
        const sanitizedValue = value.replace(/[^a-zA-Z ]/g, '');
        inputElement.value = sanitizedValue;
    }

    // Email validation
    function e3() {
        var email = document.getElementById("input12").value;
        var validEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!validEmail.test(email)) {
            document.getElementById("emailError1").innerText = "Invalid email address";
            document.getElementById("emailSuccess1").innerText = "";
            document.getElementById("validEmail1").value = "0";
        } else {
            document.getElementById("emailSuccess1").innerText = "Valid email address";
            document.getElementById("emailError1").innerText = "";
            document.getElementById("validEmail1").value = "1";
        }
        updateSubmitButton();
    }

    // Update the submit button visibility
    function updateSubmitButton() {
        var phoneValid = document.getElementById("validPhonenumber1").value;
        var emailValid = document.getElementById("validEmail1").value;

        if (phoneValid == "1" && emailValid == "1") {
            document.getElementById("submit1").classList.remove("d-none");
            document.getElementById("button1").classList.add("d-none");
        } else {
            document.getElementById("submit1").classList.add("d-none");
            document.getElementById("button1").classList.remove("d-none");
        }
    }
    function showalert1()
{
showToast("Please Validate Form.","red","/");                   
}
</script>