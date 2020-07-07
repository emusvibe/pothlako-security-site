<?php
include('dbConnection.php');
if (isset($_POST['delete_payroll_staff'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($con,"DELETE FROM payroll_staff where payroll_staff_id='$id[$i]'");
}
header("location: payroll_staff.php");
}
?>