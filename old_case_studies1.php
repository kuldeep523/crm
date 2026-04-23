<?php include("admin/connection.php");
include("include/header.php"); 
$id=11;
?>
<head>
    <title>Case Studies-CRM Landing</title>
</head>
<!--===============PAGE CONTENT ==============-->
<!--===============PAGE CONTENT ==============-->
<style>
    .service_content .case_content
        {
            max-height: 0px;
            transition: .5s;
            overflow: hidden;
            text-align:left;
        }
         .service_content input:checked ~ .case_content
        {
            max-height: 110vh;
            padding-bottom:15px;
        }
        /* .feature_tab input
        {
            appearance: none;
        } */
         .service_content input:checked ~ .btn_click
        {
            display: none;
        }
        .rotateicon
        {
            transform: rotate(180deg);
            margin-top: 6px !important;
        }

</style>
<div id="content" class="site-content ">
    <!---slider--->
<?php
    $q = "SELECT * FROM Case_Studies WHERE id='$id'";
    $q_run = mysqli_query($conn,$q);
    $r = mysqli_fetch_row($q_run);
?>

    <div class="style_one casemtmnew">
        <div class="page_header_content">
        <div class="pd_top_80 disNone"></div>
        <div class="container-fluid">
                <div class="row positionRelativemobile">
                    <div class="col-12 kill p-0">
                    <div class="row">
                    <div class="col-lg-12 col-12 p-0 disLapNone">
                        <img src="admin/uploads/<?php echo $r[3]; ?>" alt="cycle disNone" class="height_300" style="width:100%;">
                       
                    </div>
                    <div class="col-lg-7">
                    <div class="caseHeroPadding">
                            <div class="pd_top_40 disLapNone"></div>
                            <div class="pd_top_70 disNone"></div>
                            <h6 class="nat"><?php echo $r[1]; ?></h6>
                            <div class="pd_top_20  disLapNone"></div>
                            <div class="pd_top_40 disNone"></div>
                            <p class="te"><?php echo $r[4]; ?> </p>
                            <div class="pd_top_40"></div>
                            <div class="btnCenterCase">
                            <a href="<?php echo $r[6]; ?>" class="btn-Set-case fs-6 disNone"><?php echo $r[5]; ?><img class="btnReadMorecs" src="assets/images/service_icon/Right_arrow.png" alt=""></a>
                            </div>
                            
                            <div class="pd_top_80 disLapNone"></div>
                            <div class="pd_top_30"></div>
                        </div> 
                       
                    </div>
                    <div class="col-lg-5 col-11 col-sm-12 p-0"  >
                        <div class=" padd0case productUsemobile">
                            <img src="admin/uploads/<?php echo $r[3]; ?>" alt="cycle" class="height_300 disNone" style="width:100%; ">
                        <div class="img">
                            <div class=" paddcasehero">
                                <p class="fs-4 py-2">
                                     <?php echo $r[8]; ?>
                                </p>
                                <h6 class="fs-4 pb-2" style="color:#0D4282">
                               <?php echo $r[9]; ?>
                                </h6>
                                <p class="fs-6 pe-3" style="line-height:30px;">
                                <?php echo $r[10]; ?>
                                </p>
                                <h6 class="fs-4 pb-2" style="color:#0D4282">
                                <?php echo $r[11]; ?>
                                </h6>
                                <p class="fs-6"><?php echo $r[12]; ?></p>
                                <div class="pd_top_10"></div>
                                <div class="mt50 disLapNone t-center">
                                    <a href="<?php echo $r[6]; ?>" class="blueBtn  fs-5"><?php echo $r[5]; ?></a>
                                </div>
                                <div class="pd_top_30 disLapNone"></div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="newsteller style_one mb-3 py-5">
    
        <div class="container-fluid ">
            <div class="row align-items-center ">
                <div class="col-lg-2  col-12 fs-sm-1 float-right">
                <div class="pd_top_40 disLapNone"></div>
                <div class="fs-case"></div>
                <h1 class="feturesNone disn" style="writing-mode: vertical-lr; float:right; transform: rotate(180deg); font-size: 38px;">
                        Context
                     </h1>
                   <h3 class="feturesLapNone text-center ">Context</h3>
                   <div class="pd_top_40 disLapNone"></div>
                </div>
                <div class="col-12 col-lg-10 ">
                    <div class="row">
<?php
    $q_c1 = "SELECT * FROM Case_Studies_Context WHERE Case_Studies_id='$id' AND number='1'AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_c1_run = mysqli_query($conn,$q_c1);
    $q_c1r = mysqli_fetch_row($q_c1_run);
?>
<style>
    .b1:hover{
        background-color:<?php echo $q_c1r[3]; ?>!important;
        
    }
    .b1:hover .cricle{
        color:<?php echo $q_c1r[3]; ?>!important;
    }
</style>

                        <div class="col-lg-5 marRight col-12 box1 b1" style="border:1px solid <?php echo $q_c1r[3]; ?>">
                            
                            <div class="outcricle" id="outcricle" style="border:1px solid <?php echo $q_c1r[3]; ?>">
                                <div class="cricle" style="background: <?php echo $q_c1r[3]; ?>">1</div>
                            </div>
                            <div style=" margin-top:17px" clsss="mar">
                                <p class="ctext "> <?php echo $q_c1r[4]; ?></p>
                            </div>
                        </div>
                        
<?php
    $q_c2 = "SELECT * FROM Case_Studies_Context WHERE Case_Studies_id='$id' AND number='2' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_c2_run = mysqli_query($conn,$q_c2);
    $q_c2r = mysqli_fetch_row($q_c2_run);
?>
<style>
    .b2:hover{
        background-color:<?php echo $q_c2r[3]; ?>!important;
        
    }
    .b2:hover .cricle{
        color:<?php echo $q_c2r[3]; ?>!important;
    }
</style>

                        <div class="col-lg-5 col-12 box1 b2" style="border:1px solid <?php echo $q_c2r[3]; ?>">
                            <div class="outcricle"  style="border:1px solid <?php echo $q_c2r[3]; ?>">
                                <div class="cricle" style="background: <?php echo $q_c2r[3]; ?>">2</div>
                            </div>
                            <div style=" margin-top:7px" clsss="mar">
                                <p class="ctext " id="text"><?php echo $q_c2r[4]; ?></p>
                            </div>
                        </div>
                        
<?php
    $q_c3 = "SELECT * FROM Case_Studies_Context WHERE Case_Studies_id='$id' AND number='3' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_c3_run = mysqli_query($conn,$q_c3);
    $q_c3r = mysqli_fetch_row($q_c3_run);
?>
<style>
    .b3:hover{
        background-color:<?php echo $q_c3r[3]; ?>!important;
         color:white!important;
    }
    .b3:hover .cricle{
        color:<?php echo $q_c3r[3]; ?>!important;
    }
</style>
                        <div class="col-lg-5 marRight col-12 box1 b3" style="border:1px solid <?php echo $q_c3r[3]; ?>">
                            <div class="outcricle"  style="border:1px solid <?php echo $q_c3r[3]; ?>">
                                <div class="cricle" style="background: <?php echo $q_c3r[3]; ?>">3</div>
                            </div>
                            <div style=" margin-top:7px" clsss="mar">
                                <p class="ctext " id="text1"><?php echo $q_c3r[4]; ?></p>
                            </div>
                        </div>
                        
<?php
    $q_c4 = "SELECT * FROM Case_Studies_Context WHERE Case_Studies_id='$id' AND number='4' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_c4_run = mysqli_query($conn,$q_c4);
    $q_c4r = mysqli_fetch_row($q_c4_run);
?>
<style>
    .b4:hover{
        background-color:<?php echo $q_c4r[3]; ?>!important;
        color:white!important;
        
    }
    .b4:hover .cricle{
        color:<?php echo $q_c4r[3]; ?>!important;
    }
</style>
                        <div class="col-lg-5 col-12 box1 b4" style="border:1px solid <?php echo $q_c4r[3]; ?>">
                            <div class="outcricle" id="outcricle1" style="border:1px solid <?php echo $q_c4r[3]; ?>">
                                <div class="cricle" style="background: <?php echo $q_c4r[3]; ?>">4</div>
                            </div>
                            <div style="margin-top:17px" clsss="mare">
                                <p class="ctext "><?php echo $q_c4r[4]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background:#f3f5f7">
    <div class="container-fluid ">
            <div class="row align-items-center">
            <div class="col-12 fs-1 fw-b p-5 pt-3 pb-2 text-center disLapNone">
                            Challenges before CRM <br>Landing’s Solution:
            </div>
                <div class="col-lg-6 p-lg-5 pe-lg-0 col-sm-12 p-5 ">
                    <img src="assets/images/crmim/Group1010.png" alt="group">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="row p-lg-4 p-sm-5">
                        <div class="col-12 disNone" >
                            <h3 class="mt-3 mb-4">Challenges before CRM Landing’s Solution:</h3>
                        </div>
                        <div class="col-12 pt-3">
                            
<?php
    $q_ch1 = "SELECT * FROM Case_Studies_Challenge WHERE Case_Studies_id='$id' AND number='1' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_ch1_run = mysqli_query($conn,$q_ch1);
    $q_ch1r = mysqli_fetch_row($q_ch1_run);
    $chli_id1=$q_ch1r[0];
?>                    
                                <div class="d-flex">
                                <div class="mt-1">
                                    <span style="background-color:<?php echo $q_ch1r[3]; ?>;" class="dg1" id="dg1">
                                        1
                                    </span>
                                </div>
                                    <p class="lisetcasestudyHead"><?php echo $q_ch1r[4]; ?></p>
                                </div>
                                 
<?php
    $q_chli1 = "SELECT * FROM Case_Studies_Challenge_li WHERE Case_Studies_id='$id' AND Challenge_id='$chli_id1'";
    $q_chli1_run = mysqli_query($conn,$q_chli1);
    $chli_num1 = mysqli_num_rows($q_chli1_run);
    if($chli_num1>0){
?>                              
                                <div class="ms-3">
                                <ul >
<?php foreach($q_chli1_run as $q_chli1r){ ?>
                                <li class="lisetcasestudyLi ms-5">
                               <?php echo $q_chli1r['content']; ?>
                               </li>
<?php } ?>
                                </ul>
                                </div>
<?php } ?>
<?php
    $q_ch2 = "SELECT * FROM Case_Studies_Challenge WHERE Case_Studies_id='$id' AND number='2' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_ch2_run = mysqli_query($conn,$q_ch2);
    $q_ch2r = mysqli_fetch_row($q_ch2_run);
     $chli_id2=$q_ch2r[0];
?>
                                <div class="d-flex">
                                <div >
                                     <span style="background-color:<?php echo $q_ch2r[3]; ?>;" class="dg2" id="dg2">
                                       2
                                    </span>
                                </div>
                                    <p class="lisetcasestudyHead">
                                       <?php echo $q_ch2r[4]; ?>
                                       </p>
                                </div>
                                <?php
    $q_chli2 = "SELECT * FROM Case_Studies_Challenge_li WHERE Case_Studies_id='$id' AND Challenge_id='$chli_id2'";
    $q_chli2_run = mysqli_query($conn,$q_chli2);
    $chli_num2 = mysqli_num_rows($q_chli2_run);
    if($chli_num2>0){
?>                              
                                <div class="ms-3">
                                <ul >
<?php foreach($q_chli2_run as $q_chli2r){ ?>
                                <li class="lisetcasestudyLi ms-5">
                               <?php echo $q_chli2r['content']; ?>
                               </li>
<?php } ?>
                                </ul>
                                </div>
<?php } ?>
                                
                                
                                
                                
<?php
    $q_ch3 = "SELECT * FROM Case_Studies_Challenge WHERE Case_Studies_id='$id' AND number='3' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_ch3_run = mysqli_query($conn,$q_ch3);
    $q_ch3r = mysqli_fetch_row($q_ch3_run);
     $chli_id3=$q_ch3r[0];
?>
                                <div class="d-flex mt-3">
                                <div >
                                    <span style="background-color:<?php echo $q_ch3r[3]; ?>;" class="dg2" id="dg3">
                                       3
                                    </span>
                                </div>
                                    <p class="lisetcasestudyHead">
                                        <?php echo $q_ch3r[4]; ?>
                                    </p>
                                </div>
                                
<?php
    $q_chli3 = "SELECT * FROM Case_Studies_Challenge_li WHERE Case_Studies_id='$id' AND Challenge_id='$chli_id3'";
    $q_chli3_run = mysqli_query($conn,$q_chli3);
    $chli_num3 = mysqli_num_rows($q_chli3_run);
    if($chli_num3>0){
?>                              
                                <div class="ms-3">
                                <ul >
<?php foreach($q_chli3_run as $q_chli3r){ ?>
                                <li class="lisetcasestudyLi ms-5">
                               <?php echo $q_chli3r['content']; ?>
                               </li>
<?php } ?>
                                </ul>
                                </div>
<?php } ?>
                                
<?php
    $q_ch4 = "SELECT * FROM Case_Studies_Challenge WHERE Case_Studies_id='$id' AND number='4' AND status='Active' ORDER BY id DESC LIMIT 1";
    $q_ch4_run = mysqli_query($conn,$q_ch4);
    $q_ch4r = mysqli_fetch_row($q_ch4_run);
     $chli_id4=$q_ch4r[0];
?>
                                <div class="d-flex mt-3">
                                <div >
                                    <span style="background-color:<?php echo $q_ch4r[3]; ?>;" class="dg2" id="dg4">
                                       4
                                    </span>
                                </div>
                                    <p class="lisetcasestudyHead">
                                    <?php echo $q_ch4r[4]; ?>
                                    </p>
                                </div>

<?php
    $q_chli4 = "SELECT * FROM Case_Studies_Challenge_li WHERE Case_Studies_id='$id' AND Challenge_id='$chli_id4'";
    $q_chli4_run = mysqli_query($conn,$q_chli4);
    $chli_num4 = mysqli_num_rows($q_chli4_run);
    if($chli_num4>0){
?>                              
                                <div class="ms-3">
                                <ul >
<?php foreach($q_chli4_run as $q_chli4r){ ?>
                                <li class="lisetcasestudyLi ms-5">
                               <?php echo $q_chli4r['content']; ?>
                               </li>
<?php } ?>
                                </ul>
                                </div>
<?php } ?>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
         <h1 class=" fs-1 p-4 pb-0 text-center mt-5 d-lg-none" style="line-height:40px;">
            Solutions Built [Mobile + Web based]
        </h1>
        <div class="cantainer-fluid pd_top_150 pd_bottom_50">
            <div class="row p-5 pe-0">
                <div class="col-12 p-lg-5  ps-sm-2  back parent1" id="sbbg" style="background-image: url(assets/images/crmim/bg.jpg);">
                   <div class="row p-5 position-relative">
                        <div class=" col-lg-3 boxh">
                            <h1 class="text-white fs-2 disNone disn" style="line-height:40px">
                                Solutions Built [Mobile + Web based]
                            </h1>
                        </div>
                        <div class="col-lg-9 col-10">
                            <div class="row">
                                
<?php
    $q_solution = "SELECT * FROM Case_Studies_Solution WHERE Case_Studies_Id='$id' AND status='Active' LIMIT 4";
    $q_solution_run = mysqli_query($conn,$q_solution);
    $a=0;
?>                              

<?php foreach($q_solution_run as $q_solution_r){ ?>
                                <div class="col-lg-4 col-sm-12 position-absolute  set child1" onclick="myBtn(<?php echo $a; ?>)">
                                    <div class="p-2 pb-0">
                                        <img src="admin/uploads/<?php echo $q_solution_r['img']; ?>" alt="Solutions Built" class="icon pt-2 pb-4 pb-lg-2">
                                        <h4 class="m-2 pb-lg-5 "><?php echo $q_solution_r['title']; ?></h4>
                                        <!--<p class="pt-5 pt-lg-0">Read More <img src="assets/images/crmim/group1.png" alt="arrow" ></p>-->
                                        <div class="d-none boxTextChange">
                                            <?php echo $q_solution_r['content']; ?>
                                        </div>
                                    </div>
                                </div>
<?php  
$a=$a+1;
}
?>
                            
                            </div>
                        </div>
                   </div> 
                   
                </div>                      
            </div>
            <div class="pd_top_120"></div>
        </div>
    </section>
    <style>
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 10000; /* Sit on top */
          padding-top:200px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgb(0 0 0 / 69%); /* Black w/ opacity */
        }
        @media (max-width: 600px)
        {
          .modal-content {
          
          width: 90% !important;
        }  
        }
        
        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 50%;
        }
        
        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        .parent1 { 
            pointer-events: none; 
        } 
  
        .parent1:hover { 
            background:linear-gradient(323deg, rgba(13, 66, 130, 1) 0%, rgba(2, 36, 77, 1) 61%, rgba(2, 36, 77, 1) 100%) !important;
        } 
  
        /* Apply styles to child element */ 
        .parent1 .child1 { 
            pointer-events: auto; 
            transition: all .5s ease-in-out;
        } 
  
        .parent1 .child1:hover { 
            transform: scale(1.05);
        }
        
        
    </style>
<!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="modal-content">
        <!--<span class="close" onclick="cross()">&times;</span>-->
        <div id="textChange1"></div>
      </div>
    
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");
        
        
        // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");
        
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        // btn.onmouseover =
        var modaltextchange =document.getElementsByClassName('boxTextChange');
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        
        function myBtn(box){
          modal.style.display = "block";
          for(i=0;i<=box;i++)
          {
              if(box==i)
              {
                 
                  document.getElementById("textChange1").innerHTML = modaltextchange[box].innerHTML;
            }
          }
          
        }
        // function myBtn1(){
        //   modal.style.display = "block";
        // }
        
        
        // When the user clicks on <span> (x), close the modal
        // function cross() {
        //   modal.style.display = "none";
        // }
        
        // When the user clicks anywhere outside of the modal, close it
        
    </script>
   
    
    <section>
          <div class="container-sm">
            <div class="row">
              <div class="title_all_box style_three text-center dark_color">
                <div class="pd_bottom_30"></div>
                <div class="title_sections three">
                  <h3 class="text-uppercase  txtcen" style="text-align:left;">Benefit</h3>
                </div>

                <!--===============spacing==============-->
                <div class="pd_bottom_30"></div>
                <!--===============spacing==============-->
              </div>
              <div class="invisible_normal_spacing"></div>
              
<?php
    $q_benefit = "SELECT * FROM Case_Studies_Benefit WHERE Case_Studies_Id='$id' AND status='Active' LIMIT 3";
    $q_benefit_run = mysqli_query($conn,$q_benefit);
    $b=1;
?>                              

<?php foreach($q_benefit_run as $q_benefit_r){ ?>          
              <div class="col-xl-4 col-lg-6 col-md-6 col-12 mt-5">
                <div class="service_box style_four dark_color">
                  <div class="service_content " style="border-bottom:7px solid <?php echo $q_benefit_r['color']; ?>; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.15);">
                    <div class="image_box">
                      <img class="imgDesk wp-post-image" src="admin/uploads/<?php echo $q_benefit_r['img']; ?>" alt="<?php echo $q_benefit_r['title']; ?>">

                    </div>
                    <div class="content_inner">
                      <h6 class="title mn-24" style="margin-bottom:30px;"><a  rel="bookmark"><?php echo $q_benefit_r['title']; ?></a></h6>
                    </div>
                    <input style="appearance: none; display:none;" type="radio" id="first<?php echo $b; ?>" onclick="fun(<?php echo $b; ?>)" value=1>
                    <label for="first<?php echo $b; ?>" class="bob" id="lable1" style='border: 2px solid <?php echo $q_benefit_r['color']; ?>;'>
                        <img src="admin/uploads/<?php echo $q_benefit_r['icon']; ?>" id="rotateIcon<?php echo $b; ?>" alt="icon" class="img1">
                    </label>
                    <div class="case_content ">
                                   <?php echo $q_benefit_r['content']; ?>
                    </div>
                  </div>
                </div>
                <!--===============spacing==============-->
                <div class="mr_bottom_30"></div>
                <!--===============spacing==============-->
              </div>
<?php  
$b=$b+1;
}
?>          
              
                
            </div>
             <div class="mr_bottom_40"></div>
          </div>
        </section>
    
    <!--===============spacing==============-->
    <?php 
        require('components/trustedItServices.php');
        require('components/lets_talk.php'); 
    ?>
</div>

<?php require('include/footer.php') ?>
<script>
function pic(sno) {
    
    document.getElementById("sbbg").style.backgroundImage = "url(assets/images/crmim/bg.jpg)";
}

function pichn() {
   document.getElementById("sbbg").style.backgroundImage = "url(assets/images/crmim/bg.jpg)";
}

    function newFun(num)
    {
        if(num==1)
        {
            document.getElementById("img2").className="position-absolute image";
           document.getElementById("lable2").className="position-absolute bob";
           document.getElementById("img3").className="position-absolute image";
           document.getElementById("lable3").className="position-absolute bob";
          
           document.getElementById("img1").className="position-absolute image1";
           document.getElementById("lable1").className="position-absolute bob1";
           

        }
        if(num==2)
        {
            document.getElementById("img1").className="position-absolute image";
           document.getElementById("lable1").className="position-absolute bob";
           document.getElementById("img3").className="position-absolute image";
           document.getElementById("lable3").className="position-absolute bob";

            document.getElementById("img2").className="position-absolute image2";
           document.getElementById("lable2").className="position-absolute bob2";
        }
        if(num==3)
        {
            document.getElementById("img1").className="position-absolute image";
           document.getElementById("lable1").className="position-absolute bob";
           document.getElementById("img2").className="position-absolute image";
           document.getElementById("lable2").className="position-absolute bob";

            document.getElementById("img3").className="position-absolute image3";
           document.getElementById("lable3").className="position-absolute bob3";        }
    }
    function fun(sno)
    {
        let val = document.getElementById("first"+sno);
        if(val.value==1)
        {
            document.getElementById("rotateIcon"+sno).className="img1 rotateicon";
            val.value=2;
        }
        else if(val.value==2)
        {
            
            val.checked=false; 
            document.getElementById("rotateIcon"+sno).className="img1";
            val.value=1;
        }
        
        
        
        // let val = document.getElementById("first1");
        // if(val.value==1)
        // {
        //     document.getElementById("rotateIcon1").className="img1 rotateicon";
        //     val.value=2;
        // }
        // else if(val.value==2)
        // {
            
        //     val.checked=false; 
        //     document.getElementById("rotateIcon1").className="img1";
        //     val.value=1;
        // }
    }
   
</script>
</body>

</html>
