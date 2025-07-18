                          <!-- End Left Sidebar -->
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title"><?=$title;?></h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="<?=base_url('main');?>"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Patient Profile</li>
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
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td><h4>List of Patient</h4></td>
                                                <td align="right"><a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#NewPatient"><i class="la la-plus"></i> New Patient</a></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Customer ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Address</th>
                                                        <th>Gender</th>                                                        
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $x=1;
                                                    foreach($items as $item){
                                                        echo "<tr>";
                                                            echo "<td>$x.</td>";
                                                            echo "<td>$item[customer_id]</td>";
                                                            echo "<td>$item[lastname], $item[firstname] $item[middlename]</td>";
                                                            echo "<td>$item[address]</td>";
                                                            echo "<td>$item[gender]</td>";
                                                            ?>
                                                            <td>
                                                                <a href="<?=base_url('view_profile/'.$item['customer_id']);?>" class="btn btn-success btn-sm"><i class="la la-eye"></i> View Profile</a>
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