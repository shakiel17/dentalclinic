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
            $data['home'] = "current-menu-item";
            $data['pastor'] = '';
            $data['sermon'] = '';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = '';            
            $data['doctrine'] = '';
            $data['covenant'] = '';
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');               
        }
        public function sermons(){
            $page = "sermons";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            $data['home'] = '';
            $data['pastor'] = '';
            $data['sermon'] = 'current-menu-item';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = '';  
            $data['doctrine'] = '';
            $data['covenant'] = '';          
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');
        }
        public function doctrinal_statement(){
            $page = "doctrinal_statement";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            $data['home'] = '';
            $data['pastor'] = '';
            $data['sermon'] = '';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = ''; 
            $data['covenant'] = '';  
            $data['doctrine'] = 'current-menu-item';         
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');
        }
        public function church_covenant(){
            $page = "church_covenant";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            $data['home'] = '';
            $data['pastor'] = '';
            $data['sermon'] = '';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = ''; 
            $data['covenant'] = 'current-menu-item';  
            $data['doctrine'] = '';         
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');
        }

        public function pastors(){
            $page = "pastors";
            if(!file_exists(APPPATH.'views/pages/'.$page.".php")){
                show_404();
            }                  
            $data['home'] = '';
            $data['pastor'] = 'current-menu-item';
            $data['sermon'] = '';
            $data['events'] = '';
            $data['gallery'] = '';
            $data['members'] = ''; 
            $data['covenant'] = '';  
            $data['doctrine'] = '';         
            $this->load->view('includes/header');
            $this->load->view('includes/navbar',$data);
            $this->load->view('pages/'.$page);         
            $this->load->view('includes/footer');
        }
}
?>
