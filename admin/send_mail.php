<?php

require_once 'dbConnectionUtil.php';


class USER
{	

	private $conn;
	
        
        public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
        
 
        
	public function register(
        $position,$firstName,$surname,$gender,$birthdate,$birthplace,$idnumber,$id_name,$maritalStatus,$age,$spouse,$dependants,
        $address,$city,$province,$zipCode,$licence,$licenceCode,$mobile,$homePhone,$emailAddress,$nxtofkin,$relationship,$kincontacts,
        $highestQualificationPassed ,$nameOfSchool,$schoolYearCompleted,$schoolcertification,$universityOrCollegeName,$universitydiploma,
        $universityYearCompleted,$firearm,$firearmyes,$firearm_Serial,$firearmMake,$cv_name,$siranumber,$psira_name,$siraRegdate,$siraContribution,
        $siraOwing,$trainingCenterName,$grade,$appliedbefore,$SecurityExperience,$drugtest,$polygraph,$arrested,$onbail,$unionmember,$uifbenefits,
        $unemploymentbenefits,$workedhereb4,$when,$relativesworking,$who,$Smoke,$Smoketerm,$Alcohol,$Alcoholterm,$attendingCourt,$workAnywhere,
        $workAnyShift,$SalaryRequired,$incidentReport,$signDate,$signDate2
                ){
		try
		{
//move_uploaded_file($filename,"../admin/uploads/id_documents/$input_name");
$name_notification  = $firstName .' '. $surname.' Is Applying for a '.$position.' Position';
$stmt = $this->conn->prepare("INSERT INTO applicanttable(
    position_applied_for, surName, firstName, gender, birthdate, birthplace, id_Number,id_doc, maritalStatus, age, spouse, dependants, address, city,
    province, zipCode,licence, licencecode, mobile, home_Phone, emailAddress, nxt_of_kin, relationship, nxt_of_kin_contacts, highestQualificationPassed,
    nameOfSchool, schoolYearCompleted, school_Certification, universityOrCollegeName, university_Diploma, universityYearCompleted, firearm,
    own_firearm, fire_Arm_Serial, fire_Arm_Make, cv_doc,sira_Number, psira_doc,sira_Reg_date, sira_Contribution, sira_Owing, trainingCenterName, sira_grade, 
    applied_here_before, security_Experience, drug_Test, polygraph, been_arrested_before, onbail, union_member, uif_benefits, unemployment_benefits,
    you_worked_here_before, term_you_worked, relative_working_here, name_of_relative,
    do_you_smoke, time_smoking, do_you_drink_alcohol, often_drinking_times, attending_Court, can_work_Anywhere, can_work_AnyShift, salary_Required,
    incidentReport, signDate, sign_date,signupTime
    )VALUES (
    :position_applied_for, :surName, :firstName, :gender, :birthdate, :birthplace, :id_Number,:id_doc, :maritalStatus,:age, :spouse, :dependants, :address, :city,
    :province, :zipCode,:licence, :licencecode, :mobile, :home_Phone, :emailAddress, :nxt_of_kin, :relationship, :nxt_of_kin_contacts, :highestQualificationPassed,
    :nameOfSchool, :schoolYearCompleted, :school_Certification, :universityOrCollegeName, :university_Diploma, :universityYearCompleted, :firearm,
    :own_firearm, :fire_Arm_Serial, :fire_Arm_Make, :cv_doc,:sira_Number, :psira_doc,:sira_Reg_date, :sira_Contribution, :sira_Owing, :trainingCenterName, :sira_grade, 
    :applied_here_before, :security_Experience, :drug_Test, :polygraph, :been_arrested_before, :onbail, :union_member, :uif_benefits, :unemployment_benefits,
    :you_worked_here_before, :term_you_worked, :relative_working_here, :name_of_relative,
    :do_you_smoke, :time_smoking, :do_you_drink_alcohol, :often_drinking_times, :attending_Court, :can_work_Anywhere, :can_work_AnyShift, :salary_Required,
    :incidentReport, :signDate, :sign_date, NOW());
    
INSERT INTO hr_notification (applicant_id,notification, date_of_notification, link)
    VALUES ((SELECT LAST_INSERT_ID()),'$name_notification', NOW(), 'applications.php');
    
                                "); 
                                               
$stmt->bindParam(':position_applied_for' , $position );
$stmt->bindParam(':surName',$surname ); 
$stmt->bindParam(':firstName',$firstName); 
$stmt->bindParam(':gender',$gender); 
$stmt->bindParam(':birthdate',$birthdate); 
$stmt->bindParam(':birthplace',$birthplace);
$stmt->bindParam(':id_Number',$idnumber );
$stmt->bindParam(':id_doc',$id_name);
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
$stmt->bindParam(':nxt_of_kin_contacts',$kincontacts ); 

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
$stmt->bindParam(':cv_doc',$cv_name);

$stmt->bindParam(':sira_Number',$siranumber);
$stmt->bindParam(':psira_doc',$psira_name );
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
$stmt->bindParam(':sign_date' , $signDate2);
//$stmt->bindParam(':signupTime', date("Y-m-d H:i:s",time()));
//$stmt->bindparam(":active_code",$code);
//$stmt->bindParam(':notification' , $name_notification );
$stmt->execute();	
return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1)
			{
				if($userRow['userStatus']=="Y")
				{
					if($userRow['userPass']==md5($upass))
					{
						$_SESSION['userSession'] = $userRow['userID'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				}
				else
				{
					header("Location: index.php?inactive");
					exit;
				}	
			}
			else
			{
				header("Location: index.php?error");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	
	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
	}

        

function send_mail($emailAddress,$message,$subject)
{						
require_once('mailer/class.phpmailer.php');

$mail = new PHPMailer(true);// php mailer code starts

$mail->IsSMTP();// telling the class to use SMTP

$mail->SMTPAuth = true;   // enable SMTP authentication

$mail->Host = "mail.pothlakosecurity.co.za"; // sets GMAIL as the SMTP server

$mail->Port = 587; // set the SMTP port for the GMAIL server

$mail->Username = 'applications@pothlakosecurity.co.za';// set your username here

$mail->Password = 'chedaflame#24';

$mail->Subject = trim("Application Submission Successful");// set your subject

$mail->SetFrom('applications@pothlakosecurity.co.za', 'Pothlako Security Services');// sending mail from

$mail->AddAddress($emailAddress);// sending to

$mail->MsgHTML($message);// set the message

try {

  $mail->send();
         
} catch (Exception $ex) {

  echo $msg = $ex->getMessage();

}
	
}

}




