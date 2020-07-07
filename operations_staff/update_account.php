<?php 

include('dbConnection.php');

  $id           = $_POST['id'];
  $name    = $_POST['emplname'];
  $empno    = $_POST['emplnumber'];
  $empdate    = $_POST['empldate'];
  $sdate    = $_POST['leaveSdate'];
  $edate    = $_POST['leaveEdate'];
  $dayst    = $_POST['days_taken'];
  $daysp    = $_POST['days_paid'];
  $daysunp    = $_POST['days_unpaid'];
  $contact    = $_POST['emplcontact'];
  $email    = $_POST['emplemail'];
  $addressOnleave    = $_POST['address_during'];
  $empsite    = $_POST['emplsite'];
  $reason    = $_POST['reason'];
  $addifo    = $_POST['message'];
  $type    = $_POST['leave_type'];
  $leave_status    = $_POST['leave_status'];
  
  $area_manager    = $_POST['area_manager'];
  $casual_reliever     = $_POST['casual_reliever'];
  $comment        = $_POST['comment'];
  $apply_date  = $_POST['apply_date'];
  
  
  $query0 = mysqli_query($con,"SELECT * FROM ps_employee_leaves WHERE leave_id='$id'")or die(mysqli_error());
    $count = mysqli_num_rows($query0);
    $row = mysqli_fetch_array($query0);
  
  if ($count > 0){
       ?>
    <script>
      alert('Data Saved Already');
      window.location.href='leave_applications.php';
    </script>
    <?php 
  } else {
      
   $sql = mysqli_query($con,"UPDATE ps_leaves SET area_manager='$area_manager', casual_reliever='$casual_reliever', comment='$comment' WHERE leave_id='$id'");

//  $sql = mysqli_query($con,"INSERT INTO  ps_employee_leaves SET area_manager='$area_manager', casual_reliever='$casual_reliever', comment='$comment' WHERE leave_id='$id'");
   $sql=  mysqli_query($con,"insert into ps_employee_leaves (leave_id,firstname,emplnumber,emplcontact,emplemail,emplsite,empldate,leaveSdate,leaveEdate,reason,days_taken,days_paid,days_unpaid,address_during,message,leave_type,apply_date,area_manager,casual_reliever,comment)
    values('$id','$name','$empno','$contact','$email','$empsite','$empdate','$sdate','$edate','$reason','$dayst','$daysp','$daysunp','$addressOnleave','$addifo','$type','$apply_date','$area_manager','$casual_reliever','$comment')")or die(mysqli_error());
  
  
  
  if ($sql)
  {
    ?>
    <script>
      alert('Account successfully updated.');
      window.location.href='leave_applications.php';
    </script>
    <?php 
  }
  else
  {
    echo "Invalid";
  } 
}
  
  
?>