<?php
include('dbConnection.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department_id = $_POST['department_id'];

$query = mysqli_query($con,"select * from payroll_staff where  firstname='$firstname' and lastname='$lastname' and department_id = '$department_id'")or die(mysql_error());
$row = mysqli_fetch_array($query);
$id = $row['payroll_staff_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($con,"update payroll_staff set username='$username',password = '$password', payroll_staff_status = 'Registered' where payroll_staff_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>