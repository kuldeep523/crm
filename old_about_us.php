<?php include("admin/connection.php");
include("include/header.php"); ?>
<head>
    <title>About Us-CRM Landing</title>
</head>
<style>
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
        /*#playpausebtn {*/
        /*    background-color: transparent;*/
        /*    border: none;*/
        /*    cursor: pointer;*/
        /*    width: 60px;*/
        /*    height: 60px;*/
        /*    border-radius: 50%;*/
        /*    display: flex;*/
        /*    justify-content: center;*/
        /*    align-items: center;*/
        /*    background-color:white;*/
        /*    transition: background-color 0.3s ease;*/
        /*    z-index:99;*/
        /*}*/

        /*#playpausebtn:hover {*/
        /*    background-color: rgba(0, 0, 0, 0.3);*/
        /*}*/

        /*#playpausebtn i {*/
        /*    color:#29c1b2;*/
        /*}*/
</style>
<?php
$q='SELECT * FROM `about_us_us`';
$qr=mysqli_query($conn,$q);
$r=mysqli_fetch_row($qr);
?>
<div class="pd_top_50"></div>
<section class="contact-client-carousel-section">
    <div class="pd_bottom_45 disNone"></div>
               <div class="row">
                   <div class="col-xxl-6 col-xl-6 col-lg-12 themebg disNone">
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                     <div class="row aboutHeroTBp">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-9 col-md-12">
                           <div class="client-brand-wrapper">
                              <div class="title_all_box style_one light_color">
                                 <div class="title_sections left">
                                 <div class="pd_top_20"></div>
                                    <div class="aboutHeading"><?php echo $r[1]; ?></div>
                                   
                                 </div>
                              </div>
                              <!--===============spacing==============-->
                              <div class="pd_bottom_40"></div>
                              <!--===============spacing==============-->
                             
                           </div>
                        </div>
                        <div class="col-lg-2"></div> 
                     </div>
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-12 bg_op_1 pl0 pr0  position-relative" >
                    
                    <video class="fullscreenAbout" src="admin/uploads/<?php echo $r[2]; ?>" id="myVideo" playsinline="" controls></video>
                    <div class="d-flex justify-content-center">
                        <!--<div class="custom-controls playBtnArea row" style="position:absolute; z-index: 999; bottom: 18px;">                    -->
                        <!--        <div class="col-lg-6 col-6">-->
                        <!--            <div class="slider mt-1">-->
                        <!--                <button class="muteBtn" id="playpausebtn" style="border: none; background: transparent;">-->
                        <!--                    <i id="playBtn" class="fa fa-play fs-4 text-white "></i> -->
                        <!--                </button>-->
                        <!--                <input type="range"  class="ms-3 mt-2" id="seekbar" value="0">-->
                        <!--            </div>-->
                        <!--        </div>-->
                                
                        <!--        <div class="col-lg-6 col-6">-->
                        <!--            <div class="d-flex">-->
                        <!--                <div class="">-->
                        <!--                    <button id="mutebtn" class="muteBtn mt-2"><i id="mutebtnIcon" class="fa fa-volume-off"></i></button>-->
                        <!--                </div>-->
                        <!--                <div class="ms-2 slider mt-3">-->
                        <!--                    <input type="range" id="volumebar" min="0" max="1" step="0.1" oninput="rangeValue.innerText = this.value">-->

                        <!--                </div>-->
                        <!--            </div>-->
                                    
                        <!--        </div>-->
                               
                            
                        <!--</div>-->
                    </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-12 themebg disLapNone">
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                     <div class="row aboutHeroTBp">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-9 col-md-12">
                           <div class="client-brand-wrapper">
                              <div class="title_all_box style_one light_color">
                                 <div class="title_sections left">
                                 <div class="pd_top_20"></div>
                                    <div class="aboutHeading"><?php echo $r[1]; ?></div>
                                   
                                 </div>
                              </div>
                              <!--===============spacing==============-->
                              <div class="pd_bottom_40"></div>
                              <!--===============spacing==============-->
                             
                           </div>
                        </div>
                        <div class="col-lg-2"></div> 
                     </div>
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                  </div>
                  
               </div>
            </section>
<section class="client-section" style="background-color: aliceblue;">
   <div class="container-sm">
      <div class="row">
         <div class="col-lg-12">
            <div class="d-flex p-2">
               <div>
                  <a href="#about" class="pl20 atag">About Us</a>
               </div>
               <div>
                  <a href="#values" class="pl20 atag">Values</a>
               </div>
               <div>
                  <a href="#culture" class="pl20 atag">Our Culture</a>
               </div>
               <div>
                  <a href="#apart" class="pl20 atag">What Sets Us Apart</a>
               </div>
               
               <div>
                  <a href="#globalClientele" class="pl20 atag">Global Clientele</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="client-brand-section" id="about">
   <div class="container-sm">
      <div class="pd_top_50"></div>
      <div class="row disNone">
         <div class="col-lg-12">
            <div class="title_all_box style_three text-center dark_color">
               <div class="title_sections three">
                  <h2 style="text-align: left;">About Us</h2>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_50"></div>
               <!--===============spacing==============-->
            </div>
         </div>
      </div>
      <div class="row  justify-content-center">
         <div class="col-lg-10 row justify-content-center">
            <p class="text-center aboutUsfont_Set"><?php echo $r[3]; ?></p>
         </div>

      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_60"></div>
   <!--===============spacing==============-->
</section>
<?php
$qi="SELECT * FROM `about_us_icon` where status='Active' Limit 4";
$qir=mysqli_query($conn,$qi);
?>
<section class="themebg" id="values">
   <div class="pd_top_50"></div>
   <div class="auto-container ">

      <div class="row">
          <?php foreach($qir as $ri){ ?>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-sm-5 mb-md-5 mb-lg-5 mb-xl-0 col-6">
            <div class="c">
               <div class="contact_box_inner  icon_yes ">

                  <div class="contnet text-center">
                     <img width="70px" src="admin/uploads/<?php echo $ri['icon']; ?>" />
                     <p class="text-white mt-3"><?php echo $ri['title']; ?></p>
                  </div>
               </div>
            </div>
         </div>
         <?php } ?>
         </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_40"></div>
   <!--===============spacing==============-->
   </div>

</section>
<!----header----->
<!----page-CONTENT----->
<section>
          <div class="container-sm ">
            <div class="row">
              <div class="title_all_box style_three text-center dark_color">
                <div class="pd_bottom_50"></div>
                <div class="title_sections three col-lg-12 ">
                  <h3 class="text-uppercase p-3" style="text-align: left;">Our Values</h3>
                </div>

                <!--===============spacing==============-->
                <div class="pd_bottom_50"></div>
                <!--===============spacing==============-->
              </div>
              <div class="invisible_normal_spacing"></div>
<?php
$qv="SELECT * FROM `about_our_value` where status='Active'";
$qvr=mysqli_query($conn,$qv);
?>              
<?php foreach($qvr as $rv){ ?>
              <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-4">
                <div class="service_box style_four dark_color">
                  <div class="service_content displFlex">
                    <div class="image_box_full aboutusValueImg">
                      <img class="imgDesk wp-post-image height_150" src="admin/uploads/<?php echo $rv['icon']; ?>" alt="img">

                    </div>
                    <div class="">
                      <div class="aboutPadding">
                          <h5 class="title"><a href="#" rel="bookmark"><?php echo $rv['title']; ?></a></h5>
                          <div class="mr_bottom_15"></div>
                          <p class="pFontStyleSetForP"><?php echo $rv['content']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_30"></div>
                <!--===============spacing==============-->
              </div>
<?php } ?>
             
            </div>
          </div>
        </section>
        
<!--<section class="aboutUsSliderSection">-->
<!--    <div class="container">-->
<!--        <div class="title_all_box style_three text-center dark_color" style='margin-top:-20px'>-->
<!--               <div class="title_sections three row">-->
<!--                  <h3 class="text-uppercase p-3" style="text-align: left;">Our Culture</h3>-->
<!--               </div>-->
               <!--===============spacing==============-->
<!--               <div class="pd_bottom_10"></div>-->
               <!--===============spacing==============-->
<!--            </div>-->
<!--        <div class="carousel">-->
        
<!--            <input type="radio" name="slides" checked="checked" id="slide-1">-->
<!--            <input type="radio" name="slides" id="slide-2">-->
<!--            <input type="radio" name="slides" id="slide-3">-->
<!--            <input type="radio" name="slides" id="slide-4">-->
<!--            <input type="radio" name="slides" id="slide-5">-->
<!--            <input type="radio" name="slides" id="slide-6">-->
<!--            <input type="radio" name="slides" id="slide-7">-->
<!--            <input type="radio" name="slides" id="slide-8">-->
<!--            <input type="radio" name="slides" id="slide-9">-->
<!--            <ul class="carousel__slides">-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
                           
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                        
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                        
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                        
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                        <!--<figcaption>-->
                        <!--    Lorem ipsum dolor sit amet consectetur adipisicing elit.-->
                        <!--    <span class="credit">Photo: Aleksandra Boguslawska</span>                            -->
                        <!--</figcaption>-->
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                        
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                       
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                       
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                       
<!--                    </figure>-->
<!--                </li>-->
<!--                <li class="carousel__slide">-->
<!--                    <figure>-->
<!--                        <div>-->
<!--                            <img src="2023-12-04.jpg" alt="">-->
<!--                        </div>-->
                       
<!--                    </figure>-->
<!--                </li>-->
<!--            </ul>    -->
<!--            <div style="width:100%; overflow-x:scroll;padding-top:20px;scrollbar-width:none;">  -->
<!--            <ul class="carousel__thumbnails"  style="width:2000px">-->
<!--                <li>-->
<!--                    <label for="slide-1"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-2"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-3"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-4"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-5"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-6"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-7"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-8"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <label for="slide-9"><img src="2023-12-04.jpg" alt=""></label>-->
<!--                </li>-->
<!--            </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<style>
    @mixin aspect-ratio($width, $height) {
  position: relative;
    
  &:before {
    display: block;
    content: "";
    width: 100%;
    padding-top: ($height / $width) * 100%;
  }
    
  > img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
  }
}



.aboutUsSliderSection {
    background: #F4F4F4;
    padding: 50px 0;
}

.aboutUsSliderSection .container {
    max-width: 1044px;
    margin: 0 auto;
    padding: 0 20px;
}

.aboutUsSliderSection .carousel {
    display: block;
    text-align: left;
    position: relative;
    margin-bottom: 22px;
    
    > input {
        clip: rect(1px, 1px, 1px, 1px);
        clip-path: inset(50%);
        height: 1px;
        width: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        
       
    }
    
    .carousel__thumbnails {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        
        margin: 0 -10px;
        
        .carousel__slides + & {
            margin-top: 20px;
        }
        
        li {        
            flex: 1 1 auto;
            max-width: calc((100% / 6) - 20px);  
            margin: 0 10px;
            transition: all 300ms ease-in-out;
        }
        
        label {
            display: block;
            @include aspect-ratio(1,1);
            
                      
            &:hover,
            &:focus {
                cursor: pointer;
                
                img {
                    box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.25);
                    transition: all 300ms ease-in-out;
                }
            }
        }
        
        img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    }
}

.aboutUsSliderSection .carousel__slides {
    position: relative;
    z-index: 1;
    padding: 0;
    margin: 0;
    overflow: hidden;
    white-space: nowrap;
    box-sizing: border-box;
    display: flex;
}

.aboutUsSliderSection .carousel__slide {
    position: relative;
    display: block;
    flex: 1 0 100%;
    width: 100%;
    height: 100%;
    overflow: hidden;
    transition: all 300ms ease-out;
    vertical-align: top;
    box-sizing: border-box;
    white-space: normal;
    
    figure {
        display: flex;
        margin: 0;
    }
    
    div {
        @include aspect-ratio(3, 2);
        width: 100%;
    }
    
    img {
        display: block;
        flex: 1 1 auto;
        object-fit: cover;
    }
    
    figcaption {
        align-self: flex-end;
        padding: 20px 20px 0 20px;
        flex: 0 0 auto;
        width: 25%;
        min-width: 150px;
    }
    
    .credit {
        margin-top: 1rem;
        color: rgba(0, 0, 0, 0.5);
        display: block;        
    }
    
    &.scrollable {
        overflow-y: scroll;
    }
}
  </style>
  <script>
    // Add event listeners to checkboxes
    document.addEventListener("DOMContentLoaded", function() {
      const checkboxes = document.querySelectorAll('.aboutUsSliderSection .carousel input[type="radio"]');
      const slides = document.querySelectorAll('.aboutUsSliderSection .carousel__slides .carousel__slide');
      const thumbnails = document.querySelectorAll('.aboutUsSliderSection .carousel__thumbnails li img');

      checkboxes.forEach((checkbox, index) => {
        checkbox.addEventListener('change', function() {
          // Reset styles
          slides.forEach(slide => slide.style.marginLeft = '0%');
          thumbnails.forEach(thumbnail => thumbnail.style.boxShadow = 'none');

          if (checkbox.checked) {
            // Apply styles based on index
            slides[index].style.marginLeft = -(100* (index + 1))-index + '%';
            thumbnails[index].style.boxShadow = '0px 0px 0px 5px rgba(0,0,255,0.5)';
          }
        });
      });
    });
  </script>        
<section id="culture">
   <div id="content" class="site-content">
      <div class="container-sm">
         <div class="row default_row">
            <div class="title_all_box style_three text-center dark_color">
               <div class="pd_bottom_40"></div>
               <div class="pd_bottom_50"></div>
               <div class="title_sections three row">
                  <h3 class="text-uppercase p-3" style="text-align: left;">Our Culture</h3>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_10"></div>
               <!--===============spacing==============-->
            </div>
            <div class="full_width_box">
               <div class="row">

                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_1.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_2.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_3.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-5 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_4.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-4 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_5.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-4 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_6.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-4 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_7.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mt-4 col-6">
                     <div class="simple_image_boxes">
                        <img src="assets/images/gallery/Gall_8.jpg" class="simp_img img-fluid h200" alt="image">
                     </div>
                  </div>
               <!--===============spacing==============-->
               <div class="pd_top_60"></div>
               <!--===============spacing==============-->
                  <!--<div class="text-center">-->
                  <!--    <a href="#" class="explore_btn">Explore More</a>-->
                  <!--</div>-->
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_60"></div>
               <!--===============spacing==============-->
               
            </div>
         </div>
      </div>
   </div>
   
   
                
</section>

<!--<div class="sliderMy container">-->
<!--        <div class="slide-track">-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />-->
<!--            </div>-->
<!--            <div class="slide">-->
<!--                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />-->
<!--            </div>-->
            
            
<!--        </div>-->
<!--    </div>-->

<section  class="tabs_all_box  tabs_all_box_start type_three lightbg" id="apart">
   <div class="container">
               <div class="row" class="tab_over_all_box">
                  
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-12 ">
                     <!--===============spacing==============-->
                     <div class="pd_top_50"></div>
                     <div>
                     <h2>What Sets Us<br>
Apart</h2>
                     </div>
                     <div class="pd_top_45"></div>
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
                                    <li class="nav-item"><a class="s_tab_btn nav-link1 <?php if($a==1){ echo 'active'; } ?>" data-tab="#thereetabtab<?php echo $a; ?>"><?php echo $ra['title']; ?></a></li>
<?php $a=$a+1; } ?>
                                   </ul>
                              </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_60 disNone"></div>
                     <!--===============spacing==============-->
                  </div>
                  <div class="col-xxl-8 col-xl-8 col-lg-8 col-12 bg_op_1 pl0 pr0" >
                  <div class="pd_top_50"></div>
                  <div class="s_tab_wrapper">

                                 <div class="s_tabs_content">
<?php
$qb="SELECT * FROM `about_us_apart` where status='Active' Limit 6";
$qbr=mysqli_query($conn,$qb);
$b=1;
?> 
<?php foreach($qbr as $ra2){ ?>
                                    <div class="s_tab fade  aboutanime_1 <?php if($b==1){ echo 'active-tab'; } ?> minHeightApart show p-5" id="thereetabtab<?php echo $b; ?>">
                                       <div class="tab_content one">
                                          
                                          <div class="content_bx text-center">
                                                <h2 class='mt-2'><?php echo $ra2['title']; ?></h2>
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
               </div>
               </div>
            </section>
<!---tab-end--->

 <!----header----->
<section id="globalClientele">
   <div id="content" class="site-content ">
      <div class="container-sm">
         <div class="row default_row">
            <div class="title_all_box style_three text-center dark_color">
               <div class="title_sections three row">
                  <h3 class="text-uppercase p-3 mt-5" style="text-align: left;">Global Clientele</h3>
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