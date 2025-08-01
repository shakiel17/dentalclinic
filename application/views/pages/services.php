 <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Services Offered</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="<?=base_url('main');?>"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Services</li>
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
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered d-flex align-items-center">
                                        <h2>Services List</h2>
                                        <div class="widget-options">
                                            <div class="btn-group" role="group">
                                                <a href="#" class="btn btn-primary ripple addService" data-toggle="modal" data-target="#ManageServices"><i class="la la-plus-circle"></i> Add Service</a>                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">No.</th>
                                                        <th>Code</th>
                                                        <th>Description</th>
                                                        <th>Amount</th>                                                        
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $x=1;
                                                    foreach($items as $item){
                                                        echo "<tr>";
                                                            echo "<td>$x.</td>";
                                                            echo "<td align='center'>$item[service_code]</td>";
                                                            echo "<td>$item[service_description]</td>";
                                                            echo "<td align='right'>".number_format($item['service_unitcost'],2)."</td>";
                                                            ?>
                                                            <td align="center"> 
                                                                <a href="#" class="btn btn-warning btn-sm editService" data-toggle="modal" data-target="#ManageServices" data-id="<?=$item['id'];?>_<?=$item['service_code'];?>_<?=$item['service_description'];?>_<?=$item['service_unitcost'];?>"><i class="la la-edit"></i> Edit</a>
                                                                <a href="<?=base_url('delete_services/'.$item['id']);?>" class="btn btn-danger btn-sm" onclick="return confirm('Do you wish to delete this item?'); return false;"><i class="la la-trash"></i> Delete</a>
                                                            </td>
                                                            <?php
                                                        echo "</tr>";
                                                        $x++;
                                                    }
                                                    ?>
                                                </tbody>                                               
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sorting -->                               
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <?php
                    if($this->session->success){
                        ?>
                    
                   <?php
                    }
                    ?>