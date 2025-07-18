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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-shadow" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>