<?php include("admin/connection.php");
include("include/header.php"); 
$id=11;
?>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
<head>
    <title>Case Studies-CRM Landing</title>
</head>
<style>
    .error {
        color: #02244D;
    }

    .line h3::before {
        content: "";
        display: block;
        width: 100px;
        height: 2px;
        background: #00A1E0;
        right: 101%;
        top: 50%;
        position: absolute;
    }

    .color {
        color: #00A1E0
    }


    .new_box {
        background: #f2f4f6;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    .case_text {
        color: #878787;
    }

    /*.case_font {*/
    /*    font-size: 20px;*/
    /*}*/

    .pt-0-5 {
        padding-top: .5rem !important;
    }

    .new_content {
        box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, .10);
    }

   
    .new_content div h3 {
        height: 63px;
        overflow: hidden;
    }
    .new_content div p {
        height: 155px;
        overflow: hidden;
    }


    @media (max-width:576px) {
        .line h3::before {
            display: none;
        }

        h1 {
            line-height: 40px;
        }
    }

    @media (min-width:1200px) and (max-width:1400px) {

        .container-fluid {
            padding: 0 90px;
        }

        .target {
            margin-top: 130px;
            margin-left: 90px;
        }
         .new_content div p {
            height: 110px!important;
            margin-bottom:0px;
            
        }
        .new_content div h3 {
             height: 56px!important;
         }
    }
    @media (min-width:1400px) {

        .container-fluid {
            padding: 0 90px;
        }

        .target {
            margin-top: 130px;
            margin-left: 90px;
        }
         .new_content div p {
            height: 110px!important;
            margin-bottom:0px;
            
        }
        .new_content div h3 {
             height: 56px!important;
         }
    }
    /*h4{*/
    /*    font-weight:400px;*/
    /*}*/
</style>
<!--<div class="target">-->
<!--    <a href="indx.php">Home</a> > Case Studies > Cycle Manufacturing-->
<!--</div>-->
<section class="py-5 mar_had">
    <div class="container-fluid pe-lg-0">
        <div class="row">
            <div class="col-md-6 ps-lg-5 p-0 d-block d-lg-none">
                <div class="ps-lg-5 ">
                    <img src="assets/images/case/cycle_manufacturer.jpg" alt="" height="523">
                </div>
            </div>
            <div class="col-md-6 p-lg-0 px-4 mt-3 mt-lg-0">
                <div class="head">
                    <h1 class="fsLarge">
                        World's Largest Cycle Manufacturer Boosted Sales and Streamlined Operations with a Our CRM Solution
                    </h1>
                </div>
                <div>
                    <p class="pt-lg-5 pt-4"> Leading national cycle manufacturer dramatically improved its sales and operations, integrating advanced technologies with Salesforce to streamline processes, enhance dealer management, and drive unprecedented growth in a competitive market.</p>
                </div>
            </div>
            <div class="col-md-6 ps-lg-5 d-lg-block  pe-0 d-none">
                <div class="ps-lg-5" style="background:url(assets/images/case/cycle_manufacturer.jpg);height:100%" >
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>
</section>



<section >
    <div class="container-fluid m-0 ">
        <div class="row">
            <div class="col-md-4 p-4 pt-0 d-block d-lg-none">
                <div class="new_box py-4 px-4">
                    <div>
                        <h5 class="case_text">
                            Client:
                        </h5>
                        <p>Leading National Cycle Manufacturer</p>
                    </div>
                    <div class="pt-0-5">
                        <h5>
                            Industry:
                        </h5>
                        <p>Manufacturing</p>
                    </div>
                    <div class="pt-0-5">
                        <h5 class="case_text">
                            Solution:
                        </h5>
                        <p >Salesforce's Sales Cloud, Service Cloud, and Experience Cloud</p>
                    </div>
                    <div class="pt-0-5 me-1">
                        <h5 class="case_text">
                            Result:
                        </h5>
                        <p>Seamless integration of Salesforce with SAP & Navision</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 p-lg-0 px-4">

                <div class="line position-relative">
                    <h3 class="error">
                        The <span class="color">Challenge</span>
                    </h3>
                </div>

                <div>
                    <div class=" mt-lg-4 mt-3">
                        <h3 class="error">
                            Unifying Diverse Operations Under One Roof
                        </h3>
                    </div>
                    <div class="mt-4 mt-lg-2">
                        <p class="" style="text-align:justify">Imagine a cycle manufacturer whose name is synonymous with quality and innovation, boasting annual sales exceeding <span class="color">₹1000 crores.</span> With a robust team of 40 sales professionals, 6 regional offices, and a sprawling network of <span class="color"> 800 dealers nationwide,</span> this giant took a significant leap by acquiring two international brands. The challenge? Operating three distinct Lines of Businesses (LoBs) seamlessly, each with its unique SKUs, pricing strategies, and inventory levels.</p>
                    </div>
                </div>
                <div class="mt-5 mt-lg-4">
                    <h3 class="error">
                        Operational Hurdles:
                    </h3>
                </div>
                <div class="mt-4 mt-lg-2">
                    <ul class="ms-2">
                        <li><p>Juggling multiple SKUs from different production plants.</p></li>
                        <li><p>Each LoB tangled in its web of ERP systems (SAP & MS Navision).</p></li>
                        <li><p>The drudgery of manual processes: delays in dealer onboarding, KYC hassles, and document management nightmares.</p></li>
                        <li><p>Sales team efficiency hampered by lack of a strategic planning tool.</p></li>
                        <li><p>Arduous offline dealer coordination for order bookings and credit management.</p></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 p-4 pt-0 d-lg-block d-none">
                <div class="new_box py-4 px-4">
                    <div>
                        <h5 class="case_text">
                            Client:
                        </h5>
                        <p>Leading National Cycle Manufacturer</p>
                    </div>
                    <div class="pt-0-5">
                        <h5 class="case_text">
                            Industry:
                        </h5>
                        <p>Manufacturing</p>
                    </div>
                    <div class="pt-0-5">
                        <h5 class="case_text">
                            Solution:
                        </h5>
                        <p>Salesforce's Sales Cloud, Service Cloud, and Experience Cloud</p>
                    </div>
                    <div class="pt-0-5 me-1">
                        <h5 class="case_text">
                            Result:
                        </h5>
                        <p >Seamless integration of Salesforce with SAP & Navision</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-lg-0 px-4">
                <div class="line position-relative">
                    <h3 class="error">
                        The <span class="color">Transformation</span>
                    </h3>
                </div>
                <div class="mt-lg-4 mt-2">
                    <h3 class="error">
                        A Tech-Infused Solution
                    </h3>
                </div>

                
            </div>
            <div class="row">
                    <div class="col-lg-4 ps-lg-0 mt-5">
                        <div class="p-4 py-4 new_content">
                            <div>
                                <h3 class="error mb-3 mb-lg-1">Integration Master:</h3>
                            </div>
                            <div>
                                <p>Salesforce becomes the cornerstone of innovation, integrating SAP & Navision, thus creating a unified customer view and streamlining operations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 ">
                        <div class="p-4 py-4 new_content">
                            <div>
                                <h3 class="error  mb-3 mb-lg-1">Dealer Onboarding:</h4>
                            </div>
                            <div>
                                <p>A groundbreaking approach to dealer application, leveraging omnichannel leads and mobile app functionalities for geographical exclusivity and digital KYC.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class=" p-4 py-4 new_content">
                            <div>
                                <h3 class="error  mb-3 mb-lg-1">Streamlined Approval Process:</h4>
                            </div>
                            <div>
                                <p class="case_font ">From area sales managers to the national sales head, approvals are now a breeze, ensuring a smooth onboarding journey.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ps-lg-0 mt-5">
                        <div class="p-4 py-4 new_content">
                            <div>
                                <h3 class="error  mb-3">Beat Planning & Execution:</h4>
                            </div>
                            <div>
                                <p>Sales reps can now craft meticulous visit plans, approved by managers and executed with precision.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class="p-4 py-4 new_content">
                            <div>
                                <h3 class="error  mb-3">
                                    Expense Management
                                    Simplified:
                                </h3>
                            </div>
                            <div>
                                <p>
                                    A digitized expense management system that aligns with the actual visits, promoting accountability and efficiency
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <div class=" p-4 py-4 new_content">
                            <div>
                                <h3 class="error mb-3">
                                    Seamless Order Creation & Updates:
                                </h3>
                            </div>
                            <div>
                                <p>
                                    Real-time credit limit visibility, updated pricing, and stock visibility, all thanks to the integration of Salesforce with SAP & Navision.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-lg-0 px-4 row">
                <div class="line position-relative">
                    <h3 class="error">
                        The <span class="color">Impact</span>
                    </h3>
                </div>
                <div class="col-lg-12 p-0">
                    <h3 class="error mt-5 mb-3">
                        Rapid Dealer Onboarding:
                    </h3>
                    <p>The dealer onboarding process is now a hallmark of efficiency and ease, empowered by digital innovations and hierarchical approvals.</p>
                </div>
                <div class="col-lg-12 p-0">
                    <h3 class="error mt-4 mb-3">
                        Automated Beat Planning:
                    </h3>
                    <p >Every sales rep is now a strategist, with system-generated plans and insightful market intelligence.</p>
                </div>
                <div class="col-lg-12 p-0">
                    <h3 class="error mt-4 mb-3">
                        Enhanced Dealer Management:
                    </h3>
                    <p >The introduction of the Dealer Management System (DMS) has streamlined dealer interactions, making management effortless and efficient.</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!--<section class="py-5">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-8 p-lg-0 px-4 row">-->
<!--                <div class="line position-relative">-->
<!--                    <h3 class="error">-->
<!--                        In Their<span class="color"> Own Words </span>-->
<!--                    </h3>-->
<!--                </div>-->
<!--                <div class="col-lg-12 p-0 row pt-lg-5 py-4">-->
<!--                    <div class="d-lg-flex">-->
<!--                        <div style="width:7%;padding-top:1px;">-->
<!--                            <img src="assets/images/left.png" alt="left">-->
<!--                        </div>-->
<!--                        <span class="case_font lh-lg">Our partnership with CRM Landing has not only streamlined our operations but has set a new benchmark in how we manage our sales and dealer network. The impact is undeniable," shares Mr. XYZ, GM of Sales.<img src="assets/images/right.png" alt="" class="ps-2"></span>-->
<!--                    </div>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--===============spacing==============-->
<?php
require('components/trustedItServices.php');
require('components/lets_talk.php');
?>
</div>

<?php require('include/footer.php') ?>