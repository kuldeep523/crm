<?php
include("admin/connection.php");
include('include/header.php'); ?>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
<head>
    <title>Case Studies-CRM Landing</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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


.main_height{
    height:450px;
}
.img_logo_380{
        display:none;
    }
    .img_logo_480{
        display:none;
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
    }
    
    @media (min-width:1400px){
         .main_height{
            height:535px;
        }
    }

</style>
<script>
  window.addEventListener("scroll", function() {
    var container = document.querySelector(".coloringline");
    var icons = document.querySelectorAll(".righticon2, .righticon-small2");
    var scrollPosition = window.scrollY + window.innerHeight / 2; // Center of the viewport

    var containerTop = container.getBoundingClientRect().top + window.scrollY;
    var containerHeight = container.clientHeight;

    var progress = (scrollPosition - containerTop) / containerHeight;
    progress = Math.min(progress, 1);

    // Set the height of the before element
    container.style.setProperty('--before-height', progress * 100 + '%');

    var fillHeight = containerHeight * progress;

    icons.forEach(function(icon, index) {
        var iconRect = icon.getBoundingClientRect();
        var iconTop = iconRect.top + window.scrollY - containerTop;
        var iconBottom = iconTop + iconRect.height;

        // Adjust the condition to ensure the last icon gets colored
        if (fillHeight >= iconTop || (index === icons.length - 1 && fillHeight >= iconBottom)) {
            icon.classList.add('icon-colored');
        } else {
            icon.classList.remove('icon-colored');
        }
    });
});

</script>






<section style="margin-top:80px;position:relative;" id="culture">
        <div class="container-fluid p-0 befor pt-5 pt-md-5 pt-lg-5 main_height" style="background:url(assets/images/case/newmr.png);background-size: cover;">
        <div class="row position-relative">
            <div class="col-lg-8 col-12 p-0 ">
                <div class="pt-md-5 pt-lg-5 mt-xxl-4">
                    <!--<img src="assets/images/case/dark-logo1.png" alt="" style="width:250px; height:90px" class="imgchange d-lg-block d-none">-->
                    <!--<img src="assets/images/case/dark-logo.png" alt="" style="width:170px; height:70px" class="bg-light  img_logo_480 mt-4">-->
                    <!--<img src="assets/images/case/dark-logo2.png" alt="" style="width:170px; height:70px" class="bg-light  img_logo_380 mt-2">-->
                </div>

                <div class="me-lg-1">
                    <div class="ps-2 mt-5 mt-lg-3 mt-md-3 row">
                        <h1 class="text-light ms-lg-4 ps-lg-5 fsLarge col-lg-10 col-12 d-lg-block d-none">How a Leading Nutrition & Specialty Pharma Company Transformed Field Force Operations and HCP Engagement with Salesforce MR App</h1>
                        <h1 class="text-light ms-lg-4 ps-lg-5 fsLarge col-lg-10 col-12 d-lg-none d-block">How a Leading Nutrition & Specialty Pharma Company<br>Transformed Field Force Operations and HCP<br> Engagement with Salesforce MR App</h1>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 pe-lg-5 col-12 d-lg-block d-none">
                <div class="container-fluid " id="contact_form">
                    <div class="row align-items-start d-flex">

                        <div class="col-lg-12 col-md-12 row pe-lg-5">

                            
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
      <div class="container d-lg-none d-block p-0">
            <div class="row">
                <div class="col-12 p-0">
                    <p class="pt-3" style="text-align:justify;padding:0 30px;">
                    A leading nutrition and specialty pharma company operating across multiple therapeutic and nutritional segments — Infant Nutrition, Maternal Nutrition, and Adult Nutrition — faced the challenge of managing a large, geographically dispersed field force with no unified system for doctor engagement, sample tracking, or field activity visibility. With Medical Representatives covering thousands of Paediatricians, Gynaecologists, and General Physicians across India, the absence of a structured MR automation platform led to inconsistent HCP coverage, compliance risks, and limited real-time insight for field leadership. By partnering with CRM Landing, they implemented a comprehensive Salesforce-powered MR App — enabling end-to-end field force automation from pre-call planning to post-visit CRM sync, across every product segment and territory. </p>
                    <div class="item_scubscribe bg-light d-lg-none d-block px-4 mt-3">
                        <div class="input_group">
                            <div class="col-lg-12">
                                <h5 class="py-4 text-center error">Book Consulting Call</h5>
                            </div>
                            <form class="" method="post" data-name="Subscibe" action="">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="group">
                                            <input type="text" class="input1 text-center border-0 text-dark" name="companyName" style="background-color:#f8f9fa;"  pattern="[a-z A-Z]*" required />
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label  class="text-center w-100">Company Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="group">
                                            <input type="text" class="input1 border-0 text-center text-dark" name="name" style="background-color:#f8f9fa;" id="inputname12" pattern="[a-z A-Z]*" oninput="g2()" required />
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label id="nameLabel12" class="text-center w-100">Name</label>
                                        </div>
                                    </div>
                                     <div class="col-lg-12 mt-4">
                                        <div class="group">
                                            <input type="text" class="input1 border-0 text-center text-dark" onchange(new()) name="email" id="input13" onchange="e2()" required />
                                            <span class="highlight"></span>
                                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                            <label id="email12" class="text-center w-100 d-block">Email</label>
                                        </div>
                                        <div class="error fs-6 text-danger" id="emailError12">

                                        </div>
                                        <div class="error fs-6 text-success" id="emailSuccess12">

                                        </div>
                                    </div>

                                     <div class="col-lg-12 row mt-4" style="paddin g-left:0px;">
                                        
                                        <div class="c ol-lg-12">
                                            <div class="group">
                                                <input type="text" class="input1 border-0 text-center text-black" id="myInput12" maxlength="11" minlength="10" onchange(new()) oninput="f2(this)" name="contact" required />
                                                <span class="highlight"></span>
                                                <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                                <label id="place12" class="d-block text-center w-100">Phone</label>
                                            </div>
                                            <div class="error fs-6 text-danger" id="phoneError12">

                                            </div>
                                            <div class="error fs-6 text-success " id="phoneSuccess12">

                                            </div>
                                        </div>
                                    </div>


                                     <div class="col-lg-12 mt-3 d-flex  justify-content-center bg-light">
                        
                                            <input type="hidden" value="0" id="callReq" name="callReq">
                                            <input type="hidden" value="0" id="validEmail12">
                                            <input type="hidden" value="0" id="validPhonenumber12">
                                            <span style="width:120px;margin-left:-10px" id="submit12" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex  bg-transparent"><input type="submit" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;color:#fff!important"></span>
                                            <span style="width:120px;margin-left:-10px" id="button12" class="theme-btn-Set-home fs-6 border-0 rounded-0 d-flex bg-transparent"><input type="button" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;color:#fff!important"></span>
                                       
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    <div class=" ps-lg-5 coloringline" id="dynamic-content">
        <div class="row p-lg-0 ">
            <div class="col-lg-7 p-0 ">
                <p class="fw-normal mt-lg-5 mb-0  d-lg-block d-none" style="text-align: justif y;">A leading nutrition and specialty pharma company operating across multiple therapeutic and nutritional segments — Infant Nutrition, Maternal Nutrition, and Adult Nutrition — faced the challenge of managing a large, geographically dispersed field force with no unified system for doctor engagement, sample tracking, or field activity visibility. With Medical Representatives covering thousands of Paediatricians, Gynaecologists, and General Physicians across India, the absence of a structured MR automation platform led to inconsistent HCP coverage, compliance risks, and limited real-time insight for field leadership. By partnering with CRM Landing, they implemented a comprehensive Salesforce-powered MR App — enabling end-to-end field force automation from pre-call planning to post-visit CRM sync, across every product segment and territory. </p>
                <h3 class="mt-lg-5 righticon position-relative pt-3"> 
                <div class="righticon2">
                        <img src="assets/images/case/iconbig.png">
                    </div>
                    The <span style="color:#00A1E0">Challenges</span></h3>
                <h5 class="righticon-small position-relative error">
                     <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Unstructured and Inconsistent </h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;">HCP Coverage With a large field force spread across urban and semi-urban territories, there was no standardised system for planning or tracking doctor visits. Monthly Tour Plans were created manually, route optimisation was absent, and managers had no real-time visibility into whether reps were meeting the right doctors at the right frequency — leading to uneven HCP coverage across segments.  </p>
                <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Paper-Based Sample Distribution with No Traceability </h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;">Sample allocation and distribution to Paediatricians, Gynaecologists, and General Physicians was managed through physical forms and manual reconciliation at month end. There was no real-time visibility into how many samples had been issued, to which doctor, by which rep — creating inventory leakage, compliance exposure, and audit risk particularly in the context of infant nutrition marketing regulations. </p>
                <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    No Doctor Intelligence Before Field Visits Medical Representatives walked into doctor visits</h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;"> without consolidated pre-call intelligence — no visibility into last visit outcomes, pending commitments, prescription trends, or competitor brand activity. Every visit started from scratch, reducing the quality and relevance of the interaction for the HCP. </p>
                <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Manual and Disconnected e-Detailing Product </h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;">presentations to doctors relied on printed brochures and physical visual aids — with no standardisation across the field force, no tracking of doctor engagement per product, and no feedback loop back to marketing or brand teams at headquarters. Different reps presented differently, leading to inconsistent brand messaging across territories.  </p>
                 <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Lack of Management Reporting & Cross-LoB Visibility </h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;">With no single dashboard or reporting layer, senior leadership had limited real-time insight into sales pipeline health, dealer productivity, or service performance across segments. Decisions were driven by delayed, manually compiled reports. </p>
                <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Compliance Risk Around Nutritional </h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;">Product Marketing Operating in the infant nutrition segment requires strict adherence to regulatory guidelines governing sample distribution limits, promotional activity, and HCP engagement. Without a system enforcing these controls at the field level, the company faced ongoing compliance risk with no audit trail to demonstrate adherence during regulatory reviews.  </p>
                <h5 class="righticon-small position-relative error">
                      <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Limited Field Visibility for Leadership</h5>
                <p class="fw-normal mt-2 text-justif y" style="text-align: justif y;"> Field managers and senior leadership depended on manually compiled MIS reports to understand team performance, doctor coverage, and brand detailing activity. By the time reports reached leadership, the data was already days old — making course correction slow and reactive rather than proactive. </p>
                <h3 class="my-5 righticon position-relative  pt-3">
                    <div class="righticon2">
                        <img src="assets/images/case/iconbig.png">
                    </div>
                    The <span style="color:#00A1E0">Solution</span></h3>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Doctor (HCP) 360° Profile with Pre-Call Intelligence</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> A comprehensive Doctor 360° profile was built for every HCP in the field force's coverage universe — consolidating visit history, last sample issued, prescription trends, competitor brand share, and pending commitments in a single screen. Before every visit, the MR reviews this profile and receives AI-driven recommendations on which product to detail, which sample to carry, and what message to lead with — ensuring every call is prepared and purposeful. </p>
                <h5 class="righticon-small position-relative error ">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Monthly Tour Planning with Smart Route Optimisation </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">A structured Monthly Tour Planning module was implemented, allowing MRs to plan their doctor coverage schedule in advance with manager approvals. Smart route optimisation minimises travel time and maximises daily visit count — ensuring the right doctors are covered at the right frequency across every territory and nutritional segment.  </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    GPS Geo-Fenced Check-In & Verified Attendance</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> On arrival at a clinic or hospital, the MR performs a GPS geo-fenced check-in that logs time-stamped, location-verified attendance directly into manager dashboards — eliminating proxy attendance entirely. Managers get a real-time map view of their team's field activity, visit durations, and daily call completion status without a single phone call.  </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Interactive e-Detailing with Engagement Scoring </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">HTML5-based interactive e-detailing presentations were deployed across the field force — with embedded video, slide-level engagement tracking, and real-time doctor feedback capture during every product presentation. Every second spent on each slide is recorded, and doctor engagement scores feed directly into next visit recommendations for that HCP — giving brand teams reliable intelligence on which messages resonate and which don't. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Digital Sample Distribution & Inventory</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> Tracking Sample allocation was moved fully onto the platform — with each MR's inventory tracked from allocation through distribution at the doctor level in real time. Distribution is logged against the doctor's profile at the point of visit, eliminating manual forms and end-of-month reconciliation. HQ receives a consolidated view of sample consumption by product, territory, and rep — enabling smarter allocation and reducing wastage across the field force.  </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Structured RCPA Capture & Brand Intelligence</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> A structured RCPA module was implemented, enabling MRs to capture chemist-level prescription data — brand-wise prescription share, competitor activity, and new launch feedback — after every detailing visit. This data aggregates into territory-level brand performance dashboards at HQ, giving product and marketing teams reliable ground-level prescription intelligence for the first time. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    UCPMP 2024 Compliant Controls Built-in compliance controls</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> were configured across sample distribution limits, promotional material tracking, CME budgets, and gift declarations — ensuring every field interaction is logged against each HCP with a complete audit trail. Sample distribution caps are enforced automatically at the system level, preventing over-distribution before it happens rather than catching it after the fact. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Post-Visit CRM Sync & Outcome Logging Before leaving</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> every clinic, the MR logs visit outcome, doctor commitments, expense entries, and follow-up scheduling — all from the app in under two minutes. The Salesforce record updates in real time, follow-up reminders trigger automatically, and HQ alert workflows fire based on visit outcome — ensuring no commitment falls through after the rep leaves. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Real-Time Field Dashboards & MR Performance</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> KPIs Field managers and HQ leadership now operate from live dashboards tracking daily call averages, doctor coverage percentage, sample utilisation, RCPA completion rates, e-detailing engagement scores, and expense submission status — by rep, territory, and region. Exception reports highlight underperformance early, enabling intervention well before month-end reviews. </p>
                <div style="background-color:#EAF5FE;" class="p-3 ps-4 pe-5 my-5">
                    <div class="d-lg-flex error">
                        <div style="width: 17%;font-size:50px;font-weight:800;">45%</div>
                        <h5 class="mt-2 ms-3">Leads got lost and customer faced issue in getting a proper quote.</h5>
                    </div>
                </div>
                <h3 class="my-5 righticon position-relative  pt-3">
                    <div class="righticon2">
                        <img src="assets/images/case/iconbig.png">
                    </div>
                    The <span style="color:#00A1E0">Benefit</span></h3>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Consistent, Prepared HCP Engagement Across Every Territory </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">With Doctor 360° profiles and AI-driven pre-call intelligence in the hands of every MR, field interactions became structured, relevant, and outcome-driven. Doctors received more informed, personalised product conversations — strengthening HCP relationships across Paediatric, Gynaecology, and General Physician segments simultaneously. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Complete Sample Traceability with Zero Leakage </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">The shift from paper-based sample tracking to real-time digital distribution eliminated inventory leakage and manual reconciliation entirely. Every sample issued is logged against the right doctor, by the right rep, at the right visit — giving compliance and medical affairs teams a clean, auditable record at all times. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Standardised Brand Messaging Across the Field</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;"> Force By replacing printed brochures with interactive HTML5 e-detailing, the company achieved consistent, brand-approved product presentations across every rep and every territory. Slide-level engagement data gave brand teams reliable feedback on message effectiveness — enabling smarter content decisions for future campaigns. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Ground-Level Prescription Intelligence</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">at HQ Structured RCPA capture transformed how the brand and marketing teams understood market dynamics. For the first time, prescription share trends, competitor activity, and new launch reception were visible at territory and chemist level in real time — informing brand strategy with actual field data rather than periodic surveys. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Regulatory Compliance Built Into Daily Operations</h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">With UCPMP 2024 compliant controls enforced at the system level, compliance became a byproduct of normal field activity rather than a separate audit exercise. Distribution limits, promotional tracking, and HCP engagement logs are maintained automatically — keeping the company audit-ready at all times without additional overhead on field teams.  </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Real-Time Leadership Visibility </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">Across All Segments Senior leadership and field managers moved from weekly MIS reports to live dashboards — with real-time visibility into call averages, coverage rates, brand detailing performance, and rep productivity across every territory and nutritional segment. Decisions that previously waited for month-end data are now made in the moment. </p>
                <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>Scalable Field Force Platform </h5>
                <p class="fw-normal mt-2" style="text-align: justif y;">Scalable Foundation Across Lines of Business Because the solution was built on a reusable, asset-first architecture on Salesforce, onboarding a new vehicle segment or expanding to additional dealers requires minimal rework. The platform is designed to grow with the business — making it a long-term strategic asset, not just an implementation. </p>
                <!-- <h5 class="righticon-small position-relative error">
                    <div class="righticon-small2">
                        <img src="assets/images/case/iconcase.png">
                    </div>
                    Efficient Legal Compliance</h5> -->
                 <!--<span class="righticon-small" style="visibility:hidden;padding:1px"></span>-->
               
                <!-- <div class="d-lg-none d-block">
                     <p class="fw-normal" style="text-align: justif y;">Customers can conveniently sign documents using the DocuSign feature, ensuring legal compliance without any hassle.</p>
                     <div style="background-color:#EAF5FE;" class="px-3 my-5 ">
                        <div class=" error py-3">
                            <div style="width: 17%;font-size:50px;font-weight:800;">95%</div>
                            <h5>Leads got lost and customer faced issue in getting a proper quote.</h5>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        
    </div>
    <!-- <div class="d-lg-block d-none">
        <p class="fw-normal mt-2 col-7" style="text-align: justif y;margin-left:135px;">Customers can conveniently sign documents using the DocuSign feature, ensuring legal compliance without anyhassle.</p>
        <div style="background-color:#EAF5FE;margin-left:150px;" class="py-3 ps-4 pe-5 my-5 col-6" >
            <div class="d-flex error ">
                <div style="width: 17%;font-size:50px;font-weight:800;">95%</div>
                <h5 class="mt-2 ms-3">Leads got lost and customer faced issue in getting a proper quote.</h5>
            </div>
        </div>
    </div> -->
        <div class="item_scubscribe bg-light d-lg-block d-none" style="height:375px;width:295px;position:fixed;z-index:99;right:6%;top:120px;" id="Features_scroll1">
        <div class="input_group">
            <div class="col-lg-12">
                <h5 class="py-4 text-center error">Book Consulting Call</h5>
            </div>
            <form class="" method="post" data-name="Subscibe" action="">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="group">
                            <input type="text" class="input1 border-0 text-dark" name="companyName" style="background-color:#f8f9fa;" id="compeny_input" pattern="[a-z A-Z]*" oninpu t="g()" required />
                            <span class="highlight"></span>
                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                            <label id="compeny_nameLabel">Company Name</label>
                        </div>
                    </div>
                     <div class="col-lg-12 mt-3">
                        <div class="group">
                            <input type="text" class="input1 border-0 text-black" name="name" style="background-color:#f8f9fa;" id="input" pattern="[a-z A-Z]*" oninput="g3()" required />
                            <span class="highlight"></span>
                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                            <label id="nameLabel">Name</label>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-3">
                        <div class="group">
                            <input type="text" class="input1 border-0 text-dark" onchange(new()) name="email" id="input1" onchange="e3()" required />
                            <span class="highlight"></span>
                            <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                            <label id="email">Email</label>
                        </div>
                        <div class="error fs-6 text-danger" id="emailError">

                        </div>
                        <div class="error fs-6 text-success" id="emailSuccess">

                        </div>
                    </div>

                   <div class="col-lg-12 row mt-4" style="padding-left:0px;">
                                        
                                        <div class="col-lg-12">
                                            <div class="group">
                                                <input type="text" class="input1 border-0 text-black" id="myInput" maxlength="11" minlength="10" onchange(new()) oninput="f3(this)" name="contact" required />
                                                <span class="highlight"></span>
                                                <span class="bar" style="border-bottom: .1px solid lightgray;"></span>
                                                <label id="place" class="d-block">Phone</label>
                                            </div>
                                            <div class="error fs-6 text-danger" id="phoneError">

                                            </div>
                                            <div class="error fs-6 text-success " id="phoneSuccess">

                                            </div>
                                        </div>
                                    </div>


                    <div class="col-lg-12 mt-3 d-flex  justify-content-center bg-transprant">
                        
                            <input type="hidden" value="0" id="callReq" name="callReq">
                            <input type="hidden" value="0" id="validEmail">
                            <input type="hidden" value="0" id="validPhonenumber">
                            <span style="width:120px;" id="submit" class="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex  bg-transparent"><input type="submit" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;color:#fff!important"></span>
                            <span style="width:120px;" id="button" class="theme-btn-Set-home fs-6 border-0 rounded-0 d-flex bg-transparent"><input type="button" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;color:#fff!important"></span>
                       
                    </div>
                </div>
        </div>
        </form>
    </div>

                        
   </div>

</section>
<script>
    window.addEventListener('scroll', function() {
        const scrollingPoint = window.scrollY;
        const cultureElement = document.getElementById("culture");
        // alert(cultureElement.offsetHeight);
        const featuresElement = document.getElementById("Features_scroll1");
        const box = document.getElementById("yourdivid");
        
        //  alert(cultureElement);
            if (scrollingPoint >= 0 && scrollingPoint <= (cultureElement.offsetHeight-420)) {
            featuresElement.style.position = "fixed";
            featuresElement.style.top = "120px";
           
            // featuresElement.style.bottom = "0px";
        } 
        else if (scrollingPoint > (cultureElement.offsetHeight-420)) {
            featuresElement.style.position = "absolute";
            featuresElement.style.top = "";
            featuresElement.style.bottom = "0";
         
        } 
        else {
            featuresElement.style.position = "absolute";
           featuresElement.style.bottom = "0px";
            featuresElement.style.top = "150px";
        }
       
    });

    
</script>
<style>
    .read_hover{
        
    }
    .read_hover:hover h5,.read_hover:hover span{
        color:#0D4282!important;
    }
</style>
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
                                                    </style>
<section class="d-lg-block d-none mt-4">
    <div style="margin:0 70px;">
        <div class="row">
            <div class="col-12 pb-5"><h2>More <span style="color:#00A1E0">Case Studies</span></h2></div>
            <div class="col-4 pe-5">
               <div class="card border-0">
                  <img src="assets/images/case/new2.jpg" class="card-img-top" alt="...">
                  <div class="card-body px-0">
                 <a href="case_studies.php"   class="read_hover">
                         <div class="learn-more-anime" style="max-wi dth:145px;">
                              <h5 class="card-title" style="height:87px;overflow:hidden;">How a Renowned Machinery Manufacturer Increased Conversions and Streamlined Customer Experience</h5>
                                                        <a class="learn-more" href="ups.php">
                                                            <span class="circle-learn-more" aria-hidden="true">
                                                                <span class="icon-learn-more arrow-learn-more"></span>
                                                            </span>
                                                            <span class="button-text" style="text-transform: none;font-size: 16px;font-weight: 400;">Read More</span>

                                                        </a>
                                                    </div>
                    </a>
                  </div>
                </div>
            </div>
            <div class="col-4 px-4">
                <div class="card border-0" >
                  <img src="assets/images/case/new1.png" class="card-img-top" alt="...">
                  <div class="card-body px-0">
                     <a href="cycle_manufacturer.php"   class="read_hover">
                         <div class="learn-more-anime" style="max-wi dth:145px;">
                              <h5 class="card-title" style="height:87px;overflow:hidden;">World's Largest Cycle Manufacturer Boosted Sales and Streamlined Operations CRM Solution</h5>
                                                        <a class="learn-more" href="ups.php">
                                                            <span class="circle-learn-more" aria-hidden="true">
                                                                <span class="icon-learn-more arrow-learn-more"></span>
                                                            </span>
                                                            <span class="button-text" style="text-transform: none;font-size: 16px;font-weight: 400;">Read More</span>

                                                        </a>
                                                    </div>
                    </a>
                  </div>
                </div>
            </div>
            <div class="col-4 ps-5">
                <div class="card border-0">
                  <img src="assets/images/case/new3.jpg" class="card-img-top" alt="...">
                  <div class="card-body px-0">
                   <a href="ups.php"   class="read_hover">
                       
                         <div class="learn-more-anime" style="max-wi dth:145px;">
                              <h5 class="card-title" style="height:87px;overflow:hidden;">Global SCM Solutions Provider Transforms Content Management with Automatic Language Adaptation</h5>
                                                        <a class="learn-more" href="ups.php">
                                                            <span class="circle-learn-more" aria-hidden="true">
                                                                <span class="icon-learn-more arrow-learn-more"></span>
                                                            </span>
                                                            <span class="button-text" style="text-transform: none;font-size: 16px;font-weight: 400;">Read More</span>

                                                        </a>
                                                    </div>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 my-5 d-lg-block d-none" style="background-color:#eaf5fe;" >
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
                                                    <input type="submit" name="submit" value="SUBMIT" class="casebutton text-center px-4" style="border:none;border-radius: 50px;width:auto;font-size:18px;">
                                                   <input type="button" value="SUBMIT" class="inptypeSubBtn d-none" style="color:black !important;">
                                              
                                            
                                        </div>
                                    </div>
                                </div>
                            </form>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 pt-4 px-5">
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
                        showToast("Thanks! We’ll get back to you soon.","green","case_studies.php");
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
<?php
require('components/trustedItServices.php');
require('components/lets_talk.php');
?>
</div>
<script>
    //   for number velidation
 function f1(elem) {

    var inputElement1 = document.getElementById('myInput1');
    var place1 =  document.getElementById("place1");
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
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
    
    }

    if (/^[0]/.test(val1)) {
      inputElement1.value = '';
      document.getElementById("phoneError1").innerText = "Number Not start from 0";
      document.getElementById("validPhonenumber1").value = "0";
      
      
      var new1 = document.getElementById("validPhonenumber1").value;
      var new2 = document.getElementById("validEmail1").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
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
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
      
    }
    else if (val1.length<10) {
        // document.getElementById("validPhonenumber1").value = "0";
     document.getElementById("phoneError1").innerText = "Invalid Phone Number";
     document.getElementById("phoneSuccess1").innerText = "";
     document.getElementById("place1").style.display = "none";
     
     
     var new1 = document.getElementById("validPhonenumber1").value;
      var new2 = document.getElementById("validEmail1").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
     
      
    }
    else
    {
        // document.getElementById("validPhonenumber1").value = "1";
        document.getElementById("phoneSuccess1").innerText = "Valid Phone Number";
        document.getElementById("phoneError1").innerText = "";
        
       
       var new1 = document.getElementById("validPhonenumber1").value;
      var new2 = document.getElementById("validEmail1").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
       
        }
        
        
         
        
  }
  function f2(elem) {

    var inputElement12= document.getElementById('myInput12');
    var place12 =  document.getElementById("place12");
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
      
      if(new12=="1" && new22=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
    
    }

    if (/^[0]/.test(val12)) {
      inputElement12.value = '';
      document.getElementById("phoneError12").innerText = "Number Not start from 0";
      document.getElementById("validPhonenumber12").value = "0";
      
      
      var new12 = document.getElementById("validPhonenumber12").value;
      var new22 = document.getElementById("validEmail12").value;
      
      if(new12=="1" && new22=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
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
      
      if(new12=="1" && new22=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
      
    }
    else if (val12.length<10) {
        // document.getElementById("validPhonenumber1").value = "0";
     document.getElementById("phoneError12").innerText = "Invalid Phone Number";
     document.getElementById("phoneSuccess12").innerText = "";
     document.getElementById("place12").style.display = "none";
     
     
     var new1 = document.getElementById("validPhonenumber12").value;
      var new2 = document.getElementById("validEmail12").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
     
      
    }
    else
    {
        // document.getElementById("validPhonenumber1").value = "1";
        document.getElementById("phoneSuccess12").innerText = "Valid Phone Number";
        document.getElementById("phoneError12").innerText = "";
        
       
       var new12 = document.getElementById("validPhonenumber12").value;
      var new22 = document.getElementById("validEmail12").value;
      
      if(new12=="1" && new22=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
       
        }
        
        
        
        
  }
// for name velidation
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
        testflage =0;
        document.getElementById("validEmail1").value = "0";
        
        var new1 = document.getElementById("validPhonenumber1").value;
      var new2 = document.getElementById("validEmail1").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
        
        return;
      }
 
      // If all conditions pass, clear the error message
      
      document.getElementById("validEmail1").value = "1";
      document.getElementById("emailError1").innerText = "";
      document.getElementById("emailSuccess1").innerText = "Valid Email";
      
     var new1 = document.getElementById("validPhonenumber1").value;
      var new2 = document.getElementById("validEmail2").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit1").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button1").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit1").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
       
      
      testflage =1;
  }
  
  function e2() {
    var email12 = document.getElementById("input13").value;
 
      // Check if the email is in a valid format
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email12)) {
        document.getElementById("emailError12").innerText = "Please enter a valid email address.";
        document.getElementById("emailSuccess12").innerText = "";
        testflage =0;
        document.getElementById("validEmail12").value = "0";
        
        var new12 = document.getElementById("validPhonenumber12").value;
      var new22 = document.getElementById("validEmail12").value;
      
      if(new12=="1" && new22=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
        
        return;
      }
 
      // If all conditions pass, clear the error message
      
      document.getElementById("validEmail12").value = "1";
      document.getElementById("emailError12").innerText = "";
      document.getElementById("emailSuccess12").innerText = "Valid Email";
      
     var new1 = document.getElementById("validPhonenumber12").value;
      var new2 = document.getElementById("validEmail12").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit12").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button12").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit12").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
       
      
      testflage =1;
  }
  function showalert1()
{
showToast("Please Try Again.","red","/");                   
}
</script>




<!--for scroll form-->
<script>
    //   for number velidation
 function f3(elem) {
   
    var inputElement = document.getElementById('myInput');
    var place =  document.getElementById("place");
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
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
    
    }

    if (/^[0]/.test(val)) {
      inputElement.value = '';
      document.getElementById("phoneError").innerText = "Number Not start from 0";
      document.getElementById("validPhonenumber").value = "0";
      
      
      var new1 = document.getElementById("validPhonenumber").value;
      var new2 = document.getElementById("validEmail").value;
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
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
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      
      
    }
    if (val.length<10) {
        document.getElementById("validPhonenumber").value = "0";
     document.getElementById("phoneError").innerText = "Invalid Phone Number";
     document.getElementById("phoneSuccess").innerText = "";
     
     
     var new1 = document.getElementById("validPhonenumber").value;
      var new2 = document.getElementById("validEmail").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
     
      
    }
    else
    {
        document.getElementById("validPhonenumber").value = "1";
        document.getElementById("phoneSuccess").innerText = "Valid Phone Number";
        document.getElementById("phoneError").innerText = "";
       var new1 = document.getElementById("validPhonenumber").value;
      var new2 = document.getElementById("validEmail").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
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
        testflage =0;
        document.getElementById("validEmail").value = "0";
        
        var new1 = document.getElementById("validPhonenumber").value;
      var new2 = document.getElementById("validEmail").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
        
        return;
      }
 
      // If all conditions pass, clear the error message
      
      document.getElementById("validEmail").value = "1";
      document.getElementById("emailError").innerText = "";
      document.getElementById("emailSuccess").innerText = "Valid Email";
      
     var new1 = document.getElementById("validPhonenumber").value;
      var new2 = document.getElementById("validEmail").value;
      
      if(new1=="1" && new2=="1")
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-none border-0 rounded-0 d-flex bg-transparent";
      document.getElementById("submit").className="theme-btn-Set-home d-block fs-6 border-0 rounded-0 d-flex bg-transparent ";
      }
      else
      {
          document.getElementById("button").className="theme-btn-Set-home fs-6 d-block border-0 rounded-0 d-flex bg-transparent";
            document.getElementById("submit").className="theme-btn-Set-home d-none fs-6 border-0 rounded-0 d-flex bg-transparent";
      }
       
      
      testflage =1;
  }
</script>

<?php require('include/footer.php') ?>