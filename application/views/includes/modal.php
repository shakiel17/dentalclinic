        <div id="Logout" class="modal modal-top fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Leaving so soon?</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>
                            Do you wish to logout?    
                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-shadow" data-dismiss="modal">No, I will stay</button>
                        <a href="<?=base_url('logout');?>"  class="btn btn-danger">Yes, I will go.</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="ManageServices" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Manage Services</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_services');?>" method="POST">
                        <input type="hidden" name="id" id="service_id">
                        <div class="modal-body">
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="code" required id="service_code">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Code</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="description" required id="service_description">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Description</label>
                            </div>
                            </div>  
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="amount" required id="service_amount">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Amount</label>
                            </div>
                            </div>                      
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="success" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-2">
                            <h2 class="text-gradient-02">Success!</h2>
                        </div>
                        <p class="mb-5"><?=$this->session->success;?></p>
                        <button type="button" class="btn btn-shadow mb-3" data-dismiss="modal">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="NewPatient" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Register New Patient</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_patient');?>" method="POST">
                        <div class="modal-body">
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="lastname" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Last Name</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="firstname" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>First Name</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="middlename" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Middle Name</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="address">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Address</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="contactno">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Contact No.</label>
                            </div>
                            </div> 
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="date" name="birthdate">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Birth Date</label>
                            </div>
                            </div> 
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="occupation">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Occupation</label>
                            </div>
                            </div> 
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <select name="civilstatus" class="form-control" required>
                                    <option value="">Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                            </div> 
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <select name="gender" class="form-control" required>
                                    <option value="">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="contactperson">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Emergency Contact No.</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="contactpersonno">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Relationship to Contact Person</label>
                            </div>
                            </div>               
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="NewAdmission" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">New Admission</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_admission');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="customer_id" id="admit_customer_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Select Services</label>                                    
                                <div class="ml-5">
                                        <?php
                                        $services=$this->Clinic_model->getAllServices();
                                        foreach($services as $item){
                                            echo "<input type='checkbox' name='services[]' value='$item[service_id]'> $item[service_description] <br>";
                                        }
                                        ?>        
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="AddCharges" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Charges</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('add_charges');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="caseno" id="charge_caseno">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Select Services</label>                                    
                                <div class="ml-5">
                                        <?php
                                        $services=$this->Clinic_model->getAllServices();
                                        foreach($services as $item){
                                            echo "<input type='checkbox' name='services[]' value='$item[service_id]'> $item[service_description] <br>";
                                        }
                                        ?>        
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="AddDiscount" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Discount</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('add_discount');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="caseno" id="disc_caseno">
                        <input type="hidden" name="refno" id="disc_refno">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Discount</label>                                    
                                <div class="ml-5">
                                        <input type="text" name="amount" class="form-control" id="disc_amount">      
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="EditUnitCost" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Discount</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('edit_unitcost');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="caseno" id="cost_caseno">
                        <input type="hidden" name="refno" id="cost_refno">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Discount</label>                                    
                                <div class="ml-5">
                                        <input type="text" name="amount" class="form-control" id="cost_amount">      
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="AddPayment" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payment Window</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_payment');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <input type="hidden" name="caseno" id="payment_caseno">                        
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Total Amount</label>                                    
                                <div class="ml-5">
                                    <input type="text" name="totalamount" class="form-control" id="totalamount" readonly>
                                </div>                                                            
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">Payment Type</label>                                    
                                <div class="ml-5">
                                    <select name="type" class="form-control" required id="paymenttype">
                                        <option value="cash">Cash</option>
                                        <option value="card">Bank/GCash</option>
                                    </select>
                                </div>                                                            
                            </div>                            
                            <div id="cardpayment" style="display:none">
                                <div class="form-group">
                                    <div class="ml-5">
                                        <label>Transaction No.</label>
                                        <input type="text" name="transno" class="form-control">
                                    </div>
                                    <div class="ml-5">
                                        <label>Proof of Payment</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">Amount</label>                                    
                                <div class="ml-5">
                                    <input type="text" name="amount" class="form-control" id="paymentamount" required>
                                </div>                                                            
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">Change</label>
                                <div class="ml-5">
                                    <input type="text" name="change" class="form-control" id="change" readonly>
                                </div>                                                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="PayPartial" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Partial Payment</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_partial_payment');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="caseno" id="pay_caseno">
                        <input type="hidden" name="refno" id="pay_refno">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Amount</label>                                    
                                <div class="ml-5">
                                        <input type="text" name="amount" class="form-control">      
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="PayBalance" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Balance Payment</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_balance_payment');?>" method="POST" class="form-horizontal">                        
                        <input type="hidden" name="refno" id="balance_refno">
                        <input type="hidden" name="balance" id="balance_amount">
                        <input type="hidden" name="customer_id" id="balance_caseno">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Remarks</label>
                                <select name="description" class="form-control" required>
                                    <option value="">Select Services</option>
                                    <?php
                                    $services=$this->Clinic_model->getAllServices();
                                    foreach($services as $item){
                                        echo "<option value='$item[service_id]'>$item[service_description]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="ChangePassword" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Change Password</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('change_password');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="username" value="<?=$this->session->username;?>">                        
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Current Password</label>                                    
                                <div class="ml-5">
                                        <input type="password" name="oldpass" class="form-control">      
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">New Password</label>                                    
                                <div class="ml-5">
                                        <input type="password" name="newpass" class="form-control">      
                                </div>                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>