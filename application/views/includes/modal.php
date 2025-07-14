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
                    <div class="modal-body">
                        <div class="mt-1 mb-5 position-relative">
                        <div class="group material-input">
                            <input type="text" name="code" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Code</label>
                        </div>
                        </div>
                        <div class="mt-1 mb-5 position-relative">
                        <div class="group material-input">
                            <input type="text" name="description" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Description</label>
                        </div>
                        </div>  
                        <div class="mt-1 mb-5 position-relative">
                        <div class="group material-input">
                            <input type="text" name="amount" required>
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
                </div>
            </div>
        </div>