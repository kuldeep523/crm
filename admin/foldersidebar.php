Case_Studies/add_<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu" style="background-color: black">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
            <img src="../uploads/logo.png" alt="" height="22">
                
            </span>
            <span class="logo-lg">
            <img src="../uploads/logo.png" alt="" height="17">
                
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.php" class="logo logo-light mt-3">
<!--            <h1 style="color: white;">Azallya</h1>-->
            <img src="../uploads/logo.png" alt="" height="40px">
			
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title text-white"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="../index.php">
                        <i class="ri-dashboard-2-line"></i><span data-key="t-widgets">Dashboards</span>
                    </a>
                </li>
               <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Category</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="../master_category.php" class="nav-link" data-key="t-basic"> Master Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../sub_category.php" class="nav-link" data-key="t-basic"> Sub Category
                                </a>
                            </li>
                         
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Enquiry</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../enquiry_list.php" class="nav-link" data-key="t-alerts">enquiry List</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarHome" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-honour-line"></i> <span data-key="t-base-ui">Home</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarHome">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../home/about_us.php" class="nav-link" data-key="t-alerts">Add About Us Detail</a>
                </li>
                 <li class="nav-item">
                                        <a href="../home/icons.php" class="nav-link" data-key="t-alerts">Add header icon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../home/service.php" class="nav-link" data-key="t-alerts">Add Service Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../home/key.php" class="nav-link" data-key="t-alerts">Add Key Clienteles Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../home/testimonial.php" class="nav-link" data-key="t-alerts">Add Testimonial Detail</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarAssets" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-stack-line"></i> <span data-key="t-base-ui">Assets</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarAssets">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="../webassets/assets.php" class="nav-link" data-key="t-alerts">Add Assets Detail</a>
                                    </li>
                                   
                                </ul>
                            </div>

                        </div>

                    </div>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="../contact_us/contact_us.php">
                        <i class="ri-dashboard-2-line"></i><span data-key="t-widgets">Contact Us</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link menu-link" href="../career/career.php">
                        <i class="ri-dashboard-2-line"></i><span data-key="t-widgets">Add Career</span>
                    </a>
                </li>
   <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarabout" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-honour-line"></i> <span data-key="t-base-ui">About Us</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarabout">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                      <li class="nav-item">
                                        <a href="../about_us/about_us.php" class="nav-link" data-key="t-alerts">About Us Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../about_us/icons.php" class="nav-link" data-key="t-alerts">Add Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../about_us/our_values.php" class="nav-link" data-key="t-alerts">Add OUR VALUES</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../about_us/our_culture.php" class="nav-link" data-key="t-alerts">Add OUR CULTURE</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../about_us/apart.php" class="nav-link" data-key="t-alerts">Add Sets Us Apart</a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </li>
               <li class="nav-item">
                    <a class="nav-link menu-link" href="../logout.php">
                        <i class="ri-logout-box-r-line"></i><span data-key="t-widgets">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->