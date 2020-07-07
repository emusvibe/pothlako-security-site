
<?php
include('dbConnection.php');
if (isset($_POST['delete_staff'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($con,"DELETE FROM admin_staff where staff_id='$id[$i]'");
}
header("location: admin_staff.php");
}
?>