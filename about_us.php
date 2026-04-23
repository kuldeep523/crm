<?php include("admin/connection.php");
include("include/header.php"); ?>
<head>
    <title>About Us-CRM Landing</title>
</head>
<style>
/*#about:target{*/
/*    margin-top:200px;*/
/*}*/

.clrDarkBlue
{
    color:#0D4282;
}
    .slider {
    padding: 5px;
    padding-left: 5px;
    border-radius: 20px;
    display: flex;
    align-items: center;
}
.slider p {
    font-size: 15px;
    font-weight: 600;
    padding-left: 30px;
    color: white;
}
.slider input[type="range"] {
  	-webkit-appearance: none !important;
  	width: 180px;
 	height: 5px;
  	background: white;
  	border: none;
  	outline: none;
}
.slider input[type="range"]::-webkit-slider-thumb {
   	-webkit-appearance: none !important;
    width: 12px;
    height:12px;
    background: black;
    border: 1px solid black;
    border-radius: 50%;
    cursor: pointer;
}
.slider input[type="range"]::-webkit-slider-thumb:hover {
    background: white;
 } 




    .custom-controls {
            position: relative;
        }
        .muteBtn
        {
            border-radius: 50%;
            height: 35px;
            font-size: 20px;
            color: white;
            width: 35px;
            border: none;
            background: transparent;
        }
      


.image-container {
    
           width: 100%;
            height: 500px;
            background-color: #000;
             border-radius: 50% / 100%;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            margin-top:-140px;
            /*margin-left:-50%;*/
            overflow:hidden;
           
}
.background-set{
     background-image: url("assets/images/newabout/new.jpg") ;
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: 100% 100%;
         width: 100%;
            height: 130%;
            margin-top: 36px;

}
@media (min-width: 100px) and (max-width: 600px)
{
    .fullscreenAbout {
        
        height: auto !important;
    }
    .p-col-0
    {
        padding:0px 0px;
    }
}
@media (min-width:1200px) and (max-width:1400px){
    .image-container{
        height:430px;
    }
}
@media (max-width:576px){
    .image-container{
           
        margin-top: 0;
        width: 100%;
        height: 332px;
        background-size: cover;
    
    }
    .moblie-image{
        position:relative;
        left:50%;
        transform:translate(-30%);
            margin-left: -35%;
    /* margin-top: 0px; */
    width: 600px;
    }
    .background-set {
    background-image: url(assets/images/newabout/new.jpg);
    background-repeat: no-repeat;
    background-position: bottom;
    background-size: 150% 100%;
    width: 100%;
    height: 130%;
    margin-top:-50px;
    }
}
</style>
<?php
$q='SELECT * FROM `about_us_us`';
$qr=mysqli_query($conn,$q);
$r=mysqli_fetch_row($qr);
?>
<div class="pd_top_30"></div>
<section class="contact-client-carousel-section">
    <div class="pd_bottom_45 disNone" ></div>
    <div class=" disNone"></div>
     <div class="col-12  p-0 text-center mobl ie-image mb-3 pt-lg-1">
             <!--<div class="image-container d-lg-none" >-->
             <!--      <div class="background-set">-->
                       
             <!--      </div> -->
             <!--  </div>-->
               <img src="assets/images/newabout/crml-about.jpg" class="container d-lg-block d-none mt-xxl-2" style="margin-top:0px">
               <img src="assets/images/newabout/crml-about-mobile.png" class="d-lg-none d-block p-0" style="margin-top:10px">
           </div>
</section>
<section>
    <div class="container-sm">
       
        <div class="row justify-content-center d-flex">
            
           <div class="col-lg-12 px-lg-5 text-lg-center">
               <div>
                   <h1 class="py-4 lh-sm" style="font-size:2.3rem ">Transforming Businesses Through Strategic CRM Solutions</h1>
               </div>
               <div>
                   <p class="pb-4 pt-3">
                       As a Salesforce partner we specialize in Salesforce implementation, offering customized CRM solutions. We streamline customer interactions and boost operational efficiency, tailoring our services to meet the unique needs of each client.
                   </p>
               </div>
           </div>
        </div>
        
    </div>
              
            </section>
<section class="client-section d-lg-block d-none" style="background-color: aliceblue; pt-3">
   <div class="container-sm">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex p-2 justify-content-center">
               <div>
                  <a href="#about" class="pl20 atag">About Us</a>
               </div>
               <div>
                  <a href="#values" class="pl20 atag">Values</a>
               </div>
               <div>
                  <a href="#clientele" class="pl20 atag">Key Clientele</a>
               </div>
               <div>
                  <a href="#bonding" class="pl20 atag">Team Bonding</a>
               </div>
               <div>
                  <a href="#apart" class="pl20 atag">What Sets Us Apart</a>
               </div>
               <div>
                  <a href="#purpose" class="pl20 atag">Our Purpose</a>
               </div>
                <div>
                  <a href="#team" class="pl20 atag">Team</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<a></a>

<section class="client-brand-section" name="about" id="about">
   <div class="container-sm" >
      <div class="pd_top_50 disNone"></div>
      <div class="row h-100 flex-column-reverse flex-lg-row">
          <div class="col-lg-6 col-12 d-flex flex-column justify-content-center gap-4  pt-lg-0 pt-3">
              <h3>
                  One-Stop Solution for all Salesforce needs
              </h3>
              <p>
                  Since the inception in June’21, CRM Landing has grown leaps and bounds while keeping a simple yet profound mission: to optimize customer relationship management for businesses worldwide, through innovative solutions. 
              </p>
          </div>
          <div class="col-lg-6" >
            
                  <div class="row h-100" >
                      <div class="col-7 h-100 ps-lg-4 ps-0" >
                          <img src="assets/images/newabout/speech.jpg" style="border-radius: 12px;">
                      </div>
                      <div class="col-5 h-100 px-0 mt-1 mt-lg-0">
                          <div class="h-50  pb-2">
                              <img src="assets/images/newabout/meeting.jpg" style="border-radius: 12px;">
                          </div>
                          <div class="h-50 pt-2">
                              <img src="assets/images/newabout/write.jpg" style="border-radius: 12px;">
                          </div>
                      </div>
                  </div>
                
                 
            
         </div>
      </div>
      
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_60"></div>
   <!--===============spacing==============-->
</section>


<?php
// $qi="SELECT * FROM `about_us_icon` where status='Active' Limit 4";
// $qir=mysqli_query($conn,$qi);
?>
<a name="values" id="values"></a>
<section class="theme-bg" style="background:#F3F4F7;">
    <style>
    /* Preload the hover images */
    .preload {
        display: none;
    }

    #change1:hover {
        content: url('assets/images/newabout/Frame 40_ch.png');
    }
    #change2:hover {
        content: url('assets/images/newabout/Frame 41_ch.png');
    }
    #change3:hover {
        content: url('assets/images/newabout/Frame 42_ch.png');
    }
    #change4:hover {
        content: url('assets/images/newabout/Frame 43_ch.png');
    }
    </style>

    <!-- Preload hover images -->
    <div class="preload">
        <img src="assets/images/newabout/Frame 40_ch.png" alt="Preload Trust">
        <img src="assets/images/newabout/Frame 41_ch.png" alt="Preload Collaboration">
        <img src="assets/images/newabout/Frame 42_ch.png" alt="Preload Innovation">
        <img src="assets/images/newabout/Frame 43_ch.png" alt="Preload Customer Centric">
    </div>

    <div class="pd_top_50"></div>
    <div class="auto-container">
        <div class="row">
            <div class="col-12">
                <!--<div >-->
                <!--    <h3 style="margin-bottom: 0;" class="text-center text-lg-start">Values <span style="color:#00A1E0"></span></h3>-->
                <!--</div>-->
                <!--<div class="pd_top_45"></div>-->
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0 col-6">
                <div class="c">
                    <div class="contact_box_inner icon_yes">
                        <div class="content text-center"> 
                            <img width="100px" class="change-image" src="assets/images/newabout/Frame 40.png" id="change1"/>
                            <p class="mt-3">Trust</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0 col-6">
                <div class="c">
                    <div class="contact_box_inner icon_yes">
                        <div class="content text-center">
                            <img class="change-image" width="100px" src="assets/images/newabout/Frame 41.png" id="change2" />
                            <p class="mt-3">Collaboration</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0 col-6 mt-5 mt-lg-0">
                <div class="c">
                    <div class="contact_box_inner icon_yes">
                        <div class="content text-center">
                            <img class="change-image" width="100px" src="assets/images/newabout/Frame 42.png" id="change3" />
                            <p class="mt-3">Innovation</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0 col-6 mt-5 mt-lg-0">
                <div class="c">
                    <div class="contact_box_inner icon_yes">
                        <div class="content text-center">
                            <img class="change-image" width="100px" src="assets/images/newabout/Frame 43.png" id="change4" />
                            <p class="mt-3">Customer Centric</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Spacing -->
    <div class="pd_bottom_40"></div>
</section>







<style>
   @media (min-width:992px){
        .key-2{
            flex: 0 0 auto;
            width: 20%;
            padding-inline:15px;
            padding-bottom:15px;
    }
   }
</style>


<a name="clientele" id="clientele"></a>
<section>
    <div class="container-sm">
        <div class="row">
            <div class="col-12 py-5">
                <h3 class="text-center text-lg-start">
                    Key <spna style="color:#00A1E0">Clientele</span>
                </h3>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/TVS.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/Danone.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/Mahendra.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/Exide.png" alt="" class="img-fluid">
                </div>
                
            </div>
             
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/mahindra_finance.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/montra.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Balaji_Wafers.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Baby_Saffron.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Truecaller.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Somani_Realtors.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/AIS.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Pinch.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Lohia_Group.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Euler_Motors.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Jalan_Infosystem.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/bimakart.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Krishna_Sanjeev.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Chaitanya_Jewellers.png"  alt="" class="img-fluid">
                </div>
                
            </div>
           
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Shubhashish_Homes.png" alt="" class="img-fluid">
                </div>
                
            </div> 
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/HoseXperts.png" alt="" class="img-fluid">
                </div>
                
            </div>
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Krishna_Antioxidants.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/upstep_Academy.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Weave_Craft.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/USC_Group.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Allengers.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Vinyl.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/S&R_Decor.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Jaipur_Rugs.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Rethink.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Quinnox.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/BloomchemAG.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/RachTR.png" alt="" class="img-fluid">
                </div>
                
            </div>
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/cornerstone.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
           
             <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/newabout/Kalaakar_India.png" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/alabama.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/cl.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/gd_alcobrew.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/L&T.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            <div class="key-2 col-4 px-0 px-lg-3">
                <div >
                    <img src="assets/images/hero/aboutclient/twin_health.jpg" alt="" class="img-fluid">
                </div>
                
            </div>
            
            
        </div>
    </div>    
</section>







<!----header----->

<a name="bonding" id="bonding"></a>
<section class="pb-5">
    <style>
        .slider-container {
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .slider-main {
            width: 100%;
            height: auto;
            overflow: hidden;
            position: relative;
        }
        .slider-sidebar {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            margin-top: 10px;
            padding:0px 0px;
            scrollbar-width:none;
        }
        .sidebar-img {
            cursor: pointer;
            transition: all 0.3s ease;
            width: 32%;
            flex-shrink: 0;
            object-fit: cover;
        }
        .active-slide {
            border: 2px solid #00A1E0;
        }
        .carousel-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .carousel-item {
            height: 250px;
        }

        @media (min-width: 768px) {
            .slider-container {
                flex-direction: row;
                height: 480px;
            }
            .slider-main {
                flex: 3;
            }
            .slider-sidebar {
                flex-direction: column;
                flex: 1;
                overflow-y: auto;
                height: 480px;
                width: auto;
                gap: 0px;
            margin-top: 0px;
            padding:2px 10px;
            }
            .sidebar-img {
                width: 100%;
                height: calc(33.33% - 0px);
                margin-bottom:5px;
            }
             .carousel-item img {
            width: 100%;
            height: 480px;
            object-fit: cover;
        }
        .carousel-item {
            height: 480px;
        }
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="container-sm mt-5 px-lg-4">
                        <div >
                            <h3 style="margin-bottom: 0;" class="text-center text-lg-start">Team <span style="color:#00A1E0">Bonding</span></h3>
                        </div>
                        <div class="pd_top_45"></div>
        <div class="slider-container">
            <div class="slider-main">
                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/newabout/01-Republic Day.jpg" class="d-block w-100" alt="Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/02-Republic Day.jpg" class="d-block w-100" alt="Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/03-Agra Trip.jpg" class="d-block w-100" alt="Image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/04-Agra Trip.jpg" class="d-block w-100" alt="Image 4">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/newabout/05-Agra Trip.jpg" class="d-block w-100" alt="Image 5">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/06-Agra Trip.jpg" class="d-block w-100" alt="Image 6">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/07-Agra Trip.jpg" class="d-block w-100" alt="Image 7">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/08-Christmas.JPG" class="d-block w-100" alt="Image 8">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/newabout/09-Christmas.JPG" class="d-block w-100" alt="Image 9">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/10-Fun Friday.JPG" class="d-block w-100" alt="Image 10">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/11-Fun Friday.JPG" class="d-block w-100" alt="Image 11">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/newabout/12-New Year.jpg" class="d-block w-100" alt="Image 12">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/13-New Year.jpg" class="d-block w-100" alt="Image 13">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/14-New Year.jpg" class="d-block w-100" alt="Image 14">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/15-New Year.jpg" class="d-block w-100" alt="Image 15">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/newabout/16-New Year.jpg" class="d-block w-100" alt="Image 16">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/17-New Year.jpg" class="d-block w-100" alt="Image 17">
                        </div>
                         <div class="carousel-item">
                            <img src="assets/images/newabout/18-plantation.jpg" class="d-block w-100" alt="Image 18">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/19-plantation.jpg" class="d-block w-100" alt="Image 19">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/20-Womens day.jpg" class="d-block w-100" alt="Image 20">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/newabout/21-Taxation Awareness.jpg" class="d-block w-100" alt="Image 21">
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-sidebar">
                <img src="assets/images/newabout/01-Republic Day.jpg" class="sidebar-img active-slide" data-bs-target="#mainCarousel" data-bs-slide-to="0" alt="Thumbnail 1">
                <img src="assets/images/newabout/02-Republic Day.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="1" alt="Thumbnail 2">
                <img src="assets/images/newabout/03-Agra Trip.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="2" alt="Thumbnail 3">
                <img src="assets/images/newabout/04-Agra Trip.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="3" alt="Thumbnail 4">
                 <img src="assets/images/newabout/05-Agra Trip.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="4" alt="Thumbnail 5">
                <img src="assets/images/newabout/06-Agra Trip.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="5" alt="Thumbnail 6">
                <img src="assets/images/newabout/07-Agra Trip.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="6" alt="Thumbnail 7">
                <img src="assets/images/newabout/08-Christmas.JPG" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="7" alt="Thumbnail 8">
                 <img src="assets/images/newabout/09-Christmas.JPG" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="8" alt="Thumbnail 9">
                <img src="assets/images/newabout/10-Fun Friday.JPG" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="9" alt="Thumbnail 10">
                <img src="assets/images/newabout/11-Fun Friday.JPG" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="10" alt="Thumbnail 11">
                 <img src="assets/images/newabout/12-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="11" alt="Thumbnail 12">
                <img src="assets/images/newabout/13-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="12" alt="Thumbnail 13">
                <img src="assets/images/newabout/14-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="13" alt="Thumbnail 14">
                <img src="assets/images/newabout/15-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="14" alt="Thumbnail 15">
                 <img src="assets/images/newabout/16-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="15" alt="Thumbnail 16">
                <img src="assets/images/newabout/17-New Year.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="16" alt="Thumbnail 17">
                 <img src="assets/images/newabout/18-plantation.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="17" alt="Thumbnail 18">
                <img src="assets/images/newabout/19-plantation.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="18" alt="Thumbnail 19">
                <img src="assets/images/newabout/20-Womens day.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="19" alt="Thumbnail 20">
                <img src="assets/images/newabout/21-Taxation Awareness.jpg" class="sidebar-img" data-bs-target="#mainCarousel" data-bs-slide-to="20" alt="Thumbnail 21">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#mainCarousel').carousel({
                interval: 3000
            });

            $('#mainCarousel').on('slide.bs.carousel', function (e) {
                var index = $(e.relatedTarget).index();
                $('.sidebar-img').removeClass('active-slide');
                var activeImg = $('.sidebar-img').eq(index);
                activeImg.addClass('active-slide');

                if ($(window).width() < 768) {
                    var scrollTo = activeImg.outerWidth(true) * index;
                    $('.slider-sidebar').animate({
                        scrollLeft: scrollTo
                    }, 500);
                } else {
                    var scrollTo = activeImg.outerHeight(true) * index;
                    $('.slider-sidebar').animate({
                        scrollTop: scrollTo
                    }, 500);
                }
            });

            $('.sidebar-img').click(function(){
                $('.sidebar-img').removeClass('active-slide');
                $(this).addClass('active-slide');
                var slideIndex = $(this).data('bs-slide-to');
                $('#mainCarousel').carousel(slideIndex);
            });
        });
    </script>
</section>








<a name="apart" id="apart"></a>
<section  class="tabs_all_box  tabs_all_box_start type_three lightbg" style="overflow:hidden">
   <div class="container-sm">
               <div class="row" class="tab_over_all_box" >
                    <div class="col-12">
                        <div class="pd_top_50"></div>
                        <div >
                            <h3 style="margin-bottom: 0;" class="text-center text-lg-start">What Sets Us <span style="color:#00A1E0">Apart</span></h3>
                        </div>
                        <div class="pd_top_45"></div>
                    </div>


                  <div class="col-xxl-4 col-xl-4 col-lg-4  d-none  d-xxl-block d-xl-block d-lg-block">
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                     <div class="tabs_header1 clearfix">
                                 <ul class="showcase_tabs_btns nav-pills nav clearfix d-block">
<?php
$qa="SELECT * FROM `about_us_apart` where status='Active' Limit 6";
$qar=mysqli_query($conn,$qa);
$a=1;
$b=1;
?>              
<?php foreach($qar as $ra){ ?>
                                    <li class="nav-item w-100"><a class="s_tab_btn nav-link1 <?php if($a==1){ echo 'active'; } ?>" data-tab="#thereetabtab<?php echo $a; ?>"><?php echo $ra['title']; ?></a></li>
<?php $a=$a+1; } ?>
                                   </ul>
                              </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_60 disNone"></div>
                     <!--===============spacing==============-->
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8 d-none d-xxl-block d-xl-block d-lg-block bg_op_1 pl0 pr0 ps-5" >
                  
                  <div class="s_tab_wrapper h-100">

                                 <div class="s_tabs_content h-100 pb-5">
<?php
$qb="SELECT * FROM `about_us_apart` where status='Active' Limit 6";
$qbr=mysqli_query($conn,$qb);
$b=1;
?> 
<?php foreach($qbr as $ra2){ ?>
                                    <div class="s_tab fade  aboutanime_1 <?php if($b==1){ echo 'active-tab'; } ?> minHeight Apart show p-5" id="thereetabtab<?php echo $b; ?>" style="border-radius:10px;min-height:100% !important;">
                                       <div class="tab_content one">
                                          
                                          <div class="content_bx text-center">
                                                <!--<h2 class='mt-2'><?php echo $ra2['title']; ?></h2>-->
                                             <p>
                                                 <?php echo $ra2['content']; ?>
                                             </p>
                                             
                                          </div>
                                       </div>
                                    </div>
<?php $b=$b+1; } ?>
                                    
                                 </div>
                              </div>
                              <div class="pd_top_50"></div>
                  </div>
               <!--code by kuldeep-->
                <div class="col-12 d-xxl-none d-xl-none d-lg-none bg_op_1 pl0 pr0">
                    <div class="row">
                        <?php
                            $qvalue = "SELECT * FROM `about_us_apart` WHERE status='Active' LIMIT 4";
                            $qbvalue = mysqli_query($conn, $qvalue);
                            $bvalue = 1;
                
                            foreach ($qbvalue as $ra2value) {
                        ?>
                                <div class="col-12 col-md-6 col-lg-4 mb-4">
                                    <div class="card h-100 rounded-0 border-0">
                                        <div class="card-body">
                                            <h2 class="clrDarkBlue"><?php echo htmlspecialchars($ra2value['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                                            <p><?php echo htmlspecialchars($ra2value['content'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                $bvalue++;
                            }
                        ?>
                    </div>
                </div>
                <!--code by kuldeep end-->

               </div>
               </div>
               
               
            </section>
           
  <script>

                document.addEventListener("DOMContentLoaded", function() {

  let currentTab = 1;

  const totalTabs = <?php echo $b - 1; ?>;
 
  function showNextTab() {

    const currentActiveContent = document.querySelector('.active-tab');

    const currentActiveHeading = document.querySelector('.s_tab_btn.active');
 
    if (currentActiveContent) {

      currentActiveContent.classList.remove('active-tab', 'show');

    }

    if (currentActiveHeading) {

      currentActiveHeading.classList.remove('active');

    }
 
    const nextContent = document.getElementById('thereetabtab' + currentTab);

    const nextHeading = document.querySelector(`[data-tab="#thereetabtab${currentTab}"]`);
 
    nextContent.classList.add('active-tab', 'show');

    nextHeading.classList.add('active');
 
    currentTab++;

    if (currentTab > totalTabs) {

      currentTab = 1;

    }

  }
 
  setInterval(showNextTab, 5000); // Change tab every 5 seconds

});
 
            </script>
 
            
            
            
            
            
<!---tab-end--->
<a name="purpose" id="purpose"></a>
<section class="pt-4">
    <div class="container-sm pt-lg-5">
        <div class="row">
                   
                   
                   
                   <div class=" col-lg-6 them ebg disNone">
                       
                       <h3 class="">
                           Our <span style="color:#00A1E0">Purpose</span>
                       </h3>
                       <p class="pe-1 py-4">
                           Our purpose is to empower growth through innovation, integrity, and collaboration. We strive to exceed expectations, foster trust, and drive positive impact in all we do.
                       </p>
                       <ul class="ps-4">
                           <li>
                               Innovation-Driven 
                           </li>
                           <li>
                               Industry Expertise '
                           </li>
                           <li>
                               Client-Centric 
                            </li>
                           <li>
                               End-to-End Solutions
                           </li>
                          
                       </ul>
                  </div>
                  <div class=" col-lg-6 bg_op_1 pl0 pr0  position-relative" >
                    
                    <video class="fullscreenAbout" src="admin/uploads/Promotional_Video.mp4" id="myVideo" playsinline="" class="img-fluid h-auto" controls autoplay muted></video>
                    <div class="col-lg-6 col-6">
                  
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-12 them ebg disLapNone">
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                     <div class="row aboutHeroTBp">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-9 col-md-12 p-0">
                           <div class="client-brand-wrapper">
                              <div class="title_all_bo style_one light_color">
                                 <div class="title_sections left">
                                 <div class="pd_top_10"></div>
                                    <div class="aboutHeading ">
                                        <h3 class="text-black">
                           Our <span style="color:#00A1E0">Purpose </span>
                       </h3>
                       </div>
                       <p class="pe-1 py-2 text-black">
                           Our purpose is to empower growth through innovation, integrity, and collaboration. We strive to exceed expectations, foster trust, and drive positive impact in all we do.
                       </p>
                       <ul class="ps-4">
                           <li>
                              Innovation-Driven 
                           </li>
                           <li class="text-black fw-normal">
                               Industry Expertise 
                           </li>
                           <li>
                               Client-Centric
                            </li>
                           <li>
                              End-to-End Solutions
                           </li>
                          
                       </ul></div>
                                   
                                 </div>
                              </div>
                              <!--===============spacing==============-->
                              <div class="pd_bottom_40 d-none d-lg-block"></div>
                              <!--===============spacing==============-->
                             
                           </div>
                        </div>
                        <div class="col-lg-2"></div> 
                     </div>
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                  </div>
                  
               </div>
    </div>
</section>

<script>

    document.addEventListener("DOMContentLoaded", function () {

  const video = document.getElementById("myVideo");
 
  const observer = new IntersectionObserver(

    (entries) => {

      entries.forEach((entry) => {

        if (entry.isIntersecting) {

          video.play();

        } else {

          video.pause();

        }

      });

    },

    {

      threshold: 0.5, // Play when 50% of the video is visible

    }

  );
 
  observer.observe(video);

});
 
</script>
 








<a name="team" id="team"></a>
<style>
    .social1{
        background-color:#0678B6;
        color:white !important;
        border:none !important;
        height: 55px;
        width: 55px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size:20px;
        transform:scale(0);
        transition:all 0.5s 0.5s
    }
    .image-inner-div{
        transition:top 0.5s 0s;
    }
    .image-outer-div{
        overflow:hidden;
    }
    .image-outer-div:hover .image-inner-div{
        top:0%!important;
    }
    .image-outer-div:hover .image-inner-div .social1{
        transform:scale(1);
    }
</style>
<section>
    <div class="container-sm">
        <div class="row">
             <div class="col-12 py-5">
                <h3 class="text-center text-lg-start">
                    Our <spna style="color:#00A1E0">Success Team</span>
                </h3>
                
            </div>
            <div class="col-lg-3 col-6">
                <div class="position-relative image-outer-div">
                    <img src="assets/images/newabout/Rohit_Sethi.jpg">
                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div" style="background:#00000066">
                        <a href="https://www.linkedin.com/in/rohit-sethi-b8bb00bb/" class="social1 rounded-circle me-2"><i class="fa-brands fa-linkedin-in "></i></a>
                    </div>
                </div>
                <div class="text-center pt-2">
                    <h4>
                        Rohit Sethi
                    </h4>
                    <p>
                        CEO
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="position-relative image-outer-div">
                    <img src="assets/images/newabout/aman-sir.png">
                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div" style="background:#00000066">
                        <a href="https://www.linkedin.com/in/amankp/" class="social1 rounded-circle me-2"><i class="fa-brands fa-linkedin-in "></i></a>
                    </div>
                </div>
                <div class="text-center pt-2">
                    <h4>
                        Aman Kumar
                    </h4>
                    <p>
                        CBO
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                 <div class="position-relative image-outer-div">
                    <img src="assets/images/newabout/Neeraj_Sethi.jpg">
                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div" style="background:#00000066">
                        <a href="https://www.linkedin.com/in/neeraj-sethi-91a686137/" class="social1 rounded-circle me-2"><i class="fa-brands fa-linkedin-in "></i></a>
                    </div>
                </div>
                <div class="text-center pt-2">
                    <h4>
                        Neeraj Sethi
                    </h4>
                    <p>
                        CTO
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                 <div class="position-relative image-outer-div">
                    <img src="assets/images/newabout/Oshin-barotia.jpg">
                    <div class="position-absolute h-100 w-100 top-100 d-flex justify-content-center align-items-center image-inner-div" style="background:#00000066">
                        <a href="https://www.linkedin.com/in/oshinbarotia/" class="social1 rounded-circle me-2"><i class="fa-brands fa-linkedin-in "></i></a>
                    </div>
                </div>
                
                <div class="text-center pt-2">
                    <h4>
                        Oshin Barotia
                    </h4>
                    <p>
                        HR Manager
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

 <!----header----->
<section>
   <div id="content" class="site-content ">
      <div class="container-sm">
         <div class="row default_row">
            <div class="title_all_box style_three text-center dark_color">
               <div class="title_sections three row">
                  <h3 class=" p-3 mt-5 text-center text-lg-start" style="text-align: left;">Global <spna style="color:#00A1E0">Clientele </span></h3>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
            </div>
            <div class="full_width_box">
               <div class="row">
                  <div class="col-lg-12">
                     <img src="assets/images/service_icon/map.gif" class="img-fluid">
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_30"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>
   </div>
</section>

<section>
    <div class="container-sm">
        <div class="title_all_box style_three text-center dark_color">
            <div class="title_sections three row">
                <h3 class="p-3 text-center text-lg-start" style="text-align: left;">FAQ's</h3>
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
            }
        </style>

        <div class="accordion">
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
                    <span>What is ERP (Producer Responsibility) and why is it important? </span>
                    <span class="accordion-icon">+</span>
                </div>
                <div class="accordion-body border-top-0">
                    ERP (Producer Responsibility) in the context of Salesforce refers to integrating your ERP system with Salesforce to manage your business operations more effectively. This integration helps ensure compliance with industry regulations, improves inventory management, and enhances overall operational efficiency. 
                    </div>
            </div>
            <div class="accordion-item border-end-0 border-start-0 rounded-0">
                <div class="accordion-header" onclick="toggleAccordion(event)">
                    <span>Can Salesforce be integrated with other systems we currently use?</span>
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



<?php include('components/trustedItServices.php') ?>
<?php include('components/lets_talk.php') ?>
<?php include('include/footer.php'); ?>
<script>
        // JavaScript functionality

        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById("myVideo");
            var playpausebtn = document.getElementById("playpausebtn");
            var mutebtn = document.getElementById("mutebtn");
            var seekbar = document.getElementById("seekbar");
            var volumebar = document.getElementById("volumebar");

            playpausebtn.addEventListener("click", function() {
                if (video.paused || video.ended) {
                    video.play(); 
                    var playBtn = document.getElementById("playBtn");
                    playBtn.setAttribute('class','fa fa-pause fs-4 text-white');
                } else {
                    video.pause();
                    var playBtn = document.getElementById("playBtn");
                    playBtn.setAttribute('class','fa fa-play fs-4 text-white');
                }
            });

            mutebtn.addEventListener("click", function() {
                if (video.muted) {
                    video.muted = false;
                    var mutebtn1 = document.getElementById("mutebtnIcon");
                   mutebtn1.setAttribute('class','fa fa-volume-up');
                } else {
                    video.muted = true;
                    var mutebtn1 = document.getElementById("mutebtnIcon");
                   mutebtn1.setAttribute('class','fa fa-volume-off');
                }
            });

            seekbar.addEventListener("input", function() {
                var seekto = video.duration * (seekbar.value / 100);
                video.currentTime = seekto;
            });

            video.addEventListener("timeupdate", function() {
                var newtime = video.currentTime * (100 / video.duration);
                seekbar.value = newtime;
            });

            volumebar.addEventListener("input", function() {
                video.volume = volumebar.value;
            });
        });
    </script>