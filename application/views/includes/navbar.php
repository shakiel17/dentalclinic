<?php
$logo=$this->Clinic_model->getSettings();
?>
<div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top">         
                    <!-- Begin Search Box-->
                    <div class="search-box">
                        <button class="dismiss"><i class="ion-close-round"></i></button>
                        <form id="searchForm" action="#" role="search">
                            <input type="search" placeholder="Search something ..." class="form-control">
                        </form>
                    </div>
                    <!-- End Search Box-->
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="<?=base_url('main');?>" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src='data:image/jpg;charset=utf8;base64,<?=base64_encode($logo['logo']);?>' alt="logo"  width="70"> Hermosilla Dental
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="<?=base_url('design/assets/img/logo.png');?>" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->                                                        
                        </div>                         
                        <!-- End Logo -->
                        <!-- Begin Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center pull-right">                                                       
                            <!-- User -->                            
                            <li class="nav-item dropdown"><a id="user" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><img src="<?=base_url('design/assets/img/cliniclogo.jpg');?>" alt="..." class="avatar rounded-circle"></a>
                                <ul aria-labelledby="user" class="user-size dropdown-menu">
                                    <li class="welcome">
                                        <!-- <a href="#" class="edit-profil"><i class="la la-gear"></i></a> -->
                                        <img src="<?=base_url('design/assets/img/cliniclogo.jpg');?>" alt="..." class="rounded-circle" width="50">
                                    </li>                                    
                                    <li>
                                        <a href="#" class="dropdown-item no-padding-bottom" data-toggle="modal" data-target="#ChangePassword"> 
                                            Change Password
                                        </a>
                                    </li>
                                    <li class="separator"></li>                                   
                                    <li><a rel="nofollow" href="#" class="dropdown-item logout text-center" data-toggle="modal" data-target="#Logout"><i class="ti-power-off"></i></a></li>
                                </ul>
                            </li>
                            <!-- End User -->
                            <!-- Begin Quick Actions -->
                            <!-- <li class="nav-item"><a href="#off-canvas" class="open-sidebar"><i class="la la-ellipsis-h"></i></a></li> -->
                            <!-- End Quick Actions -->
                        </ul>
                        <!-- End Navbar Menu -->
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->