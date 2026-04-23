<?php
include("admin/connection.php");
include("include/header.php");
include("mail.php");
?>
<head>
    <title>Home-CRM Landing</title>
</head>
<style>
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
    .input1 {
        font-size: 16px;
        padding: 10px 10px 10px 5px;
        display: block;
        width: 185px;
        border: none;
        border-bottom: 1px solid #6c6c6c;
        background: transparent !important;
        color: #999999;
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

<!----header-end---->
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
<div id="content" class="site-content ">
    <!---slider--->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M7X98N22');
    </script>
    <!-- End Google Tag Manager -->


<style>
        .btnanchor a:hover{
            background:#00A1E0 !important;
        }
        .imagesize_without_hover{
            height:95px!important;
            filter: grayscale(1);
        }
        .imagesize_hover{
            height:95px!important;
            filter: grayscale(0);
        }
    </style>
    <section>
        <script>
   window.addEventListener('load', function() {
    const width = window.innerWidth;
    const height = window.innerHeight;
    
        const element = document.getElementById("jaydeepfont" );
        
        if (element) {  
            
            if (width == 1280 && height == 631) {
                element.classList.add("jaydeep1");
                element.classList.remove("webuild");
            
                console.log(`Resolution: ${width} x ${height}`);
            } 
            else if (width == 1536 && height == 791) {
               
                element.classList.add("jaydeep1");
                element.classList.remove("webuild");
                console.log(`Resolution: ${width} x ${height}`);
            }
            
           
            else {
               element.classList.remove("jaydeep1");
                element.classList.add("webuild");
            }
        } else {
            console.warn(`Element with id overlay${i} not found.`);
        }
        
        
   
   
   
   for(var i=1;i<=4;i++){
       const elementjayho = document.getElementById("jayho"+i );
        
        if (elementjayho) {  
            
            if (width == 1280 && height == 631) {
                elementjayho.classList.add("herocardjay");
                elementjayho.classList.add("jayho"+i);
                elementjayho.classList.remove("herocard"+i);
                // elementjayho.classList.remove("herocard");
                console.log(`Resolution: ${width} x ${height}`);
            } 
            else if (width == 1536 && height == 791) {
                elementjayho.classList.remove("herocard"+i);
                  elementjayho.classList.add("jayho1536"+i);
                
            }
            else {
                elementjayho.classList.remove("herocardjay");
               elementjayho.classList.remove("jayho"+i);
               elementjayho.classList.remove("jayho1536"+i);
                elementjayho.classList.add("herocard"+i);
                // elementjayho.classList.add("herocard");
            }
        } else {
            console.warn(`Element with id overlay${i} not found.`);
        }
   }
    console.log("Resolution: " + width + "x" + height);
    
    
    const screenwidth = screen.Width;
    const screenheight = screen.Height;
    // jaydeep mobile
    console.log("screen: " + screenheight + "x" + screenwidth);
    for(var i=1;i<=4;i++){
       const elementjayhomob = document.getElementById("jayho"+i );
        
        if (elementjayhomob) {  
            
            if (height == 942 && width == 424) {
                 elementjayhomob.classList.add("herocardjaymob");
                elementjayhomob.classList.add("jayhomob"+i);
                elementjayhomob.classList.remove("herocard"+i);
                // elementjayho.classList.remove("herocard");
                console.log(`Resolution: ${width} x ${height}`);
            } 
            else {
                elementjayhomob.classList.remove("herocardjaymob");
               elementjayhomob.classList.remove("jayhomob"+i);
                elementjayhomob.classList.add("herocard"+i);
                // elementjayho.classList.add("herocard");
            }
        } else {
            console.warn(`Element with id overlay${i} not found.`);
        }
   }
    console.log("Resolution: " + width + "x" + height);
});
</script>
        <div class="container-fluid px-lg-4 disN one heromt-Set">

            <div class="row py-lg-5 py-md-3">
    <style>
        /* Styles for the elements */
        .sale_partner {
            background-color: #F1FAFF;
            border: 2px solid #B2E5FF;
            color: #0D89C8;
            border-radius: 50px;

            padding: 8px 16px;

            /* Responsive */
            width: 100%;
            max-width: 343px;
            
        }

        .sale_partner p {
            font-size: 16px !important;
            margin: 0;
        }
        @media (max-width: 768px) {
            .mobilepartner {
                margin-top: 30px; /* more space for mobile header */
            }
            .sale_partner p {
                font-size: 14px !important;
            }
        }

        .webuild {
            font-size: 5.5rem !important;
            line-height: 6rem !important;
            font-weight: 500 !important;
        }
        .jaydeep1{
            font-size:4.3rem !important;
            line-height:5.5rem !important;
        }
        
        .jaydeepmob1{
            font-size:3rem !important;
            line-height:3.8rem !important;
        }
        
        .herocardjay {
            /*width: 200px;*/
            height:150px !important;
            background-color:white;
            border-radius:13px;
            overflow: hidden;
            text-align: center;
            position: absolute;
            padding-bottom: 1rem;
            opacity: 0;
            transform: scale(0.5);
            transition: transform 1s, opacity 1s;
            box-shadow:1px 1px 10px 0px lightgrey;
        }
        .herocardjay img {
            width: 100%;
            height: 150px !important;
            object-fit: cover;
        }
        
        
        
        /*jaydeep mobile card*/
        .herocardjaymob {
            width: 145px;
            height:135px !important;
            background-color:white;
            border-radius:13px;
            overflow: hidden;
            text-align: center;
            position: absolute;
            padding-bottom: 1rem;
            opacity: 0;
            transform: scale(0.5);
            transition: transform 1s, opacity 1s;
            box-shadow:1px 1px 10px 0px lightgrey;
        }
        .herocardjaymob img {
            width: 100%;
            height: 135px !important;
            object-fit: cover;
        }
        /*jaydeep mobile card end*/
        
        
        
        /* Animation styles */
        .animate-left {
            animation: slideInLeft 2s ease-out forwards;
            animation-delay: 0.5s; 
        }

        .animate-right {
            animation: slideInRight 2s ease-out forwards;
            animation-delay: 0.5s; 
        }

        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

 @media (min-width: 100px) and (max-width: 424px) {
     .webuild{
                        font-size:3rem !important;
                        line-height:3.8rem!important;
                    }
 }
 
        /* Responsive adjustments */
         @media (min-width: 425px) and (max-width: 650px){
            .bgeffect1{
                width: 150px;
                height: 150px;
                top: 280px;
            }
            .bg_blue_effect {
                width: 150px;
                height: 150px;
                top: 125px;
                right: 160px;
            }
            .webuild{
                        font-size:3.5rem !important;
                        line-height:3.8rem!important;
                    }
    .themeSliderHeadingSet{
        line-height:45px !important;
    }
        }
        @media (min-width: 900px)  {
            .webuild {
                font-size: 5.2rem !important;
                line-height:6.2rem !important;
            }
        }
        @media (min-width: 1200px) and (max-width: 1400px) {
            .webuild {
                font-size: 4.5rem !important;
                line-height:5.2rem !important;
            }
            .bgeffect1 {
                width: 200px;
                height: 200px;
                top:380px;  
                }
            .bg_blue_effect {
                width: 280px;
                height: 280px;
                top: 75px;
                z-index: -1;
                right: 155px;
            }
        }
    @media (min-width:424px) and (min-height:942px){
           .webuild{
                        font-size:3rem !important;
                        line-height:3.5rem!important;
                        /*color:red !important;*/
                    }
    }
    </style>

<style>
    #typing-text::after {
    content: '';
    animation: blink 0.7s steps(2, start) infinite;
}

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}
.bgeffect1 {
    width: 200px;
    height: 200px;
    background-color: #34cbb730;
    position: absolute;
    top: 300px;
    left:-95px;
    z-index: -1;
    border-radius: 50%;
    box-shadow: 0 0 100px 25px rgba(52, 203, 183, 0.3); 
} 


.bg_blue_effect {
    width: 350px;
    height: 350px;
    background-color: #dbedf7;
    border-radius: 50%;
    position: absolute;
    top: 75px;
    z-index: -1;
    right: 192px;
    box-shadow: 0 0 100px 70px rgba(219, 237, 247, 1); 
}




</style>
    <!-- Left Div -->
    <div class="col-lg-6 col-md-12 col-12 pt-lg-0 pt-5 animate-left position-relative">
        <div class="d-flex flex-lg-row align-items-center  text-center text-lg-start mobilepartner">
            <img src="assets/images/hero/summit_partner.png"
                    alt="partner"
                    class="img-fluid mb-2 mb-lg-0"
                    style="width: 80px; height: 80px;">
            <div class=" sale_partner">
                
                <div class="ms-lg-3">
                    <p class="mb-0">Growth Partner of the year - FY 2026</p>
                </div>

            </div>
        </div>  
            
        <h1 class="themeSliderHe adingSet webuild col-lg-10 pt-lg-5 pt-3" id="jaydeepfont">
            We build <br>
            
            <span id="typing-text" style="color:#0D89C8;"></span>
            
        <br> solutions for your business.
        </h1>
        <div class="bgeffect1"></div>
    </div>

    <!-- Right Div -->
    <div class="col-lg-6 col-md-12 pt-lg-5 mt-lg-3 pt-0 pe-lg-5  animate-right position-relative jaydeskpa dding">
        
        <style>
        
        .container1 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 65vh;
            position: relative;
        }
        
        .herocircle-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            max-width: 600px;
            position: relative;
        }
        
        .herorcg-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            font-weight: bold;
            transition: opacity 0.5s, transform 0.5s;
            z-index: 1;
            cursor: pointer;
            position:relative;
        }
        
        .herorcg-circle.active {
            opacity: 1;
            transform: scale(1.5);
            z-index: 10;
        }
        
        .herocard {
            /*width: 200px;*/
            height:180px;
            background-color:white;
            border-radius:13px;
            overflow: hidden;
            text-align: center;
            position: absolute;
            padding-bottom: 1rem;
            opacity: 0;
            transform: scale(0.5);
            transition: transform 1s, opacity 1s;
            box-shadow:1px 1px 10px 0px lightgrey;
        }
        
        .herocard img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        
        
        
        
        .herocard1 {
            top: -2%;
            left: 7%;
        }
        
        .herocard2 {
            top: -2%;
            right: 7%;
        }
        
        .herocard3 {
            bottom: -2%;
            left: 7%;
        }
        
        .herocard4 {
            bottom: -2%;
            right: 7%;
        }
        
        
        
        .jayho1 {
            top: 2%;
            left: 4%;
        }
        
        .jayho2 {
            top: 2%;
            right:4%;
        }
        
        .jayho3 {
            bottom:2%;
            left: 4%;
        }
        
        .jayho4 {
            bottom: 2%;
            right: 4%;
        }
        
        
        
        
        
        /*jaydeep mob*/
        .jayhomob1 {
            top: 15% !important;
            left: 3% !important;
        }
        
        .jayhomob2 {
            top: 15% !important;
            right:3% !important;
        }
        
        .jayhomob3 {
            bottom:15% !important;
            left: 3% !important;
        }
        
        .jayhomob4 {
            bottom:15% !important;
            right: 3% !important;
        }
        
        @keyframes herocard1-animation {
            0% {
                transform: translate(100%, 100%);
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            100% {
                transform: translate(0, 0);
                opacity: 1;
            }
        }
        
        @keyframes herocard2-animation {
            0% {
                transform: translate(-100%, 100%);
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            100% {
                transform: translate(0, 0);
                opacity: 1;
            }
        }
        
        @keyframes herocard3-animation {
            0% {
                transform: translate(100%, -100%);
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            100% {
                transform: translate(0, 0);
                opacity: 1;
            }
        }
        
        @keyframes herocard4-animation {
            0% {
                transform: translate(-100%, -100%);
                opacity: 0;
            }
            20% {
                opacity: 0;
            }
            100% {
                transform: translate(0, 0);
                opacity: 1;
            }
        }
        
    /*jaydeep laptop*/
        .jayho1.active {
            animation: herocard1-animation 1s forwards;
        }
        
        .jayho2.active {
            animation: herocard2-animation 1s forwards;
        }
        
        .jayho3.active {
            animation: herocard3-animation 1s forwards;
        }
        
        .jayho4.active {
            animation: herocard4-animation 1s forwards;
        }
        
        
    /*jaydeep mobile*/
        .jayhomob1.active {
            animation: herocard1-animation 1s forwards;
        }
        
        .jayhomob2.active {
            animation: herocard2-animation 1s forwards;
        }
        
        .jayhomob3.active {
            animation: herocard3-animation 1s forwards;
        }
        
        .jayhomob4.active {
            animation: herocard4-animation 1s forwards;
        }
    /*jaydeep mobile end*/
        
        
        
        
        
        .herocard1.active {
            animation: herocard1-animation 1s forwards;
        }
        
        .herocard2.active {
            animation: herocard2-animation 1s forwards;
        }
        
        .herocard3.active {
            animation: herocard3-animation 1s forwards;
        }
        
        .herocard4.active {
            animation: herocard4-animation 1s forwards;
        }
        
        
        #img_bg{
            height:42vh;
        }
        @media (min-width: 100px) and (max-width: 424px) {
            #img_bg{
                height:35vh !important;
            }
            .herocircle-container {
                max-width: 270px !important;
            }
            .herocard{
                background-color:white;
                width:145px !important;
                height:135px;
                padding-bottom:0px !important;
                border-radius:5px ;
            }
            .herocard img{
                width:100%;
                height:135px;
            }
            
            .herocard1 {
                top: 10%;
                left: 0%;
            }
            
            .herocard2 {
                top: 10%;
                right: 0%;
            }
            
            .herocard3 {
                bottom: 10%;
                left: 0%;
            }
            
            .herocard4 {
                bottom: 10%;
                right: 0%;
            }
            .herorcg-circle.active {
                transform: scale(1.8) !important;
            }
        }
        @media (min-width: 425px) and (max-width: 650px) {
            #img_bg{
                height:32vh;
            }
            
            .herocircle-container {
                max-width: 300px;
            }
            .herocard{
                background-color:white;
                width:165px !important;
                height:150px !important;
                padding-bottom:0px !important;
                border-radius:5px ;
            }
            .herocard img{
                width:100%;
                height:150px !important;
            }
            .herocard1 {
                top: 11% ;
                left: 0%;
            }
            
            .herocard2 {
                top: 11%;
                right: 0%;
            }
            
            .herocard3 {
                bottom: 11%;
                left: 0%;
            }
            
            .herocard4 {
                bottom: 11%;
                right: 0%;
            }
        
            .herorcg-circle.active {
                transform: scale(1.8) !important;
            }
        }
        /*tablet*/
         @media (min-width:768px) and (min-height:1024px){
            #img_bg{
                height:37vh;
            }
            .webuild{
                font-size:5.8rem !important;
                line-height: 5.8rem !important;
            }
            .herocard1 {
                top: 10% !important;
                left: 8% !important;
            }
            
            .herocard2 {
                top: 10% !important;
                right: 8% !important;
            }
            
            .herocard3 {
                bottom: 10% !important;
                left: 8% !important;
            }
            
            .herocard4 {
                bottom: 10% !important;
                right: 8% !important;
            }
        }
        
        @media (min-width: 900px){
           .herocard1 {
                top: 2%;
                left: 7%;
            }
            
            .herocard2 {
                top: 2%;
                right: 7%;
            }
            
            .herocard3 {
                bottom: 2%;
                left: 7%;
            }
            
            .herocard4 {
                bottom: 2%;
                right: 7%;
            } 
        }
        
        @media (min-width: 1200px) and (max-width: 1400px){
              .herocard1 {
            top: -2%;
            left: 4%;
        }
        
        .herocard2 {
            top: -2%;
            right: 4%;
        }
        
        .herocard3 {
            bottom: -2%;
            left: 4%;
        }
        
        .herocard4 {
            bottom: -2%;
            right: 4%;
        }
        .herocard {
            /*width: 200px;*/
            height:150px;
            background-color:white;
            border-radius:13px;
            overflow: hidden;
            text-align: center;
            position: absolute;
            padding-bottom: 1rem;
            opacity: 0;
            transform: scale(0.5);
            transition: transform 1s, opacity 1s;
            box-shadow:2px 2px 5px lightgrey;
        }
        
        .herocard img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
         }
         
         /*desktop size*/
        @media (min-width:1236px) and (max-width:1245px)and (min-height:759px)and (max-height:769px){
            .jaydeskpadding{
                padding-top:0 !important;
                margin-top:0 !important;
            }
            .webuild{
                font-size:4rem !important;
                line-height:5.5rem !important;
            }
            #img_bg{
                width:24vh !important;
                height:250px !important;
            }
                .herocard1 {
                top: 16% !important;
                left: 7% !important;
            }
            
            .herocard2 {
                top: 16% !important;
                right: 7% !important;
            }
            
            .herocard3 {
                bottom: 16% !important;
                left: 7% !important;
            }
            
            .herocard4 {
                bottom: 16% !important;
                right: 7% !important;
            }
        }
        
        
        .jayho15361 {
            top: 6% !important;
            left: 4% !important;
        }
        
        .jayho15362 {
            top: 6% !important;
            right:4% !important;
        }
        
        .jayho15363 {
            bottom:6% !important;
            left: 4% !important;
        }
        
        .jayho15364 {
            bottom:6% !important;
            right: 4% !important;
        }
        
         .herorcg-circle .sliderhead{
             opacity:0;
             display:none;
             transition:opacity 0.3s ease;
             font-size:9px;
             background-color:white;
             padding-inline:5px;
             position:absolute;
             bottom:0;
             border-radius:2px;
             white-space:nowrap;
         }
         .herorcg-circle.active .sliderhead{
             opacity:1;
             
             display:block;
         }
         @media (max-width:576px){
             .herorcg-circle .sliderhead{
                 bottom:5px !important;
             }
         }
         
    </style>
            <div class="container1">
    <img src="assets/images/hero/bg/manufactbgline.png" class="position-absolute" id="img_bg">
    <img src="assets/images/hero/bg/manufactbgeff.png" class="position-absolute img-fluid" id="img_bgeff">
    <div class="herocircle-container position-relative z-5">
        <div class="herorcg-circle mx-lg-0 mx-2 flex-column">
            <img src="assets/images/hero/bg/autowhiteicon.png" class="img-fluid">
            <div class="sliderhead">Finance</div>
        </div>
        <div class="herorcg-circle mx-lg-0 mx-2 flex-column">
            <img src="assets/images/hero/bg/rcgwhiteicon.png" class="img-fluid">
            <div class="sliderhead">Real Estate</div>
        </div>
        <div class="herorcg-circle mx-lg-0 mx-2 active flex-column">
            <img src="assets/images/hero/bg/manuwhiteicon.png" class="img-fluid">
            <div class="sliderhead">Automotive</div>
        </div>
        <div class="herorcg-circle mx-lg-0 mx-2 flex-column">
            <img src="assets/images/hero/bg/finwhiteicon.png" class="img-fluid">
            <div class="sliderhead">RCG</div>
        </div>
        <div class="herorcg-circle mx-lg-0 mx-2 flex-column">
            <img src="assets/images/hero/bg/realwhiteicon.png" class="img-fluid">
            <div class="sliderhead">Manufacturing</div>
        </div>
    </div>

    <div class="herocard herocard-outjay herocard1" id="jayho1">
        <img id="herocard1-img" src="assets/images/hero/bg/auto1.jpg" class="img-fluid" alt="Image 1">
    </div>
    <div class="herocard herocard-outjay herocard2" id="jayho2">
        <img id="herocard2-img" src="assets/images/hero/bg/auto2.jpg" class="img-fluid" alt="Image 2">
    </div>
    <div class="herocard herocard-outjay herocard3" id="jayho3">
        <img id="herocard3-img" src="assets/images/hero/bg/auto3.jpg" class="img-fluid" alt="Image 3">
    </div>
    <div class="herocard herocard-outjay herocard4" id="jayho4">
        <img id="herocard4-img" src="assets/images/hero/bg/auto4.jpg" class="img-fluid" alt="Image 4">
    </div>
</div>

<script>
    const circles = document.querySelectorAll('.herorcg-circle');
    let currentIndex = 0; // Tracks the logical active index in the dataset

    const images = [
        ["assets/images/hero/bg/auto1.jpg", "assets/images/hero/bg/auto2.jpg", "assets/images/hero/bg/auto3.jpg", "assets/images/hero/bg/auto4.jpg"],
        ["assets/images/hero/bg/rcg1.jpg", "assets/images/hero/bg/rcg2.jpg", "assets/images/hero/bg/rcg3.jpg", "assets/images/hero/bg/rcg4.jpg"],
        ["assets/images/hero/bg/manufacturing1.jpg", "assets/images/hero/bg/manufacturing2.jpg", "assets/images/hero/bg/manufacturing3.jpg", "assets/images/hero/bg/manufacturing4.jpg"],
        ["assets/images/hero/bg/finance1.jpg", "assets/images/hero/bg/finance2.jpg", "assets/images/hero/bg/finance3.jpg", "assets/images/hero/bg/finance4.jpg"],
        ["assets/images/hero/bg/real1.jpg", "assets/images/hero/bg/real2.jpg", "assets/images/hero/bg/real3.jpg", "assets/images/hero/bg/real4.jpg"]
    ];

    const circleactiveimg = [
        "assets/images/hero/bg/autoicon.png",
        "assets/images/hero/bg/financeicon.png",
        "assets/images/hero/bg/manufactureicon.png",
        "assets/images/hero/bg/financeicon.png",
        "assets/images/hero/bg/realicon.png"
    ];

    const inactiveImages = [
        "assets/images/hero/bg/autowhiteicon.png",
        "assets/images/hero/bg/rcgwhiteicon.png",
        "assets/images/hero/bg/manuwhiteicon.png",
        "assets/images/hero/bg/finwhiteicon.png",
        "assets/images/hero/bg/realwhiteicon.png"
    ];

    const bgimageline = [
        "assets/images/hero/bg/autobgline.png",
        "assets/images/hero/bg/rcgbglinenew.png",
        "assets/images/hero/bg/manufactbgline.png",
        "assets/images/hero/bg/finbglinenew.png",
        "assets/images/hero/bg/realbgline.png"
    ];

    const bgeffect = [
        "assets/images/hero/bg/autobgeff.png",
        "assets/images/hero/bg/rcgbgeff.png",
        "assets/images/hero/bg/manufactbgeff.png",
        "assets/images/hero/bg/finbgeff.png",
        "assets/images/hero/bg/realbgeff.png"
    ];

    function updateSlider() {
        circles.forEach((circle, index) => {
            const positionIndex = (index - currentIndex + circles.length) % circles.length;

            const isActive = positionIndex === 2;

            circle.classList.toggle('active', isActive);
            const circleImage = circle.querySelector('img');
            circleImage.src = isActive ? circleactiveimg[currentIndex] : inactiveImages[(currentIndex + positionIndex - 2 + circles.length) % circles.length];

            circle.style.order = positionIndex; 
        });

        const activeImages = images[currentIndex];
        document.getElementById('herocard1-img').src = activeImages[0];
        document.getElementById('herocard2-img').src = activeImages[1];
        document.getElementById('herocard3-img').src = activeImages[2];
        document.getElementById('herocard4-img').src = activeImages[3];
        document.getElementById('img_bg').src = bgimageline[currentIndex];
        document.getElementById('img_bgeff').src = bgeffect[currentIndex];

        document.querySelectorAll('.herocard').forEach(card => {
            card.classList.remove('active');
            void card.offsetWidth; 
            card.classList.add('active');
        });
    }

    function adjustCurrentIndexForPosition3(clickedIndex) {
        const targetPosition = 2; 
        currentIndex = (clickedIndex - targetPosition + circles.length) % circles.length;
        updateSlider();
    }

    circles.forEach((circle, index) => {
        circle.addEventListener('click', () => {
            adjustCurrentIndexForPosition3(index);
            resetAutoRotation();
        });
    });

    let autoRotationInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlider();
    }, 3000);

    function resetAutoRotation() {
        clearInterval(autoRotationInterval);
        autoRotationInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider();
        }, 3000);
    }

    const container1 = document.querySelector('.container1');

    container1.addEventListener('mouseenter', () => {
        clearInterval(autoRotationInterval);
    });

    container1.addEventListener('mouseleave', () => {
        resetAutoRotation();
    });

    updateSlider();
</script>



    </div>
</div>

<!--typing animation-->
<script>
    const typingTextElement = document.getElementById("typing-text");
const words = ["Innovative", "Personolized"];
let currentWordIndex = 0;
let charIndex = 0;
let isDeleting = false;
let delay = 500;

function typeEffect() {
    const currentWord = words[currentWordIndex];
    
    if (isDeleting) {
        // Deleting characters
        typingTextElement.textContent = currentWord.substring(0, charIndex--);
        if (charIndex < 0) {
            isDeleting = false;
            currentWordIndex = (currentWordIndex + 1) % words.length; // Move to next word
            delay = 50; // Pause before starting the next word
        } else {
            delay = 300; // Speed up deleting
        }
    } else {
        // Typing characters
        typingTextElement.textContent = currentWord.substring(0, charIndex++);
        if (charIndex > currentWord.length) {
            isDeleting = true;
            delay = 150; // Pause before deleting
        } else {
            delay = 300; // Normal typing speed
        }
    }
    
    setTimeout(typeEffect, delay);
}

// Start the typing effect
document.addEventListener("DOMContentLoaded", () => {
    setTimeout(typeEffect, 3300); // Initial delay before starting
});

</script>


            
    </section>
   

   
<section class="container-sm my-5 mb-3">
    <style>
        .marquee-wrapper {
            position: relative;
            overflow: hidden;
            white-space: nowrap;
        }

        .marquee-container {
            display: inline-flex;
            animation: scrollLeft 30s linear infinite;
            width: calc(255px * 36); /* Extend container width */
        }

        .marquee-container img {
            margin-right: 160px;
            display: inline-block;
        }

        /* Keyframes for continuous scrolling loop */
        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Fade-out effect on both sides */
        .marquee-wrapper::before,
        .marquee-wrapper::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100px; /* Adjust width for fade size */
            background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
            z-index: 1;
        }

        .marquee-wrapper::before {
            left: 0;
        }

        .marquee-wrapper::after {
            right: 0;
            transform: scaleX(-1); /* Flip the gradient for the right side */
        }
    </style>

    <div class="marquee-wrapper mx-lg-5 d-lg-block d-none">
        <div class="marquee-container mx-lg-5">
            <!-- Images with duplicate for looping effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">

            <!-- Duplicate images for continuous scrolling effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">
            
            <!-- Duplicate images for continuous scrolling effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">
            
            <!-- Duplicate images for continuous scrolling effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">
            
            <!-- Duplicate images for continuous scrolling effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">
            
            <!-- Duplicate images for continuous scrolling effect -->
            <img src="assets/images/hero/summit_partner.png" class="imagesize_without_hover">
            <img src="assets/images/hero/app_exchange.png" class="imagesize_without_hover">
            <img src="assets/images/hero/commerce_cloud.png" class="imagesize_without_hover">
            <img src="assets/images/hero/cloud_reseller.png" class="imagesize_without_hover">
            <img src="assets/images/hero/pledge.png" class="imagesize_without_hover" id="img5">
            <img src="assets/images/hero/certified.png" class="imagesize_without_hover" id="img6">
        </div>
    </div>
</section>




   
<!--mobile view-->
<section class="d-lg-none d-block py-5" style="background-color: #eaf5fe;">
    <div class="container-sm px-4">
        <div class="row">
            <div class="col-4">
                <div>
                    <img src="assets/images/hero/summit_partner.png" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="assets/images/hero/app_exchange.png" class="img-fluid">
                </div>
            </div>
            <div class="col-4">
                <div>
                    <img src="assets/images/hero/commerce_cloud.png" class="img-fluid">
                </div>
            </div>
            <div class="col-4 pt-5">
                <div>
                    <img src="assets/images/hero/cloud_reseller.png" class="img-fluid">
                </div>
            </div>
            <div class="col-4 pt-5">
                <div>
                    <img src="assets/images/hero/pledge.png" class="img-fluid">
                </div>
            </div>
            <div class="col-4 pt-5">
                <div>
                    <img src="assets/images/hero/certified.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
    
    
    
    <section class="py-5">
    <style>
        .stats {
            position: relative;
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #0D89C8 !important;
            border-bottom: 1px solid #0D89C8 !important;
        }


        .stats .stat-item {
            position: relative;
            z-index: 2;
            margin-bottom: 15px;
        }

        .stats .stat-item span {
            display: block;
            font-size: 65px;
            font-weight: 600;
            background-image: linear-gradient(90deg, #0D89C8, #34CBB7);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }
    </style>

    <script>
        window.addEventListener('load', function() {
            const delay = 500;

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

                updateCounter(document.getElementById('counter1'), 110, 100);
                updateCounter(document.getElementById('counter2'), 150, 50);
                updateCounter(document.getElementById('counter3'), 5, 300, '');
                updateCounter(document.getElementById('counter4'), 210, 50);
            }, delay);
        });
    </script>

    <div class="container-sm">
        <div class="stats row">
            <div class="col-md-3 col-6 stat-item">
                <span class="counter" id="counter1">0</span>
                <div>
                    <h6>Projects Delivered</h6>
                    <p>Across Industries</p>
                </div>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <span class="counter" id="counter2">0</span>
                <h6>Certificates</h6>
                <p>Worldwide</p>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <span class="counter" id="counter3">0</span>
                <h6>Customer</h6>
                <p>Satisfaction Rate</p>
            </div>
            <div class="col-md-3 col-6 stat-item">
                <span class="counter" id="counter4">0</span>
                <h6>Consultants</h6>
                <p>Worldwide</p>
            </div>
        </div>
    </div>
</section>



<section class="coreslide d-none d-lg-block position-relative" style="height:3200px" >
    <style>
        .coreslide 
        {
            width: 100vw;
            height: 100vh;
            overflow:hidden;

        }

        .coreslide .content 
        {
            height: 100%;
            width: 100%;
            flex-shrink: 0;
            display: flex;

            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }

        #a 
        {
            display: flex;
            overflow-x: hidden;
            align-items: center;
            height: 100vh;
            width: 100vw;
            position:relative;
           
        }

        .c .card{
            box-shadow:rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius:1rem;
        }
        .bgeffect2 {
    width: 250px;
    height: 250px;
    background-color:#34cbb730;
    position:absolute;
    top:330px;
    left:350px;
    z-index:-1;
    border-radius: 50%;
    box-shadow: 0 0 70px 10px rgba(52, 203, 183, 0.3);
} 
.coreimg{
    height:191px !important;
    object-fit:cover;
}
.corehead{
            color:#0D4282 !important;
        }

    </style>
     <div id="a">
            <div class="content" id="div1">
                <div class="container-sm">
                    <div class="bgeffect2 d-lg-block d-none"></div>
                    <div class="row" style="margin-top:10%;">
                        <div class="col-lg-4 pt-5">
                            <h1 class=" text-lg-start text-center">
                                Core<br> Offerings
                            </h1>
                            <p class="col-xxl-8 text-lg-start text-center pt-3">
                                Our expertise includes Consulting & Implementation, Product Development, Managed Services, Contract Staffing, AI/ML, and Software Development.
                            </p>
                        </div>

                        <div class="col-lg-8" >
                            <div class="row b py-3" style="flex-wrap: nowrap;overflow: hidden;">
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 h-100 ">
                                        <img src="assets/images/seamless/Consulting & Implementation.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Consulting & Implementation
                                        </h5>
                                        <p>Consulting and implementation services identify business gaps, create tailored solutions, configure Salesforce clouds for optimized workflows, and integrate systems like ERP to automate processes and enhance overall productivity.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 h-100">
                                        <img src="assets/images/seamless/Managed-Service.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Managed Services
                                        </h5>
                                        <p>Managed services provide full management and maintenance of Salesforce environments, implementing CRM optimization strategies, applying Kaizen for continuous improvement, and ensuring data accuracy, consistency, and security through proactive measures.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 h-100">
                                        <img src="assets/images/seamless/Software Development.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Software Development
                                        </h5>
                                        <p>Software development services cover the entire lifecycle from conceptualization to deployment and maintenance. This includes collaborative brainstorming for innovative ideas, creating tailored solutions, and leveraging the latest technologies for competitiveness.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 h-100">
                                        <img src="assets/images/seamless/AI-ML.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            AI / ML
                                        </h5>
                                        <p>AI/ML services involve collaborating with specialists to identify opportunities and develop innovative solutions. This includes customizing AI/ML models for business operations and seamlessly integrating data sources to enhance automation and efficiency.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 h-100">
                                        <img src="assets/images/seamless/Product Development.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Product Development
                                        </h5>
                                        <p>Product development services include building innovative Salesforce products, with over 10 assets created. The process involves collaborative brainstorming, design, integration, development, thorough testing, deployment, and ongoing support.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 c">
                                    <div class="card p-3 border border-0 bg-white h-100">
                                        <img src="assets/images/seamless/Contract Staffing.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Contract Staffing
                                        </h5>
                                        <p>Contract staffing services source skilled professionals to meet project needs, dynamically scale teams as required, ensure availability across time zones, and provide professionals with strong communication skills for effective collaboration.</p>
                                    </div>
                                </div>
                                <!--<div class="col-lg-6 c">-->
                                <!--    <div class="card p-4 border border-0 bg-white h-100">-->
                                <!--        <img src="assets/images/core_offering/Pexels Photo by Vlada Karpovich.png" alt="" class="rounded-3">-->
                                <!--        <h5 class="py-3">-->
                                <!--            Consulting & Implementation-->
                                <!--        </h5>-->
                                <!--        <p>Engage with industry experts to identify gaps, configure Salesforce clouds to-->
                                <!--            redefine business processes and workflows, and integrate systems like ERP to-->
                                <!--            automate and enhance productivity.</p>-->
                                <!--    </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    
     <script src="assets/js/gsap.js"></script>
    <script src="assets/js/scrollTrigger.js"></script>
<script>
  gsap.registerPlugin(ScrollTrigger);

  const content = gsap.utils.toArray("#a .b .c");
  const scrollContainer = document.querySelector("#a");
  const nextSection = document.querySelector(".next-section");
   var z = window.matchMedia("(min-width:768px)");
    var x = window.matchMedia("(max-width: 768px)");
    var transletevale
    if(x.matches){
        transletevale = 100;
    }
    else if(z.matches){
        transletevale = 80;
    }
  // Adjust scroll settings for smoother and full scroll for each card
  gsap.to(content, {
    xPercent: -transletevale * (content.length - 1), // Ensure full scroll for each card
    
    top:100,
    scrollTrigger: {
      trigger: scrollContainer,
      pin: true,
      scrub: 1, // Increase scrub for slower, smoother scrolling
      end: `+=2500`, // Ensure enough scrollable space
     
    }
  });
  

</script>



</section>

<section class="d-lg-none d-block">
    <style>
        .col-lg-12 .card{
            box-shadow:rgba(149, 157, 165, 0.2) 0px 8px 24px;
            border-radius:1rem;
            margin:15px 0px;
        }
        
    </style>
    <div class="container-sm py-5">
         
        <div class="row">
            <div class="col-lg-12">
                <h1 class="col-xxl-7 text-lg-start text-center">
                    Core Offerings
                </h1>
                <p class="col-xxl-8 text-lg-start text-center">
                    Our expertise includes Consulting & Implementation, Product Development, Managed Services, Contract Staffing, AI/ML, and Software Development.
                </p>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="card p-4 border border-0">
                    <img src="assets/images/seamless/Consulting & Implementation.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Consulting & Implementation
                                        </h5>
                                        <p>Consulting and implementation services identify business gaps, create tailored solutions, configure Salesforce clouds for optimized workflows, and integrate systems like ERP to automate processes and enhance overall productivity.</p>
                </div>
            </div>
            
            <div class="col-lg-12 mt-2">
                <div class="card p-4 border border-0">
                    <img src="assets/images/seamless/Managed-Service.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Managed Services
                                        </h5>
                                        <p>Managed services provide full management and maintenance of Salesforce environments, implementing CRM optimization strategies, applying Kaizen for continuous improvement, and ensuring data accuracy, consistency, and security through proactive measures.</p>
                </div>
            </div>
            
            <div class="col-lg-12 mt-2">
                    <div class="card p-4 border border-0">
                        <img src="assets/images/seamless/Software Development.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Software Development
                                        </h5>
                                        <p>Software development services cover the entire lifecycle from conceptualization to deployment and maintenance. This includes collaborative brainstorming for innovative ideas, creating tailored solutions, and leveraging the latest technologies for competitiveness.</p>
                    </div>
            </div>
            <div class="col-lg-12 mt-2">
                <div class="card p-4 border border-0 ">
                    <img src="assets/images/seamless/AI-ML.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            AI / ML
                                        </h5>
                                        <p>AI/ML services involve collaborating with specialists to identify opportunities and develop innovative solutions. This includes customizing AI/ML models for business operations and seamlessly integrating data sources to enhance automation and efficiency.</p>
                </div>
            </div>
            
            <div class="col-lg-12 mt-2">
                <div class="card p-4 border border-0">
                                                            <img src="assets/images/seamless/Product Development.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Product Development
                                        </h5>
                                        <p>Product development services include building innovative Salesforce products, with over 10 assets created. The process involves collaborative brainstorming, design, integration, development, thorough testing, deployment, and ongoing support.</p>
                </div>
            </div>
            
            <div class="col-lg-12 mt-2">
                    <div class="card p-4 border border-0">
                        <img src="assets/images/seamless/Contract Staffing.jpg" alt="" class="rounded-3 coreimg">
                                        <h5 class="py-3 corehead">
                                            Contract Staffing
                                        </h5>
                                        <p>Contract staffing services source skilled professionals to meet project needs, dynamically scale teams as required, ensure availability across time zones, and provide professionals with strong communication skills for effective collaboration.</p>
                    </div>
            </div>
            
        </div>
    </div>
</section>
 



    <!---client-end---->

    <!---about section--->
    <!---Industry & Niche Market Expertise Desktop ---->
    <section id="scroll_container_before" >
        <div class="container-sm">
                <div class="row">
                    <div class="title_all_box style_three text-center dark_color">
                        <!--<div class="pd_bottom_50"></div>-->
                        <div class="title_sections three">
                            <h3 class="text-uppercase">Industry Expertise</h3>
                        </div>
    
                        <!--===============spacing==============-->
                        <div class="pd_bottom_30"></div>
                        <!--===============spacing==============-->
                    </div>
                    <style>
                                    .image-inner-div {
                                        transition: top 0.5s 0s;
                                    }
                                    .image_box{
            overflow:hidden;
        }
        .image_box:hover .image-inner-div{
            top:0%!important;
        }
        .image_box:hover .image-inner-div .rrr{
            transform:scale(1);
        }
        .rrr{
            background-color:#34cbb7;
            color:white;
        }
    </style>
                    <div class="invisible_normal_spacing"></div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <a href="automobile_industry.php">
                                <div class="service_content">
                                <div class="image_box position-relative">
                                    
                                    <img class="imgDesk wp-post-image" src="assets/images/blog/AUTOMOBILE.webp" alt="crmlanding has expertise in Automobile">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="automobile_industry.php" class="btn bt n-primary rounded-1 rrr">Read More</a>
                                         <!-- <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a> -->
                                    </div>
    
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs"  rel="bookmark">AUTOMOTIVE</a></h6>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/hero/industryexpertise/manufacturing.jpg" alt="crmlanding has expertise in Manufacturing">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <!-- <a href="manufacturing_industry.php" class="btn bt n-primary rounded-1 rrr">Read More</a>-->
                                         <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a> 
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" href="manufacturing_industry.php" rel="bookmark">MANUFACTURING</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/blog/RCG.jpg" alt="crmlanding has expertise in education">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="retail_consumer_goods_industry.php" class="btn bt n-primary rounded-1 rrr">Read More</a>
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">RCG</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/hero/industryexpertise/BFSI.jpg" alt="crmlanding has expertise in BFSI (Banking, Financial Services and Insurance)">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a>
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">BFSI</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div> 
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/blog/education.webp" alt="crmlanding has expertise in education">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a>
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">EDUCATION</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/blog/HEALTH_CARE.webp" alt="crmlanding has expertise in Healthcare">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <!-- <a href="healthcare_industry.php" class="btn bt n-primary rounded-1 rrr">Read More</a> -->
                                         <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a> 
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">HEALTH CARE</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                   <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/hero/industryexpertise/real_estate.jpg" alt="crmlanding has expertise in Ad-Tech">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a>
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">REAL ESTATE</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div> 
                    
                    <div class="col-xl-3 col-lg-6 col-md-6 col-6 mt-lg-5 mt-3">
                        <div class="service_box style_four dark_color">
                            <div class="service_content">
                                <div class="image_box position-relative">
                                    <img class="imgDesk wp-post-image" src="assets/images/blog/ecommerce.webp" alt="crmlanding has expertise in E-Commerce">
                                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div">
                                        <a href="#" class="btn bt n-primary rounded-1 rrr">Coming Soon</a>
                                    </div>
                                </div>
                                <div class="content_inner">
                                    <h6 class="title mn-24"><a class="infs" rel="bookmark">ECOMMERCE</a></h6>
                                </div>
                            </div>
                        </div>
                        <!--===============spacing==============-->
                        <div class="mr_bottom_10"></div>
                        <!--===============spacing==============-->
                    </div>
                    
                    
                    <div class="pd_bottom_40"></div>
                </div>
        </div>
    </section>
    

    <!----Client---->
<style>
    @-webkit-keyframes scrollReverse {
  0% {
    transform: translateX(calc(-250px * 7));
  }
  100% {
    transform: translateX(0);
  }
}

@keyframes scrollReverse {
  0% {
    transform: translateX(calc(-250px * 7));
  }
  100% {
    transform: translateX(0);
  }
}

.sliderMyKeyReverse {
  margin: auto;
  overflow: hidden;
  position: relative;
}

.sliderMyKeyReverse::before, .sliderMyKeyReverse::after {
  content: "";
  height: 200px;
  position: absolute;
  width: 200px;
  z-index: 2;
}

.sliderMyKeyReverse::after {
  right: 0;
  top: 0;
  transform: rotateZ(180deg);
}

.sliderMyKeyReverse::before {
  left: 0;
  top: 0;
}

.sliderMyKeyReverse .slide-track {
  -webkit-animation: scrollReverse 40s linear infinite;
  animation: scrollReverse 40s linear infinite;
  display: flex;
  height: 150px;
  width: calc(250px * 14);
}

.sliderMyKeyReverse .slide {
  height: 125px;
  width: 250px;
}

</style>

    <section class="client-brand-section d-lg-block d-none" style="backg round-color:#F3F4F8">
        <div class="container-sm">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="pd_bottom_50"></div>
                        <div class="title_sections three">
                            <h3>KEY CLIENTELE</h3>
                        </div>

                        <!--===============spacing==============-->
                        <div class="pd_bottom_50"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sliderMyKey mt-3">
                        <div class="slide-track">
                            <?php
                            $keyquary = "SELECT * FROM key_clinetele WHERE status = 'Active' order by num ASC LIMIT 14";
                            $keyquery_run = mysqli_query($conn, $keyquary);
                            ?>
                            <?php
                            if ($keyquery_run) {
                                foreach ($keyquery_run as $keyrow) {
                            ?>
                                    <div class="slide" style="border:0px solid <?php echo $keyrow['color']; ?>; border-radius:10px; background-color:white; margin-right:20px;">
                                        <img src="admin/uploads/<?php echo $keyrow['icon']; ?>" alt="" style="padding:10px;filter: grayscale(1);" />
                                    </div>
                                <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                            ?>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="row">
            <div class="col-lg-12">
                <div class="sliderMyKeyReverse mt-3">
                    <div class="slide-track">
                        <?php
                        $keyquary = "SELECT * FROM key_clinetele WHERE status = 'Active' order by num DESC LIMIT 14";
                        $keyquery_run = mysqli_query($conn, $keyquary);
                        ?>
                        <?php
                        if ($keyquery_run) {
                            foreach ($keyquery_run as $keyrow) {
                        ?>
                                <div class="slide" style="border:0px solid <?php echo $keyrow['color']; ?>; border-radius:10px; background-color:white; margin-right:20px;">
                                    <img src="admin/uploads/<?php echo $keyrow['icon']; ?>" alt="" style="padding:10px;filter: grayscale(1);" />
                                </div>
                        <?php
                            }
                        } else {
                            echo "No Record Found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
            
            
             <div class="pd_bottom_50"></div>
        </div>
        <!--===============spacing==============-->

        <!--===============spacing==============-->
    </section>
    
<section class="d-lg-none d-block pb-3">
    <div class="container-sm">
       <div class="row">
            <div class="col-12 py-5">
                <h3 class="text-center text-lg-start">
                    Key Clientele
                </h3>
                
            </div>
<div class="col-lg-4 col-md-4 col-4 px-1 px-lg-1 ser1">
    <div class="">
        <?php
        $keyquaryphone1 = "SELECT * FROM key_clinetele WHERE status = 'Active' ORDER BY num ASC LIMIT 6 OFFSET 0";
        $keyquery_runphone1 = mysqli_query($conn, $keyquaryphone1);
        if ($keyquery_runphone1) {
            foreach ($keyquery_runphone1 as $keyrowrunphone1) {
        ?>
            <img src="admin/uploads/<?php echo $keyrowrunphone1['icon']; ?>" class="img-fluid mt-5" style="border:0px solid <?php echo $keyrowrunphone1['color']; ?>; border-radius:10px; background-color:white;filter: grayscale(1);">
        <?php
            }
        }
        ?>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-4 px-1 px-lg-1 ser2">
    <div class="">
        <?php
        $keyquaryphone2 = "SELECT * FROM key_clinetele WHERE status = 'Active' ORDER BY num ASC LIMIT 5 OFFSET 6";
        $keyquery_runphone2 = mysqli_query($conn, $keyquaryphone2);
        if ($keyquery_runphone2) {
            foreach ($keyquery_runphone2 as $keyrowrunphone2) {
        ?>
            <img src="admin/uploads/<?php echo $keyrowrunphone2['icon']; ?>" class="img-fluid mt-5" style="border:0px solid <?php echo $keyrowrunphone2['color']; ?>; border-radius:10px; background-color:white;filter: grayscale(1);">
        <?php
            }
        }
        ?>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-4 px-1 px-lg-1 ser1">
    <div class="">
        <?php
        $keyquaryphone3 = "SELECT * FROM key_clinetele WHERE status = 'Active' ORDER BY num ASC LIMIT 5 OFFSET 11";
        $keyquery_runphone3 = mysqli_query($conn, $keyquaryphone3);
        if ($keyquery_runphone3) {
            foreach ($keyquery_runphone3 as $keyrowrunphone3) {
        ?>
            <img src="admin/uploads/<?php echo $keyrowrunphone3['icon']; ?>" class="img-fluid mt-5" style="border:0px solid <?php echo $keyrowrunphone3['color']; ?>; border-radius:10px; background-color:white;filter: grayscale(1);">
        <?php
            }
        }
        ?>
    </div>
</div>

                   
                </div>
    </div>    
</section>
    <!----Client---->
    
    
    
    
    
    
    
    
    
    <section>
        <style>
            .ser1 {
    position: relative;
    transform: translateY(150px);
    opacity: 0;
    transition: 2s all ease;
    z-index: -999 !important;
}

.ser1.active {
    transform: translateY(0);
    opacity: 1;
}

.ser2 {
    position: relative;
    transform: translateY(-200px);
    opacity: 0;
    transition: 3s all ease;
    z-index: -999 !important;
}

.ser2.active {
    transform: translateY(0);
    opacity: 1;
}
        </style>
        
       <script>
  

    // service
    function serA() {
        var reveals = document.querySelectorAll(".ser1");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 100;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }
    window.addEventListener("scroll", serA);

    function serB() {
        var reveals = document.querySelectorAll(".ser2");

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 100;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("active");
            } else {
                reveals[i].classList.remove("active");
            }
        }
    }
    window.addEventListener("scroll", serB);
    </script>
    <!--seamless section-->
    <section class="pb-lg-5">
        <style>
            .bgellipse{
                position:absolute;
                top: 300px;
                right: -200px;
                z-index: -99999;
            }
        </style>
    <div class="container-sm px-lg-0 px-lg-3">
        <div class="row px-lg-0  px-3 pb-5 pb-lg-0">
            <div class="col-lg-6 col-md-12 col-12 pt-lg-4 p-0 px-lg-3">
                <div class="pt-lg-5">
                    <h1 class=" themeSlide rHeadingSet  pt-5">Seamless Integration for data flow across platforms</h1>
                <p class="fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">
                   Seamless integration services ensure smooth data flow across platforms, enhancing efficiency, reducing redundancies, and providing real-time insights for better decision-making.
                </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 pt-3 px-0 hidden-content show-content position-relative">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3 px-0 px-lg-1 ser1">
                        <div class="">
                            <img src="assets/images/seamless/aws.png" class="img-fluid">
                            <img src="assets/images/seamless/paypal.png" class="img-fluid">
                            <img src="assets/images/seamless/netsuit.png" class="img-fluid">
                            <img src="assets/images/seamless/zapier.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-3 px-0 px-lg-1 ser2">
                        <div class="">
                            <img src="assets/images/seamless/wordpress.png" class="img-fluid">
                            <img src="assets/images/seamless/sap.png" class="img-fluid">
                            <img src="assets/images/seamless/microsoft_dynamic.png" class="img-fluid">
                            <img src="assets/images/seamless/filenet.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-3 px-0 px-lg-1 ser1">
                        <div class="">
                            <img src="assets/images/seamless/google.png" class="img-fluid">
                            <img src="assets/images/seamless/mailchimp.png" class="img-fluid">
                            <img src="assets/images/seamless/mulesoft.png" class="img-fluid">
                            <img src="assets/images/seamless/webhook.png" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-3 px-0 px-lg-1 ser2">
                        <div class="">
                            <img src="assets/images/seamless/meta.png" class="img-fluid">
                            <img src="assets/images/seamless/hub.png" class="img-fluid">
                            <img src="assets/images/seamless/stripe.png" class="img-fluid">
                            <img src="assets/images/seamless/cash.png" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="bgellipse d-lg-block d-none">
                    <img src="assets/images/seamless/Ellipse 4.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>
    <!--end seamless section-->
    
    <!--core offering-->
<!--    <style>-->
<!--        .coreoffcard{-->
<!--            border-radius:15px;-->
<!--        }-->
<!--        .error {-->
<!--    color: #0D4282;-->
<!--}-->
<!--    </style>-->
<!--    <section class="mt-lg-5 py-lg-5">-->
<!--    <div class="container-sm px-lg-0 px-lg-3">-->
<!--        <div class="row px-lg-0  px-3 pb-5 pb-lg-0">-->
<!--            <div class="col-lg-4 col-md-4 col-12 pt-lg-4 p-0 px-lg-3">-->
<!--                <div class="pt-lg-5">-->
<!--                    <h1 class="col-lg-9 px-0 themeSliderHeadingSet pt-5">Core Offerings</h1>-->
<!--                <p class="col-lg-10 fw-normal mt-2 text-justif pt-3 ps-lg-0 hidden-content show-content">-->
<!--                    At CRM Landing, our team of expert software developers is committed to delivering the best Salesforce -->
<!--                </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-md-4 col-12 hidden-content show-content">-->
<!--                <div class="shadow coreoffcard p-4">-->
<!--                    <img src="assets/images/core_offering/Pexels Photo by Vlada Karpovich.png" class="img-fluid">-->
<!--                    <h5 class="righti con-small error pt-3 py-2">Consulting & Implementation</h5>-->
<!--                    <p>Engage with industry experts to identify gaps, configure Salesforce clouds to redefine business processes and workflows, and integrate systems like ERP to automate and enhance productivity.</p>-->
<!--                </div>-->
                
<!--            </div>-->
            
<!--            <div class="col-lg-4 col-md-4 col-12 hidden-content show-content">-->
<!--                <div class="shadow coreoffcard p-4">-->
<!--                    <img src="assets/images/core_offering/Pexels Photo by Vlada Karpovich (1).png" class="img-fluid">-->
<!--                    <h5 class="righti con-small error pt-3 py-2">Product Development</h5>-->
<!--                    <p>With 10+ products built, we help you bring your innovative Salesforce product ideas to life through collaborative brainstorming, design, integration, development, rigorous testing, deployment, and ongoing support.</p>-->
<!--                </div>-->
                
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


    <!--end core offering-->
    
    </section>
    <!---CASE STUDIES Desktop ---->
    <section class="caselapnone">
        <div class="row">
                <div class="col-lg-12">
                    <div class="title_all_box style_three text-center dark_color">
                        <div class="pd_bottom_50"></div>
                        <div class="title_sections three">
                            <h3>PRODUCTS</h3>
                        </div>

                        <!--===============spacing==============-->
                        <div class="pd_bottom_50"></div>
                        <!--===============spacing==============-->
                    </div>
                </div>
            </div>
        <section class="newsteller style_one bg_service_1 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            
            <div class="container-fluid ">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div style="padding-left: 30px;">
                                        <div class="serviceTitle ">
                                            <!-- <span>Product #1</span> -->
                                        </div>

                                        <div>
                                            <h1 class="fs-3">Dealer Management System:</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p>DMS is a comprehensive solution that covers all the features required by a Distributor, Dealer and Retailer in any distribution network of manufacturing and retail industry. Capable of Tracking Secondary Sales Data.</p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                            <a href="products?nm=DMS+for+Primary+Sales" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="padding-right: 0px; padding-left: 0px;">
                        <img src="assets/images/case/dealer-management-system-home.jpg" class="abcdef" alt="DEALER_MANAGEMENT_SYSTEM" />
                    </div>
                </div>
            </div>


        </section>

        <section class="newsteller style_one bg_service_2 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-left: 0px; padding-right: 0px;">
                        <img src="assets/images/case/sales-force-automation1.jpg" class="abcdef" alt="Loan_Origination_System" />
                    </div>

                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div style="padding-left: 30px;">
                                        <div class="serviceTitle">
                                            <!-- <span>Product #2</span> -->
                                        </div>

                                        <div>
                                            <h1 class="fs-3">Sales Force Automation:</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p>The Sales Force Automation Solution is a comprehensive solution that covers all the crucial features needed by the Sales Team of any Manufacturing or Retail Sector company to better manage their network of Distributors, Dealer and Retailers. </p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=Sales+Force+Automation+[SFA]" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="newsteller style_one bg_service_3 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div style="padding-left: 30px;">
                                        <div class="serviceTitle">
                                            <!-- <span>Product #3</span> -->

                                        </div>

                                        <div>
                                            <h1 class="fs-3 ">WhatsApp Integration</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p>WhatsApp Integration streamlines communication between your sales and support teams and your customers. This tool eases managing customer relationships, offering everything from tailored message prompts to comprehensive dashboards for tracking leads and managing inquiries.</p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=WhatsApp+Integrator" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12" style="padding-right: 0px; padding-left: 0px;">
                        <img src="assets/images/case/whatsapp-integration-home.jpg" class="abcdef" alt="WhatsApp Integration" />
                    </div>
                </div>
            </div>


        </section>
        
          <section class="newsteller style_one bg_service_4h">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-left: 0px; padding-right: 0px;">
                        <img src="assets/images/case/org-analysis-Home.jpg" class="abcdef" alt="ORG-Analysis" />
                    </div>

                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div style="padding-left: 30px;">
                                        <div class="serviceTitle">
                                            <!-- <span>Product #4</span> -->
                                        </div>

                                        <div>
                                            <h1 class="fs-3">Org Analysis:</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p>Developed on Salesforce AppExchange, Org Analysis is a free tool that streamlines all the data management tasks within your Salesforce Org. It offers comprehensive insights into an Organization’s Salesforce Org by offering In-depth analysis by providing downloadable Excel files. </p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=Org+Analysis" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        
        
    </section>
    <!---CASE STUDIES Desktop ---->
    <!---CASE STUDIES Mobile ---->
    <section class="caseMobilenone">
        <section class="newsteller style_one bg_service_1 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid ">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-right: 0px; padding-left: 0px;">
                        <img src="assets/images/case/dealer-management-system-home.jpg" class="" alt="DEALER_MANAGEMENT_SYSTEM" />
                    </div>
                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div>
                                        <div class="serviceTitle ">
                                            <span>ASSET #1</span>
                                        </div>

                                        <div>
                                            <h1 class="fs-3">Dealer Management System:</h1>
                                        </div>

                                        <div class="pt-2">
                                            <p class="lh13">DMS is a comprehensive solution that covers all the features required by a Distributor, Dealer and Retailer in any distribution network of manufacturing and retail industry. Capable of Tracking Secondary Sales Data.</p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                            <a href="products?nm=DMS+for+Primary+Sales" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>

                </div>
            </div>


        </section>

        <section class="newsteller style_one bg_service_2 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-left: 0px; padding-right: 0px;">
                        <img src="assets/images/case/sales-force-automation1.jpg" class="" alt="Loan_Origination_System" />
                    </div>

                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div>
                                        <div class="serviceTitle">
                                            <span>Product #2</span>
                                        </div>

                                        <div>
                                            <h1 class="fs-3">Sales Force Automation:</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p class="lh13">The Sales Force Automation Solution is a comprehensive solution that covers all the crucial features needed by the Sales Team of any Manufacturing or Retail Sector company to better manage their network of Distributors, Dealer and Retailers. </p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=Sales+Force+Automation+[SFA]" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="newsteller style_one bg_service_3 ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-right: 0px; padding-left: 0px;">
                        <img src="assets/images/case/whatsapp-integration-home.jpg" class="" alt="WhatsApp Integration" />
                    </div>
                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div>
                                        <div class="serviceTitle">
                                            <span>Product #3</span>
                                        </div>

                                        <div>
                                            <h1 class="fs-3 ">WhatsApp Integration</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p class="lh13">WhatsApp Integration streamlines communication between your sales and support teams and your customers. This tool eases managing customer relationships, offering everything from tailored message prompts to comprehensive dashboards for tracking leads and managing inquiries.</p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=WhatsApp+Integrator" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
        
        
        <section class="newsteller style_one bg_service_4h ">
            <!--===============spacing==============-->

            <!--===============spacing==============-->
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12" style="padding-right: 0px; padding-left: 0px;">
                        <img src="assets/images/case/org-analysis-Home.jpg" class="" alt="ORG-Analysis" />
                    </div>
                    <div class="col-lg-6 col-md-12 row">
                        <div class="pd_top_10"></div>
                        <div class="item_scubscribe">
                            <div class="input_group">
                                <div class="col-lg-12 pb-2">
                                    <div>
                                        <div class="serviceTitle">
                                            <span>Product #4</span>
                                        </div>

                                        <div>
                                            <h1 class="fs-3 ">Org Analysis</h1>
                                        </div>
                                        <div class="pt-2">
                                            <p class="lh13">Developed on Salesforce AppExchange, Org Analysis is a free tool that streamlines all the data management tasks within your Salesforce Org. It offers comprehensive insights into an Organization’s Salesforce Org by offering In-depth analysis by providing downloadable Excel files.</p>
                                        </div>
                                        <div class="pt-2 pb-3">
                                          <a href="products?nm=Org+Analysis" class="service-btn fs-6">READ MORE <img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="pd_top_10"></div>
                        </div>
                    </div>

                </div>
            </div>


        </section>
    </section>
    <!---CASE STUDIES Mobile ---->
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

                            <!--<h5 style="margin-top:20px;">Experiences that Speak for Themselves</h5>-->
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
                        <div class="swiper-container swiper-initialized swiper-horizontal swiper-backface-hidden" data-swiper="{
                                 &quot;autoplay&quot;: {
                                   &quot;delay&quot;: 6000
                                 },
                                 &quot;freeMode&quot;: false,
                                 &quot;loop&quot;: true,
                                 &quot;speed&quot;: 1000,
                                 &quot;centeredSlides&quot;: false,
                                 &quot;slidesPerView&quot;: 2,
                                 &quot;spaceBetween&quot;: 30,
                                 &quot;pagination&quot;: {
                                   &quot;el&quot;: &quot;.swiper-pagination&quot;,
                                   &quot;clickable&quot;: true
                                 },
                                  
                                 &quot;breakpoints&quot;: {
                                    &quot;1200&quot;: {
                                       &quot;slidesPerView&quot;: 3
                                    },
                                    &quot;1024&quot;: {
                                     &quot;slidesPerView&quot;: 3 
                                    },
                                   &quot;768&quot;: {
                                     &quot;slidesPerView&quot;: 2 
                                   },
                                   &quot;576&quot;: {
                                     &quot;slidesPerView&quot;: 1 
                                   },
                                   &quot;0&quot;: {
                                     &quot;slidesPerView&quot;: 1 
                                   }
                                 }
                               }">
                            <div class="swiper-wrapper" id="swiper-wrapper-92c62755295c326b" aria-live="off">
                                <?php
                                $test = "SELECT * FROM `testimonial` WHERE status='Active'";
                                $testresult = mysqli_query($conn, $test);
                                if ($testresult) {
                                    foreach ($testresult as $testrow) {
                                        # code...

                                ?>
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 3" data-swiper-slide-index="0" style="width: 350px; margin-right: 30px;">
                                            <div class="testimonial_box" style="background-color: white; height:370px;padding:30px; border-top:6px solid <?php echo $testrow['color'] ?>;">
                                                <div class="box_inner not_ovelay">
                                                    <div class="rating text-center">
                                                        <h6 style="font-weight: 500;"><?php echo  $testrow['heading'] ?></h6>
                                                    </div>
                                                    <p class="description" style="height: 215px; overflow: hidden;">
                                                        <?php echo $testrow['content'] ?>
                                                    </p>
                                                    <div class="client_bx" style="padding-top:10px;">
                                                        <div class="image_box" style="border:2px solid <?php echo $testrow['color'] ?>;border-radius: 0%">
                                                                <img src="admin/uploads/<?php echo $testrow['img']; ?>" alt="image">
                                                                <img src="assets/images/gallery/Gall_7.jpg" alt="image">
                                                            </div>
                                                        <div class="left_s">
                                                            <h2 class="title" style="font-weight: 500;"><?php echo $testrow['name'] ?></h2>
                                                            <p style="line-height:14px;font-size:13px"><?php echo $testrow['designation'] ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } else {
                                    echo "Data not found";
                                }
                                ?>


                                <br>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pd_top_40"></div>
    </section>
    <!---Contact Us---->
    <section class="newsteller style_one bg_dark_1">
        <!--===============spacing==============-->

        <!--===============spacing==============-->
        <div class="container-fluid" id="contact_form">
            <div class="row">
                <div class="col-lg-6 col-md-12 p-0" style="background-image: url('assets/images/service_icon/contact_us.jpg'); background-size: cover;">
                </div>
                <div class="col-lg-6 col-md-12 row ">
                    <div class="pd_top_10"></div>
                    <div class="item_scubscribe">
                        <div class="input_group">
                            <div class="col-lg-12 pb-1">
                                <h2 class="mb-3" style="color:white">Get a Zero-Cost Salesforce Consultation</h2>
                            </div>
                            <form class="" method="post" action="">
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <div class="group">
                                            <input type="text" class="input1 border-0" name="name" style="background-color:#f8f9fa;" id="input" pattern="[a-z A-Z]*" oninput="g()" required />
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label id="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div class="group">
                                            <input type="text" class="input1 border-0" onchange(new()) name="email" id="input1" onchange="e()" required />
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
                                            <select name="countryCode" required class="state_select select2-hidden-accessible border-0" style="color:#b6b6b6 !important;">
                                                <option data-countryCode="US" value="USA (+1)">USA (+1)</option>
                                                <option data-countryCode="GB" value="UK (+44)">UK (+44)</option>
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
                                                <option data-countryCode="IE" value="India (+91)" Selected>IND (+91)</option>
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
                                                <input type="text" class="input1 border-0" id="myInput" maxlength="11" minlength="10" onchange(new()) oninput="f(this)" name="contact" required onfocus="label_area()"/>
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
                                            <textarea type="text" class="input1 border-0" style="color: white; width: 100%;" name="message"></textarea>
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label>Message</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-5 ">
                                        <div>
                                            <div class="mt-3 d-flex flex-lg-row flex-column justify-content-between">
                                                <!-- <button type="button" class="theme-btn-Set fs-6 border-0 rounded-0" >SUBMIT <img class="btnReadMorecs " src="assets/images/service_icon/Right_arrow.png" alt=""></button>
                       -->
                                                <div class="g-recaptcha" data-sitekey="6LfPu4wpAAAAANxOLnoiNVICxoitqDRORFoMOfpy">

                                                </div>
                                                <div class="mt-4 pt-2">
                                                    <input type="hidden" value="0" id="callReq" name="callReq">
                                                    <input type="hidden" value="0" id="validEmail">
                                                    <input type="hidden" value="0" id="validPhonenumber">
                                                    <span style="width:120px;" id="submit" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex"><input type="submit" name="submit" value="SUBMIT" class="inptypeSubBtn" style="color:black !important;"><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                                                    <span style="width:120px;" id="button" class="theme-btn-Set-home fs-6 border-0 rounded-0 d-flex" onclick="showalert()"><input type="button" value="SUBMIT" class="inptypeSubBtn" style="color:black !important;"><img class="btnReadMorecs" style="margin-top:6px;" src="assets/images/service_icon/Right_arrow.png" alt=""></span>
                                                </div>
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
    <!---Contact Us---->

</div>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
</div>

<?php require('include/footer.php'); ?>


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
</script>
<script>
    VANTA.NET({
        el: "#your-element-selector1",
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


    function reqCall() {
        document.getElementById('callReq').value = "1";

    }
</script>
<!---========================== javascript ==========================-->
</body>

</html>

<?php
if (!empty($_POST['submit'])) {

    $Name = $_POST['name'];
    $callReq = $_POST['callReq'];
    $Email = $_POST['email'];
    $Country = $_POST['countryCode'];
    $Contact = $_POST['contact'];
    $Message = $_POST['message'];
    // recaptcha
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
                //success == 1
                $Query = "INSERT INTO `Enquiry`(`name`, `email`, `country`, `contact`, `file`, `message`, `callRequest`, `date`, `status`,`companyName`,`designation`) VALUES ('$Name','$Email','$Country','$Contact','','$Message', '$callReq', now(), 'Active','','')";
                $data = mysqli_query($conn, $Query);
                if ($data) {

                    ?>
                    <script>
                    showToast("Thanks! We’ll get back to you soon.","green","/");
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
            } else {
                //success==0;
                // ReCAPTCHA verification failed
                // Handle the error, for example, redirect the user back to the form
                header("location:index.php");
                exit;
            }
        }
    }
}
?>
<script>
    var response = grecaptcha.getResponse();

    if (response.length == 0) {
        alert('Done');
    } else {
        alert('Done');
    }
    localStorage.setItem("name=xyz")
</script>