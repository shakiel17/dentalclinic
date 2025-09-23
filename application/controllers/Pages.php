<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit','2048M');
date_default_timezone_set('Asia/Manila');
    class Pages extends CI_Controller{
        public function index(){
            $page = "index";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                                     
            if($this->session->admin_login){redirect(base_url('main'));}
            else{}
            $this->load->view('pages/'.$page);                 
        }  
        public function authenticate(){
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $data=$this->Clinic_model->authenticate($username,$password);
            if($data){
                $userdata=array(
                    'username' => $username,
                    'fullname' => $data['fullname'],
                    'admin_login' => true
                );
                $this->session->set_userdata($userdata);
                redirect(base_url('main'));
            }else{
                redirect(base_url());
            }
        }
        public function logout(){
            $this->session->unset_userdata('fullname');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('admin_login');
            redirect(base_url());
        }
        public function main(){
            $page = "main";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                        
            if($this->session->admin_login){}
            else{redirect(base_url());}
            $data['services'] = $this->Clinic_model->getAllServices();
            $data['patient'] = $this->Clinic_model->getAllPatient();
            $data['admission'] = $this->Clinic_model->getAllAdmission();
            $data['active_patient'] = $this->Clinic_model->getAllActivePatient();
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        } 
        public function services(){
            $page = "services";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['items'] = $this->Clinic_model->getAllServices();
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_services(){
            $result=$this->Clinic_model->save_services();
            if($result){
                $this->session->set_flashdata('success','Service details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save service details!');
            }
            redirect(base_url('services'));
        }
        public function delete_services($id){
            $result=$this->Clinic_model->delete_services($id);
            if($result){
                $this->session->set_flashdata('success','Service details successfully deleted!');                
            }else{
                $this->session->set_flashdata('failed','Unable to delete service details!');
            }
            redirect(base_url('services'));
        }
        public function manage_patient(){
            $page = "manage_patient";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Masterfile";   
            $data['items'] = $this->Clinic_model->getAllPatient();
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_patient(){
            $result=$this->Clinic_model->save_patient();
            if($result){
                $this->session->set_flashdata('success','Patient details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save patient details!');
            }
            redirect(base_url('manage_patient'));
        }
        public function view_profile($id){
            $page = "patient_profile";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Profile";
            $data['admission'] = "";
            $data['item'] = $this->Clinic_model->getSinglePatient($id);
            $data['customer_id'] = $id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function update_patient(){
            $id=$this->input->post('customer_id');
            $result=$this->Clinic_model->update_patient();
            if($result){
                $this->session->set_flashdata('success','Patient details successfully updated!');                
            }else{
                $this->session->set_flashdata('failed','Unable to update patient details!');
            }
            redirect(base_url('view_profile/'.$id));
        }
        public function view_admission_history($id){
            $page = "patient_profile";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Profile";
            $data['admission'] = "1";
            $data['item'] = $this->Clinic_model->getSinglePatient($id);
            $data['admitdetails'] = $this->Clinic_model->getAllAdmissionByPatient($id);
            $data['customer_id'] = $id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_admission(){
            $id=$this->input->post('customer_id');            
            $result=$this->Clinic_model->save_admission();                    
            if($result){
                $this->session->set_flashdata('success','Patient admission details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save admission details!');
            }
            redirect(base_url('view_admission_history/'.$id));
        }

        public function view_billing($id){
            $page = "view_billing";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Billing";
            $data['admission'] = "";
            $data['item'] = $this->Clinic_model->getPatientAdmission($id);   
            $data['services'] = $this->Clinic_model->getAllServicesRendered($id);
            $data['payment'] = $this->Clinic_model->getPatientPayment($id);   
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function add_charges(){
            $caseno=$this->input->post('caseno');            
            $result=$this->Clinic_model->add_charges();                    
            if($result){
                $this->session->set_flashdata('success','Item successfully charged!');                
            }else{
                $this->session->set_flashdata('failed','Unable to charge item!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }

        public function delete_charges($id,$caseno){
            $result=$this->Clinic_model->delete_charges($id);
            if($result){
                $this->session->set_flashdata('success','Item details successfully deleted!');                
            }else{
                $this->session->set_flashdata('failed','Unable to delete item details!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }

        public function add_discount(){
            $caseno=$this->input->post('caseno');            
            $result=$this->Clinic_model->add_discount();                    
            if($result){
                $this->session->set_flashdata('success','Discount successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unable to update discount!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }
        public function edit_unitcost(){
            $caseno=$this->input->post('caseno');            
            $result=$this->Clinic_model->edit_unitcost();                    
            if($result){
                $this->session->set_flashdata('success','Unitcost successfully updated!');
            }else{
                $this->session->set_flashdata('failed','Unable to update unitcost!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }
        public function save_payment(){
            $caseno=$this->input->post('caseno');            
            $result=$this->Clinic_model->save_payment();                    
            if($result){
                $this->session->set_flashdata('success','Payment successfully posted!');
            }else{
                $this->session->set_flashdata('failed','Unable to post payment!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }

        public function view_proof($id){
            $page = "payment_proof";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['payment'] = $this->Clinic_model->getSinglePayment($id);               
            $this->load->view('pages/'.$page,$data);    
            
        }
        public function save_partial_payment(){
            $caseno=$this->input->post('caseno');            
            $result=$this->Clinic_model->save_partial_payment();                    
            if($result){
                $this->session->set_flashdata('success','Partial payment successfully posted!');
            }else{
                $this->session->set_flashdata('failed','Unable to post partial payment!');
            }
            redirect(base_url('view_billing/'.$caseno));
        }

        public function discharge_patient($caseno){            
            $result=$this->Clinic_model->discharge_patient($caseno);
            if($result){
                $this->session->set_flashdata('success','Patient admission successfully discharged!');
            }else{
                $this->session->set_flashdata('failed','Unable to discharge patient admission!');
            }
            redirect(base_url('main'));
        }

        public function view_patient_account($id){
            $page = "patient_profile";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Profile";
            $data['admission'] = "2";
            $data['item'] = $this->Clinic_model->getSinglePatient($id);
            $data['paymentdetails'] = $this->Clinic_model->getAllPatientPayment($id);
            $data['customer_id'] = $id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }

        public function save_balance_payment(){
            $caseno=$this->input->post('customer_id');            
            $result=$this->Clinic_model->save_balance_payment();                    
            if($result){
                $this->session->set_flashdata('success','Balance payment successfully posted!');
            }else{
                $this->session->set_flashdata('failed','Unable to post balance payment!');
            }
            redirect(base_url('view_patient_account/'.$caseno));
        }

        public function print_dental_records($id){
            $page = "dental_records";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['item'] = $this->Clinic_model->getSinglePatient($id);
            $data['paymentdetails'] = $this->Clinic_model->getAllPatientPayment($id);                        
            $this->load->view('pages/'.$page,$data);                
        }
        public function change_password(){            
            $result=$this->Clinic_model->change_password();                    
            if($result){
                $this->session->set_flashdata('success','Password successfully changed!');
            }else{
                $this->session->set_flashdata('failed','Unable to change password!');
            }
            redirect(base_url('main'));
        }

        public function admit_chart($caseno,$customer_id){
            $page = "admit_chart";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}
            $data['title'] = "<a href='".base_url('main')."'>Back</a> >> Tooth Chart";
            $data['admission'] = "";
            $data['item'] = $this->Clinic_model->getPatientAdmission($caseno);   
            $data['services'] = $this->Clinic_model->getAllServicesRendered($caseno);
            $data['payment'] = $this->Clinic_model->getPatientPayment($caseno);
            $data['chart']  = $this->Clinic_model->checkChart($caseno,$customer_id);
            $data['status'] = $data['item']['status'];
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal',$data);     
            $this->load->view('includes/footer');
        }
        public function fetch_tooth_chart(){
            $id=$this->input->post('id');
            $data=$this->Clinic_model->fetch_tooth_chart($id);
            echo json_encode($data);
        }
        public function save_tooth_chart(){
            $caseno=$this->input->post('caseno');
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->save_tooth_chart();
            if($save){
                $this->session->set_flashdata('success','Tooth Chart successfully saved!');
            }else{
                $this->session->set_flashdata('failed','Unable to save tooth chart!');
            }
            redirect(base_url('admit_chart/'.$caseno."/".$customer_id));
        }
        public function manage_doctor(){
            $page = "doctor";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['items'] = $this->Clinic_model->getAllDoctor();
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_doctor(){
            $result=$this->Clinic_model->save_doctor();
            if($result){
                $this->session->set_flashdata('success','Doctor details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save doctor details!');
            }
            redirect(base_url('manage_doctor'));
        }
        public function manage_rx($caseno,$customer_id){
            $page = "manage_rx";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['items'] = $this->Clinic_model->getAllPatientPrescription($caseno,$customer_id);
            $data['caseno'] = $caseno;
            $data['customer_id'] = $customer_id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_rx(){
            $caseno=$this->input->post('caseno');
            $customer_id=$this->input->post('customer_id');
            $result=$this->Clinic_model->save_rx();
            if($result){
                $this->session->set_flashdata('success','Prescription details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save prescription details!');
            }
            redirect(base_url('manage_rx/'.$caseno."/".$customer_id));
        }
        public function delete_rx($id,$caseno,$customer_id){
            $result=$this->Clinic_model->delete_rx($id,$caseno,$customer_id);
            if($result){
                $this->session->set_flashdata('success','Prescription details successfully deleted!');                
            }else{
                $this->session->set_flashdata('failed','Unable to delete prescription details!');
            }
            redirect(base_url('manage_rx/'.$caseno."/".$customer_id));
        }
        public function print_rx($caseno,$customer_id){
            $page = "print_rx";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['items'] = $this->Clinic_model->getAllPatientPrescription($caseno,$customer_id);
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $data['setting'] = $this->Clinic_model->getSettings();
            $data['caseno'] = $caseno;
            $data['customer_id'] = $customer_id;
            $this->load->view('pages/'.$page,$data);                           
        }
        public function print_rx_nohead($caseno,$customer_id){
            $page = "print_rx_nohead";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['items'] = $this->Clinic_model->getAllPatientPrescription($caseno,$customer_id);
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $data['setting'] = $this->Clinic_model->getSettings();
            $data['caseno'] = $caseno;
            $data['customer_id'] = $customer_id;
            $this->load->view('pages/'.$page,$data);                           
        }
        public function clinic_settings(){
            $page = "manage_settings";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['title'] = "Clinic Settings";
            $data['item'] = $this->Clinic_model->getSettings();
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_clinic_logo(){
            $save=$this->Clinic_model->save_clinic_logo();
            if($save){
               $this->session->set_flashdata('success','Clinic logo successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save clinic logo!');
            }
            redirect(base_url('clinic_settings'));
        }
        public function save_settings(){
            $save=$this->Clinic_model->save_settings();
            if($save){
               $this->session->set_flashdata('success','Clinic details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save clinic details!');
            }
            redirect(base_url('clinic_settings'));
        }
        public function manage_certificate($caseno,$customer_id){
            $page = "manage_certificate";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}
            $data['title'] = "<a href='".base_url('view_billing/'.$caseno)."'>Back</a> >> Dental Certificate";
            $data['admission'] = "";
            $data['item'] = $this->Clinic_model->getDentalCert($caseno);            
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $data['caseno']=$caseno;
            $data['customer_id']=$customer_id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal',$data);     
            $this->load->view('includes/footer');
        }
        public function save_certificate(){
            $caseno=$this->input->post('caseno');
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->save_certificate();
            if($save){
               $this->session->set_flashdata('success','Certificate details successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save certificate details!');
            }
            redirect(base_url('manage_certificate/'.$caseno."/".$customer_id));
        }
        public function print_certificate($caseno,$customer_id){
            $page = "print_cert";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['item'] = $this->Clinic_model->getDentalCert($caseno);
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $data['services'] = $this->Clinic_model->getAllServicesRendered($caseno);
            $data['setting'] = $this->Clinic_model->getSettings();
            $data['caseno'] = $caseno;
            $data['customer_id'] = $customer_id;
            $this->load->view('pages/'.$page,$data);                           
        }
        public function update_admission_date(){            
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->update_admission_date();
            if($save){
               $this->session->set_flashdata('success','Admission date successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save admission date!');
            }
            redirect(base_url("view_admission_history/".$customer_id));
        }
        public function update_payment_date(){            
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->update_payment_date();
            if($save){
               $this->session->set_flashdata('success','Payment date successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save payment date!');
            }
            redirect(base_url("view_patient_account/".$customer_id));
        }
        public function view_patient_braces($id){
            $page = "patient_profile";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}     
            $data['title'] = "Patient Profile";
            $data['admission'] = "3";
            $data['item'] = $this->Clinic_model->getSinglePatient($id);
            $data['braces_before'] = $this->Clinic_model->getPatientBraces($id,'before');
            $data['braces_middle'] = $this->Clinic_model->getPatientBraces($id,'middle');
            $data['braces_after'] = $this->Clinic_model->getPatientBraces($id,'after');
            $data['customer_id'] = $id;
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');               
        }
        public function save_brace_image(){
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->save_brace_image();
            if($save){
               $this->session->set_flashdata('success','Brace image successfully saved!');                
            }else{
                $this->session->set_flashdata('failed','Unable to save brace image!');
            }
            redirect(base_url('view_patient_braces/'.$customer_id));
        }
        public function delete_brace_image($id,$customer_id){
            $result=$this->Clinic_model->delete_brace_image($id);
            if($result){
                $this->session->set_flashdata('success','Brace image successfully deelted!'); 
            }else{
                $this->session->set_flashdata('failed','Unable to delete brace image!');
            }
            redirect(base_url('view_patient_braces/'.$customer_id));
        }
        public function save_contract(){
            $customer_id=$this->input->post('customer_id');
            $save=$this->Clinic_model->save_contract();
            if($save){
                redirect(base_url('print_contract/'.$customer_id));
            }else{
                $this->session->set_flashdata('failed','Unable to save brace contract!');
                echo "<script>window.close();</script>";
            }
        }
        public function print_contract($customer_id){
            $page = "print_contract";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            if($this->session->admin_login){}
            else{redirect(base_url());}        
            $data['item'] = $this->Clinic_model->getPatientContract($customer_id);
            $data['patient'] = $this->Clinic_model->getSinglePatient($customer_id);
            $data['setting'] = $this->Clinic_model->getSettings();            
            $data['customer_id'] = $customer_id;
            $this->load->view('pages/'.$page,$data);                           
        }
}
?>
