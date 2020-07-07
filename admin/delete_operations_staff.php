<?php
include('dbConnection.php');
if (isset($_POST['delete_operations_staff'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($con,"DELETE FROM operations_staff where operations_staff_id='$id[$i]'");
}
header("location: operations_staff.php");
}
?>
