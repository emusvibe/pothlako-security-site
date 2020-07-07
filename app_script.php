<?php
//	error_reporting(0);
	require_once("dbConnection.php");
	if(isset($_POST['btn-submit'])){
		$name = $_POST['emplname'];
		$name = mysqli_real_escape_string($con,$name);
		$name = strip_tags($name);
		
		$empno = $_POST['emplnumber'];
		$empno = mysqli_real_escape_string($con,$empno);
		$empno = strip_tags($empno);
		
		$contact = $_POST['emplcontact'];
		$contact = mysqli_real_escape_string($con,$contact);
		$contact = strip_tags($contact);
		
		$email = $_POST['emplemail'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);
                
                $empsite = $_POST['emplsite'];
		$empsite = mysqli_real_escape_string($con,$empsite);
		$empsite = strip_tags($empsite);
                
                $empdate = $_POST['empldate'];
		$empdate = mysqli_real_escape_string($con,$empdate);
		$empdate = strip_tags($empdate);
                
                $type = $_POST['leave_type'];
		$type = mysqli_real_escape_string($con,$type);
		$type = strip_tags($type);

		$reason = $_POST['reason'];
		$reason = mysqli_real_escape_string($con,$reason);
		$reason = strip_tags($reason);
		
                $sdate = $_POST['leaveSdate'];
		$sdate = mysqli_real_escape_string($con,$sdate);
		$sdate = strip_tags($sdate);
                
                $edate = $_POST['leaveEdate'];
		$edate = mysqli_real_escape_string($con,$edate);
		$edate = strip_tags($edate);
                
                $dayst = $_POST['days_taken'];
		$dayst = mysqli_real_escape_string($con,$dayst);
		$dayst = strip_tags($dayst);
                
                $daysp = $_POST['days_paid'];
		$daysp = mysqli_real_escape_string($con,$daysp);
		$daysp = strip_tags($daysp);
                
                $daysunp = $_POST['days_unpaid'];
		$daysunp = mysqli_real_escape_string($con,$daysunp);
		$daysunp = strip_tags($daysunp);
                
                $addressOnleave = $_POST['address_during'];
		$addressOnleave = mysqli_real_escape_string($con,$addressOnleave);
		$addressOnleave = strip_tags($addressOnleave);
                
                $addifo = $_POST['message2'];
		$addifo = mysqli_real_escape_string($con,$addifo);
		$addifo = strip_tags($addifo);

$query0 = mysqli_query($con,"SELECT * FROM employees WHERE employee_number='$empno'")or die(mysqli_error());
    $count = mysqli_num_rows($query0);
    $row = mysqli_fetch_array($query0);

if ($count > 0){

   $sql=  mysqli_query($con,"insert into ps_leaves (emplname,emplnumber,emplcontact,emplemail,emplsite,empldate,leaveSdate,leaveEdate,reason,days_taken,days_paid,days_unpaid,address_during,message,leave_type,apply_date)
                                       values('$name','$empno','$contact','$email','$empsite','$empdate','$sdate','$edate','$reason','$dayst','$daysp','$daysunp','$addressOnleave','$addifo','$type',NOW())")or die(mysqli_error());
//    header("location:index.php$ref?w=Warning : Application Success");
//    $msg = 'Leave Application successfully submitted  Thank you';
//        header("location:index.php$ref?alert('$msg')");
    
  
   if ($sql)
  {
    ?>
    <script>
      alert('Leave Application successfully submitted  Thank you');
      window.location.href='index.php';
    </script>
    <?php 
  }   
    
    
    
}else{  
    $msg = 'sorry';
//    echo "<script>window.open(alert('$msg'),'_self') </script>"; 
header("location:index.php$ref?alert('$msg')");
        
//            	;
                }

		}
?>

