<!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <li class="active"><a href="<?=base_url('main');?>"><i class="la la-columns"></i><span>Dashboard</span></a>                                
                            </li>
                            <li><a href="<?=base_url('manage_patient');?>"><i class="la la-user"></i><span>Patient List</span></a>                                
                            </li>
                            <!-- <li><a href="<?=base_url('active_patient');?>"><i class="la la-user-md"></i><span>Active Patient</span></a></li> -->
                            <li><a href="#dropdown-ui" aria-expanded="false" data-toggle="collapse"><i class="la la-gears"></i><span>Settings</span></a>
                                <ul id="dropdown-ui" class="collapse list-unstyled pt-0">
                                    <li><a href="<?=base_url('services');?>">Services</a></li>                                    
                                    <li><a href="<?=base_url('manage_doctor');?>">Doctor</a></li>
                                    <li><a href="<?=base_url('clinic_settings');?>">Clinic Info</a></li>
                                </ul>
                            </li>
                        </ul>                       
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->