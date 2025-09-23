<center>
    <div style="width:816px; font-family:Arial; font-size:13px;">
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">
        <tr>
            <td width="120"><img src='data:image/jpg;charset=utf8;base64,<?=base64_encode($setting['logo']);?>' alt="logo"  width="120"></td>
            <td width="5">&nbsp;</td>
            <td>
                <b style="font-size:20px;"><?=$setting['companyname'];?></b><br>
                <font style="text-transform:uppercase;"><?=$setting['address'];?></font><br>                
                MON-SAT: 9:00 AM - 5:00 PM<br>
                <?=$setting['contactno'];?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center" style="font-size:16px;"><b>ORTHODENTIC TREATMENT CONTRACT</b></td>
        </tr>
        </table>        
        <p align="justify">THE FOLLOWING IS AN AGREEMENT FOR ORTHODONTIC TREATMENT FOR:</p>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">
            <tr>
                <td width="6%">PATIENT:</td>
                <td style="border-bottom:1px solid black; text-indent:10px;"><b><?=$patient['firstname'];?> <?=$patient['lastname'];?></b></td>
                <td width="5%">DATE:</td>
                <td width="15%" style="border-bottom:1px solid black; text-indent:10px; "><b><?=date('m/d/Y',strtotime($item['datearray']));?></b></td>
            </tr>
        </table>
        <p align="justify"><b>***PLEASE READ CAREFULLY. FEEL FREE TO ASK ANY QUESTIONS ABOUT THE TREATMENT OR FINANCES.</b></p>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">
            <tr>
                <td><b>FEES:</b></td>                
            </tr>
            <tr>
                <td>THE TOTAL FEE FOR ORTHODENTIC TREATMENT IS: <u><?=number_format($item['total_fee'],2);?></u><td>
            </tr>
            <tr>
                <td style="text-indent:50px;">1. INITIAL FEE: <u><?=number_format($item['initial_fee'],2);?></u><td>
            </tr>
            <tr>
                <td style="text-indent:50px;">2. MONTHLY FEE: <u><?=number_format($item['monthly_fee'],2);?></u><td>
            </tr>
            <tr>
                <td align="justify">
                    THE INITIAL FEE IS DUE UPON INSTALLATION. THE MONTHLY DUE IS DUE A MONTH RIGHT AFTER THE DAY OF INSTALLATION. OFFICE POLICY REQUIRES THAT AN ACCOUNT HAVE NO OUTSTANDING BALANCE PRIOR TO THE REMOVAL OF APPLIANCES. THIS PAYMENT PLAN HAS BEEN DEVISED FOR YOUR CONVENIENCE THE FREQUENCY OF VISITS HAS NO BEARING ON THE PAYMENT SCHEDULE.  
                </td>
            </tr>
            <tr>
                <td><b>WHAT THIS COVERS:</b><td>
            </tr>
            <tr>
                <td style="padding-left:50px;" align="justify">
                    THE FEE FOR ORTHODONTICS SERVICES COVERS THE ACTIVE TOOTH MOVEMENT PHASE OR ORTHODONTIC TREATMENT. IT ALSO COVERS THE ORAL PROHYLAXIS UPON INSTALLATION OF ORTHODONTICS APPLIANCE.
                <td>
            </tr>
            <tr>
                <td><b>WHAT THIS NOT COVER:</b><td>
            </tr>
            <tr>
                <td style="padding-left:50px;" align="justify">
                    •	BROKEN APPOINTMENT WITHOUT 24 HOURS NOTICE
                <td>
            </tr>
            <tr>
                <td style="padding-left:50px;" align="justify">
                    •	LOST OR BROKEN APPLIANCES (e.g. BRACKETS, RETAINERS) UNPREDICTABLE GROWTH COMPLICATIONS REQUIRING EXTENDED TREATMENT
                <td>
            </tr>
            <tr>
                <td style="padding-left:50px;" align="justify">
                    •	ANY EXTENDED TREATMENT SUCH AS (TOOTH FILLING, TOOTH EXTRACTION, ROOT CANAL TREATMENT, PROSTHESIS, DENTAL APPLIANCE/S (ex. Retainers, Palatal Expander…), ORAL PROPHYLAXIS) DURING/AFTER TREATMENT. 
                <td>
            </tr>            
        </table>
        <p align="justify"><b>***CANCELLING DURING THE TREATMENT REQUIRES A FULL PAYMENT OF THE OUTSTANDING BALANCE.</b></p>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">       
        <tr>
            <td colspan="3" align="center" style="font-size:16px;"><b>ORTHODENTIC TREATMENT CONTRACT</b></td>
        </tr>
        </table> 
        <p align="justify">
            I understand that treatment of dental conditions pertaining to orthodontic treatment (straightening or repositioning of teeth) includes certain risks and potential unsuccessful result. Even though great care and diligence will be used in treatment, no promises or guarantees for desired results can be made nor expected.
        </p>
        <p align="justify">
            <b><u><i>The patient’s responsibility:</i></u></b> Once treatment has begun, each appointment must be attended as scheduled. Each delayed or missed appointment will prolong the time necessary to complete treatment: (which can never be precisely determined) and may create problems making it impossible to achieve the desired results. It is the patient’s responsibility to follow the brushing and oral hygiene instructions that are given, so that no harm will come to the teeth and surrounding tissues: to adhere to the list of food restrictions in order to keep from damaging the teeth and orthodontic appliances: to wear headgear, elastic and retainers, if they are necessary, so that treatment time will be as short as possible and so we can achieve the best results; and to visit the general dentist  <b>every month</b> for checkups and dental care during the course of treatment.
        </p>
        <table width="100%" border="1" cellspacing="0" style="border-collapse:collapse;font-size:13px;">
            <tr>
                <td width="35%" style="text-indent:10px;">LOST BRACKET/S</td>
                <td width="35%"></td>
                <td width="35%" style="text-indent:10px;">200 PHP PER BRACKET</td>
            </tr>
            <tr>
                <td width="35%" style="text-indent:10px;">DETACHED BRACKET/S OR BUCCAL TUBE</td>
                <td width="35%"></td>
                <td width="35%" style="text-indent:10px;">100 PHP PER BRACKET/BUCCAL TUBE</td>
            </tr>
            <tr>
                <td width="35%" style="text-indent:10px;">LOST BUCCAL TUBE</td>
                <td width="35%"></td>
                <td width="35%" style="text-indent:10px;">500 PHP PER BUCCAL TUBE</td>
            </tr>
        </table>
        <p align="justify">
            <b>There will be additional orthodontic charges</b> for replacement of appliances (such as retainers or brackets) that are lost or damaged due to repeated patient neglect, or any excessive extension of treatment due to lack of patient cooperation. <b>Also, as treatment progresses certain adjunctive appliances</b> may be necessary.
        </p>
        <p align="justify"><b>***Risks***</b></p>
        <p align="justify">
            All forms of medical and dental treatment, including orthodontics, have some risk and limitations. Fortunately, in orthodontic treatment complications are infrequent and, when they do occur, they are usually of minor consequence. Nevertheless, they should be considered when making the decision to undergo orthodontic treatment. The major risks involved in orthodontic treatment may include: 
        </p>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">            
            <tr>
                <td style="padding-left:50px;">1.	Decalcification (permanent marking), decay, or gum disease if patients do not brush their teeth properly during the treatment. Excellent oral hygiene and plaque control is a must. Sugary food and between-meal snacks should be avoided. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">2.	Smoking or chewing tobacco has been shown to increase the risk of gum disease and interferes with the healing after oral surgery. Tobacco users are also more prone to oral cancer, gum recession and delayed tooth movement during orthodontic treatment.  <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">3.	Teeth have a tendency to rebound to their original positions after orthodontic treatment. This is called relapse. In addition, teeth have a tendency to change their positions after treatment. This is usually only a minor change, and faithfully wearing your retainers generally reduces this tendency. Throughout life, the bite can change adversely from various causes, such as growth, eruption of wisdom teeth, or oral hygiene habits. After removing your braces, you will be provided with retainers to stabilize the result. Full co-operation in wearing these retainers is important. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">4.	Inflammation of the gums and loss of supporting bone can occur if bacterial plaque is not removed daily with good oral hygiene. If the health of the bone and gums is affected during orthodontic treatment, periodontal treatment may be needed. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">5.	In some cases, the root ends of the teeth are shortened during treatment. This is called root resorption. Root resorption also occurs in patients who do not undergo orthodontic treatment, and may also be caused by trauma, impaction, hormonal imbalances and other unidentified reasons. Usually, the resorption does not have any significant consequences to the patient’s long-term dental health, but gum disease in later life could reduce the longevity of the affected teeth.<td>
            </tr>
        </table>
        <br><br>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">            
            <tr>
                <td style="padding-left:50px;">6.	A tooth that has been traumatized from a deep filling, or even a previous accident, may have suffered nerve damage. These teeth can die over a long period of time, with or without orthodontic treatment. An undetected non-vital tooth may flare up during orthodontic treatment, requiring root canal treatment. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">7.	A significant portion of the population has problems with the joints of the lower jaw, the temporomandibular joints. Some of the common symptoms of these problems are popping in the joints, pain in the joints or surrounding structures in the head and neck, and headaches. These problems may occur with or without orthodontic treatment. They can originate from several different causes, and it is possible that the problem may become evident during orthodontic treatment. Any of these symptoms should be reported to your orthodontist immediately. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">8.	Sometimes orthodontic appliances may irritate or damage the oral tissues. The gums, cheeks and lips may be scratched or irritated by loose or broken appliances, or by blows to the mouth. You should inform us of any unusual symptoms, or broken or loose appliances, as soon as possible.<td>
            </tr>
            <tr>
                <td style="padding-left:50px;">9.	Sometimes oral surgery, such as tooth removal or orthogenetic surgery is necessary in conjunction with orthodontic treatment, especially to correct crowding or severe jaw imbalances. Risks involved with surgery and anesthesia should be discussed with your general dentist or oral surgeon before making a decision to proceed with any surgical treatment. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">10.	A typical formation of teeth or disproportionate growth of the jaws during or after treatment can cause the bite to change, requiring additional treatment and, in some cases, oral surgery. Growth disharmony and unusual tooth formations are biological processes beyond the orthodontist’s control. Unusual growth changes that occur after active orthodontic treatment may alter the quality of treatment results.<td>
            </tr>
            <tr>
                <td style="padding-left:50px;">11.	The total time required to complete treatment may exceed the original estimate. Excessive or deficient bone growth, poor co-operation in wearing elastics and removable appliances, poor oral hygiene, broken appliances and missed appointments can lengthen the treatment time and affect the quality of the treatment results. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">12.	In the case of patients and their parents requesting that treatment be terminated, no responsibility will be accepted by the orthodontist for possible later instability of the patient’s teeth or any other damage. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">13.	Due to the wide variation in the size and shape of teeth, achieving the ideal result may sometimes require restorative dental treatment. The most common types of treatment are cosmetic bonding, veneers, crowns and bridges. You are encouraged to ask questions regarding dental and medical care adjunctive to orthodontic treatment from the doctors who provide these services. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">14.	Occasionally, patients could be allergic to some of the component materials of the orthodontic appliances. This may require a change in the treatment plan or discontinuation of the treatment prior to completion.<td>
            </tr>
            <tr>
                <td style="padding-left:50px;">15.	General medical problems can affect the orthodontic treatment. You should keep us informed of any changes in your medical health. Orthodontic treatment does not take the place of regular check-ups. You will be expected to continue seeing your family dentist for regular six-monthly check-ups and routine care, unless you have been specifically advised that you need to be seen more frequently. <td>
            </tr>
            <tr>
                <td style="padding-left:50px;">16.	We will not be held liable for any damage to, or loss of, dental restorations, crown and bridge work, implants or prosthesis, either during or after orthodontic treatment.
As our practice is registered as a specialist practice – your medical aid will not reimburse basic dentistry codes or procedures such as prophylaxis (oral hygiene sessions / teeth cleaning), laser or TAD treatments, or building-up any teeth. We offer these services to our patients at a reduced fee. You will therefore be liable for a full upfront payment for these services and will possibly forfeit any refund from your medical aid.<td>
            </tr>
        </table>
        <p align="justify">
            <b><u><i>Termination of treatment</i></u>: it is understood that treatment can be terminated for failure to cooperate, missing appointments, not wearing appliances, excessive breakage, failure to keep financial commitments, relocation, personal conflicts or for any other reason the doctor feels necessary. If termination is necessary, the patient will be given ample time to locate another orthodontist to continue treatment or the braces will be removed.</b>
        </p>
        <p align="justify">
            I recognize that it is my responsibility to follow instructions completely and seek attention in a timely manner should any unexpected problems occur by informing this office immediately. I must explicitly follow any instructions, either written or oral, which have been given to me relating to this orthodontic treatment. I have been given the opportunity to ask any questions regarding the nature and purpose of orthodontic treatment and have received answer to my satisfaction. I have been given the alternative of seeking care with an orthodontic specialist. I do voluntary assume any and all possible risks, including risk of substantial harm, if any, which may be associated with any phase of this treatment in hopes of obtaining the desired potential results, which may or may not be achieved. 
        </p>
        <p align="justify">
            <b><i><u>Possible alternatives</u></i></b>
        </p>
        <p align="justify">
            For the vast majority of patients, orthodontic treatment is an elective procedure. One possible alternative to orthodontic treatment is no treatment at all. You could choose to accept your present condition and decide to live without orthodontic correction or improvement. Any specific alternatives to the orthodontic treatment have been discussed with you. 
        </p>
        <p align="justify">
            <b><i><u>Acknowledgement of informed consent</u></i></b>
        </p>
        <p align="justify">
            I hereby acknowledge that the major treatment considerations and potential risks of orthodontic treatment have been presented to me. I have read and understand this form, and also understand that there may be other problems that occur less frequently and are less severe. <b><i>Dr. Clark Kent A. Hermosilla</i></b> and his staff have presented information about the recommended orthodontic treatment and the information contained in this form. I also give my permission for the use of orthodontic records, including x-rays and photographs taken during the course of treatment, for the purposes of professional consultations, research, education, or publication in professional journals. 
        </p>
        <p align="justify">
            I hereby give consent to the doctors and staff of <b><i>Dr. Clark Kent A. Hermosilla</i></b> to provide orthodontic treatment for
        </p>
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">            
            <tr>
                <td width="12%">Patient Name:</td>
                <td style="border-bottom:1px solid black;"><?=$patient['firstname'];?> <?=$patient['lastname'];?></td>
                <td width="5%">Gender:</td>
                <td style="border-bottom:1px solid black;"><?=$patient['gender'];?></td>
            </tr>
        </table>
        
        <table width="100%" border="0" cellspacing="0" style="font-family:Arial;font-size:13px;">            
            <tr>
                <td width="26.5%" valign="bottom">Signature of patient/parent/guardian:</td>
                <td style="border-bottom:1px solid black;"><img src='<?=$item['signature'];?>' alt="logo"  width="100"></td>
                <td width="4.5%" valign="bottom">Date:</td>
                <td style="border-bottom:1px solid black;" valign="bottom"><?=date('m/d/Y',strtotime($patient['datearray']));?></td>
            </tr>
        </table>
    </div>
</center>