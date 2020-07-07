 <?php
 include('dbConnection.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($con,"update operations_staff set password = '$new_password' where operations_staff_id = '$session_id'")or die(mysql_error());
 ?>