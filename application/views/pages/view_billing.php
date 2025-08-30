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
                                            <li class="breadcrumb-item active">Patient Billing</li>
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

                        if($item['status']=="discharged"){
                            $dc="style='display:none;'";
                        }else{
                            $dc="";
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
                                        <p class="text-center"><?=$item['caseno'];?></p>
                                        <p class="text-center"><a href="<?=base_url('discharge_patient/'.$item['caseno']);?>" class="btn btn-info" onclick="return confirm('Do you wish to discharge this patient?'); return false;" <?=$dc;?>><i class="la la-sign-out"></i> Discharge</a></p>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);"><i class="la la-user la-2x align-middle pr-2"></i><?=$item['gender'];?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-life-ring la-2x align-middle pr-2"></i><?=$item['civilstatus'];?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-map-marker la-2x align-middle pr-2"></i><?=$item['address'];?></a>
                                            </li>                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);"><i class="la la-calendar la-2x align-middle pr-2"></i><?=date('M-d-Y',strtotime($item['birthdate']));?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-phone la-2x align-middle pr-2"></i><?=$item['contactno'];?></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><i class="la la-briefcase la-2x align-middle pr-2"></i><?=$item['occupation'];?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">                               
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="20%"><h4>Services Rendered</h4></td>
                                                <td align="right"><a href="<?=base_url('admit_chart/'.$item['caseno']."/".$item['customer_id']);?>" class="btn btn-success btn-sm"><i class="la la-pie-chart"></i> Tooth Chart</a> <a href="#" class="btn btn-primary btn-sm addCharges" data-toggle="modal" data-target="#AddCharges" data-id="<?=$item['caseno'];?>" <?=$dc;?>><i class="la la-shopping-cart"></i> Charge Cart</a></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="sorting-table">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>Unit Cost</th>
                                                        <th>Discount</th>
                                                        <th>Gross</th>
                                                        <th>Action</th>
                                                        <!-- <th>Action</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php                  
                                                    $totalamount=0;                                  
                                                    foreach($services as $row){
                                                        if($row['status']=="pending"){
                                                            $delete="";
                                                            $gross=$row['gross'];
                                                        }else{
                                                            $delete="style='display:none;'";
                                                            $gross=0;
                                                        }
                                                        echo "<tr>";
                                                            echo "<td>$row[service_description]</td>";
                                                            echo "<td align='right'><a href='#' class='editUnitcost' data-toggle='modal' data-target='#EditUnitCost' data-id='$row[refno]_$row[unitcost]_$item[caseno]'>".number_format($row['unitcost'],2)."</a></td>";
                                                            echo "<td align='right'><a href='#' class='addDiscount' data-toggle='modal' data-target='#AddDiscount' data-id='$row[refno]_$row[discount]_$item[caseno]'>".number_format($row['discount'],2)."</a></td>";
                                                            echo "<td align='right'>".number_format($gross,2)."</td>";
                                                            ?>
                                                            <td align="center" width="25%">
                                                                <a href="<?=base_url('delete_charges/'.$row['refno']."/".$item['caseno']);?>" class="btn btn-danger btn-sm text-white" onclick="return confirm('Do you wish to delete this item?'); return false;" <?=$delete;?>><i class="la la-trash"></i> Delete</a>
                                                                <a href="#" class="btn btn-warning btn-sm payPartial" data-toggle="modal" data-target="#PayPartial" data-id="<?=$row['refno'];?>_<?=$item['caseno'];?>" <?=$delete;?>><i class="la la-money"></i> Pay Partial</a>
                                                            </td>
                                                            <?php
                                                        echo "</tr>";
                                                        $totalamount += $gross;
                                                    }
                                                    ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="3" align="right"><b>Total</b></td>
                                                        <td align="right"><?=number_format($totalamount,2);?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td><h4>Payment History</h4></td>
                                                <td align="right"><a href="#" class="btn btn-primary btn-sm addPayment" data-toggle="modal" data-target="#AddPayment" data-id="<?=$item['caseno'];?>_<?=$totalamount;?>" <?=$dc;?>><i class="la la-money"></i> Payment</a></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="sorting-table">
                                                <thead>
                                                    <tr>
                                                        <th>Description</th>
                                                        <th>OR #</th>
                                                        <th>Amount</th>
                                                        <th>Payment Type</th>
                                                        <th>Date | Time</th>
                                                        <th>Proof</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php                                                    
                                                    foreach($payment as $row){
                                                        if($row['type']=="card"){
                                                            $proof="";
                                                        }else{
                                                            $proof="style='display:none;'";
                                                        }
                                                        echo "<tr>";
                                                            echo "<td>$row[service_description]</td>";
                                                            echo "<td align='center'>".$row['orno']."</td>";
                                                            echo "<td align='right'>".number_format($row['amount'],2)."</td>";
                                                            echo "<td align='center'>".$row['type']."</td>";
                                                            echo "<td align='right'>".date('m/d/Y',strtotime($row['datearray']))." | ".date('h:i A',strtotime($row['timearray']))."</td>";
                                                            ?>
                                                            <td><a href="<?=base_url('view_proof/'.$row['refno']);?>" class="btn btn-info btn-sm" target="_blank" <?=$proof;?>><i class="la la-eye"></i> View</a></td>
                                                            <?php
                                                        echo "</tr>";
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->                                                          