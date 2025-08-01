<?php
    date_default_timezone_set('Asia/Manila');
    class Application_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        public function checkEmailExist($email){
            $result=$this->db->query("SELECT * FROM applicant WHERE app_email='$email' AND `status`='verified'");
            if($result->num_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
        public function register_user(){
            $firstname=$this->input->post('app_firstname');
            $lastname=$this->input->post('app_lastname');
            $contactno=$this->input->post('app_contactno');
            $email=$this->input->post('app_email');
            $password=$this->input->post('app_password');
            $id=date('YmdHis');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $result=$this->db->query("INSERT INTO applicant(app_id,app_lastname,app_firstname,app_contact,app_email,app_password,`status`,datearray,timearray) VALUES('$id','$lastname','$firstname','$contactno','$email','$password','pending','$date','$time')");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function send_SMS($contact,$code,$user){
            $url = 'http://194.233.79.65/SMS';
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HEADER, false);

            $message = "Your one-time verification code is $code. For your safety, DO NOT share this code with anyone. Please use within 5 minutes to continue with your transaction.";
            $purpose = "Final Bill";

            $headers = [
                "message: $message",
                "contact: $contact",
                "purpose: $purpose", 
                "user: $user",               
                "branch: 1"
            ];

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $response = curl_exec($ch);

            if (curl_errno($ch)) { return false;}
            else {return true;}

            curl_close($ch);
        }

        public function save_verification($email,$code){            
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM verification WHERE email='$email'");
            if($check->num_rows()>0){
                $result=$this->db->query("UPDATE verification SET `code`='$code',datearray='$date',timearray='$time' WHERE email='$email'");
            }else{
                $result=$this->db->query("INSERT INTO verification(email,`code`,datearray,timearray) VALUES('$email','$code','$date','$time')");
            }            
            if($result){
                return true;
            }else{
                return false;
            }
        }

        public function verify_account($code){
            $email=$this->session->email;
            $query=$this->db->query("SELECT * FROM verification WHERE email='$email' AND `code`='$code'");
            if($query->num_rows()>0){
                $row=$query->row_array();
                $start_time = strtotime($row['datearray']." ".$row['timearray']);
                $end_time = strtotime(date('Y-m-d H:i:s'));

                $difference_in_seconds = abs($end_time - $start_time);
                $minutes = $difference_in_seconds / 60;        

                if($minutes <= 5){
                    $this->db->query("UPDATE applicant SET `status`='verified' WHERE app_email='$email'");
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }
?>
