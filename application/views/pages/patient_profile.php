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
                                            <li class="breadcrumb-item"><a href="<?=base_url('manage_patient');?>">Patient List</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
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
                                        <div class="mt-5">
                                            <img src="<?=base_url('design/assets/img/avatar/avatar-01.jpg');?>" alt="..." style="width: 120px;" class="avatar rounded-circle d-block mx-auto">
                                        </div>
                                        <h3 class="text-center mt-3 mb-1"><?=$item['firstname'];?> <?=$item['lastname'];?></h3>
                                        <p class="text-center"><?=$item['occupation'];?></p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?=base_url('view_profile/'.$item['customer_id']);?>"><i class="la la-user la-2x align-middle pr-2"></i>Profile</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bolt la-2x align-middle pr-2"></i>Activity</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-comments la-2x align-middle pr-2"></i>Messages</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-bar-chart la-2x align-middle pr-2"></i>Statistics</a>
                                            </li> -->
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?=base_url('view_admission_history/'.$item['customer_id']);?>"><i class="la la-clipboard la-2x align-middle pr-2"></i>Admission History</a>
                                            </li>                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="<?=base_url('view_patient_account/'.$item['customer_id']);?>"><i class="la la-file la-2x align-middle pr-2"></i>Dental Records</a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-question-circle la-2x align-middle pr-2"></i>FAQ</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">
                                <?php
                                if($admission==""){
                                ?>
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Update Profile</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="col-10 ml-auto">
                                            <div class="section-title mt-3 mb-3">
                                                <h4>01. Personnal Informations</h4>
                                            </div>
                                        </div>
                                        <form class="form-horizontal" action="<?=base_url('update_patient');?>" method="POST">
                                            <input type="hidden" name="customer_id" value="<?=$item['customer_id'];?>">
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Last Name</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="lastname" class="form-control" placeholder="David Green" value="<?=$item['lastname'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">First Name</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="firstname" class="form-control" placeholder="David Green" value="<?=$item['firstname'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Middle Name</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="middlename" class="form-control" placeholder="David Green" value="<?=$item['middlename'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Contact No.</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="contactno" class="form-control" placeholder="dgreen@mail.com" value="<?=$item['contactno'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Birth Date</label>
                                                <div class="col-lg-6">
                                                    <input type="date" name="birthdate" class="form-control" placeholder="+00 987 654 32" value="<?=$item['birthdate'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Occupation</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="occupation" class="form-control" placeholder="dgreen@mail.com" value="<?=$item['occupation'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Civil Status</label>
                                                <div class="col-lg-6">
                                                    <select name="civilstatus" class="form-control">
                                                        <option value="<?=$item['civilstatus'];?>"><?=$item['civilstatus'];?></option>
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                        <option value="Widowed">Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">Gender</label>
                                                <div class="col-lg-6">
                                                    <select name="gender" class="form-control">
                                                        <option value="<?=$item['gender'];?>"><?=$item['gender'];?></option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Emergency Contact #:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="contactperson" class="form-control" placeholder="" value="<?=$item['contactperson'];?>">
                                                </div>
                                            </div>
                                            <div class="form-group row d-flex align-items-center mb-5">
                                                <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Relationship to Contact person:</label>
                                                <div class="col-lg-6">
                                                    <input type="text" name="contactpersonno" class="form-control" placeholder="" value="<?=$item['contactpersonno'];?>">
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
                                <?php
                                }else if($admission=="1"){
                                    ?>
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td><h4>Admission History</h4></td>
                                                <td align="right"><a href="#" class="btn btn-primary btn-sm newAdmission" data-toggle="modal" data-target="#NewAdmission" data-id="<?=$customer_id;?>"><i class="la la-plus"></i> New Admission</a></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="sorting-table">
                                                <thead>
                                                    <tr>
                                                        <th>Case No.</th>
                                                        <th>Services Rendered</th>
                                                        <th>Admit Date</th>
                                                        <th>Status</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($admitdetails as $item){
                                                        $services=$this->Clinic_model->getAllServicesRendered($item['caseno']);
                                                        $rendered="";
                                                        foreach($services as $serv){
                                                            $rendered .=$serv['service_description']."<br>";
                                                        }
                                                        // if($item['status']=="Active"){
                                                        //     $billing="";
                                                        // }else{
                                                        //     $billing="style='display:none;'";
                                                        // }
                                                        echo "<tr>";
                                                            echo "<td><a href='".base_url('view_billing/'.$item['caseno'])."'>$item[caseno]</a></td>";
                                                            echo "<td>".$rendered."</td>";
                                                            echo "<td>".date('M-d-Y',strtotime($item['dateadmit']))." ".date('h:i A',strtotime($item['timeadmit']))."</td>";
                                                            echo "<td>$item[status]</td>";
                                                            ?>
                                                            <!-- <td><a href="<?=base_url('view_billing/'.$item['caseno'].'/'.$customer_id);?>" class="btn btn-success btn-sm"><i class="la la-calendar"></i> Billing</a></td> -->
                                                            <?php
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }else{
                                    ?>
                                    <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td><h4>Dental Records</h4></td>
                                                <td align="right"><a href="<?=base_url('print_dental_records/'.$item['customer_id']);?>" class="btn btn-primary btn-sm" target="_blank"><i class="la la-print"></i> Print Records</a></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table width="100%" border="1" style="border-collapse: collapse; font-size:12px; text-align:center;" cellspacing="0"> 
                                                <tr>
                                                    <td><b>DATE</b></td>                                                    
                                                    <td><b>TREATMENT/PROCEDURE</b></td>
                                                    <td><b>AMOUNT</b></td>
                                                    <td><b>PAYMENT</b></td>
                                                    <td><b>BALANCE</b></td>
                                                    <td><b>ACTION</b></td>
                                                </tr>                                                
                                                <?php
                                                $x=1;
                                                foreach($paymentdetails as $row){                                                     
                                                    $gross=$row['amount'];                                                     
                                                    $query=$this->Clinic_model->checkrefno($row['referenceno']);
                                                    $description=$row['service_description'];
                                                    
                                                    echo "<tr>";
                                                        echo "<td>".date('m/d/Y',strtotime($row['datearray']))."</td>";                                                        
                                                        echo "<td align='left'>$description</td>";
                                                        echo "<td>".number_format($gross,2)."</td>";
                                                        $balance=$gross-$row['amount_paid'];                                                                                                            
                                                        echo "<td align='right'>".number_format($row['amount_paid'],2)."</td>";
                                                        echo "<td align='right'>".number_format($balance,2)."</td>";
                                                        ?>
                                                        <td>
                                                            <?php
                                                            if($row['is_credit']=="1"){
                                                                echo "<a href='#' class='btn btn-success btn-sm text-white payBalance' data-toggle='modal' data-target='#PayBalance' data-id='$row[refno]_$item[customer_id]_$balance'><i class='la la-money'></i> Pay Balance</a>";
                                                            }
                                                            ?>
                                                        </td>
                                                        <?php
                                                    echo "</tr>";
                                                    $x++;
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->                                                          