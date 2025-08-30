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
            $data['title'] = "<a href='".base_url('view_billing/'.$caseno)."'>Patient Billing</a> >> Tooth Chart";
            $data['admission'] = "";
            $data['item'] = $this->Clinic_model->getPatientAdmission($caseno);   
            $data['services'] = $this->Clinic_model->getAllServicesRendered($caseno);
            $data['payment'] = $this->Clinic_model->getPatientPayment($caseno);   
            $this->load->view('includes/header'); 
            $this->load->view('includes/navbar');           
            $this->load->view('includes/sidebar');            
            $this->load->view('pages/'.$page,$data);    
            $this->load->view('includes/modal');     
            $this->load->view('includes/footer');
        }

}
?>
