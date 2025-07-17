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
                                                        <th>Order ID</th>
                                                        <th>Customer Name</th>
                                                        <th>Country</th>
                                                        <th>Ship Date</th>
                                                        <th><span style="width:100px;">Status</span></th>
                                                        <th>Order Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
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