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
                                            <li class="breadcrumb-item"><a href="<?=base_url('view_billing/'.$caseno."/".$customer_id);?>">Patient Billing</a></li>
                                            <li class="breadcrumb-item active">Dental Certificate</li>
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
                        $recommend="";
                        $days="";
                        if($item){
                            $recommend=$item['recommendation'];
                            $days=$item['no_days_rest'];
                        }
                        ?>
                        <!-- End Page Header -->
                        <div class="row flex-row">                            
                            <div class="col-xl-12">                               
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <a href="<?=base_url('print_certificate/'.$caseno."/".$customer_id);?>" class="btn btn-primary btn-sm" target="_blank"><i class="la la-print"></i> Print Certificate</a>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>Dental Certificate Details</h4>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" action="<?=base_url('save_certificate');?>" method="POST"> 
                                            <input type="hidden" name="caseno" value="<?=$caseno;?>">
                                            <input type="hidden" name="customer_id" value="<?=$customer_id;?>">                                            
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Recommendation/s</label>
                                                <div class="col-lg-6">
                                                    <textarea name="recommendation" class="form-control" rows="5"><?=$recommend;?></textarea>
                                                </div>
                                            </div>                                                                                                                       
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">No. of day/s need to rest</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="no_days_rest" class="form-control" value="<?=$days;?>">
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