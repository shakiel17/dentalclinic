<!-- Begin Page Footer-->
                    <footer class="main-footer fixed">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                                <p class="text-gradient-02">Designed & Developed By Eczekiel Aboy</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                                <!-- <ul class="nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="documentation.html">Documentation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="changelog.html">Changelog</a>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </footer>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>                   
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Begin Vendor Js -->
        <script src="<?=base_url('design/assets/vendors/js/base/jquery.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/base/core.min.js');?>"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="<?=base_url('design/assets/vendors/js/nicescroll/nicescroll.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/chart/chart.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/progress/circle-progress.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/calendar/moment.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/calendar/fullcalendar.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/app/app.js');?>"></script>
         <script src="<?=base_url('design/assets/vendors/js/datatables/datatables.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/dataTables.buttons.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/jszip.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/buttons.html5.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/pdfmake.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/vfs_fonts.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/datatables/buttons.print.min.js');?>"></script>
        <script src="<?=base_url('design/assets/vendors/js/app/app.min.js');?>"></script>
        <script src="<?=base_url('design/assets/js/components/notifications/notifications.min.js');?>"></script>
         <script src="<?=base_url('design/assets/vendors/js/noty/noty.min.js');?>"></script>
         <script src="<?=base_url('design/assets/vendors/js/bootstrap-select/bootstrap-select.min.js');?>"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="<?=base_url('design/assets/js/dashboard/db-default.js');?>"></script>
        <script src="<?=base_url('design/assets/js/components/tables/tables.js');?>"></script>
        <!-- End Page Snippets -->
         <script type="text/javascript">
          $('.addService').click(function(){            
            document.getElementById('service_id').value='';
            document.getElementById('service_code').value='';
            document.getElementById('service_description').value='';
            document.getElementById('service_amount').value='';
          });
          $('.editService').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('service_id').value=id[0];
            document.getElementById('service_code').value=id[1];
            document.getElementById('service_description').value=id[2];
            document.getElementById('service_amount').value=id[3];
          });       
          $('.addDoctor').click(function(){            
            document.getElementById('doc_id').value='';
            document.getElementById('doc_name').value='';
            document.getElementById('doc_amount').value='';
          });
          $('.editDoctor').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('doc_id').value=id[0];
            document.getElementById('doc_name').value=id[1];
            document.getElementById('doc_amount').value=id[2];
          });   
          </script>        
            <script>
                $('.newAdmission').click(function(){
                    var id=$(this).data('id');
                    document.getElementById('admit_customer_id').value=id;
                });                
                    $('.addCharges').click(function(){
                        var id=$(this).data('id');
                        document.getElementById('charge_caseno').value=id;
                    });
                    $('.addDiscount').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('disc_caseno').value=id[2];
                        document.getElementById('disc_amount').value=id[1];
                        document.getElementById('disc_refno').value=id[0];
                    });
                    $('.editUnitcost').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('cost_caseno').value=id[2];
                        document.getElementById('cost_amount').value=id[1];
                        document.getElementById('cost_refno').value=id[0];
                    });
                    $('.addPayment').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('payment_caseno').value=id[0];
                        document.getElementById('totalamount').value=id[1];
                    });
                    $('#paymenttype').change(function(){
                        var amount=$(this).val();
                        if(amount=="card"){
                            document.getElementById("cardpayment").style.display = 'block';
                        }else{
                            document.getElementById("cardpayment").style.display = 'none';
                        }
                    });
                    $('#paymentamount').change(function(){
                        var amount=$(this).val();
                        var payable=document.getElementById('totalamount').value

                        if(amount >= payable){
                            document.getElementById('change').value = amount - payable;
                        }else{
                            document.getElementById('paymentamount').value = '';
                            alert('Payment amount should be greater than the payable amount!');
                        }
                    });

                    $('.payPartial').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('pay_refno').value=id[0];
                        document.getElementById('pay_caseno').value=id[1];
                    });
                     $('.payBalance').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('balance_refno').value=id[0];
                        document.getElementById('balance_amount').value=id[2];
                        document.getElementById('balance_caseno').value=id[1];
                    });

                    $('.toothchart').click(function(){
                        var data=$(this).data('id');
                        var id=data.split('_');
                        document.getElementById('dent_id').value = id[0];
                        document.getElementById('tooth_id').value = id[1];
                        document.getElementById('dent_caseno').value = id[2];
                        document.getElementById('dent_customer_id').value = id[3];
                       $.ajax({
                            url: '<?=base_url('index.php/pages/fetch_tooth_chart');?>',
                            type: 'POST',
                            data: {id:id[0]},
                            dataType: 'json',
                            success: function(response) {
                                if (response.length > 0) {
                                    var rem=response[0]['remarks'];
                                    var treat=response[0]['treatment'];
                                    var surg=response[0]['surgery'];
                                    if(rem=="OK"){
                                        document.getElementById('rad-1').checked = true;
                                    }else if(rem=="D"){
                                        document.getElementById('rad-2').checked = true;
                                    }else if(rem=="M"){
                                        document.getElementById('rad-3').checked = true;
                                    }else if(rem=="Mo"){
                                        document.getElementById('rad-4').checked = true;
                                    }else if(rem=="Im"){
                                        document.getElementById('rad-5').checked = true;
                                    }else if(rem=="Rf"){
                                        document.getElementById('rad-6').checked = true;
                                    }else if(rem=="Sp"){
                                        document.getElementById('rad-7').checked = true;
                                    }else if(rem=="Un"){
                                        document.getElementById('rad-8').checked = true;                                    
                                    }else{
                                        document.getElementById('rad-1').checked = false;
                                        document.getElementById('rad-2').checked = false;
                                        document.getElementById('rad-3').checked = false;
                                        document.getElementById('rad-4').checked = false;
                                        document.getElementById('rad-5').checked = false;
                                        document.getElementById('rad-6').checked = false;
                                        document.getElementById('rad-7').checked = false;
                                        document.getElementById('rad-8').checked = false;
                                    }                                                                        

                                    if(response[0]['caries_occ']=="1"){
                                        document.getElementById('check-1').checked = true;
                                    }else{
                                        document.getElementById('check-1').checked = false;
                                    }
                                    if(response[0]['caries_mes']=="1"){
                                        document.getElementById('check-2').checked = true;
                                    }else{
                                        document.getElementById('check-2').checked = false;
                                    }
                                    if(response[0]['caries_dis']=="1"){
                                        document.getElementById('check-3').checked = true;
                                    }else{
                                        document.getElementById('check-3').checked = false;
                                    }
                                    if(response[0]['caries_buc']=="1"){
                                        document.getElementById('check-4').checked = true;
                                    }else{
                                        document.getElementById('check-4').checked = false;
                                    }
                                    if(response[0]['caries_ling']=="1"){
                                        document.getElementById('check-5').checked = true;
                                    }else{
                                        document.getElementById('check-5').checked = false;
                                    }

                                    if(response[0]['comp_occ']=="1"){
                                        document.getElementById('check-6').checked = true;
                                    }else{
                                        document.getElementById('check-6').checked = false;
                                    }
                                    if(response[0]['comp_mes']=="1"){
                                        document.getElementById('check-7').checked = true;
                                    }else{
                                        document.getElementById('check-7').checked = false;
                                    }
                                    if(response[0]['comp_dis']=="1"){
                                        document.getElementById('check-8').checked = true;
                                    }else{
                                        document.getElementById('check-8').checked = false;
                                    }
                                    if(response[0]['comp_buc']=="1"){
                                        document.getElementById('check-9').checked = true;
                                    }else{
                                        document.getElementById('check-9').checked = false;
                                    }
                                    if(response[0]['comp_ling']=="1"){
                                        document.getElementById('check-10').checked = true;
                                    }else{
                                        document.getElementById('check-10').checked = false;
                                    }

                                    if(response[0]['amal_occ']=="1"){
                                        document.getElementById('check-11').checked = true;
                                    }else{
                                        document.getElementById('check-11').checked = false;
                                    }
                                    if(response[0]['amal_mes']=="1"){
                                        document.getElementById('check-12').checked = true;
                                    }else{
                                        document.getElementById('check-12').checked = false;
                                    }
                                    if(response[0]['amal_dis']=="1"){
                                        document.getElementById('check-13').checked = true;
                                    }else{
                                        document.getElementById('check-13').checked = false;
                                    }
                                    if(response[0]['amal_buc']=="1"){
                                        document.getElementById('check-14').checked = true;
                                    }else{
                                        document.getElementById('check-14').checked = false;
                                    }
                                    if(response[0]['amal_ling']=="1"){
                                        document.getElementById('check-15').checked = true;
                                    }else{
                                        document.getElementById('check-15').checked = false;
                                    }
                                    
                                    if(response[0]['recur_occ']=="1"){
                                        document.getElementById('check-16').checked = true;
                                    }else{
                                        document.getElementById('check-16').checked = false;
                                    }
                                    if(response[0]['recur_mes']=="1"){
                                        document.getElementById('check-17').checked = true;
                                    }else{
                                        document.getElementById('check-17').checked = false;
                                    }
                                    if(response[0]['recur_dis']=="1"){
                                        document.getElementById('check-18').checked = true;
                                    }else{
                                        document.getElementById('check-18').checked = false;
                                    }
                                    if(response[0]['recur_buc']=="1"){
                                        document.getElementById('check-19').checked = true;
                                    }else{
                                        document.getElementById('check-19').checked = false;
                                    }
                                    if(response[0]['recur_ling']=="1"){
                                        document.getElementById('check-20').checked = true;
                                    }else{
                                        document.getElementById('check-20').checked = false;
                                    }
                                    document.getElementById('remarks1').value=treat;
                                    document.getElementById('remarks2').value=surge;
                                }else{
                                    document.getElementById('rad-1').checked = false;
                                    document.getElementById('rad-2').checked = false;
                                    document.getElementById('rad-3').checked = false;
                                    document.getElementById('rad-4').checked = false;
                                    document.getElementById('rad-5').checked = false;
                                    document.getElementById('rad-6').checked = false;
                                    document.getElementById('rad-7').checked = false;
                                    document.getElementById('rad-8').checked = false;
                                    document.getElementById('check-1').checked = false;
                                    document.getElementById('check-2').checked = false;
                                    document.getElementById('check-3').checked = false;
                                    document.getElementById('check-4').checked = false;
                                    document.getElementById('check-5').checked = false;
                                    document.getElementById('check-6').checked = false;
                                    document.getElementById('check-7').checked = false;
                                    document.getElementById('check-8').checked = false;
                                    document.getElementById('check-9').checked = false;
                                    document.getElementById('check-10').checked = false;
                                    document.getElementById('check-11').checked = false;
                                    document.getElementById('check-12').checked = false;
                                    document.getElementById('check-13').checked = false;
                                    document.getElementById('check-14').checked = false;
                                    document.getElementById('check-15').checked = false;
                                    document.getElementById('check-16').checked = false;
                                    document.getElementById('check-17').checked = false;
                                    document.getElementById('check-18').checked = false;
                                    document.getElementById('check-19').checked = false;
                                    document.getElementById('check-20').checked = false;
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX Error:', error);
                            }
                        });
                    });
            $('.addRx').click(function(){            
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('rx_id').value='';
            document.getElementById('rx_caseno').value=id[0];
            document.getElementById('rx_customer_id').value=id[1];
            document.getElementById('rx_description').value='';
            document.getElementById('rx_quantity').value='';
            document.getElementById('rx_route').value='';
            document.getElementById('rx_frequency').value='';
          });
          $('.editRx').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('rx_id').value=id[0];
            document.getElementById('rx_description').value=id[1];
            document.getElementById('rx_quantity').value=id[2];
            document.getElementById('rx_route').value=id[3];
            document.getElementById('rx_frequency').value=id[4];
            document.getElementById('rx_caseno').value=id[5];
            document.getElementById('rx_customer_id').value=id[6];
          });
          $('.editAdmission').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('edit_admit_caseno').value=id[0];
            document.getElementById('edit_admit_customer_id').value=id[3];
            document.getElementById('edit_admit_date').value=id[1];
            document.getElementById('edit_admit_time').value=id[2];
          });
          $('.editPaymentDate').click(function(){
            var data=$(this).data('id');
            var id=data.split('_');
            document.getElementById('edit_payment_id').value=id[0];
            document.getElementById('edit_payment_customer_id').value=id[2];
            document.getElementById('edit_payment_date').value=id[1];            
          });
            </script>
    </body>
</html>