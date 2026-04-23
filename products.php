<?php include("admin/connection.php");
include("include/header.php"); 
$name = $_GET['nm'];
?>


<head>
    <title>Products-CRM Landing</title>
</head>

<script>
    var currentURL = window.location.href;
    var prefix = 'https://crmlanding.in/assetss?';

    if (currentURL.startsWith(prefix)) {
        var dynamicPart = currentURL.substring(prefix.length);
        var newURL = 'https://crmlanding.in/assets?' + dynamicPart;
        window.history.replaceState({}, document.title, newURL);
        console.log('URL dynamically changed to: ' + newURL);
    }
</script>

<style>
a:hover
{
    /*color:white;*/
}
    .features_tab .features_content
        {
            max-height: 0px;
            transition: 1s;
            overflow: hidden;
        }
         .features_tab input:checked ~ .features_content
        {
            max-height: 110vh;
        }
        /* .features_tab input
        {
            appearance: none;
        } */
         .features_tab input:checked ~ .btn_click
        {
            display: none;
        }
</style>
<?php 

$url = str_replace('+',' ',$name);
$quary = "SELECT * FROM `assets` WHERE `title` = '$url' AND `status` = 'Active'";
$query_run = mysqli_query($conn, $quary);

if ($query_run) {
   foreach ($query_run as $row) {
?>
<section>
    <div class="pd_bottom_80 disNone"></div>
   <div class="abouthero position-relative">
      <div>
      <div class="txtDiv text-center">
         <div class="text">
            
            <h2 class="text-white mt50 fsLarge">
               <?php echo $row['title'];?>
            </h2>
            <p class="text-white mt50 fs-5 " style="font-weight: 300; text-align: center;" >
                <?php echo $row['content'];?>            
                </p>
         </div>
         <div class="mt50 disNone">
            <a href="<?php echo $row['btnlink'] ?>" class="blueBtn fs-5">Book Demo Call</a>
         </div>
         <div class="image text-center disNone pt-4">
            <img class="imglap" src="admin/uploads/<?php echo $row['lap_image'];?>" />
         </div>
         <div class="image text-center disLapNone">
            <img class="imglap" src="admin/uploads/<?php echo $row['mob_image'];?>" />
         </div>
         <div class="mt50 disLapNone">
            <a href="<?php echo $row['btnlink'] ?>" class="blueBtn fs-5">Book Demo Call</a>
         </div>
      </div>
      
      </div>
   </div>
</section>

<section id="culture" class="mt-5">
   <div id="content" class="site-content">
      <div class="container-sm pt365sc pt1200sc">
          
         
         <div class="pd_top_60 disNone"></div>
         <div class="row default_row">

            <div class="full_width_box">
               <div class="row">
                  <div class="col-lg-2 col-sm-2 mt-5 mt-lg-0 pt-3 feturesNone" style="position:relative">
                     <h1 style="writing-mode: vertical-lr; transform: rotate(180deg);" id="Features_scroll1">
                        Features
                     </h1>
                  </div>
                  <div class="col-lg-10 col-sm-10 row  pr0 pl0" >
                     
                     <div class="feturesLapNone" >
                        <h1 class="text-center">Features</h1>
                     </div>
                     <?php
                           $fid = $row['id'];
                           $feature_query = "SELECT * FROM `features` WHERE `aid` = '$fid' AND `status` = 'Active'";
                           $fquery_run = mysqli_query($conn, $feature_query);
                           $veiw = 0;
                            if ($fquery_run) {
                            foreach ($fquery_run as $list_veiw) {
                                ?>
                                <style>
                                   <?php echo " #bgChange".$list_veiw['id'];?>{
                                    border: 2px solid <?php echo $list_veiw['color']; ?>;
                                    border-radius: 8px;
                                    }
                                    
                                </style>
                                <?php
                                 // feature list
                                $feature_list = $list_veiw['id'];
                                    $feature_list_query  = "SELECT * FROM `features_list` WHERE `features_id` = '$feature_list' AND `status` = 'Active'";
                                $feature_list_run = mysqli_query($conn, $feature_list_query);
                            $feature_list_total =  mysqli_num_rows($feature_list_run);
                           if($feature_list_total > 1){
                           ?>
                    <div class="col-lg-6 col-12 mt-4">
                           <div class="caseAssetsServiceBG Borderclr1"  id="bgChange<?php echo $list_veiw['id'];?>">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab minHeight">
                                   <div id="oManage<?php echo ++$veiw?>">
                                   
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12 ">
                                       <img width="50px" style="float:left;"   class="float-right" src="admin/uploads/<?php echo $list_veiw['icon']?>" alt="Order Management">
                                       </div>
                                       <div class="col-lg-10 col-12 p20mobile">
                                       <h4 class="hCase"><?php echo $list_veiw['title']?> </h4>
                                      <?php
                                                        $feature_list_query1  = "SELECT * FROM `features_list` WHERE `features_id` = '$feature_list' AND `status` = 'Active' Limit 1";
                                                        $feature_list_run1 = mysqli_query($conn, $feature_list_query1);
                                                        if ($feature_list_run1) {
                                                            foreach ($feature_list_run1 as $feature_list_result1) {
                                                        ?>
                                                        <p class="pCase pt-2"><?php echo $feature_list_result1['point']?></p>
                                                        <?php
                                                    }
                                                    }?>
                                       </div>
                                    </div>
                                   </div>
                                     <input style="appearance: none; display:none;" type="radio" name="acc"
                                                id="acc<?php echo $veiw?>" onclick="fun(<?php echo $veiw?>)">
                                            <label for="acc<?php echo $veiw?>" class="btn_click m-0">
                                                <!-- <a href="">Click Here</a> -->
                                                <p id="viewMore" class="acase">View More</p>
                                            </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="admin/uploads/<?php echo $list_veiw['image']?>" alt="<?php echo $list_veiw['title']?>" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet">
                                          <img width="60px" src="admin/uploads/<?php echo $list_veiw['icon']?>" alt="Order Management" />
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;"><?php echo $list_veiw['title']?></h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                                <?php
                                                        if ($feature_list_run) {
                                                            foreach ($feature_list_run as $feature_list_result1) {
                                                                ?>
                                                            <li><?php echo $feature_list_result1['point']?></li>
                                                            <?php
                                                                }
                                                            }?>
                                            </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose<?php echo $veiw?>" onclick="cl(<?php echo $veiw?>)">
                                             <label for="accclose<?php echo $veiw?>" class="btn_click m-0" >
                                                <!-- <a href="">Click Here</a> -->
                                                <p id="viewMore" class="acase1">View Less..</p>
                                             </label>
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                        <?php }else{?>
                    <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr2" id="bgChange<?php echo $list_veiw['id'];?>">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab minHeight">
                                   <div >
                                  
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">
                                       <img width="50px" style="float:left;"   src="admin/uploads/<?php echo $list_veiw['icon']?>" alt="Realtime Inventory Check">
                                       </div>
                                       <div class="col-lg-10 col-12 p20mobile">
                                       <h4 class="hCase"><?php echo $list_veiw['title']?></h4>
                                       <?php
                                                        $feature_list_query1  = "SELECT * FROM `features_list` WHERE `features_id` = '$feature_list' AND `status` = 'Active' Limit 1";
                                                        $feature_list_run1 = mysqli_query($conn, $feature_list_query1);
                                                        if ($feature_list_run1) {
                                                            foreach ($feature_list_run1 as $feature_list_result1) {
                                                        ?>
                                                        <p class="pCase pt-2"><?php echo $feature_list_result1['point']?></p>
                                                        <?php
                                                    }
                                                    }?>
                                       </div>
                                    </div>
                                   </div>
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc2" onclick="fun(2)">-->
                                    <!--<label for="acc2" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
                                    <!--<div class="features_content position-relative">-->
                                    <!--   <div class="">-->
                                    <!--      <img src="assets/images/case/Order_Management.png" alt="Order Management" />-->
                                    <!--   </div>-->
                                    <!--   <div class="position-absolute tabIconRightSet">-->
                                    <!--      <img width="60px" src="assets/images/case/Inventory.svg">-->
                                    <!--   </div>-->
                                    <!--   <div>-->
                                    <!--      <div class="caseSubHeading">-->
                                    <!--         <h4 class="hCase" style="padding-left: 10px;">Realtime Inventory Check</h4>-->
                                    <!--      </div>-->
                                    <!--      <div class="mt-2 caseSubHeadingp">-->
                                    <!--         <ol type="1" style="text-align: justify;">-->
                                    <!--            <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.<br></li>-->
                                    <!--            <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM<br></li>-->
                                    <!--            <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer<br></li>-->
                                    <!--         </ol>-->
                                    <!--         <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose2" onclick="cl(2)">-->
                                    <!--         <label for="accclose2" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
                                    <!--            <p id="viewMore" class="acase1">View Less..</p>-->
                                    <!--         </label>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       
                                    <!--</div>-->
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                       
                        <?php
                            }
                                 }
                                }?>
<!--                         <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr4" id="bgChange5">-->
<!--                              <div class="d-flex row">-->
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div id="oManage5">-->
                                    
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Speedometer.svg" alt="Order Fulfilment Status">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                            <h4 class="hCase">Credit Management</h4>-->
<!--                                            <p class="pCase pt-2">With ERP integration, realtime visualization of credit limit, credit exposure and ledger is possible</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc5" onclick="fun(5)">-->
<!--                                    <label for="acc5" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
<!--                                       <p id="viewMore" class="acase">View More</p>-->
<!--                                    </label>-->
<!--                                    <div class="features_content position-relative">-->
<!--                                       <div class="">-->
<!--                                          <img src="assets/images/case/Credit_Management.jpg" alt="Order Fulfilment Status" />-->
<!--                                       </div>-->
<!--                                       <div class="position-absolute tabIconRightSet" >-->
<!--                                          <img width="60px" src="assets/images/case/Speedometer.svg">-->
<!--                                       </div>-->
<!--                                       <div>-->
<!--                                          <div class="caseSubHeading">-->
<!--                                             <h4 class="hCase" style="padding-left: 10px;">Credit Management & Visualization</h4>-->
<!--                                          </div>-->
<!--                                          <div class="mt-2 caseSubHeadingp">-->
<!--                                             <ol type="1" style="text-align: justify;">-->
                                               
<!--                                                <li>With ERP integration, realtime visualization of credit limit, credit exposure and ledger is possible</li>-->
<!--                                                <li>Dealer can now see the status of overdue payments and mange their credit lines better to suit business needs</li>-->
<!--                                             </ol>-->
<!--                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose5" onclick="cl(5)">-->
<!--                                             <label for="accclose5" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
<!--                                                <p id="viewMore" class="acase1">View Less..</p>-->
<!--                                             </label>-->
<!--                                          </div>-->
<!--                                       </div>-->
                                       
<!--                                    </div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4">-->
<!--                           <div class="caseAssetsServiceBG Borderclr3" >-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div >-->
                                    
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Credit_Card.svg" alt="Credit & Debit Note output">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Credit & Debit Note output:</h4>-->
<!--                                    <p class="pCase pt-2">The DMS has the capability of producing output of Invoices PDF form, thus allowing quick, easy and effective credit management between OEM and dealers</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc4" onclick="fun(4)">-->
                                    <!--<label for="acc4" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
                                    <!--<div class="features_content position-relative">-->
                                    <!--   <div class="">-->
                                    <!--      <img src="assets/images/case/Order_Management.png" alt="Order Management" />-->
                                    <!--   </div>-->
                                    <!--   <div class="position-absolute tabIconRightSet" >-->
                                    <!--      <img width="60px" src="assets/images/case/Credit_Card.svg">-->
                                    <!--   </div>-->
                                    <!--   <div>-->
                                    <!--      <div class="caseSubHeading">-->
                                    <!--         <h4 class="hCase" style="padding-left: 10px;">Credit & Debit Note Output</h4>-->
                                    <!--      </div>-->
                                    <!--      <div class="mt-2 caseSubHeadingp">-->
                                    <!--         <ol type="1" style="text-align: justify;">-->
                                    <!--            <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.</li>-->
                                    <!--            <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM</li>-->
                                    <!--            <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer</li>-->
                                    <!--         </ol>-->
                                    <!--         <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose4" onclick="cl(4)">-->
                                    <!--         <label for="accclose4" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
                                    <!--            <p id="viewMore" class="acase1">View Less..</p>-->
                                    <!--         </label>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       
                                    <!--</div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
                        
<!--                         <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG" style="border:2px solid #B163C9; border-radius: 10px;">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div>-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;" src="assets/images/case/Received.svg" alt="Order Fulfilment Status">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Order Fulfilment Status</h4>-->
<!--                                       <p class="pCase pt-2">With various integrations in place, a dealer can view in real-time the status of order fulfilment such as Orders places vs Goods Received vs Goods in Transit etc.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc3" onclick="fun(3)">-->
                                    <!--<label for="acc3" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
                                    <!--<div class="features_content position-relative">-->
                                    <!--   <div class="">-->
                                    <!--      <img src="assets/images/case/Order_Management.png" alt="Credit Management" />-->
                                    <!--   </div>-->
                                    <!--   <div class="position-absolute tabIconRightSet" >-->
                                    <!--      <img width="60px" src="assets/images/case/Speedometer.svg">-->
                                    <!--   </div>-->
                                    <!--   <div>-->
                                    <!--      <div class="caseSubHeading">-->
                                    <!--         <h4 class="hCase" style="padding-left: 10px;">Order Fulfilment Status</h4>-->
                                    <!--      </div>-->
                                    <!--      <div class="mt-2 caseSubHeadingp">-->
                                    <!--         <ol type="1" style="text-align: justify;">-->
                                    <!--            <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.</li>-->
                                    <!--            <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM</li>-->
                                    <!--            <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer</li>-->
                                    <!--         </ol>-->
                                    <!--         <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose3" onclick="cl(3)">-->
                                    <!--         <label for="accclose3" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
                                    <!--            <p id="viewMore" class="acase1">View Less..</p>-->
                                    <!--         </label>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       
                                    <!--</div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr1" id="bgChange2">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div id="oManage2">-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Erp.svg" alt="ERP Integration">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">ERP Integration</h4>-->
<!--                                    <p class="pCase pt-2">The DMS has provisions to be integrated with ERPs such as SAP & Navision.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc2" onclick="fun(2)">-->
<!--                                    <label for="acc2" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
<!--                                       <p id="viewMore" class="acase">View More</p>-->
<!--                                    </label>-->
<!--                                    <div class="features_content position-relative">-->
<!--                                       <div class="">-->
<!--                                          <img src="assets/images/case/ERP_Integration.jpg" alt="ERP Integration" />-->
<!--                                       </div>-->
<!--                                       <div class="position-absolute tabIconRightSet" >-->
<!--                                          <img width="60px" src="assets/images/case/Erp.svg">-->
<!--                                       </div>-->
<!--                                       <div>-->
<!--                                          <div class="caseSubHeading">-->
<!--                                             <h4 class="hCase" style="padding-left: 10px;">ERP Integration</h4>-->
<!--                                          </div>-->
<!--                                          <div class="mt-2 caseSubHeadingp">-->
<!--                                             <ol type="1" style="text-align: justify;">-->
<!--                                                <li>The DMS has provisions to be integrated with ERPs such as SAP & Navision.</li>-->
<!--                                                <li>The expert team at CRM Landing can help build and execute the right integration architecture </li>-->
<!--                                             </ol>-->
<!--                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose2" onclick="cl(2)">-->
<!--                                             <label for="accclose2" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
<!--                                                <p id="viewMore" class="acase1">View Less..</p>-->
<!--                                             </label>-->
<!--                                          </div>-->
<!--                                       </div>-->
                                       
<!--                                    </div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr2" id="bgChange3">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div id="oManage3">-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Scheme_Visibility.svg" alt="Scheme Visibility & Performance">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Scheme Visibility & Performance</h4>-->
<!--                                    <p class="pCase pt-2">OEMs can now run customised dealer specific incentive schemes.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc3" onclick="fun(3)">-->
<!--                                    <label for="acc3" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
<!--                                       <p id="viewMore" class="acase">View More</p>-->
<!--                                    </label>-->
<!--                                    <div class="features_content position-relative">-->
<!--                                       <div class="">-->
<!--                                          <img src="assets/images/case/Scheme_Visibility_&_Performance.jpg" alt="Scheme Visibility & Performance" />-->
<!--                                       </div>-->
<!--                                       <div class="position-absolute tabIconRightSet" >-->
<!--                                          <img width="60px" src="assets/images/case/Scheme_Visibility.svg">-->
<!--                                       </div>-->
<!--                                       <div>-->
<!--                                          <div class="caseSubHeading">-->
<!--                                             <h4 class="hCase" style="padding-left: 10px;">Scheme Visibility & Performance-->
<!--</h4>-->
<!--                                          </div>-->
<!--                                          <div class="mt-2 caseSubHeadingp">-->
<!--                                             <ol type="1" style="text-align: justify;">-->
<!--                                                <li>OEMs can now run customised dealer specific incentive schemes. </li>-->
<!--                                                <li>Additionally, the performance against these schemes can be tracked and nudges can be created encouraging dealers. Eg. Sell 100 quantity more, and avail an extra discount of 1%</li>-->
                                                
<!--                                             </ol>-->
<!--                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose3" onclick="cl(3)">-->
<!--                                             <label for="accclose3" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
<!--                                                <p id="viewMore" class="acase1">View Less..</p>-->
<!--                                             </label>-->
<!--                                          </div>-->
<!--                                       </div>-->
                                       
<!--                                    </div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr3">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div>-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Dynamic_Price_List.svg" alt="Dynamic Price List">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Dynamic Price List</h4>-->
<!--                                    <p class="pCase pt-2">In certain business dynamics, price list can change frequently. In this DMS, the latest price can be pulled from the ERP realtime, thus reducing coordination.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc8" onclick="fun(8)">-->
                                    <!--<label for="acc8" class="btn_click m-0" >-->
                                       <!-- <a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
                                    <!--<div class="features_content position-relative">-->
                                    <!--   <div class="">-->
                                    <!--      <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />-->
                                    <!--   </div>-->
                                    <!--   <div class="position-absolute tabIconRightSet" >-->
                                    <!--      <img width="60px" src="assets/images/case/Erp.svg">-->
                                    <!--   </div>-->
                                    <!--   <div>-->
                                    <!--      <div class="caseSubHeading">-->
                                    <!--         <h4 class="hCase" style="padding-left: 10px;">ERP Integration</h4>-->
                                    <!--      </div>-->
                                    <!--      <div class="mt-2 caseSubHeadingp">-->
                                    <!--         <ol type="1" style="text-align: justify;">-->
                                    <!--            <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.</li>-->
                                    <!--            <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM</li>-->
                                    <!--            <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer</li>-->
                                    <!--         </ol>-->
                                    <!--         <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose8" onclick="cl(8)">-->
                                    <!--         <label for="accclose8" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
                                    <!--            <p id="viewMore" class="acase1">View Less..</p>-->
                                    <!--         </label>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       
                                    <!--</div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr4">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div>-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Enquiry_Management.svg" alt="Enquiry Management-->
<!--">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Enquiry Management-->
<!--</h4>-->
<!--                                    <p class="pCase pt-2">On occasions, when dealers or retailer receive unique requirements from customers, they can raise such specific requirements via the enquiry management feature to the OEMs for consideration.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc9" onclick="fun(9)">-->
                                    <!--<label for="acc9" class="btn_click m-0" >-->
                                    <!--    <a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
                                    <!--<div class="features_content position-relative">-->
                                    <!--   <div class="">-->
                                    <!--      <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />-->
                                    <!--   </div>-->
                                    <!--   <div class="position-absolute tabIconRightSet" >-->
                                    <!--      <img width="60px" src="assets/images/case/Erp.svg">-->
                                    <!--   </div>-->
                                    <!--   <div>-->
                                    <!--      <div class="caseSubHeading">-->
                                    <!--         <h4 class="hCase" style="padding-left: 10px;">ERP Integration</h4>-->
                                    <!--      </div>-->
                                    <!--      <div class="mt-2 caseSubHeadingp">-->
                                    <!--         <ol type="1" style="text-align: justify;">-->
                                    <!--            <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.</li>-->
                                    <!--            <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM</li>-->
                                    <!--            <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer</li>-->
                                    <!--         </ol>-->
                                    <!--         <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose9" onclick="cl(9)">-->
                                    <!--         <label for="accclose9" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
                                    <!--            <p id="viewMore" class="acase1">View Less..</p>-->
                                    <!--         </label>-->
                                    <!--      </div>-->
                                    <!--   </div>-->
                                       
                                    <!--</div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr1" id="bgChange4">-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div id="oManage4">-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Feedback.svg" alt="Feedback, Complaints & Survey-->
<!--">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Feedback, Complaints & Survey-->
<!--</h4>-->
<!--                                    <p class="pCase pt-2">Each distributor, dealer and retailer can have a module covering feedback, complaints and surveys, using which they could raise their concerns to the OEMs.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
<!--                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc4" onclick="fun(4)">-->
<!--                                    <label for="acc4" class="btn_click m-0" >-->
                                        <!--<a href="">Click Here</a> -->
<!--                                       <p id="viewMore" class="acase">View More</p>-->
<!--                                    </label>-->
<!--                                    <div class="features_content position-relative">-->
<!--                                       <div class="">-->
<!--                                          <img src="assets/images/case/Feedback_Complaints_&_Survey.jpg" alt="Feedback, Complaints & Survey" />-->
<!--                                       </div>-->
<!--                                       <div class="position-absolute tabIconRightSet" >-->
<!--                                          <img width="60px" src="assets/images/case/Feedback.svg" alt="Feedback, Complaints & Survey">-->
<!--                                       </div>-->
<!--                                       <div>-->
<!--                                          <div class="caseSubHeading">-->
<!--                                             <h4 class="hCase" style="padding-left: 10px;">Feedback, Complaints & Survey</h4>-->
<!--                                          </div>-->
<!--                                          <div class="mt-2 caseSubHeadingp">-->
<!--                                             <ol type="1" style="text-align: justify;">-->
<!--                                                <li>Each distributor, dealer and retailer can have a module covering feedback, complaints and surveys, using which they could raise their concerns to the OEMs. </li>-->
<!--                                                <li>Additionally, the OEMs could run several surveys within the distribution network to gather crucial intelligence-->
<!--</li>-->
                                               
<!--                                             </ol>-->
<!--                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose4" onclick="cl(4)">-->
<!--                                             <label for="accclose4" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
<!--                                                <p id="viewMore" class="acase1">View Less..</p>-->
<!--                                             </label>-->
<!--                                          </div>-->
<!--                                       </div>-->
                                       
<!--                                    </div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
<!--                        <div class="col-lg-6 col-12 mt-4 ">-->
<!--                           <div class="caseAssetsServiceBG Borderclr2" >-->
<!--                              <div class="d-flex row">-->
                              
<!--                                 <div class="col-lg-12 p0new features_tab minHeight">-->
<!--                                 <div>-->
<!--                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >-->
<!--                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-12">-->
<!--                                       <img width="50px" style="float:left;"   src="assets/images/case/Business_Performance_Dashboard.svg" alt="Business Performance Dashboard-->
<!--">-->
<!--                                       </div>-->
<!--                                       <div class="col-lg-10 col-12 p20mobile">-->
<!--                                       <h4 class="hCase">Business Performance Dashboard-->
<!--</h4>-->
<!--                                    <p class="pCase pt-2">A dashboard helps each distributor, dealer and retailer helps visualise its business performance realtime such as Target vs Actuals, Outstanding payments, scheme performance, complaints etc.</p>-->
<!--                                       </div>-->
<!--                                    </div>-->
<!--                                 </div>-->
                                    <!--<input style="appearance: none; display:none;"  type="radio" name="acc" id="acc11" onclick="fun(11)">-->
                                    <!--<label for="acc11" class="btn_click m-0" >-->
                                        <!--<a href="">Click Here</a> -->
                                    <!--   <p id="viewMore" class="acase">View More</p>-->
                                    <!--</label>-->
<!--                                    <div class="features_content position-relative">-->
<!--                                       <div class="">-->
<!--                                          <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />-->
<!--                                       </div>-->
<!--                                       <div class="position-absolute tabIconRightSet" >-->
<!--                                          <img width="60px" src="assets/images/case/Erp.svg" alt="Feedback, Complaints & Survey">-->
<!--                                       </div>-->
<!--                                       <div>-->
<!--                                          <div class="caseSubHeading">-->
<!--                                             <h4 class="hCase" style="padding-left: 10px;">Feedback, Complaints & Survey</h4>-->
<!--                                          </div>-->
<!--                                          <div class="mt-2 caseSubHeadingp">-->
<!--                                             <ol type="1" style="text-align: justify;">-->
<!--                                                <li>Each distributor, dealer and retailer can have a module covering feedback, complaints and surveys, using which they could raise their concerns to the OEMs. </li>-->
<!--                                                <li>Additionally, the OEMs could run several surveys within the distribution network to gather crucial intelligence-->
<!--</li>-->
                                               
<!--                                             </ol>-->
<!--                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose11" onclick="cl(11)">-->
<!--                                             <label for="accclose11" class="btn_click m-0" >-->
                                                <!-- <a href="">Click Here</a> -->
<!--                                                <p id="viewMore" class="acase1">View Less..</p>-->
<!--                                             </label>-->
<!--                                          </div>-->
<!--                                       </div>-->
                                       
<!--                                    </div>-->
<!--                                 </div>-->
                                 
<!--                              </div>-->
                              
<!--                           </div>-->
<!--                        </div>-->
                  </div>
                  <!--===============spacing==============-->
                  <div class="pd_top_70"></div>
                  <!--===============spacing==============-->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php  }
}?>

<section id="culture ">
   <div id="content" class="site-content lightbg">
      <div class="container-sm">
         <div class="row default_row">
            <div class="title_all_box style_three text-center dark_color">

               <div class="pd_bottom_60"></div>
               <div class="title_sections three row">
                  <h3 class="text-uppercase p-3 fs-1">MORE PRE-BUILT ASSETS</h3>
               </div>
               
               <div class="pd_bottom_20"></div>
             
            </div>
            <div class="full_width_box">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 row col-12">
<?php 
$quary_all = "SELECT * FROM `assets` WHERE `title` != '$name' AND `status` = 'Active'";
$query_run_all = mysqli_query($conn, $quary_all);

if ($query_run_all) {
   foreach ($query_run_all as $row_all) {
       $url2 = str_replace(' ', '+',$row_all['title']);
?>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                      <a href="products.php?nm=<?php echo $url2; ?>">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid <?php echo $row_all['color']; ?>; border-radius: 10px;">
                        <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <!--<img class="icon"src="assets/images/case/Cash_machine.svg" alt="Case Machine">-->
                           
                          
                              <p class="ass-text-size fsMobileDealer pt-1 text-center"><?php echo $row_all['title']; ?></p>
                           
                        </div>
                     </div>
                     </a>
                  </div>
                  <?php  }
}?>
               
                  <!--<?php if($name=="Dealer Management System [DMS]"){ ?>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12 ">-->
                  <!--     <a href="assetss?name=Sales+Force+Automation+[SFA]">-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #E26E8C; border-radius: 10px;">-->
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/Salesforce.svg" alt="Case Machine">-->
                           
                          
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Sales Force Automation</p>-->
                           
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<?php }else{ ?>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12 ">-->
                  <!--     <a href="assetss?name=Dealer+Management+System+[DMS]">-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #E26E8C; border-radius: 10px;">-->
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/Dealer.svg" alt="Case Machine">-->
                           
                          
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Dealer Management System</p>-->
                           
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<?php } ?>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">-->
                  <!--     <a >-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #29C1B2; border-radius: 10px;">-->
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/Document.svg" alt="Case Machine">-->
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Doc GenX</p>-->
                  <!--      </div> -->
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">-->
                  <!--     <a >-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #DD7A01; border-radius: 10px;">-->
                         
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/B2c.svg" alt="Case Machine">-->
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Commerce Cloud B2C</p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">-->
                  <!--     <a >-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #00A1E0; border-radius: 10px;">-->
                         
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/Loan.svg" alt="Case Machine">-->
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Loan Origination System</p>-->
                  <!--      </div>-->
                        
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  <!--<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">-->
                  <!--     <a>-->
                  <!--   <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #8C5EC6; border-radius: 10px;">-->
                  <!--       <div class="p-4 pb-4 d-flex align-center align-items-center">-->
                           
                  <!--            <img class="icon"src="assets/images/case/Org.svg" alt="Case Machine">-->
                  <!--            <p class="ass-text-size fsMobileDealer pt-1">Org Analysis</p>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--   </a>-->
                  <!--</div>-->
                  </div>
               </div>
           
               <div class="pd_top_70"></div>
              
            </div>
         </div>
      </div>
   </div>
</section>
<script>
function cl(i)
  {
       document.getElementById('acc' + i).checked=false;
      document.getElementById('oManage' + i).style.display = 'inline';
  }
function fun(i) {
   // Set all elements to display:inline
    for (a = 1; a <= <?php echo $veiw?>; a++) {
       
        document.getElementById('oManage' + a).style.display = 'inline';
     }
     document.getElementById('acc' + i).checked=true;
   // Hide the specific element
    document.getElementById('oManage' + i).style.display = 'none';
   
}
   
</script>

<script>
    // Get the current scroll position
    function getScrollPosition() {
      var scrollPosition = {
        y: window.pageYOffset || document.documentElement.scrollTop
      };
      console.log("Scroll position:", scrollPosition);
      return scrollPosition;
    }

    // Call the function whenever you want to get the scroll position
    getScrollPosition();

    // Additionally, you can listen to scroll events to update the position dynamically
    window.addEventListener('scroll', function() {
      getScrollPosition();
    });
  </script>
<!---tab---->
<div class="pd_top_50"></div>
<?php

require('components/trustedItServices.php');
require('components/lets_talk.php');
?>
<script>
      
        
        var z = window.matchMedia("(min-width:1000px) and (max-width: 1200px)");
        var x1234567 = window.matchMedia("(min-width:1200px) and (max-width: 1400px)");
        var y = window.matchMedia("(min-width: 1400px)");
    window.addEventListener('scroll', function() {
        const scrollingPoint = window.scrollY;
        const cultureElement = document.getElementById("culture");
        // alert(cultureElement.offsetHeight);
        const featuresElement = document.getElementById("Features_scroll1");
        const box = document.getElementById("yourdivid");
        if( y.matches) { // If media query matches
        // alert("yes");
         featuresElement.style.fontSize="110px !important";
            if (scrollingPoint >= 730 && scrollingPoint <= (cultureElement.offsetHeight+100)) {
            featuresElement.style.position = "fixed";
            featuresElement.style.top = "150px";
            box.style.marginLeft = "215px";
            featuresElement.style.bottom = "0px";
        } else if (scrollingPoint > (cultureElement.offsetHeight+100)) {
            featuresElement.style.position = "absolute";
            featuresElement.style.top = "";
            featuresElement.style.bottom = "0";
            box.style.marginLeft = "215px";
        } else {
            featuresElement.style.position = "";
            box.style.marginLeft = "0px";
        }
        } 
        if( x1234567.matches) { // If media query matches
        //   alert("yes");
            if (scrollingPoint >= 657 && scrollingPoint <= cultureElement.offsetHeight) {
            featuresElement.style.position = "fixed";
            featuresElement.style.top = "129px";
            box.style.marginLeft = "200px";
            featuresElement.style.bottom = "0px";
        } else if (scrollingPoint > cultureElement.offsetHeight) {
            featuresElement.style.position = "absolute";
            featuresElement.style.top = "";
            featuresElement.style.bottom = "0";
            box.style.marginLeft = "215px";
        } else {
            featuresElement.style.position = "";
            box.style.marginLeft = "0px";
        }
        }
    });

    
</script>
<?php require('include/footer.php'); ?>