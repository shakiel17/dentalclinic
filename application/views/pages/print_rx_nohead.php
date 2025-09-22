<div style="width:400px; border:0px solid black; float:right;">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial; font-size:12px;">
        <tr>            
            <td valign="top" align="center">
                <b style="font-size:20px; color:white;"><?=$setting['companyname'];?></b>
            </td>
        </tr>
    </table>   
    <hr size="3" color="white">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial; font-size:11px; color:white;">
        <tr>
                <td width="50%" valign="top">                
                Clinic Hours:<br> <b><?php
                    $clinic=explode(';',$setting['clinic_hours']);
                    echo $clinic[0]."<br>".$clinic[1];
                ?>
                </b>
            </td>
            <td><b>
                &#9742; <?=$setting['contactno'];?><br>
                <?=$setting['address'];?></b>
            </td>
        </tr>            
    </table>
    <hr size="3" color="white">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial; font-size:11px; font-weight:bold; color:white;">
        <tr>
            <td width="22%">Patient's Name:</td>
            <td style="border-bottom:1px solid white;"><?=$patient['lastname'];?>, <?=$patient['firstname'];?> <?=$patient['middlename'];?></td>
            <td>&nbsp</td>
            <td>Age: </td>
            <td style="border-bottom:1px solid white;">
                <?php
                    $birthdate= new DateTime($patient['birthdate']);
                    $today=new DateTime(date('Y-m-d'));
                    $age=$birthdate->diff($today)->y;
                    echo $age;
                ?>
            </td>  
            <td>&nbsp;</td>
            <!-- <td>Gender: </td>
            <td style="border-bottom:1px solid black;"><?=$patient['gender'];?></td> -->
        </tr>
    </table>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-family:Arial; font-size:11px; font-weight:bold; color:white;">
        <tr>
            <td>Address:</td>
            <td style="border-bottom:1px solid white;"><?=$patient['address'];?></td>
            <td>&nbsp;</td>
            <td>Date: </td>
            <td style="border-bottom:1px solid white;"><?=date('m/d/Y');?></td>
        </tr>
    </table>
    <br>
    <img src="<?=base_url('design/assets/images/rx.png');?>" width="30" style="margin-left:20px; position:absolute; display:none;">    
    <br>
    <table width="100%" border="0" >
        <?php
        foreach($items as $item){
            echo "<tr>";
                echo "<td width='50'>&nbsp;</td>";
                echo "<td>$item[description]</td>";
                echo "<td align='right'># $item[quantity]</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td width='50'>&nbsp;</td>";
                echo "<td align='center'>$item[route]</td>";
                echo "<td>$item[frequency]</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <div style="position:fixed; bottom:550;right:20;">
    <table width="100%" border="0" style="font-size:12px; font-family:Arial; color:white;" cellpadding="0" cellspacing="0">
        <tr>
            <td style="border-bottom:1px solid white;"></td>
        </tr>
        <tr>            
            <td><b>Clark Kent A. Hermosilla, DMD</b></td>
        </tr>
        <tr>
            
            <td align="center">License No.: <u>0058758</u></td>
        </tr>        
    </table>
    </div>
</div>