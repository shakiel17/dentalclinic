
<!-- Begin Content -->
                <div class="content-inner profile">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
                                <div class="d-flex align-items-center">
                                    <h2 class="page-header-title"><?=$title;?></h2>
                                </div>
                            </div>
                        </div>
                        <?php
                        if($this->session->success){
                        ?>
                        <div class="alert alert-success" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->success;?></strong>
                        </div>
                        <?php
                        }
                        ?>
                        <?php
                        if($this->session->failed){
                        ?>
                        <div class="alert alert-danger" role="alert">
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                            <strong><?=$this->session->failed;?></strong>
                        </div>
                        <?php
                        }

                        // if($item['status']=="discharged"){
                        //     $dc="style='display:none;'";
                        // }else{
                        //     $dc="";
                        // }
                        
                        ?>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-xl-3">
                                <!-- Begin Widget -->
                                <div class="widget has-shadow">
                                    <div class="widget-body">
                                        
                                        <h4 class="text-center mt-1 mb-1"><b>TOOTH CHART LEGEND</b></h4>
                                        <div class="em-separator separator-dashed"></div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);">&check; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OK</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">M &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Missing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">RF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Root Fragment</a>
                                            </li>                                            
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0);"><img src="<?=base_url('design/assets/images/implantlogo.jpg');?>" width="15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Implant</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)">IMP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Impacted</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:red; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Caries</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#3a018a; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Composite Filling</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#908d94; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amalgam Filling</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #fc1447, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recurrent Caries</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#fff56b; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Porcelain Fused to Metal <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crown (PFM)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#d6cc3e; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Crown (CER)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background-color:#FFD700; width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gold Crown (GC)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #000000, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal Crown (MC)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #d6cc3e, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ceramic Inlay/Onlay <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(CER I/O)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #FFD700, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gold Inlay/Onlay (G I/O)</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="javascript:void(0)"><div style="background: repeating-linear-gradient(-180deg, #000000, #ffffff 1px, white 1px, white 2px); width:20px; float:left;">&nbsp;</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Metal Inlay/Onlay (M I/O)</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Widget -->
                            </div>
                            <div class="col-xl-9">                               
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <table width="100%" border="0">
                                            <tr>
                                                <td width="20%"><h4>Tooth Chart</h4></td>
                                            </tr>
                                        </table>                                        
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table width="100%" cellspacing="0">
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
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="55"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill55center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1"){ 
                                                                        $fill55slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill55slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill55slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill55slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"){ 
                                                                        $fill55slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill55slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill55slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1" || $row['amal_ling']=="1"){ 
                                                                        $fill55slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill55slice1="url(#pattern-stripe)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill55slice2="url(#pattern-stripe)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill55slice3="url(#pattern-stripe)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill55slice4="url(#pattern-stripe)";
                                                                        $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">55</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill55slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill55slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill55slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill55slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill55center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=54;
                                                            $fill54center="#ffffff";
                                                            $fill54slice1="#ffffff";
                                                            $fill54slice2="#ffffff";
                                                            $fill54slice3="#ffffff";
                                                            $fill54slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="54"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill54center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill54slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill54slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill54slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill54slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill54slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill54slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill54slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill54slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill54slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill54slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill54slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill54slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                     
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">54</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill54slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill54slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill54slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill54slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill54center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=53;
                                                            $fill53center="#ffffff";
                                                            $fill53slice1="#ffffff";
                                                            $fill53slice2="#ffffff";
                                                            $fill53slice3="#ffffff";
                                                            $fill53slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="53"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill53center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill53slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill53slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill53slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill53slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill53slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill53slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill53slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill53slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill53slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill53slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill53slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill53slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">53</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill53slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill53slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill53slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill53slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill53center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=52;
                                                            $fill52center="#ffffff";
                                                            $fill52slice1="#ffffff";
                                                            $fill52slice2="#ffffff";
                                                            $fill52slice3="#ffffff";
                                                            $fill52slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="52"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill52center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill52slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill52slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill52slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill52slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill52slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill52slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill52slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill52slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill52slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill52slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill52slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill52slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                   
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">52</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill52slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill52slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill52slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill52slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill52center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=51;
                                                            $fill51center="#ffffff";
                                                            $fill51slice1="#ffffff";
                                                            $fill51slice2="#ffffff";
                                                            $fill51slice3="#ffffff";
                                                            $fill51slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="51"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill51center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill51slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill51slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill51slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill51slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill51slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill51slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill51slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill51slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill51slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill51slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill51slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill51slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                                                                                                                                                                                                                     
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }   
                                                            }                                                         
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                        
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">51</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill51slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill51slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill51slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill51slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill51center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=61;
                                                            $fill61center="#ffffff";
                                                            $fill61slice1="#ffffff";
                                                            $fill61slice2="#ffffff";
                                                            $fill61slice3="#ffffff";
                                                            $fill61slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="61"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill61center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill61slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill61slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill61slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill61slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill61slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill61slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill61slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill61slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill61slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill61slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill61slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill61slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">61</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe61" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill61slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill61slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill61slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill61slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill61center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=62;
                                                            $fill62center="#ffffff";
                                                            $fill62slice1="#ffffff";
                                                            $fill62slice2="#ffffff";
                                                            $fill62slice3="#ffffff";
                                                            $fill62slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="62"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill62center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill62slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill62slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill62slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill62slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill62slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill62slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill62slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill62slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill62slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill62slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill62slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill62slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">62</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill62slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill62slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill62slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill62slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill62center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=63;
                                                            $fill63center="#ffffff";
                                                            $fill63slice1="#ffffff";
                                                            $fill63slice2="#ffffff";
                                                            $fill63slice3="#ffffff";
                                                            $fill63slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="63"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill63center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill63slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill51slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill63slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill63slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill63slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill63slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill63slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill63slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill63slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill63slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill63slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill63slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">63</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill63slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill63slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill63slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill63slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill63center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=64;
                                                            $fill64center="#ffffff";
                                                            $fill64slice1="#ffffff";
                                                            $fill64slice2="#ffffff";
                                                            $fill64slice3="#ffffff";
                                                            $fill64slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="64"){
                                                                   $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill64center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill64slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill64slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill64slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill64slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill64slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill64slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill64slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill64slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill64slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill64slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill64slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill64slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                     
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">64</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill64slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill64slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill64slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill64slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill64center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            $tid=65;
                                                            $fill65center="#ffffff";
                                                            $fill65slice1="#ffffff";
                                                            $fill65slice2="#ffffff";
                                                            $fill65slice3="#ffffff";
                                                            $fill65slice4="#ffffff";
                                                            if(count($chart)>0){                                                                
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="65"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill65center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill65slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill65slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill65slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill65slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill65slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill65slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill65slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill65slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill65slice1="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill65slice2="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill65slice3="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill65slice4="url(#pattern-stripe61)";
                                                                        $pat="red";
                                                                    }                                                                                                                                    
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $id="";
                                                                $remark="&check;";    
                                                            }                                                            
                                                            
                                                            ?>                                                             
                                                            <a class="btn btn-info btn-sm text-white">65</a>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill65slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill65slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill65slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill65slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill65center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?=$remark;?>
                                                        </td>
                                                        <td width="2%" align="center">

                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                        <td width="2%" align="center">
                                                            
                                                        </td>
                                                    </tr><tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
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
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="18"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill18center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill18slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill18slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill18slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill18slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill18slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill18slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill18slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill18slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill18slice1="url(#pattern-stripe18)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill18slice2="url(#pattern-stripe18)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill18slice3="url(#pattern-stripe18)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill18slice4="url(#pattern-stripe18)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe18" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill18slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill18slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill18slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill18slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill18center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">18</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=17;
                                                            $fill17center="#ffffff";
                                                            $fill17slice1="#ffffff";
                                                            $fill17slice2="#ffffff";
                                                            $fill17slice3="#ffffff";
                                                            $fill17slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="17"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill17center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill17slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill17slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill17slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill17slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill17slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill17slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill17slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill17slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill17slice1="url(#pattern-stripe17)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill17slice2="url(#pattern-stripe17)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill17slice3="url(#pattern-stripe17)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill17slice4="url(#pattern-stripe17)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe17" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill17slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill17slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill17slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill17slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill17center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">17</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=16;
                                                            $fill16center="#ffffff";
                                                            $fill16slice1="#ffffff";
                                                            $fill16slice2="#ffffff";
                                                            $fill16slice3="#ffffff";
                                                            $fill16slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="18"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill16center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill16slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill16slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill16slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill16slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill16slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill16slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill16slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill16slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill16slice1="url(#pattern-stripe16)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill16slice2="url(#pattern-stripe16)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill16slice3="url(#pattern-stripe16)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill16slice4="url(#pattern-stripe16)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe16" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill16slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill16slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill16slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill16slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill16center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">16</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=15;
                                                            $fill15center="#ffffff";
                                                            $fill15slice1="#ffffff";
                                                            $fill15slice2="#ffffff";
                                                            $fill15slice3="#ffffff";
                                                            $fill15slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="15"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill15center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill15slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill15slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill15slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill15slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill15slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill15slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill15slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill15slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill15slice1="url(#pattern-stripe15)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill15slice2="url(#pattern-stripe15)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill15slice3="url(#pattern-stripe15)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill15slice4="url(#pattern-stripe15)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe15" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill15slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill15slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill15slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill15slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill15center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">15</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=14;
                                                            $fill14center="#ffffff";
                                                            $fill14slice1="#ffffff";
                                                            $fill14slice2="#ffffff";
                                                            $fill14slice3="#ffffff";
                                                            $fill14slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="14"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill14center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill14slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill14slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill14slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill14slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill14slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill14slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill14slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill14slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill14slice1="url(#pattern-stripe14)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill14slice2="url(#pattern-stripe14)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill14slice3="url(#pattern-stripe14)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill14slice4="url(#pattern-stripe14)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe14" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill14slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill14slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill14slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill14slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill14center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">14</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=13;
                                                            $fill13center="#ffffff";
                                                            $fill13slice1="#ffffff";
                                                            $fill13slice2="#ffffff";
                                                            $fill13slice3="#ffffff";
                                                            $fill13slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="13"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill13center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill13slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill13slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill13slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill13slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill13slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill13slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill18slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill13slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill13slice1="url(#pattern-stripe13)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill13slice2="url(#pattern-stripe13)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill13slice3="url(#pattern-stripe13)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill13slice4="url(#pattern-stripe13)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe13" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill13slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill13slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill18slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill13slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill13center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">13</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=12;
                                                            $fill12center="#ffffff";
                                                            $fill12slice1="#ffffff";
                                                            $fill12slice2="#ffffff";
                                                            $fill12slice3="#ffffff";
                                                            $fill12slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="12"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill12center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill12slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill12slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill12slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill12slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill12slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill12slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill12slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill12slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill12slice1="url(#pattern-stripe18)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill12slice2="url(#pattern-stripe12)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill12slice3="url(#pattern-stripe12)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill12slice4="url(#pattern-stripe12)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe12" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill12slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill12slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill12slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill12slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill12center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">12</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=11;
                                                            $fill11center="#ffffff";
                                                            $fill11slice1="#ffffff";
                                                            $fill11slice2="#ffffff";
                                                            $fill11slice3="#ffffff";
                                                            $fill11slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="11"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill11center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill11slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill11slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill11slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill11slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill11slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill11slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill11slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill11slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill11slice1="url(#pattern-1)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill11slice2="url(#pattern-stripe11)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill11slice3="url(#pattern-stripe11)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill11slice4="url(#pattern-stripe11)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe11" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill11slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill11slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill11slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill11slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill11center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">11</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=21;
                                                            $fill21center="#ffffff";
                                                            $fill21slice1="#ffffff";
                                                            $fill21slice2="#ffffff";
                                                            $fill21slice3="#ffffff";
                                                            $fill21slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="21"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill21center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill21slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill21slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill21slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill21slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill21slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill21slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill21slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill21slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill21slice1="url(#pattern-stripe21)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill21slice2="url(#pattern-stripe21)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill21slice3="url(#pattern-stripe21)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill21slice4="url(#pattern-stripe21)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe21" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill21slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill21slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill21slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill21slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill21center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">21</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=22;
                                                            $fill22center="#ffffff";
                                                            $fill22slice1="#ffffff";
                                                            $fill22slice2="#ffffff";
                                                            $fill22slice3="#ffffff";
                                                            $fill22slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="22"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill22center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill22slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill18slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill22slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill22slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill22slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill22slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill22slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill22slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill22slice1="url(#pattern-stripe22)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill22slice2="url(#pattern-stripe22)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill22slice3="url(#pattern-stripe22)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill22slice4="url(#pattern-stripe22)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe22" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill22slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill22slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill22slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill22slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill22center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">22</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=23;
                                                            $fill23center="#ffffff";
                                                            $fill23slice1="#ffffff";
                                                            $fill23slice2="#ffffff";
                                                            $fill23slice3="#ffffff";
                                                            $fill23slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="23"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill23center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill23slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill23slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill23slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill23slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill23slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill23slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill23slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill23slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill23slice1="url(#pattern-stripe23)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill23slice2="url(#pattern-stripe23)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill23slice3="url(#pattern-stripe23)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill23slice4="url(#pattern-stripe23)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe23" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill23slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill23slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill23slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill23slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill23center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">23</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=24;
                                                            $fill24center="#ffffff";
                                                            $fill24slice1="#ffffff";
                                                            $fill24slice2="#ffffff";
                                                            $fill24slice3="#ffffff";
                                                            $fill24slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="24"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill24center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill24slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill24slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill24slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill24slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill24slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill24slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill24slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill24slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill24slice1="url(#pattern-stripe24)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill24slice2="url(#pattern-stripe24)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill24slice3="url(#pattern-stripe24)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill24slice4="url(#pattern-stripe24)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe24" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill24slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill24slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill24slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill24slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill24center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">24</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=25;
                                                            $fill25center="#ffffff";
                                                            $fill25slice1="#ffffff";
                                                            $fill25slice2="#ffffff";
                                                            $fill25slice3="#ffffff";
                                                            $fill25slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="25"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill25center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill25slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill25slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill25slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill25slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill25slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill25slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill25slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill25slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill25slice1="url(#pattern-stripe25)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill25slice2="url(#pattern-stripe25)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill25slice3="url(#pattern-stripe25)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill25slice4="url(#pattern-stripe25)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe25" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill25slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill25slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill25slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill25slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill25center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">25</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=26;
                                                            $fill26center="#ffffff";
                                                            $fill26slice1="#ffffff";
                                                            $fill26slice2="#ffffff";
                                                            $fill26slice3="#ffffff";
                                                            $fill26slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="26"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill26center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill26slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill26slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill26slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill26slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill26slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill26slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill26slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill26slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill26slice1="url(#pattern-stripe26)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill26slice2="url(#pattern-stripe26)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill26slice3="url(#pattern-stripe26)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill26slice4="url(#pattern-stripe26)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe26" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill26slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill26slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill26slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill26slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill26center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">26</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=27;
                                                            $fill27center="#ffffff";
                                                            $fill27slice1="#ffffff";
                                                            $fill27slice2="#ffffff";
                                                            $fill27slice3="#ffffff";
                                                            $fill27slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="27"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill27center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill27slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill27slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill27slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill27slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill27slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill27slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill27slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill27slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill27slice1="url(#pattern-stripe27)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill27slice2="url(#pattern-stripe27)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill27slice3="url(#pattern-stripe27)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill27slice4="url(#pattern-stripe27)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe27" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill27slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill27slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill27slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill27slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill27center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">27</a>
                                                        </td>
                                                        <td width="2%" align="center">                                                            
                                                            <?php
                                                            $tid=28;
                                                            $fill28center="#ffffff";
                                                            $fill28slice1="#ffffff";
                                                            $fill28slice2="#ffffff";
                                                            $fill28slice3="#ffffff";
                                                            $fill28slice4="#ffffff";
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="28"){
                                                                    $id=$row['id'];                                                                    
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else if($row['remarks']=="IM"){
                                                                        $remark="<img src=".base_url('design/assets/images/implantlogo.jpg')." width='15'>";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                    if($row['caries_occ']=="1" || $row['caries_mes']=="1" || $row['caries_dis']=="1"  || $row['caries_buc']=="1"  || $row['caries_ling']=="1"){
                                                                        $fill28center="red";
                                                                    }
                                                                    if($row['comp_occ']=="1" || $row['comp_ling']=="1"){ 
                                                                        $fill28slice1="#3a018a";
                                                                    }
                                                                    if($row['comp_mes']=="1"){ 
                                                                        $fill28slice2="#3a018a";
                                                                    }
                                                                    if($row['comp_dis']=="1"){ 
                                                                        $fill28slice3="#3a018a";
                                                                    }
                                                                    if($row['comp_buc']=="1"){ 
                                                                        $fill28slice4="#3a018a";
                                                                    }
                                                                    if($row['amal_occ']=="1"  || $row['amal_ling']=="1"){ 
                                                                        $fill28slice1="#908d94";
                                                                    }
                                                                    if($row['amal_mes']=="1"){ 
                                                                        $fill28slice2="#908d94";
                                                                    }
                                                                    if($row['amal_dis']=="1"){ 
                                                                        $fill28slice3="#908d94";
                                                                    }
                                                                    if($row['amal_buc']=="1"){ 
                                                                        $fill28slice4="#908d94";
                                                                    }
                                                                    $pat="white";
                                                                    if($row['recur_occ']=="1" || $row['recur_ling']=="1"){ 
                                                                        $fill28slice1="url(#pattern-stripe28)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_mes']=="1"){ 
                                                                        $fill28slice2="url(#pattern-stripe28)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_dis']=="1"){ 
                                                                        $fill28slice3="url(#pattern-stripe28)";
                                                                        $pat="red";
                                                                    }
                                                                    if($row['recur_buc']=="1"){ 
                                                                        $fill28slice4="url(#pattern-stripe28)";
                                                                        $pat="red";
                                                                    } 
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="#" class="toothchart" data-toggle="modal" data-target="#ToothChart" data-id="<?=$id;?>_<?=$tid;?>_<?=$item['caseno'];?>_<?=$item['customer_id'];?>">
                                                                <svg viewBox="0 0 200 200">
                                                                    <pattern id="pattern-stripe28" 
                                                                        width="4" height="4" 
                                                                        patternUnits="userSpaceOnUse"
                                                                        patternTransform="rotate(90)">
                                                                        <rect width="1" height="4" transform="translate(0,0)" fill="<?=$pat;?>"></rect>
                                                                    </pattern>
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="<?=$fill28slice1;?>"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="<?=$fill28slice2;?>"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="<?=$fill28slice3;?>"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="<?=$fill28slice4;?>"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="<?=$fill28center;?>"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">28</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">48</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="48"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">47</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="47"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                             <a class="btn btn-info btn-sm text-white">46</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                           <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="46"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">45</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="45"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">44</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="44"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">43</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="43"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">42</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="42"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">41</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="41"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">31</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="31"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">32</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="32"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">33</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="33"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">34</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="34"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">35</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="35"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                             <a class="btn btn-info btn-sm text-white">36</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                           <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="36"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">37</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="37"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <a class="btn btn-info btn-sm text-white">38</a>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <br>
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="38"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16" style="border-bottom:1px solid black;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="16">&nbsp;</td>
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
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="85"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>                                                           
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">85</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="84"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">84</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="83"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">83</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="82"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">82</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="81"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">81</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="71"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">71</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="72"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">72</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="73"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">73</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="74"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">74</a>
                                                        </td>
                                                        <td width="2%" align="center">
                                                            <?php
                                                            if(count($chart)>0){
                                                                foreach($chart as $row){
                                                                if($row['tooth_id']=="75"){
                                                                    if($row['remarks']=="" || $row['remarks']=="OK"){
                                                                        $remark="&check;";
                                                                    }else{
                                                                        $remark=$row['remarks'];
                                                                    }
                                                                }else{
                                                                    $id="";
                                                                    $remark="&check;";
                                                                }
                                                            }
                                                            }else{
                                                                $remark="&check;";    
                                                            }                                                            
                                                            echo "<b>".$remark."<b>";
                                                            ?>
                                                            <br>
                                                            <a href="asdfasdf.html">
                                                                <svg viewBox="0 0 200 200">
                                                                    <path d="M100,100 L100,20 A80,80 0 0,1 180,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L180,100 A80,80 0 0,1 100,180 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L100,180 A80,80 0 0,1 20,100 Z" fill="#ffffff"/>
                                                                    <path d="M100,100 L20,100 A80,80 0 0,1 100,20 Z" fill="#ffffff"/>
                                                                    <!-- Clickable hole in the center -->
                                                                    <circle cx="100" cy="100" r="35" fill="#ffffff"/>
                                                                </svg>
                                                            </a>
                                                            <a class="btn btn-info btn-sm text-white">75</a>
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
                                        </div>
                                    </div>
                                </div>                     
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->                                                          