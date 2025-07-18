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
        public function save_patient(){
            $lastname=$this->input->post('lastname');
            $firstname=$this->input->post('firstname');
            $middlename=$this->input->post('middlename');
            $address=$this->input->post('address');
            $contactno=$this->input->post('contactno');
            $birthdate=$this->input->post('birthdate');
            $occupation=$this->input->post('occupation');
            $civilstatus=$this->input->post('civilstatus');
            $gender=$this->input->post('gender');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM customer WHERE lastname='$lastname' AND firstname='$firstname' AND middlename='$middlename'");
            if($check->num_rows()>0){
                return false;
            }else{
                $customer_id=date('YmdHis');
                $result=$this->db->query("INSERT INTO customer(customer_id,lastname,firstname,middlename,`address`,contactno,birthdate,occupation,civilstatus,gender,datearray,timearray) VALUES('$customer_id','$lastname','$firstname','$middlename','$address','$contactno','$birthdate','$occupation','$civilstatus','$gender','$date','$time')");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
         public function getSinglePatient($id){
            $result=$this->db->query("SELECT * FROM customer WHERE customer_id='$id'");
            return $result->row_array();
        }
        public function update_patient(){
            $customer_id=$this->input->post('customer_id');
            $lastname=$this->input->post('lastname');
            $firstname=$this->input->post('firstname');
            $middlename=$this->input->post('middlename');
            $address=$this->input->post('address');
            $contactno=$this->input->post('contactno');
            $birthdate=$this->input->post('birthdate');
            $occupation=$this->input->post('occupation');
            $civilstatus=$this->input->post('civilstatus');
            $gender=$this->input->post('gender');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM customer WHERE lastname='$lastname' AND firstname='$firstname' AND middlename='$middlename' AND customer_id <> '$customer_id'");
            if($check->num_rows()>0){
                return false;
            }else{                
                $result=$this->db->query("UPDATE customer SET lastname='$lastname',firstname='$firstname',middlename='$middlename',`address`='$address',contactno='$contactno',birthdate='$birthdate',occupation='$occupation',civilstatus='$civilstatus',gender='$gender' WHERE customer_id='$customer_id'");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }
?>
