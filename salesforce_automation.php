<?php include('include/header.php'); ?>
<style>
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
<section>
   <div class="abouthero position-relative">
      <div>
      <div class="txtDiv text-center">
         <div class="text">
            
            <h2 class="text-white mt50 fsLarge">
               Salesforce Automation [SFA]
            </h2>
            <p class="text-white mt50 fs-5 " style="font-weight: 300; text-align: center;" >
               The Sales Force Automation Solution is a comprehensive solution that covers all the crucial features needed by the Sales Team of any Manufacturing or Retail Sector company to better manage their network of Distributors, Dealer and Retailers. It consists of the following key features:

            </p>
         </div>
         <div class="mt50 disNone">
            <a href="#" class="blueBtn fs-5">Book Demo Call</a>
         </div>
         <div class="image text-center disNone pt-4">
            <img class="imglap" src="assets/images/case/laptop.png" />
         </div>
         <div class="image text-center disLapNone">
            <img class="imglap" src="assets/images/case/mobilebg.png" />
         </div>
         <div class="mt50 disLapNone">
            <a href="#" class="blueBtn fs-5">Book Demo Call</a>
         </div>
      </div>
      
      </div>
   </div>
</section>

<section id="culture">
   <div id="content" class="site-content">
      <div class="container-sm">
         <div class="pd_top_170"></div>
         <div class="row default_row">

            <div class="full_width_box">
               <div class="row">
                  <div class="col-lg-2 col-sm-2 mt-5 pt-3 feturesNone">
                     <h1 style="writing-mode: vertical-lr; transform: rotate(180deg); font-size: 135px;">
                        Features
                     </h1>
                  </div>
                  <div class="col-lg-10 col-sm-10 row  pr0 pl0 assScroll">
                     
                     <div class="feturesLapNone" >
                        <h1 class="text-center">Features</h1>
                     </div>
                     
                     <div class="col-lg-6 col-12 mt-4">
                           <div class="caseAssetsServiceBG Borderclr1" id="bgChange1 ">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                   <div id="oManage1">
                                   
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Order.svg" alt="Dealer Onboarding">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Dealer Onboarding</h4>
                                       <p class="pCase pt-2">Omin-channel lead sourcing can happen for Dealer Onboaridng such as a dealer can go on the website or other social media channels and initiate the onboarding process</p>
                                       </div>
                                    </div>
                                   </div>
                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc1" onclick="fun(1)">
                                    <label for="acc1" class="btn_click m-0" >
                                       <!-- <a href="">Click Here</a> -->
                                       <p id="viewMore" class="acase">View More</p>
                                    </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="assets/images/case/Order_Management.png" alt="Order Management" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet">
                                          <img width="60px" src="assets/images/case/Order.svg" alt="Dealer Onboarding" />
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;">Dealer Onboarding</h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                                <li>Omin-channel lead sourcing can happen for Dealer Onboaridng such as a dealer can go on the website or other social media channels and initiate the onboarding process</li>
                                                <li>Quick Onboarding of Dealer via eKYC and online processing of relevant documents
</li>
                                             </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose1" onclick="cl(1)">
                                             <label for="accclose1" class="btn_click m-0" >
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr2" >
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                   <div >
                                  
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Inventory.svg" alt="Realtime Inventory Check">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Realtime Inventory Check</h4>
                                       <p class="pCase pt-2">Realtime integration with ERPs such as SAP and Navision, a dealer could view real-time inventory status of various SKUs and can accordingly order the required quantities.</p>
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG" style="border:2px solid #B163C9; border-radius: 10px;">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div>
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Speedometer.svg" alt="Order Fulfilment Status">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Order Fulfilment Status</h4>
                                       <p class="pCase pt-2">With various integrations in place, a dealer can view in real-time the status of order fulfilment such as Orders places vs Goods Received vs Goods in Transit etc.</p>
                                       </div>
                                    </div>
                                 </div>
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
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                        
                         
                        <div class="col-lg-6 col-12 mt-4">
                           <div class="caseAssetsServiceBG Borderclr3" >
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div >
                                    
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Credit_Card.svg" alt="Credit & Debit Note output">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Credit & Debit Note output:</h4>
                                    <p class="pCase pt-2">The DMS has the capability of producing output of Invoices PDF form, thus allowing quick, easy and effective credit management between OEM and dealers</p>
                                       </div>
                                    </div>
                                 </div>
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
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr4" id="bgChange5">
                              <div class="d-flex row">
                                 <div class="col-lg-12 p0new features_tab">
                                 <div id="oManage5">
                                    
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Received.svg" alt="Order Fulfilment Status">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Credit Management & Visualization</h4>
                                    <p class="pCase pt-2">Dealer can now see the status of overdue payments and mange their credit lines better to suit business needs. With ERP integration.</p>
                                       </div>
                                    </div>
                                 </div>
                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc5" onclick="fun(5)">
                                    <label for="acc5" class="btn_click m-0" >
                                       <!-- <a href="">Click Here</a> -->
                                       <p id="viewMore" class="acase">View More</p>
                                    </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="assets/images/case/Order_Management.png" alt="Order Fulfilment Status" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet" >
                                          <img width="60px" src="assets/images/case/Received.svg">
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;">Credit Management & Visualization</h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                               
                                                <li>With ERP integration, realtime visualization of credit limit, credit exposure and ledger is possible</li>
                                                <li>Dealer can now see the status of overdue payments and mange their credit lines better to suit business needs</li>
                                             </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose5" onclick="cl(5)">
                                             <label for="accclose5" class="btn_click m-0" >
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr1" id="bgChange2">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div id="oManage2">
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="ERP Integration">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">ERP Integration</h4>
                                    <p class="pCase pt-2">The expert team at CRM Landing can help build and execute the right integration architecture </p>
                                       </div>
                                    </div>
                                 </div>
                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc2" onclick="fun(2)">
                                    <label for="acc2" class="btn_click m-0" >
                                       <!-- <a href="">Click Here</a> -->
                                       <p id="viewMore" class="acase">View More</p>
                                    </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet" >
                                          <img width="60px" src="assets/images/case/Erp.svg">
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;">ERP Integration</h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                                <li>The retailers, dealers and distributors can manage all aspects of their orders such as Placing an order against an SKU with Product image display.</li>
                                                <li>The orders may follow the sequence of a retailer placing order to a dealer, a dealer to a distributor and a distributor to an OEM</li>
                                                <li>Alternatively, the each of these entities can place order on behalf of the other. Eg. OEM can place an order on behalf of a distributor, a distributor on behalf of a dealer and a dealer on behalf of a retailer</li>
                                             </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose2" onclick="cl(2)">
                                             <label for="accclose2" class="btn_click m-0" >
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr2" id="bgChange3">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div id="oManage3">
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="ERP Integration">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Scheme Visibility & Performance</h4>
                                    <p class="pCase pt-2">Additionally, the performance against these schemes can be tracked and nudges can be created encouraging dealers. Eg. Sell 100 quantity more, and avail an extra discount of 1%</p>
                                       </div>
                                    </div>
                                 </div>
                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc3" onclick="fun(3)">
                                    <label for="acc3" class="btn_click m-0" >
                                       <!-- <a href="">Click Here</a> -->
                                       <p id="viewMore" class="acase">View More</p>
                                    </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet" >
                                          <img width="60px" src="assets/images/case/Erp.svg">
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;">Scheme Visibility & Performance
</h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                                <li>OEMs can now run customised dealer specific incentive schemes. </li>
                                                <li>Additionally, the performance against these schemes can be tracked and nudges can be created encouraging dealers. Eg. Sell 100 quantity more, and avail an extra discount of 1%</li>
                                                
                                             </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose3" onclick="cl(3)">
                                             <label for="accclose3" class="btn_click m-0" >
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr3">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div>
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="Dynamic Price List">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Dynamic Price List</h4>
                                    <p class="pCase pt-2">In certain business dynamics, price list can change frequently. In this DMS, the latest price can be pulled from the ERP realtime, thus reducing coordination.</p>
                                       </div>
                                    </div>
                                 </div>
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
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr4">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div>
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="Enquiry Management
">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Enquiry Management
</h4>
                                    <p class="pCase pt-2">On occasions, when dealers or retailer receive unique requirements from customers, they can raise such specific requirements via the enquiry management feature to the OEMs for consideration.</p>
                                       </div>
                                    </div>
                                 </div>
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
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr1" id="bgChange4">
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div id="oManage4">
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="Feedback, Complaints & Survey
">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Feedback, Complaints & Survey
</h4>
                                    <p class="pCase pt-2">Each distributor, dealer and retailer can have a module covering feedback, complaints and surveys, using which they could raise their concerns to the OEMs.</p>
                                       </div>
                                    </div>
                                 </div>
                                    <input style="appearance: none; display:none;"  type="radio" name="acc" id="acc4" onclick="fun(4)">
                                    <label for="acc4" class="btn_click m-0" >
                                        <!--<a href="">Click Here</a> -->
                                       <p id="viewMore" class="acase">View More</p>
                                    </label>
                                    <div class="features_content position-relative">
                                       <div class="">
                                          <img src="assets/images/case/Order_Management.png" alt="ERP Integration" />
                                       </div>
                                       <div class="position-absolute tabIconRightSet" >
                                          <img width="60px" src="assets/images/case/Erp.svg" alt="Feedback, Complaints & Survey">
                                       </div>
                                       <div>
                                          <div class="caseSubHeading">
                                             <h4 class="hCase" style="padding-left: 10px;">Feedback, Complaints & Survey</h4>
                                          </div>
                                          <div class="mt-2 caseSubHeadingp">
                                             <ol type="1" style="text-align: justify;">
                                                <li>Each distributor, dealer and retailer can have a module covering feedback, complaints and surveys, using which they could raise their concerns to the OEMs. </li>
                                                <li>Additionally, the OEMs could run several surveys within the distribution network to gather crucial intelligence
</li>
                                               
                                             </ol>
                                             <input style="appearance: none; display:none;"  type="radio" name="accclose" id="accclose4" onclick="cl(4)">
                                             <label for="accclose4" class="btn_click m-0" >
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
                        <div class="col-lg-6 col-12 mt-4 ">
                           <div class="caseAssetsServiceBG Borderclr2" >
                              <div class="d-flex row">
                              
                                 <div class="col-lg-12 p0new features_tab">
                                 <div>
                                    <div class=" row btn-click" style="padding: 20px 0px 0px 11px" >
                                       <div style=" padding-right: 18px;" class="mt-2 col-lg-2 col-2">
                                       <img width="80px" src="assets/images/case/Erp.svg" alt="Business Performance Dashboard
">
                                       </div>
                                       <div class="col-lg-10 col-10">
                                       <h4 class="hCase">Business Performance Dashboard
</h4>
                                    <p class="pCase pt-2">A dashboard helps each distributor, dealer and retailer helps visualise its business performance realtime such as Target vs Actuals, Outstanding payments, scheme performance, complaints etc.</p>
                                       </div>
                                    </div>
                                 </div>
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
                                 </div>
                                 
                              </div>
                              
                           </div>
                        </div>
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
<section id="culture ">
   <div id="content" class="site-content lightbg">
      <div class="container-sm">
         <div class="row default_row">
            <div class="title_all_box style_three text-center dark_color">

               <div class="pd_bottom_60"></div>
               <div class="title_sections three row">
                  <h3 class="text-uppercase p-3 fs-1">MORE PRE-BUILT ASSETS</h3>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="full_width_box">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 row col-12">
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #B163C9; border-radius: 10px;">
                        <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/Cash_machine.svg" alt="Case Machine">
                           
                          
                              <p class="text">Lead To Cash</p>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12 ">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #E26E8C; border-radius: 10px;">
                         <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/Salesforce.svg" alt="Case Machine">
                           
                          
                              <p class="text">Sales Force Automation</p>
                           
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #29C1B2; border-radius: 10px;">
                         <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/Document.svg" alt="Case Machine">
                              <p class="text">Doc GenX</p>
                        </div> 
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #DD7A01; border-radius: 10px;">
                         
                         <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/B2c.svg" alt="Case Machine">
                              <p class="text">Commerce Cloud B2C</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #00A1E0; border-radius: 10px;">
                         
                         <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/Loan.svg" alt="Case Machine">
                              <p class="text">Loan Origination System</p>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 mt-4 col-12">
                     <div class="caseAssetsServiceBG heightSetCase" style="border:2px solid #8C5EC6; border-radius: 10px;">
                         <div class="p-4 pb-4 d-flex align-center align-items-center">
                           
                              <img class="icon"src="assets/images/case/Org.svg" alt="Case Machine">
                              <p class="text">Org Analytics</p>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_top_70"></div>
               <!--===============spacing==============-->
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
    for (a = 1; a <= 2; a++) {
        alert(a);
        document.getElementById('oManage' + a).style.display = 'inline';
     }
     document.getElementById('acc' + i).checked=true;
   // Hide the specific element
    document.getElementById('oManage' + i).style.display = 'none';
    alert(i); 
}
   
</script>
<!---tab---->
<div class="pd_top_50"></div>
<?php

require('components/trustedItServices.php');
require('components/lets_talk.php');
?>
<?php require('include/footer.php'); ?>