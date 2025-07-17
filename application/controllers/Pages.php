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
}
?>
