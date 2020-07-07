<?php

require_once('dbConnectionUtil.php');

try{
	$dbh = new PDO("mysql:host=$host;dbname=$databaseName", "$adminName", $adminPassword);
} catch (PDOException $e) {
	die("Couldn't Connect to DB!: " . $e->getMessage() . "<br />");
}

//Bring in post values
$position = $_POST['position_applied_for']; 
$surname = $_POST['surname'];
$firstName = $_POST['firstName'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$birthplace = $_POST['birthplace'];
$idnumber = $_POST['id_Number'];
$maritalStatus = $_POST['maritalStatus'];
$age= $_POST['age'];
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
$contacts = $_POST['nxt_of_kin_contacts'];


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
$siranumber = $_POST['sira_Number'];
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
$required;

if(!$position 
        || !$surname 
        || !$firstName
        || !$gender
        || !$birthdate
        || !$birthplace
        || !$idnumber 
        || !$maritalStatus
        || !$age
        || !$spouse
        || !$dependants
        || !$address 
        || !$city 
        || !$province 
        || !$zipCode
        || !$licence
        || !$licenceCode
        || !$mobile 
        || !$homePhone
        || !$emailAddress
        || !$nxtofkin 
        || !$relationship
        || !$contacts 
        || !$highestQualificationPassed  
        || !$nameOfSchool 
        || !$schoolYearCompleted 
        || !$schoolcertification 
        || !$universityOrCollegeName
        || !$universitydiploma 
        || !$universityYearCompleted
        || !$firearm
        || !$firearmyes
        || !$firearm_Serial
        || !$firearmMake 
        || !$siranumber
        || !$siraRegdate 
        || !$siraContribution
        || !$siraOwing
        || !$trainingCenterName 
        || !$grade       
//        || !$appliedbefore
//        || !$SecurityExperience
//        || !$drugtest
//        || !$polygraph
//        || !$convicted 
//        || !$unionmember
//        || !$uifbenefits
//        || !$unemploymentbenefits 
        || !$workedhereb4
        || !$when 
        || !$relativesworking 
        || !$who 
        || !$Smoke
        || !$Smoketerm 
        || !$Alcohol
        || !$Alcoholterm
        || !$attendingCourt
        || !$workAnywhere
        || !$workAnyShift
        || !$SalaryRequired   
        || !$incidentReport 
          || !$signDate
        ) {
    
    
        $required = !$position ? $required                  . "Please Select a Position you appling for<br/>" : $required;
	$required = !$surname ? $required                   . "Surname is Required<br/>" : $required;
        $required = !$firstName ? $required                 . "First Name is Required<br/>" : $required;
        $required = !$gender ? $required                    . "Gender is Required<br/>" : $required;
        $required = !$birthplace ? $required                . "Birth Place is Required<br/>" : $required;
        $required = !$birthdate ? $required                 . "Birth Date is Required<br/>" : $required;
        $required = !$idnumber  ? $required                 . "ID Number is Required<br/>" : $required;
        $required = !$maritalStatus ? $required             . "Marital Status is Required<br/>" : $required;
        $required = !$age ? $required                       . "Age is Required<br/>" : $required;
        $required = !$spouse ? $required                    . "Spouse or Wife/ Husband names is Required<br/>" : $required;
        $required = !$dependants? $required                 . "Dependents is Required<br/>" : $required;
        $required = !$address ? $required                   . "Address is Required<br/>" : $required;
        $required = !$city ? $required                      . "City is Required<br/>" : $required;
	$required = !$province ? $required                  . "State is Required<br/>" : $required;
        $required = !$zipCode ? $required                   . "Zip Code is Required<br/>" : $required;
        $required = !$licence? $required                    . "Licence is Required<br/>" : $required;
        $required = !$licenceCode? $required                . "Licence is Required<br/>" : $required;
        $required = !$mobile ? $required                    . "Mobile Phone is Required<br/>" : $required;
        $required = !$homePhone ? $required                 . "Licence is Required<br/>" : $required;
	$required = !$emailAddress ? $required              . "Email Address is Required<br/>" : $required;
        $required = !$nxtofkin  ? $required                 . "Next of kin is Required<br/>" : $required;
	$required = !$relationship ? $required              . "Next of kin is Required<br/>" : $required;
        $required = !$contacts  ? $required                 . "Next of kin contacts  is Required<br/>" : $required;	
	$required = !$highestQualificationPassed ? $required . "Highest Qualification Passed is Required<br/>" : $required;
	$required = !$nameOfSchool ? $required              . "Name of School is Required<br/>" : $required;
	$required = !$schoolYearCompleted ? $required       . "School year Completed is Required<br/>" : $required;
        $required = !$schoolcertification ? $required       . "School Certification Name is Required<br/>" : $required;
        $required = !$universityOrCollegeName ? $required   . "University Name is Required<br/>" : $required;
        $required = !$universitydiploma  ? $required        . "Diploma Name is Required<br/>" : $required;
        $required = !$universityYearCompleted ? $required   . "University Year Completed is Required<br/>" : $required;
        $required = !$firearm ? $required                   . "Firearm Section is Required<br/>" : $required;
        $required = !$firearmyes ? $required                . "Firearm Section is Required<br/>" : $required;
        $required = !$firearm_Serial ? $required            . "Firearm Section is Required<br/>" : $required;
        $required = !$firearmMake  ? $required              . "Firearm Section is Required<br/>" : $required;
        $required = !$siranumber ? $required . "PSira Section is Required<br/>" : $required;
        $required = !$siraRegdate  ? $required . "PSira Section is Required<br/>" : $required;
        $required = !$siraContribution ? $required . "PSira Section is Required<br/>" : $required;
        $required = !$siraOwing ? $required . "PSira Section is Required<br/>" : $required;
        $required = !$trainingCenterName  ? $required . "PSira Section is Required<br/>" : $required;
        $required = !$grade? $required . "PSira Section is Required<br/>" : $required;
//        $required = !$appliedbefore ? $required . "Questionier Section is Required<br/>" : $required;
//	$required = !$SecurityExperience ? $required . "Questionier Section is Required<br/>" : $required;
//        $required = !$drugtest ? $required . "Questionier Section is Required<br/>" : $required;
//        $required = !$polygraph? $required . "Questionier Section is Required<br/>" : $required;
//        $required = !$convicted ? $required . "Questionier Section is Required<br/>" : $required;
//        $required = !$unionmember ? $required . "Questionier Section is Required<br/>" : $required;
//         $required = !$uifbenefits? $required . "Questionier Section is Required<br/>" : $required;
//        $required = !$unemploymentbenefits ? $required . "Questionier Section is Required<br/>" : $required;
        $required = !$workedhereb4 ? $required . "Questionier Section is Required<br/>" : $required;
        $required = !$when ? $required . "Questionier Section is Required<br/>" : $required;
        $required = !$relativesworking  ? $required . "Questionier Section is Required<br/>" : $required;
	 $required = !$who ? $required . "Questionier Section is Required<br/>" : $required;
	 $required = !$Smoke ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$Smoketerm  ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$Alcohol? $required . "Questionier Section is Required<br/>" : $required;
        $required = !$Alcoholterm ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$attendingCourt ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$workAnywhere ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$workAnyShift ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$SalaryRequired  ? $required . "Questionier Section is Required<br/>" : $required;
         $required = !$incidentReport ? $required . "Questionier Section is Required<br/>" : $required;
	 $required = !$signDate ? $required . "Questionier Section is Required<br/>" : $required;
	$required = $required . "<br/>Go back and fill in these fields.";
	//$required = "?".substr($required, 1);
	die($required);
}

//check for duplicates
$stmt = $dbh->prepare("SELECT * FROM $applicantTable WHERE firstName = :firstName AND surname = :surname");
$stmt->bindParam(':firstName', $firstName);
$stmt->bindParam(':surname', $surname);

if(!$stmt->execute()){
	die(" Attempt to Submit Application Failed once - Go back and try again.");
}

if(count($stmt->fetchAll()) > 0){
    header("location: application_submit_succesful.php$ref?w=Warning : Application Submitted");
	die(htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['surname']) ." you have already submitted your application!");
        echo "<a href='index.html'>Home</a><span><span><span>";
        echo "<a href='applicationForm.html'>Return to Application Form</a>";
}

$stmt = $dbh->prepare("SELECT * FROM $applicantTable");
if(!$stmt->execute()){
	die("Failed submit Application - Go back and try again.");
}
$totalRecords = count($stmt->fetchAll());
$totalRecords += 1;


$stmt = $dbh->prepare("INSERT INTO $applicantTable (
    applicantID, position_applied_for, surname, firstName, gender, birthdate, birthplace, id_Number, maritalStatus,age, spouse, dependants, address, city,
    province, zipCode,licence, licencecode, mobile, home_Phone, emailAddress, nxt_of_kin, relationship, nxt_of_kin_contacts, highestQualificationPassed,
    nameOfSchool, schoolYearCompleted, school_Certification, universityOrCollegeName, university_Diploma, universityYearCompleted, firearm,
    own_firearm, fire_Arm_Serial, fire_Arm_Make, sira_Number, sira_Reg_date, sira_Contribution, sira_Owing, trainingCenterName, sira_grade, 
    applied_here_before, security_Experience, drug_Test, polygraph, been_arrested_before, onbail, union_member, uif_benefits, unemployment_benefits,
    you_worked_here_before, term_you_worked, relative_working_here, name_of_relative,
    do_you_smoke, time_smoking, do_you_drink_alcohol, often_drinking_times, attending_Court, can_work_Anywhere, can_work_AnyShift, salary_Required,
    incidentReport, signDate, signupTime)
VALUES (
    :applicantID, :position_applied_for,:surname, :firstName, :gender, :birthdate, :birthplace, :id_Number, :maritalStatus,:age, :spouse, :dependants, :address,
    :city, :province, :zipCode,:licence, :licencecode, :mobile, :home_Phone, :emailAddress, :nxt_of_kin, :relationship, :nxt_of_kin_contacts, :highestQualificationPassed,
    :nameOfSchool, :schoolYearCompleted, :school_Certification, :universityOrCollegeName, :university_Diploma, :universityYearCompleted, :firearm,
    :own_firearm, :fire_Arm_Serial, :fire_Arm_Make,:sira_Number, :sira_Reg_date, :sira_Contribution, :sira_Owing, :trainingCenterName, :sira_grade, 
    :applied_here_before, :security_Experience, :drug_Test, :polygraph, :been_arrested_before, :onbail,:union_member, :uif_benefits, :unemployment_benefits,
    :you_worked_here_before, :term_you_worked, :relative_working_here, :name_of_relative,
    :do_you_smoke, :time_smoking, :do_you_drink_alcohol, :often_drinking_times, :attending_Court, :can_work_Anywhere, :can_work_AnyShift, :salary_Required,
    :incidentReport,:signDate,:signupTime)");
$stmt->bindParam(':applicantID', $totalRecords);                                                
$stmt->bindParam(':position_applied_for' , $position );
$stmt->bindParam(':surname',$surname ); 
$stmt->bindParam(':firstName',$firstName); 
$stmt->bindParam(':gender',$gender); 
$stmt->bindParam(':birthdate',$birthdate); 
$stmt->bindParam(':birthplace',$birthplace);
$stmt->bindParam(':id_Number',$idnumber );
$stmt->bindParam(':maritalStatus',$maritalStatus); 
$stmt->bindParam(':age',$age); 
$stmt->bindParam(':spouse',$spouse);
$stmt->bindParam(':dependants',$dependants); 
$stmt->bindParam(':address',$address ); 
$stmt->bindParam(':city',$city ); 
$stmt->bindParam(':province',$province ); 
$stmt->bindParam(':zipCode',$zipCode); 
$stmt->bindParam(':licence',$licence); 
$stmt->bindParam(':licencecode',$licenceCode); 
$stmt->bindParam(':mobile',$mobile ); 
$stmt->bindParam(':home_Phone',$homePhone); 
$stmt->bindParam(':emailAddress',$emailAddress);
$stmt->bindParam(':nxt_of_kin',$nxtofkin ); 
$stmt->bindParam(':relationship',$relationship); 
$stmt->bindParam(':nxt_of_kin_contacts',$contacts ); 

$stmt->bindParam(':highestQualificationPassed',$highestQualificationPassed );  
$stmt->bindParam(':nameOfSchool',$nameOfSchool ); 
$stmt->bindParam(':schoolYearCompleted',$schoolYearCompleted );
$stmt->bindParam(':school_Certification',$schoolcertification );
$stmt->bindParam(':universityOrCollegeName',$universityOrCollegeName);
$stmt->bindParam(':university_Diploma',$universitydiploma );
$stmt->bindParam(':universityYearCompleted',$universityYearCompleted);
$stmt->bindParam(':firearm',$firearm); 
$stmt->bindParam(':own_firearm',$firearmyes); 
$stmt->bindParam(':fire_Arm_Serial',$firearm_Serial); 
$stmt->bindParam(':fire_Arm_Make',$firearmMake );

$stmt->bindParam(':sira_Number',$siranumber); 
$stmt->bindParam(':sira_Reg_date',$siraRegdate ); 
$stmt->bindParam(':sira_Contribution',$siraContribution); 
$stmt->bindParam(':sira_Owing',$siraOwing); 
$stmt->bindParam(':trainingCenterName',$trainingCenterName );
$stmt->bindParam(':sira_grade',$grade ); 

$stmt->bindParam(':applied_here_before',$appliedbefore); 
$stmt->bindParam(':security_Experience',$SecurityExperience); 
$stmt->bindParam(':drug_Test',$drugtest); 
$stmt->bindParam(':polygraph',$polygraph); 
$stmt->bindParam(':been_arrested_before',$arrested );
$stmt->bindParam(':onbail',$onbail ); 

$stmt->bindParam(':union_member',$unionmember); 

$stmt->bindParam(':uif_benefits',$uifbenefits);
$stmt->bindParam(':unemployment_benefits',$unemploymentbenefits); 
$stmt->bindParam(':you_worked_here_before',$workedhereb4); 
$stmt->bindParam(':term_you_worked',$when );
$stmt->bindParam(':relative_working_here',$relativesworking ); 
$stmt->bindParam(':name_of_relative',$who ); 
$stmt->bindParam(':do_you_smoke',$Smoke); 
$stmt->bindParam(':time_smoking',$Smoketerm ); 
$stmt->bindParam(':do_you_drink_alcohol',$Alcohol); 
$stmt->bindParam(':often_drinking_times',$Alcoholterm);
$stmt->bindParam(':attending_Court',$attendingCourt); 
$stmt->bindParam(':can_work_Anywhere',$workAnywhere); 
$stmt->bindParam(':can_work_AnyShift',$workAnyShift);
$stmt->bindParam(':salary_Required',$SalaryRequired); 
$stmt->bindParam(':incidentReport',$incidentReport);
$stmt->bindParam(':signDate',$signDate);
$stmt->bindParam(':signupTime' , date("Y-m-d H:i:s",time()));

if(!$stmt->execute()){
	die("Attempt to submit Application Failed twice - Please check and fill in all required feilds - Go back and try again.");
}

echo "Thank you ". htmlspecialchars ($_POST['firstName']) . " " . htmlspecialchars($_POST['surname']) . " for your Time You have finished the online employment application. "
        . "We look forward to having you as part of our Team.<br/>";
echo "<a href='index.php'>Home</a>   ";
header("location: application_submit_succesful.php$ref?w=Warning : Application Success");
//echo "   <a href='registrationForm.html'>Register</a>";
$dbh = null;

?>
