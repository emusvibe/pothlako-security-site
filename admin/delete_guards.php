<?php
include('dbConnection.php');
if (isset($_POST['delete_guards'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	 mysqli_query($con,"DELETE FROM guards where guard_id='$id[$i]'");
//	 mysqli_query($con,"DELETE FROM teacher_class_student where guard_id='$id[$i]'");
}
header("location: guards.php");
}
?>