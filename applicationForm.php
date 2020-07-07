<?php
session_start();
include ('admin/send_mail.php');
$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
	$reg_user->redirect('../index.html');
}


if(isset($_POST['btn-submit']))
{
//Bring in post values

$position = $_POST['position_applied_for']; 
$surname = $_POST['surName'];
$firstName = $_POST['firstName'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$idnumber = $_POST['id_Number'];
$path    = 'admin/uploads/id_documents/';
$id_name = $path. $_FILES['id_doc']['name']; 
$filename = $_FILES['id_doc']['tmp_name'];
    
$maritalStatus = $_POST['maritalStatus'];
//Create a new date object
//$bday=new DateTime($birthdate);
$currentYear= date('Y-M-D');
$age=$currentYear- $birthdate;
//$age= $_POST['age'];
//        
$spouse = $_POST['spouse'];
$dependants = $_POST['dependants'];
$address = $_POST['address'];
$city = $_POST['city'];
$province = $_POST['province'];
$zipCode = $_POST['zipCode'];
$licence = $_POST['licence'];
$licenceCode = $_POST['licencecode'];
$mobile = $_POST['mobile'];
$homePhone = $_POST['home_Phone'];
$emailAddress = $_POST['emailAddress'];
$nxtofkin = $_POST['nxt_of_kin'];
$relationship = $_POST['relationship'];
$kincontacts = $_POST['nxt_of_kin_contacts'];


$highestQualificationPassed = $_POST['highestQualificationPassed'];
$nameOfSchool = $_POST['nameOfSchool'];
$schoolYearCompleted = $_POST['schoolYearCompleted'];
$schoolcertification = $_POST['school_Certification'];
$universityOrCollegeName = $_POST['universityOrCollegeName'];
$universitydiploma = $_POST['university_Diploma'];
$universityYearCompleted = $_POST['universityYearCompleted'];
$firearm = $_POST['firearm'];
$firearmyes = $_POST['own_firearm'];
$firearm_Serial  = $_POST['fire_Arm_Serial'];
$firearmMake = $_POST['fire_Arm_Make'];
$path1    = 'admin/uploads/cv_documents/';
$cv_name = $path1. $_FILES['cv_doc']['name']; 
$filename1 = $_FILES['cv_doc']['tmp_name'];


$siranumber = $_POST['sira_Number'];
$path2    = 'admin/uploads/psira_documents/';
$psira_name = $path2. $_FILES['psira_doc']['name']; 
$filename2 = $_FILES['psira_doc']['tmp_name'];
$siraRegdate = $_POST['sira_Reg_date'];
$siraContribution = $_POST['sira_Contribution'];
$siraOwing = $_POST['sira_Owing'];
$trainingCenterName = $_POST['trainingCenterName'];
$grade = $_POST['sira_grade'];


$appliedbefore = $_POST['applied_here_before'];
$SecurityExperience = $_POST['security_Experience'];
$drugtest = $_POST['drug_Test'];
$polygraph = $_POST['polygraph'];
$arrested = $_POST['been_arrested_before'];
$onbail = $_POST['onbail'];
$unionmember = $_POST['union_member'];
$uifbenefits = $_POST['uif_benefits'];
$unemploymentbenefits = $_POST['unemployment_benefits'];
$workedhereb4 = $_POST['you_worked_here_before'];
$when = $_POST['term_you_worked'];
$relativesworking = $_POST['relative_working_here'];
$who = $_POST['name_of_relative']; 
$Smoke = $_POST['do_you_smoke'];
$Smoketerm = $_POST['time_smoking'];
$Alcohol = $_POST['do_you_drink_alcohol'];
$Alcoholterm = $_POST['often_drinking_times'];
$attendingCourt = $_POST['attending_Court'];
$workAnywhere = $_POST['can_work_Anywhere'];
$workAnyShift = $_POST['can_work_AnyShift'];
$SalaryRequired = $_POST['salary_Required'];
$incidentReport = $_POST['incidentReport'];
$signDate = $_POST['signDate'];
$signDate2 = $_POST['sign_date'];    
     
$code = md5(uniqid(rand()));
$required;

              
//check for duplicates
$stmt = $reg_user->runQuery("SELECT * FROM $applicantTable WHERE emailAddress=:emailAddress");
	$stmt->execute(array(":emailAddress"=>$emailAddress));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

// regular expression for email check
 $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
for($i=1;$i<2;$i++){
        $ukey = "FBC-".strtoupper(substr(sha1(microtime().$i), rand(0,5),5));
//        $totalRecords = strtoupper(substr(sha1(microtime().$i), rand(0,5),5));
    }

            
$totalRec = $reg_user->lasdID();
$totalRecords = $totalRec;
$name_notification  = $firstName.$surname.'Is Applying for a'.$position.'Position';

(move_uploaded_file($filename,$id_name));
(move_uploaded_file($filename1,$cv_name));
(move_uploaded_file($filename2,$psira_name));
//(move_uploaded_file($filename,$input_name));

if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error' align='center'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>Applicant with the same Email is already Applied!  try again with diffrent Credentials
			  </div>
			  ";
         
	 }else if(preg_match($regex, $emailAddress)){ 
           
            if($reg_user->register($position,$firstName,$surname,$gender,$birthdate,$birthplace,$idnumber,$id_name,$maritalStatus,$age,$spouse,$dependants,
                    $address,$city,$province,$zipCode,$licence,$licenceCode,$mobile,$homePhone,$emailAddress,$nxtofkin,$relationship,$kincontacts,
                    $highestQualificationPassed ,$nameOfSchool,$schoolYearCompleted,$schoolcertification,$universityOrCollegeName,$universitydiploma,
                    $universityYearCompleted,$firearm,$firearmyes,$firearm_Serial,$firearmMake,$cv_name,$siranumber,$psira_name,$siraRegdate,$siraContribution,
                    $siraOwing,$trainingCenterName,$grade,$appliedbefore,$SecurityExperience,$drugtest,$polygraph,$arrested,$onbail,$unionmember,$uifbenefits,
                    $unemploymentbenefits,$workedhereb4,$when,$relativesworking,$who,$Smoke,$Smoketerm,$Alcohol,$Alcoholterm,$attendingCourt,$workAnywhere,
                    $workAnyShift,$SalaryRequired,$incidentReport,$signDate,$signDate2)){	
                              
               
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			
                        
			$subject = "Application Submitted Successfully";
                        $message = " Hello $firstName $surname,
 
                            <br /><br />
                            Your Application was submitted successfully  <br/>
                            you will be contacted for an Interview via this e-mail: $emailAddress 
                            or on this Number: $mobile 
                             <br/>
                             <br/>
                             <br/>

                        
                            Thank You, and Goodluck";
						
			$reg_user->send_mail($emailAddress,$message,$subject);	
//			$msg = "
//					<div class='alert alert-success'>
//						<button class='close' data-dismiss='alert'>&times;</button>
//						<strong>Success!</strong>  We've sent an email to $emailAddress.
//                        Please click on the confirmation link in the email to create your account. 
//			  		</div>
//					";
                                              
                        header("location:app_succesful.php$ref?w=Warning : Application Success");
                        
		}else
		{
			echo "sorry , Query could no execute...";
		}	
        }else{
                     $msg = "
		      <div class='alert alert-error' align='center'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong> You have entered an Invalid Email!  try again with a valid Email Address
			  </div>
			  ";
       } 
    
}


///===================================================
$dbh = null;


?>





<!DOCTYPE html>
<html>
	<head>
		<title>Pothlako | Security Services Application form</title>
		
		<!--<link type="text/css" rel="stylesheet" media="print" href="participantFormPrint.css" />-->
                <link href="css/bootstrap.min_4.css" rel="stylesheet" type="text/css"/>
                 <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
                 <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
                  <link href="css/wide.css" rel="stylesheet" type="text/css" data-name="layout"/>
                 <link href="css/animate.css" rel="stylesheet" type="text/css"/>
                 <link href="css/switcher.css" rel="stylesheet" type="text/css" media="screen"/>
                 <link href="css/cheda.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
<style type="logo/css">	
    logo{
			/*width:50%;*/
                        
			margin-left:auto;
			margin-right:auto;
                        width:auto;
                        height:auto;
		}
</style>
	<style type="text/css">		
		td{
			width:50%;
			vertical-align:middle;
			padding-right:5px;
			padding-left:5px;
			white-space:nowrap;
		}
		
		fieldset{
			width:50%;
			margin-left:auto;
			margin-right:auto;
		}
		
		textarea{
			overflow:auto;
		}
		
		legend{
			font-weight:bold;
		}
		
		.showPrint{
			display:none;
			
		}
		
		.hidePrint{
			display:inline;
		}
		
		h1, h2, h3, h4{
			margin:0px auto;
			font-weight:normal;
			text-align:center;
		}
		
		html{
			padding:0px;
			margin-top:0px;
		}
		
		ul{
			list-style:none inside none;
			padding:0px;

			margin:0px;
		}
		
		li{
			float:left;
			padding:6px;
		}
		
	</style>
        <br>
        <div class="logo" align="center">
         <img src="img/pothlako1.png" width="250" height="150"
                         alt="Pothlako Security logo"/>    
        </div><br>
       <?php if(isset($msg)) echo $msg;  ?>
	<h1><B>APPLICATION FOR EMPLOYMENT</B></h1>
	        
        <h4><strong>PLEASE COMPLETE THE FORM</strong></h4><br><br>

             

<!--	action="student_reg.php"-->
<form enctype="multipart/form-data" method="POST">
 
<fieldset class="step relative paper-shadow form-horizontal" data-z="2">
  <legend>SELECT POSITION YOU APPLYING FOR</legend>
    <div class="form-group">
     <ul aria-labelledby='legend-1' role='radiogroup'>
         
         <li>
         <label for="grade d">
          <input id="grade d" type="radio" name="position_applied_for" value="Security Officer ( Grade D )" required="">

            Security Officer ( <b>Grade D</b> )
          </label><br><br>
          <label for="grade c">
            <input id="grade c" type="radio" name="position_applied_for" value="Security Officer ( Grade C )">

            Security Officer ( <b>Grade C</b> )
          </label><br><br>
          <label for="grade b">
               <input id="grade b" type="radio" name="position_applied_for" value="Security Officer ( Grade B )">

            Security Officer (  <b>Grade B</b>)
           </label><br><br>
          <label for="grade a">
            <input id="grade a" type="radio" name="position_applied_for" value="Security Officer ( Grade A )">

            Security Officer ( <b>Grade A</b> )
          </label> <br>
      </li>
        <li>
          <label for="control room">
            <input id="control room" type="radio" name="position_applied_for" value="Control Room Operator">

            <b>Control Room Operator</b>
          </label><br><br>
            <label for="dog handler">
            <input id="dog handler" type="radio" name="position_applied_for" value="Dog Handler">

            <b>Dog Handler</b>
          </label><br><br>
             <label for="armed guard">
            <input id="armed guard" type="radio" name="position_applied_for" value="Armed Security Officer">

            <b>Armed Security Officer</b>
          </label><br><br>
           <label for="crime unit">
            <input id="crime unit" type="radio" name="position_applied_for" value="Crime Prevention Unit">

            <b>Crime Prevention Unit</b>
          </label><br>
        </li>
          <li>
          <label for="site supervisor">
            <input id="site supervisor" type="radio" name="position_applied_for" value="Site Supervisor">

            <b>Site Supervisor</b>
          </label><br><br>
            <label for="site manager">
            <input id="site manager" type="radio" name="position_applied_for" value="Site Manager">

            <b>Site Manager</b>
          </label> <br>
        </li>
          
</ul>        
 </div><br>
    
</fieldset>

      
<fieldset>
    <legend>PERSONAL DETAILS</legend>
    <table style="width:100%">
        
       <tr><td>               
             <div style="text-align:right;" id="surName"><span class="hidePrint">*</span> 
            Surname:</div></td><td><input type="text" name="surName" style="width:100%" maxlength="30" required=""/>
            </td></tr> 
        
        <tr><td>
             <div style="text-align:right;" id="firstName"><span class="hidePrint">*</span> 
            First Name:</div></td><td><input type="text" name="firstName" style="width:100%" maxlength="30" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="gender"><span class="hidePrint">*</span> 
            Gender:</div></td><td><input type="text" name="gender" style="width:100%" maxlength="6" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="birthdate"><span class="hidePrint">*</span> 
            Date of Birth:</div></td><td>
                <input type="date" class="form-control" id="datepicker" style="width:40%" placeholder="Date" name="birthdate" required = "">
               
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="birthplace"><span class="hidePrint">*</span> 
            Place of Birth:</div></td><td><input type="text" name="birthplace" style="width:100%" maxlength="30" required=""/>
            </td></tr>
        
       <tr><td>                
            <div style="text-align:right;" id="Idnumber"><span class="hidePrint">*</span> 
            ID No:</div></td><td><input type="text" name="id_Number" style="width:100%" maxlength="30" required=""/>
            </td></tr> 
        <tr><td>                
                    <div style="text-align:right;" id="passportOrIdDoc"><span class="hidePrint">*</span> 
                    Upload ID Copy:</div></td><td><input type="file" name="id_doc"  class="input-file uniform_on" id="fileInput"  required="">
                     <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    </td></tr>
        <tr><td>
            <div style="text-align:right;" id="maritalStatus"><span class="hidePrint">*</span> 
            Marital Status:</div></td><td><input type="text" name="maritalStatus" style="width:100%" maxlength="30" required=""/>
            </td></tr>
        
<!--        <tr><td>
              
            <div style="text-align:right;" id="age"><span class="hidePrint">*</span> 
            Age:</div></td><td>
                             <?php // if(isset($age)) echo $age->y;?>
                <input type="text" name="age" style="width:100%" maxlength="2" required=""/>
            </td></tr>-->
        
        <tr><td>
            <div style="text-align:right;" id="spouse"><span class="hidePrint">*</span> 
            Spouse Details(if any):</div></td><td><input type="text" name="spouse" style="width:100%" maxlength="30" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="dependants"><span class="hidePrint">*</span> 
            Dependants:</div></td><td><input type="text" name="dependants" style="width:100%" maxlength="2" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="address"><span class="hidePrint">*</span>
                Physical Address:</div></td><td><input type="text" name="address" style="width:100%" maxlength="40" required=""/>
            </td></tr>
        
         <tr><td>
            <div style="text-align:right;" id="city"><span class="hidePrint">*</span> 
                City:</div></td><td><input type="text" name="city" style="width:100%" maxlength="30" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="state"><span class="hidePrint">*</span> 
                Province:</div></td><td><input type="text" name="province" style="width:100%" maxlength="20" required=""/>
            </td></tr>
        
        <tr><td>
            <div style="text-align:right;" id="zipCode"><span class="hidePrint">*</span> 
                Postal Code:</div></td><td><input type="text" name="zipCode" style="width:100%" maxlength="5" required=""/>
            </td></tr>
        
         <tr><td>
            <div style="text-align:right;" id="drivers">
                Drivers Licence (yes/ no):</div></td><td>
                     <select name="licence" size="1" style="width:43%" required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                    <!--<input type="text" name="licence" style="width:100%" maxlength="3" required=""/>-->
            </td></tr>
        
           <tr><td>
            <div style="text-align:right;" id="driverscode">
                Drivers Licence Code:</div></td><td><input type="text" name="licencecode" style="width:40%" maxlength="5" required=""/>
            </td></tr>
           
             <tr><td>
            <div style="text-align:right;" id="mobile">
                Cell/ Mobile:</div></td><td><input type="text" name="mobile" style="width:100%" maxlength="15" required=""/>
            </td></tr>
         
       <tr><td>
            <div style="text-align:right;" id="homePhone"><span class="hidePrint">*</span> 
                Alternative Phone:</div></td><td><input type="text" name="home_Phone" style="width:100%" maxlength="15" required=""/>
            </td></tr> 
        
         <tr><td>					              
            <div style="text-align:right;" id="emailAddress"><span class="hidePrint">*</span> 
                Email Address:</div></td><td><input type="text" name="emailAddress" style="width:100%" maxlength="30" required=""/>
    </td></tr>
       
        <tr><td>              
            <div style="text-align:right;" id="nxtofkin"><span class="hidePrint">*</span> 
                Next of Kin:</div></td><td><input type="text" name="nxt_of_kin" style="width:100%" maxlength="6" required=""/>
            </td></tr>
        
       <tr><td>                
            <div style="text-align:right;" id="relationship"><span class="hidePrint">*</span> 
               Relationship:</div></td><td><input type="text" name="relationship" style="width:100%" maxlength="50" required=""/>
            </td></tr>
        <tr><td>                
            <div style="text-align:right;" id="contacts"><span class="hidePrint">*</span> 
               Next of Kin Contact Details:</div></td><td><input type="text" name="nxt_of_kin_contacts" style="width:100%" maxlength="16" required=""/>
            </td></tr>
        
       
</table><br>
</fieldset> 
   
    
<fieldset>
    <legend>ACADEMIC DETAILS</legend>
            <table style="width:100%"><tr><td>
                         <div style="text-align:right;" id="highestQualificationPassed"><span class="hidePrint">*</span> 
                         Highest Qualification Passed:</div></td><td><input type="text" name="highestQualificationPassed" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td>   
                      <div style="text-align:right;" id="nameOfSchool"><span class="hidePrint">*</span> 
                         Name of Secondary School:</div></td><td><input type="text" name="nameOfSchool" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td>                   
                       <div style="text-align:right;" id="schoolYearCompleted"><span class="hidePrint">*</span> 
                         Year Completed:</div></td><td>
                             <input type="date" class="form-control" id="datepicker" style="width:40%" placeholder="Start Date" name="schoolYearCompleted" required = "">
                             <!--<input type="text" name="schoolYearCompleted" style="width:100%" maxlength="30" required=""/>-->
                            </td></tr><tr><td>
                        <div style="text-align:right;" id="schoolcertification"><span class="hidePrint">*</span> 
                         Diploma / Certification Obtained:</div></td><td><input type="text" name="school_Certification" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td> 
                       <div style="text-align:right;" id="universityOrCollegeName"><span class="hidePrint">*</span> 
                        Name of University / Technikon:</div></td><td><input type="text" name="universityOrCollegeName" style="width:100%" maxlength="30" />
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="universitydiploma"><span class="hidePrint">*</span> 
                         Diploma / Certification Obtained:</div></td><td><input type="text" name="university_Diploma" style="width:100%" maxlength="30" />
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="universityYearCompleted"><span class="hidePrint">*</span> 
                         Year Completed:</div></td><td>
                             <input type="date" class="form-control" id="datepicker" style="width:40%" placeholder="Start Date" name="universityYearCompleted" />
                             <!--<input type="text" name="universityYearCompleted" style="width:100%" maxlength="30" required=""/>-->
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="firearm"><span class="hidePrint">*</span> 
                         Firearm Trained?</div></td><td>
                             <select name="firearm" size="1" style="width:44%" required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>>
                            </select>
                             <!--<input type="text" name="firearm" style="width:100%" maxlength="30" required=""/>-->
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="firearmyes"><span class="hidePrint">*</span> 
                         Do you Own one?</div></td><td>
                              <select name="own_firearm" size="1" style="width:44%" required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                             <!--<input type="text" name="own_firearm" style="width:100%" maxlength="30" required=""/>-->
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="firearmSN"><span class="hidePrint">*</span> 
                         if yes(Serial Number):</div></td><td><input type="text" name="fire_Arm_Serial" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="firearmMake">
                           if yes (Make):</div></td><td><input type="text" name="fire_Arm_Make" style="width:100%" maxlength="35" required=""/></td></tr>
                        <tr><td>                
                    <div style="text-align:right;" id="cvDoc"><span class="hidePrint">*</span> 
                    Upload Your CV:</div></td><td><input type="file" name="cv_doc"  class="input-file uniform_on" id="fileInput"  required="">
                     <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    </td></tr>
            </table><br>
</fieldset>

    
<fieldset>
    <legend>PSIRA DETAILS</legend>
            <table style="width:100%"><tr><td>
                         <div style="text-align:right;" id="siranumber"><span class="hidePrint">*</span> 
                         PSIRA Registration No:</div></td><td><input type="text" name="sira_Number" style="width:100%" maxlength="30" required=""/>
                            </td></tr>
                <tr><td>                
                    <div style="text-align:right;" id="psiraDoc"><span class="hidePrint">*</span> 
                    Upload PSIRA Copy:</div></td><td><input type="file" name="psira_doc"  class="input-file uniform_on" id="fileInput"  required="">
                     <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    </td></tr>
                <tr><td>   
                      <div style="text-align:right;" id="regdate"><span class="hidePrint">*</span> 
                         Date of reg:</div></td><td>
                             <input type="date" class="form-control" style="width:40%" id="datepicker" placeholder="Start Date" name="sira_Reg_date" required = "">
                             <!--<input type="text" name="sira_Reg_date" style="width:100%" maxlength="30" required=""/>-->
                            </td></tr><tr><td>                   
                       <div style="text-align:right;" id="contribution"><span class="hidePrint">*</span> 
                         Is your SIRA monthy contribution upto date?:</div></td><td><input type="text" name="sira_Contribution" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td>
                        <div style="text-align:right;" id="owing"><span class="hidePrint">*</span> 
                         if not how much owing:</div></td><td><input type="text" name="sira_Owing" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td> 
                       <div style="text-align:right;" id="trainingcenterName"><span class="hidePrint">*</span> 
                        Name of Training Centre:</div></td><td><input type="text" name="trainingCenterName" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td> 
                        <div style="text-align:right;" id="grade"><span class="hidePrint">*</span> 
                        Grade Obtained:</div></td><td><input type="text" name="sira_grade" style="width:100%" maxlength="30" required=""/>
                            </td></tr><tr><td> 

            </table><br>
</fieldset>
   
              
<fieldset>
        <legend>PRE-EMPLOYMENT QUESTIONNAIRE</legend>
        <table style="width:100%"><tr><td>
                     <div style="text-align:right;" id="appliedbefore"><span class="hidePrint">*</span> 
                      Have you ever applied before with our company?</div></td><td>
                          <!--<input type="text" name="applied_here_before" style="width:100%" maxlength="3" required=""/>-->
                          <select name="applied_here_before" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td>         
                 <div style="text-align:right;" id="SecurityExperience"><span class="hidePrint">*</span> 
                      Do you have Security Experience?</div></td><td>
                          <!--<input type="text" name="security_Experience" style="width:100%" maxlength="3" required=""/>-->
                          <select name="security_Experience" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="drugtest"><span class="hidePrint">*</span> 
                      Are you willing to submit to a drug test?(yes/ no)</div></td><td>
                          <!--<input type="text" name="drug_Test" style="width:100%" maxlength="3" required=""/>-->
                          <select name="drug_Test" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="polygraph"><span class="hidePrint">*</span> 
                     Are you willing to submit to a polygraph test?(yes/ no)</div></td><td>
                         <!--<input type="text" name="polygraph" style="width:100%" maxlength="3" required=""/>-->
                         <select name="polygraph" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td>
                    <div style="text-align:right;" id="arrestedb4"><span class="hidePrint">*</span> 
                     Have you ever been arrested or <br>Convicted of any Criminal Activity?(yes/ no)</div></td><td>
                         <!--<input type="text" name="been_arrested_before" style="width:100%" maxlength="3" required=""/>-->
                         <select name="been_arrested_before" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="onbail"><span class="hidePrint">*</span> 
                     Are you currently on bail?(yes/ no)</div></td><td>
                         <!--<input type="text" name="onbail" style="width:100%" maxlength="3" required=""/>-->
                         <select name="onbail" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="unionmember"><span class="hidePrint">*</span> 
                     Are you a union member?(yes/ no)</div></td><td>
                         <!--<input type="text" name="union_member" style="width:100%" maxlength="3" required=""/>-->
                         <select name="union_member" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="uifbenefits"><span class="hidePrint">*</span> 
                     Are you currently receiving/or have received workers <br>compensation benefits?(UIF/Provident Fund)(yes/ no)</div></td><td>
                         <!--<input type="text" name="uif_benefits" style="width:100%" maxlength="3" required=""/>-->
                         <select name="uif_benefits" size="1" required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="unemploymentbenefits"><span class="hidePrint">*</span> 
                     Are you currently receiving unemployment benefits?(yes/ no)</div></td><td>
                         <!--<input type="text" name="unemployment_benefits" style="width:100%" maxlength="3" required=""/>-->
                         <select name="unemployment_benefits" size="1" required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="workedhereb4"><span class="hidePrint">*</span> 
                     Have you ever worked for our company before?(yes/ no)</div></td><td>
                         <!--<input type="text" name="you_worked_here_before" style="width:100%" maxlength="3" required=""/>-->
                         <select name="you_worked_here_before" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="when"><span class="hidePrint">*</span> 
                      If yes, when?</div></td><td><input type="text" name="term_you_worked"  maxlength="30" required=""/>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="relativesworking"><span class="hidePrint">*</span> 
                     Do you have/or ever had any relatives working for us?(yes/ no) </div></td><td>
                         <!--<input type="text" name="relative_working_here" style="width:100%" maxlength="3" required=""/>-->
                         <select name="relative_working_here" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="who"><span class="hidePrint">*</span> 
                     If yes, who?</div></td><td>
                         <input type="text" name="name_of_relative" maxlength="30" required=""/>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="Smoke"><span class="hidePrint">*</span> 
                     Do you Smoke?(yes/ no)</div></td><td>
                         <!--<input type="text" name="do_you_smoke" style="width:100%" maxlength="3" required=""/>-->
                         <select name="do_you_smoke" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                     <div style="text-align:right;" id="Smoketerm"><span class="hidePrint">*</span> 
                     if yes (How long have you been smoking)</div></td><td>
                         <input type="text" name="time_smoking"  maxlength="30" required=""/>
                        </td></tr><tr><td> 
                     <div style="text-align:right;" id="Alcohol"><span class="hidePrint">*</span> 
                     Do you Drink Alcohol?(yes/ no)</div></td><td>
                         <!--<input type="text" name="do_you_drink_alcohol" style="width:100%" maxlength="3" required=""/>-->
                         <select name="do_you_drink_alcohol" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                     <div style="text-align:right;" id="Alcoholterm"><span class="hidePrint">*</span> 
                     if yes (How Often)</div></td><td>
                         <input type="text" name="often_drinking_times"  maxlength="30" required=""/>
                        </td></tr><tr><td> 
                     <div style="text-align:right;" id="attendingCourt"><span class="hidePrint">*</span> 
                     Are you currently attending any court case?(yes/ no)</div></td><td>
                         <!--<input type="text" name="attending_Court" style="width:100%" maxlength="3" required=""/>-->
                         <select name="attending_Court" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="workAnywhere"><span class="hidePrint">*</span> 
                     Are you prepared to work anywhere?(yes/ no)</div></td><td>
                         <!--<input type="text" name="can_work_Anywhere" style="width:100%" maxlength="3" required=""/>-->
                         <select name="can_work_Anywhere" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="workAnyShift"><span class="hidePrint">*</span> 
                     Are you prepared to work any Shift?(yes/ no)</div></td><td>
                         <!--<input type="text" name="can_work_AnyShift" style="width:100%" maxlength="3" required=""/>-->
                         <select name="can_work_AnyShift" size="1"  required="">
                            <option value=""></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            </select>
                        </td></tr><tr><td> 
                    <div style="text-align:right;" id="SalaryRequired"><span class="hidePrint">*</span> 
                     Salary Required per month?</div></td><td><input type="text" name="salary_Required"  maxlength="30" required=""/>
                        </td></tr><tr><td> 
    
        </table><br>
</fieldset>

<fieldset>
    <legend>PRE-EMPLOYMENT TEST</legend><p style="text-align:justify;">
        Please fill out the following scenario as to what you would do in the following situation:
You are on foot patrolling a car dealership. You notice a man wearing a white shirt, blue jeans, and red allstars. 
He has light brown hair and a tattoo on his arm. As you approach him you notice a pile of broken glass next to the car he 
is closest to.<br>
Please type a two-paragraph incident report on the events listed above and describe what you would do in this situation.</p>
        <table style="width:100%"><tr><td>
                <div style="text-align:right;" id="incidentReport"></div></td>
            </tr><tr><td colspan=2><textarea name="incidentReport" style="width:100%; height:100px;" required=""></textarea></td>
                        </tr><tr><td>

        </table><br>
</fieldset> 
    
<fieldset>
    <legend>PRE-EMPLOYMENT CHECKLIST</legend><p style="text-align:justify;">
THIS COMPANY IS AN EQUAL OPPORTUNITY EMPLOYER AND DOES NOT DISCRIMINATE BECAUSE OF RACE, RELIGION, COLOR, AGE, 
GENDER, NATIONAL ORIGIN, MARITAL STATUS, DISABILITY OR HANDICAP, VETERAN STATUS, SEXUAL ORIENTATION, OR ANY OTHER 
STATUS PROTECTED BY LAW. NO QUESTION ON THIS APPLICATION IS INTENDED TO SECURE INFORMATION TO BE USED FOR SUCH DISCRIMINATION.
 <br>
THIS IS NEITHER AN EMPLOYMENT CONTRACT NOR A GUARANTEE OF EMPLOYMENT. YOUR COMPLETED APPLICATION WILL BE MAINTAINED IN 
OUR ACTIVE FILES FOR THIRTY (30) DAYS FROM THE DATE OF APPLICATION. YOU MAY SUBMIT A NEW APPLICATION OR UPDATE YOUR CURRENT 
APPLICATION AT ANY TIME.</p>

<p style="text-align:justify;">1. If you require any special reasonable accommodation in completing this application, interviewing, completing 
any pre-employment testing, or otherwise participation in the employee selection process, please advise us. </p>

<p>2. Read all questions carefully. Please type your answers. </p>

<p>3. You will be required to pass a drug screening test as a condition of employment. </p>

<p style="text-align:justify;">4. You may be required, as a condition of employment, to complete Pothlako Security. Ethical Conduct, 
Confidentiality agreement, Patent assignment, and/or other pre-employment forms or agreements. </p>

<p style="text-align:justify;">5. The Company may request a consumer report or an Investigation consumer report as part of the application process. 
You must complete the "Fair Credit Reporting Act Disclosure and Authorization Statement", or other applicable 
disclosure/authorization statement, which will be provided to you with this application, in order to be considered for employment</p>

Should your application be success, you will be required to provide the following. 
<br><br>
1. 2x colour passport size photos. 
<br>
2. 2x Certified copies of ID and all your certificates e.g SOB, School, Firearm. 
<br>
3. Reference letter from your previous Employer. 
<br>
4. R50 for your Employee ID Card. 
<br><br>
</fieldset>    
     
<fieldset id="last">
    
         <div class="page-section-heading">
        <h2 class="text-h3 margin-v-0">Please read before Signing</h2>
    
    </div>
      <div class="form-group">
       
          <p style="text-align:justify;">This is to certify that I hereby SWEAR that the above information is true and correct.i hereby allow the 
              Pothlako Security and Cleaning Services CC to check my references and verify all details provided during the 
              first three months. Should any information of this information found to be false or wrong , Pothlako Security and Cleaning
              Services CC reserve the right to reject my application or dismiss me immediately if ever i am already employed</p>
            <p style="text-align:justify;">
              I understand that upon my successful application and employment i will be liable to pay 50% of the total 
              cost of Uniform. This amount will be deducted from my monthly renumeration until paid in full. And in the event 
              my employment contract is terminated the Company has all / full right to open a criminal case against me should i fail 
              to return the company uniform
             </p>   
                  
             <p style="text-align:justify;">  I understand that if my application id successful, my contract with Pothlako Security is dependent on the contract
               between Pothlako and its client.
               <br>
               Should the contract between Pothlako and its client be terminated, thus my services with Pothlako, I understand
               that this will not be regarded as retrenchment and will thus not be entitled to any retrenchment packages.
               <br><br>
               Should i complete 12 months with the company , i understand that i should apply fro my annual leave within 3 months
               period, Failure to submit my leave application to the HR Department, my leave day will be forfeited.
          </p><br>
          
          <label for="signDate" class="col-xs-4 control-label">I agree that i have read and understood the above </label>
                 <input type="checkbox" id="signDate" name="signDate" required>
     
           <br><br>
        <label for="sign-date" class="col-xs-4 control-label">Date:</label>
        <input type="date" style="width:50%" class="form-control" id="datepicker" placeholder="Current Date" name="sign_date" required = "">

      </div><br>
    <!--</div>-->
              
</fieldset>    
   

    <fieldset style="border:none;">
            <div style="float:right;" class="hidePrint">* - Required Fields</div>
             
            <div style="float:left;"><button class="btn btn-midium btn-primary" type="submit" name="btn-submit">SUBMIT</button></div>
    </fieldset>
		</form><br><br>
		
 

         <script type="text/javascript" src="js/jquery.js"></script>
        <script src="../admin/vendors/jquery-1.12.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
         <script src="../admin/vendors/modernizr-2.8.3-respond-1.4.2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		
		/*hu = window.location.search.substring(1);
		gy = hu.split("&");
		for (i=0;i<gy.length;i++) {
			var obj = document.getElementById(gy[i]);
			obj.style.color = 'red';
    <input class="hidePrint" style="text-align:center;" type="submit" value="Submit"></input>
		}*/
		
                /*----------------------------------------------------*/
        /*	Accordians
         /*----------------------------------------------------*/
        $('.accordion').on('shown.bs.collapse', function (e) {
            $(e.target).parent().addClass('active_acc');
            $(e.target).prev().find('.switch').removeClass('fa-plus');
            $(e.target).prev().find('.switch').addClass('fa-minus');
        });
        $('.accordion').on('hidden.bs.collapse', function (e) {
            $(e.target).parent().removeClass('active_acc');
            $(e.target).prev().find('.switch').addClass('fa-plus');
            $(e.target).prev().find('.switch').removeClass('fa-minus');
        });


        /*----------------------------------------------------*/
        /*	Toggles
         /*----------------------------------------------------*/
        $('.toggle').on('shown.bs.collapse', function (e) {
            $(e.target).parent().addClass('active_acc');
            $(e.target).prev().find('.switch').removeClass('fa-plus');
            $(e.target).prev().find('.switch').addClass('fa-minus');
        });
        $('.toggle').on('hidden.bs.collapse', function (e) {
            $(e.target).parent().removeClass('active_acc');
            $(e.target).prev().find('.switch').addClass('fa-plus');
            $(e.target).prev().find('.switch').removeClass('fa-minus');
        });
                
		</script>
     
<!--    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>  jQuery cookie 
    <script type="text/javascript" src="js/styleswitch.js"></script>  Style Colors Switcher 
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script> -->
    
    <script src="js/main.js" type="text/javascript"></script>
                
                
	</body>
</html>