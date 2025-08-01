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
            $contactperson=$this->input->post('contactperson');
            $contactpersonno=$this->input->post('contactpersonno');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM customer WHERE lastname='$lastname' AND firstname='$firstname' AND middlename='$middlename'");
            if($check->num_rows()>0){
                return false;
            }else{
                $customer_id=date('YmdHis');
                $result=$this->db->query("INSERT INTO customer(customer_id,lastname,firstname,middlename,`address`,contactno,birthdate,occupation,civilstatus,gender,contactperson,contactpersonno,datearray,timearray) VALUES('$customer_id','$lastname','$firstname','$middlename','$address','$contactno','$birthdate','$occupation','$civilstatus','$gender','$contactperson','$contactpersonno','$date','$time')");
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
            $contactperson=$this->input->post('contactperson');
            $contactpersonno=$this->input->post('contactpersonno');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $check=$this->db->query("SELECT * FROM customer WHERE lastname='$lastname' AND firstname='$firstname' AND middlename='$middlename' AND customer_id <> '$customer_id'");
            if($check->num_rows()>0){
                return false;
            }else{                
                $result=$this->db->query("UPDATE customer SET lastname='$lastname',firstname='$firstname',middlename='$middlename',`address`='$address',contactno='$contactno',birthdate='$birthdate',occupation='$occupation',civilstatus='$civilstatus',gender='$gender',contactperson='$contactperson',contactpersonno='$contactpersonno' WHERE customer_id='$customer_id'");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllAdmission(){
            $result=$this->db->query("SELECT * FROM admission");
            return $result->result_array();
        }
        public function getAllAdmissionByPatient($id){
            $result=$this->db->query("SELECT * FROM admission WHERE customer_id='$id' ORDER BY dateadmit DESC");
            return $result->result_array();
        }                
        public function save_admission(){
            $caseno=date('YmdHis');
            $customer_id=$this->input->post('customer_id');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $services=$this->input->post('services');            
            $result=$this->db->query("INSERT INTO admission(caseno,customer_id,dateadmit,timeadmit,`status`) VALUES('$caseno','$customer_id','$date','$time','Active')");
            if($result){
                if(count($services)>0){
                    foreach($services as $item){
                        $query=$this->db->query("SELECT * FROM services WHERE id='$item'");
                        $row=$query->row_array();
                        $unitcost=$row['service_unitcost'];
                        $refno="RN".date('YmdHis');
                        $this->db->query("INSERT INTO productout(refno,caseno,service_id,unitcost,discount,gross,trantype,datearray,timearray) VALUES('$refno','$caseno','$item','$unitcost','0','$unitcost','cash','$date','$time')");                
                    }
                }
                return true;
            }else{
                return false;
            }
        }
        public function getAllServicesRendered($caseno){
            $result=$this->db->query("SELECT s.service_description,s.id as `sid`,po.* FROM services s INNER JOIN productout po ON po.service_id=s.id INNER JOIN admission a ON a.caseno=po.caseno WHERE a.caseno='$caseno'");
            return $result->result_array();
        }
        public function getAllActivePatient(){
            $result=$this->db->query("SELECT pp.*,a.* FROM admission a INNER JOIN customer pp ON pp.customer_id=a.customer_id WHERE a.status='Active' ORDER BY a.dateadmit ASC");
            return $result->result_array();
        }
        public function getPatientAdmission($caseno){
            $result=$this->db->query("SELECT c.*,a.* FROM admission a INNER JOIN customer c ON c.customer_id=a.customer_id WHERE a.caseno='$caseno'");
            return $result->row_array();
        }

        public function getPatientPayment($caseno){
            $result=$this->db->query("SELECT c.*,a.*,s.service_description FROM admission a INNER JOIN `collection` c ON c.caseno=a.caseno INNER JOIN services s ON s.id=c.service_id WHERE a.caseno='$caseno'");
            return $result->result_array();
        }
        public function add_charges(){
            $caseno=$this->input->post('caseno');
            $services=$this->input->post('services');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $rn=date('YmdHis');
            foreach($services as $item){
                $query=$this->db->query("SELECT * FROM services WHERE id='$item'");
                        $row=$query->row_array();
                        $unitcost=$row['service_unitcost'];                        
                        $refno="RN".$rn;
                        $rn++;
                        $this->db->query("INSERT INTO productout(refno,caseno,service_id,unitcost,discount,gross,trantype,datearray,timearray) VALUES('$refno','$caseno','$item','$unitcost','0','$unitcost','cash','$date','$time')");                         
            }
            return true;
        }
        public function delete_charges($id){
            $result=$this->db->query("DELETE FROM productout WHERE refno='$id'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function add_discount(){
            $caseno=$this->input->post('caseno');
            $refno=$this->input->post('refno');
            $amount=$this->input->post('amount');
            $query=$this->db->query("SELECT * FROM productout WHERE refno='$refno'");
            $row=$query->row_array();
            $unitcost=$row['unitcost'];
            $gross=$unitcost-$amount;
            $result=$this->db->query("UPDATE productout SET discount='$amount',gross='$gross' WHERE refno='$refno'");
            if($result){
                return true;
            }else{
                return false;
            }            
        }
        public function edit_unitcost(){
            $caseno=$this->input->post('caseno');
            $refno=$this->input->post('refno');
            $amount=$this->input->post('amount');
            $query=$this->db->query("SELECT * FROM productout WHERE refno='$refno'");
            $row=$query->row_array();
            $discount=$row['discount'];
            $gross=$amount-$discount;
            if($gross >= 0){
                $result=$this->db->query("UPDATE productout SET unitcost='$amount',gross='$gross' WHERE refno='$refno'");
            }            
            if($result){
                return true;
            }else{
                return false;
            }            
        }
        public function save_payment(){
            $caseno=$this->input->post('caseno');
            $type=$this->input->post('type');
            $transno="";
            $file="";
            $orno="OR".date('ymdHis');
            $accttitle="CASHONHAND";
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $query=$this->db->query("SELECT * FROM productout WHERE caseno='$caseno' ANd trantype='cash' AND `status`='pending'");
            $items=$query->result_array();
            foreach($items as $item){
                if($type=="card"){
                    $transno=$this->input->post('transno');
                    $fileName=basename($_FILES["file"]["name"]);           
                    $image = $_FILES["file"]["tmp_name"];
                    $file=addslashes(file_get_contents($image));
                }
                    $result=$this->db->query("INSERT INTO `collection`(refno,caseno,orno,service_id,accttitle,amount,amount_paid,`type`,transno,proof_payment,`status`,referenceno,datearray,timearray) VALUES('$item[refno]','$caseno','$orno','$item[service_id]','$accttitle','$item[gross]','$item[gross]','$type','$transno','$file','PAID','$item[refno]','$date','$time')");
                    if($result){
                        $this->db->query("UPDATE productout SET `status`='paid' WHERE refno='$item[refno]'");
                    }
            }
            if($result){                
                return true;
            }else{
                return false;
            }
        }

        public function getSinglePayment($refno){
            $result=$this->db->query("SELECT * FROM `collection` WHERE refno='$refno'");
            return $result->row_array();
        }

        public function save_partial_payment(){
            $caseno=$this->input->post('caseno');
            $refno=$this->input->post('refno');
            $amount=$this->input->post('amount');
            $transno="";
            $file="";
            $orno="OR".date('ymdHis');
            $accttitle="CASHONHAND";
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $query=$this->db->query("SELECT * FROM productout WHERE refno='$refno'");
            $row=$query->row_array();
            $origamount=$row['gross'];
            $result=$this->db->query("INSERT INTO `collection`(refno,caseno,orno,service_id,accttitle,amount,amount_paid,`type`,transno,proof_payment,`status`,referenceno,datearray,timearray,is_credit) VALUES('$refno','$caseno','$orno','$row[service_id]','$accttitle','$origamount','$amount','cash','$transno','$file','PAID','$refno','$date','$time','1')");
            if($result){   
                $rrno="RN".date('YmdHis');
                $tradeamount=$origamount-$amount;
                $accttitle="AR TRADE";
                $this->db->query("INSERT INTO `collection`(refno,caseno,orno,service_id,accttitle,amount,`type`,transno,proof_payment,`status`,referenceno,datearray,timearray) VALUES('$rrno','$caseno','','$row[service_id]','$accttitle','$tradeamount','ar','$transno','$file','pending','$refno','$date','$time')");
                $this->db->query("UPDATE productout SET `status`='paid' WHERE refno='$refno'");
                return true;
            }else{
                return false;
            }
        }
        public function discharge_patient($caseno){
            $result=$this->db->query("UPDATE admission SET `status`='discharged' WHERE caseno='$caseno'");
            if($result){
                return true;
            }else{
                return false;
            }
        }
        public function getAllPatientPayment($customer_id){
            $result=$this->db->query("SELECT c.*,s.service_description FROM `collection` c INNER JOIN admission a ON a.caseno=c.caseno INNER JOIN customer cs ON cs.customer_id=a.customer_id INNER JOIN services s ON s.id=c.service_id WHERE cs.customer_id='$customer_id' AND c.orno <> '' GROUP BY c.referenceno,c.orno ORDER BY c.id ASC");
            return $result->result_array();
        }
        public function checkrefno($refno){
            $result=$this->db->query("SELECT * FROM `collection` WHERE referenceno='$refno' GROUP BY `type`");
            return $result->result_array();
        }
        public function save_balance_payment(){
            $refno=$this->input->post('refno');
            $balance=$this->input->post('balance');
            $amount=$this->input->post('amount');
            $transno="";
            $file="";
            $query=$this->db->query("SELECT * FROM `collection` WHERE referenceno = '$refno' AND orno = ''");
            $row=$query->row_array();
            $rrno=$row['refno'];
            $orno="OR".date('ymdHis');
            $date=date('Y-m-d');
            $time=date('H:i:s');
            $refnum="RN".date('YmdHis');
            $accttitle="AR TRADE";
            $tradeamount=$balance-$amount;
            $credit="";
            if($tradeamount > 0){
                $credit=1;
                $result=$this->db->query("INSERT INTO `collection`(refno,caseno,orno,service_id,accttitle,amount,amount_paid,`type`,transno,proof_payment,`status`,referenceno,datearray,timearray) VALUES('$refnum','$row[caseno]','','$row[service_id]','$accttitle','$tradeamount','0','ar','$transno','$file','pending','$rrno','$date','$time')");
            }           
                $result=$this->db->query("UPDATE `collection` SET orno='$orno',`type`='cash',`status`='PAID',referenceno='$rrno',datearray='$date',timearray='$time',amount='$balance',amount_paid='$amount',accttitle='CASHONHAND',is_credit='$credit' WHERE refno='$rrno'");                 
            if($result){                
                $this->db->query("UPDATE `collection` SET is_credit='' wHERE refno='$refno'");
                return true;
            }else{
                return false;
            }
        }
        public function change_password(){
            $username=$this->input->post('username');
            $oldpass=$this->input->post('oldpass');
            $newpass=$this->input->post('newpass');
            $check=$this->db->query("SELECT * FROM `admin` WHERE username='$username' AND `password`='$oldpass'");
            if($check->num_rows()>0){
                $result=$this->db->query("UPDATE `admin` SET `password`='$newpass' WHERE username='$username'");
            }
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }
?>
