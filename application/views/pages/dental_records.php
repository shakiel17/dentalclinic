<html>
    <head>
        <title>DENTAL RECORDS</title>
        <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('design/assets/img/cliniclogo.jpg');?>">
    </head>
<body>
    <?php
    $birth_date_string = $item['birthdate']; 

    // Create DateTime objects for the birth date and current date
    $birth_date_obj = new DateTime($birth_date_string);
    $current_date_obj = new DateTime(); // Defaults to current date and time

    $diff = $current_date_obj->diff($birth_date_obj);
    $years = $diff->y;
    // $months = $diff->m;
    // $days = $diff->d;

    ?>
<center>
<div style="width:720;">    
    <table width="100%" border="0" cellspacing="0" style="font-family:Arial;">
        <tr>
            <td width="120"><img src="<?=base_url('design/assets/img/cliniclogo.jpg');?>" width="120"></td>
            <td width="5">&nbsp;</td>
            <td>
                <b style="font-size:20px;">HERMOSILLA DENTAL CLINIC</b><br>
                HILARIA'S BUILDING 029 OLD PC BARRACKS<br>
                SUDAPIN, KIDAPAWAN CITY<br>
                MON-SAT: 9:00 AM - 5:00 PM<br>
                09614646034
            </td>
        </tr>        
    </table>
    <hr>
    <table width="100%" border="0" cellspacing="0">
        <tr>
            <td colspan="2" align="center" style="background-color:maroon; font-size:30px; color: white;font-family:Arial;">DENTAL RECORDS</td>
        </tr>
    </table>
    <hr>
    <table width="100%" border="0" cellspacing="0" style="font-size:14px;font-family:Arial;">
        <tr>
            <td width="17%"><b>PATIENT NAME:</b></td>
            <td width="25%" style="border-bottom:1px solid black;"><?=$item['firstname'];?> <?=$item['lastname'];?><td>
            <td width="7%"><b>AGE:</b></td>
            <td width="7%" style="border-bottom:1px solid black;"><?=$years;?></td>
            <td width="6%"><b>GENDER:</b></td>
            <td width="6%" style="border-bottom:1px solid black;"><?=$item['gender'];?></td>
            <td width="17%"><b>DATE OF BIRTH:</b></td>
            <td width="15%" style="border-bottom:1px solid black;"><?=date('M-d-Y',strtotime($item['birthdate']));?></td>
        </tr>
    </table>
    <table width="100%" border="0" cellspacing="0" style="font-size:14px;font-family:Arial;">
        <tr>
            <td width="12%"><b>ADDRESS:</b></td>
            <td width="48%" style="border-bottom:1px solid black;"><?=$item['address'];?><td>
            <td width="20%"><b>CONTACT NUMBER:</b></td>                       
            <td width="20%" style="border-bottom:1px solid black;"><?=$item['contactno'];?></td>
        </tr>
    </table>
    <table width="100%" border="1" style="border-collapse: collapse; font-size:16px; text-align:center; margin-top:3px;font-family:Arial;" cellspacing="0" cellpadding="1"> 
        <tr>
            <td><b>DATE</b></td>                                                    
            <td><b>TREATMENT/PROCEDURE</b></td>
            <td><b>AMOUNT</b></td>
            <td><b>PAYMENT</b></td>
            <td><b>BALANCE</b></td>
            <td><b>SIGNATURE</b></td>
        </tr>                                                
        <?php       
            $rows=count($paymentdetails);
            foreach($paymentdetails as $row){
                $gross=$row['amount'];                                                     
                                                    $query=$this->Clinic_model->checkrefno($row['referenceno']);
                                                    $description=$row['service_description'];
                                                    
                                                    echo "<tr>";
                                                        echo "<td>".date('m/d/Y',strtotime($row['datearray']))."</td>";                                                        
                                                        echo "<td align='left'>$description</td>";
                                                        echo "<td>".number_format($gross,2)."</td>";
                                                        $balance=$gross-$row['amount_paid'];                                                                                                            
                                                        echo "<td align='right'>".number_format($row['amount_paid'],2)."</td>";
                                                        echo "<td align='right'>".number_format($balance,2)."</td>";
                                                        ?>
                                                        <td>
                                                           
                                                        </td>
                <?php
                echo "</tr>";            
            }  
            for($i=0;$i<(40-$rows); $i++){
                echo "<tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>";
            }            
        ?>
    </table>
    <br><br>
    <table width="100%" border="0" style="font-family:Arial; font-size:14px;">
        <tr>
            <td align="center"><b>HERMOSILLA DENTAL TREATMENT WAIVER AND CONSENT FORM</b></td>
        </tr>
    </table>
    <br>
    <table width="100%" border="0" style="font-family:Arial; font-size:14px;">
        <tr>
            <td width="15%"><b>Patient Name:</b></td>
            <td width="60%" style="border-bottom:1px solid black;"><?=$item['firstname'];?> <?=$item['lastname'];?></td>
            <td width="7%"><b>Date:</b></td>
            <td width="18%" style="border-bottom:1px solid black;"><?=date('m/d/Y');?></td>
        </tr>
    </table>
    <table width="100%" border="0" style="font-family:Arial; font-size:14px;">
        <tr>
            <td width="15%"><b>Date of Birth:</b></td>
            <td width="60%" style="border-bottom:1px solid black;"><?=date('F d, Y',strtotime($item['birthdate']));?></td>
            <td width="7%"><b>Age:</b></td>
            <td width="18%" style="border-bottom:1px solid black;" align="center"><?=$years;?></td>
        </tr>
    </table>
    <table width="100%" border="0" style="font-family:Arial; font-size:14px;">
        <tr>
            <td width="15%"><b>Contact #:</b></td>
            <td width="30%" style="border-bottom:1px solid black;"><?=$item['contactno'];?></td>
            <td width="22%"><b>Emergency Contact #:</b></td>
            <td width="33%" style="border-bottom:1px solid black;" align="center"><?=$item['contactperson'];?></td>
        </tr>
    </table>
    <table width="100%" border="0" style="font-family:Arial; font-size:14px;">
        <tr>                        
            <td width="31%"><b>Relationship to Contact Person:</b></td>
            <td style="border-bottom:1px solid black;" align=""><?=$item['contactpersonno'];?></td>
        </tr>
    </table>
    <hr>
    <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td align="justify">
                <b>1. Acknowledgement of Treatment</b><br>
                I, the undersigned hereby consent to receive dental treatment provided by Hermosilla Dental. I understand that the treatments may include, but are not limited to, routine cleanings, fillings, extractions, root canals, crowns, bridges, dentures, and other procedures deemed necessary by the dentist. I acknowledge that the nature of the treatments, including possible risks and benefits, has  been explained to me by the dental staff.
            </td>                
        </tr>
        <tr>
            <td align="justify">
                <b>2. Financial Responsibility</b><br>
                I understand that I am responsible for the payment of services rendered. Any estimate provided for the cost of treatment is not a guarantee of final costs, as unforseen complications or additional treatment may arise. I agree to pay for all charges in accordance with the terms of payment set by Hermosilla Dental.
                </td>                
        </tr>
        <tr>
            <td align="justify">
                <b>3. Medical History</b><br>
                I have provided accurate and complete information regarding my medical history and any conditions, allergies, or medications that may affect my treatment. I understand that failing to disclose relevant medical information may increase the risks associated with treatment.
            </td>                
        </tr>
        <tr>
            <td align="justify">
                <b>4. Risks and Complications</b><br>
                I understand that while dental procedures are generally safe, there are inherent risks involved in any medical treatment, including infection, adverse reactions to anesthesia, and unexpected complications. I have had the opportunity to ask questions, and all my concerns have been addressed to my satisfaction.
                </td>
        </tr>
        <tr>
            <td align="justify">
                <b>5. Privacy and Confidentiality</b><br>
                I acknowledge that all information provided during my dental treatment will be handled with the highest level of confidentiality and in accordance with <b>Data Privacy Act of 2012 (Republic Act No. 10173).</b>
                </td>
        </tr>
        <tr>
            <td align="justify">
                <b>6. Consent to Photography/Treatment Documentation</b><br>
                I give permission for photographs, radiographs, or videos of my treatment to be taken for purposes of diagnosis, treatment, and educational purposes. These records will remain confidential and will not be shared outside of Hermosilla Dental without my explicit consent.
                </td>
        </tr>
        <tr>
            <td align="justify">
                <b>7. Cancellation of Policy</b><br>
                I understand that I am required to provide at least 24 hours' notice if I need to cancel or reschedule an appointment. Failure to do so may result in cancellation fee or loss of appointment privileges.
                </td>
        </tr>
    </table>
    <hr>
    <br>
    <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td>
                <b>Acknowledgement and Signature</b>
        </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td align="justify">
                By signing below, I confirm that I have read and understood the contents of this waiver and consent form. I consent to the dental treatments described and acknowledge that I have been provided with the necessary information to make an informed decision.
        </td>
        </tr>
        </table>
        <br><br><br>
    <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="20%">
                <b>Patient Signature:</b>
            </td>
            <td width="30%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
        <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="5%">
                <b> Date:</b>
            </td>
            <td width="45%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
        <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="38%">
                <b>Guardian Signature (if applicable):</b>
            </td>
            <td width="12%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
        <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="5%">
                <b> Date:</b>
            </td>
            <td width="45%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
        <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="22%">
                <b>Dentist's Signature:</b>
            </td>
            <td width="28%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
        <table width="100%" border="0" style="font-family:Arial; font-size:16px;">
        <tr>
            <td width="5%">
                <b> Date:</b>
            </td>
            <td width="45%" style="border-bottom:1px solid black;">
            </td>
            <td width="50%"></td>
        </tr>                
        </table>
</div>
</center>
</body>
</html>