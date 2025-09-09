<style>
            svg {
            width: 30px;
            height: 30px;
            cursor: pointer;
            }

            /* path, circle {
            stroke: #000;
            stroke-width: 2;
            transition: 0.2s;
            } */

            path:hover {
            opacity: 0.8;
            }
            .slice, .center {
            stroke: black;
            stroke-width: 4;
            cursor: pointer;
            }
            /* .slice:hover, .center:hover {
            fill: lightgray;
            } */
        </style>
<center>
<div style="width:700px; border:0px solid black;">
    <table width="100%" border="0" style="font-family:Arial; font-size:12px;">
        <tr>
            <td width="120"><img src='data:image/jpg;charset=utf8;base64,<?=base64_encode($setting['logo']);?>' width='100'></td>
            <td valign="top">
                <b style="font-size:20px;"><?=$setting['companyname'];?></b><br>
                <?=$setting['address'];?><br>
                CP: <b><?=$setting['contactno'];?></b><br>
                Email: <b><?=$setting['email'];?></b><br>
                Clinic Hours: <b><?php
                    $clinic=explode(';',$setting['clinic_hours']);
                    echo $clinic[0]."".$clinic[1];
                ?>
                </b>
            </td>
        </tr>            
    </table>
    <hr size="3" color="black">
    <p style="font-family:Arial;font-size:20px; font-weight:bold;">DENTAL CERTIFICATE</p>
    <table width="100%" border="0" cellpadding="0" style="font-family:Arial; font-size:13px;">
        <tr>
            <td width="15%">Patient's Name:</td>
            <td style="border-bottom:1px solid black;"><?=$patient['lastname'];?>, <?=$patient['firstname'];?> <?=$patient['middlename'];?></td>
            <td>&nbsp</td>
            <td width="5%">Date: </td>
            <td style="border-bottom:1px solid black;"><?=date('m/d/Y');?></td>            
        </tr>
    </table>    
    <table width="100%" border="0" style="font-family:Arial; font-size:13px;">
        <tr>
            <td width="8%">Address:</td>
            <td style="border-bottom:1px solid black;"><?=$patient['address'];?></td>
            <td>&nbsp;</td>
            <td width="4%">Age: </td>
            <td style="border-bottom:1px solid black;">
                <?php
                    $birthdate= new DateTime($patient['birthdate']);
                    $today=new DateTime(date('Y-m-d'));
                    $age=$birthdate->diff($today)->y;
                    echo $age;
                ?>
            </td>  
            <td>&nbsp;</td>
            <td width="6%">Gender: </td>
            <td style="border-bottom:1px solid black;"><?=$patient['gender'];?></td>
        </tr>
    </table>
      <br><br>
    <table width="100%" border="0" cellspacing="0" cellspacing="0">
                                                <tbody>
                                                    <tr>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=55;
                                                            $fill55center="#ffffff";
                                                            $fill55slice1="#ffffff";
                                                            $fill55slice2="#ffffff";
                                                            $fill55slice3="#ffffff";
                                                            $fill55slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill55center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill55center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill55center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill55center="url(#pattern-stripe55)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill55slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill55slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill55slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill55slice1="url(#pattern-stripe55)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill55slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill55slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill55slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill55slice3="url(#pattern-stripe55)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill55slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill55slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill55slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill55slice4="url(#pattern-stripe55)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill55slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill55slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill55slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill55slice2="url(#pattern-stripe55)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">55</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe55" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill55slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill55slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill55slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill55slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill55center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=54;
                                                            $fill54center="#ffffff";
                                                            $fill54slice1="#ffffff";
                                                            $fill54slice2="#ffffff";
                                                            $fill54slice3="#ffffff";
                                                            $fill54slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill54center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill54center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill54center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill54center="url(#pattern-stripe54)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill54slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill54slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill54slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill54slice1="url(#pattern-stripe54)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill54slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill54slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill54slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill54slice3="url(#pattern-stripe54)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill54slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill54slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill54slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill54slice4="url(#pattern-stripe54)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill54slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill54slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill54slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill54slice2="url(#pattern-stripe54)";
                                                                            $pat="red";
                                                                    }                                                                                                                                     
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">54</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe54" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill54slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill54slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill54slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill54slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill54center;?>"/>
                                                                </svg>
                                                            </a>
                                                            
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=53;
                                                            $fill53center="#ffffff";
                                                            $fill53slice1="#ffffff";
                                                            $fill53slice2="#ffffff";
                                                            $fill53slice3="#ffffff";
                                                            $fill53slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill53center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill53center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill53center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill53center="url(#pattern-stripe53)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill53slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill53slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill53slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill53slice1="url(#pattern-stripe53)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill53slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill53slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill53slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill53slice3="url(#pattern-stripe53)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill53slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill53slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill53slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill53slice4="url(#pattern-stripe53)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill53slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill53slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill53slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill53slice2="url(#pattern-stripe53)";
                                                                            $pat="red";
                                                                    }                                                                                                                                  
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">53</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe53" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill53slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill53slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill53slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill53slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill53center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=52;
                                                            $fill52center="#ffffff";
                                                            $fill52slice1="#ffffff";
                                                            $fill52slice2="#ffffff";
                                                            $fill52slice3="#ffffff";
                                                            $fill52slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill52center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill52center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill52center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill52center="url(#pattern-stripe52)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill52slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill52slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill52slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill52slice1="url(#pattern-stripe52)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill52slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill52slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill52slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill52slice3="url(#pattern-stripe52)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill52slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill52slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill52slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill52slice4="url(#pattern-stripe52)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill52slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill52slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill52slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill52slice2="url(#pattern-stripe52)";
                                                                            $pat="red";
                                                                    }                                                                                                                                  
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">52</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe52" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill52slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill52slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill52slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill52slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill52center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center" style="border-right:1px solid black;">
                                                            <?php
                                                            $tid=51;
                                                            $fill51center="#ffffff";
                                                            $fill51slice1="#ffffff";
                                                            $fill51slice2="#ffffff";
                                                            $fill51slice3="#ffffff";
                                                            $fill51slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill51center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill51center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill51center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill51center="url(#pattern-stripe51)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill51slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill51slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill51slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill51slice1="url(#pattern-stripe51)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill51slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill51slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill51slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill51slice3="url(#pattern-stripe51)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill51slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill51slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill51slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill51slice4="url(#pattern-stripe51)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill51slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill51slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill51slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill51slice2="url(#pattern-stripe51)";
                                                                            $pat="red";
                                                                    }                                                                                                                                                                                                                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }   
                                                            // }                                                         
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                        
                                                            ?>                                                             
                                                            <a style="font-size:9px;">51</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe51" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill51slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill51slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill51slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill51slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill51center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=61;
                                                            $fill61center="#ffffff";
                                                            $fill61slice1="#ffffff";
                                                            $fill61slice2="#ffffff";
                                                            $fill61slice3="#ffffff";
                                                            $fill61slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill61center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill61center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill61center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill61center="url(#pattern-stripe61)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill61slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill61slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill61slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill61slice3="url(#pattern-stripe61)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill61slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill61slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill61slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill61slice1="url(#pattern-stripe61)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill61slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill61slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill61slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill61slice4="url(#pattern-stripe61)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill61slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill61slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill61slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill61slice2="url(#pattern-stripe61)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">61</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe61" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill61slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill61slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill61slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill61slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill61center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=62;
                                                            $fill62center="#ffffff";
                                                            $fill62slice1="#ffffff";
                                                            $fill62slice2="#ffffff";
                                                            $fill62slice3="#ffffff";
                                                            $fill62slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill62center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill62center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill62center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill62center="url(#pattern-stripe62)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill62slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill62slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill62slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill62slice3="url(#pattern-stripe62)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill62slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill62slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill62slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill62slice1="url(#pattern-stripe62)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill62slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill62slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill62slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill62slice4="url(#pattern-stripe62)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill62slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill62slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill62slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill62slice2="url(#pattern-stripe62)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">62</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe62" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill62slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill62slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill62slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill62slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill62center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=63;
                                                            $fill63center="#ffffff";
                                                            $fill63slice1="#ffffff";
                                                            $fill63slice2="#ffffff";
                                                            $fill63slice3="#ffffff";
                                                            $fill63slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill63center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill63center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill63center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill63center="url(#pattern-stripe63)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill63slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill63slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill63slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill63slice3="url(#pattern-stripe63)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill63slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill63slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill63slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill63slice1="url(#pattern-stripe63)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill63slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill63slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill63slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill63slice4="url(#pattern-stripe63)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill63slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill63slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill63slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill63slice2="url(#pattern-stripe63)";
                                                                            $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">63</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe63" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill63slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill63slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill63slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill63slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill63center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=64;
                                                            $fill64center="#ffffff";
                                                            $fill64slice1="#ffffff";
                                                            $fill64slice2="#ffffff";
                                                            $fill64slice3="#ffffff";
                                                            $fill64slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill64center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill64center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill64center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill64center="url(#pattern-stripe64)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill64slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill64slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill64slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill64slice3="url(#pattern-stripe64)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill64slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill64slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill64slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill64slice1="url(#pattern-stripe64)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill64slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill64slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill64slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill64slice4="url(#pattern-stripe64)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill64slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill64slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill64slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill64slice2="url(#pattern-stripe64)";
                                                                            $pat="red";
                                                                    }                                                                                                                                     
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">64</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe64" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill64slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill64slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill64slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill64slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill64center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=65;
                                                            $fill65center="#ffffff";
                                                            $fill65slice1="#ffffff";
                                                            $fill65slice2="#ffffff";
                                                            $fill65slice3="#ffffff";
                                                            $fill65slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill65center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill65center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill65center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill65center="url(#pattern-stripe65)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill65slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill65slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill65slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill65slice3="url(#pattern-stripe65)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill65slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill65slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill65slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill65slice1="url(#pattern-stripe65)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill65slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill65slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill65slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill65slice4="url(#pattern-stripe65)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill65slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill65slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill65slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill65slice2="url(#pattern-stripe65)";
                                                                            $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">65</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe65" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill65slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill65slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill65slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill65slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill65center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=18;
                                                            $fill18center="#ffffff";
                                                            $fill18slice1="#ffffff";
                                                            $fill18slice2="#ffffff";
                                                            $fill18slice3="#ffffff";
                                                            $fill18slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill18center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill18center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill18center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill18center="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill18slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill18slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill18slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill18slice1="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill18slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill18slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill18slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill18slice3="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill18slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill18slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill18slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill18slice4="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill18slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill18slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill18slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill18slice2="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe18" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill18slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill18slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill18slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill18slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill18center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">18</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=17;
                                                            $fill17center="#ffffff";
                                                            $fill17slice1="#ffffff";
                                                            $fill17slice2="#ffffff";
                                                            $fill17slice3="#ffffff";
                                                            $fill17slice4="#ffffff";
                                                            $pat="white";
                                                             $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill17center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill17center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill17center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill17center="url(#pattern-stripe17)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill17slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill17slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill17slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill17slice1="url(#pattern-stripe17)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill17slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill17slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill17slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill17slice3="url(#pattern-stripe17)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill17slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill17slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill17slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill17slice4="url(#pattern-stripe17)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill17slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill17slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill17slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill17slice2="url(#pattern-stripe17)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe17" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill17slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill17slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill17slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill17slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill17center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">17</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=16;
                                                            $fill16center="#ffffff";
                                                            $fill16slice1="#ffffff";
                                                            $fill16slice2="#ffffff";
                                                            $fill16slice3="#ffffff";
                                                            $fill16slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill16center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill16center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill16center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill16center="url(#pattern-stripe16)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill16slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill16slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill16slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill16slice1="url(#pattern-stripe16)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill16slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill16slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill16slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill16slice3="url(#pattern-stripe16)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill16slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill16slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill16slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill16slice4="url(#pattern-stripe16)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill16slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill16slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill16slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill16slice2="url(#pattern-stripe16)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe16" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill16slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill16slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill16slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill16slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill16center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">16</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=15;
                                                            $fill15center="#ffffff";
                                                            $fill15slice1="#ffffff";
                                                            $fill15slice2="#ffffff";
                                                            $fill15slice3="#ffffff";
                                                            $fill15slice4="#ffffff";
                                                            $pat="white";
                                                             $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill15center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill15center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill15center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill15center="url(#pattern-stripe15)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill15slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill15slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill15slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill15slice1="url(#pattern-stripe15)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill15slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill15slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill15slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill15slice3="url(#pattern-stripe15)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill15slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill15slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill15slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill15slice4="url(#pattern-stripe15)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill15slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill15slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill15slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill15slice2="url(#pattern-stripe15)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe15" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill15slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill15slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill15slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill15slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill15center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">15</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=14;
                                                            $fill14center="#ffffff";
                                                            $fill14slice1="#ffffff";
                                                            $fill14slice2="#ffffff";
                                                            $fill14slice3="#ffffff";
                                                            $fill14slice4="#ffffff";
                                                            $pa="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill14center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill14center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill14center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill14center="url(#pattern-stripe14)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill14slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill14slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill14slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill14slice1="url(#pattern-stripe14)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill14slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill14slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill14slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill14slice3="url(#pattern-stripe14)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill14slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill14slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill14slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill14slice4="url(#pattern-stripe14)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill14slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill14slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill14slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill14slice2="url(#pattern-stripe14)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe14" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill14slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill14slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill14slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill14slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill14center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">14</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=13;
                                                            $fill13center="#ffffff";
                                                            $fill13slice1="#ffffff";
                                                            $fill13slice2="#ffffff";
                                                            $fill13slice3="#ffffff";
                                                            $fill13slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill13center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill13center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill13center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill13center="url(#pattern-stripe13)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill13slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill13slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill13slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill13slice1="url(#pattern-stripe13)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill13slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill13slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill13slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill13slice3="url(#pattern-stripe13)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill13slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill13slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill13slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill13slice4="url(#pattern-stripe13)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill13slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill13slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill13slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill13slice2="url(#pattern-stripe13)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe13" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill13slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill13slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill13slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill13slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill13center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">13</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=12;
                                                            $fill12center="#ffffff";
                                                            $fill12slice1="#ffffff";
                                                            $fill12slice2="#ffffff";
                                                            $fill12slice3="#ffffff";
                                                            $fill12slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill12center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill12center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill12center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill12center="url(#pattern-stripe12)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill12slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill12slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill12slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill12slice1="url(#pattern-stripe18)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill12slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill12slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill12slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill12slice3="url(#pattern-stripe12)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill12slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill12slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill12slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill12slice4="url(#pattern-stripe12)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill12slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill12slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill12slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill12slice2="url(#pattern-stripe12)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe12" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill12slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill12slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill12slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill12slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill12center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">12</a>
                                                        </td>
                                                        <td width="2%" align="center" style="border-right:1px solid black;">                                                            
                                                            <?php
                                                            $tid=11;
                                                            $fill11center="#ffffff";
                                                            $fill11slice1="#ffffff";
                                                            $fill11slice2="#ffffff";
                                                            $fill11slice3="#ffffff";
                                                            $fill11slice4="#ffffff";
                                                            $pat="white";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill11center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill11center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill11center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill11center="url(#pattern-stripe11)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill11slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill11slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill11slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill11slice1="url(#pattern-stripe11)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill11slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill11slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill11slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill11slice3="url(#pattern-stripe11)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill11slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill11slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill11slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill11slice4="url(#pattern-stripe11)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill11slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill11slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill11slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill11slice2="url(#pattern-stripe11)";
                                                                            $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // } 
                                                                                                                       
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe11" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill11slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill11slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill11slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill11slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill11center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">11</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=21;
                                                            $fill21center="#ffffff";
                                                            $fill21slice1="#ffffff";
                                                            $fill21slice2="#ffffff";
                                                            $fill21slice3="#ffffff";
                                                            $fill21slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill21center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill21center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill21center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill21center="url(#pattern-stripe21)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill21slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill21slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill21slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill21slice3="url(#pattern-stripe21)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill21slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill21slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill21slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill21slice1="url(#pattern-stripe21)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill21slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill21slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill21slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill21slice4="url(#pattern-stripe21)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill21slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill21slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill21slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill21slice2="url(#pattern-stripe21)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe21" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill21slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill21slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill21slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill21slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill21center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">21</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=22;
                                                            $fill22center="#ffffff";
                                                            $fill22slice1="#ffffff";
                                                            $fill22slice2="#ffffff";
                                                            $fill22slice3="#ffffff";
                                                            $fill22slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill22center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill22center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill22center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill22center="url(#pattern-stripe22)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill22slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill22slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill22slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill22slice3="url(#pattern-stripe22)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill22slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill22slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill22slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill22slice1="url(#pattern-stripe22)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill22slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill22slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill22slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill22slice4="url(#pattern-stripe22)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill22slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill22slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill22slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill22slice2="url(#pattern-stripe22)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe22" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill22slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill22slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill22slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill22slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill22center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">22</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=23;
                                                            $fill23center="#ffffff";
                                                            $fill23slice1="#ffffff";
                                                            $fill23slice2="#ffffff";
                                                            $fill23slice3="#ffffff";
                                                            $fill23slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill23center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill23center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill23center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill23center="url(#pattern-stripe23)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill23slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill23slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill23slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill23slice3="url(#pattern-stripe23)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill23slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill23slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill23slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill23slice1="url(#pattern-stripe23)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill23slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill23slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill23slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill23slice4="url(#pattern-stripe23)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill23slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill23slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill23slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill23slice2="url(#pattern-stripe23)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe23" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill23slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill23slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill23slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill23slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill23center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">23</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=24;
                                                            $fill24center="#ffffff";
                                                            $fill24slice1="#ffffff";
                                                            $fill24slice2="#ffffff";
                                                            $fill24slice3="#ffffff";
                                                            $fill24slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill24center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill24center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill24center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill24center="url(#pattern-stripe24)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill24slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill24slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill24slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill24slice3="url(#pattern-stripe24)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill24slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill24slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill24slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill24slice1="url(#pattern-stripe24)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill24slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill24slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill24slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill24slice4="url(#pattern-stripe24)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill24slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill24slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill24slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill24slice2="url(#pattern-stripe24)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe24" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill24slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill24slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill24slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill24slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill24center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">24</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=25;
                                                            $fill25center="#ffffff";
                                                            $fill25slice1="#ffffff";
                                                            $fill25slice2="#ffffff";
                                                            $fill25slice3="#ffffff";
                                                            $fill25slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill25center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill25center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill25center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill25center="url(#pattern-stripe25)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill25slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill25slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill25slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill25slice3="url(#pattern-stripe25)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill25slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill25slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill25slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill25slice1="url(#pattern-stripe25)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill25slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill25slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill25slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill25slice4="url(#pattern-stripe25)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill25slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill25slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill25slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill25slice2="url(#pattern-stripe25)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe25" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill25slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill25slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill25slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill25slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill25center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">25</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=26;
                                                            $fill26center="#ffffff";
                                                            $fill26slice1="#ffffff";
                                                            $fill26slice2="#ffffff";
                                                            $fill26slice3="#ffffff";
                                                            $fill26slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill26center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill26center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill26center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill26center="url(#pattern-stripe26)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill26slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill26slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill26slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill26slice3="url(#pattern-stripe26)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill26slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill26slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill26slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill26slice1="url(#pattern-stripe26)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill26slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill26slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill26slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill26slice4="url(#pattern-stripe26)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill26slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill26slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill26slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill26slice2="url(#pattern-stripe26)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe26" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill26slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill26slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill26slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill26slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill26center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">26</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=27;
                                                            $fill27center="#ffffff";
                                                            $fill27slice1="#ffffff";
                                                            $fill27slice2="#ffffff";
                                                            $fill27slice3="#ffffff";
                                                            $fill27slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill27center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill27center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill27center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill27center="url(#pattern-stripe27)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill27slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill27slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill27slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill27slice3="url(#pattern-stripe27)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill27slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill27slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill27slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill27slice1="url(#pattern-stripe27)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill27slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill27slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill27slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill27slice4="url(#pattern-stripe27)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill27slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill27slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill27slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill27slice2="url(#pattern-stripe27)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe27" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill27slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill27slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill27slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill27slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill27center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">27</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=28;
                                                            $fill28center="#ffffff";
                                                            $fill28slice1="#ffffff";
                                                            $fill28slice2="#ffffff";
                                                            $fill28slice3="#ffffff";
                                                            $fill28slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill28center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill28center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill28center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill28center="url(#pattern-stripe28)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill28slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill28slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill28slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill28slice3="url(#pattern-stripe28)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill28slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill28slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill28slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill28slice1="url(#pattern-stripe28)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill28slice4="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill28slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill28slice4="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill28slice4="url(#pattern-stripe28)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill28slice2="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill28slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill28slice2="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill28slice2="url(#pattern-stripe28)";
                                                                            $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }   
                                                                                                                     
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe28" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill28slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill28slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill28slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill28slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill28center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">28</a>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=48;
                                                            $fill48center="#ffffff";
                                                            $fill48slice1="#ffffff";
                                                            $fill48slice2="#ffffff";
                                                            $fill48slice3="#ffffff";
                                                            $fill48slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill48center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill48center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill48center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill48center="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill48slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill48slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill48slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill48slice1="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill48slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill48slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill48slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill48slice3="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill48slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill48slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill48slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill48slice2="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill48slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill48slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill48slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill48slice4="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">48</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe48" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill48slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill48slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill48slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill48slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill48center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=47;
                                                            $fill47center="#ffffff";
                                                            $fill47slice1="#ffffff";
                                                            $fill47slice2="#ffffff";
                                                            $fill47slice3="#ffffff";
                                                            $fill47slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill47center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill47center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill47center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill47center="url(#pattern-stripe47)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill47slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill47slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill47slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill47slice1="url(#pattern-stripe47)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill47slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill47slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill47slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill47slice3="url(#pattern-stripe47)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill47slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill47slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill47slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill47slice2="url(#pattern-stripe48)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill47slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill47slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill47slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill47slice4="url(#pattern-stripe47)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">47</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe47" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill47slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill47slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill47slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill47slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill47center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=46;
                                                            $fill46center="#ffffff";
                                                            $fill46slice1="#ffffff";
                                                            $fill46slice2="#ffffff";
                                                            $fill46slice3="#ffffff";
                                                            $fill46slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill46center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill46center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill46center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill46center="url(#pattern-stripe46)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill46slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill46slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill46slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill46slice1="url(#pattern-stripe46)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill46slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill46slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill46slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill46slice3="url(#pattern-stripe46)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill46slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill46slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill46slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill46slice2="url(#pattern-stripe46)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill46slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill46slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill46slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill46slice4="url(#pattern-stripe46)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">46</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe46" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill46slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill46slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill46slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill46slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill46center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=45;
                                                            $fill45center="#ffffff";
                                                            $fill45slice1="#ffffff";
                                                            $fill45slice2="#ffffff";
                                                            $fill45slice3="#ffffff";
                                                            $fill45slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill45center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill45center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill45center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill45center="url(#pattern-stripe45)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill45slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill45slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill45slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill45slice1="url(#pattern-stripe45)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill45slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill45slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill45slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill45slice3="url(#pattern-stripe45)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill45slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill45slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill45slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill45slice2="url(#pattern-stripe45)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill45slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill45slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill45slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill45slice4="url(#pattern-stripe45)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">45</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe45" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill45slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill45slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill45slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill45slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill45center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=44;
                                                            $fill44center="#ffffff";
                                                            $fill44slice1="#ffffff";
                                                            $fill44slice2="#ffffff";
                                                            $fill44slice3="#ffffff";
                                                            $fill44slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill44center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill44center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill44center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill44center="url(#pattern-stripe44)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill44slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill44slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill44slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill44slice1="url(#pattern-stripe44)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill44slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill44slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill48slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill44slice3="url(#pattern-stripe44)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill44slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill44slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill44slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill44slice2="url(#pattern-stripe44)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill44slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill44slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill44slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill44slice4="url(#pattern-stripe44)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">44</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe44" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill44slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill44slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill44slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill44slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill44center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=43;
                                                            $fill43center="#ffffff";
                                                            $fill43slice1="#ffffff";
                                                            $fill43slice2="#ffffff";
                                                            $fill43slice3="#ffffff";
                                                            $fill43slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill43center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill43center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill43center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill43center="url(#pattern-stripe43)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill43slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill43slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill43slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill43slice1="url(#pattern-stripe43)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill43slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill43slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill43slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill43slice3="url(#pattern-stripe43)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill43slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill43slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill43slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill43slice2="url(#pattern-stripe43)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill43slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill43slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill43slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill43slice4="url(#pattern-stripe43)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">43</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe43" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill43slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill43slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill43slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill43slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill43center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=42;
                                                            $fill42center="#ffffff";
                                                            $fill42slice1="#ffffff";
                                                            $fill42slice2="#ffffff";
                                                            $fill42slice3="#ffffff";
                                                            $fill42slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill42center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill42center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill42center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill42center="url(#pattern-stripe42)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill42slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill42slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill42slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill42slice1="url(#pattern-stripe42)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill42slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill42slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill42slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill42slice3="url(#pattern-stripe42)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill42slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill42slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill42slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill42slice2="url(#pattern-stripe42)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill42slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill42slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill42slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill42slice4="url(#pattern-stripe42)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">42</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe42" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill42slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill42slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill42slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill42slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill42center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center" style="border-right:1px solid black;">
                                                            <?php
                                                            $tid=41;
                                                            $fill41center="#ffffff";
                                                            $fill41slice1="#ffffff";
                                                            $fill41slice2="#ffffff";
                                                            $fill41slice3="#ffffff";
                                                            $fill41slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill41center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill41center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill41center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill41center="url(#pattern-stripe41)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill41slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill41slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill41slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill41slice1="url(#pattern-stripe41)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill41slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill41slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill41slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill41slice3="url(#pattern-stripe41)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill41slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill41slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill41slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill41slice2="url(#pattern-stripe41)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill41slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill41slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill41slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill41slice4="url(#pattern-stripe41)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">41</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe41" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill41slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill41slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill41slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill41slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill41center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=31;
                                                            $fill31center="#ffffff";
                                                            $fill31slice1="#ffffff";
                                                            $fill31slice2="#ffffff";
                                                            $fill31slice3="#ffffff";
                                                            $fill31slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill31center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill31center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill31center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill31center="url(#pattern-stripe31)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill31slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill31slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill31slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill31slice3="url(#pattern-stripe31)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill31slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill31slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill31slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill31slice1="url(#pattern-stripe31)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill31slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill31slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill31slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill31slice2="url(#pattern-stripe31)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill31slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill31slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill31slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill31slice4="url(#pattern-stripe31)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">31</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe31" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill31slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill31slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill31slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill31slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill31center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=32;
                                                            $fill32center="#ffffff";
                                                            $fill32slice1="#ffffff";
                                                            $fill32slice2="#ffffff";
                                                            $fill32slice3="#ffffff";
                                                            $fill32slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill32center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill32center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill32center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill32center="url(#pattern-stripe32)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill32slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill32slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill32slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill32slice3="url(#pattern-stripe32)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill32slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill32slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill32slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill32slice1="url(#pattern-stripe32)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill32slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill32slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill32slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill32slice2="url(#pattern-stripe32)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill32slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill32slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill32slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill32slice4="url(#pattern-stripe32)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">32</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe32" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill32slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill32slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill32slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill32slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill32center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=33;
                                                            $fill33center="#ffffff";
                                                            $fill33slice1="#ffffff";
                                                            $fill33slice2="#ffffff";
                                                            $fill33slice3="#ffffff";
                                                            $fill33slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill33center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill33center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill33center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill33center="url(#pattern-stripe33)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill33slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill33slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill33slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill33slice3="url(#pattern-stripe33)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill33slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill33slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill33slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill33slice1="url(#pattern-stripe33)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill33slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill33slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill33slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill33slice2="url(#pattern-stripe33)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill33slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill33slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill33slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill33slice4="url(#pattern-stripe33)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">33</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe33" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill33slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill33slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill33slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill33slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill33center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=34;
                                                            $fill34center="#ffffff";
                                                            $fill34slice1="#ffffff";
                                                            $fill34slice2="#ffffff";
                                                            $fill34slice3="#ffffff";
                                                            $fill34slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill34center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill34center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill34center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill34center="url(#pattern-stripe34)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill34slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill34slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill34slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill34slice3="url(#pattern-stripe34)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill34slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill34slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill34slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill34slice1="url(#pattern-stripe34)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill34slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill34slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill34slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill34slice2="url(#pattern-stripe34)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill34slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill34slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill34slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill34slice4="url(#pattern-stripe34)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">34</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe34" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill34slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill34slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill34slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill34slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill34center;?>"/>
                                                                </svg>
                                                            </a>
                                                            
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=35;
                                                            $fill35center="#ffffff";
                                                            $fill35slice1="#ffffff";
                                                            $fill35slice2="#ffffff";
                                                            $fill35slice3="#ffffff";
                                                            $fill35slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill35center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill35center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill35center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill35center="url(#pattern-stripe35)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill35slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill35slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill35slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill35slice3="url(#pattern-stripe35)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill35slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill35slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill35slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill35slice1="url(#pattern-stripe35)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill35slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill35slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill35slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill35slice2="url(#pattern-stripe35)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill35slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill35slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill35slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill35slice4="url(#pattern-stripe35)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">35</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe35" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill35slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill35slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill35slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill35slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill35center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=36;
                                                            $fill36center="#ffffff";
                                                            $fill36slice1="#ffffff";
                                                            $fill36slice2="#ffffff";
                                                            $fill36slice3="#ffffff";
                                                            $fill36slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill36center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill36center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill36center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill36center="url(#pattern-stripe36)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill36slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill36slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill36slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill36slice3="url(#pattern-stripe36)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill36slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill36slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill36slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill36slice1="url(#pattern-stripe36)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill36slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill36slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill36slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill36slice2="url(#pattern-stripe36)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill36slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill36slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill36slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill36slice4="url(#pattern-stripe36)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">36</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe36" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill36slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill36slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill36slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill36slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill36center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=37;
                                                            $fill37center="#ffffff";
                                                            $fill37slice1="#ffffff";
                                                            $fill37slice2="#ffffff";
                                                            $fill37slice3="#ffffff";
                                                            $fill37slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill37center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill37center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill37center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill37center="url(#pattern-stripe37)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill37slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill37slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill37slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill37slice3="url(#pattern-stripe37)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill37slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill37slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill37slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill37slice1="url(#pattern-stripe37)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill37slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill37slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill37slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill37slice2="url(#pattern-stripe37)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill37slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill37slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill37slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill37slice4="url(#pattern-stripe37)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">37</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe37" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill37slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill37slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill37slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill37slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill37center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=38;
                                                            $fill38center="#ffffff";
                                                            $fill38slice1="#ffffff";
                                                            $fill38slice2="#ffffff";
                                                            $fill38slice3="#ffffff";
                                                            $fill38slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill38center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill38center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill38center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill38center="url(#pattern-stripe38)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill38slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill38slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill38slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill38slice3="url(#pattern-stripe38)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill38slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill38slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill38slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill38slice1="url(#pattern-stripe38)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill38slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill38slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill38slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill38slice2="url(#pattern-stripe38)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill38slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill38slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill38slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill38slice4="url(#pattern-stripe38)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $id="";
                                                            //     $remark="&check;";    
                                                            // }                                                            
                                                            
                                                            ?>                                                             
                                                            <a style="font-size:9px;">38</a>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe38" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill38slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill38slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill38slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill38slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill38center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br><small style="font-size:8px;"><?=$remark;?></small>
                                                            <br><small style="font-size:8px;"><?=$treatment;?></small>
                                                            
                                                            
                                                            
                                                        </td>
                                                    </tr>
                                                                                                      
                                                   
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    
                                                    
                                                    <tr>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=85;
                                                            $fill85center="#ffffff";
                                                            $fill85slice1="#ffffff";
                                                            $fill85slice2="#ffffff";
                                                            $fill85slice3="#ffffff";
                                                            $fill85slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill85center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill85center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill85center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill85center="url(#pattern-stripe85)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill85slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill85slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill85slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill85slice1="url(#pattern-stripe85)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill85slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill85slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill85slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill85slice3="url(#pattern-stripe85)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill85slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill85slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill85slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill85slice2="url(#pattern-stripe85)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill85slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill85slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill85slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill85slice4="url(#pattern-stripe85)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }    

                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe85" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill85slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill85slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill85slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill85slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill85center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">85</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=84;
                                                            $fill84center="#ffffff";
                                                            $fill84slice1="#ffffff";
                                                            $fill84slice2="#ffffff";
                                                            $fill84slice3="#ffffff";
                                                            $fill84slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill84center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill84center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill84center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill84center="url(#pattern-stripe84)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill84slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill84slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill84slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill84slice1="url(#pattern-stripe84)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill84slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill84slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill84slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill84slice3="url(#pattern-stripe84)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill84slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill84slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill84slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill84slice2="url(#pattern-stripe84)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill84slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill84slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill84slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill84slice4="url(#pattern-stripe84)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }    
                                                           
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe84" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill84slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill84slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill84slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill84slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill84center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">84</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=83;
                                                            $fill83center="#ffffff";
                                                            $fill83slice1="#ffffff";
                                                            $fill83slice2="#ffffff";
                                                            $fill83slice3="#ffffff";
                                                            $fill83slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill83center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill83center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill83center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill83center="url(#pattern-stripe83)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill83slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill83slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill83slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill83slice1="url(#pattern-stripe83)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill83slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill83slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill83slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill83slice3="url(#pattern-stripe83)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill83slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill83slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill83slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill83slice2="url(#pattern-stripe83)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill83slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill83slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill83slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill83slice4="url(#pattern-stripe83)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }    
                                                                                                                   
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe83" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill83slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill83slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill83slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill83slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill83center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">83</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=82;
                                                            $fill82center="#ffffff";
                                                            $fill82slice1="#ffffff";
                                                            $fill82slice2="#ffffff";
                                                            $fill82slice3="#ffffff";
                                                            $fill82slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill82center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill82center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill82center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill82center="url(#pattern-stripe82)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill82slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill82slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill82slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill82slice1="url(#pattern-stripe82)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill82slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill82slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill82slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill82slice3="url(#pattern-stripe82)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill82slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill82slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill82slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill82slice2="url(#pattern-stripe82)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill82slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill82slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill82slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill82slice4="url(#pattern-stripe82)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }    
                                                                                                                    
                                                            
                                                            ?>
                                                            
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe82" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill82slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill82slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill82slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill82slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill82center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">82</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=81;
                                                            $fill81center="#ffffff";
                                                            $fill81slice1="#ffffff";
                                                            $fill81slice2="#ffffff";
                                                            $fill81slice3="#ffffff";
                                                            $fill81slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill81center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill81center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill81center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill81center="url(#pattern-stripe81)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill81slice1="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill81slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill81slice1="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill81slice1="url(#pattern-stripe81)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill81slice3="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill81slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill81slice3="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill81slice3="url(#pattern-stripe81)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill81slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill81slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill81slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill81slice2="url(#pattern-stripe81)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill81slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill81slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill81slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill81slice4="url(#pattern-stripe81)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }    
                                                                                                                 
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe81" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill81slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill81slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill81slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill81slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill81center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">81</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=71;
                                                            $fill71center="#ffffff";
                                                            $fill71slice1="#ffffff";
                                                            $fill71slice2="#ffffff";
                                                            $fill71slice3="#ffffff";
                                                            $fill71slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill71center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill71center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill71center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill71center="url(#pattern-stripe71)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill71slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill71slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill71slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill71slice3="url(#pattern-stripe71)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill71slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill71slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill71slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill71slice1="url(#pattern-stripe71)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill71slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill71slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill71slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill71slice2="url(#pattern-stripe71)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill71slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill71slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill71slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill71slice4="url(#pattern-stripe71)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }
                                                                                                                        
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe71" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill71slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill71slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill71slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill71slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill71center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">71</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=72;
                                                            $fill72center="#ffffff";
                                                            $fill72slice1="#ffffff";
                                                            $fill72slice2="#ffffff";
                                                            $fill72slice3="#ffffff";
                                                            $fill72slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill72center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill72center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill72center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill72center="url(#pattern-stripe72)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill72slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill72slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill72slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill72slice3="url(#pattern-stripe72)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill72slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill72slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill72slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill72slice1="url(#pattern-stripe72)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill72slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill72slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill72slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill72slice2="url(#pattern-stripe72)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill72slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill72slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill72slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill72slice4="url(#pattern-stripe72)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }
                                                                                                                        
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe72" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill72slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill72slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill72slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill72slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill72center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">72</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=73;
                                                            $fill73center="#ffffff";
                                                            $fill73slice1="#ffffff";
                                                            $fill73slice2="#ffffff";
                                                            $fill73slice3="#ffffff";
                                                            $fill73slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill73center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill73center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill73center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill73center="url(#pattern-stripe73)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill73slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill73slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill73slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill73slice3="url(#pattern-stripe73)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill73slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill73slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill73slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill73slice1="url(#pattern-stripe73)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill73slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill73slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill73slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill73slice2="url(#pattern-stripe73)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill73slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill73slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill73slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill73slice4="url(#pattern-stripe73)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }
                                                                                                                        
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe73" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill73slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill73slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill73slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill73slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill73center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">73</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=74;
                                                            $fill74center="#ffffff";
                                                            $fill74slice1="#ffffff";
                                                            $fill74slice2="#ffffff";
                                                            $fill74slice3="#ffffff";
                                                            $fill74slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill74center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill74center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill74center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill74center="url(#pattern-stripe74)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill74slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill74slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill74slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill74slice3="url(#pattern-stripe74)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill74slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill74slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill74slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill74slice1="url(#pattern-stripe74)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill74slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill74slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill74slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill74slice2="url(#pattern-stripe74)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill74slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill74slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill74slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill74slice4="url(#pattern-stripe74)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }
                                                                                                                        
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe74" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill74slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill74slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill74slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill74slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill74center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">74</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=75;
                                                            $fill75center="#ffffff";
                                                            $fill75slice1="#ffffff";
                                                            $fill75slice2="#ffffff";
                                                            $fill75slice3="#ffffff";
                                                            $fill75slice4="#ffffff";
                                                            $treatment="";
                                                            $surgery="";
                                                            // if(count($chart)>0){                                                                
                                                            //     foreach($chart as $row){
                                                            $row=$this->Clinic_model->getSingleChart($item['caseno'],$customer_id,$tid);
                                                                if($row){
                                                                    $treatment=$row['treatment'];
                                                                    $surgery=$row['surgery'];
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1"){                                                                        
                                                                        $fill75center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){                                                                        
                                                                        $fill75center="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){
                                                                        $fill75center="#908d94";
                                                                    }
                                                                    if($row['recur_occ']=="1"){                                                                        
                                                                        $fill75center="url(#pattern-stripe75)";
                                                                            $pat="red";
                                                                    }

                                                                    if($row['caries_mes']=="1"){                                                                        
                                                                        $fill75slice3="red";
                                                                    }
                                                                    if($row['comp_mes']=="1"){                                                                        
                                                                        $fill75slice3="#3a018a";
                                                                    }
                                                                    if($row['amal_mes']=="1"){
                                                                        $fill75slice3="#908d94";
                                                                    }
                                                                    if($row['recur_mes']=="1"){                                                                        
                                                                        $fill75slice3="url(#pattern-stripe75)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_dis']=="1"){                                                                        
                                                                        $fill75slice1="red";
                                                                    }
                                                                    if($row['comp_dis']=="1"){                                                                        
                                                                        $fill75slice1="#3a018a";
                                                                    }
                                                                    if($row['amal_dis']=="1"){
                                                                        $fill75slice1="#908d94";
                                                                    }
                                                                    if($row['recur_dis']=="1"){                                                                        
                                                                        $fill75slice1="url(#pattern-stripe75)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_buc']=="1"){                                                                        
                                                                        $fill75slice2="red";
                                                                    }
                                                                    if($row['comp_buc']=="1"){                                                                        
                                                                        $fill75slice2="#3a018a";
                                                                    }
                                                                    if($row['amal_buc']=="1"){
                                                                        $fill75slice2="#908d94";
                                                                    }
                                                                    if($row['recur_buc']=="1"){                                                                        
                                                                        $fill75slice2="url(#pattern-stripe75)";
                                                                            $pat="red";
                                                                    }

                                                                     if($row['caries_ling']=="1"){                                                                        
                                                                        $fill75slice4="red";
                                                                    }
                                                                    if($row['comp_ling']=="1"){                                                                        
                                                                        $fill75slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_ling']=="1"){
                                                                        $fill75slice4="#908d94";
                                                                    }
                                                                    if($row['recur_ling']=="1"){                                                                        
                                                                        $fill75slice4="url(#pattern-stripe75)";
                                                                            $pat="red";
                                                                    }
                                                                                                                                                                                                       
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            // }
                                                            // }else{
                                                            //     $remark="&check;";    
                                                            // }
                                                                                                                        
                                                            
                                                            ?>
                                                            <small style="font-size:8px;"><?=$treatment;?></small><br>
                                                            <small style="font-size:8px;"><?=$remark;?></small><br>
                                                            
                                                                <svg viewBox="0 0 400 400">
                                                                    <pattern id="pattern-stripe75" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path class="slice" d="M200,200 L305,95 A150,150 0 0,1 305,305 Z" fill="<?=$fill75slice1;?>"/>
                                                                    <path class="slice" d="M200,200 L305,305 A150,150 0 0,1 95,305 Z" fill="<?=$fill75slice2;?>"/>
                                                                    <path class="slice" d="M200,200 L95,305 A150,150 0 0,1 95,95 Z" fill="<?=$fill75slice3;?>"/>
                                                                    <path class="slice" d="M200,200 L95,95 A150,150 0 0,1 305,95 Z" fill="<?=$fill75slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle class="center" cx="200" cy="200" r="60" fill="<?=$fill75center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a style="font-size:9px;">75</a>
                                                        </td>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>  
<br><br>
                                            <table width="100%" border="0" style="font-size:11px; font-family:Arial;">
                                                <tr>
                                                    <td valign="top" width="8%"><b>Legend:</b></td>
                                                    <td valign="top">
                                                        <b>Condition</b><br>
                                                        <b>&check;</b> - Present Teeth<br>
                                                        <b>D</b> - Decayed (Carries indicated for Filing)<br>
                                                        <b>M</b> - Missing due to caries<br>
                                                        <b>Mo</b> - Missing due to Other Causes<br>
                                                        <b>Im</b> - Impacted Tooth<br>
                                                        <b>Sp</b> - Supernumerary Tooth<br>
                                                        <b>Rf</b> - Root Fragment<br>
                                                        <b>Un</b> - Unerupted<br>                                                        
                                                        <b>Ex</b> - For Extraction<br>
                                                    </td>
                                                    <td valign="top">
                                                        <b>Restorations & Prosthetics</b><br>
                                                        <b>Am</b> - Amalgam Filling<br>
                                                        <b>Co</b> - Composite Filling<br>
                                                        <b>JC</b> - Jacket Crown<br>
                                                        <b>Ab</b> - Abutment<br>
                                                        <b>Att</b> - Attachment<br>
                                                        <b>P</b> - Pontic<br>
                                                        <b>In</b> - Inlay<br>
                                                        <b>Imp</b> - Implant<br>                                                        
                                                        <b>S</b> - Sealant<br>
                                                        <b>RD</b> - Removable Denture<br>
                                                    </td>
                                                    <td valign="top">
                                                        <b>Surgery</b><br>
                                                        <b>X</b> - Extraction due to Caries<br>
                                                        <b>Xo</b> - Extraction due to Other Causes<br><br><br>
                                                        <b>X-ray taken:</b><br>
                                                        &nbsp;&nbsp;&nbsp;___Periapical (Tth No.:____)<br>
                                                        &nbsp;&nbsp;&nbsp;___Panoramic<br>
                                                        &nbsp;&nbsp;&nbsp;___Cephalometric<br>
                                                        &nbsp;&nbsp;&nbsp;___Occlusal (Upper/Lower)<br>
                                                        &nbsp;&nbsp;&nbsp;___Others:____________
                                                    </td>
                                                </tr>
                                            </table>
                                            <br><br>
    <table width="100%" border="0" style="font-size:14px;">
    <tr>
        <td width="20%">
    Service/s Rendered:
</td><td style="border-bottom:1px solid black;">
        <?php
        foreach($services as $row){
            echo $row['service_description'].",";
        }
        ?></td>        
    </table>
    <?php
        $recommend="";
        $days="";
        if($item){
           $recommend=$item['recommendation'];
           $days=$item['no_days_rest'];           
        }
        ?>
    <p align="justify" style="font-size:14px; font-family:Arial;">
        Recommendation/s: <u><?=$recommend;?></u>
    </p>
    <p align="justify" style="font-size:14px; font-family:Arial;">
        This is to certify that <b><u><?=$patient['firstname'];?> <?=$patient['lastname'];?></u></b> has been in my clinic today for the said procedures, needing <b><u><?=$days;?></u></b> days of rest.
    </p>
    <p align="justify" style="font-size:14px; font-family:Arial;">
        This is beeing issued upon the request of the patient for whatever purpose it may serve excluding legal matters.
    </p>
    <div style="position:fixed; bottom:30;right:20;">
    <table width="100%" border="0">
        <tr>
            <td style="border-bottom:1px solid black;"></td>
        </tr>
        <tr>
            
            <td><b>Dr. Clark Kent A. Hermosilla, DMD</b></td>
        </tr>
        <tr>
            
            <td align="center">License No.: <u>0058758</u></td>
        </tr>        
    </table>
    </div>
</div>
    </center>