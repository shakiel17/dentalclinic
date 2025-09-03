<!-- Begin Content -->
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title"><?=$title;?></h2>
                                    <div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?=base_url('main');?>"><i class="ti ti-home"></i></a></li>                                            
                                            <li class="breadcrumb-item active">Clinic Info</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($this->session->success){
                        ?>
                        <div class="alert alert-success" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->success;?></strong>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if($this->session->failed){
                        ?>
                        <div class="alert alert-danger" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->failed;?></strong>
                        </div>
                        <?php
                        }
                        ?>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        <div class="mt-5" align="center">
                                            <a href="#" data-toggle="modal" data-target="#ClinicLogo"><img src='data:image/jpg;charset=utf8;base64,<?=base64_encode($item['logo']);?>' alt="Company Logo" style="width: 120px;" class="avatar rounded-circle d-block mx-auto"></a>
                                        </div>
                                        <h3 class="text-center mt-3 mb-1"><?=$item['companyname'];?></h3>                                                                                
                                        
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">                               
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Update Profile</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>01. Clinic Informations</h4>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" action="<?=base_url('save_settings');?>" method="POST">                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Clinic Name</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="companyname" class="form-control" placeholder="David Green" value="<?=$item['companyname'];?>">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Contact No.</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="contactno" class="form-control" placeholder="dgreen@mail.com" value="<?=$item['contactno'];?>">
                                                </div>
                                            </div>                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Email</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="email" class="form-control" placeholder="dgreen@mail.com" value="<?=$item['email'];?>">
                                                </div>
                                            </div>   
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Clinic Hours</label>
                                                <div class="col-lg-6">
                                                    <textarea name="clinic_hours" class="form-control" rows="5"><?=$item['clinic_hours'];?></textarea>
                                                </div>
                                            </div>                                                                                  
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>02. Address Informations</h4>
                                            </div>
                                        </div> 
                                                                               
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Address</label>
                                                <div class="col-lg-6">
                                                    <textarea name="address" class="form-control" rows="3"><?=$item['address'];?></textarea>
                                                </div>
                                            </div>                                                                                    
                                        <div class="em-separator separator-dashed"></div>
                                        <div class="text-right">
                                            <button class="btn btn-gradient-01" type="submit">Save Changes</button>
                                            <button class="btn btn-shadow" type="reset">Cancel</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->                                                          