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
                                <label class="col-lg-12">Select Doctor</label>                                    
                                <div class="ml-5">
                                        <?php
                                        $services=$this->Clinic_model->getAllDoctor();
                                        foreach($services as $item){
                                            echo "<input type='radio' name='ap' value='$item[id]' required> $item[name] <br>";
                                        }
                                        ?>        
                                </div>                            
                            </div>
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

        <div id="ToothChart" class="modal fade">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tooth Condition</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>                    
                    <form action="<?=base_url('save_tooth_chart');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="id" id="dent_id">                        
                        <input type="hidden" name="tooth_id" id="tooth_id">
                        <input type="hidden" name="caseno" id="dent_caseno">                        
                        <input type="hidden" name="customer_id" id="dent_customer_id">
                        <div class="modal-body">
                            <table width="100%" border="0">
                                <tr>
                                    
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-1" value="OK" onclick="condition(this.value);">
                                            <label for="rad-1">OK</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-2" value="D" onclick="condition(this.value);">
                                            <label for="rad-2">D</label>
                                        </div>
                                    </td>                                    
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-3" value="M" onclick="condition(this.value);">
                                            <label for="rad-3">M</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-4" value="Mo" onclick="condition(this.value);">
                                            <label for="rad-4">MO</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-5" value="Im" onclick="condition(this.value);">
                                            <label for="rad-5">Im</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-6" value="Rf" onclick="condition(this.value);">
                                            <label for="rad-6">RF</label>
                                        </div>
                                    </td>  
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-7" value="Sp" onclick="condition(this.value);">
                                            <label for="rad-7">Sp</label>
                                        </div>
                                    </td>                                                                                                                                              
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-8" value="Un" onclick="condition(this.value);">
                                            <label for="rad-8">Un</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-radio">
                                            <input type="radio" name="remarks" id="rad-2" value="Ex" onclick="condition(this.value);">
                                            <label for="rad-9">Ex</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <br>
                            <table width="100%" border="0">
                                <tr>
                                    <td width="20%">Caries</td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="caries_occ" id="check-1" value="1" onclick="mylocation('center','red');">
                                            <label for="check-1">Occlusal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="caries_mes" id="check-2" value="1" onclick="mylocation('q1','red');">
                                            <label for="check-2">Mesial</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="caries_dis" id="check-3" value="1" onclick="mylocation('q2','red');">
                                            <label for="check-3">Distal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="caries_buc" id="check-4" value="1" onclick="mylocation('q3','red');">
                                            <label for="check-4">Buccal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="caries_ling" id="check-5" value="1" onclick="mylocation('q4','red');">
                                            <label for="check-5">Lingual</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Composite</td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="comp_occ" id="check-6" value="1" onclick="mylocation('center','#3a018a');">
                                            <label for="check-6">Occlusal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="comp_mes" id="check-7" value="1" onclick="mylocation('q1','#3a018a');">
                                            <label for="check-7">Mesial</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="comp_dis" id="check-8" value="1" onclick="mylocation('q2','#3a018a');">
                                            <label for="check-8">Distal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="comp_buc" id="check-9" value="1" onclick="mylocation('q3','#3a018a');">
                                            <label for="check-9">Buccal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="comp_ling" id="check-10" value="1" onclick="mylocation('q4','#3a018a');">
                                            <label for="check-10">Lingual</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Amalgam</td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="amal_occ" id="check-11" value="1" onclick="mylocation('center','#908d94');">
                                            <label for="check-11">Occlusal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="amal_mes" id="check-12" value="1" onclick="mylocation('q1','#908d94');">
                                            <label for="check-12">Mesial</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="amal_dis" id="check-13" value="1" onclick="mylocation('q2','#908d94');">
                                            <label for="check-13">Distal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="amal_buc" id="check-14" value="1" onclick="mylocation('q3','#908d94');">
                                            <label for="check-14">Buccal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="amal_ling" id="check-15" value="1" onclick="mylocation('q4','#908d94');">
                                            <label for="check-15">Lingual</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">Recurrent Caries</td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="recur_occ" id="check-16" value="1" onclick="mylocation('center','url(#pattern-stripe)');">
                                            <label for="check-16">Occlusal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="recur_mes" id="check-17" value="1" onclick="mylocation('q1','url(#pattern-stripe)');">
                                            <label for="check-17">Mesial</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="recur_dis" id="check-18" value="1" onclick="mylocation('q2','url(#pattern-stripe)');">
                                            <label for="check-18">Distal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="recur_buc" id="check-19" value="1" onclick="mylocation('q3','url(#pattern-stripe)');">
                                            <label for="check-19">Buccal</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="styled-checkbox">
                                            <input type="checkbox" name="recur_ling" id="check-20" value="1" onclick="mylocation('q4','url(#pattern-stripe)');">
                                            <label for="check-20">Lingual</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Treatment</td>
                                    <td colspan="3">
                                        <select name="remarks1" class="form-control" id="remarks1" onchange="treatment(this.value);">
                                            <option value="">None</option>
                                            <option value="Am">Amalgam Filling</option>
                                            <option value="Co">Composite Filling</option>
                                            <option value="JC">Jacket Crown</option>
                                            <option value="Ab">Abutment</option>
                                            <option value="Att">Attachment</option>
                                            <option value="P">Pontic</option>
                                            <option value="In">Inlay</option>
                                            <option value="Imp">Implant</option>
                                            <option value="S">Sealants</option>
                                            <option value="RD">Removable Denture</option>
                                            <option value="X">Extraction due to Caries</option>                                            
                                            <option value="Xo">Extraction due to Other Causes</option>
                                        </select>
                                    </td>
                                    <td colspan="2" rowspan="3" valign="middle" align="center">
                                        <span id="treatment"></span><br>
                                        <span id="condition"></span><br>
                                        <svg viewBox="0 0 400 400" style="width:50px; height: 50px; fill:white;">   
                                            <pattern id="pattern-stripe" 
                                                width="4" height="4" 
                                                patternUnits="userSpaceOnUse"
                                                patternTransform="rotate(90)">
                                                <rect width="1" height="4" transform="translate(0,0)" fill="red"></rect>
                                            </pattern>                                                                 
                                            <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z"  id="p1"/>
                                            <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z"  id="p2"/>
                                            <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z"  id="p3"/>
                                            <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z"  id="p4"/>
                                            <!-- Clickable hole in the center -->
                                            <circle class="center" cx="200" cy="200" r="60"  id="p_center"/>
                                        </svg><br>
                                        <span id="condition1"></span><br>
                                        <span id="treatment1"></span>
                                        
                                    </td>
                                </tr>                                
                            </table>
                        </div>                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <?php
                            if($status=="Active"){
                                ?>
                            <button type="submit" class="btn btn-primary">Submit</button>        
                            <?php
                            }
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="ManageDoctor" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Manage Doctor</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_doctor');?>" method="POST">
                        <input type="hidden" name="id" id="doc_id">
                        <div class="modal-body">
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="docname" required id="doc_name">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>
                            </div>                             
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="amount" required id="doc_amount">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>PF Amount</label>
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

        <div id="ManageRx" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Manage Rx</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_rx');?>" method="POST">
                        <input type="hidden" name="id" id="rx_id">
                        <input type="hidden" name="caseno" id="rx_caseno">
                        <input type="hidden" name="customer_id" id="rx_customer_id">
                        <div class="modal-body">
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="description" required id="rx_description">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Description</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="quantity" required id="rx_quantity">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Quantity</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="route" required id="rx_route">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Route</label>
                            </div>
                            </div>
                            <div class="mt-1 mb-5 position-relative">
                            <div class="group material-input">
                                <input type="text" name="frequency" required id="rx_frequency">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Frequency</label>
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

        <div id="ClinicLogo" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Manage Clinic Logo</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('save_clinic_logo');?>" method="POST" class="form-horizontal" enctype="multipart/form-data">                        
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Image</label>
                                <div class="ml-5">
                                        <input type="file" name="file" class="form-control">      
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

        <div id="EditAdmissionDate" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Admission Date</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('update_admission_date');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="caseno" id="edit_admit_caseno">
                        <input type="hidden" name="customer_id" id="edit_admit_customer_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Date Admit</label>                                    
                                <div class="ml-5">
                                        <input type="date" name="dateadmit" class="form-control" id="edit_admit_date">      
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12">Time Admit</label>                                    
                                <div class="ml-5">
                                        <input type="time" name="timeadmit" class="form-control" id="edit_admit_time">      
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
        <div id="EditPaymentDate" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Payment Date</h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <form action="<?=base_url('update_payment_date');?>" method="POST" class="form-horizontal">
                        <input type="hidden" name="id" id="edit_payment_id">
                        <input type="hidden" name="customer_id" id="edit_payment_customer_id">
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="col-lg-12">Payment Date</label>                                    
                                <div class="ml-5">
                                        <input type="date" name="datearray" class="form-control" id="edit_payment_date">      
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