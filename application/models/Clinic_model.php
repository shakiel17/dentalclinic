<?php
    date_default_timezone_set('Asia/Manila');
    class Clinic_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function authenticate($username,$password){
            $result=$this->db->query("SELECT * FROM `admin` WHERE username='$username' AND `password`='$password'");
            if($result->num_rows()>0){
                return $result->row_array();
            }else{
                return false;
            }
        }
        public function getAllServices(){
            $result=$this->db->query("SELECT * FROM services ORDER BY service_description ASC");
            return $result->result_array();
        }
        public function save_services(){
            $id=$this->input->post('id');
            $code=$this->input->post('code');
            $description=$this->input->post('description');
            $amount=$this->input->post('amount');

            if($id==""){
                $sid=date('YmdHis');
                $result=$this->db->query("INSERT INTO services(service_id,service_code,service_description,service_unitcost) VALUES('$sid','$code','$description','$amount')");
            }else{
                $result=$this->db->query("UPDATE services SET service_code='$code',service_description='$description',service_unitcost='$amount' WHERE id='$id'");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function delete_services($id){
            $result=$this->db->query("DELETE FROM services WHERE id='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllPatient(){
            $result=$this->db->query("SELECT * FROM customer ORDER BY lastname ASC, firstname ASC");
            return $result->result_array();
        }
    }
?>
